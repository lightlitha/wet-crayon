<?php

namespace Epiqworx\Abstraction;

abstract class DBHandler {
	private static $connection;
    private static function GetConnection() {
        self::$connection = mysqli_connect('localhost', 'root', '');
		if (!self::$connection){
    		die("Database Connection Failed" . mysqli_error(self::$connection));
		}
		$select_db = mysqli_select_db(self::$connection, 'wetcrayon');
		if (!$select_db){
    		die("Database Selection Failed" . mysqli_error(self::$connection));
		}
		return self::$connection;
    }

    public static function DQLi($sql, $params = null) {
        try {
            $conn = self::GetConnection();
            $stmt = mysqli_query($conn, $sql);
            $rslt = array();
                while($result = mysqli_fetch_assoc($stmt)){
                    $rslt[] = $result;
                }
            return $rslt;
        } catch (Exception $ex) {
            \Epiqworx\Abstraction\Glitch::dberror($ex->getMessage());
        }
    }
    
    public static function DQLqi($sql, $params = null) {
        try {
            $conn = self::GetConnection();
            $stmt = mysqli_query($conn, $sql);
            return mysqli_fetch_array($stmt);
        } catch (Exception $ex) {
            \Epiqworx\Abstraction\Glitch::dberror($ex->getMessage());    
        }
    }

    public static function DMLi($sql, $params = null) {
    	try {
    		$conn = self::GetConnection();
                $result = mysqli_query($conn, $sql) or die("Insert Not Succeesful ". mysqli_error($conn));
    	} catch(Exception $ex) {
    		\Epiqworx\Abstraction\Glitch::dberror($ex->getMessage());
    	}
    }
}




?>


<?php
/*
namespace Epiqworx\Abstraction;

abstract class DBHandler {
    private static $connection;
    private static function GetConnection() {
        self::$connection = mysqli_connect('localhost', 'root', '24685', 'testdb');
        if (mysqli_connect_errno()){
            printf("Database Connection Failed" . mysqli_connect_error());
            exit();
        }
        return self::$connection;
    }

    public static function DQLi($query, $params = null) {
        try {
            $conn = self::GetConnection();
            if($stmt = $conn->prepare($query)) {
                $rows = array();
                /* execute statement */
/*                $stmt->execute();
                /* bind result variables */
/*                while($row = $stmt->fetch_assoc()) {
                    $rows[] = $row;
                }
                print_r($rows);
                $stmt->close();
                exit();
            }
        } catch (Exception $ex) {
            \Epiqworx\Abstraction\Glitch::dberror($ex->getMessage());
        }
    }

    public static function DMLi($sql, $params = null) {
        try {
            $conn = self::GetConnection();
            $result = mysqli_query($conn, $sql);
        } catch(Exception $ex) {
            \Epiqworx\Abstraction\Glitch::dberror($ex->getMessage());
        }
    }
}

*/
?>
