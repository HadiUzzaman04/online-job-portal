@extends('admin.index')
@section('contents')

                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>CV</th>
                                <th>Applied For</th>
                                <th>Action</th>
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
                                <td style="display: flex;">
                                    <a href="#" class=" btn-success" style="margin-right: 5px;">{{auth()->user()->status}}</a>
                                    <a href="#" class=" btn-danger">Reject</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- END DATA TABLE-->

    @endsection