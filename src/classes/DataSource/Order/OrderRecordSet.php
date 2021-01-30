<?php
declare(strict_types=1);

namespace DataSource\Order;

use Atlas\Mapper\RecordSet;

/**
 * @method OrderRecord offsetGet($offset)
 * @method OrderRecord appendNew(array $fields = [])
 * @method OrderRecord|null getOneBy(array $whereEquals)
 * @method OrderRecordSet getAllBy(array $whereEquals)
 * @method OrderRecord|null detachOneBy(array $whereEquals)
 * @method OrderRecordSet detachAllBy(array $whereEquals)
 * @method OrderRecordSet detachAll()
 * @method OrderRecordSet detachDeleted()
 */
class OrderRecordSet extends RecordSet
{
}
