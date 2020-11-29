<?php

namespace app\models;


use jarvis\db\SQL;
use jarvis\models\Model;
use jarvis\models\ModelObject;

class CategoryModel extends Model
{
    public function get_all(): array
    {
        return SQL::select(
            'category',
            null,
            Category::class
        );
    }
    public function get(int $id): ModelObject
    {
        return SQL::select(
            'category',
            "id = $id",
            Category::class
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
