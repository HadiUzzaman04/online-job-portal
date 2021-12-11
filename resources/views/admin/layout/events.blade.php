@extends('admin.index')
@section('contents')

<div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-30">
                    <!-- button -->
                    <div class="card-body">
                    
                    <a href="{{route('event.index')}}" class="btn-btn">Add Events</a>

                </div>
                    
                    <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                
                                <th>Title</th>
                                <th>Discription</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Title</td>
                                <td>Description</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>

@endsection