<div class="row justify-content-md-center">
  <div class="col col-6">
         <table class="table">
         <tr>
          <td> ID </td>
          <td> {{$data->id}}</td>
         </tr>
         <tr>
          <td> Name </td>
          <td> {{$data->name}}</td>
         </tr>
         <tr>
          <td> Category </td>
          <td> {{$data->gteCategory->name}}</td>
         </tr>
         <tr>
          <td> Member Bio </td>
          <td> {{$data->bio}}</td>
         </tr>
         <tr>
          <td> Updated Member </td>
          <td> {{$data->created_at}}</td>
         </tr>
         </table>
  </div>
  <div class="col col-2">
         <img src="{{  asset('images/avatar/'.$data->avatar) }}" alt="Avatar" height="200" width="200">
  </div>
</div>