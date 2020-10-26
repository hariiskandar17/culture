$('body').on('click', '.modal-show', function (event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

    $('#modal-title').text(title);
    $('#modal-btn-save').removeClass('hide')
    .text(me.hasClass('edit') ? 'Ubah' : 'Tambah');

    $.ajax({
        url: url,
        dataType: 'html',
        success: function (response) {
            $('#modal-body').html(response);
        }
    });

    $('#modal').modal('show');
});

$('#modal-btn-save').click(function (event) {
    event.preventDefault();

    var form = $('#modal-body form'),
        url = form.attr('action'),
        method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';

    form.find('.help-block').remove();
    form.find('.form-group').removeClass('has-error');

    $.ajax({
        url : url,
        method: method,
        data : form.serialize(),
        success: function (response) {
            form.trigger('reset');
            $('#modal').modal('hide');
            $('#datatable').DataTable().ajax.reload();

            swal({
                type  : 'success',
                title : 'Berhasil!',
                text  : 'Data Telah Tersimpan!'
            });
        },
        error : function (xhr) {
            var res = xhr.responseJSON;
            if ($.isEmptyObject(res) == false) {
                $.each(res.errors, function (key, value) {
                    $('#' + key)
                        .closest('.form-group')
                        .addClass('has-error')
                        .append('<span class="help-block"><strong>' + value + '</strong></span>');
                });
            }
        }
    })
});
// $('#modal-btn-simpan').click(function (event) {
//   event.preventDefault();
//
//   if($('#action').val() == 'Add')
//
//   var request = new FormData(this),
//       form = $('#modal-body form'),
//       url = form.attr('action'),
//       method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';
//
//       // form.find('.help-block').remove();
//       // form.find('.form-group').removeClass('has-error');
//
//   $.ajax({
//       url: "{{ route('lokasi.store') }}",
//       method: "POST",
//       data: new FormData(this),
//       contentType: false,
//       cache: false,
//       processData: false,
//         success: function (response) {
//             form.trigger('reset');
//             $('#modal').modal('hide');
//             $('#datatable').DataTable().ajax.reload();
//
//             swal({
//                 type  : 'success',
//                 title : 'Berhasil!',
//                 text  : 'Data Telah Tersimpan!'
//             });
//         },
//         error : function (xhr) {
//             var res = xhr.responseJSON;
//             if ($.isEmptyObject(res) == false) {
//                 $.each(res.errors, function (key, value) {
//                     $('#' + key)
//                         .closest('.form-group')
//                         .addClass('has-error')
//                         .append('<span class="help-block"><strong>' + value + '</strong></span>');
//                 });
//             }
//         }
//     })
// });

$('body').on('click', '.btn-delete', function (event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title'),
        csrf_token = $('meta[name="csrf-token"]').attr('content');

    swal({
        title: 'Yakin ingin menghapus ' + title + ' ?',
        text: 'Data akan dihapus permanen!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    '_method': 'DELETE',
                    '_token': csrf_token
                },
                success: function (response) {
                    $('#datatable').DataTable().ajax.reload();
                    swal({
                        type: 'success',
                        title: 'Berhasil!',
                        text: 'Data dihapus!'
                    });
                },
                error: function (xhr) {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Ada yang salah!'
                    });
                }
            });
        }
    });
});

$('body').on('click', '.btn-show', function (event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

    $('#modal-title').text(title);
    $('#modal-btn-save').addClass('hide');

    $.ajax({
        url: url,
        dataType: 'html',
        success: function (response) {
            $('#modal-body').html(response);
        }
    });

    $('#modal').modal('show');
});
