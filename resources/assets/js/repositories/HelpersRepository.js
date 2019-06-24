export default {
    /**
     *
     */
    scrollbars: function () {
        var containers = $('.scrollbar-container');
        $(containers).each(function () {
            var container = $(this);
            var height = container.css('height');
            var maxHeight = container.css('max-height');
            if (!height && !maxHeight) {
                container.height('100%');
            }
            if (container.css('position') == 'static') {
                container.css({position: 'relative'});
            }
            container.mCustomScrollbar({
                theme: 'minimal-dark'
            });
        });
    },

    setHeights: function () {
        var height = $('.text').height();
        var bodyHeight = $('body').height();
        $('.text-container').css({ 'max-height': bodyHeight - 70 });
        console.log(height);
    }
}