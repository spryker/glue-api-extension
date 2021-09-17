<?php


/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueApiExtension;

use Generated\Shared\Transfer\ApiApplicationContextTransfer;
use Spryker\Shared\Application\ApplicationInterface;

interface GlueApiApplicationPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\ApiApplicationContextTransfer $apiApplicationContextTransfer
     *
     * @return mixed
     */
    public function isApplicable(ApiApplicationContextTransfer $apiApplicationContextTransfer);

    /**
     * @return \Spryker\Shared\Application\ApplicationInterface
     */
    public function getApplication(): ApplicationInterface;
}
