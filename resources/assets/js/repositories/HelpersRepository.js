var HelpersRepository = {
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
};