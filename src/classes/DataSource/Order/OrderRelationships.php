<?php
declare(strict_types=1);

namespace DataSource\Order;

use Atlas\Mapper\MapperRelationships;
use DataSource\Customer\Customer;
use DataSource\Product\Product;

class OrderRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('customers', Customer::class,
            ['customer_id' => 'id']);
        $this->oneToMany('products', Product::class,
            ['product_id' => 'id']);
    }
}
