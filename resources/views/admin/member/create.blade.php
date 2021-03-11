@extends('admin_temp')
@section('navbar')
<div class="container-fluid">

   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('admin/home')}}">Home</a>
    </li>
    <li class="breadcrumb-item active"> <a href="{{route('member.index')}}"> member</a> </li>
    <li class="breadcrumb-item active"> Add New member </li>
  </ol>

@endsection
@section('content')

<a href="{{route('member.index')}}" class="btn btn-danger btn-sm mb-3">Return back</a>
<div class="card mb-3">
       <div class="card-header"> <i class="fas fa-table"></i> Add New Record </div>
            <div class="card-body " style="overflow: auto">
                {!! Form::open(['url' => 'member' ,'method'=>'Post' ,'class'=>'form-group' ,'files'=>'true']) !!}
                <div>
                  {!! Form::label('categ_id' , ' Category ') !!}
                   {!! Form::select('categ_id', $categories, null, ['class'=>'form-control' , 'placeholder'=>' Select Your Catregory ...']) !!}
                 @error('categ_id')
                 <p class="alert alert-danger"> Category  IS Incorrect  </p><br>
                 @enderror
              </div>

            <div>
                {!! Form::label('name' , 'member Name ') !!}
                {!!  Form::text('name',null, ['class'=>'form-control']) !!}
               @error('name')
               <p class="alert alert-danger"> Name IS Incorrect  </p><br>
               @enderror
            </div>
                

            <div>
              {!! Form::label('bio' , 'member BIO ') !!}
              {!!  Form::textarea('bio',null, ['class'=>'form-control' ,'rows'=>'5']) !!}
             @error('name')
             <p class="alert alert-danger"> Bio IS Incorrect  </p><br>
             @enderror
          </div>

          <div>
            {!! Form::label('avatar' , 'member avatar ') !!}
            {!!  Form::file('avatar' , ['class'=>'form-control' , 'accept'=>'image/*']); !!}
           @error('name')
           <p class="alert alert-danger"> avatar IS Incorrect  </p><br>
           @enderror
        </div>
        



                {!! Form::submit("add Data ", ['class'=>'btn btn-block btn-primary mt-3 mb-5']) !!}
                {!! Form::close() !!}
            </div>
  </div>
</div>

@endsection