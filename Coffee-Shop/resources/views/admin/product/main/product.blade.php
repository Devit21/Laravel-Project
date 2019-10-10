@extends('admin')

@section('title')
<title>Products</title>

@stop

@section('style')

@stop

@section('contain')

<header class="panel_header">
		<h2 class="title pull-left">Dashboad | Products</h2>
	</header>
  <!-- TABLE LIST STATUS -->
  <div class="row " id="content-body">
	<div class="col-xs-12">
		<p class="text-center">{!! session('message') !!}</p>
		<div class="row">
			<div class="col-sm-2 col-xs-2">
					<div class="form-group">
						<a href="{{ URL::to('/main/product/create.html') }}" class="btn btn-success">Add Products</a>
					</div>
			</div>
			<div class="col-sm-10 col-xs-10">
				<form method="get" action="{{ URL::to('/main/product/search') }}" role="search" accept-charset="UTF-8">
					<div class="form-group">
						<div class="input-group col-sm-12 col-xs-12">
							<input type="text" name="txtSearch" id="txtSearch" class="form-control" placeholder="Search id, name">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-default" id="btnSearch"><i><span class="glyphicon glyphicon-search"></i></button>
							</div><!-- /itnput-group-btn -->
						</div>	<!-- /input-group -->
					</div><!-- /form-group -->
				</form>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-border">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Price</th>
						
						<th>Created</th>
						<th>Updated</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
					@foreach($products as $pd)
					<tr>
						<td>{{ $pd->p_id}}</td>
						<td>{{ $pd->p_name}}</td>
						<td>{{ $pd->price}}</td>
						<td>{{ $pd->created_at}}</td>
						<td>{{ $pd->updated_at}}</td>
						

							<td>
								<a href="{{ URL::to('/main/product/')."/edit/".$pd->p_id }}" class="btn btn-primary btn-ms">Edit</a> &nbsp;
								<a href="{{ URL::to('/main/product')."/delete/".$pd->p_id }}" class="btn btn-danger btn-ms">Delete</a>
							</td>

					</tr>
					@endforeach
					
				</tbody>
			</table>
			<div class="text-center" id="pagination">
			{!! $products->appends(['txtSearch'=> Request::get('txtSearch')])->links() !!}

			</div>
		</div><!-- /table-responsive -->
	</div><!-- /col-xs-12 -->
  </div><!-- /row -->
  <!-- END TABLE LIST STATUS -->
	<section/>


@stop

@section('script')
<script type="text/javascript">


</script>

@stop