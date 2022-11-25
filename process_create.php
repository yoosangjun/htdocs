<?php
    
    $conn = mysqli_connect("localhost:3308", "root", "01033934779", "opentutorials");
    $sql = "
    INSERT INTO topic (
        title,
        description,
        created
        )VALUES(
            '{$_POST['title']}',
            '{$_POST['description']}',
            NOW()
        )";
    $result = mysqli_query($conn,$sql);
    if($result === false){
        echo '실패했어 개자슥아';
        error_log(mysqli_error($conn));
    }
        header('location:index.php');
?>