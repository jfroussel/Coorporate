@extends('app')

@section('content')
@include('sidebar')


<div class="container" style="padding-top: 50px">
 <div class="card">
     <div class="card-body card-padding">
     <div class="row">
         <div class="col-sm-3">
              <div class="pmo-contact">
              <h4>VENTE PARTNER By DESICO</h4>
                   <ul>
                       <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 01 82 83 72 30</li>
                       <li class="ng-binding"><i class="zmdi zmdi-email"></i> info@ventepartner.com</li>
                       <li class="ng-binding"><i class="zmdi zmdi-facebook-box"></i> info.ventepartner</li>
                       <li class="ng-binding"><i class="zmdi zmdi-twitter"></i> @infovp (twitter.com/vp)</li>
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
             {{--<p class="f-500 c-black m-b-20">16:9 Aspect Ratio</p>--}}
             <div class="embed-responsive embed-responsive-16by9">
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/9No-FiEInLA"  frameborder="0" allowfullscreen ></iframe>
             </div>
         </div>

         <div class="col-sm-3">
               <div class="pmo-contact">

                     <h4>Nous Contacter</h4>
                     <ul>
                         <li class="ng-binding"><i class="zmdi zmdi-email"></i> Service commercial</li>
                         <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 01 82 83 72 30</li>
                         <li class="ng-binding"><i class="zmdi zmdi-email"></i> Service support</li>
                         <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 01 82 83 72 30</li>
                         <li class="ng-binding"><i class="zmdi zmdi-email"></i> Contact presse</li>
                         <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 01 82 83 72 30</li>
                     </ul>
                </div>
         </div>

         <div class="col-sm-12 vspacer50">
             <div class="embed-responsive embed-responsive-16by9">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.423014507081!2d2.2558368161905684!3d48.81198981192586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67a6412bd4c45%3A0xb2dafc98464bc79d!2s85+Avenue+Henri+Barbusse%2C+92140+Clamart!5e0!3m2!1sfr!2sfr!4v1449134222795" width=100% height= "auto" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
         </div>
     </div>



     </div>
 </div>
</div>

@endsection