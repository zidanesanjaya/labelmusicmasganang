@extends('layouts.admin.app')
@section('content')
<div class="main-panel">
		<div class="content-wrapper">
			<div class="container-fluid bg-white p-2 rounded">
			<div class="row p-3">
			<div class="col">List Music</div>
			<div class="col text-end"><button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Music</button></div>
		</div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Lagu</th>
                        <th scope="col">Pemutar Media</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
					@foreach($data as $key => $data)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->title}}</td>
                        <td>
                            <audio controls class="audio-player">
                                <source src="/storage/music/{{$data->file}}" type="audio/mp3">
                                Your browser does not support the audio tag.
                            </audio>
                        </td>
						<td>
							<a href="{{route('delete.music',$data->id)}}" class="btn btn-danger">delete</a>
						</td>
                    </tr>
					@endforeach
                    <!-- Tambahkan lagu lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
		<form action="{{route('post.music')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Music</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<label for="">Judul</label>
				<input type="text" name="music_title" class="form-control" placeholder="contoh : Dear God">
				<br>
				<label for="">Music</label>
				<input type="file" name="file_music" class="form-control">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
	  	</form>
    </div>
  </div>
</div>

@endsection