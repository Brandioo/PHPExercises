<?php

class FileStorage
{
    private $storageItem = "items";

    public function __construct()
    {
        if (!file_exists("storage/{$this->storageItem}")) {
            mkdir("storage/{$this->storageItem}"); //create
        }
    }

    public function set($key, $value)
    {
        file_put_contents("storage/{$this->storageItem}/{$key}", serialize($value), FILE_APPEND);
    }

    public function get($key)
    {
        if (!file_exists("storage/{$this->storageItem}/{$key}")) {
            return "File Does Not Exist";
        }
        return unserialize(file_get_contents("storage/{$this->storageItem}/{$key}"));
    }

    public function delete($key)
    {
        if (file_exists("storage/{$this->storageItem}/{$key}")) {
            unlink("storage/{$this->storageItem}/{$key}"); //delete
        }
    }

    public function destroy()
    {
        $dir = opendir("storage/{$this->storageKey}");
        while ($item = readdir($dir)) {
            if (!in_array($item, ['.', '..'])) {
                unlink("storage/{$this->storageKey}/{$item}");
            }
        }
        //Onther way
        // $dir = scandir("storage/{$this->storageKey}");
        // for($i=2;$i<=count($dir)-1;$i++){
        //     unlink("storage/{$this->storageKey}/{$dir[$i]}");
        // }
    }

    public function getAll(){
        //TODO while loop on directory read and output files
    }
}

$storage = new FileStorage();
//$storage->set("users", [
//    ['Brand', 'Citozi', 'bcitozi@gmail.com'],
//    ['Silvi', 'Lila', 'slila@gmail.com']
//]);

//var_dump($storage->get("users"));
//
//$storage->set("users", ["silvi", "lila"]);

//$users = $storage->get("users");

//foreach ($users as $user) {
//    echo $user;
//}

//var_dump($users);

//$storage->delete("users");
//var_dump($users);

//foreach ($users as $user) {
//    foreach ($user as $u) {
//        echo $u . "<br>";
//    }
//}

//$storage->set("orders_29-05-2021", ['filan', 'fisterku', 'bluze', 'tkuqe']);
$storage->set("orders_29-05-2021", ['Brand', 'Citozi', 'bluze', 'blu']);
var_dump($storage->get("orders_29-05-2021"));