@extends('layouts.backend.main')

@section('title', 'MyBlog | index')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blog
            <small>Display All Blog posts</small>
          </h1>
          <ol class="breadcrumb">

            <li>
            	<a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <li>
            	<a href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li class="active">
            	All Posts
            </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-xs-12">
              	<!-- box -->
                <div class="box">
                	<div class="box-header">
	                	<div class="pull-left">
	                		<a href="{{ route('blog.create') }}" class="btn btn-success">
	                			<i class="fa fa-plus"></i> Add New
	                		</a>	
	                	</div>
                	</div>

                  <!-- box-body -->
                  <div class="box-body">
                  	@if (session('message'))
                  		<div class="alert alert-success">
                  			{{ session('message') }}
                  		</div>
                  	@endif
                  	@if (!$posts->count())
	                  	<div class="alert alert-danger">
	                  		<strong>No record found</strong>
	                  	</div>
                  	@else
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
	                        				<a href="{{ route("blog.edit", $post->id) }}" class="btn btn-xs btn-default">
	                        					<i class="fa fa-edit"></i>
	                        				</a>
	                        				<a href="{{ route("blog.destroy", $post->id) }}" class="btn btn-xs btn-danger">
	                        					<i class="fa fa-times"></i>
	                        				</a>
	                        			</td>
	                        			<td>{{ $post->title }}</td>
	                        			<td>{{ $post->author->name }}</td>
	                        			<td>{{ $post->category->title }}</td>
	                        			<td>
	                        				<abbr title="{{ $post->dateFormatted(true) }}">
	                        					{{ $post->dateFormatted() }}
	                        				</abbr>
	                        				 | 
	                        				{!! $post->publishcationLabel() !!}
	                        			</td>
	                        			
	                        		</tr>
	                    		@endforeach
	                    	</tbody>
	                    </table>
	                @endif
                  </div>
                  <!-- box-body -->
                  <div class="box-footer clearfix">

                	<div class="pull-left">
	                	{{ $posts->render() }}
	                </div>
	                <div class="pull-right">
	                	
	                	<small>{{ $postCount }} items</small>
	                </div>
                  </div>
                </div>
                <!-- /.box -->
              </div>
            </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section("script")
	<script type="text/javascript">
		$('ul.pagination').addClass('no-margin pagination-sm');
	</script>
@endsection
