@extends('layouts.admin.app')
@section('content')
<style>
    #lottie-container {
        width: 80%; /* Adjust this percentage as needed */
        height: auto; /* Keeps the aspect ratio of the animation */
    }

    h1 {
        font-size: 3em;
        font-weight: bold;
    }

    h3 {
        font-size: 1.5em; /* Sesuaikan dengan ukuran yang diinginkan */
    }

    @media (max-width: 767px) {
        h1 {
            font-size: 1.5em; /* Sesuaikan dengan ukuran yang diinginkan untuk mobile */
        }

        h3 {
            font-size: 1.2em; /* Sesuaikan dengan ukuran yang diinginkan untuk mobile */
        }
    }
</style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 row rounded d-flex align-items-center" id="bg-stts">
                <div class="col-4">
                    <input type="hidden" id="stts" value="{{$status_current_time}}">
                    <div id="lottie"></div>
                </div>  
                <div class="col-8">
                    <div class="d-flex flex-column align-items-start h-100">
                        <h1>{{$current_time}}</h1>
                        <h3>{{Auth::user()->username}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <div class="col-md-12 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-primary card-rounded">
                        <div class="card-body pb-0">
                            <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="status-summary-ight-white text-white mb-1">Total Mail Masuk</p>
                                    <h2 class="text-info">{{$status}}</h2>
                                </div>
                                <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                        <canvas id="status-summary"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Pesan Masuk</h4>
                                    <p class="card-subtitle card-subtitle-dash">Pesan Masuk Melalui Email</p>
                                </div>
                                <div>
                                    <a  href="/mail-page" class="btn btn-primary">Cek Pesan Lainya</a>
                                </div>
                            </div>
                            <div class="table-responsive mt-1">
                                <table class="table select-table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Tanggal Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data AS $key)
                                        <tr>
                                            <td>
                                                <div class="d-flex ">
                                                    <div>
                                                        <h6>{{$key->full_name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>{{$key->email}}</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                        <p class="text-success">{{$key->phone}}</p>
                                                    </div>
                                                    <!-- <div class="progress progress-md">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div> -->
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-opacity-warning">{{$key->created_at}}</div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center pt-3">
                                    {{ $data->links('vendor.pagination.simple-bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var animationPath = '';
    var container = document.getElementById('lottie');
    var stts = document.getElementById('stts').value;
    var sttsElement = document.getElementById('bg-stts');
    
    stts = 'lottie-malam';
    if(stts == 'lottie-pagi'){
        animationPath = "{{ url('star-admin/lottie/sun.json') }}";
        sttsElement.style.background = 'linear-gradient(180deg, #f5c700 0%, #ffed00 50%, #ffffff 100%)';
    }else if(stts == 'lottie-siang'){
        animationPath = "{{ url('star-admin/lottie/sun2.json') }}";
        sttsElement.style.background = 'linear-gradient(180deg, #ffed00 0%, #f58d00 100%)';
    }else if(stts == 'lottie-sore'){
        animationPath = "{{ url('star-admin/lottie/sun2.json') }}";
        sttsElement.style.background = 'linear-gradient(180deg, #008bf5 0%, #ff97f7 10% , #ffed00 38% , #e87200 100%)';
    }else if(stts == 'lottie-malam'){
        animationPath = "{{ url('star-admin/lottie/moon.json') }}";
        sttsElement.style.background = 'linear-gradient(180deg, #0088ff 0%, #000000 59%)';
        sttsElement.classList.add('text-white');
    }

    var animation = lottie.loadAnimation({
        container: container,
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: animationPath,
    });
</script>

@endsection
