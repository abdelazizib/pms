@if(Session::has('SuccessToast'))

@section('js_toast')
@foreach (Session::get('SuccessToast') as $msg)
<script>
    toastr["success"]("{{$msg}}")
  </script>
@endforeach

@endsection

@endif
