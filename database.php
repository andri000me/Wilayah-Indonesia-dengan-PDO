<?php
/*
* Opensource
*/
class db_class{
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $daba = "wilayah_indonesia";
	public $kon;

	public function __construct(){
		$this->kon = NULL;
		try{
			$this->kon = new PDO("mysql:host=".$this->host.";dbname=".$this->daba, $this->user, $this->pass);
		}
		catch(PDOException $e){
			echo "Tidak terhubung ".$e->getmessage();
		}
		return $this->kon;
	}
	public function view($table, $row, $where=NULL, $order=NULL, $limit = NULL){
		$query = "SELECT ".$row." FROM ".$table;
		if($where != null) $query .= " WHERE ".$where;
		if($order != null) $query .= " ORDER BY ".$order;
		if($limit != null) $query .= " LIMIT ".$limit;
		$select = $this->kon->query($query);
		return $select;
	}
}