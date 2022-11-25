<?php
 $conn = mysqli_connect("localhost:3308", "root", "01033934779", "opentutorials");
 

 echo "<h1>single row</h1>";
 $sql = "SELECT * FROM topic WHERE id = 3";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 echo '<h1>'.$row['title'].'</h1>';
 echo $row['description'];

//  all row
 $sql = "SELECT * FROM topic";
 $result = mysqli_query($conn,$sql);

 while($row = mysqli_fetch_array($result)){ 
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
 }



?>