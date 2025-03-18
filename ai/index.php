<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>AI绘画体验馆</title>
<meta name="keywords" content="AI绘画,AI绘画体验馆,AI">
<meta name="description" content="一个简易的AI绘画体验馆">
<link rel="icon" href="favicon.ico" type="image/ico">
<link rel="stylesheet" href="assets/layui/css/layui.css">
<link rel="stylesheet" href="assets/css/index.css?v=<?=rand(0,99999)?>">
</head>
<body>
<div class="layui-col-sm4 layui-col-sm-offset4 layui-col-xs12" style="padding: 10px;">
    <div class="row">
        <div class="layui-col-sm12 layui-col-xs12 pc_title" style="margin-top: 5vh;">
            <h3 class="title">AI绘画体验馆</h3>
        </div> 
        <div class="layui-col-sm10 layui-col-sm-offset1 layui-col-xs12 pc_select box_ty" style="margin-top: 5vh;">
            <input class="pc_input" id="input_select_text" placeholder="请输入你要生成的关键词"/>
            <i class="pc_btn_select layui-icon layui-icon-search" id="btn_select_img"></i>
        </div>
        <div class="layui-col-sm8 layui-col-sm-offset2 layui-col-xs12 pc_into_img " style="margin-top: 5vh;">
            <img class="pc_img box_ty" id="img" src=""/>
        </div>    
    </div>
</div>
<script src='assets/layui/layui.js'></script>
<script src="assets/js/index.js?v=<?=rand(0,99999)?>"></script>  
</body>
</html>    