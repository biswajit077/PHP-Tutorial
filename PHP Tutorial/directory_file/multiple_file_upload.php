<?php 
    if (isset($_POST['log']))
    {
        $nm = $_POST['nm'];
        $des = $_POST['des'];
        
        foreach ($_FILES['files']['tmp_name'] as $key => $name_tmp){
            $name = $_FILES['files']['name'][$key];
            $tmpnm = $_FILES['files']['tmp_name'][$key];
            $type = $_FILES['files']['type'][$key];
            $size = $_FILES['files']['size'][$key];
            $dir = "filedata";
            if(file_exists($dir) && is_writable($dir)){
                $move = move_uploaded_file($tmpnm, $dir."/".$name);
                if($move)
                {
                    $hsl = mysql_query("INSERT INTO filedata VALUES('','$nm','$name','$type','$size',now())");
                    if($hsl)
                    {
                        echo "<script> alert('Upload Success')</script>";
                    }else{
                        echo "<script> alert('Error')</script>";
                    }
                }else{
                    echo "<script> alert('Upload Fail')</script>";
                }
            }else{
                echo 'Upload dirctory is not writeable, or does not exit.';
            }
        }
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <p>
        <label>File</label>
        <input type="file" name="files[]" multiple />
    </p>
        <p>
        <label>Name</label>
        <input type="text" name="nm" />
    </p>
        <p>
        <label>Description</label>
        <textarea rows="10" cols="25" name="des"></textarea>
    </p>
    <p>
        <input type="submit" value="Upload" name="log" />
    </p>
</form>
<?php 
/**
 * CREATE TABLE filedata{
 * id int(11) primary key auto increment,
 * name varchar(225),
 * desc text,
 * file varchar(100),
 * type varchar(45),
 * size double,
 * tgl date
 * }
 */
?>