<?php
// $files = glob("r*.txt");
// $files = glob('img/*.jpg');
$images = glob('img/*.{jpg, png, jpeg, txt}',GLOB_BRACE);

/*
foreach ($images as $img)
{
//     echo $img;
//     echo basename($img);

// echo dirname($img);
// echo substr($img, 4);
// print_r(pathinfo($img));

    $info = pathinfo($img);
//     echo $info['extension'];
echo $info['filename'];
    echo "\r";
}
*/

// foreach ($images as $img)
// {
//     extract(pathinfo($img));
    
//     echo $filename."\n";
    
//     /* Same Result*/
//     echo  pathinfo($img, PATHINFO_FILENAME);
//     echo "\n";
// }

/*
 * Now someone upload file and we change the file name
 * */
 
foreach ($images as $img)
{
//     $info = pathinfo($img);
    
//     $thumb_name = $info['filename'] . '-thumb.' .$info['extension'];
//     echo $thumb_name."\n";
    
    /* Similar to file naming */
    extract(pathinfo($img));
    
    $thumb_name = "{$filename}-thumb.{$extension}";
    echo $thumb_name."\n";
    
}
 
print_r( $files);