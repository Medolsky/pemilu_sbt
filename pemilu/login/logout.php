<?php
session_start(); // memulai session
session_destroy(); // menghapus session
header("location:http://rtcsmknasional.mywebcommunity.org/pemilu"); // mengambalikan ke form_login.php
?>