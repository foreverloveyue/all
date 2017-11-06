<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>乐淘 - 后台管理</title>
    <?php include './common/style.html';?>
</head>
<body>
    <!-- 侧边栏 -->
    <?php include './common/aside.html';?>
    <!-- 主体 -->
    <div class="main">
        <div class="container-fluid">
            <!-- 头部 -->
            <div class="header">
                <nav class="navbar navbar-custom">
                    <div class="navbar-header">
                        <a href="javascript:;" class="navbar-brand">
                            <i class="fa fa-navicon"></i>
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="./settings.html">
                                <i class="fa fa-user"></i>
                                个人中心
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-sign-out"></i>
                                退出
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                            </a>
                        </li>
                    </ul>
                </nav>          
            </div>
            <!-- 客户列表 -->
            <div class="body goods-list">
                <!-- 面包屑 -->
                <ol class="breadcrumb">
                    <li><a href="javascript:;">商品管理</a></li>
                    <li class="active">商品列表</li>
                </ol>
                <div class="page-title">
                    <a href="./goods_add.html" class="btn btn-success btn-sm pull-right">添加商品</a>
                </div>
                <div class="goods">
                  
                    
                </div>
                <!-- 分页 -->
                <ul class="pagination pull-right">
                   
                </ul>
            </div>
        </div>
    </div>
    <!-- 商品列表模板 -->
    <script type='text/template' id='tpl'>
    {{each rows}}
    <div class="item">
        <div class="pic">
            <img src="./uploads/course_1.jpg" alt="">
        </div>
        <div class="info">
            <a href="javascript:;">{{$value.proName}}</a>
            <ul class="list-unstyled">
                <li>
                    <span>商品原价：{{$value.oldPrice}}</span>
                </li>
                <li>
                    <span>优惠价：{{$value.price}}</span>
                </li>
                <li>
                    <span>商品库存：{{$value.num}}</span>
                </li>
            </ul>
        </div>
    </div>
    {{/each}}
    </script>
  <!-- 分页模板 -->
    <script type="text/template">
         <li><a href="#">上一页</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">下一页</a></li>
    </script>
    <?php include './common/script.html';?>
</body>
</html>
<script>
     require(['src/goodslist']);
</script>