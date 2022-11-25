<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HMS Login</title>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <style>
            body {
                background: #7935FF;
                height: 100%;
                margin:0px;
                font-family: Raleway-Regular, sans-serif;
            }
            h1, h2, h3, h4, h5, h6, a {
                margin:0; padding:10px;
            }
            .login {
                margin:0 auto;
                max-width:500px;
            }
            .login-header {
                color:#fff;
                text-align:center;
                font-size:300%;
            }
            .login-header h1 {
                text-shadow: 0px 5px 15px #000;
            }
            .login-form {
                background:#fff;
                border-radius:5px;
            }
            .login-form h3 {
                text-align:left;
                margin-left:35px;
                margin-top: 10px;
                color:#555555;
            }
            .login-form {
                box-sizing:border-box;
                padding-top:15px;
                margin:250px auto;
                text-align:center;
                overflow: hidden;
            }
            .login input[type="text"],
            .login input[type="password"] {
                width: 100%;
                max-width:400px;
                height:30px;
                font-family: 'Ubuntu', sans-serif;
                margin:10px 0;
                border-radius:5px;
                border:2px solid #f2f2f2;
                outline:none;
                padding-left:10px;
            }
            .login-form input[type="button"] {
                height:30px;
                width:100px;
                background:#fff;
                border:1px solid #f2f2f2;
                border-radius:20px;
                color: slategrey;
                text-transform:uppercase;
                font-family: 'Ubuntu', sans-serif;
                cursor:pointer;
            }
            .sign-up{
                color:#f2f2f2;
                margin-left:-400px;
                cursor:pointer;
                text-decoration:underline;
            }
            .no-access {
                color:#E86850;
                margin:20px 0px 20px -300px;
                text-decoration:underline;
                cursor:pointer;
            }
            .try-again {
                color:#f2f2f2;
                text-decoration:underline;
                cursor:pointer;
            }
            .button {
                align-self: left;
                background-color: #333333;
                border-radius: 25px;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin-right: 315px;
            }
            @media only screen and (min-width : 150px) and (max-width : 530px){
                .login-form h3 {
                    text-align:center;
                    margin:0;
                }
                .sign-up, .no-access {
                    margin:10px 0;
                }
                .login-button {
                    margin-bottom:10px;
                }
            }
        </style>
    </head>

    <body>
        <div class="login">
            <form action="function/login.php"" method="POST">
                <div class="login-form">
                    <h3>HOSPITAL MANAGEMENT LOGIN</h3>
                    <h3>User Email:</h3>
                    <input type="text" name="email" placeholder="Email"/><br>
                    <h3>Password:</h3>
                    <input type="password" name="password" placeholder="Password"/>
                    <br>
                    <button type="submit" value="submit" name="submit" class="button">Login</button>
                    <br><br>
                </div>
            </form>
        </div>
    </body>
</html>
