<table class="table table-bordered table-inverse table-hover">
	<thead>
		<tr>
			<th>Action</th>
			<th>Name</th>
            <th>Email</th>
            <th>Role</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
    		<tr>
    			<td>
    				<a href="{{ route("backend.users.edit", $user->id) }}" class="btn btn-xs btn-default">
    					<i class="fa fa-edit"></i>
    				</a>
                        
                    @if($user->id == config('cms.default_user_id'))
                        <button class="btn btn-xs btn-danger disabled" onclick="return false">
                            <i class="fa fa-times"></i>
                        </button>
                    @else
                        <a href="{{ route('backend.users.confirm', $user->id ) }}" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                        </a>
                    @endif


    			</td>
    			<td>{{ $user->name }}</td>
    			<td>{{ $user->email }}</td>
                <td>-</td>
    		</tr>
		@endforeach
	</tbody>
</table>