@extends('app')

@section('content')


<div class="row">
   <span><h3>Liste de vos applications</h3></span>

<hr/>


<div class="list-group">
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="http://lorempixel.com/56/56/people/5" alt="icon">
        </div>

        <div class="row-content">
            <div class="col-md-6">
            <h4 class="list-group-item-heading">Mon application de CRM</h4>
            <div class="togglebutton">
                <label>
                    <input type="checkbox" checked=""><span class="toggle"></span> Active ?
                </label>
            </div>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
            </div>
            <div class="col-md-6">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-primary">Modifier</a>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-danger">Supprimer</a>
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
            <div class="togglebutton">
                <label>
                    <input type="checkbox" checked=""><span class="toggle"></span> Active ?
                </label>
            </div>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
            </div>
            <div class="col-md-6">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-primary">Modifier</a>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="http://lorempixel.com/56/56/people/2" alt="icon">
        </div>

        <div class="row-content">
            <div class="col-md-6">
            <h4 class="list-group-item-heading">Mon application de CRM</h4>
            <div class="togglebutton">
                <label>
                    <input type="checkbox" checked=""><span class="toggle"></span> Active ?
                </label>
            </div>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
            </div>
            <div class="col-md-6">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-primary">Modifier</a>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="http://lorempixel.com/56/56/people/4" alt="icon">
        </div>

        <div class="row-content">
            <div class="col-md-6">
            <h4 class="list-group-item-heading">Mon application de CRM</h4>
            <div class="togglebutton">
                <label>
                    <input type="checkbox" checked=""><span class="toggle"></span> Active ?
                </label>
            </div>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
            </div>
            <div class="col-md-6">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-primary">Modifier</a>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:void(0)" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    <div class="list-group-separator"></div>
</div>
</div>
@endsection