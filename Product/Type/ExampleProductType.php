<?php
declare(strict_types=1);

namespace Yireo\ExampleProductType\Product\Type;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type\Virtual;

/**
 * Class ExampleProductType
 * @package Yireo\ExampleProductType\Product\Type
 */
class ExampleProductType extends Virtual
{
    /**
     * @param Product $product
     * @return bool
     */
    public function isSalable($product)
    {
        return parent::isSalable($product);
    }
}
