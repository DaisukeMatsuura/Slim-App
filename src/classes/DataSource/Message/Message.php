<?php
declare(strict_types=1);

namespace DataSource\Message;

use Atlas\Mapper\Mapper;
use Atlas\Table\Row;

/**
 * @method MessageTable getTable()
 * @method MessageRelationships getRelationships()
 * @method MessageRecord|null fetchRecord($primaryVal, array $with = [])
 * @method MessageRecord|null fetchRecordBy(array $whereEquals, array $with = [])
 * @method MessageRecord[] fetchRecords(array $primaryVals, array $with = [])
 * @method MessageRecord[] fetchRecordsBy(array $whereEquals, array $with = [])
 * @method MessageRecordSet fetchRecordSet(array $primaryVals, array $with = [])
 * @method MessageRecordSet fetchRecordSetBy(array $whereEquals, array $with = [])
 * @method MessageSelect select(array $whereEquals = [])
 * @method MessageRecord newRecord(array $fields = [])
 * @method MessageRecord[] newRecords(array $fieldSets)
 * @method MessageRecordSet newRecordSet(array $records = [])
 * @method MessageRecord turnRowIntoRecord(Row $row, array $with = [])
 * @method MessageRecord[] turnRowsIntoRecords(array $rows, array $with = [])
 */
class Message extends Mapper
{
}
