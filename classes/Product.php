<?php

class Product extends Db
{

    public function select()
    {
        $sql = "SELECT * FROM `delivery`";

        $result = $this->connect()->query($sql);

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                $data[] = $row;
            }

            return $data;
        }
    }

    public function insert($fields)
    {
        $implodeColumns = implode(', ', array_keys($fields));

        $implodePlaceholder = implode(", :", array_keys($fields));

        $sql = "INSERT INTO `delivery` ($implodeColumns) VALUES (:" . $implodePlaceholder . ")";

        $stmt = $this->connect()->prepare($sql);

        foreach ($fields as $key => $value) {

            $stmt->bindValue(':' . $key, $value);
        }

        $stmtExec = $stmt->execute();

        if ($stmtExec) {
            header('Location: index.php');
        }
    }

    public function selectId($id)
    {
        $sql = "SELECT * FROM `delivery` WHERE id_client = :id_client";

        $stmt = $this->connect()->prepare($sql);

        $stmt->bindValue(":id_client", $id);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function update($fields, $id)
    {

        // "UPDATE Table_name SET date=:date, full_name=:full_name WHERE id_client = $id"
        // st = name =:name , date=:date

        //This is to generate an SQL

        $st = "";

        $counter = 1;

        $total_fields = count($fields);

        foreach ($fields as $key => $value) {
            if ($counter === $total_fields) {
                $set = "$key = :" . $key;
                $st = $st . $set;
            } else {
                $set = "$key = :" . $key . ", ";
                $st = $st . $set;
                $counter++;
            }
        }

        // SQL = "UPDATE delivery SET name=:name WHERE id_client = id"
        $sql = "";
        $sql .= "UPDATE `delivery` SET " . $st;
        $sql .= " WHERE id_client = " . $id;

        $stmt = $this->connect()->prepare($sql);

        foreach ($fields as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }

        $stmtExec = $stmt->execute();

        if ($stmtExec) {
            header('Location: index.php');
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `delivery` WHERE id_client = :id";

        $stmt = $this->connect()->prepare($sql);

        $stmt->bindValue(":id", $id);

        $stmt->execute();
    }

    public function cities()
    {
        $sql = "SELECT `city` FROM `cities`";

        $cities = $this->connect()->query($sql);

        if ($cities->rowCount() > 0) {
            while ($row = $cities->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }

            return $data;
        }
    }
}
