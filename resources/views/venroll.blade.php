
@extends('layouts.enroll')
@section('content')
	<form action="{{route('venroll-store')}}" method="post" id="EnrollForm2">
	        {{ csrf_field() }}
	        <div class="row">
	            <div class="col-sm-6">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Student Registration Form</h3>
	                    </div>
	                    <div class="panel-body">

	                        {{csrf_field()}}
	                        <div class="form-group">
	                            <label for="title">Enroll. No.</label>
	                            <input type="text" name="enroll_number" id="enroll_number" class="form-control" placeholder="Enter your enrollment number">
	                            <span class="error">{{$errors->first('enroll')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="title">Name</label>
	                            <input type="text" name="name" id="name" class="form-control"
	                                   placeholder="Enter your name">
	                            <span class="error">{{$errors->first('name')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="title">Father's Name</label>
	                            <input type="text" name="fname" id="fname" class="form-control"
	                                   placeholder="Enter your father's name">
	                            <span class="error">{{$errors->first('fname')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="description">Course</label>
			           				<select name="course" id="course" class="form-control">
			           					<option value="Btech">BTech</option>
			           					<option value="BCA">BCA</option>
			           					<option value="BSC">BSC</option>
			           					<option value="MCA">MCA</option>
			           				</select> 
			           				<span class="error">{{$errors->first('course')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="description">Year</label>
			           				<select name="year" id="year" class="form-control">
			           					<option value="1">1</option>
			           					<option value="2">2</option>
			           					<option value="3">3</option>
			           					<option value="4">4</option>
			           				</select> 
			           				<span class="error">{{$errors->first('course')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="title">Email</label>
	                            <input type="email" name="email" id="email" class="form-control"
	                                   placeholder="Enter your email address">
	                            <span class="error">{{$errors->first('email')}}</span>
	                        </div>

	                        <div class="form-group">
	                            <label for="description">Department</label>
	           					<input type="text" id="dept" name="dept" class="form-control" placeholder="Enter performance type">
	                            <span class="error">{{$errors->first('dept')}}</span>
	                        </div>

	                        <button class="btn btn-primary" type="submit">
	                            <i class="fa fa-save"></i> Save
	                        </button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </form>
@stop
