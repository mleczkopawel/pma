<?php
		$basse='information_schema';
		$connect3=new mysqli($host,$_SESSION['user'],$_SESSION['password'],$basse); 
		$show4="SELECT TABLE_NAME, ENGINE, TABLE_ROWS, TABLE_COLLATION FROM TABLES WHERE table_schema='".$baza."'";
		echo '<form method="POST">';
			echo '<label for="tab">Dodaj tebelę</label><input name="taba" value="nazwa tabeli">';
			echo '<input type="submit" class="btn btn-sm btn-primary" value="Dodaj">';
		echo '</form>';
		echo '<form method="POST">';
			echo '<label for="tab">Usuń tebelę</label><input name="tab" value="nazwa tabeli">';
			echo '<input type="submit" class="btn btn-sm btn-primary" value="Usuń">';
		echo '</form>';
		$pole=$_POST['tab'];
		$pole2=$_POST['taba'];
		$a2="CREATE TABLE $pole2";
		$a="DROP TABLE ".$pole.";";
		$connect2->query($a);
		$connect2->query($a2);
        echo "<table border=1>";
        echo "<tr><th class='th'>Nazwa Tabeli</th><th class='th'>Silnik</th><th class='th'>Liczba wierszy</th><th class='th'>Metoda porównywania znaków</th></tr>";
		$wynik4=$connect3->query($show4);
		$k=0;
		while($wiersz3=$wynik4->fetch_object())
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
		    echo "<td>$wiersz3->TABLE_NAME</td><td>$wiersz3->ENGINE</td><td>$wiersz3->TABLE_ROWS</td><td>$wiersz3->TABLE_COLLATION</td>";
		    echo "</tr>";
		}
        echo "</table>";