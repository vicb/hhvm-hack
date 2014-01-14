<?php

namespace spec\HH;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SetSpec extends ObjectBehavior
{
    function it_is_initializable() {
        $this->shouldHaveType('HH\Set');
    }

    function it_should_be_empty_on_initialization() {
        $this->shouldHaveCount(0);
    }

    function it_should_allow_adding_values() {
        $this->add(1);
        $this->add(2);
        $this->shouldHaveCount(2);
        $this->contains(1)->shouldBe(true);
        $this->contains(2)->shouldBe(true);
    }

    function it_should_not_contain_duplicate_values() {
        $this->add('foo');
        $this->add('foo');
        $this->shouldHaveCount(1);
        $this->contains('foo')->shouldBe(true);
    }

    function it_should_support_adding_an_array() {
        $this->addAll(['foo', 'foo', 'bar']);
        $this->shouldHaveCount(2);
        $this->contains('foo')->shouldBe(true);
        $this->contains('bar')->shouldBe(true);
    }
}
