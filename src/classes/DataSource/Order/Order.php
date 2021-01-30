<?php
declare(strict_types=1);

namespace DataSource\Order;

use Atlas\Mapper\Mapper;
use Atlas\Table\Row;

/**
 * @method OrderTable getTable()
 * @method OrderRelationships getRelationships()
 * @method OrderRecord|null fetchRecord($primaryVal, array $with = [])
 * @method OrderRecord|null fetchRecordBy(array $whereEquals, array $with = [])
 * @method OrderRecord[] fetchRecords(array $primaryVals, array $with = [])
 * @method OrderRecord[] fetchRecordsBy(array $whereEquals, array $with = [])
 * @method OrderRecordSet fetchRecordSet(array $primaryVals, array $with = [])
 * @method OrderRecordSet fetchRecordSetBy(array $whereEquals, array $with = [])
 * @method OrderSelect select(array $whereEquals = [])
 * @method OrderRecord newRecord(array $fields = [])
 * @method OrderRecord[] newRecords(array $fieldSets)
 * @method OrderRecordSet newRecordSet(array $records = [])
 * @method OrderRecord turnRowIntoRecord(Row $row, array $with = [])
 * @method OrderRecord[] turnRowsIntoRecords(array $rows, array $with = [])
 */
class Order extends Mapper
{
}
