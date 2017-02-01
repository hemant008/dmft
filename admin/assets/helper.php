<?php
class helper
{
    function removeSpecialCharacter($str)
    {
        $new_data = preg_replace('/[^a-zA-Z0-9\_\.\ \,\"]/', ' ', $str);
        return $new_data;
    }
}

?>
