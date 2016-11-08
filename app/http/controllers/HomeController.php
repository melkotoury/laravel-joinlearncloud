<?php

namespace Learncloud\Http\Controllers;

use Illuminate\Http\Request;
use Learncloud\User;
use Learncloud\Points;
use Learncloud\Paycloud;
use Learncloud\Http\Requests;
use Learncloud\Http\Controllers\Controller;
use Illuminate\Cookie\CookieJar;
use Auth;
use Jenssegers\Agent\Agent;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Sale;
use Image;





class HomeController extends Controller
{

 ////////////////////////////////////////////////////////////////////////////////////////////////////   
    public function index($id=null,$code=null)
    {

        return \View::make('home')->with('id',$id)->with('code',$code);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getFeatures()
    {
        return view('features');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getProfile()
    {
        $agent = new \Agent();

        return view('profile')->with('agent',$agent);
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function buyPoints()
    {
        return view('buypoints');
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function congrats(Request $request,Paycloud $paycloud, Points $point)
    {
        
          $paypal = new \PayPal\Rest\ApiContext(

                  new \PayPal\Auth\OAuthTokenCredential(

                        'Aeuv64Ke3r6oNTv_fCpJ_sfbjdyuhvnmFMUCLmJ6cJjKaj5O4vo01cpIG23Vaz37_6tOo6w8POZOBNhw',
                        'EC2X_L9r-J_DlmjQ3iX0F5I2_FPLSAgC9n4H8wGu0XxXRq_5Twcb8F9_LrD82nXiBsFR_lAvKE66-XGl'

                    )
            );


           /**/


        if (!$request->get('success') || !$request->get('paymentId') || !$request->get('PayerID')) {
                
                       return redirect('home/buypoints');
        }

        if ((bool)$request->get('success') === false) {
                
                dd('Oops . Failure to pay again !!');
        }

        $paymentID = $request->get('paymentId');
        $payerID = $request->get('PayerID');


        $payment = Payment::get($paymentID,$paypal);

        $execute = new PaymentExecution();
        $execute->setPayerId($payerID);

        try {

            $result = $payment->execute($execute,$paypal);
            
        } catch (PayPal\Exception\PayPalConnectionException $e) {
            
            $data = json_decode($e->getData());
            echo $data->message;
            die();
        }

        $paycloud->payment_id    = $request->get('paymentId');
        $paycloud->payer_id      = $request->get('PayerID');
        $paycloud->payer_email   = $result->payer->payer_info->email;
        $paycloud->user_id       = Auth()->user()->id;
        $paycloud->save();

        $update_point = $point->where('user_id',Auth::user()->id)->first();
        $update_point->points = $update_point->points + (($result->transactions[0]->amount->total - 1) * 200);
        $update_point->save();


        return view('congrats');
      }

////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function facebookShare(Request $request)
    {
        if($request->ajax()){
           
            if(Auth::user()->shared != 1){

                $user = User::find(Auth::user()->id);
                $user->shared = 1;
                $user->save();

                $points_added = Points::where('user_id',Auth::user()->id)->first()->points + 1000;
                $points = Points::where('user_id',Auth::user()->id)->first();
                $points->user_id    = Auth::user()->id;
                $points->points     = $points_added;
                $points->save();

            }
            
             /* handle file_get_contents() ssl error */
            $arrContextOptions=array(
                 "ssl"=>array(
                             "verify_peer"=>false,
                             "verify_peer_name"=>false,
                        ),
                );  

            /* watermark  */
                 if (Auth::user()->facebook_id != 0) {
                    
                    $url  = 'http://graph.facebook.com/'.Auth::user()->facebook_id.'/picture';
                    $data = file_get_contents($url,false, stream_context_create($arrContextOptions)); 
                    }
                     else 
                     {
                     $data = Auth::user()->image_name;
                     }
                   
                
               if (strpos($data, url('/')) !== false) {
  
                  $data = public_path(str_replace(url('/'),'',$data));
           
               }
 
                

                $data = Image::make($data)->resize(238, 233);

                $direct_image = public_path('shared_images/share.jpg');
               
                $img  = Image::make($direct_image)
                                        ->resize(1300, 700)
                                        ->insert($data,'50','1011','292','60');

                
                $filename     = str_random(15).'.'.$img.'jpg';
                $path         = public_path('merged_images/store/'.$filename);

                $img->save($path);


                return $filename;
                
        }
    
        return redirect()->route('profile');

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function twitterShare(Request $request)
    {
        if($request->ajax()){
            
            if(Auth::user()->tweeted != 1){

                $user = User::find(Auth::user()->id);
                $user->tweeted = 1;
                $user->save();

                $points_added = Points::where('user_id',Auth::user()->id)->first()->points + 1000;
                $points = Points::where('user_id',Auth::user()->id)->first();
                $points->user_id    = Auth::user()->id;
                $points->points     = $points_added;
                $points->save();

            }
            
            return response()->json($request->all());
        }
    
        return redirect()->route('profile');

    }

////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    public function trackLink(CookieJar $cookieJar,Request $request , $id=null,$code=null)
    {

    if (User::where('id',$id)->where('referral_code',$code)->first()) {
            
            if(!$request->cookie('referrer')){
                 
                if (Points::where('user_id',$id)->first() == null) {
                    $points = new Points();
                    $points->user_id    = $id;
                    $points->points     = 1000;
                    $points->save();

                    }else{

                    $points_added   = Points::where('user_id',$id)->first()->points + 1000;
                    $invited_points = Points::where('user_id',$id)->first()->invited_points;
                    
                    $points = Points::where('user_id',$id)->first();  
                    $points->points          = $points_added;
                    $points->invited_points  = $invited_points + 1;
                    $points->save();

                }
        
                $cookieJar->queue(cookie('referrer', 'refer', 45000));

          }
        }

        if ($request->get('source') == 'twitter') {
           
           return redirect()->route('auth.twitter');

        }else{
           
           return redirect()->route('auth.facebook');

        }
        
    }
    
/////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function sendMail(Request $request)
    {

         $this->validate($request,[

            'email'=>'required|email',

            ]);


         return response()->json(['email'=>$request->email]);

    }

}
