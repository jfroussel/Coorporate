@extends('app')

@section('content')

<div class="container">

 <div class="card">

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
    {!! csrf_field() !!}
        <div class="card-header bgm-orange">
            <i class="fa fa-key fa-4x"></i>
            <h2>Changer votre Mot de Passe<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consectetur consequatur, est laboriosam minus molestias necessitatibus, nemo nisi numquam reiciendis sapiente sed sint sit, tenetur ut voluptatem voluptatibus. Dolore, perferendis!</small></h2>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Oupss!</strong> Veuillez verifier les données saisies.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body card-padding">
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <div class="fg-line">
                        <input type="email" class="form-control input-sm" id="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-sm">Envoyer le nouveau Mot de Passe</button>
                </div>
            </div>
        </div>
    </form>
</div>


</div>

@endsection
