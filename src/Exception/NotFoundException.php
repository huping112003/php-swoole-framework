<?php
/**

 * 
 * @Date: 2017/6/29 21:21
 */

namespace Kerisy\Exception;


class NotFoundException extends HttpException implements ExceptionInterface
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Not Found';
    }
}