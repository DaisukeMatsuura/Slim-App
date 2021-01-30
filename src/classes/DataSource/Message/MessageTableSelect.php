<?php
declare(strict_types=1);

namespace DataSource\Message;

use Atlas\Table\TableSelect;

/**
 * @method MessageRow|null fetchRow()
 * @method MessageRow[] fetchRows()
 */
class MessageTableSelect extends TableSelect
{
}
