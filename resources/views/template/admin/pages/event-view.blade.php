@extends('template.admin.layouts.default')

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Event Details</li>
      </ol>
    </section>

    <section class="content">
    <div class="col-sm-6">
        <div class="box">
            <div class="box-header with-border">
              <center><h3 class="box-title ">{{$event->title}}</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <p><strong>Description:</strong></p>
                    {!! $event->description !!}
            <table class="table table-bordered table-hover table-striped">
                    <tbody>
                    <tr>
                        <td><strong>Start date:</strong></td>
                        <td>{{$event->start_date}}</td>
                    </tr>
                    <tr>
                        <td><strong>End date:</strong></td>
                        <td>{{$event->end_date}}</td>
                    </tr>
                    <tr>
                        <td><strong>Address:</strong></td>
                        <td>{{$event->address}}</td>
                    </tr>
                    <tr>
                        <td><strong>Created by:</strong></td>
                        <td><a href="#">{{$event->creator->name}}</a></td>
                    </tr>
                    </tbody>
                </table>
                   
            </div>

          </div>
    </div>
    @if($invited_people->count() > 0)
    <div class="col-sm-6">
        <div class="box">
            <div class="box-header with-border">
              <center><h3 class="box-title ">Invited Peoples for Event</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
            <table class="table table-bordered table-hover table-striped">
                 <tbody>
                    <tr>
                        <td><strong>User Name</strong></td>
                        <td><strong>His/her Status</strong></td>
                    </tr>
                     @foreach($invited_people as $key => $user)
                        <tr>
                                <td>{{$user->invitee->name}}</td>
                                @if($user->is_attending == 0)
                                <td>
                                    <span class="label label-warning">Pending</span>
                                </td>
                                @endif
                                @if($user->is_attending == 1)
                                <td>
                                <span class="label label-success">Attending</span>
                                </td>
                                @endif
                                @if($user->is_attending == 2)
                                <td>
                                    <span class="label label-danger">Not Attending</span>
                                </td>
                                @endif
                        </tr>
                     @endforeach
                </tbody>
             </table>
            </div>
        </div>
    </div>
    @endif
      <!-- /.box -->
    </section>
@stop
