<?php
function convertToUTF8(string $string)
{
    return mb_convert_encoding($string, 'UTF-8');
}

function extractFields(array $sourceArray, array $keyNames): array
{
    $result = [];
    foreach ($keyNames as $key) {
        $result[$key] = !empty($sourceArray[$key]) ? trim(
            convertToUTF8($sourceArray[$key])) : '';
    }
    return $result;
}

function fieldsIsEntered(array $fields): bool
{
    $marker = true;
    foreach ($fields as $field) {
        if (empty($field)) {
            $marker = false;
        }
    }
    return $marker;
}

;

function checkMinLengthOfField(string $string, int $minLength): bool
{
    return mb_strlen($string, 'UTF-8') >= $minLength;
}

function checkMinLengthOfFields(array $fields, int $minLength): bool
{
    $marker = true;
    foreach ($fields as $field) {
        if (!checkMinLengthOfField($field, $minLength)) {
            $marker = false;
        }
    }
    return $marker;
}

function escapingFields(string $field): string
{
    return htmlspecialchars($field);
}

function validateFormFields(array $fields, array &$errors, int $minLengthOfField)
{
    $errors['fieldsIsEntered'] = fieldsIsEntered($fields) ? true : "Fill in all the fields of the form";
    $errors['checkMinLengthOfFields'] = checkMinLengthOfFields($fields, $minLengthOfField) ? true : "Enter at least $minLengthOfField characters";
}

function notExistsErrors(array $errors): bool
{
    $marker = true;
    foreach ($errors as $error) {
        if ($error !== true) {
            $marker = false;
        }
    }
    return $marker;
}

function selectOption($firstValue, $secondValue): string
{
    return $firstValue == $secondValue ? 'selected' : '';
}