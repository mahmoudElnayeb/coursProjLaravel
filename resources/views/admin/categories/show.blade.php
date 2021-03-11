@extends('admin_temp')
@section('navbar')
<div class="container-fluid">

   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('admin/home')}}">Home</a>
    </li>
    <li class="breadcrumb-item active"> <a href="{{ route('category.index')}}"> Category </a> </li>
    <li class="breadcrumb-item active"> Preview  Category  Data</li>
  </ol>

 @endsection
 @section('content')

 <a href="{{ route('category.index')}}" class="btn btn-danger btn-sm mb-3">Return back</a>
 <div class="card mb-3">
       <div class="card-header"> <i class="fas fa-search"></i> Preview  Record  Data</div>
                 <h3> Name </h3>
                 <p> {{$data->name}}</p>
               
       </div>
 </div>
</div>
@endsection