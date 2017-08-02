<?php
	header("content-type:text/html;charset=utf-8");
	// 变量的创建：1. 动态语言性（无需指定变量类型）  2. 无需声明性，直接赋值
	$name = "lly";
	$gender = "男";
	$age = 20;
	$salary = 12000;
	$tax = 300;
	$str = "";  //提前声明str，否则后面的str .= 中 str未声明
	$str .= "<h3>{$name}的信息如下</h3>";  // str .=  相当于 str = str . "<h3>{$name}的信息如下</h3>"
	// $name必须加上{}，否则会将 “name的信息如下” 当成一个未声明的变量
	//在PHP中链接字符串使用的是 .  算数相加才是 +
	$str .= "<br>性别：$gender";  //变量位于句末不用加{}分隔
	$str .= "<br>年龄：$age";
	$str .= "<br>月收入：" . ($salary-$tax);  //在引号里不能进行算数运算，注意优先级
	//  . 和 - 优先级相同，从左往右算，为避免$salary结合字符串需要加()优先进行算数运算
 	echo $str;

 	//使用isset()检验变量是否存在   若未创建或为NULL 返回false
 	$space = "";
 	if(isset($space)) {
 		echo("<br>该变量存在！");
 	}
 	else
 		echo("<br>该变量不存在！");
 	//使用empty()检验变量是否为空
 	if(empty($space)) {
 		echo("该变量为空！");
 	}
 	else
 		echo("该变量不为空！");

 	//使用var_dump()打印出变量的类型和值,数组将递归展开值，通过缩进显示其结构(源代码可见)。
 	echo("<br>");  //分隔上文
 	$juge = true;
 	$points = 87.56;
 	var_dump($age,$juge,$points);
 	//打印数组信息
 	echo("<br>");
 	$arr = array("LlyCoder","men",16,13555.50);
 	var_dump($arr);

 	//可变变量
 	echo("<br>");
 	$hello = "hello world";
 	$abc = "hello";
 	echo($$abc); //会输出 hello world
?>
