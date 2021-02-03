<?php
declare(strict_types=1);

namespace DataSource\Comment;

use Atlas\Mapper\MapperRelationships;
use DataSource\Article\Article;
use DataSource\User\User;

class CommentRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('articles',
            Article::class, ['article_id' => 'id']);
        $this->manyToOne('users',
            User::class, ['user_id' => 'id']);
    }
}
