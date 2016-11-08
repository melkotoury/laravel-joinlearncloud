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
				 $.ajax({
				      url: base_url+"/merg/image/"+$(this ).find("input").val(),
				      success: function(data){
				       		FB.ui({ 
									method: 'share',
									// href:"https://it-geeks.co",
									href: base_url,
									// picture: "http://it-geeks.co/learn-cloud/public/merg/image/Bill.jpg",
									picture: base_url+"/image_merge/store/"+data,
									caption: $(this).children('.name').children('h4').text() + " "+ $(this).children('.name').children('h5').text(),
									// description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",

								}, function(response){
									console.log(response);
								});
				      	}
			    });

				});

			$('#sendemail').click(function(event) {
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

			});

			$('.item').children('img').click(function(event) {
				var name = $(this).next().children('h4').text();
				var job  = $(this).next().children('h5').text();
				$('#want-be').empty();
				$('#want-be').text(name + "”") ;
			});
		});

