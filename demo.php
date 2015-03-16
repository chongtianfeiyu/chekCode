<?php
	session_start();
	include"verificationCode.class.php";
	if($_GET['w']!=''&&$_GET['h']!=''&&$_GET['b']!=''&&$_GET['n'])
	{
	$width=$_GET['w'];
	$height=$_GET['h'];
	$bool=$_GET['b'];
	$num=$_GET['n'];
	}
	else
	{
	$width=80;
	$height=30;
	$bool=false;
	$num=4;
	}
	$code=new verificationCode($width,$height,$num,$bool);
	
	//$code->showImage("./fonts/Roboto-Regular.ttf");
	//$code->showImage("./fonts/STCAIYUN.TTF");
	$code->showImage("./fonts/简竹节.ttf");//应用字体
	//$code->showImage("./fonts/DFPShaoNvW5-GB.ttf");//
	//$code->showImage("./fonts/tt0970m_.ttf");//
	//$code->showImage();//
	$_SESSION["code"]=$code->getCheckCode();  //将验证码保存到服务器中（每个网址具有唯一性）
	
