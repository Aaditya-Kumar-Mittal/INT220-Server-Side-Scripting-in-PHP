<?php

session_start();

session_unset();

session_destroy();

echo "All the sessions variables have been unset and the seesion has been destroyed.";