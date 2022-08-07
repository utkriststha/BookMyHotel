<?php
//Page that destorys all session created. 
session_start();
session_unset();
session_destroy();

header("location: ../index.php");
exit();