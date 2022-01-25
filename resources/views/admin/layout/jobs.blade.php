@extends('admin.index')
@section('contents')

<form action="">
    <div class="search">
        <input type="search" name="search" placeholder="Search" style="margin-left: 15px; border-radius:5px;width:40%;" />
        <button style="display: inline;background:blue;padding:1%;border-radius:5px;"><i class="fas fa-search"></i></button>
    </div>
</form>
<br>

<!-- button -->
<a href="{{route('add.job')}}" class="btn-success" style="padding:1%;">Add Job</a>
<div class="row m-t-30">


    <!-- DATA TABLE-->
    <table class="table table-borderless table-data3">
        <thead>
            <tr>

                <th>ID</th>
                <th>Title</th>
                <th>vacancy</th>
                <th>Category</th>
                <th>Years Of Experience</th>
                <th>Type</th>
                <th>Deadline</th>
                <th>Description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $key=>$job)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $job->job_title }}</td>
                <td>{{ $job->vacancy }}</td>
                <td>{{ $job->category }}</td>
                <td>{{ $job->years_of_experience }}</td>
                <td>{{ $job->type }}</td>
                <td>{{ $job->deadline }}</td>
                <td>{{ $job->description }}</td>
                <td style="display: flex;">
                    <a href="{{ route('admin.job.edit',$job->id)  }}" class=" btn-success" style="margin-right: 5px;">Update</a>
                    <a href="{{ route('admin.job.delete',$job->id) }}" class=" btn-danger">Delete</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- END DATA TABLE-->
</div>

@endsection