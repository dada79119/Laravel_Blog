<table class="table table-bordered table-inverse table-hover">
	<thead>
		<tr>
			<th>Action</th>
			<th>Title</th>
			<th>Author</th>
			<th>Category</th>
            <th>Status</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
    		<tr>
    			<td>
    				{!! Form::open(['method' => 'DELETE', 'route' => ['blog.destroy',$post->id]]) !!}

    				<a href="{{ route("blog.edit", $post->id) }}" class="btn btn-xs btn-default">
    					<i class="fa fa-edit"></i>
    				</a>

    				<button class="btn btn-xs btn-danger">
    					<i class="fa fa-trash"></i>
    				</button>

    				{!! Form::close() !!}
    			</td>
    			<td>{{ substr($post->title, 0, 35)."...." }}</td>
    			<td>{{ $post->author->name }}</td>
    			<td>{{ $post->category->title }}</td>
                <td>{!! $post->publishcationLabel() !!}</td>
    			<td>
    				<abbr title="{{ $post->dateFormatted(true) }}">
    					{{ $post->dateFormatted() }}
    				</abbr>
    			</td>
    			
    		</tr>
		@endforeach
	</tbody>
</table>