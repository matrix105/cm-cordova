<?php
class Config {
    /**
     * path to the sqlite file
     */
     const PATH_TO_SQLITE_FILE = 'db/db.sqlite';
  
 }

class SQLiteConnection {
    /**
     * PDO instance
     * @var type 
     */
    private $pdo;
 
    /**
     * return in instance of the PDO object that connects to the SQLite database
     * @return \PDO
     */
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
        }
        return $this->pdo;
    }
}
$pdo = (new SQLiteConnection())->connect();
if ($pdo != null)
    echo 'Connected to the SQLite database successfully!';
    
else
    echo 'Whoops, could not connect to the SQLite database!';
