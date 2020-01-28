<?php

include '../vars.php';
session_start();

session_destroy();

header('Location: ' . $MASTER_LOGOUT_URL);

exit();
