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
		$uploadTime = date('Y-m-d H:i:s');
		$sql = 'INSERT INTO `'.self::$tableName.'`(`filename`, `url`, `size`, `created_at`, `mime`, `md5`, `upload_server`) VALUES("'.$data['filename'].'", "'.$data['url'].'", '.$data['size'].', "'.$uploadTime.'", "'.$data['mime'].'", "'.$data['md5'].'", "'.$data['uploadServer'].'")';
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
	 * @param $ids
	 *
	 * @return int
	 */
	public function delete($ids){
		$sql = 'DELETE FROM '.self::$tableName.' WHERE id IN(' . $ids . ')';
		return $this->execute($sql);
	}
    
    /**
     * addColumn(注意: sqlite3只支持add column, 不支持drop column)
     * @param $column
     * @param $columnType
     * @param $comment
     *
     * @return int|void
     */
    public function addColumn($column, $columnType, $comment=''){
	    // $sql = 'ALTER TABLE `'.self::$tableName.'` ADD COLUMN `'.$column.'` '.$columnType.' COMMENT "'.$comment.'" AFTER `mime`';
        //sqlite3不支持字段comment和after
        $sql = 'ALTER TABLE `'.self::$tableName.'` ADD COLUMN `'.$column.'` '.$columnType;
        return $this->execute($sql);
    }
    
    /**
     * addIndex
     * @param $indexName
     * @param $column
     * @param $unique
     *
     * @return int
     */
    public function addIndex($indexName, $column, $unique=''){
        $sql = 'CREATE '.$unique.' INDEX '.$indexName.' ON '.self::$tableName.'('.$column.')';
        //sqlite3不支持alter的方式添加缓存，只支持create index的方式
        // $sql = 'ALTER TABLE `'.self::$tableName.'` ADD '.$unique.' INDEX '.$indexName.'('.$column.')';
        return $this->execute($sql);
    }
    
    /**
     * getAllColumns
     * @param        $table
     * @param string $db
     *
     * @return int
     */
    public function getAllColumns($table, $db='mysql'){
        if($db=='sqlite3'){
            $sql = 'PRAGMA table_info(' . $table . ')';
        }else{
            $sql = 'DESC' . $table;
        }
        return $this->execute($sql);
    }
    
    /**
     * findByConditions
     * @param $where
     *
     * @return mixed
     */
    public function findByConditions($where){
        $sql = 'SELECT * FROM `'.self::$tableName.'` WHERE' . $where;
        $res = $this->query($sql);
        return $res;
    }
}