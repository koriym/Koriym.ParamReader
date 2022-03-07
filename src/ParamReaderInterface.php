<?php

declare(strict_types=1);

namespace Koriym\ParamReader;

use ReflectionParameter;

/**
 * An attribute/annotation reader for method parameters
 *
 * Attempts to read the attribute(s) of the parameter,
 * and if not successful, attempts to read the annotation(s) of the property of the same parameter name.
 *
 * @template T of object
 */
interface ParamReaderInterface
{
    /**
     * Read the parameter attribute or annotation
     *
     * @param class-string<T> $class
     *
     * @return T|null
     */
    public function getParametrAnnotation(ReflectionParameter $param, string $class): ?object;

    /**
     * Read the parameter attributes or annotations
     *
     * @return array<T>
     */
    public function getParametrAnnotations(ReflectionParameter $param): array;
}
