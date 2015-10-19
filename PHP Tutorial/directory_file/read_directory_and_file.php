<?php
/**
 * How to read Nested Directory and File
 */
class RD{
    
//     public function directory($dir)
//     {
//         $this->directory_children($dir);
//     }
    public function directory($dir)
    {
        //if you don't want to output directly
        ob_start();
        $this->directory_children($dir);
        
        $con = ob_get_contents();
        ob_end_clean();
        return $con;
    }
    
    public function directory_children($param) {
        $cleanPath = realpath($dir).DIRECTORY_SEPARATOR;
        $scanDir = scandir($cleanPath); // read directory content
        
        echo "<ul>";
        foreach ($scanDir as $file)
        {
            //skip loop if find . ..
            if($file == "." || $file == "..")
            {
                continue;
            }
            echo "<li>";
            echo $file;
            if(is_dir($cleanPath . $file) && is_readable($cleanPath . $file)) //check if file is directory then read inside content.
            {
                $this->directory_children($cleanPath . $file);
            }
            echo "</li>";
        }
        echo "</ul>";
    }
}

$rd = new RD();
echo $rd->directory("E:\\Virtual_Windows\\wamp\\www\\PHP-Tutorial");