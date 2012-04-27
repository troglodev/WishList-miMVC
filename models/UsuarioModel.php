<?php

class UsuarioModel extends ModelBase {

    public function insertarUsuario($u, $p) {
        $sql = 'INSERT INTO wishers (name, password) VALUES ("' . $u . '","' . $p . '")';
        $num = $this->db->exec($sql);
        if ($num == 1) {
            /*             * ********************** */
            @session_start();
            $_SESSION['user'] = $u;
        }
    }

    public function existeUsuario($u) {
        $sql = 'SELECT name FROM wishers WHERE name="' . $u . '"';
        $result = $this->db->query($sql);
        if ($result->rowCount() == 0) {
            return false;
        }
        return true;
    }

    public function validacionCorrecta($u, $p) {
        $usuario = $this->db->quote($u);
        $password = $this->db->quote($p);
        $sql = 'SELECT name FROM wishers WHERE name=' . $usuario . ' AND password=' . $password;
        try {
            $result = $this->db->query($sql);
            if ($result->rowCount() == 1) {
                return true;
            }
            return false;
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

}

?>