<?php


class DatabasrAdaptor {

	private $DB;
	public function __construct(){
		$db = 'mysql:dbname=quote;host=128.196.128.233';
		$user = 'jianzhao';
		$password = '';
	}
	try{
		$this->DB = new PDO($db, $use, $password);
		$this->DB ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPRIOM);
	}catch(PDOException $e){
		echo ('error establishing ');
		exit();
	}

	public function addNewQuote($quote){
		$stmt = $this->DB->prepare("INSERT INTO quotation (added, quote, author, rating, flagged) values(now(), :quote, :author, 0, 'f')" );

		$stmt->bindParam('quote',$quote);
		$stmt ->execute();
	}


}

?> 