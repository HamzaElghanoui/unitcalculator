<?php

use drmonkeyninja\Collection;
use PHPUnit\Framework\TestCase;
class CollectionTest extends TestCase {

    protected $collection;

    public function setUp()
    {
        $this->collection = new Collection(['one','two','tree']);
    }

    public function testEmptyCollection(){
        $collection = new Collection();
        $this->assertEmpty($collection->get());
    }

    public function testCountCollectionIsTrue(){
        $collection = new Collection(['one','two','tree']);
    
        $this->assertEquals($collection->count(), 3);
    }

    public function testAssertCountCollectionIsTrue(){
        $collection = new Collection(['one','two']);
    
        $this->assertCount(2, $collection->get());
    }
}

?>