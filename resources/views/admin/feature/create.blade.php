@extends('admin_temp')
@section('navbar')
<div class="container-fluid">

   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('admin/home')}}">Home</a>
        </li>
    <li class="breadcrumb-item active"> Feature </li>
    <li class="breadcrumb-item active"> Add New Feature </li>
  </ol>

@endsection
@section('content')

<a href="{{ URL::to('admin/feature')}}" class="btn btn-danger btn-sm mb-3">Return back</a>
<div class="card mb-3">
       <div class="card-header"> <i class="fas fa-table"></i> Add New Record </div>
            <div class="card-body">
                {!! Form::open(['url' => 'admin/feature' ,'method'=>'Post' ,'class'=>'form-group']) !!}
            <div>
                {!! Form::label('title' , 'feature Title ') !!}
                {!!  Form::text('title',null, ['class'=>'form-control']) !!}
               @error('title')
               <p class="alert alert-danger"> Title IS InCorrect  </p><br>
               @enderror
            </div>
                <div>
                    {!! Form::label('desc' , 'feature Descreption ') !!}
                {!!  Form::textarea('desc',null, ['class'=>'form-control','rows'=>'3','placeholder'=>' write your descreption here']) !!}
                @error('desc')
                <p class="alert alert-danger"> Descreption IS InCorrect  </p><br>
                @enderror
                </div>
               <div>
                {!! Form::label('icon' , 'feature Icon ' ) !!}
                {!!  Form::text('icon',null, ['class'=>'form-control']) !!}

                @error('icon')
                <p class="alert alert-danger"> Icon IS InCorrect  </p><br>
                @enderror
               </div>
               {!! Form::label('type' , 'Data Type ' ) !!}
               {!! Form::select('type', [ 'service' => 'Service','feature' =>'Feature' ], null, ['placeholder' => 'Choose Tour Type ...' , 'class'=>'form-control']) !!}

                {!! Form::submit("add Data ", ['class'=>'btn btn-block btn-primary mt-3 ']) !!}
                {!! Form::close() !!}
            </div>
  </div>
</div>

@endsection