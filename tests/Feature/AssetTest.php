<?php

namespace OwenVoke\Arionum\Tests\Feature;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use OwenVoke\Arionum\Arionum;
use OwenVoke\Arionum\Exceptions\GenericApiException;
use OwenVoke\Arionum\Tests\TestCase;

final class AssetTest extends TestCase
{
    private const TEST_ASSET = 'aro';

    /**
     * @test
     * @return void
     * @throws GenericApiException
     */
    public function itCanRetrieveAnAssetBalance(): void
    {
        $mock = new MockHandler([
            new Response(200, [], '{"data": [], "status": "ok"}'),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $this->arionum = new Arionum(self::TEST_NODE, $client);

        $data = $this->arionum->getAssetBalance(self::TEST_ADDRESS);
        $this->assertIsArray($data);
        $this->assertEmpty($data);
    }

    /**
     * @test
     * @return void
     * @throws GenericApiException
     */
    public function itCanRetrieveAssetOrders(): void
    {
        $mock = new MockHandler([
            new Response(200, [], '{"data": [], "status": "ok"}'),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $this->arionum = new Arionum(self::TEST_NODE, $client);

        $data = $this->arionum->getAssetOrders(self::TEST_ADDRESS);
        $this->assertIsArray($data);
        $this->assertEmpty($data);
    }

    /**
     * @test
     * @return void
     * @throws GenericApiException
     */
    public function itCanRetrieveAssets(): void
    {
        $mock = new MockHandler([
            new Response(200, [], '{"data": [], "status": "ok"}'),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $this->arionum = new Arionum(self::TEST_NODE, $client);

        $data = $this->arionum->getAssets();
        $this->assertIsArray($data);
        $this->assertEmpty($data);
    }

    /**
     * @test
     * @return void
     * @throws GenericApiException
     */
    public function itCanRetrieveAnAsset(): void
    {
        $mock = new MockHandler([
            new Response(200, [], '{"data": [], "status": "ok"}'),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $this->arionum = new Arionum(self::TEST_NODE, $client);

        $data = $this->arionum->getAsset(self::TEST_ASSET);
        $this->assertIsArray($data);
        $this->assertEmpty($data);
    }
}
