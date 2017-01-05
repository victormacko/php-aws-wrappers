<?php

namespace Oasis\Mlib\AwsWrappers\Test;

use Symfony\Component\Yaml\Yaml;

/**
 * Created by PhpStorm.
 * User: minhao
 * Date: 2016-09-09
 * Time: 10:33
 */
class UTConfig
{
    public static $awsConfig      = [];
    public static $dynamodbConfig = [];
    
    public static function load()
    {
        $file = __DIR__ . "/ut.yml";
        $yml  = Yaml::parse(file_get_contents($file));
        
        self::$awsConfig      = $yml['aws'];
        self::$dynamodbConfig = $yml['dynamodb'];
    }
}
