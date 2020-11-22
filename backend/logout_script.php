<?php
session_start();
session_unset();
echo ('hi');
header("location: ../index.php");