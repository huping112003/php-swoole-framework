<?php
/**

 * 
 * @Date: 2017/7/2 02:14
 */

namespace Kerisy\Exception;


class ContextErrorException extends \ErrorException
{
    public function __construct($message, $code, $severity, $filename, $lineno, $context = array())
    {
        parent::__construct($message, $code, $severity, $filename, $lineno);
    }
}