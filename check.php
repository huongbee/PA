<html>

<head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script>

	var post_id = 10;
	var dataShare = $.cookie('dataShare_'+post_id),isset=false;
	if(dataShare!=undefined) isset=true;
	$(document).ready(function(e) {
    if(isset){
		$('#videoYoutube').html('iframe Youtube');
	}
	$('#videoYoutubeIMG').on('click',function(){
		if(!isset){
			FB.ui({
				method: 'share',
				display: 'popup',
				//href: "{{ request()->fullUrl() }}",
				href: "<?php
				  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				  echo $actual_link;
				?>",
			}, function (response) {
				if (response) {
					$.cookie('dataShare_'+post_id,true,{ expires: 3, path: '/' });
		
					alert('Thank you for sharing!');
				} else {
					alert('You have cancelled the share.');
				}
			});
		}else {
			$('#videoYoutube').html('iframe Youtube');
		}
	});
});
</script>

<script type="text/javascript" packer="false">
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '143306442800868',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</head>
<body>

<div id="videoYoutube">
	<img id="videoYoutubeIMG" src="" alt="Share Facebook">
</div>
</body>
</html>
