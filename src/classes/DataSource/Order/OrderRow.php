<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace DataSource\Order;

use Atlas\Table\Row;

/**
 * @property mixed $id int(10,0) NOT NULL
 * @property mixed $product_id int(10,0) NOT NULL
 * @property mixed $quantity int(10,0) NOT NULL
 */
class OrderRow extends Row
{
    protected $cols = [
        'id' => null,
        'product_id' => null,
        'quantity' => null,
    ];
}
