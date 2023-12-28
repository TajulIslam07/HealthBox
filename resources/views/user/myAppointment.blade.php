@extends('layouts.base')
@section('body')
    <div class="container mt-4">
        <h2>My Appointment Information</h2>
        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Doctor</th>
                    <th>Appointment Time</th>
                    <th>Serial No.</th>
                    <th>Room No.</th>
                    <th>Status</th>
                </tr>
                </thead>
                @if(!$appointment)
                @else

                    @foreach($appointment as $data)
                <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->name1}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->room}}</td>
                    <td>{{$data->status}}</td>
                </tr>
                </tbody>

                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection
