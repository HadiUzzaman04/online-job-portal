@extends('admin.index')
@section('contents')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <!-- button -->

                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">

                        <tbody>
                            <td>Cv of {{ $application->name }}</td>
                            
                            <td><iframe height="1000" width="880" src="{{ asset('uploads/'. $application->cv)}}" frameborder=""></iframe></td>

                        </tbody>
                    </table>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>


    @endsection