$(document).ready(function () {
    getData();
    $('#submitBtn').on('click', function (e) {
        e.preventDefault();
        var formData = new FormData($('#submitDataForm')[0]);
        $.ajax({
            type: "POST",
            url: 'ajax/insert.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                const res = JSON.parse(response);
                if (res.status === 'success') {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: res.msg,
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        location.reload();
                    })
                } else if (res.status === 'error') {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: res.msg,
                        showConfirmButton: false,
                        showCancelButton: true,
                        cancelButtonText: 'Close'
                    })
                }
            }
        });
        $('#exampleModal').modal('hide');
        getData();
    });
    $(document).on('click', '.delete', function (e) {
        e.preventDefault();
        var id = $(this).attr('id');
        // console.log(id);
        var $element = $(this).parent().parent();
        $.ajax({
            type: "POST",
            url: 'ajax/delete.php',
            data: {
                'delete': id
            },
            success: function (response) {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: "Successfully Deleted Data!!",
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    location.reload();
                })
            }
        });
        getData();
    });

    $(document).on('click', '.edit', function (e) {
        e.preventDefault();
        var id = $(this).attr('id');
        $.ajax({
            url: 'ajax/update.php',
            type: 'post',
            data: { 'userid' : id },
            success: function (response) {
                $('.modal-body').html(response);
                $('#usermodal').modal('show');
            }
        });
        getData();
    });
    function getData() {
        $.ajax({
            type: "GET",
            url: 'ajax/show.php',
            success: function (response) {
                $('#DataTable').html(response);
            }
        });
    }
});