<?php

$com = mysqli_connect('localhost', 'root', '', 'win');
if(!$com){
    echo '  Error  ' . mysqli_connect_error();
}