<?php
/**
 * Tests for LearSync
 */

use PHPUnit\Framework\TestCase;
use Learsync\Learsync;

class LearsyncTest extends TestCase {
    private Learsync $instance;

    protected function setUp(): void {
        $this->instance = new Learsync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Learsync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
