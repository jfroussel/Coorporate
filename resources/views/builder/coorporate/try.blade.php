@extends('app')

@section('content')
<div class="container" style="padding-top: 80px; ">
 <div class="card">
    <div class="card-header">
        <h2>Inscription pour un essai gratuit de 30 jours  <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cum dignissimos dolore dolorum eius eveniet expedita minima, modi nemo nostrum odit officiis porro possimus quibusdam quis, repellat suscipit tempora unde! </small></h2>
    </div>

	<div class="card-body card-padding">

        <br/><br/>

        <div class="row">
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Nom & Prenom">
                    </div>
                </div>

                <br/>

                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-accounts-list"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Société">
                    </div>
                </div>

                <br/>

                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Téléphone">
                    </div>
                </div>

                <br/>

                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Adresse Email">
                    </div>
                </div>

                <br/>



                 <br/>

                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-globe"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Nom de votre application">
                    </div>
                </div>

               <div class="vspacer50"></div>
                <button class="btn btn-lg btn-primary">Valider votre inscription ...</button>
            </div>


            <div class="col-sm-8">
                <a href="#" class="thumbnail">
                    <img src="{{ url('material/media/freetrial.png') }}" alt="">
                </a>
            </div>
        </div>


    </div>
</div>
@endsection