# Mage2 Module M2ITS TestModule

    ``m2its/module-testmodule``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Baselinker save delivery point

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/M2ITS`
 - Enable the module by running `php bin/magento module:enable M2ITS_TestModule`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require m2its/module-testmodule`
 - enable the module by running `php bin/magento module:enable M2ITS_TestModule`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Test - payment/test/*

 - TestShipping - carriers/testshipping/*


## Specifications

 - Observer
	- catalog_product_save_after > M2ITS\TestModule\Observer\Backend\Catalog\ProductSaveAfter

 - Payment Method
	- Test

 - Plugin
	- beforeExecute - Checkout\Controller\Cart\CouponPost > M2ITS\TestModule\Plugin\Checkout\Controller\Cart\CouponPost

 - Shipping Method
	- testshipping


## Attributes



