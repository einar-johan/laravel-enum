<?php

namespace BenSampo\Enum\Tests\Enums\Annotate;

use BenSampo\Enum\Enum;

final class AnnotateTestThreeEnum extends Enum
{
    const AnExampleOfAValueThatIsReallyLongAndShouldNotBeSplitOverTwoLines = 'test';
    const XYZ = 'xyz';
}
