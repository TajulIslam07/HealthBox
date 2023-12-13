@extends('doctor.layout')
@section('doctorBody')
    <div class="container-fluid">
        <h2>My Appointment Information</h2>
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

                    <th>Prescription</th>

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
                        <td><a href="#" class="btn bg-primary">Write Prescription</a></td>
                    </tr>
                    </tbody>
                @endfor
            </table>
        </div>
    </div>
@endsection
