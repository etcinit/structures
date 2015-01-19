<?php

namespace Tests\Chromabits\Structures\BinaryTree;

use Chromabits\Structures\BinaryTree\BinarySearchTree;
use Tests\Chromabits\Support\TestCase;

/**
 * Class BinarySearchTreeTest
 *
 * @package Tests\Chromabits\Structures\BinaryTree
 */
class BinarySearchTreeTest extends TestCase
{
    public function testConstruct()
    {
        $this->assertInstanceOf(
            [
                'Chromabits\Structures\BinaryTree\BinarySearchTree'
            ],
            new BinarySearchTree()
        );
    }

    public function testCount()
    {
        $tree = new BinarySearchTree();

        $tree->push(10);

        $this->assertEquals(1, $tree->count());

        $tree->push(5);
        $tree->push(15);

        $this->assertEquals(3, $tree->count());

        $tree->push(3);
        $tree->push(20);

        $this->assertEquals(5, $tree->count());
    }

    public function testDepthTraversalWithEmpty()
    {
        $tree = new BinarySearchTree();

        $tree->depthTraversal(function () {

        });
    }

    public function testSearch()
    {
        $tree = new BinarySearchTree();

        $tree->push(10);
        $tree->push(5);
        $tree->push(15);
        $tree->push(3);
        $tree->push(20);
        $tree->push(9);

        $this->assertEquals(10, $tree->search(10)->getKey());
        $this->assertEquals(15, $tree->search(15)->getKey());
        $this->assertEquals(3, $tree->search(3)->getKey());
        $this->assertEquals(9, $tree->search(9)->getKey());
        $this->assertNull($tree->search(90));
    }
}
