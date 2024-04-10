<?php
session_start();


unset($_SESSION['id'] );
unset($_SESSION['ime'] );
unset($_SESSION['prezime'] );
unset($_SESSION['razred'] );
unset($_SESSION['smjer'] );
unset($_SESSION['admin'] );
session_destroy();

header("Location: index");