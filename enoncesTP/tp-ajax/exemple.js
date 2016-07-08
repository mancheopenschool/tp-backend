jQuery(document).ready(function($) {
	$.ajax({
        url: '/path/to/file (ou URL)',
        type: 'GET',
        dataType: 'json',
        data: {param1: 'value1'},
    })
    .done(function() {
        //en cas de succes
        console.log("success");
    })
    .fail(function() {
        //en cas d'erreur
        console.log("error");
    })
    .always(function() {
        //quoiqu'il arrive
        console.log("complete");
    });
});