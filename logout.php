<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['userRole']);
session_unset();
session_destroy();
header("location:./");

?>