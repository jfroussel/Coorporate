

@extends('app')

@section('content')
@include('sidebar')


<div class="container" style="padding-top: 50px">
<div class="card">
    <div class="card-header bgm-bluegray">
        <h2>Mode Configuration (Gestion des ventes) <small>Application de gestion des ventes pour le service commercial.</small></h2>
    </div>

    <div class="card-body card-padding">
        <div role="tabpanel">
            <ul class="tab-nav" role="tablist">
                <li class="active"><a href="#accueil" aria-controls="accueil" role="tab" data-toggle="tab">Accueil</a></li>
                <li><a href="#societes" aria-controls="societes" role="tab" data-toggle="tab">Sociétés</a></li>
                <li><a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab">Contacts</a></li>
                <li><a href="#actions" aria-controls="actions" role="tab" data-toggle="tab">Actions</a></li>
                <li><a href="#analyses" aria-controls="analyses" role="tab" data-toggle="tab">Analyses des ventes</a></li>
                <li><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab">Reporting</a></li>
                <li><a href="#encours" aria-controls="reporting" role="tab" data-toggle="tab">En cours</a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="accueil">
                    @include('builder.application_test.accueil')
                </div>
                <div role="tabpanel" class="tab-pane" id="societes">
                    @include('builder.application_test.societes')
                </div>
                <div role="tabpanel" class="tab-pane" id="contacts">
                     @include('builder.application_test.contacts')
                </div>
                <div role="tabpanel" class="tab-pane" id="actions">
                     @include('builder.application_test.actions')
                </div>
                <div role="tabpanel" class="tab-pane" id="analyses">
                     @include('builder.application_test.analyses')
                </div>
                <div role="tabpanel" class="tab-pane" id="reporting">
                     @include('builder.application_test.reporting')
                </div>
                <div role="tabpanel" class="tab-pane" id="encours">
                     @include('builder.application_test.encours')
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

@endsection