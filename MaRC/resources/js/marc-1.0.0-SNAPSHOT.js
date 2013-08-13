(function($) {
    if (!$.marc) {
        $.marc = {};
    }

    var data = {
        base: 'http://localhost/~ismael', // URL base a la que se hace las peticiones
        url: '/marc/index.php/recursos/' 
    }


    $.marc.init = function(params) {
        // Si es otra URL
        data.url = params.url || data.url;
        data.base = params.base || data.base;

        // Hacemos la llamada
        $.ajax({
            url: data.base + data.url,
            dataType: 'jsonp',
            data: {sitio: params.sitio, format: 'jsonp'},
            success: function(response) {
                var length = response.length;

                for (var i = 0; i < length; i++) {
                    var recurso = response[i];
                    $('#' + recurso.domId).html(recurso.contenido);
                }
            },
            error: function() {
                alert('Error: no fue posible descargar los recursos externos.');
            }
        });
    }

})(jQuery)
