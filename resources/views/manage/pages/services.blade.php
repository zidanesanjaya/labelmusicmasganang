<div class="tab-pane bg-white p-4" id="services">
    <div class="row">
        <div class="col text-end">
            <button class="btn btn-success text-white" onclick="post_services()">Simpan</button>
        </div>
    </div>
    <div class="row p-3">
    <!-- Artist Management -->
    <div class="col-lg-12">
        <h4 class="mb-3">Artist Management</h4>
            <div class="row">
                <div class="col-8">
                    <textarea id="editor1"></textarea>
                </div>
                <div class="col-4 text-center">
                    <input type="file" class="form-control" name="image_editor1" id="image_editor1" onchange="previewImage('image_editor1', 'preview1')">
                    <img src="" alt="" id="img_preview1" style="max-width:200px;">
                </div>
            </div>
        </div>

        <!-- Music Publishing -->
        <div class="col-lg-12 mt-4">
            <h4 class="mb-3">Music Publishing</h4>
            <div class="row">
                <div class="col-8">
                    <textarea id="editor2"></textarea>
                </div>
                <div class="col-4 text-center">
                    <input type="file" class="form-control" name="image_editor2" id="image_editor2" onchange="previewImage('image_editor2', 'preview2')">
                    <img src="" alt="" id="img_preview2" style="max-width:200px;">
                </div>
            </div>        
        </div>

        <!-- Content Provider -->
        <div class="col-lg-12 mt-4">
            <h4 class="mb-3">Content Provider</h4>
            <div class="row">
                <div class="col-8">
                    <textarea id="editor3"></textarea>
                </div>
                <div class="col-4 text-center">
                    <input type="file" class="form-control" name="image_editor3" id="image_editor3" onchange="previewImage('image_editor3', 'preview3')">
                    <img src="" alt="" id="img_preview3" style="max-width:200px;">
                </div>
            </div>        
        </div>

        <!-- Digital Distribution -->
        <div class="col-lg-12 mt-4">
            <h4 class="mb-3">Digital Distribution</h4>
            <div class="row">
                <div class="col-8">
                    <textarea id="editor4"></textarea>
                </div>
                <div class="col-4 text-center">
                    <input type="file" class="form-control" name="image_editor4" id="image_editor4" onchange="previewImage('image_editor4', 'preview4')">
                    <img src="" alt="" id="img_preview4" style="max-width:200px;">
                </div>
            </div>        
        </div>

        <!-- Brand Extensions -->
        <div class="col-lg-12 mt-4">
            <h4 class="mb-3">Brand Extensions</h4>
            <div class="row">
                <div class="col-8">
                    <textarea id="editor5"></textarea>
                </div>
                <div class="col-4 text-center">
                    <input type="file" class="form-control" name="image_editor5" id="image_editor5" onchange="previewImage('image_editor5', 'preview5')">
                    <img src="" alt="" id="img_preview5" style="max-width:200px;">
                </div>
            </div>        
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

    function post_services() {
        var formData = new FormData();

        formData.append('artist_management', CKEDITOR.instances['editor1'].getData());
        formData.append('music_publishing', CKEDITOR.instances['editor2'].getData());
        formData.append('content_provider', CKEDITOR.instances['editor3'].getData());
        formData.append('digital_distribution', CKEDITOR.instances['editor4'].getData());
        formData.append('brand_extension', CKEDITOR.instances['editor5'].getData());

        // Append files
        formData.append('file1', document.getElementById('image_editor1').files[0]);
        formData.append('file2', document.getElementById('image_editor2').files[0]);
        formData.append('file3', document.getElementById('image_editor3').files[0]);
        formData.append('file4', document.getElementById('image_editor4').files[0]);
        formData.append('file5', document.getElementById('image_editor5').files[0]);

        // Mengirim data POST menggunakan AJAX
        $.ajax({
            url: '/post-services',
            type: 'POST',
            dataType: 'json',
            data: formData,
            processData: false,  // Important! tell jQuery not to process the data
            contentType: false,  // Important! tell jQuery not to set contentType
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
                document.getElementById('img_preview1').src = '/storage/services/'+response.data[0].var1;
                document.getElementById('img_preview2').src = '/storage/services/'+response.data[1].var1;
                document.getElementById('img_preview3').src = '/storage/services/'+response.data[2].var1;
                document.getElementById('img_preview4').src = '/storage/services/'+response.data[3].var1;
                document.getElementById('img_preview5').src = '/storage/services/'+response.data[4].var1;
            },
            error: function() {
            }
        });
    }
</script>