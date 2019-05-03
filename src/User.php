<?php

namespace StoryG;

class User
{
    protected $first_name;
    protected $family_name;

    public function changeName($first_name,$family_name)
    {
        $this->first_name = $first_name;
        $this->family_name = $family_name;
    }

    public function getFullName()
    {
        return $this->first_name.' '.$this->family_name;
    }
}
