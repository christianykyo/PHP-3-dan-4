<html>

<head>
    <title>Fangirl</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
			color: #fff;
			background: linear-gradient( pink, purple);
		}

        .form-control {
            min-height: 41px;
            background: #fff;
            box-shadow: none !important;
            border-color: #e3e3e3;
        }

        .form-control:focus {
            border-color: #70c5c0;
        }

        .form-control,
        .btn {
            border-radius: 5px;
        }

        .login-form {
            width: 400px;
            margin: 0 auto;
            padding: 100px 0 30px;
        }

        .login-form form {
            color: #7a7a7a;
            border-radius: 2px;
            margin-bottom: 15px;
            font-size: 13px;
            background: #ececec;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
            padding: 30px;
            position: relative;
        }

        .login-form h2 {
            font-size: 22px;
            margin: 35px 0 25px;
        }

        .login-form .avatar {
			position: absolute;
			margin: 0 auto;
			left: 0;
			right: 0;
			top: -50px;
			width: 95px;
			height: 95px;
			border-radius: 30%;
			background: pink;
			padding: 15px;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4);
		}

		.login-form .avatar img {
			width: 100%;
		}

        .login-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: pink;
            border: none;
            margin-bottom: 20px;
        }

        .login-form .btn:hover,
        .login-form .btn:focus {
            background: pink;
            outline: none !important;
        }

        .login-form a {
            color: #fff;
            text-decoration: underline;
        }

        .login-form a:hover {
            text-decoration: none;
        }

        .login-form form a {
            color: #7a7a7a;
            text-decoration: none;
        }

        .login-form form a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-form">
        <form action="PHP Tugas 1.php" method="post">               
            <div class="form-group">
                <?php
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $u = "fangirl_ch@gmail.com";
                $p = "chris";
                if ($user == "$u" && $pass == "$p") {
                    echo "<h3>Login Berhasil</h3>";
                } else {
                    echo "<h3>Login Gagal, Silahkan Log Out</h3>";
                }
                ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger" action="Log In.php">Log Out</button>
            </div>
        </form>
    </div>
</body>

</html>