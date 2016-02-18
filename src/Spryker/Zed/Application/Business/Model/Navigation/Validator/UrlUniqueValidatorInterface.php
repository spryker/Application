<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Application\Business\Model\Navigation\Validator;

interface UrlUniqueValidatorInterface
{

    /**
     * @param string $url
     *
     * @throws \Exception
     */
    public function validate($url);

    /**
     * @param string $url
     */
    public function addUrl($url);

}
