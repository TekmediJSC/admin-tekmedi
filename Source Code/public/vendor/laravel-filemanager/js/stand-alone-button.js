(function ($) {

    $.fn.filemanager = function (type, options) {
        type = type || 'file';

        this.on('click', function (e) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
            var target_input = $('#' + $(this).data('input'));
            var target_preview = $('#' + $(this).data('preview'));
            window.open(route_prefix + '?type=' + type, 'FileManager', 'width=1280,height=720');
            window.SetUrl = function (url, time) {
                // set the value of the desired input to image url
                target_input.val('').val(url.replace(/https?:\/\/[^/]+\/[^/]+/, '')).trigger('change');

                // clear previous preview
                target_preview.html('');

                // set or change the preview image src
                target_preview.css('margin-top', '15px').attr('src', url);

                // trigger change event
                target_preview.trigger('change');
            };
            return false;
        });
    }

})(jQuery);
