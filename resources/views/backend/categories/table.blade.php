<table class="table table-bordered table-inverse table-hover">
	<thead>
		<tr>
			<th>Action</th>
			<th>Category Name</th>
			<th>Post Count</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $category)
    		<tr>
    			<td>
    				{!! Form::open(['method' => 'DELETE', 'route' => ['backend.categories.destroy',$category->id]]) !!}

    				<a href="{{ route("backend.categories.edit", $category->id) }}" class="btn btn-xs btn-default">
    					<i class="fa fa-edit"></i>
    				</a>
                    @if($category->id == config('cms.default_category_id'))
                        <button class="btn btn-xs btn-danger disabled" onclick="return false">
                            <i class="fa fa-times"></i>
                        </button>
                    @else
                        <button class="btn btn-xs btn-danger" onclick="return confirm('Are u sure ?')">
                            <i class="fa fa-times"></i>
                        </button>
                    @endif

    				{!! Form::close() !!}
    			</td>
    			<td>{{ $category->title }}</td>
    			<td>{{ $category->posts->count() }}</td>

    			
    		</tr>
		@endforeach
	</tbody>
</table>