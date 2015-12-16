<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Shared\Application\Communication\Plugin\ServiceProvider;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Symfony CMF Routing component Provider for URL generation.
 */
class UrlGeneratorServiceProvider implements ServiceProviderInterface
{

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function register(Application $app)
    {
        $app['url_generator'] = $app->share(function ($app) {
            $app->flush();

            return $app['routers'];
        });
    }

    /**
     * @codeCoverageIgnore
     *
     * @return void
     */
    public function boot(Application $app)
    {
    }

}