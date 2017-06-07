const DOMAIN = 'http://vnexpress.dev/admin/';

function updateActive(url, id, callBackOnSuccess, callBackOnError) {
    $.ajax({
        url: DOMAIN + url + '/' + id,
        type: 'GET',
        async: true,
        dataType: 'JSON',
        success: function (data) {
            callBackOnSuccess(data);
        },
        error: function (error) {
            callBackOnError(error);
        }
    });
}
