<?php
class DBController
{


    function __construct()
    {
        $this->conn = $this->connectDB();
    }

    function connectDB()
    {
        $conn =mysqli_connect('localhost','root','','himaku');
        return $conn;
    }

    function runQuery($query)
    {
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_array($result)) {
            $resultset[] = $row;
        }
        if (! empty($resultset))
            return $resultset;
    }
}
?>