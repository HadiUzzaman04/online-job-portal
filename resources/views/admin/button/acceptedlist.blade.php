@extends('admin.index')
@section('contents')


<button class="btn btn-success" style="margin-left: 0%;" onclick="window.print()">Print</button>
<br>

<!-- DATA TABLE-->
<table class="table table-borderless table-data3">
    <thead>
        <tr>

            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>CV</th>
            <th>Applied For</th>
            <th>Status</th>

        </tr>
    </thead>
    <tbody>
        @foreach($applications as $application)
        <tr>
            <td>{{ $application->name }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->phone }}</td>
            <td><a href="{{ route('viewCv', $application->id) }}">View Cv</a></td>
            <td>{{ $application->job->job_title }}</td>
            <td>{{ $application->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- END DATA TABLE-->
@endsection