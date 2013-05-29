<?php
session_start();


class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('cms.db');
    }
}


function getContent($id) {
	$db = new MyDB();
	$result = $db->query("SELECT * FROM cms where id = $id LIMIT 1");
	$r=$result->fetchArray();
	$r[]=$result->fetchArray();
	return($r['content']);

}

?>
