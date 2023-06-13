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
        if ($quote === null) {
            return false; // Jeśli koszyk jest pusty, metoda płatności nie jest dostępna
        }

        $shippingMethod = $quote->getShippingAddress()->getShippingMethod();


        if ($shippingMethod === 'testshipping_testshipping') {
            return parent::isAvailable($quote);
        }

        return false; // Jeżeli nie została wybrana nasza metoda wysyłki, metoda płatności nie jest dostępna
    }
}

