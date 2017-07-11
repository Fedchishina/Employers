$( function() {
    'use strict';

    $( "#accordion" ).accordion();

    $('.modal-edit-position').on('click', function () {
        var $this = $(this);
        var $modalEdit = $('#modal-container-edit-position');
        $modalEdit.find( "input[name='name']" ).val( $this.data('name') );
        $modalEdit.find( "input[name='id']" ).val( $this.data('id') );
    });

    $('.modal-del-position').on('click', function () {
        var $this = $(this);
        var $modalEdit = $('#modal-container-del-position');
        $modalEdit.find( "input[name='id']" ).val( $this.data('id') );
    });

    $('.navbar-nav li').on('click', function () {
        var $this = $(this);
        var $linkHref = $this.find('a');
        var $navbar = $this.closest('navbar-nav');
        $navbar.find('li').removeClass('active');
        $this.addClass('active');
    });
} );
