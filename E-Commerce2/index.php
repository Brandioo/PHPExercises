<?php
//session_start();
interface IStorage{
    public function set($key, $value);
    public function get($key);
    public function delete($key);
    public function destroy();
    public function all();
}
class SessionStorage implements IStorage
{
    protected $storageKey = 'items';
    public function __construct($storageKey = null)
    {
        if ($storageKey) {
            $this->storageKey = $storageKey;
        }
        if (!isset($_SESSION[$this->storageKey])) {
            $_SESSION[$this->storageKey] = [];
        }
    }
    public function set($key, $value)
    {
        $_SESSION[$this->storageKey][$key] = serialize($value);
    }
    public function get($key)
    {
        if (!isset($_SESSION[$this->storageKey][$key])) {
            return null;
        }
        return unserialize($_SESSION[$this->storageKey][$key]);
    }
    public function delete($key)
    {
        unset($_SESSION[$this->storageKey][$key]);
    }
    public function destroy()
    {
        unset($_SESSION[$this->storageKey]);
    }
    public function all()
    {
        $items = [];
        foreach ($_SESSION[$this->storageKey] as $key => $item) {
            $items[$key] = unserialize($item);
        }
        return $items;
    }
}
class FileStorage implements IStorage
{
    protected $storageKey = 'items';
    public function __construct($storageKey = null)
    {
        if ($storageKey) {
            $this->storageKey = $storageKey;
        }
        if (!file_exists("storage/{$this->storageKey}")) {
            mkdir("storage/{$this->storageKey}");
        }
    }
    public function set($key, $value)
    {
        file_put_contents("storage/{$this->storageKey}/{$key}", serialize($value), FILE_APPEND );
    }
    public function get($key)
    {
        if ($this->keyExists($key)) {
            return unserialize(file_get_contents("storage/{$this->storageKey}/{$key}"));
        }
    }
    public function delete($key)
    {
        if (!$this->keyExists($key)) {
            return;
        }
        unlink("storage/{$this->storageKey}/{$key}");
    }
    public function destroy()
    {
        $dir = opendir("storage/{$this->storageKey}");
        while (false !== ($item = readdir($dir))) {
            if (!in_array($item, ['.', '..'])) {
                unlink("storage/{$this->storageKey}/{$item}");
            }
        }
    }
    public function all()
    {
        $items = [];
        $dir = opendir("storage/{$this->storageKey}");
        while (false !== ($item = readdir($dir))) {
            if (!in_array($item, ['.', '..'])) {
                $items[$item] = file_get_contents("storage/{$this->storageKey}/{$item}");
            }
        }
        return $items;
    }
    protected function keyExists($key)
    {
        return file_exists("storage/{$this->storageKey}/{$key}");
    }
}
class Storage{
    private IStorage $storage;
    public function __construct(IStorage $storage){
        $this->storage = $storage;
    }
    public function setItem($key, $value){
        return $this->storage->set($key, $value);
    }
    public function getItem($key){
        return $this->storage->get($key);
    }
    public function deleteItem($key){
        return $this->storage->delete($key);
    }
    public function getAll(){
        return $this->storage->all();
    }
}
$session = new SessionStorage;
$file = new FileStorage;
$storage = new Storage($file);
$storage->setItem("silvi", ['name' => "silvi", "lastName" => 'lila']);
var_dump($storage->getAll());