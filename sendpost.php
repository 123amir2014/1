
<?php
include "db.php";
 if (isset($_POST['sendp'])) {
                if (sendpost($_POST['title'],$_POST['message'], $_POST['img'])) {
                   // header("location: register.php?s=1");
                    header("Location: Account.html");
                    exit;
                } else {
                    header("location: sendpost.php?s=0");
                    exit;
                }
 }


function register($title,$message, $img)
{
    global $pdo;
    if (isUserExists($title)) {
        return false;
    }
    $sql = "INSERT INTO post_site (title,message, time) VALUES (:title,:message, :img)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ ':title'=>$titel,':message' => $message, ':img' => $img]);
    return $stmt->rowCount();
}


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }





?>
