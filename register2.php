<?php

session_start();

//echo "<h1>Register</h1>";

//Variables for our registration form
$submit = $_POST['submit'];

//Registration form data
$fullname = strtolower(strip_tags($_POST['fullname']));
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
$repeatpassword = strip_tags($_POST['repeatpassword']);
$date = date("Y-m-d");


if(submit){
$connect = mysql_connect("host","root","");
					//select database
					mysql_select_db("github");
$namecheck = mysql_query("SELECT username FROM users WHERE username='$username'" );
$count = mysql_num_rows($namecheck);

if($count!=0)
{
die("Username already taken, please choose another");
}
					//check for existance
	if($fullname&&$username&&$password&&$repeatpassword)
	{	

		//check password
		if($password==$repeatpassword)
		{
			//check length of username and fullname
			if(strlen($username)>25||strlen($fullname)>25)
			{
				echo "Length of username or fullname is too long!";
			}
			else
			{
				//check password length
				if(strlen($password)>25||strlen($password)<6)
				{
					echo "Password must be between 6 and 25 characters";
				}
				else
				{

					//Register The User!

					//encrypt password
					$password = md5($password);
					$repeatpassword = md5($repeatpassword);

					//Connect to database
					$connect = mysql_connect("host","root","");
					//select database
					mysql_select_db("github");
					//Insert into users table
					$query = mysql_query("INSERT INTO users VALUES ('','$username','$password','$fullname','$date')");
					die("You have been successfully registered! <a href='index3.php'>Return to login</a>");

				}
			}
		}
		else
			echo "Your passwords do not match!";
	}
	else
		echo "Please fill in <strong>all</strong> fields!";
}
?>
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
    <meta property="og:url" content="http://bootsnipp.com/snippets/4ldn" />
    <meta itemprop="name" content="Sign Up">
    <meta itemprop="description" content="signup, login, user,  Bootstrap snippet by BhaumikPatel">
    <meta name="description" content="signup, login, user,  Bootstrap HTML CSS JS code snippet by BhaumikPatel">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@bootsnipp">
    <meta name="twitter:title" content="Sign Up">
    <meta name="twitter:description" content="signup, login, user,  Bootstrap HTML CSS JS code snippet by BhaumikPatel">
    <meta name="twitter:creator" content="@bootsnipp">
    <meta name="twitter:image:src" content="http://bootsnipp.com/img/screenshots/92f7cec1fea5c4ce7cf9f5bb704fdff692e85a8d.png ">
      <meta property="og:image" content="http://bootsnipp.com/img/logo.jpg" />
    <meta property="og:site_name" content="Bootsnipp.com" />
      <meta property="og:description" content="Awesome Bootstrap HTML CSS JS Snippet on Bootsnipp.com." />
      <meta name="author" content="Maks Surguy, @msurguy">
    <title> 
Viewing snippet Sign Up | Bootsnipp.com</title>
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
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
            <form action="register2.php" method="POST" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="fullname" placeholder="Full Name" type="text" value="<?php echo $fullname?>"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="username" placeholder="Username" type="text" value="<?php echo $username?>" required />
                </div>
            </div>
            <input class="form-control" name="password" placeholder="New Password" type="password" />
            <input class="form-control" name="repeatpassword" placeholder="New Password" type="password" />

                        <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                Female
            </label>
            <br />
            <br />
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="submit" name="submit">
                Sign up</button>
            </form>
        </div>
    </div>
</div>


</html>




<style>

body { padding-top:30px; }
.form-control { margin-bottom: 10px; }

</style> 
