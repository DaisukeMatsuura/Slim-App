<?php
declare(strict_types=1);

namespace DataSource\Customer;

use Atlas\Mapper\Record;

/**
 * @method CustomerRow getRow()
 */
class CustomerRecord extends Record
{
    use CustomerFields;
}
