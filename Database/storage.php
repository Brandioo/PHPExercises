<?php

interface IStorage
{
    public function get($key);

    public function set($key, $value);

    public function getAll();

    public function delete($key);
}

class Storage implements IStorage
{


    public function set($key, $value)
    {
        return "Po ruhen te dhenat te tabela: {$key} dhe te dhenat jane keto {$value} <br>";
    }

    public function get($key)
    {
        return "Po marr te dhenat te databaza me id: {$key} <br>";
    }

    public function getAll()
    {
        return "Po marrim te gjitha te dhenat tek Storage <br>";
    }

    public function delete($key)
    {
        return "Po fshime te dhenat tek databaza me id: {$key} <br>";
    }
}

class Users
{
    private IStorage $db;

    public function __construct(IStorage $db)
    {
        $this->db = $db;
    }

    public function getAllUsers()
    {
        return $this->db->getAll();
    }

    public function saveUsers($data)
    {
        return $this->db->set("users", $data);
    }

    public function deleteUser($id)
    {
        return $this->db->delete($id);
    }
}

$storage = new Storage();
$user = new Users($storage);

echo $user->getAllUsers();
echo $user->saveUsers('Brand');
echo $user->deleteUser("Brand");
echo "---------------------------------------------------------------------------------------------------- <br>";
class FileStorage implements IStorage
{

    public function set($key, $value)
    {
        return "Po ruhen te dhenat te FileStorage: {$key} dhe te dhenat jane keto {$value} <br>";
    }

    public function get($key)
    {
        return "Po marr te dhenat te FileStorage me id: {$key} <br>";
    }

    public function getAll()
    {
        return "Po marrim te gjitha te dhenat tek FileStorage <br>";
    }

    public function delete($key)
    {
        return "Po fshime te dhenat tek FileStorage me id: {$key} <br>";
    }
}

class Orders
{
    private IStorage $db;

    public function __construct(IStorage $db)
    {
        $this->db = $db;
    }

    public function getAllOrders()
    {
        return $this->db->getAll();
    }

    public function saveOrders($data)
    {
        return $this->db->set("orders", $data);
    }

    public function deleteOrder($id)
    {
        return $this->db->delete($id);
    }
}

$fileStorage = new FileStorage();
$orders = new Orders($fileStorage);

echo $orders->getAllOrders();
echo $orders->saveOrders('Order1');
echo $orders->deleteOrder("Order1");