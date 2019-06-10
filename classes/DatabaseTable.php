<?php
class DatabaseTable{
	public $table;
	public function __construct($table){
		$this->table = $table;
	}
	function save($record, $pk = ''){
	    try{
	        $check = $this->insert($record);
	        return $check;
	    }
	    catch(Exception $e){
	        $check = $this->update($record, $pk);
	    	return $check;
    	}
	}
	function insert($record) {
	    global $pdo;
	    $keys = array_keys($record);
	    $keysWC = implode(', ', $keys);
	    $keysWCAC = implode(', :', $keys);
	    $query = "INSERT INTO $this->table($keysWC) VALUES(:$keysWCAC)";
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($record);
	    return true;
	}
	function update($record, $pk){
	    global $pdo;
	    $para = [];
	    foreach ($record as $key => $value) {
	        $para[] = $key . ' = :' . $key;
	    }
	    $paraList = implode(', ', $para);
	    $query = "UPDATE $this->table SET $paraList WHERE $pk = :pk";
	    $record['pk'] = $record[$pk];
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($record);
	    return true;
	}
	function find($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field = :value");
	    $criteria = [
	            'value' => $value
	    ];
	    $stmt->execute($criteria);
	    return $stmt;
	}
	function findAll() {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table");
	    $stmt->execute();
	    return $stmt;
	}
	function delete($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("DELETE FROM $this->table WHERE $field = :value");
	    $criteria = [
	            'value' => $value
	    ];
	    $stmt->execute($criteria);
	    return $stmt;
	}
//returns last inserted id -- used for image upload
 function imageUpload(){
    global $pdo;
    return  $pdo->lastInsertId();
  }

//insert row comes first and 1 page shows max of 10 products
  function limitView($num){
			global $pdo;
			$stmt = $pdo->prepare("SELECT * FROM $this->table ORDER BY id DESC LIMIT $num");
			$stmt->execute();
			return $stmt;
		}
}