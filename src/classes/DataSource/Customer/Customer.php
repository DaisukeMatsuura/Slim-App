<?php
declare(strict_types=1);

namespace DataSource\Customer;

use Atlas\Mapper\Mapper;
use Atlas\Table\Row;

/**
 * @method CustomerTable getTable()
 * @method CustomerRelationships getRelationships()
 * @method CustomerRecord|null fetchRecord($primaryVal, array $with = [])
 * @method CustomerRecord|null fetchRecordBy(array $whereEquals, array $with = [])
 * @method CustomerRecord[] fetchRecords(array $primaryVals, array $with = [])
 * @method CustomerRecord[] fetchRecordsBy(array $whereEquals, array $with = [])
 * @method CustomerRecordSet fetchRecordSet(array $primaryVals, array $with = [])
 * @method CustomerRecordSet fetchRecordSetBy(array $whereEquals, array $with = [])
 * @method CustomerSelect select(array $whereEquals = [])
 * @method CustomerRecord newRecord(array $fields = [])
 * @method CustomerRecord[] newRecords(array $fieldSets)
 * @method CustomerRecordSet newRecordSet(array $records = [])
 * @method CustomerRecord turnRowIntoRecord(Row $row, array $with = [])
 * @method CustomerRecord[] turnRowsIntoRecords(array $rows, array $with = [])
 */
class Customer extends Mapper
{
}
