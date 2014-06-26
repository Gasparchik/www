<?php

class DLL {

public static function substrText($inputStr,$substrLen = 200,$delimiter = " ",$end = "&nbsp;...",$encoding="utf-8")
{

    $inputStr = strip_tags($inputStr);
    $inputStrLen = mb_strlen($inputStr,$encoding);
    // return $delimiter;

    if ($inputStrLen)
    {
        if ($substrLen < $inputStrLen)
        {
            $text = mb_substr($inputStr, 0, mb_strrpos(mb_substr($inputStr, 0, $substrLen,$encoding), $delimiter,$encoding),$encoding);
            $result['text'] = $text.$end;
            $result['length'] = mb_strlen($text,$encoding);
            $result['isFull'] = false;
        }
        else
        {
            $result['text'] = $inputStr;
            $result['length'] = $inputStrLen;
            $result['isFull'] = true;
        }
        return $result['text'];
    }
    else return false;
}

}