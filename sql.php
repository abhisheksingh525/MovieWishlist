<?php

$sql = "CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
)";



$db = mysqli_connect('sql200.epizy.com', 'epiz_32144935', 'rsD5ACkqv4i', 'epiz_32144935_test_sample');

if($conn){
    echo "Successfully connected to server";
}
else{
    echo "Failed";
}

print(mysqli_query($conn,$sql));


?>
