<?php

$_SESSION['logged'] = null;
unset($_SESSION['logged']);

header('Location: ?page=student');
