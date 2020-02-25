@extends('template.admin.layouts.default')

@section('content')


 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event List
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Event List</li>
      </ol>
    </section>
	<section class="content">
     	 <!-- Small boxes (Stat box) -->
      
		    <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Event List</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="event_list_table" class="table table-bordered table-striped">
	                <thead>
		                <tr>
		                  <th>Serial no</th>
		                  <th>Event Title</th>
		                  <th>Address</th>
		                  <th>Start Date</th>
		                  <th>End date</th>
		                  <th>Edit</th>
		                </tr>
	                </thead>
	                <tbody>
	                @if($event_list->count() > 0 )  
	               	 @foreach($event_list as $key => $event)
	                	<tr>
		                  <td>{{ $event->id }}</td>
		                  <td>{{ $event->title }}</td>
		                  <td>{{$event->address}}</td>
		                  <td>{{$event->start_date}}</td>
		                  <td>{{$event->end_date}}</td>
		                  <td>
		                  @if($logged_in_user->role_id == 2 ) 
		                  	<a  href="{{url('events/edit/')}}/{{$event->id}}" class="fa fa-pencil"></a>
		                  @endif 
		                  	<a  href="{{url('events/view/')}}/{{$event->id}}" class="fa fa-eye"></a> 
		                  </td>
		                </tr>
		                @endforeach
					@endif
	                </tbody>
	             </table>
	            </div>
	         
		</div>
	</section>

<script>
  

@stop