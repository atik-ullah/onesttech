$('document').ready(function () {
    // alert(url);
    //group Insert
    $('#groupStore').submit(function (e) {
        e.preventDefault();
        x = new FormData(document.getElementById("groupStore"));
        $.ajax({
            // url: url('authors.store'),
            url: url + '/groups/store',
            method: "POST",
            // data: $(this).serialize(),
            data: x,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (data) {
                if (data.success == true) {
                    alert('Group Added Successfully');

                    $('#groupStore')[0].reset();
                }
                else {
                    for (const key in data.errors) {
                        //    html += '<p>' +key +' - '+ data.errors[key] + '</p>';
                        errorContainer = $('#' + key + '_error');
                        errorContainer.text(data.errors[key][0]);
                    }
                    // $('#errorAll').html(html);
                }
            },
        });
    });

    // show Group Data
    function showGroupsData() {


        $.ajax({
            url: url + "/groups/show",
            dataType: "json",
            method: "GET",
            success: function (response) {
                output = "";
                if (response) {
                    x = response.success;
                }
                for (i = 0; i < x.length; i++) {
                    var tr = $("<tr></tr>");
                    var td = $("<td>" + [i + 1] + "</td><td>" + x[i].name + "</td><td>" +
                        x[i].description + "</td><td>" + x[i].status + "</td><td value=" + x[i].id + "><button id='group_edit' group_id=" + x[i].id + "><i class='fa-solid fa-pen-to-square'></i></button> <button id='group_delete' group_id=" + x[i].id + "><i class='fa-solid fa-trash'></i></button> </td>>");

                    tr.append(td);
                    $("#groupData").append(tr);
                }

            },
        })
    }
    showGroupsData();

    //edit group
    $('#groupData').on('click', '#group_edit', function (e) {
        e.preventDefault();
        let id = $(this).attr("group_id");
        window.location.href = url + "/groups/edit/" + id;
    });

    //Update Group Data
    $('#updateGroup').submit(function (e) {
        e.preventDefault();
        x = new FormData(document.getElementById("updateGroup"));
        let id = $(this).attr("group_id");
        console.log(id),
            $.ajax({
                url: "http://127.0.0.1:8000/groups/update/" + id,
                method: "POST",
                // data: $(this).serialize(),
                data: x,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (response) {

                    if (response.success == true) {
                        alert('Update Successfully');
                        window.location.href = 'http://127.0.0.1:8000/groups/index';
                    }
                    else {
                        window.location.href = "http://127.0.0.1:8000/groups/edit/" + id;
                    }
                },
            });
    });

    //delete data
    $('#groupData').on('click', '#group_delete', function () {
        let id = $(this).attr("group_id");
        alert('Are you want to delete this?');
        $.ajax({
            url: url + "/groups/delete/" + id,
            method: "GET",
            data: (id),
            dataType: "json",
            success: function (data) {
                if (data.success == true) {
                    alert('This Group deleted Successfully');
                } else {
                    alert("This Groupcan't deleted");
                }
            },
        })
        showdata('');
    });

    // ========================
    //typeStore Insert
    $('#typeStore').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: url + '/types',
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function (data) {
                if (data.success == true) {
                    // alert('types Added Successfully');
                    $('#typeStore')[0].reset();
                }
                else {
                    for (const key in data.errors) {
                        //    html += '<p>' +key +' - '+ data.errors[key] + '</p>';
                        errorContainer = $('#' + key + '_error');
                        errorContainer.text(data.errors[key][0]);
                    }
                    // $('#errorAll').html(html);
                }
            },
        });
    });

    // show typeStore Data
    function typeData() {
        $.ajax({
            url: url + "/types/show",
            dataType: "json",
            method: "GET",
            success: function (response) {
                output = [];
                x = response.success;
                //   console.log(x);
                for (i = 0; i < x.length; i++) {

                    var tr = $("<tr></tr>");
                    var td = $("<td>" + [i + 1] + "</td><td>" + x[i].name + "</td><td>" + x[i].code + "</td><td>" + x[i].description + "</td><td>" + x[i].status + "</td><td value=" + x[i].id + "><button id='type_edit' type_id=" + x[i].id + "><i class='fa-solid fa-pen-to-square'></i></button> <button id='type_delete'  type_id=" + x[i].id + "><i class='fa-solid fa-trash'></i></button> </td>>");

                    tr.append(td);
                    $("#typeData").append(tr);
                }
            },
        })
    }

    typeData();

    //Edit Type
    $('#typeData').on('click', '#type_edit', function (e) {
        e.preventDefault();
        let id = $(this).attr("type_id");
        window.location.href = url + "/types/" + id + "/edit/";
    });

    //Update Type Data
    $('#updateType').submit(function (e) {
        e.preventDefault();
        x = new FormData(document.getElementById("updateType"));
        let id = $(this).attr("type_id");
        console.log(id),
            $.ajax({
                url: url + "/type/update/" + id,
                method: "POST",
                // data: $(this).serialize(),
                data: x,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (response) {

                    if (response.success == true) {
                        alert('Update Successfully');
                        window.location.href = url + '/types';
                    }
                    else {
                        window.location.href = url + "/" + id + "/edit";
                    }
                },
            });
    });

    //delete Type data
    $('#typeData').on('click', '#type_delete', function () {
        let id = $(this).attr("type_id");
        alert('Are you want to delete this?');
        $.ajax({
            url: url + "/type/delete/" + id,
            method: "GET",
            data: id,
            dataType: "json",
            success: function (data) {
                console.log(data);
                if (data.success == true) {
                    alert('This Group deleted Successfully');
                }
                else {
                    alert("This Groupcan't deleted");
                }
            },
        })


    });

    // ======================
    // Master insert
    $('#masterStore').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: url + '/masters',
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function (data) {
                let html = '';
                console.log(data);
                if (data.success == true) {
                    alert('Master Added Successfully');
                    $('#masterStore')[0].reset();
                }
                else {
                    alert('To add Master please fill up the form ');
                    for (const key in data.errors) {
                        errorContainer = $('#' + key + '_error');
                        errorContainer.text(data.errors[key][0]);
                    }
                }
            },
        });
    });

    // show master Data
    function masterData() {
        $.ajax({
            url: url + "/masters/show",
            dataType: "json",
            method: "GET",
            success: function (response) {
                output = [];
                x = response.success;
                console.log(x);
                for (i = 0; i < x.length; i++) {

                    var tr = $("<tr></tr>");
                    var td = $("<td>" + [i + 1] + "</td><td>" + x[i].group.name + "</td><td>" + x[i].type.name + "</td><td>" + x[i].due_date + "</td><td>" + x[i].amount + "</td><td>" + x[i].fine_type + "</td><td>" + x[i].percentage + "</td><td>" + x[i].fine_amount + "</td><td>" + x[i].status + "</td><td value=" + x[i].id + "><button id='master_edit' master_id=" + x[i].id + "><i class='fa-solid fa-pen-to-square'></i></button> <button id='master_delete'  master_id=" + x[i].id + "><i class='fa-solid fa-trash'></i></button> </td>>");

                    tr.append(td);
                    $("#masterData").append(tr);
                }
            },
        })
    }

    masterData();

    //Edit Master
    $('#masterData').on('click', '#master_edit', function (e) {
        e.preventDefault();
        let id = $(this).attr("master_id");
        window.location.href = url + "/masters/" + id + "/edit/";
    });

    //Update Master Data
    $('#updateMaster').submit(function (e) {
        e.preventDefault();
        // x = new FormData(document.getElementById("updateMaster"));
        let id = $(this).attr("master_id");
        console.log(id),
            $.ajax({
                url: url + "/master/update/" + id,
                method: "POST",
                data: $(this).serialize(),
                // data: x,
                // processData: false,
                // contentType: false,
                dataType: "json",
                success: function (response) {
                    if (response.success == true) {
                        alert('Update Successfully');
                        window.location.href = url + "/masters/" + id + "/edit/";
                    }
                    else {
                        for (const key in data.errors) {
                            errorContainer = $('#' + key + '_error');
                            errorContainer.text(data.errors[key][0]);
                        }
                    }
                },
            });
    });

    //delete Master data
    $('#masterData').on('click', '#master_delete', function () {
        let id = $(this).attr("master_id");
       
        $("#masterData").html('');
        var confirmDelete = confirm('Are you sure you want to delete this?');
        if (confirmDelete) {
            $.ajax({
                url: url + "/master/delete/" + id,
                method: "GET",
                data: id,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if (data.success == true) {
                        alert('This Master deleted Successfully');
                        masterData();
                    }
                    else {
                        alert("This Master can't deleted");
                    }
                },
            })
        }
    });


    // ====================== Assign Functionality
    //to catch the section by class selection
    $(document).on('change', '#classAssign', function () {
        var classId = $(this).val();
        $.ajax({
            url: url + "/get-section-by-classId/" + classId,
            method: "GET",
            dataType: "JSON",
            success: function (data) {

                var option = '';
                option += '<option selected disabled>Select Section</option>';

                for (const key in data) {
                    option += "<option value=" + data[key]['id'] + ">" + data[key]['name'] + '</option>';
                };
                $('#section').empty().append(option);

            },
        })
    })


    // Assign insert
    $('#assignStore').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: url + '/assigns',
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function (data) {
                let html = '';
                console.log(data);
                if (data.success == true) {
                    alert('assign Added Successfully');
                    $('#assignStore')[0].reset();
                }
                else {
                    for (const key in data.errors) {
                        errorContainer = $('#' + key + '_error');
                        errorContainer.text(data.errors[key][0]);
                    }
                }
            },
        });
    });

    // show Assign Data
    function assignData() {
        $.ajax({
            url: url + "/assigns/show",
            dataType: "json",
            method: "GET",
            success: function (response) {
                output = [];
                x = response.success;
                console.log(x);
                for (i = 0; i < x.length; i++) {

                    var tr = $("<tr></tr>");
                    var td = $("<td>" + [i + 1] + "</td><td>" + x[i].group.name + "</td><td>" + x[i].class.name + "(Section-" + x[i].section.name + ")</td><td>" + x[i].category.name + "</td><td>" + x[i].gender + "</td><td>" + x[i].students_list + "><button id='assign_edit' assign_id=" + x[i].id + "><i class='fa-solid fa-pen-to-square'></i></button> <button id='assign_delete'  assign_id=" + x[i].id + "><i class='fa-solid fa-trash'></i></button> </td>>");

                    tr.append(td);
                    $("#assignData").append(tr);
                }
            },
        })
    }
    assignData();

    //Edit Assign
    $('#assignData').on('click', '#assign_edit', function (e) {
        e.preventDefault();
        let id = $(this).attr("assign_id");
        window.location.href = url + "/assigns/" + id + "/edit/";
    });

    //Update Assign Data
    $('#updateAssign').submit(function (e) {
        e.preventDefault();
        // x = new FormData(document.getElementById("updateMaster"));
        let id = $(this).attr("assign_id");
        console.log(id),
            $.ajax({
                url: url + "/assigns/update/" + id,
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function (response) {
                    if (response.success == true) {
                        alert('Assign Data Update Successfully');
                        window.location.href = url + "/assigns/" + id + "/edit/";
                    }
                    else {
                        for (const key in data.errors) {
                            errorContainer = $('#' + key + '_error');
                            errorContainer.text(data.errors[key][0]);
                        }
                    }
                },
            });
        });
        
        //delete Assign data
        $('#assignData').on('click', '#assign_delete', function () {
            let id = $(this).attr("assign_id");
            var confirmDelete = confirm('Are you sure you want to delete this?');
            assignData();
        if (confirmDelete) {
            $.ajax({
                url: url + "/assigns/delete/" + id,
                method: "GET",
                data: id,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if (data.success == true) {
                        alert('This Assign deleted Successfully');
                    }
                    else {
                        alert("This Assign can't deleted");
                    }
                },
            })
        }
    });


    //Fees Collect by search
    $('#searchCollect').submit(function (e) {
        e.preventDefault();
        $("#searchResults").html('');
        $.ajax({
            url: url + '/collectSearch',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                output = [];
                x = response.success;
                console.log(x);
                for (i = 0; i < x.length; i++) {

                    var tr = $("<tr></tr>");
                    var td = $("<td>" + [i + 1] + "</td><td>" + x[i].first_name + x[i].last_name + "</td><td>" + x[i].admission_no + "</td><td>" + x[i].class+ 
                    x[i].section_id + "</td><td>" + x[i].parent + "</td><td>" + x[i].mobile+ "</td><td><button id='master_edit' master_id=" + x[i].id + "><i class='fa-solid fa-pen-to-square'></i></button> <button id='master_delete'  master_id=" + x[i].id + "><i class='fa-solid fa-trash'></i></button> </td>>");

                    tr.append(td);
                    $("#searchResults").append(tr);
                }
            },
        });
    });


});