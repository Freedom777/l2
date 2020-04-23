const maxPhonesCnt = 20;
const phoneMaskOptions = {
    mask: '+99 (999) 999 9999',
    showMaskOnHover: false,
    showMaskOnFocus: false,
    placeholder: ''
};

$(function(){
    $('#phones-list input').each(function () {
        $(this).inputmask(phoneMaskOptions);
    });

    $('#phones-list').on('click', '.btn-remove-phone', function(){
        $(this).closest('.phone-div').remove();
        $('#add-phone').show();
    });

    $('.btn-add-phone').click(function(){
        let index = $('.phone-div:last').data('index');
        if (!index) {
            index = 1;
        }
        ++index;

        $('.phone-list').append('' +
            '<div data-index="' + index + '" class="input-group phone-div">' +
            '<input type="text" name="phones[' + index + ']" class="form-control phone-input" placeholder="+99 (999) 999 9999" />' +
            '<span class="input-group-btn">' +
            '<button class="btn btn-danger btn-remove-phone" type="button"><span class="glyphicon glyphicon-remove"></span></button>' +
            '</span>' +
            '</div>'
        );
        $('#phones-list input[name="phones[' + index + ']"]').inputmask(phoneMaskOptions);


        if ($('.phone-div').length >= maxPhonesCnt) {
            $('#add-phone').hide();
        }
    });

    $('#confirm-delete').on('show.bs.modal', function(e) {
        const $deleteButton = $(e.relatedTarget);
        $(this).find('.btn-ok').click(function () {
            $deleteButton.closest('form').submit();
        })
    });
});
