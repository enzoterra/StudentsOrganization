<?php
    class Database {
        public function getConnection() {
            try {
                $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                return new PDO('pgsql:host=localhost;dbname=web2p1', "postgres", "postgres", $options);
            }
            catch (PDOException $e) {
                return null;
            }
        }
    }
?>
