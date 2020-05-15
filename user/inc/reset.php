<?php

    //The password reset form
    require 'db.php';
    session_start();

    //make sure user email and hash is not empty
if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) ) {
    $email = $mysqli->escape($_GET['email']);
    $hash = $mysqli->escape($_GET['hash']);

    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash' ");

    if ($result->num_rows == 0) {
        $_SESSION['message'] = "You have entered invalid URL for password reset";
        header("location: error.php");
    }

}
else{
    $_SESSION['message'] = "Sorry Verification failed, try again!";
        header("location: error.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Reset Password | Crypto Trade</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom Css -->
    <link href="../inc/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="../index.php">Crypto<b>Trade</b></a>
            <small>We guarantee fast transaction processing and the best bitcoin rates.</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="reset_password.php">
                    <div class="msg">Choose your new password</div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Confirm New Password" required>
                        </div>
                    </div>


                    <div class="row">
                   
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="login">APPLY</button>
                        </div>
                    </div>
                    


                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../js/bootstrap.min.js"></script>

    <!--RECAPTCHA-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src="examples/sign-in.js"></script>
</body>

</html>