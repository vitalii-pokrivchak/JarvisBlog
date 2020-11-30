<?php

namespace app\models;

use jarvis\config\Config;
use jarvis\models\Model;
use jarvis\models\ModelObject;
use jarvis\db\SQL;

class AuthorModel extends Model
{
    public function get_all(): array
    {
        $authors = [
            1 => "test"
        ];

        $authors = SQL::select(
            'author',
            null,
            Author::class
        );
        return $authors;
    }
    public function get(int $id): ModelObject
    {
        return SQL::select(
            'author',
            "id = $id",
            Author::class
        )[0];
    }
    public function write()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
