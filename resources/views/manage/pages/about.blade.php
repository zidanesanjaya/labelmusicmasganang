
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
    <div class="row ps-3 pe-3 mt-3">
        <div class="col-lg-12">
            <h4 class="mb-3">About Selanjutnya</h4>
            <textarea id="editor-about-next"></textarea>
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

    <div class="row p-3">
        <div class="col-4">
            <label for="">Discover</label>
            <input type="file" class="form-control mb-3" name="discover_foto" id="discover_foto">
            <div class="text-center">
                <img id="preview_discover" src="#" alt="Preview" style="max-width: 300px;" class="mx-auto d-block">
            </div>
        </div>
        <div class="col-4">
            <label for="">Gambar Atas</label>
            <input type="file" class="form-control mb-3" name="var2" id="var2">
            <div class="text-center">
                <img id="preview_var2" src="#" alt="Preview" style="max-width: 300px;" class="mx-auto d-block">
            </div>
        </div>
        <div class="col-4">
            <label for="">Gambar Bawah</label>
            <input type="file" class="form-control mb-3" name="var3" id="var3">
            <div class="text-center">
                <img id="preview_var3" src="#" alt="Preview" style="max-width: 300px;" class="mx-auto d-block">
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
     $(document).ready(function () {
        getAbout();
    });
    function post_about() {
    var about = CKEDITOR.instances['editor-about'].getData();
    var visi = CKEDITOR.instances['editor-visi'].getData();
    var misi = CKEDITOR.instances['editor-misi'].getData();
    var about_next = CKEDITOR.instances['editor-about-next'].getData();

    var discover_foto = $('#discover_foto')[0].files[0];
    var var2 = $('#var2')[0].files[0];
    var var3 = $('#var3')[0].files[0];

    var form_about = new FormData();

    form_about.append('about', about);
    form_about.append('visi', visi);
    form_about.append('misi', misi);
    form_about.append('about_next', about_next);

    form_about.append('var2', var2);
    form_about.append('var3', var3);
    form_about.append('var4', discover_foto);

    // Mengirim data POST menggunakan AJAX
    $.ajax({
        url: '/post-about',
        type: 'POST',
        dataType: 'json',
        data: form_about,
        processData: false,  // Tidak memproses data secara otomatis
        contentType: false,  // Tidak mengatur tipe konten secara otomatis
        success: function (response) {
            console.log('Data posted successfully.');
            showToast('Data Berhasil Di Update.', 'success');
            getAbout();
            // Lakukan tindakan tambahan jika diperlukan setelah berhasil
        },
        error: function () {
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
                var misi = CKEDITOR.instances['editor-about-next'].setData(response.data.about.var5);
                var discover = document.getElementById('preview_discover').src = '/storage/lainya/'+ response.data.about.var4;
                var var2 = document.getElementById('preview_var2').src = '/storage/lainya/'+ response.data.about.var2;
                var var3 = document.getElementById('preview_var3').src = '/storage/lainya/'+ response.data.about.var3;
            },
            error: function() {
            }
        });
    }

    
    document.getElementById('discover_foto').addEventListener('change', function (e) {
        var inputFoto = e.target;
        var previewFoto = document.getElementById('preview_discover');

        if (inputFoto.files && inputFoto.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                previewFoto.src = e.target.result;
                previewFoto.style.display = 'block';
            };

            reader.readAsDataURL(inputFoto.files[0]);
        }
    });
    document.getElementById('var2').addEventListener('change', function (e) {
        var inputFoto = e.target;
        var previewFoto = document.getElementById('preview_var2');

        if (inputFoto.files && inputFoto.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                previewFoto.src = e.target.result;
                previewFoto.style.display = 'block';
            };

            reader.readAsDataURL(inputFoto.files[0]);
        }
    });
    document.getElementById('var3').addEventListener('change', function (e) {
        var inputFoto = e.target;
        var previewFoto = document.getElementById('preview_var3');

        if (inputFoto.files && inputFoto.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                previewFoto.src = e.target.result;
                previewFoto.style.display = 'block';
            };

            reader.readAsDataURL(inputFoto.files[0]);
        }
    });
</script>