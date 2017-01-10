// Avoid `console` errors in browsers that lack a console.
;(function($) {
    $(document).ready(function() {

        // Align .nav to left hand side of container
        var windowWidth = $(window).width();
        var containerWidth = $('header > .container').width();
        var leftMarginWidth = (windowWidth - containerWidth) / 2;
        $('header .nav.navbar-nav').css('margin-left',leftMarginWidth);

        function masonry() {
            $('.view-display-id-signature_subprogrammes_project_block').masonry({
                itemSelector: '.views-row'
            });

            $('.field-name-field-related-project').masonry({
                itemSelector: '.masonry-item'
            });

            $('.field-name-field-related-project').masonry({
                itemSelector: '.masonry-item'
            });

            $('.view-id-news.view-display-id-block').masonry({
                itemSelector: '.masonry-item'
            });
        }

        setTimeout(masonry, 3000);

        /* Custom JS for NAP project page */
        var pageHeight = $('#main .page-width').height();
        $('#sidebar-first').height(pageHeight);

        if($.isFunction($.fn.tabs)) {
            console.log('Tested');
            /* Init jquery tabs */
            $('#contentTabsEnglish').tabs();
            $('#contentTabsFrench').tabs();
        }

        $('.switch-language').click(function(event) {
            var data = $(this).data();
            $('.switch-language').removeClass('active');
            $(this).addClass('active');
            switch (data.language) {
                case 'english':
                    $('.contentTabs').removeClass('show');
                    $('#contentTabsEnglish').addClass('show');
                    break;
                case 'french':
                    $('.contentTabs').removeClass('show');
                    $('#contentTabsFrench').addClass('show');
            }
        });



    });
})(jQuery);

// Place any jQuery/helper plugins in here.

