<?php
declare(strict_types=1);

namespace DataSource\Article;

use Atlas\Mapper\Record;

/**
 * @method ArticleRow getRow()
 */
class ArticleRecord extends Record
{
    use ArticleFields;
}
