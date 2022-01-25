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
            <th>SL</th>
            <th>Company Name</th>
            <th>Company Type</th>
            <th>Company Email</th>
            <th>Company Phone</th>
            <th>Action</th>


        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$company->name}}</td>
            <td>{{$company->type}}</td>
            <td>{{$company->email}}</td>
            <td>{{$company->phone}}</td>

            <td>
                <a href="{{ route('admin.delete.company',$company->id) }}"> Delete</a>
            </td>



        </tr>
        @endforeach
    </tbody>
</table>
<!-- END DATA TABLE-->



@endsection