<?php
declare(strict_types=1);

namespace DataSource\Product;

use Atlas\Mapper\MapperSelect;

/**
 * @method ProductRecord|null fetchRecord()
 * @method ProductRecord[] fetchRecords()
 * @method ProductRecordSet fetchRecordSet()
 */
class ProductSelect extends MapperSelect
{
}
