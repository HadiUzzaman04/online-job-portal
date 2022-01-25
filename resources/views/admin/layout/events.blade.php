@extends('admin.index')
@section('contents')
                    <!-- button -->
                    <div class="card-body">
                    
                    <a href="{{route('event.index')}}" class="btn-success" style="padding:1%;">Add Events</a>

                </div>
                    
                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($events as $key=>$event)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$event->event_title}}</td>
                                <td>{{$event->event_description}}</td>
                                <td style="display: flex;">
                                    <a href="{{route('admin.event.update',$event->id)}}" class=" btn-success" style="margin-right: 5px;">Update</a>
                                    <a href="{{ route('admin.event.delete',$event->id) }}" class=" btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- END DATA TABLE-->
@endsection