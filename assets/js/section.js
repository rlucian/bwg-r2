$(window).on('load', function(){
    $('.submenu .navbar-nav, .cardTitle').on('click', '.btn', function () {

        var parent = $(this).closest('.filters') || $(this).closest('.btn-group');
        parent.find('.btn').removeClass('active');
        $(this).addClass('active');
    });
    $('.products').on('click', '.fa-2x', function(e){
        e.stopPropagation();
        $(this).closest('td').toggleClass('active');
    }).on('click', '.input-group-addon', function(e){
        var field = $(this).closest('.input-group').find('.form-control'),
            val = field.val() ? field.val() * 1 : 0;
        if (val < 1 ) {
            field.val(1);
        } else {
            if ($(this).is(':last-child') && val > 1) {
                field.val(val - 1);
            }
            if ($(this).is(':first-child')) {
                field.val(val + 1);
            }
        }

    })

});
