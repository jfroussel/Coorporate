@extends('app')

@section('content')
@include('sidebar')


<div class="container" style="padding-top: 50px">
<div class="card">
    <div class="card-header bgm-bluegray" style="color:#fff">
    <i class="fa fa-users fa-3x"></i>
        <h2>Gestion de votre profil <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
        <ul class="actions">
             <li>
                 <a href="">
                     <i class="zmdi zmdi-refresh-alt"></i>
                 </a>
             </li>
             <li>
                 <a href="">
                     <i class="zmdi zmdi-download"></i>
                 </a>
             </li>
             <li class="dropdown">
                 <a href="" data-toggle="dropdown">
                     <i class="zmdi zmdi-more-red"></i>
                 </a>

                 <ul class="dropdown-menu dropdown-menu-right">
                     <li>
                         <a href="">Change Date Range</a>
                     </li>
                     <li>
                         <a href="">Change Graph Type</a>
                     </li>
                     <li>
                         <a href="">Other Settings</a>
                     </li>
                 </ul>
             </li>
         </ul>

         <button class="btn bgm-red btn-float"><i class="zmdi zmdi-plus"></i></button>

    </div>


</div>



</div>

@endsection