
$(document).ready(function() {

    $('#student_insert').submit(function(e) {
        e.preventDefault();
        console.log('hhhhhhh');
        x = new FormData(document.getElementById("student_insert"));
        $.ajax({
            url: "{{ route('student.store') }}",
            method: "POST",
            data: x,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(response) {
                if (response.success == true) {
                    window.location.href = "http://127.0.0.1:8000/index/student";
                }
            }
        });
    });
});