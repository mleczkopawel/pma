<?php
 						$show="SELECT * FROM ".$tabela.";";
                        if(($db=$connect2->query($show))==TRUE)
                        {
                                if ($tabela=='auta')
                                {
                                    include 'rekord.php';
                                }
                                else
                                {}
                                if ($tabela=='auta')
                                {
                                    echo '<form method="POST">';
                                    echo '<label for="base2">Usuń rekord gdzie ID=</label><input name="base2" value="ID rekordu">';
                                    echo '<input type="submit" class="btn btn-sm btn-primary" value="Usuń">';
                                    echo '</form>';
                                    $del=$_POST['base2'];
                                    $a="DELETE FROM ".$tabela." WHERE id=".$del.";";
                                    $connect2->query($a);
                                }   
                                else
                                {}           
                                $query = "SELECT COUNT(*) as all_posts FROM $tabela";
                                $result = mysql_query($query) or die (mysql_error());
                                $row = mysql_fetch_array($result);
                                extract($row);
                                echo "<h3 class='c'>Ilość rekordów na stronie</h3>";
                                echo '<form class="c" method="GET">';
                                    echo '<input type="hidden" name="baza" value="'.$baza.'"></input><input type="hidden" class="show" name="tabela" value="'.$tabela.'"></input><input type="submit" class="btn btn-sm btn-primary" name="ilew" value="5"></input>';
                                    echo '<input type="hidden" name="baza" value="'.$baza.'"></input><input type="hidden" class="show" name="tabela" value="'.$tabela.'"></input><input type="submit" class="btn btn-sm btn-primary" name="ilew" value="10"></input>';
                                    echo '<input type="hidden" name="baza" value="'.$baza.'"></input><input type="hidden" class="show" name="tabela" value="'.$tabela.'"></input><input type="submit" class="btn btn-sm btn-primary" name="ilew" value="15"></input>';
                                    echo '<input type="hidden" name="baza" value="'.$baza.'"></input><input type="hidden" class="show" name="tabela" value="'.$tabela.'"></input><input type="submit" class="btn btn-sm btn-primary" name="ilew" value="20"></input>';
                                    echo '<input type="hidden" name="baza" value="'.$baza.'"></input><input type="hidden" class="show" name="tabela" value="'.$tabela.'"></input><input type="submit" class="btn btn-sm btn-primary" name="ilew" value="25"></input>';
                                    echo '<input type="hidden" name="baza" value="'.$baza.'"></input><input type="hidden" class="show" name="tabela" value="'.$tabela.'"></input><input type="submit" class="btn btn-sm btn-primary" name="ilew" value="50"></input>';
                                    echo '<input type="hidden" name="baza" value="'.$baza.'"></input><input type="hidden" class="show" name="tabela" value="'.$tabela.'"></input><input type="submit" class="btn btn-sm btn-primary" name="ilew" value="100"></input>';
                                echo '</form>';
                                echo "<br>";
                                if(!isset($_GET['ilew']))
                                {
                                    $onpage=20;
                                    $_SESSION['ileee']=$onpage;
                                }
                                else
                                {
                                    $onpage=$_GET['ilew'];
                                    $_SESSION['ileee']=$onpage;
                                }
                                $navnum = 3;
                                $allpages = ceil($all_posts/$_SESSION['ileee']); 
                                if(!isset($_GET['page']) or $_GET['page'] > $allpages or !is_numeric($_GET['page']) or $_GET['page'] <= 0)
                                {
                                        $page = 1;
                                }
                                else
                                {
                                        $page = $_GET['page'];
                                }
                                $limit = ($page - 1) * $_SESSION['ileee'];
                                echo "<table border=1>";
                                echo '<tr>';
                                $show="SELECT * FROM ".$tabela.";";
                                $result=$connect2->query("SHOW FIELDS FROM $tabela");
                                while($wiersz3=$result->fetch_object())
                                {
                                        echo "<th class='th'>$wiersz3->Field</th>";
                                }          
                                $wynik=$connect2->query("SELECT * FROM ".$tabela." LIMIT ".$limit.",".$_SESSION['ileee']);
                                $k=0;
                                while($wiersz=$wynik->fetch_assoc())
                                {
                                        $k++;
                                        $warunek=$k%2;
                                        if($warunek!=0)
                                        {
                                            echo "<tr>";
                                        }
                                        elseif($warunek==0)
                                        {
                                            echo "<tr class='wiers'>";
                                        }
                                        foreach ($wiersz as $index=>$wartosc)
                                        echo "<td>$wartosc</td>";
                                        echo "</tr>";
                                }   
                                echo '</tr>';
                                echo "</table>"; 
                                if($navnum > $allpages)
                                {
                                        $navnum = $allpages;
                                }
                                $forstart = $page - floor($navnum/2);
                                $forend = $forstart + $navnum;
                                if($forstart <= 0)
                                { 
                                        $forstart = 1; 
                                }
                                $overend = $allpages - $forend;
                                if($overend < 0)
                                {
                                $forstart = $forstart + $overend + 1; 
                                }
                                $forend = $forstart + $navnum;
                                $prev = $page - 1;
                                $next = $page + 1;
                                echo '<div id="nav"><table border=1><tr>';
                                if($page > 1) echo "<td class='navig'><a href=\"mysql.php?baza=".$baza."&tabela=".$tabela."&page=".$prev."&ilew=".$_SESSION['ileee']."\">Poprzednia</a></td>";
                                if ($forstart > 1) echo "<td class='navig'><a href=\"mysql.php?baza=".$baza."&tabela=".$tabela."&page=1&ilew=".$_SESSION['ileee']."\">1</a></td>";
                                if ($forstart > 2) echo "<td class='navig'>...</td>";
                                for($forstart; $forstart < $forend; $forstart++)
                                {
                                        if($forstart == $page)
                                        {
                                            echo "<td class='current navig'>";
                                        }
                                        else
                                        {
                                            echo "<td class='navig'>";
                                        }   
                                        echo "<a href=\"mysql.php?baza=".$baza."&tabela=".$tabela."&page=".$forstart."\">".$forstart."</a></td>";
                                }
                                if($forstart < $allpages) echo "<td class='navig'>...</td>";
                                if($forstart - 1 < $allpages) echo "<td class='navig'><a href=\"mysql.php?baza=".$baza."&tabela=".$tabela."&page=".$allpages."&ilew=".$_SESSION['ileee']."\">".$allpages."</a></td>";
                                if($page < $allpages) echo "<td class='navig'><a href=\"mysql.php?baza=".$baza."&tabela=".$tabela."&page=".$next."&ilew=".$_SESSION['ileee']."\">Następna</a></td>";
                                echo "</tr>";
                                echo "</table></div><div class=\"clear\">";
                                echo "<table border=1 class='navig2'><tr><td class='navig2'>Strona $page z $allpages</td></tr></table>";
                                echo "<br>";
                        }