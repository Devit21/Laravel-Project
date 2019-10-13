@extends('admin')

@section('title')
	<title>Dashboad</title>
@stop

@section('style')
	
@stop


@section('containTitle')
	<!-- <h1 class="title">Dashboad | Add Status</h1>  --> 
@stop


@section('contain')
<section class="box ">
<header class="panel_header">
	<h2 class="title pull-left">Status | Show</h2>
</header>	
<div class="row " id="content-body">
	<div class="col-xs-12">

		<div class="col-xs-12">
			<label>Id: {{ $status->status_id }}</label><br/>
			<label>Title: {{ $status->status_title }}</label><br/>
			<label>Description: {{ $status->status_description }}</label><br/>
			<label>Status: {{ $status->status }}</label><br/>
			<label>Author: {{ $status->status_author }}</label><br/>
			<label>Created Date: {{ $status->created_at }}</label><br/>
		</div>

			<div class="modal-footer">
			  <a href="{{ url('/main/status.html') }}" class="btn btn-danger" data-dismiss="modal">Back</a>
			</div>
	

  <!-- END FORM ADD STATUS ROLE="MODAL" -->
  <section/>
@stop


@section('script')

@stop