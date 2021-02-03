<?php
declare(strict_types=1);

namespace DataSource\User;

use Atlas\Mapper\MapperRelationships;
use DataSource\Article\Article;
use DataSource\Comment\Comment;

class UserRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('article',
            Article::class, ['id' => 'user_id']);
        $this->oneToMany('comment',
            Comment::class, ['id' => 'user_id']);
    }
}
