<?php
function replaceH1($html) {
    return str_replace("<h1>", "<h2>", $html);
}

function replaceH1Close($html) {
    return str_replace("</h1>", "</h2>", $html);
}

function replaceP($html) {
    return str_replace("<p>", "<div>", $html);
}

function replacePClose($html) {
    return str_replace("</p>", "</div>", $html);
}

function replaceA($html) {
    return str_replace("<a>", "<button>", $html);
}

function replaceAClose($html) {
    return str_replace("</a>", "</button>", $html);
}

function replaceStrong($html) {
    return str_replace("<strong>", "<b>", $html);
}

function replaceStrongClose($html) {
    return str_replace("</strong>", "</b>", $html);
}

function replaceEm($html) {
    return str_replace("<em>", "<i>", $html);
}

function replaceEmClose($html) {
    return str_replace("</em>", "</i>", $html);
}

function convertHtmlTags($html) {
    $html = replaceH1($html);
    $html = replaceH1Close($html);
    $html = replaceP($html);
    $html = replacePClose($html);
    $html = replaceA($html);
    $html = replaceAClose($html);
    $html = replaceStrong($html);
    $html = replaceStrongClose($html);
    $html = replaceEm($html);
    $html = replaceEmClose($html);
    return $html;
}