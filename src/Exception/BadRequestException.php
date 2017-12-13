<?php
/**

 * 
 * @Date: 2017/6/29 21:26
 */

namespace Kerisy\Exception;


class BadRequestException extends HttpException implements ExceptionInterface
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Bad Request';
    }
}