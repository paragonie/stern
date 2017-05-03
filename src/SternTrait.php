<?php
declare(strict_types=1);
namespace ParagonIE\Stern;

/**
 * Trait SternTrait
 * @package ParagonIE\Stern
 */
trait SternTrait
{
    /**
     * @param string $name
     * @param mixed $arguments
     * @return mixed
     * @throws \Error
     */
    public function __call($name, $arguments)
    {
        if (\method_exists($this, 'strict' . $name)) {
            return $this->{'strict' . $name}(...$arguments);
        }
        
        throw new \Error(
            \sprintf('Destination proxy method %s not found on class %s', 'strict' . $name, \get_class($this))
        );
    }
}
