<?php
declare(strict_types=1);

namespace DataSource\Customer;

use Atlas\Mapper\MapperSelect;

/**
 * @method CustomerRecord|null fetchRecord()
 * @method CustomerRecord[] fetchRecords()
 * @method CustomerRecordSet fetchRecordSet()
 */
class CustomerSelect extends MapperSelect
{
}
