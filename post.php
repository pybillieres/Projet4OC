<?php
class Post
{
    private $_title,
            $_content,
            $_date;
    
//CONSTRUCT ET HYDRATE////////////////////////////////////////////////////////////////////////////////////////////
    public function __construct(array $data) //interet du constructor ? Juste premiere à etre appelé ?
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set'.ucfirst($key); //methode dans un objet ?
            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }


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

    }

//AUTRE FONCTIONS/////////////////////////////////////////////////////////////////////////////////////////////////////

}