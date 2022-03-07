<?php

declare(strict_types=1);

namespace Koriym\ParamReader;

/**
 * @requires PHP 8.0
 */
class ParamReaderPhp8Test extends ParamReaderTest
{
    /**
     * @return string[][]
     */
    public function dataProvider(): array
    {
        return [
            [FakeAnnotationConsumer::class],
            [FakeAttributeConsumer::class],
        ];
    }
}
