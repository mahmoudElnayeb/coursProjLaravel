@extends('admin_temp')
@section('navbar')
<div class="container-fluid">

   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('admin/home')}}">Home</a>
    </li>
    <li class="breadcrumb-item active"> Feature </li>
    <li class="breadcrumb-item active"> Preview  Feature  Data</li>
  </ol>

 @endsection
 @section('content')

 <a href="{{ URL::to('admin/feature')}}" class="btn btn-danger btn-sm mb-3">Return back</a>
 <div class="card mb-3">
       <div class="card-header"> <i class="fas fa-search"></i> Preview  Record  Data</div>
                 <h3> Title </h3>
                 <p> {{$data->title}}</p>
                 <h3> Decreption </h3>
                 <p> {{$data->desc}}</p>
                 <h3> Icon </h3>
                 <p> <li class="{{$data->icon}}"></li></p>
                 <h3> Type </h3>
                 <p> {{$data->type}}</p>
       </div>
 </div>
</div>
@endsection