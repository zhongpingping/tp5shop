$('#inputPassword').keyup(function(e) {
    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    var enoughRegex = new RegExp("(?=.{6,}).*", "g");
    if (false == enoughRegex.test($(this).val())) {
        $('#passstrength').css("color", "orange");
        $('#passstrength').html('More Characters');
    } else if (strongRegex.test($(this).val())) {
        $('#passstrength').css("color", "#00a65a");
        $('#passstrength').html('Strong!');
    } else if (mediumRegex.test($(this).val())) {
        $('#passstrength').css("color", "#00a65a");
        $('#passstrength').html('Medium!');
    } else {
        $('#passstrength').css("color", "red");
        $('#passstrength').html('Weak!');
    }
    return true;
});

$("#repPassword").keyup(function (e) {
    var password = $("#inputPassword").val();
    var repPassword = $(this).val();
    console.log("校验密码")
    if(password != repPassword) {
        $("#reppasswordstrength").css("color", "red");
        $("#reppasswordstrength").html("密码和确认密码不一致")
    } else {
        $('#reppasswordstrength').css("color", "#00a65a");
        $('#reppasswordstrength').html('完美!');
    }

    return true;
});

$(function () {
    $('#add-user').click(function(){
        var content = $("#form-html").html();
        var mypops = $.initPopup({
            title:"添加用户",
        }).addButton("取消", function () {
            console.log("点击了取消");
        }).addButton("确定", function () {
            console.log("点击了确定");
        });
        mypops.showPopup(content);
        return false;
    });
})
