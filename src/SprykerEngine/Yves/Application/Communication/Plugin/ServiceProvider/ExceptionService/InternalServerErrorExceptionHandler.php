<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace SprykerEngine\Yves\Application\Communication\Plugin\ServiceProvider\ExceptionService;

use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;

class InternalServerErrorExceptionHandler implements ExceptionHandlerInterface
{

    /**
     * @param FlattenException $exception
     *
     * @return Response
     */
    public function handleException(FlattenException $exception)
    {
        return new Response('Internal Server Error');
    }

}
