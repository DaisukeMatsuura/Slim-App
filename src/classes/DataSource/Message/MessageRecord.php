<?php
declare(strict_types=1);

namespace DataSource\Message;

use Atlas\Mapper\Record;

/**
 * @method MessageRow getRow()
 */
class MessageRecord extends Record
{
    use MessageFields;
}
