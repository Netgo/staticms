<?php
session_start();
// kontrola błędów nie działa poprawnie

if($_SESSION['admin']==1) {
	require_once('../_cms_user/_cms_lib.php');
	$db = new MyDB();
	$id = (int) $_REQUEST['id'];
    
	$content = SQLite3::escapeString($_REQUEST['content']);
    $query = "UPDATE cms SET content = '$content' WHERE id = '$id'";
   // $query = "UPDATE cms SET content = '$content' WHERE id = '$id'";

    //var_dump($query);
    //die();
	$r = $db->exec($query);
	if ($r==TRUE) echo 'Zapisane. żółć';
	if ($r==FALSE) echo 'Błąd zapisu.';
	if ($r==NULL) echo 'Nieznany błąd.';
} else {
echo "Zmiany NIE zostały zapisane! Zaloguj się!";
}


?>