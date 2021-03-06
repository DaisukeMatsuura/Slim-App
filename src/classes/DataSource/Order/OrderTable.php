<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace DataSource\Order;

use Atlas\Table\Table;

/**
 * @method OrderRow|null fetchRow($primaryVal)
 * @method OrderRow[] fetchRows(array $primaryVals)
 * @method OrderTableSelect select(array $whereEquals = [])
 * @method OrderRow newRow(array $cols = [])
 * @method OrderRow newSelectedRow(array $cols)
 */
class OrderTable extends Table
{
    const DRIVER = 'mysql';

    const NAME = 'orders';

    const COLUMNS = [
        'id' => [
            'name' => 'id',
            'type' => 'int',
            'size' => 10,
            'scale' => 0,
            'notnull' => true,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'product_id' => [
            'name' => 'product_id',
            'type' => 'int',
            'size' => 10,
            'scale' => 0,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'customer_id' => [
            'name' => 'customer_id',
            'type' => 'int',
            'size' => 10,
            'scale' => 0,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'quantity' => [
            'name' => 'quantity',
            'type' => 'int',
            'size' => 10,
            'scale' => 0,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    const COLUMN_NAMES = [
        'id',
        'product_id',
        'customer_id',
        'quantity',
    ];

    const COLUMN_DEFAULTS = [
        'id' => null,
        'product_id' => null,
        'customer_id' => null,
        'quantity' => null,
    ];

    const PRIMARY_KEY = [
        'id',
    ];

    const AUTOINC_COLUMN = 'id';

    const AUTOINC_SEQUENCE = null;
}
