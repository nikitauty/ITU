<?php
session_start();
$_SESSION['name'] = 'Nik';
echo $_SESSION['name'];