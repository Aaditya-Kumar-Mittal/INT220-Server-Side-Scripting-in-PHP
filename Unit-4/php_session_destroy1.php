<?php

session_start();

//remove all session variables

session_unset();

//Destroy the session

session_destroy();

echo "All the session variables have been removed, and the session is destroyed.";

