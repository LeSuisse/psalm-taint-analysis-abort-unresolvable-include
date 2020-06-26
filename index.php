<?php // --taint-analysis

function getPath(): string
{
    return "/computed/path";
}

require_once getPath();

echo $_GET['a'];
