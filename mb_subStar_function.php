<?php
    public function MbSubstr($val,$lenght1,$lenght2) {
        $str = "&nbsp;abc"; 
        $converted = strtr($val, array_flip(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES))); 
        $str = trim($converted, chr(0xC2).chr(0xA0));
        $str =  strip_tags($str);
        $str=  preg_replace('/^[\pZ\pC]+|[\pZ\pC]+$/u', '', $str);

        return mb_substr($str,$lenght1,$lenght2, "utf-8");
    }
?>
