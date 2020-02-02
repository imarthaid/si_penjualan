$(document).ready(function () {
    $('#myTable').DataTable({
        info: false
    });

    $('.btn-edit').on('click', function () {
        id = $(this).data('id')

        $.ajax({
            url: base_url + 'kategori/getEdit',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                $('#id').val(data.id);
                $('#namaEdit').val(data.nama);
            }
        })
        console.log(id);
    })
})