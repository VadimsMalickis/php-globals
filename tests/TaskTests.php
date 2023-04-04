<?php

declare(strict_types=1);

namespace Tests;
require __DIR__.'/../index.php';

use PHPUnit\Framework\TestCase;

final class TaskTests extends TestCase
{
    public function testSomething(): void
    {
        $this->assertEquals('hello', 'hello');
    }
}