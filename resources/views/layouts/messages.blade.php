

@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   <p>  {{Session::get('success')}}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button> 
  </div>
@endif

@if (Session::has('faild'))
<<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{Session::get('faild')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
    
@endif