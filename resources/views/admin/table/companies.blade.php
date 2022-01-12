@extends('admin.index')

@section('contents')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <!-- button -->
                <div class="card-body">

                    <a href="{{route('create')}}" name="" class="btn-btn">Add Company</a>
                    <form action="">

                        <div class="input-group">
                            <input type="search" name="search" class="form-control rounded" placeholder="Search"/>
                            <button type="submit" class="btn btn-outline-primary">search</button>
                        </div>
                    </form>

                </div>


                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company Name</th>
                                <th>Company Type</th>
                                <th>Company Email</th>
                                <th>Action</th>

                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $key=>$company)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$company->company_name}}</td>
                                <td>{{$company->company_type}}</td>
                                <td>{{$company->email}}</td>
                                <td></td>

                                
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
    @endsection