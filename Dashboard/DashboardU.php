
<br>
<div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dados Biometricos</h3>

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
                  
               
                    <?php
             require ('./Dados_B/charts.php');
             ?>
             
                </div>
                    </div>
                  </div>
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
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
                  
               
                    <?php
                   require("./maps/maps_uti.php");
                   ?>
                </div>
                    </div>
                  </div>
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          
            <?php
                   require("./paciente/familia.php");
                   ?>

          
    
        
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

  

    
    <script>
      
      $(function () {
    /* uPlot
     * -------
     * Here we will create a few charts using uPlot
     */

    function getSize(elementId) {
      return {
        width: document.getElementById(elementId).offsetWidth,
        height: document.getElementById(elementId).offsetHeight,
      }
    }

    let data = [
      [0, 1, 2, 3, 4, 5, 6],
      [28, 48, 40, 19, 86, 27, 90],
      [65, 59, 80, 81, 56, 55, 40]
    ];

    //--------------
    //- AREA CHART -
    //--------------

    const optsAreaChart = {
      ... getSize('areaChart'),
      scales: {
        x: {
          time: false,
        },
        y: {
          range: [0, 100],
        },
      },
      series: [
        {},
        {
          fill: 'rgba(60,141,188,0.7)',
          stroke: 'rgba(60,141,188,1)',
        },
        {
          stroke: '#c1c7d1',
          fill: 'rgba(210, 214, 222, .7)',
        },
      ],
    };

    let areaChart = new uPlot(optsAreaChart, data, document.getElementById('areaChart'));

    const optsLineChart = {
      ... getSize('lineChart'),
      scales: {
        x: {
          time: false,
        },
        y: {
          range: [0, 100],
        },
      },
      series: [
        {},
        {
          fill: 'transparent',
          width: 5,
          stroke: 'rgba(60,141,188,1)',
        },
        {
          stroke: '#c1c7d1',
          width: 5,
          fill: 'transparent',
        },
      ],
    };

    let lineChart = new uPlot(optsLineChart, data, document.getElementById('lineChart'));

    window.addEventListener("resize", e => {
      areaChart.setSize(getSize('areaChart'));
      lineChart.setSize(getSize('lineChart'));
    });
  })
  </script>