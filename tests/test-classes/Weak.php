<?php
/* declare is intentionally not included here */
namespace ParagonIE\SternTests;

use ParagonIE\Stern\SternTrait;

/**
 * Class Weak
 * @package ParagonIE\SternTests
 *
 * @method bool weakBool(bool $isWeak = false)
 * @method string weakString(string $str = '')
 * @method float weakFloat(float $f)
 * @method int weakInt(int $int)
 */
class Weak
{
    use SternTrait;

    /**
     * @param bool $isWeak
     * @return bool
     */
    protected function strictWeakBool(bool $isWeak = false): bool
    {
        return $isWeak;
    }

    /**
     * @param string $str
     * @return string
     */
    protected function strictWeakString(string $str = ''): string
    {
        return \str_rot13($str);
    }

    /**
     * @param float $f
     * @return float
     */
    protected function strictWeakFloat(float $f): float
    {
        return $f;
    }

    /**
     * @param int $int
     * @return int
     */
    protected function strictWeakInt(int $int): int
    {
        return $int + 1;
    }
}
