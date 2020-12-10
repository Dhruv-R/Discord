<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- the code below imports bootstrap into our program -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>flutter signup</title>
    </head>
    <style>
        body{
            overflow-x: hidden;

        }
        .main-content{
            width: 50%;
            height: 40%;
            margin: 10px auto;
            background-color: #fff;
            border: 2px solid #e6e6e6;
            padding: 40px 50px;
        }
        .header{
            border: #000;
            margin-bottom:5px;
        }
        #signup{
            width: 60%;
            border-radius: 30px;
        }
    </style>
    <body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <div style="text-align: center;">
                    <h1>Flutter</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                    <h3 style="text-align: center;"><strong>Join Flutter</strong></h3><hr>
                </div>
                <div class="l-part">
                    <!--where all the login and sign up is-->
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                            <input type="text" class = "form-control" placeholder="First Name" name = "first_name" required="required">
                        </div><br><!--gets first name from user-->
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                            <input type="text" class = "form-control" placeholder="last name" name = "last_name" required="required">
                        </div><br><!--gets last name from user-->
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock"></i>
                            </span>
                            <input  id="password"  type="password" class = "form-control" placeholder="password" name = "u_pass" required="required">
                        </div><br><!-- gets password from user-->
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-book"></i>
                            </span>
                            <input  id="email" type="text" class = "form-control" placeholder="Email" name = "u_mail" required="required">
                        </div><br><!-- gets email from user-->
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-chevron-down"></i>
                            </span>
                            <select class="form-control" name="u_country" required="required">
                                <option disabled>Select your country</option>
                                <option>United States</option>
                                <option>United Kingdom</option>
                                <option>India</option>
                                <option>France</option>
                                <option>China</option>
                                <option>Egypt</option>
                                <option>Italy</option>
                                <option>Yugoslavia (considered as one country)</option>
                                <option>Scandinavia (considered as one country)</option>
                                <option>Russia</option>
                            </select>
                        </div>
                        <div class="input-group">
                             <span class="input-group-addon">
                                <i class="glyphicon glyphicon-chevron-down"></i>
                            </span>
                            <select class="form-control input-md" name="gender" required="required">
                                <option disabled>Select your gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Prefer not to say</option>
                            </select>
                        </div>
                        <div class="input group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
                            <input type="date" class="form-control" placeholder="birthday" name="u_birthday" required="required">
                        </div>
                        <a style="text-decoration: none; float:right; color:#187FAB" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a>
                        <br><br><br>
                        <div align="center">
                            <button id="signup" class="btn btn-info btn-lg" name="sign_up">Sign Up</button>

                        </div>
                        <?php
                            include(insert_user.php);
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>