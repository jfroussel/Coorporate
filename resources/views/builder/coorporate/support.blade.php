@extends('app')

@section('content')
@include('sidebar')


<div class="container" style="padding-top: 50px">
 <div class="card">
     <div class="card-header ch-alt bgm-bluegray">
     <i class="fa fa-info-circle fa-3x" style="color:#fff"></i>
         <h2>Contacter le support <small>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero</small></h2>
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

          <button class="btn bgm-red btn-float"><i class="zmdi zmdi-phone"></i></button>
     </div>

     <div class="card-body card-padding">
     <div class="row">

         <div class="col-sm-6">
              <div class="pmo-contact">
              <h4>Support général</h4>
                   <ul>
                       <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 01 82 83 72 30</li>
                       <li class="ng-binding"><i class="zmdi zmdi-email"></i> support@ventepartner.com</li>
                       <li class="ng-binding"><i class="zmdi zmdi-facebook-box"></i> support.ventepartner</li>
                       <li class="ng-binding"><i class="zmdi zmdi-twitter"></i> @supportvp (twitter.com/vp)</li>
                       <li>
                           <i class="zmdi zmdi-pin"></i>
                           <address class="m-b-0 ng-binding">
                               85 Av Henri Barbusse, <br>
                               92140, Clamart, <br>
                               France (Haut de seine)
                           </address>
                       </li>
                   </ul>
               </div>
         </div>

         <div class="col-sm-6">
              <div class="pmo-contact">
              <h4>Votre Conseiller</h4>
                   <ul>
                       <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 01 82 83 72 30</li>
                       <li class="ng-binding"><i class="zmdi zmdi-email"></i> jfr@ventepartner.com</li>
                       <li class="ng-binding"><i class="zmdi zmdi-facebook-box"></i> jeff.Roussel</li>
                       <li class="ng-binding"><i class="zmdi zmdi-twitter"></i> @jeffRoussel (twitter.com/jeff)</li>
                       <li>
                           <i class="zmdi zmdi-pin"></i>
                           <address class="m-b-0 ng-binding">
                               85 Av Henri Barbusse, <br>
                               92140, Clamart, <br>
                               France (Haut de seine)
                           </address>
                       </li>
                   </ul>
               </div>
         </div>
     </div>

        <hr/>
      <script type="text/javascript" src="http://assets.freshdesk.com/widget/freshwidget.js"></script>
      <style type="text/css" media="screen, projection">
      	@import url(http://assets.freshdesk.com/widget/freshwidget.css);
      </style>
      <iframe title="Feedback Form" class="freshwidget-embedded-form" id="freshwidget-embedded-form" src="https://desico.freshdesk.com/widgets/feedback_widget/new?&widgetType=embedded&screenshot=no" scrolling="no" height="500px" width="100%" frameborder="0" >
      </iframe>
         <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.423014507081!2d2.2558368161905684!3d48.81198981192586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67a6412bd4c45%3A0xb2dafc98464bc79d!2s85+Avenue+Henri+Barbusse%2C+92140+Clamart!5e0!3m2!1sfr!2sfr!4v1449134222795" width=100% height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>

     </div>
 </div>
</div>

@endsection