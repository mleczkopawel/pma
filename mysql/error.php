<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        session_start();
        error_reporting(0);
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Paweł Mleczko">
    <link rel="icon" href="../favicon.ico">
    <title>Portfolio</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
        <script src="../js/jquery.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/script.responsive.js"></script>    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/style.css" rel="stylesheet">
    <style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>
  </head>
  <body>  
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Paweł Mleczko</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="../../../index.php">Główna</a></li>  
                        <?php
                            if($_SESSION['auth2'] == TRUE && !isset($_GET['logout']))
                            {    
                        ?>        
                        <li><a href="../index.php">PMA</a></li>                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">                   
                        <li>
                            <?php
                                }
                                else{}
                                if($_SESSION['auth2'] == TRUE && !isset($_GET['logout']))
                                    {    
                                        echo '<a href="../../../layout/mysql/logout.php"><span class="glyphicon glyphicon-log-in"></span> Wyloguj</a>';
                                    }
                                else{}
                            ?> 
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php
                            if($_SESSION['auth2'] == FALSE && !isset($_GET['logout']))
                                    {   
                                        echo '<a href="../../../register.php">Zarejestruj</a>';
                                    }
                            ?>
                        </li>
                    </ul>       
                </div>
            </div>
        </nav>
    </div>
</div>
        <br><br><br><br>
        <div class="c">
          <p>
          <h1>BEEP! ZŁE DANE!</h1>
          <a class="btn btn-lg btn-danger" href='../index.php'>Powrót na stronę logowania </a>
          </p>
        </div>
      <?php
        include '../layout/footer.php';
      ?>
  </body>
</html>
