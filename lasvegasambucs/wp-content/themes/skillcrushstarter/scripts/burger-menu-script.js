jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.top-nav ul').slideToggle(500);

        e.preventDefault();
    });

});
