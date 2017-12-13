<?php
/**

 * 
 * @Date: 2017/6/30 23:11
 */

namespace Kerisy\Log\Target;


use Kerisy\Log\Target;

/**
 * Class UdpTarget
 *
 * @package Kerisy\Log\Target
 */
class UdpTarget extends Target
{
    protected $handler;

    public function getUnderlyingHandler()
    {
        //todo
        return $this->handler;
    }
}