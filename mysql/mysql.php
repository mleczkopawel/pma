<?php
    session_start();
    error_reporting(0);
    $host = 'localhost'; 
    $connect=new mysqli($host,$_SESSION['user'],$_SESSION['password']);
        echo '<div class="art-sheet clearfix">';
          echo '<div class="art-content-layout-row">';
            echo '<div class="art-layout-cell art-sidebar1">';
                echo '<div class="art-vmenublock clearfix">';
                    echo '<div class="art-vmenublockheader">';
                      echo '<img src="image/pma3.png"></img>';
                        echo '<h3 class="t"><a class="lin" href="mysql.php">Twoje Bazy</a></h3>';
                    echo '</div>';
                    $wynik = $connect -> query("SHOW DATABASES");
                    echo '<div class="art-vmenublockcontent">';
                        echo '<ul class="art-vmenu">';    
                        echo "<li><a href='#''><form method='GET'><input type='submit' name='baza' class='show' value='++ bazy ++'></input></form></a></li>";                    
                            while($wiersz=$wynik->fetch_row())
                            {
                                for ($i=0;$i<1;$i++)
                                {
                                    echo "<li><a href='#'><form method='GET'><input class='show' type='submit' value='$wiersz[$i]' name='bazaa'></form></a>";
                                        echo '</a>';
                                        $connect->query("USE $wiersz[$i]");
                                        $wynik2=$connect->query("SHOW TABLES");
                                        echo '<ul>';
                                        echo "<li><a href='#''><form method='GET'><form method='GET'><input type='hidden' name='baza' value='$wiersz[$i]'></input><input type='submit' name='tab' class='show' value='++ tabele ++'></input></form></a></li>";      
                                        while($wiersz2=$wynik2->fetch_row())
                                        { 
                                            for ($j=0;$j<1;$j++)
                                            {
                                                echo '<li>';
                                                    echo "<a href='#'><form method='GET'><input type='hidden' name='baza' value='$wiersz[$i]'></input><input type='submit' class='show' name='tabela' value='$wiersz2[$j]'></input></form></a>";
                                                echo '</li>';
                                            }  
                                        } 
                                        echo '</ul>';
                                        echo '</li>';      
                                }
                            }	
                        echo '</ul>';     
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="art-layout-cell art-content">';
            include 'mysql/right.php';
            echo '</div>';  
            echo '</div> ';
            echo '</div>';
        echo '</div>';