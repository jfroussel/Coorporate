@extends('app')

@section('content')

<div class="container">

 <div class="card">

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
    {!! csrf_field() !!}
        <div class="card-header bgm-blue">
           <i class="fa fa-sign-in fa-4x"></i>
            <h2>SE CONNECTER à VPO-Builder<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consectetur consequatur, est laboriosam minus molestias necessitatibus, nemo nisi numquam reiciendis sapiente sed sint sit, tenetur ut voluptatem voluptatibus. Dolore, perferendis!</small></h2>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                <label for="password" class="col-sm-2 control-label">Mot de Passe</label>
                <div class="col-sm-10">

                    <div class="fg-line">
                        <input type="password" class="form-control input-sm" id="password" name="password">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="" name="remember">
                            <i class="input-helper"></i>
                            Se souvenir de moi
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-sm">Se connecter</button>
                    <a class="btn btn-link" href="{{ url('/password/email') }}">Mot de Passe oublié ?</a>
                </div>
            </div>
        </div>
    </form>
</div>


</div>



@endsection
