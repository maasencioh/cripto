<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'root' && $password == '123') {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("location: formulario.php");
        }
        else {
            $error = "Your Login Name or Password is invalid";
            session_destroy();
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $error = $_GET['error'];
    }
?>
<html>
    <head>
        <title>Login Page</title>
        <style type = "text/css">
            body {
                font-family:Arial, Helvetica, sans-serif;
                font-size:14px;
            }
            label {
                font-weight:bold;
                width:100px;
                font-size:14px;
            }
            .box {
                border:#666666 solid 1px;
            }
        </style>
    </head>

    <body bgcolor = "#FFFFFF">
        <div align = "center">
            <div style = "width:300px; border: solid 1px #333333; " align = "left">
                <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
                <div style = "margin:30px">
                    <form action = "" method = "post">
                        <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                        <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                        <input type = "submit" value = " Submit "/><br />
                    </form>
                    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                </div>
            </div>
        </div>
    </body>
</html>
