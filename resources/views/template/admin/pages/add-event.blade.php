@extends('template.admin.layouts.default')

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Events
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Events</li>
      </ol>
    </section>

      <!-- Main content -->
    <section class="content">
	    <form action="{{route('event-save')}}" method="post" id="locationForm">
	        {{ csrf_field() }}
	        <div class="row">
	            <div class="col-sm-6">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Add new event</h3>
	                    </div>
	                    <div class="panel-body">

	                        {{csrf_field()}}
	                        <div class="form-group">
	                            <label for="title">Event title</label>
	                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter the event">
	                            <span class="error">{{$errors->first('title')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="title">Address</label>
	                            <input type="text" name="address" id="address" class="form-control"
	                                   placeholder="Enter the event address">
	                            <span class="error">{{$errors->first('address')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="title">Start date</label>
	                            <input type="date" name="start_date" id="start_date" class="form-control"
	                                   placeholder="Enter the event start date">
	                            <span class="error">{{$errors->first('start_date')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="title">End date</label>
	                            <input type="date" name="end_date" id="end_date" class="form-control"
	                                   placeholder="Enter the event end date">
	                            <span class="error">{{$errors->first('end_date')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="description">Description</label>
	           <textarea id="description" name="description" class="form-control" placeholder="Enter the description"></textarea>
	                            <span class="error">{{$errors->first('description')}}</span>
	                        </div>

	                         <input type="hidden" name="lat" value="0.0000" />
                             <input type="hidden" name="long" value="0.0000" />

	                        <button class="btn btn-primary" type="submit">
	                            <i class="fa fa-save"></i> Save
	                        </button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </form>
	    <div id='app'></div>
	</section>

  
    <script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
        })
    </script>

@stop

