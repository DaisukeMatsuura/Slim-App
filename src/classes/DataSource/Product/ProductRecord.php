<?php
declare(strict_types=1);

namespace DataSource\Product;

use Atlas\Mapper\Record;

/**
 * @method ProductRow getRow()
 */
class ProductRecord extends Record
{
    use ProductFields;
}
