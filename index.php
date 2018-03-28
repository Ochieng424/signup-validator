<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 12/6/2017
 * Time: 6:22 PM
 */

?>

<html>
<head>
    <title>Pawazone | sign up</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/font-awesome-4.7.0/css/font-awesome.css">
    <style type="text/css">
        .error{
            color: red;
        }

        .valid{
            border: 1px solid green;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-faded" style="opacity: 0.9;">
    <div class="navbar-text"><span class="text-success" style="font-family: roboto-bold; font-size: 150%;"> Pawazone </span></div>
</nav>

<div class="container-fluid" style="background-color: #dfe3ee;">
    <div class="row">

        <div class="col-lg-4 col-md-5 col-sm-7 col-xm-12"
             style="margin: 70px auto; padding: 10px 50px 50px 50px; background-color: rgba(255, 255, 255, .9); border-radius: 5px;">
            <div class="text-center" style="margin-bottom: 20px;">
                <span class="text-info animated infinite rubberBand" style="font-family: roboto-bold; font-size: 160%;">Sign Up</span>
            </div>
            <div class="text-center">
                <form id="sign_up">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="first_Name" id="first_Name"
                                       placeholder="First Name" style="margin-bottom: 5px;">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="last_Name" id="last_Name"
                                       placeholder="Last Name" style="margin-bottom: 5px;">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="@Username">
                    </div>

                    <div class="form-group text-left">
                            <input type="radio" class="custom-radio" name="gender" id="gender" style="margin-right: 5px;"><span
                                    style="margin-right: 20px;">Male</span>
                            <input type="radio" class="custom-radio" name="gender" id="gender" style="margin-right: 5px;"><span>Female</span>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="reg_number" id="reg_number"
                               placeholder="Registration No.">
                    </div>

                    <div class="lead text-gray-dark text-left"><b>Birth Date</b></div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="dateOfBirth" id="dateOfBirth">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                               placeholder="Confirm Password">
                    </div>

                    <div class="input-group text-center" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-info" name="submit" style="width: 100%;"><i
                                    class="fa fa-check" style="margin-right: 5px;"></i><span style="font-family: roboto-medium;"> SIGN
                            UP</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script src="jquery-3.2.1/jquery-3.2.1.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="javascript/jquery.validate.js" type="text/javascript"></script>
<script src="javascript/main_script.js"></script>
</html>
