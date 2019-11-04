
@extends('cd-admin.home-master')

@section('page-title')  
Order Details
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="glyphicon glyphicon-list-alt"></i> Order Details
        
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Order Details</li>
      </ol>
    </section>

    <section class="content">
     
    	<div class="box box-primary">
    		<div class="box-body">
    			<div class="row">
    				<div class="col-sm-4">
    					<h2 class="page-header">
    						<small class="pull-left">Order Date:</small><br>
    						 <b>Order ID:</b> DS-22919748292
    					</h2>
    				</div> 
    			</div>  
    			<div class="col-sm-4 invoice-col">User Information
                    <address><strong>QQ QQ</strong><br>
           				QWERTY<br>
           				QWERTY , QWERTY<br>
          				Phone: 123<br>
            			Email: qq@qq.qq
          			</address>
      			</div>
      			<div class="col-sm-4 invoice-col">
      				<b>Order Status</b> 
      			</div>    
      			<div class="row">
      				<div class="col-xs-12 table-responsive">
      					 <table class="table ">
                <thead>

                <tr>
                  <th>SN</th>
                  <th>Products</th>
                  <th>Quantity</th>
                  <th>Total Price</th>
                   
                  
                </tr>
                </thead>
                <tbody>
                 @foreach($order as $ord)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$ord->product_name}}</td>
                  <td>1</td>
                  <td>1000</td>
                 </tr>
                
                @endforeach
                </tbody>
              </table>
          </div> 
      </div>  
      <div class="row">
      	<div class="col-xs-6">
      		<p class="lead">Payment Methods:</p> 
      		<img src="https://giresunfindikevi.com/v1/public/img/credit/paypal2.png" alt="Paypal"><br>
      	</div>  
      	<div class="col-xs-6">
      		<div class="table-responsive">
      			</div>
      		</div> 
      	</div> 
      </div>
      </div>
   
    </section>



</div>
     @endsection 	