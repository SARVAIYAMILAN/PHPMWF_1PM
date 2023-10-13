<?php
class Model
{
    public $connection = "";
    public function __construct()
    {
        // session_start();
        try {
            $this->connection = new mysqli("localhost", "root", "", "maharaja_catering");
            // echo "connection successfully";
        } catch (Exception $e) {
            die(mysqli_error($this->connection));
        }
    }
    public function insertalldata($data, $table)
    {
        $column = array_keys($data);
        $column1 = implode(",", $column);

        $value = array_values($data);
        $value1 = implode("','", $value);

        echo         $insert = "insert into $table($column1)values('$value1')";
        exit();
        $exe = mysqli_query($this->connection, $insert);
        return $exe;
    }
    public function login($table, $em, $pass)
    {
        $select = "select * from $table where email='$em' and password='$pass'";
        $exe = mysqli_query($this->connection, $select);
        $fetch = mysqli_fetch_array($exe);
        $no_rows = mysqli_num_rows($exe);
        if ($no_rows == 1) {
            $_SESSION["id"] = $fetch["id"];
            $_SESSION["email"] = $fetch["email"];
            $_SESSION["name"] = $fetch["name"];

            return true;
        } else {
            return false;
        }
    }

    //Create a member function for update data
    public function updatedata($table, $path, $fnm, $em, $phone, $column, $id)
    {

        $id = $_SESSION["id"];
        echo $update = "update $table set image='$path',firstname='$fnm',email='$em',phone='$phone' where $column='$id'";
        exit();
        $exe = mysqli_query($this->connection, $update);
        return $exe;
    }
    // create a member function for fatch data for user profile
    public function selectalldata($table, $colum, $id)
    {
        $select = "select * from $table where $colum='$id'";
        $exe = mysqli_query($this->connection, $select);
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;
    }


    //create a member function for select all data
    public function showalldata($table)
    {
        $select = "select * from $table";
        $exe = mysqli_query($this->connection, $select);
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;
    }


    //add to cart
    public function viewcrt($table, $table1, $table2, $where, $where1, $column, $id)
    {
        $select = "select * from $table  join $table1 on $where join $table2 on $where1 where $table2 .   $column='$id'";
        $exe = mysqli_query($this->connection, $select);
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;
    }


    // create a member functionn for change Password
    public function changepassworddata($table, $opass, $npass, $cpass, $column, $id)
    {
        $id = $_SESSION["id"];
        $select = "select password from $table where $column='$id'";
        $exe = mysqli_query($this->connection, $select);
        $fetch = mysqli_fetch_array($exe);
        $pass = $fetch["password"];
        if ($pass == $opass && $npass == $cpass) {
            $upd = "update $table set password='$npass' where $column='$id'";
            $exe = mysqli_query($this->connection, $upd);
            return $exe;
        } else {
            return false;
        }
    }

    // logout start from here

    public function logout()
    {
        unset($_SESSION["id"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }
}
