<?php
/**

 * 
 * @Date: 2017/6/29 16:22
 */

namespace Kerisy\Controller;

use Kerisy;
use Kerisy\Core\Context;
use Kerisy\Core\Route;
use Kerisy\Http\Cookie;
use Kerisy\Http\Factory\ResponseFactory;
use Kerisy\Http\Factory\StreamFactory;
use kerisy\View\Engine;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * The base task controller named controller
 *
 * Class Controller
 * @package Kerisy\Controller
 */
class TaskController extends BaseController
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var mixed
     */
    protected $data;

    public function __construct(array $data, Context $context)
    {
        $this->data = $data;
        $this->context = $context;
    }

}