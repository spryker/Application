<?php

namespace Unit\Spryker\Zed\Application\Communication;

use Codeception\Test\Unit;
use Spryker\Zed\Application\Communication\ZedBootstrap;

/**
 * Auto-generated group annotations
 *
 * @group Unit
 * @group Spryker
 * @group Zed
 * @group Application
 * @group Communication
 * @group ZedBootstrapTest
 * Add your own group annotations below this line
 */
class ZedBootstrapTest extends Unit
{
    public const HTTP_X_INTERNAL_REQUEST = 'HTTP_X_INTERNAL_REQUEST';

    public const SETUP_APPLICATION = 'setupApplication';
    public const REGISTER_SERVICE_PROVIDER = 'registerServiceProvider';
    public const REGISTER_SERVICE_PROVIDER_FOR_INTERNAL_REQUEST_WITH_AUTHENTICATION = 'registerServiceProviderForInternalRequestWithAuthentication';
    public const ADD_VARIABLES_TO_TWIG = 'addVariablesToTwig';

    /**
     * @return void
     */
    public function testDefaultServiceProvidersWillRegister(): void
    {
        $zedBootstrapMock = $this->createZedBootstrapMock();

        $zedBootstrapMock->expects($this->once())->method(self::SETUP_APPLICATION);
        $zedBootstrapMock->expects($this->once())->method(self::REGISTER_SERVICE_PROVIDER);
        $zedBootstrapMock->expects($this->never())->method(self::REGISTER_SERVICE_PROVIDER_FOR_INTERNAL_REQUEST_WITH_AUTHENTICATION);
        $zedBootstrapMock->boot();
    }

    /**
     * @return void
     */
    public function testInternalRequestServiceProvidersWillRegister(): void
    {
        $_SERVER[self::HTTP_X_INTERNAL_REQUEST] = 1;
        $zedBootstrapMock = $this->createZedBootstrapMock();

        $zedBootstrapMock->expects($this->never())->method(self::REGISTER_SERVICE_PROVIDER);
        $zedBootstrapMock->expects($this->once())->method(self::REGISTER_SERVICE_PROVIDER_FOR_INTERNAL_REQUEST_WITH_AUTHENTICATION);
        $zedBootstrapMock->boot();
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|\Spryker\Zed\Application\Communication\ZedBootstrap
     */
    protected function createZedBootstrapMock()
    {
        return $this->getMockBuilder(ZedBootstrap::class)->setMethods([
            self::SETUP_APPLICATION,
            self::REGISTER_SERVICE_PROVIDER,
            self::REGISTER_SERVICE_PROVIDER_FOR_INTERNAL_REQUEST_WITH_AUTHENTICATION,
            self::ADD_VARIABLES_TO_TWIG,
        ])->getMock();
    }
}
