<?php

namespace app\models;

use jarvis\models\ModelObject;

/**
 * Category
 */
class Category extends ModelObject
{
    private int $id;
    private string $title;


    /**
     * GetId
     *
     * @return void
     */
    public function GetId()
    {
        return $this->title;
    }
    /**
     * GetTitle
     *
     * @return string
     */
    public function GetTitle(): string
    {
        return $this->title;
    }
    /**
     * GetAllData
     *
     * @return array
     */
    public function GetAllData(): array
    {
        return array(
            'title' => $this->title
        );
    }
}
