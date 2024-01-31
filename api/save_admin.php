<?php
include_once "db.php";
$_POST['pr']=serialize($_POST['pr']);
// serialize 使用將post的過來的陣列轉成字串，才可以存進SQL
$Admin->save($_POST);
to("../back.php?do=admin");
?>