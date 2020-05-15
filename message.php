<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        
        .msg {
                    margin: 5px auto;
                    border-radius: 5px;
                    border: 1px solid red;
                    background: pink;
                    text-align: left;
                    color: brown;
                    padding: 10px;
                }
        </style>
    </head>
    <body>
        <?php  if (count($errors) > 0) : ?>
            <div class="msg">
                <?php foreach ($errors as $error) : ?>
                <span><?php echo $error ?></span>
                <?php endforeach ?>
            </div>
        <?php  endif ?>
    </body>
</html>

