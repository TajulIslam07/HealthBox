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
                @for($i=1;$i<=count($appointment);$i++)
                <tbody>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->name}}</td>
                </tr>
                </tbody>
                @endfor
                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection
