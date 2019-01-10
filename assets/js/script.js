$(document).ready(function(){
    var title;
    var host = window.location.origin;
    var url = host + '/managerProduct/index/createSlug';

    $("#title").on('input', function () {
        title = $(this).val();
        $.ajax({
            url : url,
            type : 'post',
            data : {title : title},
            dataType : 'json',
            success : function (result) {
                $("#slugs").val(result.slugs);
            }
        });
    });
});