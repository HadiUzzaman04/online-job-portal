@extends('admin.index')
@section('contents')

<div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-30">
                    <!-- button -->
                    <div class="card-body">
                    
                    <a href="{{route('event.index')}}" class="btn-btn">Add Events</a>

                </div>
                    
                    <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Discription</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($events as $key=>$event)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$event->event_title}}</td>
                                <td>{{$event->event_description}}</td>
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