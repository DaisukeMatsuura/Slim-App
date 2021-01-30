<?php
declare(strict_types=1);

namespace DataSource\Customer;

use Atlas\Mapper\RecordSet;

/**
 * @method CustomerRecord offsetGet($offset)
 * @method CustomerRecord appendNew(array $fields = [])
 * @method CustomerRecord|null getOneBy(array $whereEquals)
 * @method CustomerRecordSet getAllBy(array $whereEquals)
 * @method CustomerRecord|null detachOneBy(array $whereEquals)
 * @method CustomerRecordSet detachAllBy(array $whereEquals)
 * @method CustomerRecordSet detachAll()
 * @method CustomerRecordSet detachDeleted()
 */
class CustomerRecordSet extends RecordSet
{
}
