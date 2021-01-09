@extends('layouts.admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customers
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/products">Customers</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<form method="post" action="" class="form form-horizontal">
      @csrf
      <div class="row form-group">
        <div class="col-md-3">
          <label>Name</label>
        </div>
        <div class="col-md-9">
          <input type="text" name="name" placeholder="Customer name" class="form-control">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-3">
          <label>Gender</label>
        </div>
        <div class="col-md-9">
          <select name="gender" class="form-control">
            <option selected disabled>Select type</option>
            <option value="1">Nam</option>
            <option value="2">Nữ</option>
          </select>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-3">
          <label>Email</label>
        </div>
        <div class="col-md-9">
            <input type="text" name="email" class="form-control">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-3">
          <label>Address</label>
        </div>
        <div class="col-md-9">
          <input type="text" name="address" class="form-control">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-3">
          <label>Phone</label>
        </div>
        <div class="col-md-9">
          <input type="text" name="phone_number" class="form-control">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-3">
          <label>Note</label>
        </div>
        <div class="col-md-9">
          <input type="text" name="note" class="form-control">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12 text-right">
          <button type="reset" class="btn btn-default">Reset</button>
          <button type="submit" class="btn btn-success">Add</button>
        </div>
      </div>
      </form>
    </section>
  </div>
@endsection
