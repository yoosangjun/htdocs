<?php
 $conn = mysqli_connect("localhost:3308", "root", "01033934779", "opentutorials");
 $sql = "SELECT * FROM topic";
 $result = mysqli_query($conn,$sql);
 $title ='';
 while($row = mysqli_fetch_array($result)){ 
    $title = $title."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
 }
 $article = array(
    'title'=>'Welcome',
    'description'=>'18181818'
 );  
 if(isset($_GET['id'])){
    $sql3 = "SELECT * FROM topic WHERE id={$_GET['id']}";    
 $result = mysqli_query($conn,$sql3); 
 $row = mysqli_fetch_array($result);
 $article['title'] = $row['title'];
 $article['description'] = $row['description'];
 }
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?=$title?>
    </ol>  
    <form action="process_create.php" method="POST">
       <p><input type="text" name="title" id="" placeholder="title"></p>
       <p><textarea name="description" id="" cols="30" rows="10" placeholder="description"></textarea></p>
       <p><input type="submit" value="작성완료"></p>
    </form>
</body>
</html>