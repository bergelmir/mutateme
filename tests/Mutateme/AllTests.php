<?php
/**
 * Mutateme
 *
 * LICENSE
 *
 * Copyright (c) 2010, Arvid Bergelmir
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 *     * Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *     * Redistributions in binary form must reproduce the above copyright notice,
 *       this list of conditions and the following disclaimer in the documentation
 *       and/or other materials provided with the distribution.
 *
 *     * The name of Arvid Bergelmir may not be used to endorse or promote
 *       products derived from this software without specific prior written
 *       permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   Mutateme
 * @package    Mutateme
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2010 Arvid Bergelmir (http://www.flabben.net/)
 * @author     Arvid Bergelmir <arvid.bergelmir@flabben.net>
 * @license    http://github.com/bergelmir/mutateme/blob/master/LICENSE New BSD License
 */

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Mutateme_AllTests::main');
}

/**
 * Bootstrap
 */
require_once realpath(dirname(__FILE__) . '/../Bootstrap.php');

/**
 * Test class for all Mutateme classes
 */
class Mutateme_AllTests
{
    /**
     * @static
     * @access public
     * @return void
     */
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(
            self::suite()
        );
    }
    
    /**
     * @static
     * @access public
     * @return PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Mutateme Mutation Framework - Mutateme');
        
        require_once 'Mutateme/Adapter/AllTests.php';
        $suite->addTest(Mutateme_Adapter_AllTests::suite());
        
        require_once 'Mutateme/ConsoleTest.php';
        $suite->addTestSuite('Mutateme_ConsoleTest');
        
        require_once 'Mutateme/GeneratorTest.php';
        $suite->addTestSuite('Mutateme_GeneratorTest');
        
        require_once 'Mutateme/LoaderTest.php';
        $suite->addTestSuite('Mutateme_LoaderTest');
        
        require_once 'Mutateme/MutableTest.php';
        $suite->addTestSuite('Mutateme_MutableTest');
        
        require_once 'Mutateme/Mutation/AllTests.php';
        $suite->addTest(Mutateme_Mutation_AllTests::suite());
        
        require_once 'Mutateme/Renderer/AllTests.php';
        $suite->addTest(Mutateme_Renderer_AllTests::suite());
        
        require_once 'Mutateme/Runner/AllTests.php';
        $suite->addTest(Mutateme_Runner_AllTests::suite());
        
        require_once 'Mutateme/Utility/AllTests.php';
        $suite->addTest(Mutateme_Utility_AllTests::suite());
        
        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Mutateme_AllTests::main') {
    Mutateme_AllTests::main();
}

