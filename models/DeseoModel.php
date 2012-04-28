<?php

class DeseoModel extends ModelBase {

    public function getWishes($cond) {
        $sql = 'select wishes.id, wishes.desc, wishes.date from wishes where ' . $cond;
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPendingWishes() {
        $cond = 'wishes.wisher_id = (select id from wishers where name="' .
                $_SESSION['user'] . '") and cumplido=0';
        return $this->getWishes($cond);
    }

    public function getDoneWishes() {
        $cond = 'wishes.wisher_id = (select id from wishers where name="' .
                $_SESSION['user'] . '") and cumplido=1';
        return $this->getWishes($cond);
    }

    public function getWishById() {
        $cond = 'wishes.id = ' . $_GET['id'];
        return $this->getWishes($cond);
    }

    public function updateWish($set, $cond) {
        $sql = "update wishes set " . $set . " where " . $cond;
        try {
            $num = $this->db->exec($sql);
            if ($num == 1) {
                return true;
            }
            if ($num == 0) {
                return true;
            }
            return false;
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public function modifyWish() {
        $set = "`desc`='" . $_POST['descripcion'] . "', `date`='" . date_format(new DateTime($_POST['fecha']), 'Y-m-d') . "'";
        $cond = 'id=' . $_GET['id'];
        return $this->updateWish($set, $cond);
    }

    public function setWishAsDone() {
        $set = 'cumplido=1';
        $cond = 'id=' . $_GET['id'];
        return $this->updateWish($set, $cond);
    }

    public function insertarDeseoBD() {
        $usuario = $_SESSION['user'];
        $desc = $_POST['descripcion'];
        $fecha = date_format(new DateTime($_POST['fecha']), 'Y-m-d');
        $sql = "INSERT INTO wishes (`wisher_id`, `desc`, `date`) values ((select id from wishers where name='" . $usuario . "'),'" . $desc . "','" . $fecha . "')";
        $num = $this->db->exec($sql);
        if ($num == 1) {
            return true;
        }
        return false;
    }

    public function eliminarDeseoBD() {
        $sql = "delete FROM wishes WHERE id=" . $_GET['id'];
        $num = $this->db->exec($sql);
        if ($num == 1) {
            return true;
        }
        return false;
    }

}

?>