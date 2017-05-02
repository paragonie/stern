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
        $candidates = [
            'strict' . \ucfirst($name),
            'strict' . $name
        ];
        foreach ($candidates as $method) {
            if (\method_exists($this, $method)) {
                return $this->{$method}(...$arguments);
            }
        }
        throw new \Error(
            \sprintf('Destination proxy method %s not found on class %s', $name, \get_class($this))
        );
    }
}
