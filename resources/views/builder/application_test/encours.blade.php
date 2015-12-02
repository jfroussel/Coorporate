<div class="container-fluid">
    <div class="block-header">
        <ul class="actions">
            <li>
                <a href="">
                    <i class="zmdi zmdi-trending-up"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="zmdi zmdi-check-all"></i>
                </a>
            </li>
            <li class="dropdown">
                <a href="" data-toggle="dropdown">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a href="">Proprietes</a>
                    </li>
                    <li>
                        <a href="">Partages</a>
                    </li>
                    <li>
                        <a href="">Parametres</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
<div id="page-builder" class="ui-widget-content">
<div class="row">
    <div class="col-sm-12">
        <div id="page-header" class="ui-widget-content">
            @include('builder.componants.navbar')
        </div>
    </div>
    <div class="col-sm-2">
        <div id="page-sidebar" class="ui-widget-content">
            @include('builder.componants.sidebar')
        </div>
    </div>
    <div class="col-sm-10">
        <div id="page-content" class="ui-widget-content">
            <p>Deposer vos éléments ici !!</p>
        </div>
    </div>

    <div class="col-sm-12">
         <div id="page-footer" class="ui-widget-content">
           <h4>espace footer</h4>
        </div>
    </div>
</div>
</div>
</div>
