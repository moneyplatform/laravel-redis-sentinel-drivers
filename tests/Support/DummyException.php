<?php

namespace Moneyplatform\LaravelRedisSentinel\Tests\Support;

use Exception;

/**
 * An exception subtype that tests can discern from real exceptions.
 *
 * @category Package
 * @package  Moneyplatform\LaravelRedisSentinel
 * @author   Cy Rossignol <cy@rossignols.me>
 * @license  See LICENSE file
 * @link     https://github.com/moneyplatform/laravel-redis-sentinel-drivers
 */
class DummyException extends Exception
{
}
