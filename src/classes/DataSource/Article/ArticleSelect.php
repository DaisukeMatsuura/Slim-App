<?php
declare(strict_types=1);

namespace DataSource\Article;

use Atlas\Mapper\MapperSelect;

/**
 * @method ArticleRecord|null fetchRecord()
 * @method ArticleRecord[] fetchRecords()
 * @method ArticleRecordSet fetchRecordSet()
 */
class ArticleSelect extends MapperSelect
{
}
