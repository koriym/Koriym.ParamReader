<?php

declare(strict_types=1);

namespace Koriym\ParamReader;

final class FakeAttributeConsumer
{
    public function __construct(#[FakeFoo, FakeBar] string $foo, int $bar)
    {
    }
}
