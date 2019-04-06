@if (session('message'))
	<div class="alert alert-success">
		{{ session('message') }}
	</div>
@elseif(session('trash-message'))
	<?php list($message,$id) = session('trash-message') ?>
	{!! Form::open(['method' => 'PUT', 'route' => ['blog.restore', $id]]) !!}
		<div class="alert alert-info">
			{{ $message }}
			<button type="submit" class="btn btm-sm btn-warning"><i class="fa fa-undo"></i> Undo</button>
		</div>
	{!! Form::close() !!}
@endif
