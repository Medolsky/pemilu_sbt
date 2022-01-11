<?php
session_start(); // memulai session
session_destroy(); // menghapus session
header("location:http://rtcsmknasional.mywebcommunity.org/pemilurtc/"); // mengambalikan ke form_login.php
?>