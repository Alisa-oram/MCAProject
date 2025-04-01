<?php
if(isset($_POST['add'])){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $image = $_FILES['image'];
    $content = $_POST['article'];
    $new_name = time()."-".$image['name'];
    $upload_path="../uploads/".$new_name;
    if(move_uploaded_file($image['tmp_name'],$upload_path)){
    require_once "admin_functions.php";
    $res = addEvent($title,$date,$new_name,$content);
    if($res){
         header("location:add_event.html");
        
    } else {
        echo " Error While Adding.";
    }
} else {
    echo "File Upload Error";
}
}

?>