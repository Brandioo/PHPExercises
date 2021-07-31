<?php
class Connection
{
    private string $server = "mysql:host=localhost;dbname=carmanage";
    private string $user = "root";
    private string $password = "";
    private array $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

    protected $dbh;


    public function open()
    {
        try {
            $this->dbh = new PDO($this->server, $this->user, $this->password, $this->options);
            return $this->dbh;
//            echo "Success";
        } catch (PDOException $exception) {
            echo "No Relation At All!" . $exception->getMessage();
        }
    }

    public function close()
    {
        $this->dbh = null;
    }
}


?>

