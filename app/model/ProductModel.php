<?php
class ProductModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function getPro()
    {
        $sql = "SELECT * FROM product";
        return $this->db->getAll($sql);
    }

    function getIdPro($idpro)
    {
        if ($idpro > 0) {
            $sql = "SELECT * FROM product WHERE id_product = $idpro";
            return $this->db->getOne($sql);
        } else {
            return null;
        }
    }

    function getIdCate($idpro)
    {
        $sql = "SELECT id_category FROM product WHERE id_product = $idpro";
        return $this->db->getOne($sql);
    }
    function getProCate($idcate, $idpro)
    {
        $sql = "SELECT * FROM product WHERE id_category = $idcate AND id_product <> $idpro";
        return $this->db->getAll($sql);
    }
    function insertPro($data)
    {
        $sql = "INSERT INTO product (name_product, image, price_product, id_category) VALUES (?,?,?,?)";
        //$data = ["name"=>"lat mat 7","img"=>"latmat7.jpg", "price"=>130000, "type"=>"Hành Động", "view"=>25000, "id_category"=>"2"];
        $param = [$data['name_product'], $data['image'], $data['price_product'], $data['id_category']]; //Chỉ là mảng chứa giá trị
        //THỨ TỰ CỦA INSERT INTO VÀ PARAM PHẢI GIỐNG NHAU
        return $this->db->insert($sql, $param);
    }

    function deletePro($id)
    {
        $sql = "DELETE FROM product WHERE id_product = ?";
        return $this->db->delete($sql, [$id]);
    }

    function updatePro($data)
    {
        $sql = "UPDATE product SET name_product = ?, image = ?, price_product = ?, id_category = ? WHERE id_product = ?";
        $param = [$data['name_product'], $data['image'], $data['price_product'], $data['id_category'], $data['id_product']];
        $this->db->update($sql, $param);
    }

    function get_all_pro_cate($id)
    {
        $sql = "SELECT * FROM product WHERE id_category = '$id'";
        return $this->db->getAll($sql);
    }
}
