$(function () {
    $(document).on("click", "#btn_task_save", function () {
        let user_id = $(this).attr("data-value");
       /* let priority_val = $("input[name='priority']:checked").val();
        let status_val = $("input[name='status']:checked").val();*/

        let form = $("#form_task")[0];
        let data = new FormData(form);
        data.append("user_id", user_id);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/task-store",
            method: 'POST',
            data: data,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.status === "success") {
                    Swal.fire({
                        icon: response.status,
                        text: response.message,
                        showCancelButton: false,
                        buttonsStyling: false,
                        confirmButtonText: "Tamam",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light"
                        },
                    });
                } else {
                    Swal.fire({
                        icon: response.status,
                        text: response.message,
                        showCancelButton: false,
                        buttonsStyling: false,
                        confirmButtonText: "Tamam",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light"
                        },
                    });
                }
            }
        })
    });
});
