<?php
require("dbConfig.php");
class dbTalk {
#Fetch mode, 0->FETCH_ASSOC, 1->FETCH_NUM, 2->FETCH_BOTH
	public static $fetchMode=0;   
	var $db;
	var $table;
	var $terms = array(
			'set'=>'',
			'distinct'=>'',
			'fields'=>'', 
			'values'=>'',
			'where'=>'',	
			'order'=>'',	
			'limit'=>'',	
			'group'=>'',	
			'having'=>''	
		);
	public function __construct($hostname=HOSTNAME,$dbname=DBNAME,$dbuser=DBUSER,$password=PASSWORD){
		try {
			$this->db = new PDO("mysql:host=$hostname;dbname=$dbname",$dbuser,$password);
			if(self::$fetchMode==0){
				$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			}elseif(self::$fetchMode==1){
				$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
			}else{
				$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_BOTH);
			}
		} catch (PDOException $e) {
			echo "Connection failed: ".$e->getMessage();
		}
	}
	public function __call($methodName,$args){
		foreach($this->terms as $key=>$value){
			if($key==$methodName){
				$this->terms[$methodName]=$args[0];
			}
		}
		return $this;
	}

	public function insert($table=null){
		$table=$table?$table:$this->table;
		$query="insert into $table ";
		$query .= $this->terms['fields']?"(".$this->terms['fields'].")":'';
		$query .= " values(".$this->terms['values'].");";
		$rv=$this->db->exec($query);
		if($rv>0){
			return 1;
		}else{
			return 0;
		}

	}
	public function delete($table=null){
		$table=$table?$table:$this->table;
		$query="delete from $table";
		$query .= $this->terms['where']?" where ".$this->terms['where'].";":';';
		$rv=$this->db->exec($query);
		if($rv>0){
			return 1;
		}else{
			return 0;
		}
	}
	public function update($table=null){
		$table=$table?$table:$this->table;
		$query="update $table set ".$this->terms['set']." where ".$this->terms['where'].";";
		$rv=$this->db->exec($query);
		if($rv>0){
			return 1;
		}else{
			return 0;
		}
	}
	public function find($table=null){
		$table=$table?$table:$this->table;
		$query="select ";
		$query .= $this->terms['distinct']?' distinct '.$this->terms['distinct']:'';
		$query .= $this->terms['fields']?' '.$this->terms['fields']:' *';
		$query .= " from $table";
		$query .= $this->terms['where']?' where '.$this->terms['where']:'';
		$query .= $this->terms['group']?' group by '.$this->terms['group']:'';
		$query .= $this->terms['having']?' having '.$this->terms['having']:'';
		$query .= $this->terms['order']?' order by '.$this->terms['order']:'';
		$query .= $this->terms['limit']?' limit '.$this->terms['limit']:'';
		$query .= ";";
		$rv=$this->db->query($query);
		if($rv){
		    return $rv;
		}else{
		    return 0;
		}
	}
	public function select($query, $table=null){
		$table=$table?$table:$this->table;
		$rv=$this->db->query($query);
		if($rv){
		    return $rv;
		}else{
		    return 0;
		}
	}
	public function exe($query, $table=null){
		$table=$table?$table:$this->table;
		$rv=$this->db->exec($query);
		if($rv){
		    return $rv;
		}else{
		    return 0;
		}
	}
}
