 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('js/admin/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{asset('js/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{ asset('js/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

 <!-- Page level plugin JavaScript-->
 {{-- <script src="{{url('/')}}/vendor/chart.js/Chart.min.js"></script>
 <script src="{{url('/')}}/vendor/datatables/jquery.dataTables.js"></script>
 <script src="{{url('/')}}/vendor/datatables/dataTables.bootstrap4.js"></script> --}}


 <script src="{{ asset('js/admin/vendor/chart.js/Chart.min.js')}}"></script>
 <script src="{{ asset('js/admin/vendor/datatables/jquery.dataTables.js')}}"></script>
 <script src="{{ asset('js/admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
 <!-- Custom scripts for all pages-->
 <script src="{{ asset('js/admin/sb-admin.js')}}"></script>

 <!-- Demo scripts for this page-->
 <script src="{{ asset('js/admin/demo/datatables-demo.js')}}"></script>
 <script src="{{ asset('js/admin/demo/chart-area-demo.js')}}"></script>
   <script>    $(document).ready(function(){
      @yield('showMembre');
     });</script>
      
</body>

</html>