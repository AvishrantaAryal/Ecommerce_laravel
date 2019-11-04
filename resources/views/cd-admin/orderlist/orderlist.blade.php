@extends('cd-admin.home-master')

@section('page-title')  
Order List
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="glyphicon glyphicon-list-alt"></i> Order List
        
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Order List</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                 
              </h3>
              @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
          <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Inserted Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @elseif(Session::has('updatesuccess'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Updated Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @elseif(Session::has('deletesuccess'))
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Deleted Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>SN</th>
                  <th>Customer Name</th>
                  <th>Products</th>
                  <th>Total Price</th>
                   <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach($order as $ord)
                
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td></td>
                  <td>{{$ord->product_name}}</td>
                  <td>price</td>
                  <td height="75px">
                  <form action="{{url('/orderliststatus')}}" method="POST">
                      {{csrf_field()}}
                    <div class="btn-group">

                 
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                 
                  <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                    <li> <button class="btn btn-danger" type="submit">Not Available</button>
                    </li>
                  </div>
                  
                </div>
              </form> </td>
                  <td>
                      <a href="{{url('/orderlistdetails/'.$ord->id)}}"> <button class="btn btn-success"><i class="fa  fa-eye"> </i></button></a>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$ord->id}}"><i class="fa fa-trash"> </i></button>
                 

                 </td>
                </tr>
                
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>SN</th>
                  <th>Customer Name</th>
                  <th>Products</th>
                  <th>Total Price</th>
                   <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  </div>


 
            
        

        <!--MODEL-->





<!--Delete-->
@foreach($e as $er)
<div class="modal modal-danger fade" id="modal-danger{{$er->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Message from web</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete ?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
               <a href="{{url('/deleteorder/'.$er->id)}}"> <button type="button" class="btn btn-outline">Yes</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endforeach()

        <!--Edit-->
   
        
 

@endsection