<?php

namespace spec\HH;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SetSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('HH\Set');
    }
}
