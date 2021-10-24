
$(document).ready(function () {
    $('body').on('click', '.modal_user_show', function (event) {
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
        $('.modal_user').modal('show');
    });

    $(".btn_modal_simpan").on('click', function (event) {
        event.preventDefault();
        var form = $('.modal_body form'),
            url = form.attr('action'),
            method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';
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
                    $('.modal_user').modal('hide');
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

    $('body').on('click', '.btn_status', function (event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var title = $(this).attr('title');
        var csrf = $('meta[name="csrf-token"]').attr('content');
        Swal.fire({
            title: 'Yakin ingin ' + title + '?',
            text: "Status akan diubah!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': csrf
                    },
                    success: function (response) {
                        $('#datatable').DataTable().ajax.reload();
                        Swal.fire(
                            'Berhasil!',
                            response.message,
                            'success'
                        )
                    }
                });
            }
        })
    });
});
