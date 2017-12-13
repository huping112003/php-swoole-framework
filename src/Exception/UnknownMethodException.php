<?php
/**

 * 
 * @Date: 2017/6/27 15:21
 */

namespace Kerisy\Exception;

/**
 * Class UnknownMethodException
 * @package Kerisy\Exception
 */
class UnknownMethodException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Unknown Method';
    }
}