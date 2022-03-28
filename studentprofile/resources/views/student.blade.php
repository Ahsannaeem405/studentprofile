@extends('layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

@section('content')


    @if (Session::get('status'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('status') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <!-- Zero configuration table -->


    <section id="">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Students</h4>
                        <button type="button" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"
                            data-toggle="modal" data-target="#default">ADD STUDENTS</button>
                    </div>

                    <!-- Modal -->


                    <form method="post" id="myform" action="{{ url('admin/add-student') }}" enctype="multipart/form-data">
                        <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel1">Add Student</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">


                                        @csrf
                                        <div class="row">

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Name</label>
                                                    <input type="text" class="form-control" name="name" id="basicInput"
                                                        placeholder="Enter Name">
                                                </fieldset>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Number</label>
                                                    <input type="text" class="form-control" name="number" id="basicInput"
                                                        placeholder="Enter Number">
                                                </fieldset>
                                            </div>

                                        </div>


                                        <div class="row">

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">E-mail</label>
                                                    <input type="email" class="form-control" name="email" id="basicInput"
                                                        placeholder="Enter Email" required>
                                                </fieldset>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Study type</label>
                                                    <input type="text" class="form-control" name="typeofstudy"
                                                        id="basicInput" placeholder="Type of Study">
                                                </fieldset>
                                            </div>

                                        </div>



                                        <div class="row">

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">AA</label>
                                                    <input type="text" class="form-control" name="AA" id="basicInput"
                                                        placeholder="Enter AA">
                                                </fieldset>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Registration</label>
                                                    <input type="text" class="form-control" name="registration"
                                                        id="basicInput" placeholder="Enter Registration No">
                                                </fieldset>
                                            </div>

                                        </div>



                                        <div class="row">

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Semester</label>
                                                    <input type="text" class="form-control" name="semester"
                                                        id="basicInput" placeholder="Enter Semester">
                                                </fieldset>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">CGPA</label>
                                                    <input type="text" class="form-control" name="cgpa" id="basicInput"
                                                        placeholder="Enter CGPA">
                                                </fieldset>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Degree Name</label>
                                                    <input type="text" class="form-control" name="degreename"
                                                        id="basicInput" placeholder="Enter Degree Name">
                                                </fieldset>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Graduated</label>
                                                    <input type="text" class="form-control" name="graduated"
                                                        id="basicInput" placeholder="Enter Graduated">
                                                </fieldset>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Department Name</label>
                                                    <input type="text" class="form-control" name="departmentname"
                                                        id="basicInput" placeholder="Enter Department Name">
                                                </fieldset>
                                            </div>

                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Activity</label>
                                                    <input type="text" class="form-control" name="activity"
                                                        id="basicInput" placeholder="Enter Activity">
                                                </fieldset>
                                            </div>

                                        </div>

                                        <div class="row">



                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Award</label>
                                                    <input type="text" class="form-control" name="award" id="basicInput"
                                                        placeholder="Enter Award">
                                                </fieldset>
                                            </div>


                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Upload File</label>
                                                    <input type="file" class="form-control" name="pdffile">
                                                </fieldset>
                                            </div>

                                        </div>



                                        <div class="row">



                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Barcode Number</label>
                                                    <input type="text" class="form-control" name="barcode" id="basicInput"
                                                        placeholder="Enter Barcode Number">
                                                </fieldset>
                                            </div>


                                            

                                        </div>








                                        <div class="row">

                                            <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Image</label>

                                                    <input name="file2" type="file"" class="  dropify"
                                                        data-height="100" />

                                                </fieldset>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    @php
                                        $i = 0;
                                    @endphp
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Registration No</th>
                                            <th>Barcode</th>
                                            <th>Image</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($student as $users)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $users->name }}</td>
                                                <td>{{ $users->email }}</td>
                                                <td>{{ $users->registration }}</td>
                                                <td>{{ $users->barcode }}</td>
                                                <td><img src="{{ asset('StudentsImage/' . $users->image) }}"
                                                        style="width:10%">
                                                </td>

                                                <td>
                                                    <a type="button" data-toggle="modal"
                                                        data-target="#defaultedit{{ $users->id }}" <i
                                                        class="feather icon-edit"></i></a>
                                                    <a href="{{ url('admin/delete-student', $users->id) }}"><i
                                                            class="fa fa-trash"></i></a>
                                                </td>


                                                <div class="modal fade text-left" id="defaultedit{{ $users->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">

                                                        

                                                        <form method="post" action="{{ url('admin/update-student', $users->id) }}" enctype="multipart/form-data">

                                                            @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel1">Edit Student
                                                                </h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            
                                                                <div class="modal-body">

                                                                  

                                                                    <div class="row">

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $users->name }}"
                                                                                    name="name" id="basicInput"
                                                                                    placeholder="Enter Name">
                                                                            </fieldset>
                                                                        </div>

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Number</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $users->number }}"
                                                                                    name="number" id="basicInput"
                                                                                    placeholder="Enter Number">
                                                                            </fieldset>
                                                                        </div>

                                                                    </div>


                                                                    <div class="row">

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">E-mail</label>
                                                                                <input type="email" class="form-control"
                                                                                    value="{{ $users->email }}"
                                                                                    name="email" id="basicInput"
                                                                                    placeholder="Enter Email" required>
                                                                            </fieldset>
                                                                        </div>

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Study type</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $users->typeofstudy }}"
                                                                                    name="typeofstudy" id="basicInput"
                                                                                    placeholder="Type of Study">
                                                                            </fieldset>
                                                                        </div>

                                                                    </div>



                                                                    <div class="row">

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">AA</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $users->AA }}" name="AA"
                                                                                    id="basicInput" placeholder="Enter AA">
                                                                            </fieldset>
                                                                        </div>

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Registration</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $users->registration }}"
                                                                                    name="registration" id="basicInput"
                                                                                    placeholder="Enter Registration No">
                                                                            </fieldset>
                                                                        </div>

                                                                    </div>



                                                                    <div class="row">

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Semester</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $users->semester }}"
                                                                                    name="semester" id="basicInput"
                                                                                    placeholder="Enter Semester">
                                                                            </fieldset>
                                                                        </div>

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">CGPA</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $users->cgpa }}"
                                                                                    name="cgpa" id="basicInput"
                                                                                    placeholder="Enter CGPA">
                                                                            </fieldset>
                                                                        </div>

                                                                    </div>



                                                                    <div class="row">

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Degree Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $users->degreename }}"
                                                                                    name="degreename" id="basicInput"
                                                                                    placeholder="Enter Degree Name">
                                                                            </fieldset>
                                                                        </div>

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Graduated</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ $users->graduated }}"
                                                                                    name="graduated" id="basicInput"
                                                                                    placeholder="Enter Graduated">
                                                                            </fieldset>
                                                                        </div>

                                                                    </div>


                                                                    <div class="row">

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Department
                                                                                    Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="departmentname" id="basicInput"
                                                                                    value="{{ $users->departmentname }}"
                                                                                    placeholder="Enter Department Name">
                                                                            </fieldset>
                                                                        </div>

                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Activity</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="activity" id="basicInput"
                                                                                    value="{{ $users->activity }}"
                                                                                    placeholder="Enter Activity">
                                                                            </fieldset>
                                                                        </div>

                                                                    </div>

                                                                    <div class="row">



                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Award</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="award" id="basicInput"
                                                                                    value="{{ $users->award }}"
                                                                                    placeholder="Enter Award">
                                                                            </fieldset>
                                                                        </div>


                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Upload File</label>
                                                                                <input type="file"
                                                                                    value="{{ $users->pdffile }}"
                                                                                    class="form-control" name="pdffile">
                                                                            </fieldset>
                                                                        </div>



                                                                    </div>



                                                                    <div class="row">



                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Barcode Number</label>
                                                                                <input type="text" class="form-control" value="{{$users->barcode}}" name="barcode" id="basicInput"
                                                                                    placeholder="Enter Barcode Number">
                                                                            </fieldset>
                                                                        </div>
                            
                            
                                                                        
                            
                                                                    </div>
                            


                                                                    <div class="row">

                                                                        <div class="col-xl-12 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">Image</label>



                                                                                <input name="filenew"
                                                                                    data-default-file="{{ asset('StudentsImage/' . $users->image) }}"
                                                                                    type="file"" class=" dropify"
                                                                                    data-height="100" />



                                                                            </fieldset>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Edit</button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>

                                            </tr>

                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->

    <script>
        $('.dropify').dropify();


  
    </script>
@endsection



<script>
    $(document).ready(function() {


    })
</script>
