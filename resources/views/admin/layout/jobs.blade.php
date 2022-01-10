@extends('admin.index')
@section('contents')

<div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
            <a href="{{route('add.job')}}" class="btn-btn" style="margin-left:260px;">Add Job</a>
                <div class="row m-t-30">
                    <!-- button -->

                    
                    
                    <div class="col-md-12">
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