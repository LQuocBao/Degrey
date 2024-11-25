<?php
class CategoryModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function getCate()
    {
        $sql = "SELECT * FROM category";
        return $this->db->getAll($sql);
    }
    function insertCate($data)
    {
        $sql = "INSERT INTO category(type) VALUES (?)";
        $param = [$data['type']];
        return $this->db->insert($sql, $param);
    }
    
    function deleteCate($id)
    {
        $sql = "DELETE FROM category WHERE id_category = ?";
        $this->db->delete($sql, [$id]);
    }

    function getIdCate($id)
    {
        $sql = "SELECT * FROM category WHERE id_category = $id";
        return $this->db->getOne($sql);
    }

    function getNameCate($id)
    {
        $sql = "SELECT type FROM category WHERE id_category = $id";
        return $this->db->getOne($sql);
    }
    
    function upCate($data)
    {
        $sql = "UPDATE category SET type = ? WHERE id_category = ?";
        $param = [$data['type'], $data['id_category']];
        return $this->db->update($sql, $param);
    }
}
