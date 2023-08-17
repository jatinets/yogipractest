<?php

include "../helper/uihelper.php";
$user = intval($_REQUEST['user']);
$press_key = intval($_REQUEST['key']);
saveAction($user, $press_key);

?>