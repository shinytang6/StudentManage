<?php
/**
 * User: loveyu
 * Date: 2015/1/8
 * Time: 21:03
 */


/**
 * 生成一个js引入连接
 * @param array $list 传入名称列表
 * @return string
 */
function mkt_js($list){
	if(is_string($list)){
		$list = ['src' => $list];
	}
	if(!isset($list['type'])){
		$list['type'] = 'text/javascript';
	}
	$d = "";
	foreach($list as $n => $v){
		$d .= " " . $n . '="' . $v . '"';
	}
	return "<script$d></script>";
}

/**
 * 生成css引入连接
 * @param array|string $list 传入名称列表
 * @return string
 */
function mkt_css($list){
	if(!is_array($list)){
		$list = ['href' => $list];
	}
	if(!isset($list['rel'])){
		$list['rel'] = 'stylesheet';
	}
	if(!isset($list['type'])){
		$list['type'] = 'text/css';
	}
	return mkt_link($list);
}

/**
 * 生成引入连接
 * @param array $list
 * @return string
 */
function mkt_link($list){
	if(!is_array($list)){
		$list = ['href' => $list];
	}
	$d = "";
	foreach($list as $n => $v){
		$d .= " " . $n . '="' . $v . '"';
	}
	return "<link$d />";
}

/**
 * 生成标签
 * @param array $list
 * @return string
 */
function mkt_meta($list){
	$d = "";
	foreach($list as $n => $v){
		$d .= " " . $n . '="' . $v . '"';
	}
	return "<meta$d />";
}

//---相关用户信息函数------------
/**
 * 角色相关信息
 * @param $info
 * @return string
 */
function role_info($info){
	if(empty($info)){
		return "未知角色";
	}
	return $info['name'] . "[" . $info['id'] . "]" . (!$info['status'] ? "(<span class='text-success'>正常</span>)" : "(<span class='text-danger'>禁用</span>)");
}

/**
 * 用户状态
 * @param $status
 * @return string
 */
function user_status($status){
	$arr = [
		0 => '正常',
		1 => '限制登录',
		2 => '解除权限'
	];
	return isset($arr[$status]) ? $arr[$status] : "[未知]";
}

/**
 * 获取角色的状态
 * @param $status
 * @return string
 */
function role_status($status){
	switch($status){
		case 0:
			return "<span class='text-success'>正常</span>";
		case 1:
			return "<span class='text-danger'>禁用</span>";
		default:
			return "<span class='text-warning'>未知</span>";
	}
}

/**
 * 生成OPTION数据
 * @param array  $value_list
 * @param string $select
 * @return string
 */
function html_option($value_list, $select){
	$rt = "";
	foreach($value_list as $value => $name){
		$rt .= "<option value=\"{$value}\"" . ($value == $select ? " selected" : "") . ">{$name}</option>";
	}
	return $rt;
}