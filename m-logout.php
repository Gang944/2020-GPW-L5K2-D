<?php

//start sessions
session_start();

//destory the session and redirect to login.php
if(session_destroy()) {
    header('location: m-login.php');
}

?>