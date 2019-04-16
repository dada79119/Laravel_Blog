@extends('layouts.backend.main')

@section('title', 'MyBlog | Add New category')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blog
            <small>Add New category</small>
          </h1>
          <ol class="breadcrumb">

            <li>
            	<a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <li>
            	<a href="{{ route('backend.blog.index') }}">Blog</a>
            </li>
            <li class="active">
            	Add New category
            </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
            	{!! Form::model($category,[
					'method' => 'POST',
					'route'  => 'backend.categories.store',
					'files'  => TRUE,
					'id'	 => 'category-form'
				]) !!}

            @include('backend.categories.form')
				
				{!! Form::close() !!}
            </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    @include('backend/categories/script')
@endsection


