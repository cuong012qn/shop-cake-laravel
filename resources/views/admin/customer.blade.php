@extends('layouts.admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CUSTOMER<small>Customer List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<div class="row">
    		<div class="col-lg-12">
    			<table class="table table-responsive table-bordered table-stripped">
    				<thead>
    					<tr>
    						<th>#</th>
    						<th>Name</th>
    						<th>Gender</th>
    						<th>Email</th>
    						<th>Address</th>
    						<th>Phone</th>
    						<th>Note</th>
    						<th>Created date</th>
    						<th>Updated date</th>
    					</tr>
    				</thead>
    				<tbody>
                        @foreach ($customers  as $i => $item)
                            <tr>
                                <td>{{$i +1}}</td>
                                <td>{{$item -> name}}</td>
                                <td>{{$item ->gender}}</td>
                                <td>{{$item ->email}}</td>
                                <td>{{$item ->address}}</td>
                                <td>{{$item ->phone_number}}</td>
                                <td>{{$item ->note}}</td>
                                <td>{{$item ->created_at}}</td>
                                <td>{{$item ->updated_at}}</td>
                            </tr>
                        @endforeach
    				</tbody>
    			</table>
    		</div>
    	</div>
    </section>
</div>
@endsection
