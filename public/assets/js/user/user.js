$(document).ready(function(){
    // Datatable
    var table = $('.user').DataTable({
        processing:true,
        serverSide:true,
        ajax: '/user/fetch',
        autoWidth: false,
        columns:[
            {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false },
            {data:'email'},
            {data: 'action', name: 'action', className: 'text-center',orderable: false, searchable: false, width: 220}
        ],
        order: [[ 0, "desc" ]],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            searchPlaceholder: 'Type to filter...',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
        }
    });

    $('#modal-title').html('Register a user');
    $('#register_user').html('Register');
    
    var swalInit = swal.mixin({
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-primary',
        cancelButtonClass: 'btn btn-light'
    });

    var data = $('#form-user')[0];
    $('#register_user').on('click',function(e){
        e.preventDefault();
        var form  = new FormData(data);
        console.log(form);
        $.ajax({
            url: '/user/store',
            method:'POST',
            data: form,
            processData: false,
            contentType: false,

            success: function(response){
                if(response.status == 400)
                {
                    // $('#error_s').html(response.errors.keberangkatan);
                }else{
                    swalInit({
                        title: 'Behrasil!',
                        text: 'Email telah Di Daftarkan',
                        type: 'success',
                        showCloseButton: true
                        });
                        $('#modal_user').modal('hide');
                        $("#form-user")[0].reset();
                        table.draw();
                }
            }
        })

    })

    //edit button

    // $(document).on('click','.edit', function(e){
    //     e.preventDefault();
    //     var id = $(this).data('id');
    //     $('#modal_edit_order').modal('show');
    //     $('#modal_title_edit_order').html('Edit Order');
    //     $('.update').html('Edit');
    //     $.ajax({
    //         type:"GET",
    //         url:"/order/edit/" + id,
    //         success: function(response){
    //             console.log(response);
    //             if(response.status == 404){
    //                 console.log("Data not found");
    //             }else{
    //                 $('#edit_order_id').val(response.order.id);
    //                 let keberangkatan = moment(response.order.start_date).format('DD-MM-YYYY');
    //                 let kembali = moment(response.order.end_date).format('DD-MM-YYYY');
    //                 $('#edit_start_date').val(keberangkatan);
    //                 $('#edit_end_date').val(kembali);
    //                 $('#edit_passenger').val(response.order.passenger);
    //                 $('#edit_location').val(response.order.location);
    //                 $('#edit_io_number').val(response.order.io_number);
    //                 $('#edit_type_destination').val(response.order.type_destination).change();
    //                 $('#edit_activity').val(response.order.activity);
    //             }
    //         }
    //     })
    // })

    // $(document).on('click', '.update', function(e){
    //     e.preventDefault();
    //     var id = $('#edit_order_id').val();
    //     var data = {
    //         'edit_start_date': $('#edit_start_date').val(),
    //         'edit_end_date': $('#edit_end_date').val(),
    //         'edit_io_number': $('#edit_io_number').val(),
    //         'edit_type_destination': $('#edit_type_destination').val(),
    //         'edit_activity': $('#edit_activity').val(),
    //         'edit_passenger': $('#edit_passenger').val(),
    //         'edit_location': $('#edit_location').val(),
    //         'edit_description': $('#edit_description').val(),
    //     }

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     $.ajax({
    //         type:"PUT",
    //         url:"/order/update/"+ id,
    //         data: data,
    //         dataType:"json",
    //         success: function(response){
    //             console.log(response);
    //             if(response.status == 400){
    //                 // $('#error_io').html(response.errors.edit_io);
                    
    //                 swalInit({
    //                     title: 'Gagal',
    //                     text: 'Status 400',
    //                     type: 'error',
    //                     showCloseButton: true
    //                     });
    //             }else if(response.status == 404){
    //                 swalInit({
    //                     title: 'Gagal',
    //                     text: 'Status 404',
    //                     type: 'danger',
    //                     showCloseButton: true
    //                     });
    //             }else{
    //                 table.draw();
    //                 swalInit({
    //                     title: 'Keren!',
    //                     text: 'Data Berhasil diubah',
    //                     type: 'success',
    //                     showCloseButton: true
    //                     });
    //                     $('#modal_edit_order').modal('hide');
                       
    //             }
            
    //         }
    //     })

    // });

});

