<?php 
$sql = 'SELECT * FROM  users1 ORDER BY RAND() LIMIT 1';
$result = mysqli_query($com, $sql);
$users1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
