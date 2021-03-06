<?php

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Tests;

use JoliCode\Slack\Api\Model\ApiTestGetResponse200;
use JoliCode\Slack\ClientFactory;
use PHPUnit\Framework\TestCase;

class FunctionalTest extends TestCase
{
    public function testItWorksOnTestSuccess()
    {
        $client = ClientFactory::create('');
        $response = $client->apiTest();

        self::assertInstanceOf(ApiTestGetResponse200::class, $response);
        self::assertTrue($response->getOk());
    }

    public function testItWorksOnTestError()
    {
        $client = ClientFactory::create('');
        $response = $client->apiTest([
            'error' => 'yolo',
        ]);

        self::assertInstanceOf(ApiTestGetResponse200::class, $response);
        self::assertFalse($response->getOk());
    }
}
