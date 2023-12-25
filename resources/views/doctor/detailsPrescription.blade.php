@extends('doctor.layout')
@section('doctorBody')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <aside>
              <h5>Name :</h5>
                &nbsp;
                <h5>phone</h5>
            </aside>
        </div>
        <div class="col-sm-3">
            <aside>
                <h5>Blood Group :</h5> &nbsp;
                <h5>Email</h5>
            </aside>
        </div>
        <div class="col-sm-3">
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
    <form action="#">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control bg-white" id="exampleFormControlTextarea1" rows="10" placeholder="Write Medicine"></textarea>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control bg-white" id="exampleFormControlTextarea1" rows="10" placeholder="About Patient"></textarea>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control bg-white" id="exampleFormControlTextarea1" rows=5 placeholder="Report"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" style="  background-color: #04AA6D; /* Green */
              border: none;
              color: white;
              padding: 16px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;">
            Prescribe
        </button>
    </form>
</div>
@endsection
