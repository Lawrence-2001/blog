<?php
function template(string $templateName, array $templateParams = []) : string
{
    $templatePath = "view/$templateName.php";
    extract($templateParams);
    ob_start();
    require_once($templatePath);
    $bufferValue = ob_get_clean();
    return $bufferValue;
}

