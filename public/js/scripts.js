$( function() {
    'use strict';
    var isSending = false;

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
        event.preventDefault();

        if(isSending) return;
        isSending = true;

        var $this = $(this);
        $('.navbar-nav li').removeClass('active');
        $this.addClass('active');
        var $linkHref = $this.find('a').attr('href');

        $.ajax({
            url: $linkHref,
            dataType: 'html',
        }).done(function (data) {
            $('.main-content').html(data);
            isSending = false;
        }).fail(function (err) {
            if (err.status == 401) {
                window.location.href = '/login';
            }
            isSending = false;
        });
    });

    $('.btn-sort').on('click', function () {
        $('.btn-sort').removeClass('btn-asc-selected btn-desc-selected');
        var $this = $(this);
        $this.addClass($this.hasClass('btn-asc') ? 'btn-asc-selected':'btn-desc-selected');
        $.ajax({
            url: '/employers/table',
            data: {
                'orderVal' : $this.closest('th').data('order'),
                'orderType': $this.hasClass('btn-asc') ? 'asc':'desc'
            },
            dataType: 'html',
        }).done(function (data) {
            $('.table-employers tbody').html(data);
            isSending = false;
        }).fail(function (err) {
            alert(err);
            isSending = false;
        });
    });

} );
