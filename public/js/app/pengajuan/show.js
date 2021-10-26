$(document).ready(function () {
    $(".btn_status").on("click", function (event) {
        event.preventDefault();
        let text = $(this).attr("text");
        Swal.fire({
            title: 'Ubah Status Pengajuan',
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
