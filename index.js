// On load display the server config file
$(document).ready(function() {
    $.ajax({
        method: "GET",
        url : "config.json",
        datatype: "json",
        success : function (data) {
            var text = JSON.stringify(data, null, 4);
            $("#editor").val(text);
        }
    });
});

// Submit the config to config.json
$("form").on('submit', function(event) {
    event.preventDefault();
    try {
        // validate data is json object by throw exception with specific line of the textarea
        var object = JSON.parse($("#editor").val());
        //end
        var valid = isJson($("#editor").val());

        $.get("/src/process.php", {
            action: "configProcess",
            config: $("#editor").val(),
            valid: valid

        }, function(data, status) {
            if (false == data.status) {
                alert("Error: " + data.msg);

            } else {
                if (confirm("Do you want to submit the config?")) {
                    if (true == data.status){
                        alert("Result: " + data.msg);
                        event.currentTarget.submit();
                        // location.reload();
                    }
                }
            }

        }, "json")
        .fail(function() {
            alert("Error. Submit config failed");
        });
    } catch (exception) {
        console.log(exception);
        alert(exception);
    }
    // var valid = isJson($("#editor").val());
    // if (false == valid) {
    //     alert("Format for JSON are not correct please check again");

    // } else if (true == valid) {
    // }
    
});

// Get the current config.json
$("#read").click(function() {
    console.log(event);
    $.ajax({
        method: "GET",
        url : "config.json",
        datatype: "json",
        success : function (data) {
            var text = JSON.stringify(data, null, 4);
            $("#editor").val(text);
        }
    });
});

// Prettify the textarea json
$("#beautify").click(function() {
    var ugly = $("#editor").val();
    var obj = JSON.parse(ugly);
    console.log(obj);
    var pretty = JSON.stringify(obj, undefined, 4);
    $("#editor").val(pretty);
});

// Simple checking about the item are json object
// https://stackoverflow.com/questions/9804777/how-to-test-if-a-string-is-json-or-not
function isJson(item) {
    item = typeof item !== "string" ? JSON.stringify(item) : item;

    try {
        item = JSON.parse(item);
    } catch (e) {
        return false;
    }

    if (typeof item === "object" && item !== null) {
        return true;
    }

    return false;
}


// https://stackoverflow.com/questions/3710204/how-to-check-if-a-string-is-a-valid-json-string-in-javascript-without-using-try
function IsJsonString(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

//https://stackoverflow.com/questions/3710204/how-to-check-if-a-string-is-a-valid-json-string-in-javascript-without-using-try
function tryParseJSONObject (jsonString){
    try {
        var o = JSON.parse(jsonString);

        if (o && typeof o === "object") {
            return o;
        }
    }
    catch (e) { }

    return false;
};
