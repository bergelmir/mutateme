<?php

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Mutateme_Test2_AllMyTests::main');
}

require_once dirname(__FILE__).'/MathTest.php';

class Mutateme_Test2_AllMyTests
{
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Math');

        $suite->addTestSuite('MM2_MathTest');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Mutateme_Test2_AllMyTests::main') {
    Mutateme_Test2_AllMyTests::main();
}
