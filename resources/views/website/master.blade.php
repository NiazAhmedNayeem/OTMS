<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>OTMS @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css"/>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-black ">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand"><img src="{{asset('/')}}website/img/logo.png" alt="OTMS" height="50" width="100"/></a>
            <ul class="navbar-nav text-uppercase fw-bold">
                <li><a href="{{route('home')}}" class="nav-link m-1 btn btn-outline-success border-0 text-white">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-link m-1 btn btn-outline-success border-0 text-white">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle m-1 btn btn-outline-success border-0 text-white" data-bs-toggle="dropdown">Training Category</a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li><a href="{{route('training.category', ['id' => $category->id])}}" class="dropdown-item fw-bold">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('training.all')}}" class="nav-link m-1 btn btn-outline-success border-0 text-white">All Training</a></li>
                <li><a href="{{route('contact')}}" class="nav-link m-1 btn btn-outline-success border-0 text-white">Contact</a></li>
                @if(Session::get('student_id'))
                    <li class="dropdown">
                        <a href="" class="nav-link m-1 btn btn-outline-info border-0 text-white dropdown-toggle" data-bs-toggle="dropdown">{{Session::get('student_name')}}</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('student.dashboard')}}" class="dropdown-item text-capitalize fw-bold"><i class="fa-solid fa-address-card"></i>&ensp; My Dashboard</a> </li>
                            <li><a href="{{route('student.logout')}}" class="dropdown-item text-danger text-capitalize fw-bold"><i class="fa-solid fa-right-from-bracket"></i>&ensp; Logout</a> </li>
                        </ul>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="" class="nav-link m-1 btn btn-outline-danger border-0 text-white dropdown-toggle" data-bs-toggle="dropdown">Login-Sign up</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('login-registration')}}" class="dropdown-item fw-bold text-capitalize"><i class="fa-solid fa-user"></i>&ensp;As a Student</a> </li>
                            <li><a href="{{route('teacher.login')}}" target="_blank" class="dropdown-item  fw-bold text-capitalize"><i class="fa-solid fa-person-chalkboard"></i>&ensp;As a Teacher</a> </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    @yield('body')

    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body h-100 border-0 bg-transparent text-white">
                        <h1>OTMS</h1>
                        <p class="text-muted" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet at commodi, consequuntur delectus, deleniti dolorum ea eius facere fuga in laborum nisi nostrum, obcaecati ratione recusandae saepe sit suscipit ut.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card card-body h-100 border-0 bg-transparent text-white">
                        <h3>Popular Training</h3>
                        <ul class="navbar-nav text-muted">
                            <li><a href="" class="nav-link"><i class="fa-solid fa-angles-right"></i>&ensp; PHP With Laravel Framework</a></li>
                            <li><a href="" class="nav-link"><i class="fa-solid fa-angles-right"></i>&ensp; Mobile App Development</a></li>
                            <li><a href="" class="nav-link"><i class="fa-solid fa-angles-right"></i>&ensp; Responsive Web Design</a></li>
                            <li><a href="" class="nav-link"><i class="fa-solid fa-angles-right"></i>&ensp; Professional Digital Marketing</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-body h-100 bg-dark text-white border-0">
                        <h3 class="">Contact with us</h3>
                        <p class="text-muted"><i class="fa fa-map-marker-alt mr-2 mt-3"></i>&ensp; Dhanmondi-27, Dhaka-1207 </p>
                        <p class="text-muted"><i class="fa fa-phone-alt mr-2"></i>&ensp; +880 1966 509310</p>
                        <p class="text-muted"><i class="fa fa-envelope mr-2"></i>&ensp; niazahmed.net@gmail.com</p>
                        <div class="d-flex">
                            <a class="btn btn-outline-light btn-square mr-2 m-2 border-0" href="#"><i class="fab fa-twitter text-muted"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2 m-2 border-0" href="#"><i class="fab fa-facebook-f text-muted"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2 m-2 border-0" href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2 m-2 border-0" href="#"><i class="fab fa-instagram text-muted"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="text-white mt-4"/>
            <div class="row">
                <div class="col">
                    <p class="text-white text-center mb-0">&copy; <a href="{{route('home')}}" class="text-white text-decoration-none">OTMS</a> all right reserved.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{asset('/')}}website/js/jquery-3.6.1.js"></script>
    <script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
</body>
</html>
