<?php

class Database
{
    private string $host;
    private string $username;
    private string $password;

    public function __construct()
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "root";
    }

    public function save(string $tableName, string $data)
    {
        return "Po ruhen te dhenat te tabela: {$tableName} dhe te dhenat jane keto {$data} <br>";
    }

    public function getAll(string $tableName)
    {
        return "Po marrim te gjitha te dhenat tek tabela {$tableName} <br>";
    }

    public function delete($tableName, $id)
    {
        return "Po fshime te dhenat tek {$tableName} me id: {$id} <br>";
    }
}

//class Users
//{
//    private Database $db;
//
//    public function __construct(Database $db)
//    {
//        $this->db = $db;
//    }
//
//    public function getAllUsers()
//    {
//        return $this->db->getAll("users");
//    }
//
//    public function saveUsers($data)
//    {
//        return $this->db->save("users", $data);
//    }
//
//    public function deleteUser($id)
//    {
//        return $this->db->delete("users", $id);
//    }
//}

//$database = new Database();
//$user = new Users($database);

//echo $user->getAllUsers();
//echo $user->saveUsers('Brand');
//echo $user->deleteUser("Brand");


class Orders
{
    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAllOrders()
    {
        return $this->db->getAll("orders");
    }

    public function saveOrders($data)
    {
        return $this->db->save("orders", $data);
    }

    public function deleteOrder($id)
    {
        return $this->db->delete("orders", $id);
    }
}

$database = new Database();
$user = new Orders($database);

echo $user->getAllOrders();
echo $user->saveOrders('Order1');
echo $user->deleteOrder("Order1");