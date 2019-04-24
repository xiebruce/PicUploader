<?php
	/**
	 * Created by PhpStorm.
	 * User: Bruce Xie
	 * Date: 2019-04-24
	 * Time: 14:07
	 */
	
/***
//应用举例
require_once('cls_sqlite.php');
//创建实例
$DB=new SQLite('blog.db'); //这个数据库文件名字任意
//创建数据库表。
$DB->query("create table test(id integer primary key,title varchar(50))");
//接下来添加数据
$DB->query("insert into test(title) values('泡菜')");
$DB->query("insert into test(title) values('蓝雨')");
$DB->query("insert into test(title) values('Ajan')");
$DB->query("insert into test(title) values('傲雪蓝天')");
//读取数据
print_r($DB->getlist('select * from test order by id desc'));
//更新数据
$DB->query('update test set title = "三大" where id = 9');
 ***/
 
class SQLite
{
	function __construct($file)
	{
		try
		{
			$this->connection=new PDO('sqlite:'.$file);
		}
		catch(PDOException $e)
		{
			try
			{
				$this->connection=new PDO('sqlite2:'.$file);
			}
			catch(PDOException $e)
			{
				exit('error!');
			}
		}
	}
	
	function __destruct()
	{
		$this->connection=null;
	}
	
	function query($sql) //直接运行SQL，可用于更新、删除数据
	{
		return $this->connection->query($sql);
	}
	
	function getlist($sql) //取得记录列表
	{
		$recordlist=array();
		foreach($this->query($sql) as $rstmp)
		{
			$recordlist[]=$rstmp;
		}
		return $recordlist;
	}
	
	function Execute($sql)
	{
		return $this->query($sql)->fetch();
	}
	
	function RecordArray($sql)
	{
		return $this->query($sql)->fetchAll();
	}
	
	function RecordCount($sql)
	{
		return count($this->RecordArray($sql));
	}
	
	function RecordLastID()
	{
		return $this->connection->lastInsertId();
	}
}