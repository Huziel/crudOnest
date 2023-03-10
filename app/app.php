<?php
class app
{
    private $conn;
    public function __construct()
    {
        include_once('connect.php');
        $this->conn = conn();
    }
    public function showusers()
    {
        $newCon = $this->conn;
        $sql = "SELECT * FROM `users`";
        $query = mysqli_query($newCon, $sql);
        $jsonArray = array();
        while ($arrayUsers = mysqli_fetch_array($query)) {
            $jsonArray[] = $arrayUsers;
        }
       return json_encode(array("response" => $jsonArray));
    }
}
