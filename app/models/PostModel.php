<?php

namespace app\models;

use jarvis\db\SQL;
use jarvis\models\Model;
use jarvis\models\ModelObject;

class PostModel extends Model
{
    /**
     * get_all
     *
     * @return array
     */
    public function get_all(): array
    {
        return
            SQL::select(
                'post',
                null,
                Post::class
            );
    }
    /**
     * get
     *
     * @param int $id
     * @return ModelObject
     */
    public function get(int $id): ModelObject
    {
        return
            SQL::select(
                'post',
                "id = $id",
                Post::class
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
