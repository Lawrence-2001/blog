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


function buildPage(string $templateName, array $pageParams, array $templateParams = []): string
{
    extract($pageParams);
    $content = template($templateName, $templateParams);
    /** @var string $sidebar
     **@var array $categories
     */
    $sidebarHTML = template($sidebar, ['categories' =>$categories]);
    $pageHTML = template('main/main', ['content' => $content, 'sidebar' => $sidebarHTML, 'title' => $title]);

    return $pageHTML;
}
