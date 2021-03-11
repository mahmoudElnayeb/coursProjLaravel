@extends('admin_temp')
@section('navbar')
<div class="container-fluid">

   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('admin/home')}}">Home</a>
    </li>
    <li class="breadcrumb-item active"> Category </li>
    <li class="breadcrumb-item active"> Edit  Category </li>
  </ol>

@endsection
@section('content')

<a href="{{ route('category.index')}}" class="btn btn-danger btn-sm mb-3">Return back</a>
<div class="card mb-3">
       <div class="card-header"> <i class="fas fa-table"></i> Edit Record </div>
            <div class="card-body">
                {{-- {!! Form::open(['url' => 'admin/feature' ,'method'=>'Post' ,'class'=>'form-group']) !!} --}}
           {!!  Form::model($data, ['route' => ['category.update', $data->id] ,'method'=>'PUT']) !!}

            <div>
                {!! Form::label('name' , 'Category Name ') !!}
                {!!  Form::text('name', $data->name , ['class'=>'form-control']) !!}
               @error('name')
               <p class="alert alert-danger"> name IS Incorrect  </p><br>
               @enderror
            </div>
               
                {!! Form::submit(" Edit ", ['class'=>'btn btn-block btn-primary mt-3 ']) !!}
                {!! Form::close() !!}
            </div>
  </div>
</div>

@endsection