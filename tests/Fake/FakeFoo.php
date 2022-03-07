<?php

declare(strict_types=1);

namespace Koriym\ParamReader;

use Attribute;
use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;

/**
 * @Annotation
 * @Target({"METHOD","PROPERTY"})
 * @NamedArgumentConstructor()
 */
#[Attribute(Attribute::TARGET_PARAMETER | Attribute::TARGET_PROPERTY)]
final class FakeFoo implements FakeInterface
{
}
