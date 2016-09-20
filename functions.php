<?php
    require_once('config.php');

    function __($text, $lang = 'fr'){
        //TODO: i18n the text 
        return $text;
    }
    function addCss(string $path){
        return '<link rel="stylesheet" href="' . STYLE_FOLDER . "$path\"/>";
    }

    function addScript(string $path){
        return '<script src="' . SCRIPT_FOLDER . "$path\"></script>";
    }

    function addImage(string $name, string $alt,array $class = null){
        $image = '<img src="' . MEDIA_FOLDER . "$name\" alt=\"$alt\"";
        if($class !== null){
            $image .= ' class="' . implode(' ', $class) . '"';
        }
        $image .= '/>';
        return $image;
    }
