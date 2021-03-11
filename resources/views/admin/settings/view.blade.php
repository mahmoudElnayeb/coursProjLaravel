@extends('admin_temp')
@section('navbar')
<div class="container-fluid">

   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('admin/home')}}">Home</a>
    </li>
    <li class="breadcrumb-item active"> Setting </li>
    <li class="breadcrumb-item active"> Edit  Setting </li>
  </ol>

@endsection
@section('content')

<a href="{{ route('setting')}}" class="btn btn-danger btn-sm mb-3">Return back</a>
<div class="card mb-3">
       <div class="card-header"> <i class="fas fa-table"></i> Edit Record </div>
            <div class="card-body">
                {{-- {!! Form::open(['url' => 'admin/feature' ,'method'=>'Post' ,'class'=>'form-group']) !!} --}}
           {!! Form::open(['url'=>'settingupdate' , 'files'=>true ,'method'=>'Post']) !!}

           {!! Form::hidden('id', 1) !!}
            <div>
                {!! Form::label('apointment_intro' , 'Intro ') !!}
                {!!  Form::textarea('apointment_intro', $data->apointment_intro , ['class'=>'form-control' , 'rows'=>4  , 'placeholder'=> 'Enter Tour Intro']) !!}
               @error('apointment_intro')
               <p class="alert alert-danger"> apointment_intro IS Incorrect  </p><br>
               @enderror
            </div>

            
            


            <div>
                {!! Form::label('about' , 'about') !!}
                {!!  Form::textarea('about', $data->about, ['class'=>'form-control' , 'rows'=>4]) !!}
               @error('about')
               <p class="alert alert-danger"> about IS Incorrect  </p><br>
               @enderror
            </div>

            <div>
                {!! Form::label('working_time' , 'working_time') !!}
                {!!  Form::textarea('working_time', $data->working_time , ['class'=>'form-control' , 'rows'=>4]) !!}
               @error('working_time')
               <p class="alert alert-danger"> working_time IS Incorrect  </p><br>
               @enderror
            </div>

            <div>
                {!! Form::label('address' , 'about') !!}
                {!!  Form::textarea('address', $data->address  , ['class'=>'form-control' , 'rows'=>4]) !!}
               @error('address')
               <p class="alert alert-danger"> address IS Incorrect  </p><br>
               @enderror
            </div>

            <div>
                {!! Form::label('facebook' , 'facebook') !!}
                {!!  Form::text('facebook', $data->facebook , ['class'=>'form-control']) !!}
               @error('facebook')
               <p class="alert alert-danger"> facebook IS Incorrect  </p><br>
               @enderror
            </div>

            <div>
                {!! Form::label('twitter' , 'twitter') !!}
                {!!  Form::text('twitter', $data->twitter , ['class'=>'form-control']) !!}
               @error('twitter')
               <p class="alert alert-danger"> twitter IS Incorrect  </p><br>
               @enderror
            </div>

            <div>
                {!! Form::label('google' , 'google ') !!}
                {!!  Form::text('google',  $data->google , ['class'=>'form-control']) !!}
               @error('google')
               <p class="alert alert-danger"> google IS Incorrect  </p><br>
               @enderror
            </div>

            <div>
                {!! Form::label('logo' , 'logo ') !!}
                {!! Form::file('logo',null, ['class'=>'form-control' , 'accept'=>'image/*']) !!}
               @error('logo')
               <p class="alert alert-danger"> logo IS Incorrect  </p><br>
               @enderror
            </div>

            <div>
                {!! Form::label('service_image' , 'service_image') !!}
                {!! Form::file('service_image',null, ['class'=>'form-control' , 'accept'=>'image/*']) !!}
               @error('service_image')
               <p class="alert alert-danger"> service_image IS Incorrect  </p><br>
               @enderror
            </div>
            <div>
                {!! Form::label('intro_image' , 'intro_image ') !!}
                {!! Form::file('intro_image',null, ['class'=>'form-control' , 'accept'=>'image/*']) !!}           
                    @error('intro_image')
               <p class="alert alert-danger"> intro_image IS Incorrect  </p><br>
               @enderror
            </div>
                {!! Form::submit(" Edit ", ['class'=>'btn btn-block btn-primary mt-3 mb-5']) !!}
                {!! Form::close() !!}
            </div>

          
  </div>
</div>

@endsection