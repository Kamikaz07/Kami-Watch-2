          <br>

          <h2>Mapa</h2>
          <br>
            
            
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Map</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="map" style="overflow: hidden">
               
                    <?php
                   require("./map/user-map.php");
                   ?>
                </div>
                    </div>
                  </div>
                </div><!-- /.d-md-flex -->
            </div>
     