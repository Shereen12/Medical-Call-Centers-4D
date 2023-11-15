function create() {
    var name = $("#name").val();
    var email = $("#email").val();
    var dateofbirth = $("#date-of-birth").val();
    var password = $("#password").val();

    var form_data = new FormData();
    form_data.append("_token", $("#_token").val());
    form_data.append("name", name);
    form_data.append("email", email);
    form_data.append("dateofbirth", dateofbirth);
    form_data.append("password", password);

    document.querySelector("#createUserButton").innerHTML = "Loading ...";
    document.getElementById("createUserButton").disabled = "disabled";
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "/users/create", // point to server-side controller method
        dataType: "text", // what to expect back from the server
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: "post",
        success: function (data) {
            if (typeof data == "string") {
                data = jQuery.parseJSON(data);
            }
            $.each(data.triggers, function (index, FunctionName) {
                eval(FunctionName);
            });
            document.querySelector("#createUserButton").innerHTML = "Save";
            document.getElementById("createUserButton").disabled = "";

            getAllusers();
        },
        error: function (data) {
            if (typeof data.responseText == "string") {
                console.log("data");
                data = jQuery.parseJSON(data.responseText);
            }
            $.each(data.errors, function (index, value) {
                // console.log();
                $("#" + index).addClass("is-invalid");

                $("#P_" + index).text(value);
                $("#P_" + index).show();
            });
            document.querySelector("#createUserButton").innerHTML = "Save";
            document.getElementById("createUserButton").disabled = "";
        },
    });
}

function getAllusers() {
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "/allusers", // point to server-side controller method
        dataType: "text", // what to expect back from the server
        cache: false,
        contentType: false,
        processData: false,
        type: "get",
        success: function (data) {
            if (typeof data == "string") {
                data = jQuery.parseJSON(data);
            }
            console.log(data);
            $("#allusers").empty();
            for (let i = 0; i < data.length; i++) {
                $("#allusers").append(`
                <a href="user/${data[i].id}">${data[i].name}</a>
            `);
            }
        },
        error: function (data) {
            if (typeof data.responseText == "string") {
                data = jQuery.parseJSON(data.responseText);
            }
            $.each(data.errors, function (index, value) {
                console.log(value);
            });
        },
    });
}

function login() {
    var email = $("#email").val();
    var password = $("#password").val();

    var form_data = new FormData();
    form_data.append("_token", $("#_token").val());
    form_data.append("email", email);
    form_data.append("password", password);

    document.querySelector("#loginButton").innerHTML = "Loading ...";
    document.getElementById("loginButton").disabled = "disabled";
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: "/user/login", // point to server-side controller method
        dataType: "text", // what to expect back from the server
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: "post",
        success: function (data) {
            if (typeof data == "string") {
                data = jQuery.parseJSON(data);
            }
            $.each(data.triggers, function (index, FunctionName) {
                eval(FunctionName);
            });
            document.querySelector("#loginButton").innerHTML = "Save";
            document.getElementById("loginButton").disabled = "";

            $("#message").html(data);
        },
        error: function (data) {
            if (typeof data.responseText == "string") {
                console.log("data");
                data = jQuery.parseJSON(data.responseText);
            }
            $.each(data.errors, function (index, value) {
                // console.log();
                $("#" + index).addClass("is-invalid");

                $("#P_" + index).text(value);
                $("#P_" + index).show();
            });
            document.querySelector("#loginButton").innerHTML = "Save";
            document.getElementById("loginButton").disabled = "";
        },
    });
}
