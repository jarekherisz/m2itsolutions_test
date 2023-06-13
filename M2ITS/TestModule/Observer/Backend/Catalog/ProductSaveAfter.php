<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace M2ITS\TestModule\Observer\Backend\Catalog;

class ProductSaveAfter implements \Magento\Framework\Event\ObserverInterface
{

    /**
     * Execute observer
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(
        \Magento\Framework\Event\Observer $observer
    ) {
        /** @var \Magento\Catalog\Model\Product $product */
        $product = $observer->getEvent()->getProduct();

        if ($product) {
            $productName = $product->getName();
            $productId = $product->getId();

            //Uzyskaj obiekt loggera
            $logger = \Magento\Framework\App\ObjectManager::getInstance()
                ->get(\Psr\Log\LoggerInterface::class);

            //Zaloguj informacje
            $logger->info('Produkt zapisany: ID = ' . $productId . ', Nazwa = ' . $productName);
        }
    }
}

