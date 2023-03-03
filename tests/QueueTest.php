<?php

namespace Tests;

use App\Leetcode\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends testcase
{

    /**
     * Implement a first in first out (FIFO) queue using only two stacks. The implemented queue should support all the functions of a normal queue (push, peek, pop, and empty).
     *
     * Implement the MyQueue class:
     *
     * void push(int x) Pushes element x to the back of the queue.
     * int pop() Removes the element from the front of the queue and returns it.
     * int peek() Returns the element at the front of the queue.
     * boolean empty() Returns true if the queue is empty, false otherwise.
     * https://leetcode.com/problems/implement-queue-using-stacks/
     *
     * @test
     */
    public function it_ensure_queue_object_behave_first_in_first_out()
    {
        $stack = new Queue();
        $stack->push(1);
        $stack->push(2);

        $this->assertSame(1, $stack->peek());
        $this->assertSame(1, $stack->pop());
        $this->assertFalse($stack->empty());
        $this->assertSame(2, $stack->peek());
    }
}