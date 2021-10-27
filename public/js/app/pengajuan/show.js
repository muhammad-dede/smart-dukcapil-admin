$(document).ready(function () {
    // Show Modal
    $('body').on('click', '.modal_status_show', function (event) {
        event.preventDefault();
        $('#btn_submit').attr('class', '');
        $('#btn_submit').removeClass($(this).attr('color'));
        $('#form_status').attr('action', $(this).attr('url'));
        $('#modal_title').html($(this).attr('title'));
        $('#btn_submit').html($(this).attr('title'));
        $('#btn_submit').addClass($(this).attr('color'));
        $('#modal_status').modal('show');
    });

    // Show Sweetalert
    $(".btn_status").on("click", function (event) {
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
