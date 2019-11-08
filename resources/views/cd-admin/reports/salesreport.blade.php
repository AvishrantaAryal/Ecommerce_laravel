@extends('cd-admin.home-master')

@section('page-title')  
Sales Report
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="fa fa-line-chart"></i> Sales Report
        
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Report</a></li>
        <li class="active">Sales Report</li>
      </ol>
    </section>


    <section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
					
						<h3>0</h3>

						<p>Total Sales</p>
					</div>
					<div class="icon">
						<i class="fa fa-copy"></i>
					</div>
					{{-- <a href="{{url('view-all-user')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
					
						<h3>0</h3>

						<p>Video</p>
					</div>
					<div class="icon">
						<i class="fa fa-calendar"></i>
					</div>
					{{-- <a href="view-all-vehicle" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
				</div>
			</div>
			<!-- ./col -->


			 <div class="col-xs-12">

           <div class="box">
           	
           	
           	
            <div class="box-header">
			   <div class="col-md-4 mx-auto">@error('from_date')
			    	<div class="text text-danger" align="right">{{ $message }}</div>
					@enderror
				</div>
				<div class="col-md-6 mx-auto">@error('to_date')
			    	<div class="text text-danger" align="left">{{ $message }}</div>
					@enderror
				</div>
	       	
            </div>

            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
              	
      <div class="col-md-2"><b><span id="total_records">ADVANCE SEARCH</span></b></div>
      <div class="col-md-5">
       <div class="input-group input-daterange">
       	<form method="post" action="{{url('/status')}}">
       		{{csrf_field()}}

           <input type="text" name="from_date" id="from_date" readonly class="form-control" placeholder="Choose Start Date"  />
           <div class="input-group-addon">TO</div>
           <input type="text"  name="to_date" id="to_date" readonly class="form-control" placeholder="Choose End Date"/>
       </div>
      </div>
      <div class="col-md-2">
       <button type="submit" name="filter" id="filter" class="btn btn-info btn-sm">Filter</button>
   			</form>
       <a href="{{url('/salesreport')}}"><button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm">Refresh</button></a>
      </div>
     </div>
                <thead>

                <tr>
                  <th>SN</th>
                  <th>Name</th>
                   <th>Status</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                <tr>
                  <td>{{$d->post_title}}</td>
                  <td>{{$d->post_description}}</td>
                  <td>{{$d->date}}</td>
                  
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Status</th>
                  
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
		</div>

		Hello
	</section>


		</div>




<script>
$(document).ready(function(){

 var date = new Date();

 $('.input-daterange').datepicker({
  todayBtn: 'linked',
  format: 'yyyy-mm-dd',
  autoclose: true
 });

});
</script>

@endsection