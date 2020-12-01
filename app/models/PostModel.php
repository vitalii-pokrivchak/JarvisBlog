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

        $posts = [];

        $data = SQL::select(
            'post',
            null,
            Post::class
        );

        foreach ($data as $d) {
            $posts[$d->GetId()] = $d;
        }

        return $posts;
    }
    /**
     * get
     *
     * @param int $id
     * @return ModelObject
     */
    public function get(int $id): Post
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
