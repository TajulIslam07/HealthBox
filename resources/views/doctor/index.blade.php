@extends('doctor.layout')

@section('doctorBody')
<div class="container-fluid mt-5">
        <div class="row d-flex justify-content-center">

            <div class="col-md-7" style="width: 56rem">

                <div class="card p-3 py-4">

                    <div class="text-center">
                        <img src="doctor/assets/images/profile/dctr.jpeg" width="100" class="rounded-circle">
                    </div>

                    <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white">Doctor</span>
                        <h5 class="mt-2 mb-0">Alexender Schidmt</h5>
                        <span>Heart Specialist</span>

                        <div class="px-4 mt-1">
                            <p class="fonts">Dr. Emily Carter, a distinguished cardiologist, graduated with honors from Johns Hopkins University School of Medicine. Known for groundbreaking research in preventive cardiology, she combines expertise with empathetic patient care. Board-certified, Dr. Carter is a sought-after speaker and advocate for heart health. </p>

                        </div>
                        <ul class="social-list">
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-dribbble"></i></li>
                            <li><i class="fa fa-instagram"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-google"></i></li>
                        </ul>
                        <div class="buttons">
                            <button class="btn btn-outline-primary px-4">Edit Profile</button>
                            <button class="btn btn-primary px-4 ms-3">See All Doctor</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
