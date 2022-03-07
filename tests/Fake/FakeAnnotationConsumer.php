<?php

declare(strict_types=1);

namespace Koriym\ParamReader;

final class FakeAnnotationConsumer
{
    /**
     * @FakeFoo
     * @FakeBar
     */
    private $foo;

    private $bar;

    public function __construct(string $foo, int $bar)
    {
    }
}
