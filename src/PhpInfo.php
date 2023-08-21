<?php

namespace Alexeibob\UselessPackage;

require_once "../vendor/autoload.php";

class PhpInfo
{
    public static function showInfo(): void
    {
        echo "This useless package was developed by Alexei Bobrik";
        phpinfo();
    }
}