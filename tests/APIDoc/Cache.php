<?php

use Api\Doc\Docer;

function generateCache()
{
    /**
     * 控制器所在的路径
     */
    $controllerPath = __DIR__ . '/conf.yml';

    /**
     * 配置文件
     */
    $file = __DIR__ . '/api.json';

    $doc = new Docer($controllerPath, $file);
    $doc->generateJson();
}

generateCache();
