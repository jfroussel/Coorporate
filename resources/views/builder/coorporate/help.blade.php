
@extends('app')

@section('content')
@include('sidebar')


<div class="container" style="padding-top: 50px">
 <div class="card ">
             <div class="card-header ch-alt m-b-20 bgm-bluegray" style="color:#fff">
             <i class="fa fa-question-circle fa-3x "></i>
                 <h2>Centre d'aide <small>Phasellus condimentum ipsum id auctor imperdie</small></h2>
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
                             <i class="zmdi zmdi-more-vert"></i>
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

             <div class="card-body">
                 <div class="listview">
                     <a class="lv-item" href="">
                         <div class="media">
                             <div class="pull-left">
                                 <img class="lv-img-sm" src="{{url('material/img/profile-pics/jeff.jpg')}}" alt="">
                             </div>
                             <div class="media-body">
                                 <div class="lv-title">Creation d'une application</div>
                                 <small class="lv-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid cumque delectus dolores, eligendi, enim exercitationem, expedita illum incidunt iste molestias obcaecati pariatur quae repellat repudiandae sunt tenetur unde voluptatibus.</small>
                             </div>
                         </div>
                     </a>
                     <a class="lv-item" href="">
                         <div class="media">
                             <div class="pull-left">
                                 <img class="lv-img-sm" src="{{url('material/img/profile-pics/jeff.jpg')}}" alt="">
                             </div>
                             <div class="media-body">
                                 <div class="lv-title">Creation d'une page</div>
                                 <small class="lv-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores at atque aut autem beatae consequatur, consequuntur dolorum earum ipsa ipsam itaque libero, molestias nihil quia quidem sequi sint tempora.</small>
                             </div>
                         </div>
                     </a>
                     <a class="lv-item" href="">
                         <div class="media">
                             <div class="pull-left">
                                 <img class="lv-img-sm" src="{{url('material/img/profile-pics/jeff.jpg')}}" alt="">
                             </div>
                             <div class="media-body">
                                 <div class="lv-title">Gestion des utilisateurs</div>
                                 <small class="lv-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam at consectetur debitis inventore perferendis perspiciatis quis repellendus veritatis. Dolor ducimus eaque eum ipsum iusto laudantium magnam natus quas tempora voluptate.</small>
                             </div>
                         </div>
                     </a>
                     <a class="lv-item" href="">
                         <div class="media">
                             <div class="pull-left">
                                 <img class="lv-img-sm" src="{{url('material/img/profile-pics/jeff.jpg')}}" alt="">
                             </div>
                             <div class="media-body">
                                 <div class="lv-title">Créer un formulaire</div>
                                 <small class="lv-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam aliquid autem commodi delectus deleniti dicta, eius fuga impedit ipsum numquam obcaecati odio pariatur placeat quas quod unde veritatis voluptas.</small>
                             </div>
                         </div>
                     </a>
                     <a class="lv-item" href="">
                         <div class="media">
                             <div class="pull-left">
                                 <img class="lv-img-sm" src="{{url('material/img/profile-pics/jeff.jpg')}}" alt="">
                             </div>
                             <div class="media-body">
                                 <div class="lv-title">Créer une liste</div>
                                 <small class="lv-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quo, sit! A ad aliquid, aut fugiat optio perspiciatis quasi quia quod quos repellat? A enim labore molestiae mollitia numquam odit.</small>
                             </div>
                         </div>
                     </a>
                     <a class="lv-footer" href="">View All</a>
                 </div>
             </div>
         </div>
     </div>
 </div>

</div>

@endsection