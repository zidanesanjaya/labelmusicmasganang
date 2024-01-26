@extends('layouts.admin.app')
@section('content')

<style>
    #editDeskripsi {
    height: 200px;
}
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid bg-white p-2 rounded">
            <div class="row p-3">
                <div class="col">List Artist</div>
                <div class="col text-end"></div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Debut</th>
                            <th scope="col">Debut Album</th>
                            <th scope="col">Top Track</th>
                            <th scope="col">Album</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data AS $key)
                        <tr>
                            <td style="max-width: 150px; white-space: normal;">{{$key->title}}</td>
                            <td style="max-width: 150px; white-space: normal;">{{$key->debut}}</td>
                            <td style="max-width: 100px; white-space: normal;">{{$key->debut_album}}</td>
                            <td style="max-width: 300px; white-space: normal;">{{$key->top_track}}</td>
                            <td style="max-width: 100px; white-space: normal;">{{$key->album}}</td>
                            <td class="limited-description text-truncate" data-bs-toggle="modal" data-bs-target="#detailsModal" onclick="showFullDescription(`{{$key->deskripsi}}`)" style="cursor: pointer; max-width: 200px;">
                                <span class="badge badge-opacity-primary">{{$key->deskripsi}}</span>
                            </td>
                            <td>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalDetailArtist" onclick="getDataDetail(`{{$key->id}}`,`{{$key->title}}`,`{{$key->debut}}`,`{{$key->debut_album}}`,`{{$key->top_track}}`,`{{$key->album}}`,`{{$key->deskripsi}}`,`{{$key->foto}}`);">
                                    <i class="mdi mdi-pencil"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Artist Modal -->
<div class="modal fade"  id="exampleModalDetailArtist" tabindex="-1" aria-labelledby="editArtistModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editArtistModalLabel">Edit Artist</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editArtistForm" method="post" action="{{route('post.detail_artist')}}" enctype="multipart/form-data">
            <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Artist Name</label>
                        <input type="hidden" class="form-control" id="editId" name="editId">
                        <input type="text" class="form-control" id="editTitle" name="editTitle">
                    </div>
                    
                    <div class="mb-3">
                        <label for="editDebut" class="form-label">Debut</label>
                        <input type="text" class="form-control" id="editDebut" name="editDebut">
                    </div>

                    <div class="mb-3">
                        <label for="editDebutAlbum" class="form-label">Debut Album</label>
                        <input type="text" class="form-control" id="editDebutAlbum" name="editDebutAlbum">
                    </div>

                    <div class="mb-3">
                        <label for="editTopTrack" class="form-label">Top Track</label>
                        <input type="text" class="form-control" id="editTopTrack" name="editTopTrack">
                    </div>

                    <div class="mb-3">
                        <label for="editAlbum" class="form-label">Album</label>
                        <input type="text" class="form-control" id="editAlbum" name="editAlbum">
                    </div>

                    <div class="mb-3">
                        <label for="editDeskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="editDeskripsi" name="editDeskripsi"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto (kedua)</label>
                        <input type="file" name="foto" id="uploadFoto" class="form-control">
                    </div>
                    <img id="previewFoto" src="#" alt="Preview" style="max-width: 200px;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="fullDescription"></p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function showFullDescription(description) {
        // Set the full description in the modal body
        document.getElementById('fullDescription').innerText = description;

        // Show the modal
        $('#detailsModal').modal('show');
    }
    function getDataDetail(id , title , debut , debut_album , top_track , album , deskripsi , var1){
        document.getElementById('editId').value = id;
        document.getElementById('editTitle').value = title;
        document.getElementById('editDebut').value = debut;
        document.getElementById('editDebutAlbum').value = debut_album;
        document.getElementById('editTopTrack').value = top_track;
        document.getElementById('editAlbum').value = album;
        document.getElementById('editDeskripsi').value = deskripsi;
        document.getElementById('previewFoto').src = '/storage/artist_images/'+ var1;
    }

    document.getElementById('uploadFoto').addEventListener('change', function (e) {
        var inputFoto = e.target;
        var previewFoto = document.getElementById('previewFoto');

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

@endsection
