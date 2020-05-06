<?php

namespace Pierre\P4\Framework;
abstract class Manager
{
    protected $_db;

    public function __construct()
    {
        $this->setDb();
    }

    public function setDb()
    {
        try
        {
        $db = new \PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', '');//mettre ca ailleur (ou ?)en mettant le try/catch
        $this->_db = $db;
        }
        catch (\Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
}
}