<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace M2ITS\TestModule\Model\Payment;

class Test extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "test";
    protected $_isOffline = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        // TODO płatność ma być dostępna tylko przy wybraniu naszej metody wysyłki
        return parent::isAvailable($quote);
    }
}

