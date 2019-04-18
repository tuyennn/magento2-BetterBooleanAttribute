<?php

namespace GhoSter\BetterBooleanAttribute\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Catalog\Model\Layer\Filter\Item as FilterItem;
use Magento\Eav\Model\Entity\Attribute\Source\Boolean as SourceBoolean;

/**
 * Class Data Helper
 * @package GhoSter\BetterBooleanAttribute\Helper
 */
class Data extends AbstractHelper
{
    /**
     * @param FilterItem $filterItem
     * @return bool
     */
    public function isFilterBooleanAttribute($filterItem)
    {
        try {

            $filter = $filterItem->getFilter();
            if ($attributeModel = $filter->getAttributeModel()) {
                return $attributeModel->getSourceModel() == SourceBoolean::class;
            }

        } catch (\Exception $e) {
            return false;
        }

        return false;
    }

    /**
     * @param $attribute \Magento\Catalog\Model\ResourceModel\Eav\Attribute
     * @return bool
     */
    public function isBooleanAttribute($attribute)
    {
        return $attribute->getSourceModel() == SourceBoolean::class;
    }

}