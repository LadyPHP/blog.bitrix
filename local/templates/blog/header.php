<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
$dir = $APPLICATION->GetCurDir();
$page = $APPLICATION->GetCurPage();
$assets = \Bitrix\Main\Page\Asset::getInstance();
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?
 
    /**
     * CSS
     */
    $assets->addCss(SITE_TEMPLATE_PATH . '/assets/css/main.css');
    /**
     * JS
     */
    //LOCAL
    $assets->addJs(SITE_TEMPLATE_PATH . '/js/helpers.js');
 
 
    /**
     * BITRIX ->ShowHead()
     */
    $APPLICATION->ShowMeta("robots", false);
    $APPLICATION->ShowMeta("keywords", false);
    $APPLICATION->ShowMeta("description", false);
    $APPLICATION->ShowLink("canonical", null);
    $APPLICATION->ShowCSS(true);
    $APPLICATION->ShowHeadStrings();
    $APPLICATION->ShowHeadScripts();
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
