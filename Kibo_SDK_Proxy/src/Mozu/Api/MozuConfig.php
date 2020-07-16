<?php

namespace Drupal\kibo_sdk_proxy\Mozu\Api;

class MozuConfig
{
    public static $baseAppAuthUrl = "https://home.mozu.com";
    public static $basePciUrl = "https://pmts.mozu.com";
    public static $baseDevPciUrl = "https://payments-sb.mozu.com";
    public static $throwExceptionOn404 = false;
}
?>