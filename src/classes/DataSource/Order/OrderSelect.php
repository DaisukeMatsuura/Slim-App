<?php
declare(strict_types=1);

namespace DataSource\Order;

use Atlas\Mapper\MapperSelect;

/**
 * @method OrderRecord|null fetchRecord()
 * @method OrderRecord[] fetchRecords()
 * @method OrderRecordSet fetchRecordSet()
 */
class OrderSelect extends MapperSelect
{
}
