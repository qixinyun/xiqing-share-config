<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/xiqing-share-config/src/SmartyConfig/Xq',
            S_ROOT.'vendor/qixinyun/xiqing-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/xiqing-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
