<section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner c-overflow">
                    <div class="profile-menu">
                        <a href="">
                            <div class="profile-pic">
                                <img src="{{ URL::asset('material/img/profile-pics/jeff.jpg') }}" alt="">
                            </div>

                            <div class="profile-info">
                                Jeff Roussel

                                <i class="zmdi zmdi-arrow-drop-down"></i>
                            </div>
                        </a>

                        <ul class="main-menu">
                            <li>
                                <a href="profile-about.html"><i class="zmdi zmdi-account"></i> Profil</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-settings"></i> Préférences</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-time-restore"></i> Se deconnecter</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="main-menu">
                        <li class="active"><a href="{{ url('/') }}"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-swap-alt"></i>Mes applications</a>
                            <ul>
                                <li><a href="">Gestion des ventes</a></li>
                                <li><a href="">CRM </a></li>
                                <li><a href="box-shadow.html">Extranet clients</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </aside>
            
            <aside id="chat">
                <ul class="tab-nav tn-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab">Layouts</a></li>
                    <li role="presentation"><a href="#online" aria-controls="online" role="tab" data-toggle="tab">Composants</a></li>
                </ul>
            
                <div class="chat-search">
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Rechercher">
                    </div>
                </div>
                
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="friends">


                        <div class="chat-search">
                            <div class="panel-group" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-collapse">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Modele de template
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/classique.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Le classique</h4>
                                                   Modele de template classique avec un header haut et une sidebar left
                                               </div>
                                           </div>

                                           <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Le custom</h4>
                                                   Modele de template  avec un header haut, une sidebar left et un footer
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-collapse">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Modele de layouts
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/classique.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Le classique</h4>
                                                   Modele de template classique avec un header haut et une sidebar left
                                               </div>
                                           </div>

                                           <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Le custom</h4>
                                                   Modele de template  avec un header haut, une sidebar left et un footer
                                               </div>
                                           </div>
                                           <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/classique.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Le classique</h4>
                                                      Modele de template classique avec un header haut et une sidebar left
                                                  </div>
                                              </div>

                                              <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Le custom</h4>
                                                      Modele de template  avec un header haut, une sidebar left et un footer
                                                  </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-collapse">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Modele de container
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">

                                            <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/classique.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Le classique</h4>
                                                   Modele de template classique avec un header haut et une sidebar left
                                               </div>
                                           </div>

                                           <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Le custom</h4>
                                                   Modele de template  avec un header haut, une sidebar left et un footer
                                               </div>
                                           </div>
                                           <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/classique.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Le classique</h4>
                                                      Modele de template classique avec un header haut et une sidebar left
                                                  </div>
                                              </div>

                                              <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Le custom</h4>
                                                      Modele de template  avec un header haut, une sidebar left et un footer
                                                  </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="online">

                        <div class="chat-search">
                            <div class="panel-group" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-collapse">
                                    <div class="panel-heading" role="tab" id="heading10">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                Formulaires
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse10" class="collapse in" role="tabpanel" aria-labelledby="heading10">
                                        <div class="panel-body">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/form.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Form inline</h4>
                                                   Modele de formulaire inline ...
                                               </div>
                                           </div>

                                           <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/form.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Form horizontal</h4>
                                                    Modele de formulaire horizontal ...
                                               </div>
                                           </div>

                                           <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/form.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Form vertical</h4>
                                                    Modele de formulaire vertical ...
                                               </div>
                                           </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-collapse">
                                    <div class="panel-heading" role="tab" id="heading11">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                                Tables
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11">
                                        <div class="panel-body">
                                            <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/table.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Striped rows</h4>
                                                   Modele de Tables ......
                                               </div>
                                           </div>

                                           <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/table.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Bordered table</h4>
                                                    Modele de Tables ......
                                               </div>
                                           </div>
                                           <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/table.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Hover rows</h4>
                                                       Modele de Tables ......
                                                  </div>
                                              </div>

                                              <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/table.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Condensed table</h4>
                                                       Modele de Tables ......
                                                  </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-collapse">
                                    <div class="panel-heading" role="tab" id="heading12">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                Les composants objets
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12">
                                        <div class="panel-body">

                                            <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/classique.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Label</h4>
                                                   Modele de composant pour la creation de vos formulaires ...
                                               </div>
                                           </div>

                                           <div class="media">
                                               <div class="pull-left">
                                                   <a href="#">
                                                       <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                   </a>
                                               </div>
                                               <div class="media-body">
                                                   <h4 class="media-heading">Input</h4>
                                                   Modele de composant pour la creation de vos formulaires ...
                                               </div>
                                           </div>
                                           <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/classique.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Select</h4>
                                                      Modele de composant pour la creation de vos formulaires ...
                                                  </div>
                                              </div>

                                              <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Radio</h4>
                                                      Modele de composant pour la creation de vos formulaires ...
                                                  </div>
                                              </div>

                                              <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Check</h4>
                                                      Modele de composant pour la creation de vos formulaires ...
                                                  </div>
                                              </div>


                                              <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Textarea</h4>
                                                     Modele de composant pour la creation de vos formulaires ...
                                                  </div>
                                              </div>

                                              <div class="media">
                                                  <div class="pull-left">
                                                      <a href="#">
                                                          <img class="media-object" src="material/img/builder/custom.png" alt="">
                                                      </a>
                                                  </div>
                                                  <div class="media-body">
                                                      <h4 class="media-heading">Toggle</h4>
                                                      Modele de composant pour la creation de vos formulaires ...
                                                  </div>
                                              </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </aside>