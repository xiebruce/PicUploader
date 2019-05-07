<?php
	/**
	 * Created by PhpStorm.
	 * User: Bruce Xie
	 * Date: 2019-04-29
	 * Time: 14:58
	 */
	
namespace settings;

use PDO;
use PDOException;
use uploader\Common;

class DbModel {
	
	public $connection;
	
	public function __construct ()
	{
		$database = (new SettingController())->getDatabaseConfig();
		if(!isset($database['dsn']) || !$database['dsn']){
			return $this->connection;
		}

		try{
			if(strpos($database['dsn'], 'sqlite') === 0){
				$file = str_replace('sqlite:', '', $database['dsn']);
				strpos($file, '/')===false && $file = APP_PATH . '/db/'.$file;
				if(!is_file($file)){
					$dbDir = dirname($file);
					!is_dir($dbDir) && @mkdir($dbDir, 0777, true);
					if(is_dir($dbDir)){
						if(copy(APP_PATH . '/settings/PicUploader-tpl.db', $file) && chmod($file, 0777)){
							$this->connection = new PDO('sqlite:'.$file);
						}
					}
				}else{
					$this->connection = new PDO('sqlite:'.$file);
				}
			}else{
				$this->connection = new PDO($database['dsn'], $database['username'], $database['password']);
				$res = $this->connection->query("SHOW TABLES LIKE 'history'");
				$row = $res->fetch();
				if(!$row || !isset($row[0]) || $row[0]!='history'){
					$historyTableSqlFile = APP_PATH . '/settings/PicUploader.sql';
					if(is_file($historyTableSqlFile)){
						$historyTable = file_get_contents($historyTableSqlFile);
						$this->connection->exec($historyTable);
					}
				}
			}
		}catch (PDOException $e){
			(new Common())->writeLog($e->getMessage(), 'error_log');
		}
		
		return $this->connection;
	}
	
	public function __destruct ()
	{
		// TODO: Implement __destruct() method.
		$this->connection = null;
	}
	
	/**
	 * initialize
	 * @return DbModel
	 */
	/*public static function initialize(){
		return new self();
	}*/
	
	/**
	 * @param $sql
	 *
	 * @return DbModel
	 */
	public function query($sql){
		$res = $this->connection->query($sql);
		return $res->fetch(PDO::FETCH_ASSOC);
	}
	
	/**
	 * @param $sql
	 *
	 * @return array
	 */
	public function queryAll($sql){
		$res = $this->connection->query($sql);
		return $res->fetchAll(PDO::FETCH_ASSOC);
	}
	
	/**
	 * @param $sql
	 *
	 * @return int
	 */
	public function execute($sql){
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$res = $this->connection->exec($sql);
		return $res;
	}
}