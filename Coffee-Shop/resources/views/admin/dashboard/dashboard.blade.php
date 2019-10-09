@extends('admin')

@section('title')
<title>Dashboard</title>

@stop

@section('style')

@stop

@section('contain')

<section class="box ">
		<header class="panel_header">
			<h2 class="title pull-left">Dashboad | Admin</h2>
		</header>
	
        <div class="content-body">
           @if (Auth::guest())
           		<p>Guest</p>
           	@else
           		<p>Login</p>
           	@endif
        </div>
    </section>


@stop

@section('script')
<script type="text/javascript">

</script>

@stop