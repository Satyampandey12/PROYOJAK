@extends('template.admin.layouts.default')

@section('content')
<div class="row">
  <div class="col-md-12 col-md-offset-3">
 <section class="col-lg-6 connectedSortable">
         
          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upcoming Events</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
               @foreach($upcomingEvents as $event)
                  <li class="item">
                    <div class="info-box-icon" style="background: none !important;">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <div class="product-info">
                      <a href="{{url('events/view/')}}/{{$event->id}}" class="product-title">{{ $event->title }}
                        <span class="label label-warning pull-right">view event</span></a>
                      <span class="product-description">
                            <strong>Start date :  </strong>{{$event->start_date}}
                            <br>
                            <strong>End date :  </strong>{{$event->end_date}}
                            <br>
                            {!!  ($event->description) !!}
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                 @endforeach
              </ul>
            </div>
            <!-- /.box-body -->
           
          </div>
          <!-- /.box -->
</section>
</div>
</div>
@stop