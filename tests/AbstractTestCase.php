<?php

namespace BrianFaust\Tests\TurnKey;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return \BrianFaust\TurnKey\ServiceProvider::class;
    }
}
