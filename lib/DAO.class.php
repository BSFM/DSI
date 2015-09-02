<?php

/*
 * DAO used to run queries 
 */

class DAO
{
    /**
     * Returns a PDO connection
     */
    public static function getPDOConnection() {
        $databaseHost = DatabaseConfig::DATABASE_HOST;
        $databaseName = DatabaseConfig::DATABASE_NAME;
        $databasePort = DatabaseConfig::DATABASE_PORT;
        $login = DatabaseConfig::DATABASE_LOGIN;
        $password = DatabaseConfig::DATABASE_PASSWORD;
        try {
            $pdoOptions[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $pdo = new PDO('mysql:host=' . $databaseHost .';port=' .$databasePort .';dbname=' . $databaseName, $login, $password, $pdoOptions);
            $pdo->exec('SET NAMES UTF8');
            $pdo->exec("SET CHARACTER SET utf8");
            return $pdo;
        } catch (Exception $e) {
            die('Error for PDO: ' . $e->getMessage());
        }
    }

    /**
     * Executes a query and returns the result     
     */
    public static function runQueryAndFetchResult($query) {
        //echo $query;
        $pdo = self::getPDOConnection();
        $result = $pdo->prepare($query);     
        unset($pdo);
        if ($result->execute()) {
            return $result->fetchAll();
        }
    }
    public static function runQueryAndFetchResultAssoc($query) {
        $pdo = self::getPDOConnection();
        $result = $pdo->prepare($query);     
        unset($pdo);
        if ($result->execute()) {
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }    
    /**
     * Retourne un unique enregistrement
     */
    public static function runQueryAndFetchOneResult($query) {
        $pdo = self::getPDOConnection();
        $result = $pdo->prepare($query);
        unset($pdo);
        if ($result->execute()) {
            $result = $result->fetchAll();
            if ($result) {
                return $result[0];
            }            
        }
    }
    public static function runQueryAndFetchOneResultAssoc($query) {
        $pdo = self::getPDOConnection();
        $result = $pdo->prepare($query);
        unset($pdo);
        if ($result->execute()) {
            $result = $result->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {                
                return $result[0];
            }            
        }
    }    

    /**
     * Executes an INSERT/DELETE/UPDATE query 
     * and returns the number of affected rows     
     */
    public static function execQuery($query) {
        $pdo = self::getPDOConnection();
        $stm = $pdo->prepare($query);
        $result = $stm->execute();
        unset($pdo);
        return $result;
    }

    /**
     * Executes an INSERT query 
     * and returns the last insert id    
     */
    public static function execQueryReturnLastInsertId($query) {
        $pdo = self::getPDOConnection();
        $stm = $pdo>prepare($query);
        $stm->execute();
        $lastId = $pdo->lastInsertId();
        unset($pdo);
        return $lastId;
    }   
}