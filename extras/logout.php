<?php
    session_start();

    session_destroy();
    header('Location: /programming-in-php/13_sessions.php');