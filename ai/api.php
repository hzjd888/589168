<?
error_reporting(0);
header("content-type:application/json;charset=UTF-8");
$key = "你的KEY";//接口key.key获取地址https://jhapi.rjk66.cn/user/key
$tag = $_GET['tag'];//关键词
$type = $_GET['type'];
if($tag==""){
    $json = array("code"=>2,"msg"=>"请输入关键词！");
    echo echo_json($json);
}else{
  $url = "https://jhapi.rjk66.cn/api/tuapi?key=$key&tag=$tag";
  if($type=="json"){
      $url = $url."&type=json";
      $data = file_get_contents($url);
      echo $data;
  }else{
      $data = file_get_contents($url);
      header("Content-type: image/png");
      echo $data;
  }     
}
function echo_json($json){//转为JSON
    echo json_encode($json, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); 
}
?>