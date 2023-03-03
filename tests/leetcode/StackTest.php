<?php

namespace Tests\leetcode;

use App\Leetcode\Stack;
use PHPUnit\Framework\TestCase;

class StackTest extends testcase
{

    /**
     * Implement a last-in-first-out (LIFO) stack using only two queues. The implemented stack should support all the functions of a normal stack (push, top, pop, and empty).
     *
     * Implement the MyStack class:
     *
     * void push(int x) Pushes element x to the top of the stack.
     * int pop() Removes the element on the top of the stack and returns it.
     * int top() Returns the element on the top of the stack.
     * boolean empty() Returns true if the stack is empty, false otherwise.
     * like java stack class
     * https://leetcode.com/problems/implement-stack-using-queues/description/
     *
     * @test
     */
    public function it_ensure_stack_object_behave_first_in_last_out()
    {
        $stack = new Stack();
        $stack->push(1);
        $stack->push(2);

        $this->assertSame(2, $stack->top());
        $this->assertSame(2, $stack->pop());
        $this->assertFalse($stack->empty());
        $this->assertSame(1, $stack->top());
    }
}