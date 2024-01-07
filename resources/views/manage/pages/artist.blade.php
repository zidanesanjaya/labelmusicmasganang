<style>
    .image-container {
        position: relative;
        display: inline-block;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Adjust the background color and opacity */
        opacity: 0; /* Initially invisible */
        transition: opacity 0.3s ease-in-out; /* Add a smooth transition effect */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .overlay-text {
        color: white; /* Text color */
        font-size: 18px; /* Adjust the font size */
        font-weight: bold; /* Optionally adjust font weight */
        text-align: center;
    }

    .image-container:hover .overlay {
        opacity: 1; /* Make the overlay visible on hover */
    }

</style>


<div class="tab-pane bg-white p-4" id="artist">
    <!-- Gallery -->
    <div class="row">
        <div class="col">
            <h4>Artist Menu</h4>
        </div>
        <div class="col text-end">
            <button class="btn btn-success text-white"  data-bs-toggle="modal" data-bs-target="#artist-modal">Tambah Artist</button>
        </div>
    </div>
    <hr>
    <div class="row"  id="gallery_artist">
        
    </div>

    <!-- Gallery -->
</div>

<div class="modal" id="artist-modal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Artist</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
            <label for="artist">Nama Artist</label>
            <input type="text" class="form-control mt-2" placeholder="Contoh : Tulus" id="artist_input" name="artist" required>
            <br>
            <label for="picture">Foto</label>
            <input type="file" class="form-control mt-2" id="picture" name="picture" onchange="previewImage()">
            <br>
            <div id="image-preview-container" class="mt-2">
                <img id="image-preview" class="w-100" alt="Preview" src="https://salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png">
            </div>
        </div>


        <div class="modal-footer">
            <button type="button" onclick="postArtist();" class="btn btn-success text-white" >Save</button>
        </div>
    </div>
  </div>
</div>


<script>
     $(document).ready(function() {
        getArtist();
    });
    function previewImage() {
        var input = document.getElementById('picture');
        var previewContainer = document.getElementById('image-preview-container');
        var previewImage = document.getElementById('image-preview');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            previewImage.src = '';
            previewContainer.style.display = 'none';
        }
    }

    function postArtist(){
        var artist = $('#artist_input').val();
        var fileInput = $('#picture')[0];
        var file = fileInput.files[0];

        if (!file) {
            showToast('Please select an image.', 'error');
            return;
        }

        var formData = new FormData();
        formData.append('artist', artist);
        formData.append('file', file);

        $.ajax({
            url: '/post-artist',
            type: 'POST',
            dataType: 'json',
            data: formData,
            processData: false, 
            contentType: false, 
            success: function(response) {
                console.log('Data posted successfully.');
                showToast('Data Insert Data.', 'success');
                getArtist();
                $('#artist_input').val('');
                fileInput.value = '';
            },
            error: function() {
                console.error('Failed to post data.');
                showToast('Gagal Insert Data.', 'error');
            }
        });
    }

    function getArtist(){
        $.ajax({
            url: '/get-artist',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log('berhasil');
                displayImages(response.data);
            },
            error: function() {
                console.error('Error.');
            }
        });
    }

    function displayImages(images) {
        var galleryContainer = $('#gallery-container');
        galleryContainer.empty();

        images.forEach(function(image) {
            var innerHTML = '';

            images.forEach(function(image, index) {
                innerHTML += '<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">';
                innerHTML += '<div class="text-center position-relative">';
                innerHTML += '<div class="image-container mb-4">';
                innerHTML += '<img src="/storage/artist_images/' + image.text + '" class="w-100 h-100 shadow-1-strong rounded" style="max-height:300px;max-width:300px;" alt="' + image.title + '">';
                innerHTML += '<div class="overlay">';
                innerHTML += '<p class="overlay-text">' + image.title + '</p>';
                innerHTML += '</div>';
                innerHTML += '</div>';
                if (image.var1 !== 'except') {
                    innerHTML += '<button type="button" class="btn btn-danger btn-hover position-absolute bottom-0 start-50 translate-middle-x text-white"  onclick="confirmDelete(' + image.id + ')">Delete</button>';
                }
                innerHTML += '</div>';
                innerHTML += '</div>';
            });

            // Set innerHTML ke elemen yang sesuai di HTML Anda
            document.querySelector('#gallery_artist').innerHTML = innerHTML;
        });
    }

    function confirmDelete(imageId) {
        var isConfirmed = confirm('Apakah Anda yakin ingin menghapus gambar ini?');

        if (isConfirmed) {
            deleteImage(imageId);
        } else {
            // Batal menghapus, atau tambahkan tindakan lain jika diperlukan
        }
    }

    function deleteImage(imageId) {
        var formDataDelete = {
            'id': imageId
        };

        $.ajax({
            url: '/delete-artist',
            type: 'POST',
            dataType: 'json',
            data: formDataDelete,
            success: function(response) {
                if(response.status == true){
                    showToast('Data Berhasil Di Delete.', 'success');
                    getArtist(); // Refresh tampilan setelah menghapus
                }else{
                    showToast('Artist Masih digunakan dalam menu home.', 'error');
                }
            },
            error: function() {
                showToast('Gagal Delete Data.', 'error');
            }
        });
    }


</script>