<?php
declare(strict_types=1);

namespace DataSource\Customer;

use Atlas\Mapper\MapperRelationships;
use DataSource\Order\Order;

class CustomerRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('orders', Order::class,
            ['id' => 'customer_id']);
    }
}
