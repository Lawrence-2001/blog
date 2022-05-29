<?php
    function convertToUTF8(string $string) {
        return mb_convert_encoding($string, 'UTF-8');
    }

    function extractFields(array $sourceArray, array $keyNames) : array {
        $result = [];
        foreach ($keyNames as $key){
            $result[$key] = !empty($sourceArray[$key]) ? validationField(
                                                           convertToUTF8($sourceArray[$key])) : '';
        }
        return $result;
    }

    function isFieldsEntered(array $fields) : bool{
        $marker = true;
        foreach ($fields as $field){
            if(empty($field)){
                $marker = false;
            }
        }
        return $marker;
    };
    function validationField(string $field) : string {
        return trim(convertToUTF8($field));
    }

    function checkLengthOfField(string $string, int $length) : int {
        return mb_strlen($string, 'UTF-8') >= $length;
    }

    function checkLengthOfFields(array $fields, int $length) : bool {
        $marker = true;
        foreach ($fields as $field){
            if(!checkLengthOfField($field, $length)){
                $marker = false;
            }
        }
        return $marker;
    }

    function coverField(string $field) : string {
        return htmlspecialchars($field);
    }