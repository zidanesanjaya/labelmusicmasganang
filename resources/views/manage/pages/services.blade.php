<div class="tab-pane bg-white p-4" id="services">
    <div class="row">
        <div class="col text-end">
            <button class="btn btn-success text-white" onclick="post_services()">Simpan</button>
        </div>
    </div>
    <div class="row p-3">
        <div class="col-lg-12">
            <h4 class="mb-3">Artist Management</h4>
            <textarea id="editor1"></textarea>
        </div>

        <div class="col-lg-12 mt-4">
            <h4 class="mb-3">Music Publishing</h4>
            <textarea id="editor2"></textarea>
        </div>

        <div class="col-lg-12 mt-4">
            <h4 class="mb-3">Content Provider</h4>
            <textarea id="editor3"></textarea>
        </div>

        <div class="col-lg-12 mt-4">
            <h4 class="mb-3">Digital Distribution</h4>
            <textarea id="editor4"></textarea>
        </div>

        <div class="col-lg-12 mt-4">
            <h4 class="mb-3">Brand Extensions</h4>
            <textarea id="editor5"></textarea>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
     $(document).ready(function () {
        getServices();
    });
     CKEDITOR.replace('editor1', {
    });
     CKEDITOR.replace('editor2', {
    });
     CKEDITOR.replace('editor3', {
    });
     CKEDITOR.replace('editor4', {
    });
     CKEDITOR.replace('editor5', {
    });

    function post_services(){

        var artist_management = CKEDITOR.instances['editor1'].getData();
        var music_publishing = CKEDITOR.instances['editor2'].getData();
        var content_provider = CKEDITOR.instances['editor3'].getData();
        var digital_distribution = CKEDITOR.instances['editor4'].getData();
        var brand_extension = CKEDITOR.instances['editor5'].getData();

        var postData = {
            artist_management: artist_management,
            music_publishing: music_publishing,
            content_provider: content_provider,
            digital_distribution: digital_distribution,
            brand_extension: brand_extension
        };

        // Mengirim data POST menggunakan AJAX
        $.ajax({
            url: '/post-services',
            type: 'POST',
            dataType: 'json',
            data: postData,
            success: function(response) {
                console.log('Data posted successfully.');
                showToast('Data Berhasil Di Update.', 'success');
                getAbout();
                // Lakukan tindakan tambahan jika diperlukan setelah berhasil
            },
            error: function() {
                console.error('Failed to post data.');
                showToast('Data Gagal Di Update.', 'error');
            }
        });
    }

    function getServices(){
        $.ajax({
            url: '/get-services',
            type: 'GET',
            dataType: 'json',
            data: postData,
            success: function(response) {
                console.log(response.data.about);
                var artist_management = CKEDITOR.instances['editor1'].setData(response.data[0].text);
                var music_publishing = CKEDITOR.instances['editor2'].setData(response.data[1].text);
                var content_provider = CKEDITOR.instances['editor3'].setData(response.data[2].text);
                var digital_distribution = CKEDITOR.instances['editor4'].setData(response.data[3].text);
                var brand_extension = CKEDITOR.instances['editor5'].setData(response.data[4].text);
            },
            error: function() {
            }
        });
    }
</script>