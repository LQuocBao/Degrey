<?php
class UserModel
{
    private $db;
    function __construct()
    {
        $this->db = new Database();
    }

    function checkUser($user, $pass)
    {
        $sql = "SELECT * FROM user WHERE username='" . $user . "' AND password='" . $pass . "'";
        return $this->db->getOne($sql);
    }

    function insertUser($data)
    {
        $sql = "INSERT INTO user(username, email ,password, role) VALUES (?,?,?,?)";
        $param = [$data['username'], $data['email'], $data['password'], $data['role']];
        return $this->db->insert($sql, $param);
    }

    function checkEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email='" . $email . "'";
        return $this->db->getOne($sql);
    }

    function getIdUser($iduser)
    {
        if ($iduser > 0) {
            $sql = "SELECT * FROM user WHERE id_user = $iduser";
            return $this->db->getOne($sql);
        } else {
            return null;
        }
    }

    function getUser()
    {
        $sql = "SELECT * FROM user";
        return $this->db->getAll($sql);
    }

    function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id_user = ?";
        return $this->db->delete($sql, [$id]);
    }

    function updateUser($data)
    {
        $sql = "UPDATE user SET username = ?, email = ?, password = ?, role = ? WHERE id_user = ?";
        $param = [$data['username'], $data['email'], $data['password'], $data['role'], $data['id_user']];
        $this->db->update($sql, $param);
    }
}
