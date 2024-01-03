<div class="tab-pane bg-white active rounded" id="home">
    <div class="row p-3">
        <div class="col-lg-7 mt-4">
            <h4 class="mb-3">Deskripsi</h4>
            <textarea id="editor"></textarea>
        </div>
        <div class="col-lg-5 mt-4 mb-4">
            <h4 class="mb-3">Jumbotron</h4>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="text-center">Gambar 1</p>
                            <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" class="d-block w-100" alt="...">
                            <input type="file" class="choose-image-btn form-control"></input>
                        </div>
                        <div class="carousel-item">
                        <p class="text-center">Gambar 2</p>
                            <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" class="d-block w-100" alt="...">
                            <input type="file" class="choose-image-btn form-control"></input>
                        </div>
                        <div class="carousel-item">
                        <p class="text-center">Gambar 3</p>
                            <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" class="d-block w-100" alt="...">
                            <input type="file" class="choose-image-btn form-control"></input>
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
                        <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Artist 1</h5>
                            <button class="btn btn-primary">Action Button</button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Artist 2</h5>
                            <button class="btn btn-primary">Action Button</button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Artist 3</h5>
                            <button class="btn btn-primary">Action Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <button id="submitBtn" class="btn btn-primary text-white p-3 mt-3">Save</button>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        CKEDITOR.replace('editor');

        $('#submitBtn').on('click', function () {
            var editorContent = CKEDITOR.instances.editor.getData();

            console.log(editorContent);
        });
    });
</script>
