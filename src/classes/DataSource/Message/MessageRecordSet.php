<?php
declare(strict_types=1);

namespace DataSource\Message;

use Atlas\Mapper\RecordSet;

/**
 * @method MessageRecord offsetGet($offset)
 * @method MessageRecord appendNew(array $fields = [])
 * @method MessageRecord|null getOneBy(array $whereEquals)
 * @method MessageRecordSet getAllBy(array $whereEquals)
 * @method MessageRecord|null detachOneBy(array $whereEquals)
 * @method MessageRecordSet detachAllBy(array $whereEquals)
 * @method MessageRecordSet detachAll()
 * @method MessageRecordSet detachDeleted()
 */
class MessageRecordSet extends RecordSet
{
}
