<?php

namespace Pierre\P4\Model;
use Pierre\P4\Framework\Configuration;

class View
{
    private $file;
    private $title;

    public function render($template, $data = [])
    {
        $this->file = "View/" . $template . ".php";
        $racineWeb = Configuration::get("racineWeb");
        $content = $this->renderFile($this->file, $data);
        $view = $this->renderFile('View/Template.php', [
            'title'=>$this->_title,
            'content'=>$content,
            'racineWeb'=>$racineWeb
            ]);
        echo $view;
    }

    public function renderFile($file, $data)
    {

            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
    }
}