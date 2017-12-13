<?php
/**

 * 
 * @date: 2017/7/14 21:50
 * @version 3.0.0
 */

namespace Kerisy\Db;


class ConnectionException extends Exception
{
    public function getName()
    {
        return 'DB Connection Error';
    }
}