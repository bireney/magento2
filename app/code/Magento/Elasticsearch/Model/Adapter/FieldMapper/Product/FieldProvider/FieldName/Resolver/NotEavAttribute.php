<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProvider\FieldName\Resolver;

use Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\AttributeAdapter;
use Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProvider\FieldName\ResolverInterface;

/**
 * Resolver field name for not EAV attribute.
 */
class NotEavAttribute implements ResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function getFieldName(AttributeAdapter $attribute, $context = []): ?string
    {
        if (!$attribute->isEavAttribute()) {
            return $attribute->getAttributeCode();
        }

        return null;
    }
}
