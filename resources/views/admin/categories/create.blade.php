@extends('admin_temp')
@section('navbar')
<div class="container-fluid">

   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('admin/home')}}">Home</a>
    </li>
    <li class="breadcrumb-item active"> <a href="{{route('category.index')}}"> Category</a> </li>
    <li class="breadcrumb-item active"> Add New Category </li>
  </ol>

@endsection
@section('content')

<a href="{{route('category.index')}}" class="btn btn-danger btn-sm mb-3">Return back</a>
<div class="card mb-3">
       <div class="card-header"> <i class="fas fa-table"></i> Add New Record </div>
            <div class="card-body">
                {!! Form::open(['url' => 'category' ,'method'=>'Post' ,'class'=>'form-group']) !!}
            <div>
                {!! Form::label('name' , 'Category Name ') !!}
                {!!  Form::text('name',null, ['class'=>'form-control']) !!}
               @error('name')
               <p class="alert alert-danger"> Name IS Incorrect  </p><br>
               @enderror
            </div>
                
                {!! Form::submit("add Data ", ['class'=>'btn btn-block btn-primary mt-3 ']) !!}
                {!! Form::close() !!}
            </div>
  </div>
</div>

@endsection