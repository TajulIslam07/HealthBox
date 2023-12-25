@extends('doctor.layout')
@section('doctorBody')
    <div class="container-fluid">
            <h2>Bootstrap Table Example</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John Doe</td>
                    <td>25</td>
                </tr>

                <!-- Add more rows as needed -->
                </tbody>
            </table>

    </div>

@endsection
