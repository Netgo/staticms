<?php
// TEN KOD GENERUJE(ZERUJE) BAZĘ DANYCH

class MyDB extends SQLite3
{

    function __construct()
    {
        $this->open('cms.db');
    }
}

$i =0;
    $db = new MyDB();

		try {
			$db->query("CREATE TABLE cms (id INTEGER PRIMARY KEY,content TEXT);");
			while($i<1024){
			$content = "-empty:$i-";
			$db->query("INSERT INTO cms (id,content) VALUES (NULL, '$content') ");
			$i = $i +1 ;
echo " $i ";
			}
		} catch (Exception $e) {
			echo '<pre>';
			print_r($error);
			echo '</pre>';
			die();
		}
	

