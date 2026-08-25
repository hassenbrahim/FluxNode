<?php
/**
 * Tests for FluxNode
 */

use PHPUnit\Framework\TestCase;
use Fluxnode\Fluxnode;

class FluxnodeTest extends TestCase {
    private Fluxnode $instance;

    protected function setUp(): void {
        $this->instance = new Fluxnode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fluxnode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
