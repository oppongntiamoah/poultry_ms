<?php
    session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Success | Crypto Trade</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Css -->
    <link href="../inc/style.css" rel="stylesheet">
    <link href="../Dashboard/assets/adminlte.css" rel="stylesheet">
</head>


<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="../index.php">Crypto<b>Trade</b></a>
            <small>We guarantee fast transaction processing and the best bitcoin rates.</small>
        </div>
        <div class="card card-info">
            <div class="body">
                  
                  <div class="card-header">
                    <h1 class="card-title">Success</h1>
                  </div>

                    <p>
                        <?php
                            if (isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                                echo $_SESSION['message'];
                           else:
                           // header("location: ../index.php");
                            endif;
                        ?>
                    </p>
                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="../inc/sign-in.php">Sign In!</a>
                    </div>
                
            </div>
        </div>
    </div>

       <!-- Jquery Core Js -->
    <script src="../../js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>