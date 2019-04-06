<table class="table table-bordered table-inverse table-hover">
	<thead>
		<tr>
			<th>Action</th>
			<th>Title</th>
			<th>Author</th>
			<th>Category</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
    		<tr>
    			<td>
    				{!! Form::open(['style' => 'display:inline-block;','method' => 'PUT', 'route' => ['blog.restore',$post->id]]) !!}
					<button title="Restore" class="btn btn-xs btn-default">
    					<i class="fa fa-refresh"></i>
    				</button>

    				{!! Form::close() !!}

    				{!! Form::open(['style' => 'display:inline-block;','method' => 'DELETE', 'route' => ['blog.force-destroy',$post->id]]) !!}

    				<button title="Delete Permanent" onclick="return confirm('You are delete a post permanently. Are you sure ?')" class="btn btn-xs btn-danger">
    					<i class="fa fa-times"></i>
    				</button>

    				{!! Form::close() !!}
    			</td>
    			<td>{{ $post->title }}</td>
    			<td>{{ $post->author->name }}</td>
    			<td>{{ $post->category->title }}</td>
    			<td>
    				<abbr title="{{ $post->dateFormatted(true) }}">
    					{{ $post->dateFormatted() }}
    				</abbr>
    			</td>
    			
    		</tr>
		@endforeach
	</tbody>
</table>