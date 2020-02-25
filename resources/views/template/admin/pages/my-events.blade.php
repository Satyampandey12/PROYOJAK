@extends('template.admin.layouts.default')

@section('content')
 	<section class="content-header">
      <h1>
        Event Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My Events</li>
      </ol>
    </section>

    <section class="content">
    @if($events->count() > 0)
     	@foreach($events as $key => $event)
    	 <div class="col-sm-6">
	        <div class="box">
	            <div class="box-header with-border">
	              <center><h3 class="box-title ">{{$event->event_details->title}}</h3></center>

	              <div class="box-tools pull-right">
	                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
	                  <i class="fa fa-minus"></i></button>
	                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
	                  <i class="fa fa-times"></i></button>
	              </div>
	            </div>
	            <div class="box-body">
	              <p><strong>Description:</strong></p>
	                    {!! $event->event_details->description !!}
	            <table class="table table-bordered table-hover table-striped">
	                    <tbody>
	                    <tr>
	                        <td><strong>Start date:</strong></td>
	                        <td>{{$event->event_details->start_date}}</td>
	                    </tr>
	                    <tr>
	                        <td><strong>End date:</strong></td>
	                        <td>{{$event->event_details->end_date}}</td>
	                    </tr>
	                    <tr>
	                        <td><strong>Address:</strong></td>
	                        <td>{{$event->event_details->address}}</td>
	                    </tr>
	                    <tr>
	                        <td><strong>Created by:</strong></td>
	                        <td><a href="#">{{$event->event_details->creator->name}}</a></td>
	                    </tr>
	                    </tbody>
	                </table>
	                   
	            </div>
	            <div class="box-footer text-center">
             		 <p class="pull-right">
             		 	@if($event->is_attending == 0)
             		 		<a id="accept" class="btn btn-block btn-warning btn-sm" href="{{url('events/accept_invitation')}}/{{$event->id}}">Accept</a>
             		 		<a  class="btn btn-block btn-danger btn-sm"  href="{{url('events/decline_invitation')}}/{{$event->id}}">Decline</a>
             		 	@endif
             		 	@if($event->is_attending == 1)
             		 	<button type="button" class="btn btn-block btn-success btn-sm">Attending</button>
             		 	@endif

             		 	@if($event->is_attending == 2)
             		 	<button type="button" class="btn btn-block btn-danger btn-sm">Not Attending</button>
             		 	@endif
                     </p>
            	</div>
         	 </div>
   		 </div>
   		 @endforeach
    @endif
    </section>
  
@stop