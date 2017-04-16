$(function () {
    $(document).on('toggle.uk.accordion', '.uk-accordion', function (event, active, toggle, content) {
        if (active) {
            toggle.find('i').removeClass('uk-icon-angle-down').addClass('uk-icon-angle-up');
        } else {
            toggle.find('i').removeClass('uk-icon-angle-up').addClass('uk-icon-angle-down');
        }
    })
});