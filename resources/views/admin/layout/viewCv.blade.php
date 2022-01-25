@extends('admin.index')
@section('contents')

                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">

                        <tbody>
                            <td>Cv of {{ $application->name }}</td>
                            
                            <td><iframe height="1000" width="880" src="{{ asset('uploads/'. $application->cv)}}" frameborder=""></iframe></td>

                        </tbody>
                    </table>
                    <!-- END DATA TABLE-->

    @endsection