@extends('admin')

@section('title')
	<title>edit Satus</title>
@stop

@section('style')
	
@stop


@section('containTitle')
	<!-- <h4 class="title">Dashboad | Add Satus</h4> -->
@stop


@section('contain')
<section class="box ">
<header class="panel_header">
	<h2 class="title pull-left">Status | Edit</h2>
</header>
	<div class="row " id="content-body">
		<div class="col-xs-12">
			<p class="text-center">{!! session('message') !!}</p>

        	<form method="post" action="{{ URL::to('/main/status/store') }}" class="form-horizontal" role="form" id="FormAdd">
				<div class="form-group">
					<label class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
						<input type="text" name="txtName" id="txtName" value="{{ $status->status_title }}" class="form-control" placeholder="Status type">
						<input type="hidden" name="txtId" value="{{ $status->status_id }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <p class="text-danger"> {{ $errors->first('txtName') }}</p>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Description</label>
					<div class="col-sm-10">
						<textarea rows="5" name="txtDescription" id="txtDescription" class="form-control" placeholder="Your Description">{{ $status->status_description }}</textarea>
					    <p class="text-danger"> {{ $errors->first('txtDescription') }}</p>
                    </div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Status</label>
					<div class="col-sm-10">
						<select name="txtStatus" class="form-control">
							@if($status->status == 0) 
								<option value="0" selected>Delete</option>
								<option value="1" >Active</option>
							@else
								<option value="0" >Delete</option>
								<option value="1" selected>Active</option>
							@endif
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"></label>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
						<button type="submit" class="btn btn-success" id="btnSave">Save</button>
						<a href="{{ URL::to('/main/status.html') }}" type="button" class="btn btn-danger">Back</a>
					</div>
				</div>
			</form>
		   
    	</div>
    </div>
  <section/>
@stop

@section('script')

@stop