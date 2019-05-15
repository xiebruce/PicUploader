<?php
/**
 * Created by PhpStorm.
 * User: Bruce Xie
 * Date: 2019-04-30
 * Time: 02:32
 */

namespace  settings;

use uploader\Common;
use zelda\Pagination;

class HistoryController extends Controller {
	
	/**
	 * 添加一条历史记录
	 * @param $filename
	 * @param $url
	 * @param $size
	 *
	 * @return int
	 */
	public function Add($filename, $url, $size){
		$pattern = '/http[s]?.*?/';
		if(!preg_match($pattern, $url)){
			return false;
		}
		$model = new HistoryModel();
		return $model->createOne([
			'filename' => $filename,
			'url' => $url,
			'size' => $size,
		]);
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
	    $pagination = '<span class="">共'.$pageCount.'页</span>';
		$pagination .= '<span class="button' . ($curPage==1 ? ' cur' : '') . '" data-page="1">首页</span>';
		$pagination .= '<span class="button' . ($curPage==1 ? ' forbidden' : '') . '" data-page="'. ($curPage==1 ? 1 : $curPage-1) .'">上一页</span>';
		$pagination .= '<span class="button' . ($curPage==$pageCount ? ' forbidden' : '') . '" data-page="' . ($curPage==$pageCount ? $pageCount : $curPage+1) . '">下一页</span>';
		$pagination .= '<span class="button' . ($curPage==$pageCount ? ' cur' : '') . '" data-page="' .$pageCount. '">末页</span>';
		$pagination .= '当前页<input type="number" class="jump-to-page" value="'. $curPage .'">';
		$pagination .= '<span class="button jump-to-page-button" data-pageCount="' .$pageCount. '">跳转</span>';
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
	public function removeItem(){
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$ret = [
			'code' => -1,
			'msg' => '删除失败',
		];
		if(!$id){
			return $ret;
		}
		$model = new HistoryModel();
		
		if($model->delete($id) !== false){
			$ret = [
				'code' => 0,
				'msg' => '删除成功',
			];
		}
		return json_encode($ret, JSON_UNESCAPED_UNICODE);
	}
}