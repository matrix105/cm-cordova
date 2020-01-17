<?php
    class Config {
        /**
         * path to the sqlite file
         */
         const PATH_TO_SQLITE_FILE = 'db/collector.sqlite';

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
    ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
