<?php
session_start();
session_destroy();
header('Location: ../loga.php');
exit();