<?php
return [
	'database' => [
		'database_type' => 'mysql',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '123456',
		'charset' => 'utf8',
		'database_name' => 'sm',
		'option' => [ //PDO选项
					  PDO::ATTR_CASE => PDO::CASE_NATURAL,
					  PDO::ATTR_TIMEOUT => 5
		]
	],
	'menu' => [
		[
			'url' => [],
			'name' => '我的信息',
		],
		[
			'url' => [
				'Access',
				'role'
			],
			'name' => '角色管理',
			'role' => 1
		],
		[
			'url' => [
				'Access',
				'admin'
			],
			'name' => '用户管理',
			'role' => 1
		],
		[
			'url' => [
				'Access',
				'permission'
			],
			'name' => '权限管理',
			'role' => 1
		],
		[
			'url' => [
				'Access',
				'access_set'
			],
			'name' => '角色权限管理',
			'role' => 1
		],
		[
			'url' => [
				'BaseInfo',
				'op',
				'campus_info'
			],
			'name' => '校园信息',
			'access' => 'campus_info'
		],
		[
			'url' => [
				'BaseInfo',
				'op',
				'college_info'
			],
			'name' => '学院信息',
			'access' => 'college_info'
		],
		[
			'url' => [
				'BaseInfo',
				'op',
				'discipline_info'
			],
			'name' => '专业信息',
			'access' => 'discipline_info'
		],
		[
			'url' => [
				'BaseInfo',
				'op',
				'class_info'
			],
			'name' => '班级信息',
			'access' => 'class_info'
		],
		[
			'url' => [
				'BaseInfo',
				'op',
				'curriculum_info'
			],
			'name' => '课程信息',
			'access' => 'curriculum_info'
		],
		[
			'url' => [
				'BaseInfo',
				'op',
				'teacher_info'
			],
			'name' => '教师信息',
			'access' => 'teacher_info'
		],
		[
			'url' => [
				'Home',
				'logout'
			],
			'name' => '退出登录'
		]
	]
];