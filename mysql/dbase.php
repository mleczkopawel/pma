<?php
	error_reporting(0);
	$basse='information_schema';
	$connect3=new mysqli($host,$_SESSION['user'],$_SESSION['password'],$basse); 
	$show3="SELECT SCHEMA_NAME, DEFAULT_COLLATION_NAME FROM schemata";
	if(($db2=$connect3->query($show3))==TRUE)
	{
		?>
			<form method="POST">
				<label for="base">Utwórz nową bazę</label><input name="base" value="nazwa bazy">
				<select name="znaki">
	            <option value="latin1_swedish_ci">Metoda porównywania napisów</option>
	            <option value="latin1_swedish_ci"></option>
		            <optgroup name="znakk" label="armscii8">
		                <option>armscii8_bin</option>
		                <option>armscii8_general_ci</option>
		            </optgroup>
		            <optgroup label="ascii">
		            	<option>ascii</option>
		                <option>ascii_bin</option>
		                <option>ascii_general_ci</option>
		            </optgroup>
		            <optgroup label="big5">
		                <option>big5_bin</option>
		                <option>big5_chinese_ci</option>
		            </optgroup>
		            <optgroup label="binary">
		                <option>binary</option>
		            </optgroup>
		            <optgroup label="cp1250">
		                <option>cp1250_bin</option>
		                <option>cp1250_croatian_ci</option>
		                <option>cp1250_czech_cs</option>
		                <option>cp1250_general_ci</option>
		                <option>cp1250_polish_ci</option>
		            </optgroup>
		            <optgroup label="cp1251">
		                <option>cp1251_bin</option>
		                <option>cp1251_bulgarian_ci</option>
		                <option>cp1251_general_ci</option>
		                <option>cp1251_general_cs</option>
		                <option>cp1251_ukrainian_ci</option>
		            </optgroup>
		            <optgroup label="cp1256">
		                <option>cp1256_bin</option>
		                <option>cp1256_general_ci</option>
		            </optgroup>
		            <optgroup label="cp1257">
		                <option>cp1257_bin</option>
		                <option>cp1257_general_ci</option>
		                <option>cp1257_lithuanian_ci</option>
		            </optgroup>
		            <optgroup label="cp850">
		                <option>cp850_bin</option>
		                <option>cp850_general_ci</option>
		            </optgroup>
		            <optgroup label="cp852">
		                <option>cp852_bin</option>
		                <option>cp852_general_ci</option>
		            </optgroup>
		            <optgroup label="cp866">
		                <option>cp866_bin</option>
		                <option>cp866_general_ci</option>
		            </optgroup>
		            <optgroup label="cp932">
		                <option>cp932_bin</option>
		                <option>cp932_japanese_ci</option>
		            </optgroup>
		            <optgroup label="dec8">
		                <option>dec8_bin</option>
		                <option>dec8_swedish_ci</option>
		            </optgroup>
		            <optgroup label="eucjpms">
		                <option>eucjpms_bin</option>
		                <option>eucjpms_japanese_ci</option>
		            </optgroup>
		            <optgroup label="euckr">
		                <option>euckr_bin</option>
		                <option>euckr_korean_ci</option>
		            </optgroup>
		            <optgroup label="gb2312">
		                <option>gb2312_bin</option>
		                <option>gb2312_chinese_ci</option>
		            </optgroup>
		            <optgroup label="gbk">
		                <option>gbk_bin</option>
		                <option>gbk_chinese_ci</option>
		            </optgroup>
		            <optgroup label="geostd8">
		                <option>geostd8_bin</option>
		                <option>geostd8_general_ci</option>
		            </optgroup>
		            <optgroup label="greek">
		                <option>greek_bin</option>
		                <option>greek_general_ci</option>
		            </optgroup>
		            <optgroup label="hebrew">
		                <option>hebrew_bin</option>
		                <option>hebrew_general_ci</option>
		            </optgroup>
		            <optgroup label="hp8">
		                <option>hp8_bin</option>
		                <option>hp8_english_ci</option>
		            </optgroup>
		            <optgroup label="keybcs2">
		                <option>keybcs2_bin</option>
		                <option>keybcs2_general_ci</option>
		            </optgroup>
		            <optgroup label="koi8r">
		                <option>koi8r_bin</option>
		                <option>koi8r_general_ci</option>
		            </optgroup>
		            <optgroup label="koi8u">
		                <option>koi8u_bin</option>
		                <option>koi8u_general_ci</option>
		            </optgroup>
		            <optgroup label="latin1">
		                <option>latin1_bin</option>
		                <option>latin1_danish_ci</option>
		                <option>latin1_general_ci</option>
		                <option>latin1_general_cs</option>
		                <option>latin1_german1_ci</option>
		                <option>latin1_german2_ci</option>
		                <option>latin1_spanish_ci</option>
		                <option>latin1_swedish_ci</option>
		            </optgroup>
		            <optgroup label="latin2">
		                <option>latin2_bin</option>
		                <option>latin2_croatian_ci</option>
		                <option>latin2_czech_cs</option>
		                <option>latin2_general_ci</option>
		                <option>latin2_hungarian_ci</option>
		            </optgroup>
		            <optgroup label="latin5">
		                <option>latin5_bin</option>
		                <option>latin5_turkish_ci</option>
		            </optgroup>
		            <optgroup label="latin7">
		                <option>latin7_bin</option>
		                <option>latin7_estonian_cs</option>
		                <option>latin7_general_ci</option>
		                <option>latin7_general_cs</option>
		            </optgroup>
		            <optgroup label="macce">
		                <option>macce_bin</option>
		                <option>macce_general_ci</option>
		            </optgroup>
		            <optgroup label="macroman">
		                <option>macroman_bin</option>
		                <option>macroman_general_ci</option>
		            </optgroup>
		            <optgroup label="sjis">
		                <option>sjis_bin</option>
		                <option>sjis_japanese_ci</option>
		            </optgroup>
		            <optgroup label="swe7">
		                <option>swe7_bin</option>
		                <option>swe7_swedish_ci</option>
		            </optgroup>
		            <optgroup label="tis620">
		                <option>tis620_bin</option>
		                <option>tis620_thai_ci</option>
		            </optgroup>
		            <optgroup label="ucs2">
		                <option>ucs2_bin</option>
		                <option>ucs2_croatian_ci</option>
		                <option>ucs2_czech_cs</option>
		                <option>ucs2_danish_ci</option>
		                <option>ucs2_esperanto_ci</option>
		                <option>ucs2_estonian_ci</option>
		                <option>ucs2_general_ci</option>
		                <option>ucs2_general_mysql500_ci</option>
		                <option>ucs2_german2_ci</option>
		                <option>ucs2_hungarian_ci</option>
		                <option>ucs2_icelandic_ci</option>
		                <option>ucs2_latvian_ci</option>
		                <option>ucs2_lithuanian_ci</option>
		                <option>ucs2_persian_ci</option>
		                <option>ucs2_polish_ci</option>
		                <option>ucs2_roman_ci</option>
		                <option>ucs2_romanian_ci</option>
		                <option>ucs2_sinhala_ci</option>
		                <option>ucs2_slovak_ci</option>
		                <option>ucs2_slovenian_ci</option>
		                <option>ucs2_spanish2_ci</option>
		                <option>ucs2_spanish_ci</option>
		                <option>ucs2_swedish_ci</option>
		                <option>ucs2_turkish_ci</option>
		                <option>ucs2_unicode_520_ci</option>
		                <option>ucs2_unicode_ci</option>
		                <option>ucs2_vietnamese_ci</option>
		            </optgroup>
		            <optgroup label="ujis">
		                <option>ujis_bin</option>
		                <option>ujis_japanese_ci</option>
		            </optgroup>
		            <optgroup label="utf16">
		                <option>utf16_bin</option>
		                <option>utf16_croatian_ci</option>
		                <option>utf16_czech_cs</option>
		                <option>utf16_danish_ci</option>
		                <option>utf16_esperanto_ci</option>
		                <option>utf16_estonian_ci</option>
		                <option>utf16_general_ci</option>
		                <option>utf16_german2_ci</option>
		                <option>utf16_hungarian_ci</option>
		                <option>utf16_icelandic_ci</option>
		                <option>utf16_latvian_ci</option>
		                <option>utf16_lithuanian_ci</option>
		                <option>utf16_persian_ci</option>
		                <option>utf16_polish_ci</option>
		                <option>utf16_roman_ci</option>
		                <option>utf16_romanian_ci</option>
		                <option>utf16_sinhala_ci</option>
		                <option>utf16_slovak_ci</option>
		                <option>utf16_slovenian_ci</option>
		                <option>utf16_spanish2_ci</option>
		                <option>utf16_spanish_ci</option>
		                <option>utf16_swedish_ci</option>
		                <option>utf16_turkish_ci</option>
		                <option>utf16_unicode_520_ci</option>
		                <option>utf16_unicode_ci</option>
		                <option>utf16_vietnamese_ci</option>
		            </optgroup>
		            <optgroup label="utf16le">
		                <option>utf16le_bin</option>
		                <option>utf16le_general_ci</option>
		            </optgroup>
		            <optgroup label="utf32">
		                <option>utf32_bin</option>
		                <option>utf32_croatian_ci</option>
		                <option>utf32_czech_cs</option>
		                <option>utf32_danish_ci</option>
		                <option>utf32_esperanto_ci</option>
		                <option>utf32_estonian_ci</option>
		                <option>utf32_general_ci</option>
		                <option>utf32_german2_ci</option>
		                <option>utf32_hungarian_ci</option>
		                <option>utf32_icelandic_ci</option>
		                <option>utf32_latvian_ci</option>
		                <option>utf32_lithuanian_ci</option>
		                <option>utf32_persian_ci</option>
		                <option>utf32_polish_ci</option>
		                <option>utf32_roman_ci</option>
		                <option>utf32_romanian_ci</option>
		                <option>utf32_sinhala_ci</option>
		                <option>utf32_slovak_ci</option>
		                <option>utf32_slovenian_ci</option>
		                <option>utf32_spanish2_ci</option>
		                <option>utf32_spanish_ci</option>
		                <option>utf32_swedish_ci</option>
		                <option>utf32_turkish_ci</option>
		                <option>utf32_unicode_520_ci</option>
		                <option>utf32_unicode_ci</option>
		                <option>utf32_vietnamese_ci</option>
		            </optgroup>
		            <optgroup label="utf8">
		                <option>utf8_bin</option>
		                <option>utf8_croatian_ci</option>
		                <option>utf8_czech_cs</option>
		                <option>utf8_danish_ci</option>
		                <option>utf8_esperanto_ci</option>
		                <option>utf8_estonian_ci</option>
		                <option>utf8_general_ci</option>
		                <option>utf8_general_mysql500_ci</option>
		                <option>utf8_german2_ci</option>
		                <option>utf8_hungarian_ci</option>
		                <option>utf8_icelandic_ci</option>
		                <option>utf8_latvian_ci</option>
		                <option>utf8_lithuanian_ci</option>
		                <option>utf8_persian_ci</option>
		                <option>utf8_polish_ci</option>
		                <option>utf8_roman_ci</option>
		                <option>utf8_romanian_ci</option>
		                <option>utf8_sinhala_ci</option>
		                <option>utf8_slovak_ci</option>
		                <option>utf8_slovenian_ci</option>
		                <option>utf8_spanish2_ci</option>
		                <option>utf8_spanish_ci</option>
		                <option>utf8_swedish_ci</option>
		                <option>utf8_turkish_ci</option>
		                <option>utf8_unicode_520_ci</option>
		                <option>utf8_unicode_ci</option>
		                <option>utf8_vietnamese_ci</option>
		            </optgroup>
		            <optgroup label="utf8mb64">
		                <option>utf8mb64_bin</option>
		                <option>utf8mb64_croatian_ci</option>
		                <option>utf8mb64_czech_cs</option>
		                <option>utf8mb64_danish_ci</option>
		                <option>utf8mb64_esperanto_ci</option>
		                <option>utf8mb64_estonian_ci</option>
		                <option>utf8mb64_general_ci</option>
		                <option>utf8mb64_german2_ci</option>
		                <option>utf8mb64_hungarian_ci</option>
		                <option>utf8mb64_icelandic_ci</option>
		                <option>utf8mb64_latvian_ci</option>
		                <option>utf8mb64_lithuanian_ci</option>
		                <option>utf8mb64_persian_ci</option>
		                <option>utf8mb64_polish_ci</option>
		                <option>utf8mb64_roman_ci</option>
		                <option>utf8mb64_romanian_ci</option>
		                <option>utf8mb64_sinhala_ci</option>
		                <option>utf8mb64_slovak_ci</option>
		                <option>utf8mb64_slovenian_ci</option>
		                <option>utf8mb64_spanish2_ci</option>
		                <option>utf8mb64_spanish_ci</option>
		                <option>utf8mb64_swedish_ci</option>
		                <option>utf8mb64_turkish_ci</option>
		                <option>utf8mb64_unicode_520_ci</option>
		                <option>utf8mb64_unicode_ci</option>
		                <option>utf8mb64_vietnamese_ci</option>
		            </optgroup>
				</select>
				<input type="submit" class="btn btn-sm btn-primary" value="Utwórz">
			</form>
			<form method="POST">
				<label for="base">Usuń bazę</label><input name="base2" value="nazwa bazy">
				<input type="submit" class="btn btn-sm btn-primary" value="Usuń">
			</form>
		<?php
		$pole2=$_POST['base2'];
		$pole=$_POST['base'];
		$znak=$_POST['znaki'];
		$a="CREATE DATABASE ".$pole." COLLATE ".$znak.";";
		$connect->query($a);
		$a2="DROP DATABASE ".$pole2.";";
		$connect->query($a2);
        echo "<table border=1>";
        echo "<tr><th class='th'>Baza Danych</th><th class='th'>Metoda porównywania napisów</th></tr>";
		$wynik3=$connect3->query($show3);
		$k=0;
		while($wiersz3=$wynik3->fetch_object())
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
		    echo "<td>$wiersz3->SCHEMA_NAME</td><td>$wiersz3->DEFAULT_COLLATION_NAME</td>";
		    echo "</tr>";
		}
        echo "</table>";  
	}