<?php

declare(strict_types=1);

namespace Koriym\ParamReader;

use PHPUnit\Framework\TestCase;

class ParamReaderTest extends TestCase
{
    /** @var ParamReader */
    protected $paramReader;

    protected function setUp(): void
    {
        $this->paramReader = new ParamReader();
    }

    public function testIsInstanceOfParamReader(): void
    {
        $actual = $this->paramReader;
        $this->assertInstanceOf(ParamReader::class, $actual);
    }
}
