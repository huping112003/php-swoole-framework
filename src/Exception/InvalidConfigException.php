<?php
/**

 * 
 * @Date: 2017/6/26 14:41
 */

namespace Kerisy\Exception;


class InvalidConfigException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Invalid Configuration';
    }
}