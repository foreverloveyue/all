define(['jquery'],function($){
    $('form').on('submit',function(){
        var _this=$(this);
        $.ajax({
        // http://localhost:3000/employee/employeeLogin
        
        url: '/api/employee/employeeLogin',
        type:'post',
        data:_this.serialize(),
        success: function (info) {
            // 失败
            if(info.error) {
                    return alert(info.message);
                }

                // 成功跳转
                location.href = '/';
            }      
    })
    return false;
    });
})