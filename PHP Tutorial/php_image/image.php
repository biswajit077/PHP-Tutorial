<?php
/**
 * Software name : Image Cropping, resizing & Applying Watermark. 
 * @author BISWAJIT
 *
 */
class imageClass{
    private $_instance;
    
    /**
     * Constructor Method of imageClass
     * @param unknown $instance
     */
    public function __construct($instance){
        $this->_instance = $instance;
    }
    
    /**
     * Which Method is calling and there properties
     * @param unknown $method
     * @param unknown $args
     */
    public function __call($method, $args){
        switch ($method){
            case 'cropResize':
                $args['imageClass'] = $this;
                $args['options'] = isset($args[0])? $args[0] : array(); unset($args[0]);
                return $this->_instance->cropResize($args);
            break;
            case 'output':
                $this->_instance->output($this->image);
            break;
            case 'save':
                $args['imageClass'] = $this;
                $args['options'] = isset($args[0])? $args[0] : NULL; unset($args[0]);
                $this->_instance->save($args);
            break;
            case 'watermark':
                $args['options'] = isset($args[1])? $args[1] : array(); unset($args[1]);
                return $this->_instance->watermark( $args[0], $args['options'], $this);
            break;
        }
    }
}

class image{
    public $SET_WIDTH       = 50;
    public $SET_HEIGHT      = 50;
    public $JPEG_QUALITY    = 100;
    public $PNG_COMPRESSION = 0;
    public $output          = false; //output to browser
    public $gap             = 10;
    
    public function __construct( $options = array() ){
        //set options here
    }
    
    /**
     * Crop image using this Method
     */
    public function cropResize(){
        $arg = func_get_arg();
        if(is_array( $arg[0] )){
            $processObj = $arg[0];
            $imageObject = $processObj['imageClass']->image;
            $lastElement = end( $imageObject );
            
            $processObj['options']['name'] = $lastElement->save;
            //$obj = $this->crop($lastElement->resources, $processObj['options']);
            
            $newLastResources = array_shift( $obj->image);
            array_push($imageObject, $newLastResources);
            $obj->image = $imageObject;
            return $obj;
        }else{
            if(isset($arg[1])){
                return $this->crop( $arg[0], $arg[1]);
            }else{
                return $this->crop( $arg[0]);
            }
        }
    }
    
    public function watermark(){
        $arg = func_get_arg();
        if(is_array($arg[1]))
        {
            $processObj = $arg[2];
            $imageObject = $processObj->image;
            $lastElement = end($imageObject);
            
            $arg[1]['name'] = $lastElement->save;
            $obj = $this->watermark_image($lastElement->resources, $arg[0], $arg[1]);
            $newLastResources = array_shift( $obj->image);
            array_pop( $imageObject );
            array_push($imageObject, $newLastResources);
            $obj->image = $imageObject;
            return $obj;
        }else{
            if(!isset($arg[2]) && !is_array(@$arg[2]))
            {
                $arg[2] = array();
            }
            return $this->watermark_image($arg[0], $arg[1], $arg[2]);
        }
    }
    
    //crop images
    private function crop($url, $options = array()){
        $setWidth = isset($options['width'])? $options['width']:NULL;
        $setHeight = isset($options['height'])? $options['height']:NULL;
        $imageCropingType = isset($options['isProportion'])? $options['isProportion']:TRUE;
        $x = isset($options['x'])? $options['x']:0;
        $y = isset($options['y'])? $options['y']:0;
        $cropFrom = isset($options['cropFrom'])? $options['cropFrom']:'auto';
        $name = isset($options['name'])? $options['name']:'crop.png';
        $quality = isset($options['quality'])? $options['quality']:$this->JPEG_QUALITY;
        $compression = isset($options['compression'])? $options['compression']:$this->PNG_COMPRESSION;
        
        //only allow set crop propertion if width and height both are specified
        if(!$imageCropingType){
            if($setWidth >= 1 && $setHeight >= 1){
                $imageCropingType = $imageCropingType;
            }else{
                $imageCropingType = true;
            }
        }
        
        //load default image size if not specified width and height in array
        if($setWidth == NULL && $setHeight == NULL){
            $setWidth = $this->SET_WIDTH;
            $setHeight = $this->SET_HEIGHT;
        }
        
        $imageCropingType = is_resource($url) ? $url : $this->image_resources($url);
        
        $width = imagesx($imageResources);
        $height = imagesy($imageResources);
        $imageSize = $this->size($width, $height, $setWidth, $setHeight, $imageCropingType);
        
        //crop location
        if(($setWidth == NULL && $setHeight != NULL) || ($setWidth != NULL && $setHeight == NULL)){
            $setWidth = $imageSize->new_width;
            $setHeight = $imageSize->new_height;
        }
        
        $destResources = imagecreatetruecolor($setWidth, $setHeight);
        imagealphablending($destResources, false);
        imagesavealpha($destResources, true);
        
        //imagecopyresampled($destResources, $imageResources, $cropObject->x + $x, $cropObject->y + $y, 0, 0, $dst_w, $dst_h, $src_w, $src_h)
    }
    
}