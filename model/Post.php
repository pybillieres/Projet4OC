<?php

namespace Pierre\P4\Model;
use Pierre\P4\Framework\ObjectClass;

class Post extends ObjectClass
{
    private $_title,
            $_content,
            $_date;
    


//GETTER/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function id()
    {
        return $this->_id;
    }

    public function title()
    {
        return $this->_title;
    }

    public function content()
    {
        return $this->_content;
    }

    public function date()
    {
        return $this->_date;
    }
//SETTERS/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0)
        {
            $this->_id = $id;
        }
    }

    public function setTitle($title)
    {
        if(is_string($title))
        {
            $this->_title = $title;
        }
    }

    public function setContent($content)
    {
        if(is_string($content))
        {
            $this->_content = $content;
        }
    }

    public function setDate($date)
    {
        $this->_date = $date;
    }
    

//AUTRE FONCTIONS/////////////////////////////////////////////////////////////////////////////////////////////////////

}