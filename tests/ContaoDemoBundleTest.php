<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Jrockenbauer\ContaoDemoBundle\Tests;

use Jrockenbauer\ContaoDemoBundle\ContaoDemoBundle;
use PHPUnit\Framework\TestCase;

class ContaoDemoBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoDemoBundle();

        $this->assertInstanceOf('Jrockenbauer\ContaoDemoBundle\ContaoDemoBundle', $bundle);
    }
}
