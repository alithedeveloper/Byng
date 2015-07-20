(function ($) {

    $('#filterOptions li a').click(function () {
        // fetch the class of the clicked item
        var $filterClass    = $(this).attr('class'),
            // cache the containerInner to use later
            $containerInner = $('.container__inner');

        // reset the active class on all the buttons
        $('#filterOptions li').removeClass('active');
        // update the active state on our clicked button
        $(this).parent().addClass('active');

        if ($filterClass == 'all') {
            // show all our items
            $containerInner.children('.article__row').show();
        }
        else {
            // hide all elements that don't share filteredClass
            $containerInner.children('div:not(.' + $filterClass + ')').hide();
            // show all elements that do share filteredClass
            $containerInner.children('div.' + $filterClass).show();
        }
        return false;
    });




})(jQuery);