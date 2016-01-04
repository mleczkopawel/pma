<?php
	echo "<h3 class='c'>Dodaj rekord</h3>";
    echo '<form method="POST">';
      echo '<div id="left">';
        echo '<label>Marka: </label><input name="marka" type="text" size="10" maxlength="10"><br>';
        echo '<label>Wersja: </label><input name="wersja" type="text" size="10" maxlength="10"><br>';
        echo '<label>Moc: </label><input name="moc" type="text" size="5" maxlength="5"><br>';
        echo '<label>Drzwi: </label><input name="drzwi" type="text" size="1" maxlength="1"><br>';
        echo '<label>Cena: </label><input name="cena" type="text" size="10" maxlength="10"><br>';
      echo '</div>';
      echo '<div id="right">';
        echo '<label>Model: </label><input name="model" type="text" size="10" maxlength="10"><br>';
        echo '<label>Pojemnosc: </label><input name="pojemnosc" type="text" size="5" maxlength="5"><br>';
        echo '<label>Nadwozie: </label><input name="nadwozie" type="text" size="10" maxlength="10"><br>';
        echo '<label>Silnik: </label><input name="silnik" type="text" size="10" maxlength="10"><br>';  
      echo '</div>';
        echo '<p><input class="btn btn-sm btn-primary" type="submit" value="Dodaj" name="add"></p>';
    echo '</form>';	
    $ma=$_POST['marka'];
    $mo=$_POST['model'];
    $wr=$_POST['wersja'];
    $poj=$_POST['pojemnosc'];
    $moc=$_POST['moc'];
    $nad=$_POST['nadwozie'];
    $dr=$_POST['drzwi'];
    $si=$_POST['silnik'];
    $ce=$_POST['cena'];
    $btn=$_POST['add'];
    if(isset($btn))
    {
    	$connect2->query("INSERT INTO auta (id, marka, model, wersja, pojemnosc, moc, nadwozie, drzwi, silnik, cena) VALUES ('auto_increment', '$ma', '$mo', '$wr', '$poj', '$moc', '$nad', '$dr', '$si', '$ce')");
    }
    else{}	        