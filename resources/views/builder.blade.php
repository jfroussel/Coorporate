@extends('app')

@section('content')
<div class="container" style="padding-top: 0px; ">
	<div class="row">
	    <div class="icon-preview"><i class="mdi-communication-comment"></i><span><h3>Vous êtes sur la page Builder VPOnline</h3></span></div>
		<a href="{{URL('builder/application')}}" class="btn btn-material-blue-grey btn-raised">Liste de vos applications</a>
	</div>
</div>
@endsection