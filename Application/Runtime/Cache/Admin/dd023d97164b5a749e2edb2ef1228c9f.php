<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大信驾考理论学习系统后台</title>
<style>
  * {
    font-family: "微软雅黑";
  }

  /*.table_login {*/
    /*background-color: #CCC;*/
  /*}*/

  /*.table_login th {*/
    /*background-color: #CCC;*/
  /*}*/

  /*.table_login td {*/
    /*background-color: #FFF;*/
  /*}*/
  form{
    width: 500px;
    height: 300px;
    background: #1BBC9B;
    border-radius: 20px;
    margin: 200px auto;
  }
  .header{
    width: 100%;
    height: 50px;
    text-align: center;
    line-height: 50px;
    font-size: 20px;
    color: #504c4b;
  }
  .field{
    width: 100%;
    height: 100px;
  }
  .left{
    display: inline-block;
    font-size: 20px;
    width: 30%;
    line-height: 100px;
    color: #504c4b;
  }

  .right{
    width: 250px;
    height: 30px;
    border-radius: 10px;
    border: none;
    margin-left: 10px;
    padding-left: 10px;
  }

  .btn{
    width: 100px;
    height: 30px;
    border: none;
    border-radius: 10px;
    margin-right: 10px;
    background: #009999;
  }
</style>
</head>

<body>
<center>
<form id="form1" name="form1" method="post" action="">
  <!--<table width="100%" border="0" cellspacing="1" cellpadding="10" style="margin-left:auto; margin-right:auto; width:400px; height:200px; position:absolute; left:50%; margin-left:-200px; top:50%; margin-top:-100px;" class="table_login">-->
    <!--<tr>-->
      <!--<th colspan="2">后台管理系统</th>-->
    <!--</tr>-->
    <!--<tr>-->
      <!--<td>用户名：</td>-->
      <!--<td><input type="text" name="username" id="textfield" /></td>-->
    <!--</tr>-->
    <!--<tr>-->
      <!--<td>密码：</td>-->
      <!--<td> <input type="password" name="userpwd" id="textfield2" /></td>-->
    <!--</tr>-->
    <!--<tr>-->
      <!--<td colspan="2" align="center">-->
	  <!--<input type="reset" name="button2" id="button2" value="重置" />-->
	  <!--<input type="submit" name="button" id="button" value="登陆" />-->
        <!--</td>-->
      <!--</tr>-->
  <!--</table>-->
  <div class="header">
    <span>后台管理系统</span>
  </div>
  <div class="field">
    <label for="username" class="left">用户名:</label>
    <input type="text" name="username" id="username" class="right">
  </div>
  <div class="field">
    <label for="userpwd" class="left">密码:</label>
    <input type="password" name="userpwd" id="userpwd" class="right">
  </div>
  <input type="reset" name="button2" id="button2" value="重置" class="btn"/>
  <input type="submit" name="button" id="button" value="登录" class="btn"/>
</form>
</center>
</body>

</html>