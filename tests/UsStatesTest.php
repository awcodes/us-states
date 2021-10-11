<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Awcodes\UsStates\UsStates;

class UsStatesTest extends TestCase
{
    /** @test */
    function it_can_get_all_states()
    {
        $allStates = UsStates::all();
        $this->assertCount(51, $allStates);
    }

    /** @test */
    function it_can_get_a_state_by_code()
    {
        $state = UsStates::where('code', 'al');
        $this->assertEquals($state->code, 'AL');
        $this->assertEquals($state->name, 'Alabama');
        $this->assertEquals($state->slug, 'alabama');
    }

    /** @test */
    function it_can_get_a_state_by_name()
    {
        $state = UsStates::where('name', 'Alabama');
        $this->assertEquals($state->code, 'AL');
        $this->assertEquals($state->name, 'Alabama');
        $this->assertEquals($state->slug, 'alabama');
    }

    /** @test */
    function it_can_get_a_state_by_slug()
    {
        $state = UsStates::where('slug', 'alabama');
        $this->assertEquals($state->code, 'AL');
        $this->assertEquals($state->name, 'Alabama');
        $this->assertEquals($state->slug, 'alabama');
    }
}
