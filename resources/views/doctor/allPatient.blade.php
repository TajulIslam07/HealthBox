@extends('doctor.layout')
@section('doctorBody')
<div class="container-fluid">
    <form>
        @csrf
            <input class="form-control form-control-lg" type="text" placeholder="Search Patient">
            <button class="btn btn-outline-primary m-3">Search Patient</button>


    </form>
</div>
@endsection
