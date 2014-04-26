<?php
/**
 * Generated by build/gen_test
 */
require_once('src/lightncandy.php');

class LCRun3Test extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LCRun3::debug
     */
    public function testOn_debug() {
        $method = new ReflectionMethod('LCRun3', 'debug');
        $this->assertEquals('{{123}}', $method->invoke(null,
            '123', '', Array('flags' => Array('debug' => LCRun3::DEBUG_TAGS))
        ));
    }
    /**
     * @covers LCRun3::ifvar
     */
    public function testOn_ifvar() {
        $method = new ReflectionMethod('LCRun3', 'ifvar');
        $this->assertEquals(false, $method->invoke(null,
            Array(), null
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array(), 0
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array(), false
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array(), true
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array(), 1
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array(), ''
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array(), Array()
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array(), Array('')
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array(), Array(0)
        ));
    }
    /**
     * @covers LCRun3::ifv
     */
    public function testOn_ifv() {
        $method = new ReflectionMethod('LCRun3', 'ifv');
        $this->assertEquals('', $method->invoke(null,
            Array('scopes' => Array()), null, Array(), null
        ));
        $this->assertEquals('', $method->invoke(null,
            Array('scopes' => Array()), null, Array(), function () {return 'Y';}
        ));
        $this->assertEquals('Y', $method->invoke(null,
            Array('scopes' => Array()), 1, Array(), function () {return 'Y';}
        ));
        $this->assertEquals('N', $method->invoke(null,
            Array('scopes' => Array()), null, Array(), function () {return 'Y';}, function () {return 'N';}
        ));
    }
    /**
     * @covers LCRun3::unl
     */
    public function testOn_unl() {
        $method = new ReflectionMethod('LCRun3', 'unl');
        $this->assertEquals('', $method->invoke(null,
            Array('scopes' => Array()), null, Array(), null
        ));
        $this->assertEquals('Y', $method->invoke(null,
            Array('scopes' => Array()), null, Array(), function () {return 'Y';}
        ));
        $this->assertEquals('', $method->invoke(null,
            Array('scopes' => Array()), 1, Array(), function () {return 'Y';}
        ));
        $this->assertEquals('Y', $method->invoke(null,
            Array('scopes' => Array()), null, Array(), function () {return 'Y';}, function () {return 'N';}
        ));
        $this->assertEquals('N', $method->invoke(null,
            Array('scopes' => Array()), true, Array(), function () {return 'Y';}, function () {return 'N';}
        ));
    }
    /**
     * @covers LCRun3::isec
     */
    public function testOn_isec() {
        $method = new ReflectionMethod('LCRun3', 'isec');
        $this->assertEquals(true, $method->invoke(null,
            Array(), null
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array(), 0
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array(), false
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array(), 'false'
        ));
    }
    /**
     * @covers LCRun3::raw
     */
    public function testOn_raw() {
        $method = new ReflectionMethod('LCRun3', 'raw');
        $this->assertEquals(true, $method->invoke(null,
            Array('flags' => Array('jstrue' => 0)), true
        ));
        $this->assertEquals('true', $method->invoke(null,
            Array('flags' => Array('jstrue' => 1)), true
        ));
        $this->assertEquals('', $method->invoke(null,
            Array('flags' => Array('jstrue' => 0)), false
        ));
        $this->assertEquals('', $method->invoke(null,
            Array('flags' => Array('jstrue' => 1)), false
        ));
        $this->assertEquals('false', $method->invoke(null,
            Array('flags' => Array('jstrue' => 1)), false, true
        ));
        $this->assertEquals(Array('a', 'b'), $method->invoke(null,
            Array('flags' => Array('jstrue' => 1, 'jsobj' => 0)), Array('a', 'b')
        ));
        $this->assertEquals('a,b', $method->invoke(null,
            Array('flags' => Array('jstrue' => 1, 'jsobj' => 1)), Array('a', 'b')
        ));
        $this->assertEquals('[object Object]', $method->invoke(null,
            Array('flags' => Array('jstrue' => 1, 'jsobj' => 1)), Array('a', 'c' => 'b')
        ));
        $this->assertEquals('[object Object]', $method->invoke(null,
            Array('flags' => Array('jstrue' => 1, 'jsobj' => 1)), Array('c' => 'b')
        ));
        $this->assertEquals('a,true', $method->invoke(null,
            Array('flags' => Array('jstrue' => 1, 'jsobj' => 1)), Array('a', true)
        ));
        $this->assertEquals('a,1', $method->invoke(null,
            Array('flags' => Array('jstrue' => 0, 'jsobj' => 1)), Array('a',true)
        ));
        $this->assertEquals('a,', $method->invoke(null,
            Array('flags' => Array('jstrue' => 0, 'jsobj' => 1)), Array('a',false)
        ));
        $this->assertEquals('a,false', $method->invoke(null,
            Array('flags' => Array('jstrue' => 1, 'jsobj' => 1)), Array('a',false)
        ));
    }
    /**
     * @covers LCRun3::enc
     */
    public function testOn_enc() {
        $method = new ReflectionMethod('LCRun3', 'enc');
        $this->assertEquals('a', $method->invoke(null,
            Array(), 'a'
        ));
        $this->assertEquals('a&amp;b', $method->invoke(null,
            Array(), 'a&b'
        ));
        $this->assertEquals('a&#039;b', $method->invoke(null,
            Array(), 'a\'b'
        ));
    }
    /**
     * @covers LCRun3::encq
     */
    public function testOn_encq() {
        $method = new ReflectionMethod('LCRun3', 'encq');
        $this->assertEquals('a', $method->invoke(null,
            Array(), 'a'
        ));
        $this->assertEquals('a&amp;b', $method->invoke(null,
            Array(), 'a&b'
        ));
        $this->assertEquals('a&#x27;b', $method->invoke(null,
            Array(), 'a\'b'
        ));
    }
    /**
     * @covers LCRun3::sec
     */
    public function testOn_sec() {
        $method = new ReflectionMethod('LCRun3', 'sec');
        $this->assertEquals('', $method->invoke(null,
            false, Array('flags' => Array('spvar' => 0)), false, false, function () {return 'A';}
        ));
        $this->assertEquals('', $method->invoke(null,
            null, Array('flags' => Array('spvar' => 0)), null, false, function () {return 'A';}
        ));
        $this->assertEquals('A', $method->invoke(null,
            true, Array('flags' => Array('spvar' => 0)), true, false, function () {return 'A';}
        ));
        $this->assertEquals('A', $method->invoke(null,
            0, Array('flags' => Array('spvar' => 0)), 0, false, function () {return 'A';}
        ));
        $this->assertEquals('-a=', $method->invoke(null,
            Array('a'), Array('flags' => Array('spvar' => 0)), Array('a'), false, function ($c, $i) {return "-$i=";}
        ));
        $this->assertEquals('-a=-b=', $method->invoke(null,
            Array('a','b'), Array('flags' => Array('spvar' => 0)), Array('a','b'), false, function ($c, $i) {return "-$i=";}
        ));
        $this->assertEquals('', $method->invoke(null,
            'abc', Array('flags' => Array('spvar' => 0)), 'abc', true, function ($c, $i) {return "-$i=";}
        ));
        $this->assertEquals('-b=', $method->invoke(null,
            Array('a'=>'b'), Array('flags' => Array('spvar' => 0)), Array('a' => 'b'), true, function ($c, $i) {return "-$i=";}
        ));
        $this->assertEquals(0, $method->invoke(null,
            'b', Array('flags' => Array('spvar' => 0)), 'b', false, function ($c, $i) {return count($i);}
        ));
        $this->assertEquals('1', $method->invoke(null,
            1, Array('flags' => Array('spvar' => 0)), 1, false, function ($c, $i) {return print_r($i, true);}
        ));
        $this->assertEquals('0', $method->invoke(null,
            0, Array('flags' => Array('spvar' => 0)), 0, false, function ($c, $i) {return print_r($i, true);}
        ));
        $this->assertEquals('{"b":"c"}', $method->invoke(null,
            Array('b'=>'c'), Array('flags' => Array('spvar' => 0)), Array('b' => 'c'), false, function ($c, $i) {return json_encode($i);}
        ));
        $this->assertEquals('inv', $method->invoke(null,
            Array(), Array('flags' => Array('spvar' => 0)), 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
        $this->assertEquals('inv', $method->invoke(null,
            Array(), Array('flags' => Array('spvar' => 0)), 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
        $this->assertEquals('inv', $method->invoke(null,
            false, Array('flags' => Array('spvar' => 0)), 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
        $this->assertEquals('inv', $method->invoke(null,
            false, Array('flags' => Array('spvar' => 0)), 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
        $this->assertEquals('inv', $method->invoke(null,
            '', Array('flags' => Array('spvar' => 0)), 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
        $this->assertEquals('cb', $method->invoke(null,
            '', Array('flags' => Array('spvar' => 0)), 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
        $this->assertEquals('inv', $method->invoke(null,
            0, Array('flags' => Array('spvar' => 0)), 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
        $this->assertEquals('cb', $method->invoke(null,
            0, Array('flags' => Array('spvar' => 0)), 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
        $this->assertEquals('inv', $method->invoke(null,
            new stdClass, Array('flags' => Array('spvar' => 0)), 0, true, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
        $this->assertEquals('cb', $method->invoke(null,
            new stdClass, Array('flags' => Array('spvar' => 0)), 0, false, function ($c, $i) {return 'cb';}, function ($c, $i) {return 'inv';}
        ));
    }
    /**
     * @covers LCRun3::wi
     */
    public function testOn_wi() {
        $method = new ReflectionMethod('LCRun3', 'wi');
        $this->assertEquals('', $method->invoke(null,
            Array(), false, false, function () {return 'A';}
        ));
        $this->assertEquals('', $method->invoke(null,
            Array(), null, null, function () {return 'A';}
        ));
        $this->assertEquals('-Array=', $method->invoke(null,
            Array(), Array('a'=>'b'), Array('a' => 'b'), function ($c, $i) {return "-$i=";}
        ));
        $this->assertEquals('-b=', $method->invoke(null,
            Array(), 'b', Array('a' => 'b'), function ($c, $i) {return "-$i=";}
        ));
    }
    /**
     * @covers LCRun3::ch
     */
    public function testOn_ch() {
        $method = new ReflectionMethod('LCRun3', 'ch');
        $this->assertEquals('=-=', $method->invoke(null,
            Array('helpers' => Array('a' => function ($i) {return "=$i=";})), 'a', Array('-'), 'raw'
        ));
        $this->assertEquals('=&amp;=', $method->invoke(null,
            Array('helpers' => Array('a' => function ($i) {return "=$i=";})), 'a', Array('&'), 'enc'
        ));
        $this->assertEquals('=&#x27;=', $method->invoke(null,
            Array('helpers' => Array('a' => function ($i) {return "=$i=";})), 'a', Array('\''), 'encq'
        ));
        $this->assertEquals('=b=', $method->invoke(null,
            Array('helpers' => Array('a' => function ($i) {return "={$i['a']}=";})), 'a', Array('a' => 'b'), 'raw', true
        ));
        $this->assertEquals('=&=', $method->invoke(null,
            Array('helpers' => Array('a' => function ($i) {return Array("=$i=");})), 'a', Array('&'), 'raw'
        ));
        $this->assertEquals('=&amp;=', $method->invoke(null,
            Array('helpers' => Array('a' => function ($i) {return Array("=$i=");})), 'a', Array('&'), 'enc'
        ));
        $this->assertEquals('=&=', $method->invoke(null,
            Array('helpers' => Array('a' => function ($i) {return Array("=$i=");})), 'a', Array('&'), 'raw'
        ));
        $this->assertEquals('=&amp;&#039;&quot;=', $method->invoke(null,
            Array('helpers' => Array('a' => function ($i) {return Array("=$i=", 'enc');})), 'a', Array('&\'"'), 'raw'
        ));
        $this->assertEquals('=&amp;&#x27;&quot;=', $method->invoke(null,
            Array('helpers' => Array('a' => function ($i) {return Array("=$i=", 'encq');})), 'a', Array('&\'"'), 'raw'
        ));
    }
}
?>