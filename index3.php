<?php

require 'src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '131905006977034',
  'secret' => 'b1d75d8688935b916c9a189f897dfede',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
    $fullname2 = $user_profile['name']; 
    $username2 = $user_profile['username']; 

  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $statusUrl = $facebook->getLoginStatusUrl();
  $loginUrl = $facebook->getLoginUrl();
}

// This call will always work since we are fetching public data.
$naitik = $facebook->api('/naitik');

?>



      <?php if ($user) {

      
      $connect = mysql_connect("bookdemcom.ipagemysql.com","mussea","4shizzle");
					//select database
					mysql_select_db("github");
$namecheck = mysql_query("SELECT username FROM users WHERE username='$username2'" );
$count = mysql_num_rows($namecheck);

if($count!=0)
{
    header('Location: home.php');


}else {
$connect = mysql_connect("bookdemcom.ipagemysql.com","mussea","4shizzle");
					//select database
					mysql_select_db("github");
					//Insert into users table
					$query = mysql_query("INSERT INTO users VALUES ('','$username2','$password','$fullname2','$date')");
					die(header('Location: home.php')
);


    
    
    }
		  ?>


    <?php } else { ?>
    <?php } ?>
       

    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId: '131905006977034',
          cookie: true,
          xfbml: true,
          oauth: true
        });
        FB.Event.subscribe('auth.login', function(response) {
          window.location.reload();
        });
        FB.Event.subscribe('auth.logout', function(response) {
          window.location.reload();
        });
      };
      (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>
  </body>
</html>

  
  
  
  
  
  
  
  
  
  
  <!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">
  <head>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="msvalidate.01" content="36A28D9109C077BA3E623651FC1656F4" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="fb:admins" content="19908503" />
    <meta property="fb:app_id" content="112989545392380" /> 
    <meta property="og:title" content="HTML Snippets for Twitter Boostrap framework : Bootsnipp.com" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://bootsnipp.com/snippets/2X0r" />
    <meta itemprop="name" content="Login &amp; Signup forms in panel">
    <meta itemprop="description" content="login, forms, panel, registration,  Bootstrap snippet by calvinko">
    <meta name="description" content="login, forms, panel, registration,  Bootstrap HTML CSS JS code snippet by calvinko">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@bootsnipp">
    <meta name="twitter:title" content="Login &amp; Signup forms in panel">
    <meta name="twitter:description" content="login, forms, panel, registration,  Bootstrap HTML CSS JS code snippet by calvinko">
    <meta name="twitter:creator" content="@bootsnipp">
    <meta name="twitter:image:src" content="http://bootsnipp.com/img/screenshots/2db464d97cbad6d7bf3e97766d4c032c76830995.png ">
      <meta property="og:image" content="http://bootsnipp.com/img/logo.jpg" />
    <meta property="og:site_name" content="Bootsnipp.com" />
      <meta property="og:description" content="Awesome Bootstrap HTML CSS JS Snippet on Bootsnipp.com." />
      <meta name="author" content="Maks Surguy, @msurguy">
    <title> 
Viewing snippet Login &amp; Signup forms in panel | Bootsnipp.com</title>
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-144x144-precomposed.png">
    <link rel="alternate" type="application/rss+xml" title="Latest snippets from Bootsnipp.com" href="http://bootsnipp.com/feed.rss" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://bootsnipp.com/css/bootsnipp.css?ver=f63163cdb1493c95a036f8830d0132c5">
    <link rel="stylesheet" href="http://bootsnipp.com/css/ladda-themeless.min.css">
<style type="text/css">
    #playground-container{
        margin-top:10px; 
        height:500px;
        overflow:scroll;
        -webkit-overflow-scrolling:touch;
    }

    #preview-container{
        border-top: 2px solid #CCC;
        border-bottom: 2px solid #CCC;
        width: 100%;
        height: 100%;
    }

    .preview-iframe{
        border:0;
        width: 100%;
        height: 100%;
    }


    .playground-editor { 
        border: 0;
        padding: 0;
        top: 0;
        /*left: 0;*/
        width: 100%;
        height: 500px;
        border: 2px solid #CCC;
        border-radius:5px;
        position: absolute !important;
        display: none;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
</style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34731274-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script type="text/javascript">
    var fb_param = {};
    fb_param.pixel_id = '6007046190250';
    fb_param.value = '0.00';
    (function(){
      var fpw = document.createElement('script');
      fpw.async = true;
      fpw.src = '//connect.facebook.net/en_US/fp.js';
      var ref = document.getElementsByTagName('script')[0];
      ref.parentNode.insertBefore(fpw, ref);
    })();
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6007046190250&amp;value=0" /></noscript>
  </head>
      <body background="http://farm1.staticflickr.com/105/299284167_2bdfe9442e_o.jpg">

    
    
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        
                        
                        
                        
                        
                        
                        
                        
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        <form action = 'login2.php'id="loginform" class="form-horizontal" role="form" method = 'POST'>
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                    <input   class="btn btn-success" id="btn-login" name="submit" type="submit" value="Login">

      <fb:login-button>Login in with Facebook</fb:login-button>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="register2.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    </body>
</html>
    
