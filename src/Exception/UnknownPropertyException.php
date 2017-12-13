<?php
/**

 * 
 * @Date: 2017/6/26 14:41
 */

namespace Kerisy\Exception;

/**
 * UnknownPropertyException represents an exception caused by accessing unknown object properties.
 */
class UnknownPropertyException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Unknown Property';
    }
}
