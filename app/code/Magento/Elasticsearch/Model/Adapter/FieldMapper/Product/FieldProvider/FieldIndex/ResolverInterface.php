<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProvider\FieldIndex;

use Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\AttributeAdapter;

/**
 * Field index type resolver interface.
 */
interface ResolverInterface
{
    /**
     * Get field index.
     *
     * @param AttributeAdapter $attribute
     * @return string|boolean
     */
    public function getFieldIndex(AttributeAdapter $attribute);
}
