<?php

declare(strict_types=1);

namespace Koriym\ParamReader;

use PHPUnit\Framework\TestCase;
use ReflectionParameter;

use function count;

class ParamReaderTest extends TestCase
{
    /** @var ParamReader  */
    protected $reader;

    protected function setUp(): void
    {
        $this->reader = new ParamReader();
    }

    /**
     * @return string[][]
     */
    public function dataProvider(): array
    {
        return [
            [FakeAnnotationConsumer::class],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testGetParametrAnnotation(string $class): void
    {
        $prop = $this->reader->getParametrAnnotation(
            new ReflectionParameter(
                [$class, '__construct'],
                'foo'
            ),
            FakeFoo::class
        );
        $this->assertInstanceOf(FakeFoo::class, $prop);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testNotFound(string $class): void
    {
        $annotation = $this->reader->getParametrAnnotation(
            new ReflectionParameter(
                [$class, '__construct'],
                'bar'
            ),
            FakeFoo::class
        );
        $this->assertNull($annotation);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testGetParametrAnnotations(string $class): void
    {
        $annotations = $this->reader->getParametrAnnotations(
            new ReflectionParameter(
                [$class, '__construct'],
                'foo'
            )
        );
        $this->assertSame(2, count($annotations));
        $this->assertContainsOnlyInstancesOf(FakeInterface::class, $annotations);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testGetParametrAnnotationsEmpty(string $class): void
    {
        $annotations = $this->reader->getParametrAnnotations(
            new ReflectionParameter(
                [$class, '__construct'],
                'bar'
            )
        );
        $this->assertSame([], $annotations);
    }
}
