<!DOCTYPE html>
@include('main-style'); 
  
<div id="app">
  <div class="main-wrapper">

  @include('main-header'); 

  @include('main-sidebar');

    <div class="main-content">
          <section class="section">
            <h1 class="section-header">
              <div>Dashboard</div>
            </h1>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                  <div class="card-icon bg-primary">
                    <i class="ion ion-person"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Pacientes atendidos (Dia)</h4>
                    </div>
                    <div class="card-body">
                      10
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                  <div class="card-icon bg-danger">
                    <i class="ion ion-ios-paper-outline"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Atestados gerados</h4>
                    </div>
                    <div class="card-body">
                      8
                    </div>
                  </div>
                </div>
              </div>
             
                      
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <div class="btn-group">
                        <a href="#" class="btn active">Semanal</a>
                        <a href="#" class="btn">Mensal</a>
                        <a href="#" class="btn">Anual</a>
                      </div>
                    </div>
                    <h4>Estatísticas</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart" height="158"></canvas>
                    <div class="statistic-details mt-sm-4">
                      <div class="statistic-details-item">
                        <small class="text-muted"><span class="text-primary"><i class="ion-arrow-up-b"></i></span> 7%</small>
                        <div class="detail-value">$243</div>
                        <div class="detail-name">Today's Sales</div>
                      </div>
                      <div class="statistic-details-item">
                        <small class="text-muted"><span class="text-danger"><i class="ion-arrow-down-b"></i></span> 23%</small>
                        <div class="detail-value">$2,902</div>
                        <div class="detail-name">This Week's Sales</div>
                      </div>
                      <div class="statistic-details-item">
                        <small class="text-muted"><span class="text-primary"><i class="ion-arrow-up-b"></i></span>9%</small>
                        <div class="detail-value">$12,821</div>
                        <div class="detail-name">This Month's Sales</div>
                      </div>
                      <div class="statistic-details-item">
                        <small class="text-muted"><span class="text-primary"><i class="ion-arrow-up-b"></i></span> 19%</small>
                        <div class="detail-value">$92,142</div>
                        <div class="detail-name">This Year's Sales</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Atendimentos Recentes</h4>
                  </div>
                  <div class="card-body">             
                    <ul class="list-unstyled list-unstyled-border">
                      <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="../dist/img/avatar/avatar-1.jpeg" alt="avatar">
                        <div class="media-body">
                          <div class="float-right"><small>10m</small></div>
                          <div class="media-title">Marcelo Canhoto</div>
                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="../dist/img/avatar/avatar-2.jpeg" alt="avatar">
                        <div class="media-body">
                          <div class="float-right"><small>2h</small></div>
                          <div class="media-title">Rafael Lemos</div>
                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="../dist/img/avatar/avatar-3.jpeg" alt="avatar">
                        <div class="media-body">
                          <div class="float-right"><small>3h</small></div>
                          <div class="media-title">Fabiano Melo</div>
                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                        </div>
                      </li>
                      <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="../dist/img/avatar/avatar-4.jpeg" alt="avatar">
                        <div class="media-body">
                          <div class="float-right"><small>1d</small></div>
                          <div class="media-title">Adalberto Costa</div>
                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                        </div>
                      </li>
                    </ul>
                    <div class="text-center">
                      <a href="#" class="btn btn-primary btn-round">
                        Ver todos
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                <form method="post" class="needs-validation" novalidate="">
                  <div class="card">
                    <div class="card-header">
                      <h4>Quick Draft</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                        <div class="invalid-feedback">
                          Please fill in the title
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Content</label>
                        <textarea class="summernote-simple"></textarea>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary">Save Draft</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <a href="#" class="btn btn-primary">View All</a>
                    </div>
                    <h4>Latest Posts</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>                         
                          <tr>
                            <td>
                              Introduction Laravel 5
                              <div class="table-links">
                                in <a href="#">Web Development</a>
                                <div class="bullet"></div>
                                <a href="#">View</a>
                              </div>
                            </td>
                            <td>
                              <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                            </td>
                            <td>
                              <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                              <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Laravel 5 Tutorial - Installation
                              <div class="table-links">
                                in <a href="#">Web Development</a>
                                <div class="bullet"></div>
                                <a href="#">View</a>
                              </div>
                            </td>
                            <td>
                              <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                            </td>
                            <td>
                              <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                              <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Laravel 5 Tutorial - MVC
                              <div class="table-links">
                                in <a href="#">Web Development</a>
                                <div class="bullet"></div>
                                <a href="#">View</a>
                              </div>
                            </td>
                            <td>
                              <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                            </td>
                            <td>
                              <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                              <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Laravel 5 Tutorial - Migration
                              <div class="table-links">
                                in <a href="#">Web Development</a>
                                <div class="bullet"></div>
                                <a href="#">View</a>
                              </div>
                            </td>
                            <td>
                              <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                            </td>
                            <td>
                              <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                              <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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