<?php

namespace Pierre\P4\Model;
use Pierre\P4\Framework\ObjectClass;

class Commment extends ObjectClass
{
    private $_id,
            $_idPost,
            $_author,
            $_content,
            $_date;

    public function id()
    {
        return $this->_id;
    }

    public function idPost()
    {
        return $this->_idPost;
    }

    public function author()
    {
        return $this->_author;
    }

    public function content()
    {
        return $this->_content;
    }

    public function date()
    {
        return $this->_date;
    }

//ajouter setter
}