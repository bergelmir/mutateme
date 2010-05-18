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
    define('PHPUnit_MAIN_METHOD', 'Mutateme_Mutation_AllTests::main');
}

/**
 * Bootstrap
 */
require_once realpath(dirname(__FILE__) . '/../../Bootstrap.php');

/**
 * Test class for all Mutateme_Mutation classes
 */
class Mutateme_Mutation_AllTests
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
        $suite = new PHPUnit_Framework_TestSuite('Mutateme Mutation Framework - Mutateme_Mutation');
        
        require_once 'Mutateme/Mutation/AndEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_AndEqualTest');
        
        require_once 'Mutateme/Mutation/BooleanAndTest.php';
        $suite->addTestSuite('Mutateme_Mutation_BooleanAndTest');
        
        require_once 'Mutateme/Mutation/BooleanFalseTest.php';
        $suite->addTestSuite('Mutateme_Mutation_BooleanFalseTest');
        
        require_once 'Mutateme/Mutation/BooleanOrTest.php';
        $suite->addTestSuite('Mutateme_Mutation_BooleanOrTest');
        
        require_once 'Mutateme/Mutation/BooleanTrueTest.php';
        $suite->addTestSuite('Mutateme_Mutation_BooleanTrueTest');
        
        require_once 'Mutateme/Mutation/DivEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_DivEqualTest');
        
        require_once 'Mutateme/Mutation/IsEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_IsEqualTest');
        
        require_once 'Mutateme/Mutation/IsGreaterOrEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_IsGreaterOrEqualTest');
        
        require_once 'Mutateme/Mutation/IsIdenticalTest.php';
        $suite->addTestSuite('Mutateme_Mutation_IsIdenticalTest');
        
        require_once 'Mutateme/Mutation/IsNotEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_IsNotEqualTest');
        
        require_once 'Mutateme/Mutation/IsNotIdenticalTest.php';
        $suite->addTestSuite('Mutateme_Mutation_IsNotIdenticalTest');
        
        require_once 'Mutateme/Mutation/IsSmallerOrEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_IsSmallerOrEqualTest');
        
        require_once 'Mutateme/Mutation/MinusEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_MinusEqualTest');
        
        require_once 'Mutateme/Mutation/MulEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_MulEqualTest');
        
        require_once 'Mutateme/Mutation/OperatorAdditionTest.php';
        $suite->addTestSuite('Mutateme_Mutation_OperatorAdditionTest');
        
        require_once 'Mutateme/Mutation/OperatorDecrementTest.php';
        $suite->addTestSuite('Mutateme_Mutation_OperatorDecrementTest');
        
        require_once 'Mutateme/Mutation/OperatorIncrementTest.php';
        $suite->addTestSuite('Mutateme_Mutation_OperatorIncrementTest');
        
        require_once 'Mutateme/Mutation/OperatorSubtractionTest.php';
        $suite->addTestSuite('Mutateme_Mutation_OperatorSubtractionTest');
        
        require_once 'Mutateme/Mutation/OrEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_OrEqualTest');
        
        require_once 'Mutateme/Mutation/PlusEqualTest.php';
        $suite->addTestSuite('Mutateme_Mutation_PlusEqualTest');
        
        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Mutateme_Mutation_AllTests::main') {
    Mutateme_Mutation_AllTests::main();
}

