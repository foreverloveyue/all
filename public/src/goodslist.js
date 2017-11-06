define(['jquery','template','./utils'],function($,template){
    var size=2;
    var reg=/\?[a-z]+=(\d+)/;
    var search=location.search||'';
    var page=reg.exec(search)&&reg.exec(search)[1];
    page=page||1;
    $.ajax({
        url:'/api/product/queryProductDetailList',
        type: 'get',
        data:{page:page,pageSize:size},
        success:function(info){
            var html=template('tpl',info);
            $('.goods').html(html);
            var total=info.total;
            // 总的页数
            var pageLen=Math.ceil(total/size);
            // 调用模板引擎处理分页
            var pagehtml=template('page',{
                pageLen: pageLen,
                page:page
            })
            $('.pagination').html(pagehtml);
        }
    })
})