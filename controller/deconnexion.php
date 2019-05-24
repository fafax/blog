<?php

session_destroy();

header('LOCATION:index.php?post=home');

exit();
