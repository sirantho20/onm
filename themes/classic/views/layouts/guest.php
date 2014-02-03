<!DOCTYPE html>
<html>
  <head>
    <title><?php echo 'HTG - '.Yii::app()->name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <?php //Yii::app()->bootstrap->register(); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <link href="css/main.css" rel="stylesheet">
  <link href="css/bootstrap3.min.css" rel="stylesheet">
  </head>
  <body>
      
      <div class="col-lg-3 col-lg-offset-4" style="margin-top: 10%;">
<div class="panel panel-primary">
  <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> User Login</div>
  <div class="panel-body">
      <?php
      
            echo $content;
      ?>
  </div>
</div>
      </div>

      
  </body>
</html>


