<?php
declare(strict_types=1);

namespace DataSource\Message;

use Atlas\Mapper\MapperSelect;

/**
 * @method MessageRecord|null fetchRecord()
 * @method MessageRecord[] fetchRecords()
 * @method MessageRecordSet fetchRecordSet()
 */
class MessageSelect extends MapperSelect
{
}
