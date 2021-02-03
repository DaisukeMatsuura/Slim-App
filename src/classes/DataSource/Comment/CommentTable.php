<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace DataSource\Comment;

use Atlas\Table\Table;

/**
 * @method CommentRow|null fetchRow($primaryVal)
 * @method CommentRow[] fetchRows(array $primaryVals)
 * @method CommentTableSelect select(array $whereEquals = [])
 * @method CommentRow newRow(array $cols = [])
 * @method CommentRow newSelectedRow(array $cols)
 */
class CommentTable extends Table
{
    const DRIVER = 'mysql';

    const NAME = 'comments';

    const COLUMNS = [
        'id' => [
            'name' => 'id',
            'type' => 'int',
            'size' => 10,
            'scale' => 0,
            'notnull' => true,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'user_id' => [
            'name' => 'user_id',
            'type' => 'int',
            'size' => 10,
            'scale' => 0,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'article_id' => [
            'name' => 'article_id',
            'type' => 'int',
            'size' => 10,
            'scale' => 0,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'message' => [
            'name' => 'message',
            'type' => 'varchar',
            'size' => 255,
            'scale' => null,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    const COLUMN_NAMES = [
        'id',
        'user_id',
        'article_id',
        'message',
    ];

    const COLUMN_DEFAULTS = [
        'id' => null,
        'user_id' => null,
        'article_id' => null,
        'message' => null,
    ];

    const PRIMARY_KEY = [
        'id',
    ];

    const AUTOINC_COLUMN = 'id';

    const AUTOINC_SEQUENCE = null;
}