<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        .login-container {
            margin-top: 5%;
            margin-bottom: 5%;
        }

        .login-form-1 {
            padding: 5%;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }

        .login-form-1 h3 {
            text-align: center;
            color: #333;
        }

        .login-form-2 {
            padding: 5%;
            background: #0062cc;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }

        .login-form-2 h3 {
            text-align: center;
            color: #fff;
        }

        .login-container form {
            padding: 10%;
        }

        .btnSubmit {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            border: none;
            cursor: pointer;
        }

        .login-form-1 .btnSubmit {
            font-weight: 600;
            color: #fff;
            background-color: #0062cc;
        }

        .login-form-2 .btnSubmit {
            font-weight: 600;
            color: #0062cc;
            background-color: #fff;
        }

        .login-form-2 .ForgetPwd {
            color: #fff;
            font-weight: 600;
            text-decoration: none;
        }

        .login-form-1 .ForgetPwd {
            color: #0062cc;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-8 login-form-1">
                <h3>Login for Form 1</h3>
                <form action="loginaction.php" method="POST">
                    <?php
                    if(isset($_GET["invalid"])) {
                    ?>
                    <div class="alert alert-warning">
                        Invalid Username or Password!
                    </div>

                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="pwd" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" name="gender" value="Male" checked>Male</label>
                        <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <select name="city" class="form-control" id="city">
                            <option value="ISB">Islamabad</option>
                            <option>Lahore</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Forget Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>