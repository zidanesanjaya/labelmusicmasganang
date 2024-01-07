<div class="tab-pane bg-white rounded" id="about">
    <div class="row ps-3 pe-3 pt-3">
        <div class="col">
            <h4>About Menu</h4>
        </div>
        <div class="col text-end">
            <button class="btn btn-success text-white" onclick="post_about()">Save</button>
        </div>
    </div>

    <hr>
    <div class="row ps-3 pe-3">
        <div class="col-lg-12">
            <h4 class="mb-3">About US</h4>
            <textarea id="editor-about"></textarea>
        </div>
    </div>
    <div class="row p-3">
        <div class="col-lg-6">
            <h4 class="mb-3">Visi</h4>
            <textarea id="editor-visi"></textarea>
        </div>
        <div class="col-lg-6">
            <h4 class="mb-3">Misi</h4>
            <textarea id="editor-misi"></textarea>    
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
     $(document).ready(function () {
        getAbout();
    });
    function post_about(){

        var about = CKEDITOR.instances['editor-about'].getData();
        var visi = CKEDITOR.instances['editor-visi'].getData();
        var misi = CKEDITOR.instances['editor-misi'].getData();

        var postData = {
            about: about,
            visi: visi,
            misi: misi
        };

        // Mengirim data POST menggunakan AJAX
        $.ajax({
            url: '/post-about',
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

    function getAbout(){
        $.ajax({
            url: '/get-about',
            type: 'GET',
            dataType: 'json',
            data: postData,
            success: function(response) {
                console.log(response.data.about);
                var about = CKEDITOR.instances['editor-about'].setData(response.data.about.text);
                var visi = CKEDITOR.instances['editor-visi'].setData(response.data.visi.text);
                var misi = CKEDITOR.instances['editor-misi'].setData(response.data.misi.text);
            },
            error: function() {
            }
        });
    }
</script>