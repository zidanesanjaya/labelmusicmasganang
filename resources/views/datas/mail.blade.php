@extends('layouts.admin.app')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid bg-white p-2 rounded">
            <div class="row p-3">
                <div class="col">List Mail</div>
                <div class="col text-end"></div>
            </div>
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status Terkirim Gmail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mail AS $key => $data)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td style="max-width: 150px; white-space: normal;">{{$data->full_name}}</td>
                        <td style="max-width: 150px; white-space: normal;">{{$data->email}}</td>
                        <td style="max-width: 100px; white-space: normal;">{{$data->phone}}</td>
                        <td style="max-width: 300px; white-space: normal; overflow-wrap: break-word;">{{$data->message}}</td>
                        @if($data->is_send == 1)
                            <td><i class="badge badge-success">Terkirim</i></td>
                        @elseif($data->is_send == 0)
                            <td><i class="badge badge-danger">Tidak Terkirim</i></td>
                        @endif
                        <td>
                            <a href="{{route('delete.mail',$data->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

                <div class="d-flex justify-content-center">
                    {{ $mail->links('vendor.pagination.simple-bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
