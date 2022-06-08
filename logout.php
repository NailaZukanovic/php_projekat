<?php
    include "functions/init.php";
    session_unset();
    session_destroy();

    redirect("index.php");