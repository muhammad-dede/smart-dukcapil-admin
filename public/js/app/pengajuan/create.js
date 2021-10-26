$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    $("#btn-pengajuan").on("click", function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + '/app/layanan/store-validation/' + $("#url-layanan").val(),
            method: "POST",
            data: new FormData($("#form-pengajuan-layanan")[0]),
            processData: false,
            contentType: false,
            beforeSend: function () {
                $(document).find('#error-text').text('');
            },
            success: function (response) {
                if (response.status == 400) {
                    $.each(response.message, function (prefix, val) {
                        $('.' + prefix + '_error').text(val[0]);
                        $('html, body').animate({
                            scrollTop: $('#' + prefix)
                                .offset().top - 200
                        }, 1000);
                        return false;
                    });
                } else if (response.status == 200) {
                    $("#form-pengajuan-layanan").submit();
                }
            }
        });
    });

    $("input").change(function () {
        var input = $(this).attr('name');
        $('.' + input + '_error').text('');
    });
    $("select").change(function () {
        var select = $(this).attr('name');
        $('.' + select + '_error').text('');
    });
});
