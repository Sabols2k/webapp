<!DOCTYPE html>
<html>
<body>
    <form  method="POST" enctype="multipart/form-data">
        <input type="file" name="myFile">
        <input type="submit" name="upload">
    </form>
    <?php
        if(isset($_POST['upload'])){
            $file = $_FILES['myFile']['tmp_name'];
            $path = "test/".$_FILES['myFile']['name'];
            // echo $file;
            echo $path;
            die(); 
            if(move_uploaded_file($file, $path)){
                echo "Tải tập tin thành công";
            }else{
                echo "Tải tập tin thất bại";
            }
        }
    ?>
</body>
</html>