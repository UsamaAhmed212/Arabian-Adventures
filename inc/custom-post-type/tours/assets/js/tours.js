"use strict";
jQuery(document).ready(function ($) {
    var frame;

    // Upload / add images
    $('#tours-images-upload').on('click', function (e) {
        e.preventDefault();

        if (frame) {
            frame.open();
            return;
        }

        frame = wp.media({
            title: 'Select Images',
            button: { text: 'Add Images' },
            multiple: true
        });

        frame.on('select', function () {
            var oldVal = $('#tours-images-input').val();
            var oldIds = oldVal ? oldVal.split(',') : [];
            var html = $('#tours-images-preview').html();

            frame.state().get('selection').each(function (att) {
                if (oldIds.indexOf(att.id.toString()) === -1) {
                    oldIds.push(att.id);
                    html +=
                        '<div class="tours-image-item" data-id="' + att.id + '" style="display:inline-block;position:relative;margin:3px;">' +
                        '<img src="' + att.attributes.sizes.thumbnail.url + '" style="height:auto;">' +
                        '<span class="tours-remove-image" style="position:absolute;top:0;right:0;background:#000;color:#fff;padding:2px 5px;cursor:pointer;">✕</span>' +
                        '</div>';
                }
            });

            $('#tours-images-input').val(oldIds.join(','));
            $('#tours-images-preview').html(html);
        });

        frame.open();
    });

    // Remove image
    $('#tours-images-preview').on('click', '.tours-remove-image', function () {
        var parent = $(this).closest('.tours-image-item');
        var removeId = parent.data('id').toString();
        parent.remove();

        var ids = [];
        $('#tours-images-preview .tours-image-item').each(function () {
            ids.push($(this).data('id'));
        });

        $('#tours-images-input').val(ids.join(','));
    });
});
