<?php
declare(strict_types=1);

namespace DataSource\Product;

use Atlas\Mapper\MapperRelationships;
use DataSource\Order\Order;

class ProductRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('orders', Order::class,
            ['id' => 'product_id']);
    }
}
