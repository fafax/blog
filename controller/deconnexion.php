<?php
session_destroy();

header("LOCATION:http://localhost/blog_PHP/public/index.php?post=home");

exit();