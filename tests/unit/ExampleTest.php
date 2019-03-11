<?php namespace App\Tests;

use App\Entity\Formation;

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \App\Tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {

    }
    
    public function testEntityFormation()
    {
        $entity = new Formation();
        
        $entity->setName('TITI');
        
        $this->assertEquals('TITI', $entity->getName());
    }
}