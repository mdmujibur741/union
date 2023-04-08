function actionMenu(id) {
    //alert(id);
    //$('#actonlists' + id).css('display', 'block');
    $("#actonlists" + id).slideToggle();
}


function deleteSingle(id, patch, tables) {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function(isConfirm) {
        if (!isConfirm) return;
        $.ajax({
            url: patch,
            type: "GET",
            data: {
                'id': id,
                'tablename': tables
            },
            dataType: "html",
            success: function() {
                swal("Done!", "It was succesfully deleted!", "success");
                $("#tablerow" + id).fadeOut('slow');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                swal("Error deleting!", "Please try again", "error");
            }
        });
    });
}

function getRelationalData(value, column, table, placement, route) {
    if (value === 0) {
        return false;
    } else {
        var surl = route;
        $.ajax({
            type: "GET",
            url: surl,
            data: {
                'value': value,
                'column': column,
                'table': table,
                'placement': placement
            },
            cache: false,
            success: function(response) {
                $('#' + placement).html(response);
                if (route == '/tax-data') {
                    getAmount();
                }
            },
            error: function(status) {
                swal("Done!", 'Unknown error ' + status, "error");
            }
        });
    }
}