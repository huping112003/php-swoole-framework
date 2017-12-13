<?php
/**

 * 
 * @Date: 2017/6/26 14:41
 */

namespace Kerisy\Exception;

/**
 * InvalidCallException represents an exception caused by calling a method in a wrong way.
 */
class InvalidCallException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Invalid Call';
    }
}
