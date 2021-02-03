<?php
declare(strict_types=1);

namespace DataSource\Article;

use Atlas\Mapper\MapperRelationships;
use DataSource\User\User;
use DataSource\Comment\Comment;

class ArticleRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('users',
            User::class, ['user_id' => 'id']);
        $this->oneToMany('comment',
            Comment::class, ['id' => 'article_id']);
    }
}
