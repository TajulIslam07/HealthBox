@extends('doctor.layout')
@section('doctorBody')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <aside>
              <h5>Name :</h5>
                &nbsp;
                <h5>phone</h5>
            </aside>
        </div>
        <div class="col-3">
            <aside>
                <h5>Blood Group :</h5> &nbsp;
                <h5>Email</h5>
            </aside>
        </div>
        <div class="col-3">
            <aside>
                <h5>Age :</h5> &nbsp;
            </aside>
        </div>
        <div class="col-3">
            <div class="text-center">
                <img src="doctor/assets/images/profile/dctr.jpeg" width="100" class="rounded-circle">
            </div>
        </div>
    </div>
    <div class="h1">Medicine & Plan</div>
</div>
@endsection
