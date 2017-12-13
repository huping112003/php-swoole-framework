<?php
/**

 * 
 * @Date: 2017/6/27 16:44
 */

namespace Kerisy\Exception;


class InvalidParamException extends Exception
{
    public function getName()
    {
        return 'Invalid Param';
    }
}