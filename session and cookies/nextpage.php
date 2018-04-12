<?php
session_start();
if(isset($_SESSION['count'])){
    echo $_SESSION['count'];
}
else{
    echo 'Bad request';
}