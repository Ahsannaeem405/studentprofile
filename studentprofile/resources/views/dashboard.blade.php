@extends('layouts.main')


@section('content')


@if(Session::get('status'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{Session::get('status')}}

 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


                   <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Users</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                     
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                            @php
                                        $i=0;
                                        @endphp
                             <thead>
                                                    <tr>
                                                    <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Action</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               
                                                    <tr>
                                                    <td>{{++$i}}</td>
                                                        <td>sdsd</td>
                                                        <td>ssd</td>
                                                        <td>sdsd</td>

                                                     
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


@endsection