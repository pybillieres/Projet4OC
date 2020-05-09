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
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->_db = $db;
        }
        catch (\PDOException $e)
        {
                die('Erreur : ' . $e->getCode());
        }
}
}