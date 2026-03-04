<?php
/**
 * Tests for BlockShield
 */

use PHPUnit\Framework\TestCase;
use Blockshield\Blockshield;

class BlockshieldTest extends TestCase {
    private Blockshield $instance;

    protected function setUp(): void {
        $this->instance = new Blockshield(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockshield::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
