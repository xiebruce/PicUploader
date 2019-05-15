<?php
/**
 * Created by PhpStorm.
 * User: Bruce Xie
 * Date: 2019-04-30
 * Time: 17:05
 */

namespace settings;

class HistoryModel extends DbModel {
	
	public static $tableName = 'history';
	
	/**
	 * return table name
	 * @return string
	 */
	public static function tableName(){
		return self::$tableName;
	}
	
	/**
	 * Insert one row
	 * @param $data
	 *
	 * @return int
	 */
	public function createOne($data){
		//开启之后，如果报错则会显示出来，否则有错也不显示
		$uploadTime = date('Y-m-d H:i:s');
		$sql = 'INSERT INTO `history`(`filename`, `url`, `size`, `created_at`) VALUES("'.$data['filename'].'", "'.$data['url'].'", '.$data['size'].', "'.$uploadTime.'")';
		$affectedRow = $this->execute($sql);
		return $affectedRow;
	}
	
	/**
	 * Fetch one row by id
	 * @param $id
	 *
	 * @return DbModel
	 */
	public function findOne($id){
		$sql = 'SELECT * FROM `'.self::$tableName.'` WHERE id='. $id;
		$res = $this->query($sql);
		return $res;
	}
	
	/**
	 * Fetch all rows by conditions
	 * @param $where
	 * @param $order
	 * @param $limit
	 *
	 * @return array
	 */
	public function findAll($where, $order, $limit){
		$sql = 'SELECT * FROM `'.self::$tableName.'`';
		$where && $sql .= ' WHERE '.$where;
		$order && $sql .= ' ORDER BY '.$order;
		$limit && $sql .= ' LIMIT '.$limit;
		$res = $this->queryAll($sql);
		return $res;
	}
	
	/**
	 * Get total rows in the table
	 * @param $where
	 *
	 * @return int
	 */
	public function getTotal($where=''){
		$sql = 'SELECT COUNT(*) as rowCount FROM '.self::$tableName;
		if($where) {
			$sql .= ' WHERE '.$where;
		}
		$res = $this->query($sql);
		return isset($res['rowCount']) ? (int)$res['rowCount'] : 0;
	}
	
	/**
	 * Delete a row
	 * @param $id
	 *
	 * @return int
	 */
	public function delete($id){
		$sql = 'DELETE FROM '.self::$tableName.' WHERE id='.$id;
		return $this->execute($sql);
	}
}