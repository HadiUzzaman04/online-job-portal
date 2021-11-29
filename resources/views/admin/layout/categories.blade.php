@extends('admin.index')
@section('contents')



<div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-30">
                    <!-- button -->
                    <div class="card-body">
                    
                        <a href="{{route('createCategory')}}" class="btn-btn">Add Category</a>

                    </div>
                    
                    <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                
                                <th>Category Name</th>
                                <th>Category Type</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $Category)
                                <tr> 
                                    <td>{{$Category->category_name}}</td>
                                    <td>{{$Category->category_type}}</td>
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