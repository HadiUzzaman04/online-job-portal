@extends('admin.index')

@section('contents')
<div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-30">
                    <!-- button -->
                    <div class="card-body">
                    
                        <a href="{{route('add_company')}}" name="" class="btn btn-primary">Add Company</a>

                    </div>
                    
                    <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>Company ID</th>
                                <th>Company Name</th>
                                <th>Company Type</th>
                                <th>Company Email</th>
                                <th>Company Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2018-09-29 05:57</td>
                                <td>Mobile</td>
                                <td>iPhone X 64Gb Grey</td>
                                <td>Processed</td>
                                <td>$999.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
@endsection