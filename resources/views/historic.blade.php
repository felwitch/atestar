<!DOCTYPE html>
@include('main-style'); 
  
<div id="app">
  <div class="main-wrapper">

  @include('main-header'); 

  @include('main-sidebar ');

  <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Histórico de Consultas</div>
          </h1>
          <div class="row m-12">
            <div class="col-md-6">
            <!-- Hoje -->
              <div class="col-lg-4 col-md-0 col-0 col-sm-12 mw-100">
                  <div class="card">
                    <div class="card-header">
                      <h4>Atendimentos [HOJE]</h4>
                    </div>
                    <div class="card-body">             
                      <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                          <img class="mr-3 rounded-circle" width="50" src="imgs/avatar/avatar-1.jpeg" alt="avatar">
                          <div class="media-body">
                            <div class="float-right"><small>10m</small></div>
                            <div class="media-title">Marcelo Canhoto</div>
                            <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                          </div>
                        </li>
                        <li class="media">
                          <img class="mr-3 rounded-circle" width="50" src="imgs/avatar/avatar-2.jpeg" alt="avatar">
                          <div class="media-body">
                            <div class="float-right"><small>2h</small></div>
                            <div class="media-title">Rafael Lemos</div>
                            <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                          </div>
                        </li>
                        <li class="media">
                          <img class="mr-3 rounded-circle" width="50" src="imgs/avatar/avatar-3.jpeg" alt="avatar">
                          <div class="media-body">
                            <div class="float-right"><small>3h</small></div>
                            <div class="media-title">Fabiano Melo</div>
                            <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                          </div>
                        </li>
                        <li class="media">
                          <img class="mr-3 rounded-circle" width="50" src="imgs/avatar/avatar-4.jpeg" alt="avatar">
                          <div class="media-body">
                            <div class="float-right"><small>6h</small></div>
                            <div class="media-title">Adalberto Costa</div>
                            <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                          </div>
                        </li>
                      </ul>
                      <!-- <div class="text-center">
                        <a href="#" class="btn btn-primary btn-round">
                          Ver todos
                        </a>
                      </div> -->
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
            <!-- Recentes -->
              <div class="col-lg-4 col-md-0 col-0 col-sm-12 mw-100">
                <div class="card">
                  <div class="card-header">
                    <h4>Atendimentos Recentes</h4>
                  </div>
                  <div class="card-body">             
                    <ul class="list-unstyled list-unstyled-border">
                      <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="imgs/avatar/avatar-1.jpeg" alt="avatar">
                        <div class="media-body">
                          <div class="float-right"><small>1d</small></div>
                          <div class="media-title">Joana Lana</div>
                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="imgs/avatar/avatar-2.jpeg" alt="avatar">
                        <div class="media-body">
                          <div class="float-right"><small>1d</small></div>
                          <div class="media-title">Ariane Cristina</div>
                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="imgs/avatar/avatar-3.jpeg" alt="avatar">
                        <div class="media-body">
                          <div class="float-right"><small>2d</small></div>
                          <div class="media-title">Vinicio Pêra</div>
                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="imgs/avatar/avatar-4.jpeg" alt="avatar">
                        <div class="media-body">
                          <div class="float-right"><small>2d</small></div>
                          <div class="media-title">Amélia Andrade</div>
                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                        </div>
                      </li>
                    </ul>
                    <!-- <div class="text-center">
                      <a href="#" class="btn btn-primary btn-round">
                        Ver todos
                      </a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  </div>

  @include('main-footer');

</div>
</div>


</body>
</html>