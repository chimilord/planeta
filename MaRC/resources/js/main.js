/*
 * MaRC V-Z(ero) Plugin V-1.0.0
 */
(function($) {

    if (!$.marc) {
        $.marc = {};
    }

    var handlers = {};
    var errors = false;

    $.marc.init = function() {

        var nowDateTime = new Date();
        var now = new Date(nowDateTime.getFullYear(), nowDateTime.getMonth(), nowDateTime.getDate(), 0, 0, 0, 0);

        $('#current-site').hide();
        $('#create-resource #create').click(handlers.createResource);
        $('#edit-resource #update').click(handlers.updateResource);
        $('.state-resource').click(handlers.updateStateResource);

        /* Login functions */
        errors = $('#infoMessage').find('p').length;
        if (errors) {
            $('#infoMessage').addClass('alert alert-block alert-error').show();
            $('#infoMessage').delay(3000).fadeOut('slow');
        }

        /* Views functions */
        $('.sections .span3').on('mouseenter', function() {
            $(this).addClass('section-hover');
            $(this).find('a').addClass('section-link-hover');
        }).on('mouseleave', function() {
            $(this).removeClass('section-hover');
            $(this).find('a').removeClass('section-link-hover');
        });

        $('#sites .site').click(function() {
            $(this).getSiteInfo();
        });

    };

    $.fn.clearForm = function() {
        return this.each(function() {
            var type = this.type, tag = this.tagName.toLowerCase();
            if (tag === 'form')
                return $(':input', this).clearForm();
            if (type === 'text' || type === 'password' || tag === 'textarea')
                this.value = '';
            else if (type === 'checkbox' || type === 'radio')
                this.checked = false;
            else if (tag === 'select')
                this.selectedIndex = -1;
        });
    };

    $.fn.getSiteInfo = function() {
        $('#current-site').show();
        var name = $(this).data('name');
        var url = $(this).data('url');
        var site = $(this).data('site');
        $('.current-name').html(name);
        $('.current-url').html('<a href="' + url + '" target="_blank">' + url + '</a>');
        $('.current-site').html(site);

    }

    handlers.createResource = function() {
        var sitio = $('#sitio').val();
        var contenido = $('#contenido').val();
        var domId = $('#domId').val();
        var estado = ($('#estado').prop('checked')) ? 1 : 0;
        $.ajax({
            type: 'POST',
            url: 'http://localhost/CradyDesign/CentralCMS/MaRC/index.php/recursos/',
            dataType: 'json',
            data: {
                sitio: sitio,
                contenido: contenido,
                domId: domId,
                estado: estado
            },
            success: function(response) {
                alert('El recurso se insertó correctamente.');
                $('#create-resource').clearForm();
            },
            error: function() {
                alert('Error: no fue posible insertar el recurso.');
            }
        });
    }

    handlers.updateResource = function() {
        var id = $('#recurso_id').val();
        var sitio = $('#sitio').val();
        var contenido = $('#contenido').val();
        var domId = $('#domId').val();
        $.ajax({
            type: 'PUT',
            url: 'http://localhost/CradyDesign/CentralCMS/MaRC/index.php/recursos/',
            dataType: 'json',
            data: {
                id: id,
                sitio: sitio,
                contenido: contenido,
                domId: domId
            },
            success: function(response) {
                alert('El recurso se actualizó correctamente.');
                $('#edit-resource').clearForm();
            },
            error: function() {
                alert('Error: no fue posible actualizar el recurso.');
            }
        });
    }

    handlers.updateStateResource = function(event) {
        var id = event.target.id;
        var estado = $('#' + id).data('estado');
        $.ajax({
            type: 'PUT',
            url: 'http://localhost/CradyDesign/CentralCMS/MaRC/index.php/recursos/',
            dataType: 'json',
            data: {
                id: id,
                estado: estado
            },
            success: function(response) {
                alert('El recurso se acutalizó correctamente.');
            },
            error: function() {
                alert('Error: no fue posible actualizar el recurso.');
            }
        });
    };



})(jQuery);

