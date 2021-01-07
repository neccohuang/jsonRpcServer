<?php


namespace App\JsonRpc;


use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="MathService", protocol="jsonrpc-http", server="math-http", publishTo="consul")
 * Class MathService
 * @package App\JsonRpc
 */
class MathService implements MathServiceInterface
{

    public function plus(int $a, int $b): int
    {
        return $a + $b;
    }
}