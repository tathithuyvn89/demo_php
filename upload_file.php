<?php

if(isset($_POST["upload"])){
    if (isset($_FILES["file"]) && !$_FILES["file"]["errors"]){
        move_uploaded_file($_FILES["file"]["tmp_name"], './media/'.$_FILES["file"]["name"]);
        echo "Upload file success";
    } else {
        echo "error";
    }
    
}
?>
<html>
    <body>
        <form method="POST" action="upload_file.php" enctype="multipart/form-data">
            <input type="file" name="file"/>
            <input type="submit" name="upload" value="Upload"/>
        </form>
    </body>
</html>

