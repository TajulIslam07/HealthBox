@extends('doctor.layout')
@section('doctorBody')
    <div class="container-fluid">
        <h2>Today's Schedule</h2>
        <h2>Room : </h2>
        &nbsp;
        <h3>Patient Details : </h3>
        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Appointment Time</th>
                    <th>Serial No.</th>

                    <th>Details & Prescription</th>

                </tr>
                </thead>
                @for($i=1;$i<=5;$i++)
                    <tbody>
                    <tr>
                        <td>{{$i}}</td>
                        <td>John Doe</td>
                        <td>john</td>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td><a href="{{route('detailsPrescription')}}" class="btn bg-primary">Details & Write Prescription</a></td>
                    </tr>
                    </tbody>
                @endfor
            </table>
        </div>
    </div>
@endsection
