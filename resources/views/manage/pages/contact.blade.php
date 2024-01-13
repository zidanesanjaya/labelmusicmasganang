<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="tab-pane bg-white rounded" style="overflow-x: auto;" id="contact-us">
    <div class="row p-3">
        <div class="col">
            <h4>Contact Information</h4>
        </div>
        <div class="col text-end">
            <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Information Social Media</button>
            <button class="btn btn-primary text-white" onclick="postData();">Save</button>
        </div>
    </div>
<hr>
    <table class="table table-responsive" style="width:1150px">
        <thead>
            <tr>
                <th scope="col" style="width:200px;">title</th>
                <th scope="col" style="width:300px;">Input</th>
                <th scope="col" style="width:500px;">Icon</th>
                <th scope="col" style="width:200px;">Is Show</th>
            </tr>
        </thead>
        <tbody id="table-body">
            
        </tbody>
    </table>
</div>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Information Social Media</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
            <label for="">Informasi Social Media / Contact</label>
            <input type="text" class="form-control mt-2" placeholder="Contoh : Instagram" id="title" name="title">
        </div>

        <div class="modal-footer">
            <button type="button" onclick="postTitle();" class="btn btn-success text-white" >Save</button>
        </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Ketika nilai pada select berubah
        $("#iconSelect").on("change", function () {
            // Perbarui nilai pada elemen <i> sesuai dengan nilai yang dipilih
            var selectedIconClass = $(this).val();
            $("#selectedIcon").attr("class", selectedIconClass);
        });
    });
</script>

<script>
    $(document).ready(function() {
        fetchDataAndRenderTable();
    });

    function fetchDataAndRenderTable() {
            var jsonUrl = '/get-social-media';
            $.ajax({
                url: jsonUrl,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#table-body').empty();

                    if (response.data && Array.isArray(response.data)) {
                        response.data.forEach(function(item) {
                            renderTableRow(item);
                        });
                    } else {
                        console.error('Failed to find array data property in the response.');
                    }
                },
                error: function() {
                    console.error('Failed to fetch JSON data.');
                }
            });
        }

        function renderTableRow(data) {
            var row = '<tr>';
            row += '<td><input type="hidden" class="form-control" value="'+(data.id || '')+'" name="id[]"/>' + (data.title || '') + '</td>';
            row += '<td><input type="text" class="form-control" value="'+(data.text || '')+'" name="text[]" onchange="updateIcon(this)"/></td>';

            row +=  '<td>' +
                    '<div class="row">' +
                    '<div class="col-10">' +
                    '<select id="iconSelect" name="icon[]" class="form-control" onchange="updateIcon(this)">';

            var options = [
                { value: 'fa fa-twitter', label: 'Twitter' },
                { value: 'fa fa-instagram', label: 'Instagram' },
                { value: 'fa fa-linkedin', label: 'LinkedIn' },
                { value: 'fa fa-pinterest', label: 'Pinterest' },
                { value: 'fa fa-snapchat', label: 'Snapchat' },
                { value: 'fa fa-youtube', label: 'YouTube' },
                { value: 'fa fa-tiktok', label: 'TikTok' },
                { value: 'fa fa-whatsapp', label: 'WhatsApp' },
                { value: 'fa fa-telegram', label: 'Telegram' },
                { value: 'fa fa-vimeo', label: 'Vimeo' },
                { value: 'fa fa-github', label: 'GitHub' },
                { value: 'fa fa-gitlab', label: 'GitLab' },
                { value: 'fa fa-bitbucket', label: 'Bitbucket' },
                { value: 'fa fa-discord', label: 'Discord' },
                { value: 'fa fa-reddit', label: 'Reddit' },
                { value: 'fa fa-facebook', label: 'facebook' },
            ];



            options.forEach(function(option) {
                var selected = data.var1 === option.value ? 'selected' : '';
                row += '<option value="' + option.value + '" ' + selected + '>' + option.label + '</option>';
            });

            row +=  '</select>' +
                    '</div>' +
                    '<div class="col-2 text-center d-flex align-items-center">' +
                    '<i id="selectedIcon" class="' + data.var1 + ' fa-2x"></i>' +
                    '</div>' +
                    '</div>' +
                    '</td>';
            row += '<td class="d-flex justify-content-center">' +
                        '<div class="form-check form-switch" style="font-size: 1.5rem;">' +
                            '<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="is_show[]" ' + (data.is_show ? 'checked' : '') + ' onchange="updateIsShow(this)">' +
                            '<label class="form-check-label" for="flexSwitchCheckDefault"></label>' +
                        '</div>' +
                    '</td>';
            row += '</tr>';

            $('#table-body').append(row);
        }

    function postData() {
        var dataId = $('[name="id[]"]').map(function() {return $(this).val();}).get();
        var dataText = $('[name="text[]"]').map(function() {return $(this).val();}).get();
        var dataIcon = $('[name="icon[]"]').map(function() {return $(this).val();}).get();
        var dataIsShow = $('[name="is_show[]"]').map(function() {
            return $(this).is(':checked') ? 1 : 0;
        }).get();

        var postData = {
            id: dataId,
            text: dataText,
            icon: dataIcon,
            is_show: dataIsShow
        };

        // Mengirim data POST menggunakan AJAX
        $.ajax({
            url: '/update-social-media',
            type: 'POST',
            dataType: 'json',
            data: postData,
            success: function(response) {
                console.log('Data posted successfully.');
                showToast('Data Berhasil Di Update.', 'success');
                // Lakukan tindakan tambahan jika diperlukan setelah berhasil
            },
            error: function() {
                console.error('Failed to post data.');
                showToast('Data Gagal Di Update.', 'error');
            }
        });

        fetchDataAndRenderTable();
    }

    function postTitle(){
        var title = $('#title').val();

        var postData = {
            title: title

        };

        $.ajax({
            url: '/post-social-media',
            type: 'POST',
            dataType: 'json',
            data: postData,
            success: function(response) {
                console.log('Data posted successfully.');
                showToast('Data Berhasil Di Save.', 'success');
            },
            error: function() {
                console.error('Failed to post data.');
                showToast('Data Gagal Di Simpan.', 'error');
            }
        });

        fetchDataAndRenderTable();
    }

    function showToast(message, type) {
        Toastify({
            text: message,
            duration: 3000, // Durasi notifikasi dalam milidetik (opsional)
            gravity: 'bottom', // Posisi notifikasi ('top', 'bottom', 'center')
            position: 'center', // Posisi notifikasi ('left', 'center', 'right')
            backgroundColor: type === 'success' ? '#4CAF50' : '#F44336', // Warna latar belakang notifikasi
        }).showToast();
    }

</script>
