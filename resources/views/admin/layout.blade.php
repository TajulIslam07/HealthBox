<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href={{asset('admin/css/bootstrap.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('admin/css/font-awesome.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('admin/css/select2.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('admin/css/style.css')}}>
</head>
<body>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="bg-primary">

                    <a class="btn" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-cog"></i> <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>

                <li>
                    <a href="{{route('adminDashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="doctors.html"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                </li>
                <li>
                    <a href="patients.html"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                </li>
                <li >
                    <a href="appointments.html"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                </li>
                <li>
                    <a href="schedule.html"><i class="fa-regular fa-calendar"></i><span>Doctor Schedule</span></a>
                </li>
                <li>
                    <a href="departments.html"><i class="fa-regular fa-hospital"></i> <span>Departments</span></a>
                </li>

                <li>
                    <a href="chat.html"><i class="fa fa-comments"></i> <span>Chat</span> <span class="badge badge-pill bg-primary float-right">5</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-video-camera camera"></i> <span> Calls</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="voice-call.html">Voice Call</a></li>
                        <li><a href="incoming-call.html">Incoming Call</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog View</a></li>
                        <li><a href="add-blog.html">Add Blog</a></li>
                        <li><a href="edit-blog.html">Edit Blog</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="expense-reports.html"> Expense Report </a></li>
                        <li><a href="invoice-reports.html"> Invoice Report </a></li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
@yield('adminBody')

<div class="sidebar-overlay" data-reff=""></div>
<script src={{asset('admin/js/jquery-3.2.1.min.js')}}></script>
<script src={{asset('admin/js/popper.min.js')}}></script>
<script src={{asset('admin/js/bootstrap.min.js')}}></script>
<script src={{asset('admin/js/jquery.slimscroll.js')}}></script>
<script src={{asset("admin/js/select2.min.js")}}></script>
<script src={{asset("admin/js/moment.min.js")}}></script>
<script src={{asset("admin/s/bootstrap-datetimepicker.min.js")}}></script>
<script src={{asset("admin/js/app.js")}}></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
