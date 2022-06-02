<?php
function template(string $templateName, array $templateParams = []): string
{
    $templatePath = "view/$templateName.php";
    extract($templateParams);
    ob_start();
    require_once($templatePath);
    $bufferValue = ob_get_clean();
    return $bufferValue;
}

function buildPage(string $templateName, string $title, array $templateParams = []): string
{
    $content = template($templateName, $templateParams);
    $sidebarHTML = template('main/sidebar');
    $pageHTML = template('main/main', ['content' => $content, 'sidebar' => $sidebarHTML, 'title' => $title]);

    return $pageHTML;
}
