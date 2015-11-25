@extends('app')

@section('content')


<div class="container">
<div class="page-header">
  <h1>Builder VPO <small>Liste de vos applications</small></h1>
</div>

<hr/>


<div class="list-group">
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="http://lorempixel.com/56/56/people/5" alt="icon">
        </div>

        <div class="row-content">
            <div class="col-md-6">
            <h4 class="list-group-item-heading">Mon application de CRM</h4>
            <div class="togglebutton togglebutton-material-blue-grey">
                <label>
                    <input type="checkbox" checked=""><span class="toggle"></span> Active ?
                </label>
            </div>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
            </div>
            <div class="col-md-6">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-material-blue-grey">Modifier</a>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-material-red">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="list-group-separator"></div>

    <div class="list-group-item">
            <div class="row-picture">
                <img class="circle" src="http://lorempixel.com/56/56/people/3" alt="icon">
            </div>

            <div class="row-content">
                <div class="col-md-6">
                <h4 class="list-group-item-heading">Mon application de CRM</h4>
                <div class="togglebutton togglebutton-material-blue-grey">
                    <label>
                        <input type="checkbox" ><span class="toggle"></span> Active ?
                    </label>
                </div>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
                </div>
                <div class="col-md-6">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-material-blue-grey">Modifier</a>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-material-red">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
            <div class="row-picture">
                <img class="circle" src="http://lorempixel.com/56/56/people/7" alt="icon">
            </div>

            <div class="row-content">
                <div class="col-md-6">
                <h4 class="list-group-item-heading">Mon application de CRM</h4>
                <div class="togglebutton togglebutton-material-blue-grey">
                    <label>
                        <input type="checkbox" checked=""><span class="toggle"></span> Active ?
                    </label>
                </div>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
                </div>
                <div class="col-md-6">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-material-blue-grey">Modifier</a>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-material-red">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
            <div class="row-picture">
                <img class="circle" src="http://lorempixel.com/56/56/people/8" alt="icon">
            </div>

            <div class="row-content">
                <div class="col-md-6">
                <h4 class="list-group-item-heading">Mon application de CRM</h4>
                <div class="togglebutton togglebutton-material-blue-grey">
                    <label>
                        <input type="checkbox"><span class="toggle"></span> Active ?
                    </label>
                </div>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
                </div>
                <div class="col-md-6">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-material-blue-grey">Modifier</a>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-material-red">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="list-group-separator"></div>
</div>
</div>
@endsection