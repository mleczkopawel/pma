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
                    <a class="navbar-brand" href="#">phpMyAdmin</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="../pma/mysql/logout2.php">Główna</a></li>  
                        <?php
                            error_reporting(0);
                            if($_SESSION['auth2'] == TRUE && !isset($_GET['logout']))
                            {    
                        ?>        
                        <li><a href="../pma/index.php">Zaloguj do innego konta</a></li>
                        <li><a href="#">|</a></li>                    
                    </ul>
                    <ul class="nav navbar-nav navbar-right">                   
                        <li>
                            <?php
                                }
                                else{}
                                if($_SESSION['auth2'] == TRUE && !isset($_GET['logout']))
                                    {    
                                        echo '<a href="../pma/mysql/logout.php"><span class="glyphicon glyphicon-log-in"></span> Wyloguj</a>';
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
                                        echo '<a href="../../register.php">Zarejestruj</a>';
                                    }
                            ?>
                        </li>
                    </ul>       
                </div>
            </div>
        </nav>
    </div>
</div>