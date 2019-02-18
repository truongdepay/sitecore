$(document).ready(function(){
    /**
     * Xu ly khi nhap tieu de bai viet tao slugs
     */
    $("#title").on('input', function () {
        var title;
        var host = window.location.origin;
        var uri = $(this).attr('url-data');
        var url = host + uri;
        title = $(this).val();
        $.ajax({
            url : url,
            type : 'post',
            data : {title : title},
            dataType : 'json',
            success : function (result) {
                $("#slugs").val(result.slugs);
                $(".error-slugs").html(result.notify);
            }
        });
    });

    /**
     * Xu ly khi edit slugs
     */
    $("#slugs").on('input', function () {
        var title;
        var host = window.location.origin;
        var uri = $(this).attr('url-data');
        var url = host + uri;
        title = $(this).val();
        $.ajax({
            url : url,
            type : 'post',
            data : {title : title},
            dataType : 'json',
            success : function (result) {
                $(".error-slugs").html(result.notify);
            }
        });
    });
});

function autoSelect(valDefault, tag) {
    $(tag).each(function () {
        var value = $(this).val();
        if (valDefault == value) {
            $(this).prop('selected', true);
        }
    });
}
