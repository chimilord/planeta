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
        $.ajax({
            type: 'POST',
            url: 'http://localhost/CradyDesign/CentralCMS/MaRC/recursos/',
            dataType: 'jsonp',
            data: {
                format: 'jsonp',
                sitio: sitio,
                contenido: contenido,
                domId: domId
            },
            success: function(response) {
                alert(response);
            },
            error: function() {
                alert('Error: no fue posible insertr el recurso.');
            }
        });
    }

    handlers.cleanForm = function() { }


})(jQuery);

