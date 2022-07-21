<?php

namespace Vendor\MyPackage\Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**tests */

    public function it_can_create_role()
    {
        $role = Role::create([
            'name'=>'Priti Thakur',
            'address'=>'Ballia'
        ]);

        $this->assertTrue($role->exists);
    }
}
?>