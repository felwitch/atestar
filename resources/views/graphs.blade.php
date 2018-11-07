<!DOCTYPE html>
@include('main-style'); 
  
<div id="app">
  <div class="main-wrapper">

  @include('main-header'); 

  @include('main-sidebar ');

    <div class="main-content">
          <section class="section">
            <h1 class="section-header">
              <div>Gráficos de Atendimentos</div>
            </h1>
			
			 <div class="row">
              <div class="col-lg-8 col-md-12 col-12 col-sm-12 mw-100">
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
  
            </div>
          </section>
  </div>

  @include('main-footer');

</div>
</div>


</body>
</html>