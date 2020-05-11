<?php
/**
 * Created by PhpStorm.
 * User: Bruce Xie
 * Date: 2019-04-30
 * Time: 02:32
 */

namespace  settings;

use uploader\Common;

class HistoryController extends Controller {
	
	/**
	 * 添加一条历史记录
	 * @param $filename
	 * @param $url
	 * @param $size
	 * @param $mime
	 * @param $md5
	 * @param $uploadServer
	 *
	 * @return int
	 */
	public function Add($filename, $url, $size, $mime, $md5, $uploadServer){
        $model = new HistoryModel();
        try {
            $pattern = '/^http[s]?.*?/';
            if(!preg_match($pattern, $url)){
                return false;
            }
            
            $affectedRow = $model->createOne([
                'filename' => $filename,
                'url' => $url,
                'size' => $size,
                'mime' => $mime,
                'md5' => $md5,
                'uploadServer' => $uploadServer,
            ]);
        }catch (\PDOException $exception){
            $affectedRow = 0;
            $msg = $exception->getMessage();
            $this->AddMissingColumn($model, $msg);
        }
        return $affectedRow;
	}
    
    /**
     * AddMissingColumn
     * @param $model
     * @param $msg
     */
    public function AddMissingColumn($model, $msg){
        $matches = [];
        preg_match("/1 table history has no column named (.*$)|Unknown column '(.*?)'/", $msg, $matches);
        $missColumn = isset($matches[2]) ? $matches[2] : (isset($matches[1]) ? $matches[1] : '');
        if($missColumn){
            $attr = [
                'md5' => ['comment' => 'md5值', 'columnType'=>'VARCHAR(32) NOT NULL DEFAULT ""'],
                'upload_server' => ['comment' => '图床', 'columnType'=>'VARCHAR(16) NOT NULL DEFAULT ""'],
            ];
            $bool = $model->addColumn($missColumn, $attr[$missColumn]['columnType'], $attr[$missColumn]['comment']);
            if($missColumn=='md5' || $missColumn=='upload_server'){
                $model->addIndex('inx_'.$missColumn, $missColumn);
            }
        }
    }
	
	/**
	 * 获取分页
	 * @param $totalCount
	 * @param $curPage
	 * @param $pageSize
	 *
	 * @return string
	 */
	public function getPagination($totalCount, $curPage, $pageSize){
		// var_dump($curPage);exit;
		$pageCount = ceil($totalCount / $pageSize);
        $pagination = '<span class="">共'.$totalCount.'条, </span>';
        $pagination .= '<span class="">共'.$pageCount.'页 </span>';
		$pagination .= '<span class="button' . ($curPage==1 ? ' cur' : '') . '" data-page="1">首页</span>';
		$pagination .= '<span class="button' . ($curPage==1 ? ' forbidden' : '') . '" data-page="'. ($curPage==1 ? 1 : $curPage-1) .'">上一页</span>';
		$pagination .= '<span class="button' . ($curPage==$pageCount ? ' forbidden' : '') . '" data-page="' . ($curPage==$pageCount ? $pageCount : $curPage+1) . '">下一页</span>';
		$pagination .= '<span class="button' . ($curPage==$pageCount ? ' cur' : '') . '" data-page="' .$pageCount. '">末页</span>';
		$pagination .= '当前页<input type="number" class="jump-to-page" value="'. $curPage .'">';
		$pagination .= '<span class="button jump-to-page-button" data-pagecount="' .$pageCount. '">跳转</span>';
		return $pagination;
	}
	
	/**
	 * 获取历史记录列表
	 *
	 * @return array
	 */
	public function getList(){
		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

		$model = new HistoryModel();
		$pageSize = 10;
		
		$where = '';
		if($keyword){
			$where = '((`filename` LIKE "%'.$keyword.'%") OR (`url` LIKE "%'.$keyword.'%") OR (`created_at` LIKE "%'.$keyword.'%"))';
		}
		
		$total = $model->getTotal($where);
		$pageCount = (int)ceil($total / $pageSize);
		$page > $pageCount && $page = $pageCount;
		$page < 1 && $page = 1;
		$offset = ($page-1) * $pageSize;
		$limit = $offset . ',' . $pageSize;
		$order = 'id DESC';
		
		$rows = $model->findAll($where, $order, $limit);
		$common = new Common();
		foreach($rows as &$row){
			$row['size'] = $common->getFileSizeHuman($row['size']);
		}

		$pagination = $this->getPagination($total, $page, $pageSize);
		
		// var_dump($res);
		return json_encode([
			'code' => 0,
			'data' => $rows,
			'pagination' => $pagination,
		], JSON_UNESCAPED_SLASHES);
	}
	
	/**
	 * 删除一条记录
	 *
	 * @return false|string
	 */
	public function removeItems(){
		$ids = isset($_REQUEST['ids']) ? $_REQUEST['ids'] : '';
		
		$ret = [
			'code' => -1,
			'msg' => '删除失败',
		];
		if(!$ids){
			return $ret;
		}
		$model = new HistoryModel();
		if($model->delete($ids) !== false){
			$ret = [
				'code' => 0,
				'msg' => '删除成功',
			];
		}
		return json_encode($ret, JSON_UNESCAPED_UNICODE);
	}
    
    /**
     * 删除Imgur或sm.ms的图片
     * @return false|string
     * @throws \Exception
     */
    public function deleteImage(){
		$hash = isset($_REQUEST['hash']) ? $_REQUEST['hash'] : '';
		$engine = isset($_REQUEST['engine']) ? $_REQUEST['engine'] : '';
		$config = call_user_func([(new SettingController()), 'getMergeSettings']);
		$constructorParams = [
			'config' => $config,
			'argv' => '',
			'uploadServer' => strtolower($engine),
		];
        $uploadServer = 'uploader\\Upload'.ucfirst($engine);
		$res = (new $uploadServer($constructorParams))->deleteImage($hash);
		return json_encode($res);
	}
    
    /**
     * getByConditions
     * @param $conditionArr
     *
     * @return bool|mixed
     */
    public function getByConditions($conditionArr){
        $model = new HistoryModel();
        try {
            $where = '';
            foreach($conditionArr as $key=>&$val){
                $where .= "`".$key."`='".$val."' AND ";
            }
            $where .= '1=1';
            $res = $model->findByConditions($where);
        }catch (\PDOException $exception){
            $res = false;
            $msg = $exception->getMessage();
            $this->AddMissingColumn($model, $msg);
        }
        return $res;
    }
}