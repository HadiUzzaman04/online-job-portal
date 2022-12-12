@extends('admin.index')
@section('contents')


<form action="">
    <div class="search">
        <input type="search" name="search" placeholder="Search" style="margin-left: 15px; border-radius:5px;width:40%;" />
        <button style="display: inline;background:blue;padding:1%;border-radius:5px;"><i class="fas fa-search"></i></button>
    </div>
</form>
<br>
<!-- DATA TABLE-->
<table class="table-borderless table-data3">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

    </thead>
    <tbody>
        @foreach($applicants as $applicant)
        <tr>

            <td>{{$applicant->id}}</td>
            <td>{{$applicant->name}}</td>
            <td>{{$applicant->email}}</td>
            <td>{{$applicant->phone}}</td>

            <td>
                <a href="{{ route('admin.delete.applicant',$applicant->id) }}" class=" btn-danger">Delete</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<!-- END DATA TABLE-->
@endsection