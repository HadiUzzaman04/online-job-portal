@extends('admin.index')
@section('contents')

<!-- button -->
<div class="card-body">

    <a href="{{route('createCategory')}}" class="btn-success" style="padding:1%;">Add Category</a>

</div>


<!-- DATA TABLE-->
<table class="table table-borderless table-data3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Details</th>
            <TH>Action</TH>

        </tr>
    </thead>
    <tbody>
        @foreach($categories as $key=>$category)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$category->category}}</td>
            <td>{{$category->category_details}}</td>
            <td>
                <a href="{{ route('admin.delete.category',$category->id) }}" class=" btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- END DATA TABLE-->
@endsection