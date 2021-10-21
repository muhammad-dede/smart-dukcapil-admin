$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {

    // Username
    $("#btn-edit-username").on("click", function (e) {
        e.preventDefault();
        $("#profil-username").addClass("d-none");
        $("#profil-username-button").addClass("d-none");
        $("#profil-username-edit").removeClass("d-none");
    });
    $("#btn-cancel-edit-username").on("click", function (e) {
        e.preventDefault();
        $("#profil-username").removeClass("d-none");
        $("#profil-username-button").removeClass("d-none");
        $("#profil-username-edit").addClass("d-none");
    });

    // Email
    $("#btn-edit-email").on("click", function (e) {
        e.preventDefault();
        $("#profil-email").addClass("d-none");
        $("#profil-email-button").addClass("d-none");
        $("#profil-email-edit").removeClass("d-none");
    });
    $("#btn-cancel-edit-email").on("click", function (e) {
        e.preventDefault();
        $("#profil-email").removeClass("d-none");
        $("#profil-email-button").removeClass("d-none");
        $("#profil-email-edit").addClass("d-none");
    });

    // Password
    $("#btn-edit-password").on("click", function (e) {
        e.preventDefault();
        $("#profil-password").addClass("d-none");
        $("#profil-password-button").addClass("d-none");
        $("#profil-password-edit").removeClass("d-none");
    });
    $("#btn-cancel-edit-password").on("click", function (e) {
        e.preventDefault();
        $("#profil-password").removeClass("d-none");
        $("#profil-password-button").removeClass("d-none");
        $("#profil-password-edit").addClass("d-none");
    });

    // Hapus Validation Error
    $("input").change(function () {
        var input = $(this).attr('name');
        $('.' + input + '_error').text('');
    });
    $("select").change(function () {
        var select = $(this).attr('name');
        $('.' + select + '_error').text('');
    });

    // Profil
    $(".btn_update").on("click", function (e) {
        e.preventDefault();
        var url = $(this).parents('form').attr('action');
        var data = '#' + $(this).parents('form').attr('id');
        $.ajax({
            url: url,
            method: "POST",
            data: new FormData($(data)[0]),
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
                    $('html, body').animate({
                        scrollTop: 0
                    }, "slow");
                    Swal.fire({
                        toast: true,
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        showCloseButton: true,
                        position: 'top-end',
                        timer: 1500,
                        timerProgressBar: true,
                    }).then(() => {
                        history.go(0);
                    });
                }
            }
        });
    });
});
