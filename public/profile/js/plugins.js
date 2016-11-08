  		$(window).load(function() {
			/* Act on the event */

			var base_url = $("#base_url").val();
			$("body")
			.on("copy", "#copy", function(/* ClipboardEvent */ e) {
				e.clipboardData.clearData();
				e.clipboardData.setData("text/plain", $(this).data("zclip-text"));
				e.preventDefault();
			});

			$('.item').click(function(event) {
				
				var choosed = $(this).find('h4').html();

				 $.ajax({
				      url: base_url+"/merged/images/"+$(this ).find("input").val(),
				      method:'get',
				      success: function(data){

				      		console.log(data);

				       		FB.ui({ 
                                    method: 'feed',
                                    display: 'popup',
                                    mobile_iframe: true,
                                    name: 'Congrats Me : I Will Be The Next '+choosed,
									link:base_url,
									picture: base_url+"/merged_images/store/"+data,
								//	caption: $(this).children('.name').children('h4').text() + " "+ $(this).children('.name').children('h5').text(),
								//	caption: 'LearnCloud',
								    description: 'LearnCloud is the first artificial intelligence platform that can understand you, guide you,make you succeed in ways you never thought possible. it will ensure that you have full understanding of your craft and you will be on the road to success!',

								}, function(response){
								});
				      	}
			    });

				});

		



			

	      /*$('#sendemail').click(function(event) {
				$.ajax({
					url: base_url+'/sendemail/' + $('#recivedemail').val(),
					type: 'POST',
				})
				.done(function(data) {
					$('#emailerror').empty();
					if(data == 'error'){
						$('#emailerror').text('Please write a valid email!!');
						$('#emailerror').attr('style', 'color:red');
					}
					else
					{

						$('#emailerror').text('The email has been sent successfuly :D');
						$('#emailerror').attr('style', 'color:green');
					}
				})
				.fail(function() {
					$('#emailerror').empty();
					$('#emailerror').text('Please write a valid email!!');
					$('#emailerror').attr('style', 'color:red');
				})
				.always(function(data) {
					console.log(data);
				});

			});*/

			$('.item').children('img').click(function(event) {
				var name = $(this).next().children('h4').text();
				var job  = $(this).next().children('h5').text();
				$('#want-be').empty();
				$('#want-be').text(name + "”") ;
			});
		});

