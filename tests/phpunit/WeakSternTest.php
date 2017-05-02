<?php

class WeakSternTest extends \PHPUnit\Framework\TestCase
{
    public function testWeakBool()
    {
        $weak = new \ParagonIE\SternTests\Weak();
        $this->assertSame(true, $weak->weakBool(true));
        $this->assertSame(false, $weak->weakBool(false));
        try {
            $weak->weakBool(null);
            $this->fail('Expected a TypeError');
        } catch (Error $ex) {
            $this->assertTrue($ex instanceof TypeError);
        }
        try {
            $weak->weakBool(0);
            $this->fail('Expected a TypeError');
        } catch (Error $ex) {
            $this->assertTrue($ex instanceof TypeError);
        }
    }

    public function testWeakFloat()
    {
        $weak = new \ParagonIE\SternTests\Weak();
        $this->assertSame(123.45, $weak->weakFloat(123.45));
        $this->assertSame(12345.0, $weak->weakFloat(12345.0));

        try {
            $weak->weakFloat('123.44');
            $this->fail('Expected a TypeError');
        } catch (Error $ex) {
            $this->assertTrue($ex instanceof TypeError);
        }
    }

    public function testWeakInt()
    {
        $weak = new \ParagonIE\SternTests\Weak();
        $this->assertSame(12345, $weak->weakInt(12344));

        try {
            $weak->weakInt('12344');
            $this->fail('Expected a TypeError');
        } catch (Error $ex) {
            $this->assertTrue($ex instanceof TypeError);
        }
    }

    public function testWeakString()
    {
        $weak = new \ParagonIE\SternTests\Weak();
        $this->assertSame('nccyr', $weak->weakString('apple'));
        $this->assertSame('NCCYR', $weak->weakString('APPLE'));
        $this->assertSame('12345', $weak->weakString('12345'));

        try {
            $weak->weakString(12345);
            $this->fail('Expected a TypeError');
        } catch (Error $ex) {
            $this->assertTrue($ex instanceof TypeError);
        }
    }

}