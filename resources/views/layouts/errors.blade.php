@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
               <span> {{$err}} </span>
        @endforeach
    </div>
@endif 