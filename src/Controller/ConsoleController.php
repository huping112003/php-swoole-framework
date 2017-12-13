<?php
/**

 * 
 * @Date: 2017/6/29 16:23
 */

namespace Kerisy\Controller;


class ConsoleController extends BaseController
{
    protected $argv = [];

    public function __construct(array $argv)
    {
        $this->argv = $argv;
    }
}