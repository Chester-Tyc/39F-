<?php
// 添加tabbar标签栏
include_once("base.php");

// 权限检测
$allow = array('admin','mgmt','assist');
if (!in_array($_SESSION['power'],$allow)) {
  echo "<meta http-equiv=\"refresh\" content=\"3;url=/\">";
  die('没有权限，跳转回首页，或联系管理员');
}

// 定义日期
$today = date("Y-m-d");

//test表
/*
  $test为表中内容，修改为需要的变量名，value=？
*/
$test = '<form action="upload.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">';
$test .= "<tr><td><b>上传数据</b></td><td>$today</td><td><input type=".'"file" name="file" accept=".csv"></td>';
$test .= '<td><input type="submit" name="file_upload" value="test"></td></tr>';
$test .= '</form>';

$pageContents = <<< EOPAGE

<!-- 下面为页面内容，需要改动的地方有所对应的汉子和{$test} -->
<div class="row">
  <div class="column side"><p>&nbsp; 所在版块: <b>财务 -> 对账模块</b></p></div>
  <div class="column middle">
    <div class="box1">
      <h3><b>工作进度:</b></h3><br />
    </div>
    <div class="box2">
      <! --财务_对账模块-->
      <table>
        <thead><tr><th>内容</th><th>上传日期</th><th>➀ 选择文件(.csv .xlsx)</th><th>➁ 上传</th></tr></thead>
        <tbody>
          {$test}
        </tbody>
      </table>
    </div>
  </div>
<div class="column side"></div>
</div>
</body>
</html>

EOPAGE;

$pageContents = $baseContents.$pageContents;

echo $pageContents;

?>
