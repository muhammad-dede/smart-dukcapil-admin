$(document).ready(function () {
    $('body').on('click', '.btn_show_modal', function (event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var title = $(this).attr('title');
        $('.modal_title').text(title);
        $.ajax({
            url: url,
            dataType: 'html',
            success: function (response) {
                $('.modal_body').html(response);
            }
        });
        $('.modal').modal('show');
    });

    $(".btn_modal_simpan").on('click', function (event) {
        event.preventDefault();
        var form = $('.modal_body form'),
            url = form.attr('action'),
            method = $('input[name=_method]').val();
        $.ajax({
            url: url,
            method: method,
            data: form.serialize(),
            beforeSend: function () {
                $(document).find('#error_text').text('');
            },
            success: function (response) {
                if (response.status == 400) {
                    $.each(response.message, function (key, value) {
                        $('.' + key + '_error').text(value[0]);
                    });
                } else if (response.status == 200) {
                    form.trigger('reset');
                    $('.modal').modal('hide');
                    $('#datatable').DataTable().ajax.reload();
                    Swal.fire({
                        toast: true,
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        showCloseButton: true,
                        position: 'top-end',
                        timer: 1500,
                        timerProgressBar: true,
                    })
                }
            }
        });
    });

    $('body').on('click', '.btn_show_alert', function (event) {
        event.preventDefault();
        let title = $(this).attr("title");
        let text = $(this).attr("text");
        Swal.fire({
            title: title,
            text: text,
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).parents("form").submit();
            }
        })
    });
});
