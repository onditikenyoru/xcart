<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoSocial\Model\DTO\Product;

/**
 * Product
 */
 class Info extends \XLite\Module\CDev\MarketPrice\Model\DTO\Product\Info implements \XLite\Base\IDecorator
{
    /**
     * @inheritdoc
     */
    protected function init($object)
    {
        parent::init($object);

        $this->marketing->og_tags_type = (string) (int) $object->getUseCustomOG();
        $this->marketing->og_tags = $object->getOpenGraphMetaTags();

    }

    /**
     * @inheritdoc
     */
    public function populateTo($object, $rawData = null)
    {
        parent::populateTo($object, $rawData);

        $object->setUseCustomOG((boolean) $this->marketing->og_tags_type);
        if ($this->marketing->og_tags_type) {
            $object->setOgMeta((string) $rawData['marketing']['og_tags']);
        } else {
            $object->setOgMeta($object->getOpenGraphMetaTags(false));
        }
    }
}
