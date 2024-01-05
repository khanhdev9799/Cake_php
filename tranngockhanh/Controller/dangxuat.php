<?php
    if (isset($_SESSION['idKH']))
    {
        unset($_SESSION['idKH']);
        unset($_SESSION['tenKH']);
        unset($_SESSION['username']);
    }
    echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
