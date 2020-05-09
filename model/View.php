<?php

namespace Pierre\P4\model;

class View
{
    private $file;
    private $title;

    public function render($template, $data = [])
    {
        $this->file = "view/" . $template . ".php"; // Attribut file prend la valeur du template de page POURQUOI PAS BESOIN DE ../ ?
        var_dump($this->file);
        $content = $this->renderFile($this->file, $data);
        $view = $this->renderFile('view/template.php', [
            'title'=>$this->_title,
            'content'=>$content
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