<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StackTest extends \PHPUnit_Framework_TestCase
{
   
    public function test_push()
    {

	$stack=[];
 	$this->assertEquals(0,count($stack));
 	array_push($stack,'foo');
	$this->assertEquals('foo',$stack[count($stack)-1]);
	$this->assertEquals(1,count($stack));

	$this->assertEquals('foo',array_pop($stack));
	$this->assertEquals(0,count($stack));


    }
}
