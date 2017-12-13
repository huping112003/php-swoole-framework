<?php
/**

 * 
 * @Date: 2017/7/14 17:07
 */

namespace Kerisy\Exception;


class NotSupportedException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Not Supported';
    }
}