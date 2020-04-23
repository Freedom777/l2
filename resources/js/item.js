/*
$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/item/",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'type', name: 'type'},
            {data: 'price', name: 'price'},
            /!*{data: 'action', name: 'action', orderable: false, searchable: false},*!/
        ]
    });
});*/
