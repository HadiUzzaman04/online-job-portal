@extends('admin.index')

@section('contents')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <!-- button -->
                <div class="card-body">

                    
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
                                <th>Company Email</th>
                                <th>Company Phone</th>
                                <th>Company Type</th>
                                <th>Action</th>

                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                            <tr>
                                <td>{{$company->id}}</td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->type}}</td>
                                <td>{{$company->email}}</td>
                                <td>{{$company->phone}}</td>

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