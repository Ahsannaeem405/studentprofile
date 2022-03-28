<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>UTM</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('front/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('front/plugins/icofont/icofont.min.css') }}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ asset('front/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/plugins/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

</head>

<body id="top">

    <header>

        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container" style="margin-left: 0px">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('StudentsImage/1.png') }}" style="width: 20%" alt="" class="img-fluid">
                </a>

               
                        
                     

                <div class="collapse navbar-collapse" id="navbarmain">

                </div>
            </div>
            <h7 class="" style="margin-right: 4%;">Dashboard {{ $student->graduated }}</h7>
        </nav>
    </header>



    <section class="page-title bg-1" style="background:#DA2977 ;    padding: 13px;">

        <div class="container">
            <div class="row">
                <div class="col-md-11" style="display: flex">
                    {{-- <i class="fas fa-home" style="    color: white;"></i>

        <h6 style="color: white" class="ml-5">Student Info</h6>
        <h6 style="color: white" class="ml-5">Activity</h6>
        <h6 style="color: white" class="ml-5">Award</h6>
        <h6 style="color: white" class="ml-5">User Manual</h6> --}}


                </div>

                <div class="col-md-1" style="display: flex">
                    <h6 style="color: white" class="">{{ $student->name }}</h6>
                    <i class="fas fa-user ml-4" style="    color: white;"></i>
                </div>


            </div>
        </div>
    </section>



    <section class="section service-2" style="padding: 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="service-block mb-5">



                        <div class="row">

                            <div class="col-2">
                                <br><br>

                                <img style="width: 100%" src="{{ asset('StudentsImage/' . $student->image) }}" alt=""
                                    class="img-fluid">

                            </div>

                            <div class="col-3">

                                <h5>{{ $student->name }}</h5>
                                <h6 style="color: red">{{ $student->departmentname }}</h6>
                                <h6 style="color: red">{{ $student->degreename }}</h6>
                                <br><br>


                                <h6 style="font-weight: bold">Matric No:&nbsp;<span
                                        style="font-weight: 100">@if($status==1){{ $student->barcode }}@else  {{ $student->registration }} @endif</span></h6>
                                <h6 style="font-weight: bold">Semester/Norm:&nbsp;<span
                                        style="font-weight: 100">{{ $student->semester }}</span></h6>
                                <h6 style="font-weight: bold">AA:&nbsp;<span
                                        style="font-weight: 100">{{ $student->AA }}</span></h6>
                            </div>


                            <div class="col-3">

                                <h5></h5>
                                <h6 style="color: red"></h6>
                                <h6 style="color: red"></h6>
                                <br><br> <br><br> <br>


                                <h6 style="font-weight: bold">Type of Study:&nbsp;<span
                                        style="font-weight: 100">{{ $student->typeofstudy }}</span></h6>
                                <h6 style="font-weight: bold">Email:&nbsp;<span
                                        style="font-weight: 100">{{ $student->email }}</span></h6>
                                <h6 style="font-weight: bold">Phone:&nbsp;<span
                                        style="font-weight: 100">{{ $student->number }}</span></h6>
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-3">

                                <h5 class="ml-5">Achievement</h5>

                                <h4 class="" style="margin-left: 35%;">{{ $student->cgpa }}</h4>

                                <h6 class="" style="font-weight: 100;margin-left: 35%;">CGPA</h6>

                                <br><br>

                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="ml-2">{{ $student->activity }}</h4>

                                        <h6 class="" style="font-weight: 100">Activity</h6>
                                    </div>

                                    <div class="col-6">
                                        <h4 class="ml-2">{{ $student->award }}</h4>

                                        <h6 class="" style="font-weight: 100">Award</h6>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>








            </div>



        </div>

    </section>

        <div class="container" >

            <div class="row" style="background: #DA2977 ">
                <div class="col-lg-12 col-md-12 col-sm-6">
            



                        <div class="row">

                            <div class="col-3">

                                <h5 class="mt-1" style="color: white">No</h5>
                            </div>
                            <div class="col-3">
                                <h5 class="mt-1 ml-5" style="color: white">Description</h5>
                            </div>
                                <div class="col-3">

                                <h5 class="mt-1 ml-5" style="color: white">Date</h5>
                                </div>
                                <div class="col-3">
                                <h5 class="mt-1 ml-5" style="color: white">Download</h5>
                          
                                </div>




                        </div>


                      

                
                </div>








            </div>

            <div class="row">

                <div class="col-3">

                    <h7 class="mt-1" >1</h7>
                </div>
                <div class="col-3">
                <h7 class="mt-1 ">{{$student->pdffile}}</h7>
                </div>
                    <div class="col-3">
                        @php
                        $newdate1 = date('D, d M Y', strtotime($student->created_at));
                        
                        $time1 = date('H:i:s', strtotime($student->created_at));
                        
                    @endphp
                    <h7 class="mt-1 ml-5" >{{$newdate1}}</h7>
                    </div>
                    <div class="col-3">
                        <a class="btn  btn-sm mt-1" style="margin-left: 20%;font-size:10px;color:white;    background: #DA2977 ;" href="{{asset('file/'.$student->pdffile)}}" download="{{asset('file/'.$student->pdffile)}}">Download</a>
              
                    </div>




            </div>

        </div>

   












    <!-- 
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{ asset('front/plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ asset('front/plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('front/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/plugins/counterup/jquery.easing.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('front/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('front/plugins/counterup/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('front/plugins/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('front/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Google Map -->
    <script src="{{ asset('front/plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="{{ asset('front/js/script.js') }}"></script>
    <script src="{{ asset('front/js/contact.js') }}"></script>

</body>

</html>
