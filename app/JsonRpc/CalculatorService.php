<?php


namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="CalculatorService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 * Class CalculatorService
 * @package App\JsonRpc
 */
class CalculatorService implements CalculatorServiceInterface
{

    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}