@if($errors->count() > 0)
<div class="alert alert-danger" role="alert">
    
@foreach ($errors->all() as $err)
    <li>{{$err}}</li>
@endforeach
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
@foreach (Session::get('success') as $scc)
    <li>{{$scc}}</li>
@endforeach
</div>
@endif