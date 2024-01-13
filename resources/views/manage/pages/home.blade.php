<div class="tab-pane active bg-white rounded" id="home">
    <div class="row ps-3 pe-3 pt-3">
        <div class="col">
            <h4>Home Menu</h4>
        </div>
        <div class="col text-end">
            <button id="submitBtn" onclick="postHome()" class="btn btn-primary text-white">Save</button>
        </div>
    </div>
    <hr>
    <div class="row p-3">
        <div class="col-lg-12 mt-4 mb-4">
            <h4 class="mb-3">Jumbotron <span class="text-danger" style="font-size:12px">(<i>Upload Gambar Jumbotron 1920 x 1080</i>)</span></h4>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="text-center">Gambar 1</p>
                            <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" id="jumbotron1" class="d-block w-100" alt="...">
                            <input type="file" class="choose-image-btn form-control" id="gambar1"></input>
                        </div>
                        <div class="carousel-item">
                        <p class="text-center">Gambar 2</p>
                            <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" id="jumbotron2" class="d-block w-100" alt="...">
                            <input type="file" class="choose-image-btn form-control" id="gambar2"></input>
                        </div>
                        <div class="carousel-item">
                        <p class="text-center">Gambar 3</p>
                            <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" id="jumbotron3" class="d-block w-100" alt="...">
                            <input type="file" class="choose-image-btn form-control" id="gambar3"></input>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <!-- Tombol tambahan untuk memilih dan mengunggah gambar baru -->
                    <input type="file" class="upload-image-input" style="display:none;">
                </div>

            </div>
        </div>
        <hr>
        <div class="col-12 mt-4 p-3">
            <h4 class="mb-3">Artist</h4>
            <div class="row">
               <!-- Card 1 -->
               <div class="col-md-4">
                    <div class="card">
                        <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" id="artist_home1" class="w-100 h-100 shadow-1-strong rounded"  style="max-height:300px;max-width:300px;" alt="Image 1">
                        <div class="card-body">
                            <select name="" class="form-control" id="select_gambar1">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>


                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" id="artist_home2" class="w-100 h-100 shadow-1-strong rounded"  style="max-height:300px;max-width:300px;" alt="Image 1">
                        <div class="card-body">
                            <select name="" class="form-control" id="select_gambar2">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" id="artist_home3" class="w-100 h-100 shadow-1-strong rounded"  style="max-height:300px;max-width:300px;" alt="Image 1">
                        <div class="card-body">
                            <select name="" class="form-control" id="select_gambar3">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>


<script>
    $(document).ready(function() {
        getHome();
        getArtistHome();
        var id_gambar1 = '';
        var id_gambar2 = '';
        var id_gambar3 = '';
    });
    function postHome(){
        var fileInput1 = $('#gambar1')[0];
        var fileInput2 = $('#gambar2')[0];
        var fileInput3 = $('#gambar3')[0];
        var file1 = fileInput1.files[0];
        var file2 = fileInput2.files[0];
        var file3 = fileInput3.files[0];

        var select1 = $('#select_gambar1').val();
        var select2 = $('#select_gambar2').val();
        var select3 = $('#select_gambar3').val();


        var formData = new FormData();

        if(file1){
            formData.append('file1', file1);
        }
        if(file2){
            formData.append('file2', file2);
        }
        if(file3){
            formData.append('file3', file3);
        }

        formData.append('artist1', select1);
        formData.append('artist2', select2);
        formData.append('artist3', select3);

        $.ajax({
            url: '/post-home',
            type: 'POST',
            dataType: 'json',
            data: formData,
            processData: false, 
            contentType: false, 
            success: function(response) {
                console.log(response);
                showToast('Data Insert Data.', 'success');
                fileInput1.value = '';
                fileInput2.value = '';
                fileInput3.value = '';
            },
            error: function() {
                showToast('Gagal Insert Data.', 'error');
            }
        });
    }

    function getHome(){
        $.ajax({
            url: '/get-home',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#jumbotron1').attr('src', response.data.gambar1.text ? '/storage/jumbotron/' + response.data.gambar1.text : '/not-found.png');
                $('#jumbotron2').attr('src', response.data.gambar2.text ? '/storage/jumbotron/' + response.data.gambar2.text : '/not-found.png');
                $('#jumbotron3').attr('src', response.data.gambar3.text ? '/storage/jumbotron/' + response.data.gambar3.text : '/not-found.png');
            },
            error: function() {
                showToast('Gagal Insert Data.', 'error');
            }
        });



        $.ajax({
            url: '/get-artist-home',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                id_gambar1 = response.data.gambar[0].id;
                id_gambar2 = response.data.gambar[1].id;
                id_gambar3 = response.data.gambar[2].id;

                $('#artist_home1').attr('src','/storage/artist_images/'+response.data.gambar[0].text || '/not-found.png');
                $('#artist_home2').attr('src','/storage/artist_images/'+response.data.gambar[1].text || '/not-found.png');
                $('#artist_home3').attr('src','/storage/artist_images/'+response.data.gambar[2].text || '/not-found.png');
            },
            error: function() {
                showToast('Gagal Insert Data.', 'error');
            }
        });
    }

    function fillOptions(data, selectElement) {
        // Menghapus semua opsi yang ada sebelumnya
        var select = $('#' + selectElement);
        select.empty();
       
        // Menambahkan opsi dari data gambar
        data.forEach(function(gambar) {
            if(gambar.id == id_gambar1 && selectElement == 'select_gambar1'){
                select.append('<option value="' + gambar.id + '" selected>' + gambar.title + '</option>');
            }
            else if(gambar.id == id_gambar2 && selectElement == 'select_gambar2'){
                select.append('<option value="' + gambar.id + '" selected>' + gambar.title + '</option>');
            }
            else if(gambar.id == id_gambar3 && selectElement == 'select_gambar3'){
                select.append('<option value="' + gambar.id + '" selected>' + gambar.title + '</option>');
            }else{
                select.append('<option value="' + gambar.id + '">' + gambar.title + '</option>');
            }

        });
    }

    function getArtistHome(){
        var ajaxUrl = '/get-artist-all-home';

        // Mendapatkan data gambar dari AJAX
        $.ajax({
            url: ajaxUrl,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.status) {
                    // Mengisi opsi pada setiap elemen <select>
                    fillOptions(response.data.gambar, 'select_gambar1');
                    fillOptions(response.data.gambar, 'select_gambar2');
                    fillOptions(response.data.gambar, 'select_gambar3');
                } else {
                    console.error('Failed to load data:', response.message);
                }
            },
            error: function() {
                console.error('Error loading data.');
            }
        });
    }
</script>


