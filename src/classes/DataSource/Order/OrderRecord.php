<?php
declare(strict_types=1);

namespace DataSource\Order;

use Atlas\Mapper\Record;

/**
 * @method OrderRow getRow()
 */
class OrderRecord extends Record
{
    use OrderFields;
}
