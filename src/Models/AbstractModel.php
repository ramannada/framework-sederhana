<?php
namespace App\Models;

abstract class AbstractModel
{
    protected $table;
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getAll()
    {
        $this->db
            ->select('*')
            ->from($this->table)
            ->where('deleted = 0');
        $query = $this->db->execute();
        return $query->fetchAll();
    }
    public function softDelete($id)
    {
        $this->db
        ->update($this->table)
        ->set('deleted', 1)
        ->where('id =' . $id);
    }
}
