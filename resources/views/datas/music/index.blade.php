@extends('layouts.admin.app')
@section('content')
<style>
.audio-player {
    width: 100%;
}

.audio-player audio {
    background-color: #f0ff; /* Warna latar belakang */
    border-radius: 10px; /* Radius sudut border */
}

.audio-player audio:hover {
    background-color: #ff0-; /* Warna latar belakang saat dihover */
}
</style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid bg-white p-2 rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Lagu</th>
                        <th scope="col">Pemutar Media</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Lagu 1</td>
                        <td>
                            <audio controls class="audio-player">
                                <source src="your-audio-file1.mp3" type="audio/mp3">
                                Your browser does not support the audio tag.
                            </audio>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Lagu 2</td>
                        <td>
                            <audio controls class="audio-player">
                                <source src="your-audio-file2.mp3" type="audio/mp3">
                                Your browser does not support the audio tag.
                            </audio>
                        </td>
                    </tr>
                    <!-- Tambahkan lagu lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection