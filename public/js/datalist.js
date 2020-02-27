$(function () {
    $('#searchId').on('input', function () {
        var data=$(this).val();
        $.ajax({
            url: '/ajax/datalist',
            data: 'list=' + data,
            type: 'POST',
            success: function (data) {
                const summaryList = $('#summaryList');
               summaryList.empty();
               summaryList.append(data);
            },
            error: function (msg) {
                console.log(msg);
            }
        });
    });
});
