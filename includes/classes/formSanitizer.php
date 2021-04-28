<?php 

class formSanitizer {
    public static function sanitizeFormString($inputText) {
        $inputText=strip_tags($inputText);
        $inputText=str_replace(" ","",$inputText); //remove spaces between names
        return $inputText;
    }

    public static function sanitizeFormEmail($inputText) {
        $inputText=strip_tags($inputText);
        $inputText=str_replace(" ","",$inputText); //remove spaces between names
        return $inputText;
    }

    public static function sanitizeFormPassword($inputText) {
        $inputText=strip_tags($inputText);
        return $inputText;
    }
    
}

?>