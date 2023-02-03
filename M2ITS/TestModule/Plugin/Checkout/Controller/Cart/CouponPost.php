<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace M2ITS\TestModule\Plugin\Checkout\Controller\Cart;

class CouponPost
{

    public function beforeExecute(
        \Checkout\Controller\Cart\CouponPost $subject
    ) {
        // TODO - zapisz do logu magento actions pasującej reguły 
        return [];
    }
}

