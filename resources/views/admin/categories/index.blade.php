@extends('admin_temp')
@section('navbar')
<div class="container-fluid">

   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('admin/home')}}">Home</a>
    </li>
    <li class="breadcrumb-item active"> Feature </li>
  </ol>

@endsection
@section('content')

<a href="{{ route('category.create')}}" class="btn btn-primary btn-sm mb-3"> Add New Feature</a>
<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
     All Feature Data </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
            
              <th>Created date</th>
              <th>Updated Date</th>
              <th> Opertaions </th>
            </tr>
          </thead>
          {{-- <tfoot>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Descreption</th>
                <th>Icon</th>
                <th>Created date</th>
                <th>Updated Date</th>
            </tr>
          </tfoot> --}}
          <tbody>
           @foreach ($data as $row)
                 <tr>
                   <td> {{ $row->id }}</td>
                   <td> <a href="{{URL::to('category/'.$row->id) }}"> {{ $row->name}} </a></td>
                   <td> {{ $row->created_at->format('Y-m-d') }}</td>
                   <td> {{ $row->updated_at->format('Y-m-d') }}</td>
                   <td>
                     <a href="{{URL::to('category/'.$row->id.'/edit')}}" class="btn btn-info btn-sm"> Edit </a>
                     <form action="{{URL::to('category/'.$row->id) }}" method="post" class="d-inline-block">
                      @csrf
                      <input type="hidden" value="DELETE" name="_method">
                     <a  class=" btn btn-danger btn-sm" data-href={{URL::to('category/'.$row->id.'/delete')}} data-toggle="modal"
                       data-target='#confirm-delete'> Delete </a>
                    </form>
                   </td>
                 </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>
@endsection