<?php

namespace GhoSter\BetterBooleanAttribute\Plugin\Block\Product\View;

use Magento\Catalog\Block\Product\View\Attributes as ProductViewAttributes;
use Magento\Eav\Model\Entity\Attribute\Source\Boolean as SourceBoolean;

/**
 * Class AttributesPlugin
 *
 * @package GhoSter\BetterBooleanAttribute\Plugin\Block\Product\View
 */
class AttributesPlugin
{
    /**
     * Add a value to check whether attribute is boolean or not
     *
     * @param ProductViewAttributes $subject
     * @param callable $proceed
     * @param array $excludeAttr
     * @return mixed
     */
    public function aroundGetAdditionalData(
        ProductViewAttributes $subject,
        callable $proceed,
        array $excludeAttr = []
    ) {
        $product = $subject->getProduct();
        $attributes = $product->getAttributes();
        $data = $proceed($excludeAttr);

        foreach ($data as $key => &$value) {
            if (array_key_exists($key, $attributes)) {
                $attribute = $attributes[$key];
                $value['is_boolean'] = $attribute->getSourceModel() == SourceBoolean::class;
            }
        }

        return $data;
    }

    /**
     * Force set module template for attribute info view due custom theme
     * @param ProductViewAttributes $subject
     * @param $result
     * @return string
     */
    public function afterGetTemplate(
        ProductViewAttributes $subject,
        $result
    ) {
        $result = 'GhoSter_BetterBooleanAttribute::product/view/attributes.phtml';
        return $result;
    }

}
