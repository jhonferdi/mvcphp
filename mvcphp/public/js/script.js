$(function() {
    $('.ButtonInsertData').on('click', function() {

        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nim').val('');
        $('#kelas').val('');
    })

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/mvcphp/public/mahasiswa/update')
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/mvcphp/public/mahasiswa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#kelas').val(data.kelas);
                $('#id').val(data.id);
            }
        })
    })

});