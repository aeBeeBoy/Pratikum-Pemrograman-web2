<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php?pesan=Anda+berhasil+logout");
exit;
