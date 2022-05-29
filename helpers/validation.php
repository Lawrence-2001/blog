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

    function fieldsIsEntered(array $fields) : bool{
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

    function checkMinLengthOfField(string $string, int $minLength) : bool {
        return mb_strlen($string, 'UTF-8') >= $minLength;
    }

    function checkMinLengthOfFields(array $fields, int $minLength) : bool {
        $marker = true;
        foreach ($fields as $field){
            if(!checkMinLengthOfField($field, $minLength)){
                $marker = false;
            }
        }
        return $marker;
    }

    function escapingFields(string $field) : string {
        return htmlspecialchars($field);
    }