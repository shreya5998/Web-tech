<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: events.php"); // Redirecting To Home Page
}
?>
