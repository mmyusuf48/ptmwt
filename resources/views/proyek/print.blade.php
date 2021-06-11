<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
</head>
<body>
  <?php
  $done = 0;
  $notDone = 0;
  $onProgress = 0;
?>
  <div class="card">
    <div class="container">
      <div class="row">
          <div class="col-sm-12 ">
              <h1><i class="fas fa-tasks mr-3 mt-5"></i>Data Proyek</h1>
              <hr class="bg-dark">
              <div class="row">
                <div class="col-sm-4 mt-5">
                  <p class="card-title float-none w-100 mt-5">
                    <i class="fas fa-caret-right "><strong class="ml-2"> Proyek : </strong>{{ $proyek -> nama_proyek }}</i>
                  </p>
                  <p class="card-title float-none w-100">
                    <i class="fas fa-caret-right "><strong class="ml-2"> Tanggal Mulai : </strong>{{ $proyek -> tanggal_mulai }}</i>
                  </p>
                  <p class="card-title float-none w-100">
                    <i class="fas fa-caret-right "><strong class="ml-2"> Tanggal Berakhir : </strong>{{ $proyek -> tanggal_berakhir }}</i>
                  </p>
                </div>
                <div class="col-sm-4 mt-5">
                  @foreach ( $manager as $row)
                    <p value="{{ $row -> id_manager}}" class="mt-5">
                      <i class="fas fa-caret-right "><strong class="ml-2"> Penanggung jawab : </strong>  {{ $row -> nama_manager }}</i> 
                    </p>
                  @endforeach
                  @foreach ( $vendor as $row)
                    <p value="{{ $row -> id_vendor}}">
                      <i class="fas fa-caret-right "><strong class="ml-2"> Vendor : </strong>  {{ $row -> nama_vendor }} </i>
                    </p>
                  @endforeach
                  </div>
                <div class="col-sm-4">
                  <div class="card-body">
                    <canvas id="donutChart" style="min-height: 200px; height: 200px; max-height: 200px; max-width: 100%;"></canvas>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <ul class="list-group ">
            <li class="list-group-item ">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-sm-3 border-right">
                  <div class="description-block">
                    <h3 class="font-italic text-capitalize">Job Desk</h3>
                  </div>
                </div>
                <div class="col-sm-3 border-right">
                  <div class="description-block">
                    <h3 class="font-italic text-capitalize">Status</h3>
                  </div>
                </div>
                <div class="col-sm-3 border-right">
                  <div class="description-block">
                    <h3 class="font-italic text-capitalize">Image</h3>
                  </div>
                    </div>
                    <div class="col-sm-3 ">
                      <div class="description-block">
                        <h3 class="font-italic text-capitalize">Keterangan</h3>
                      </div>
                    </div>
                  </div>    
                </li>
              </ul>
            </div>
      </div>
      <form method="POST" action="{{ url('/proyek/update')}}" enctype="multipart/form-data">
      @csrf
      <ul class="list-group ">
      @foreach ( $deskripsi as $index => $row)
      <input type="hidden" name="id_deskripsi[]" value="{{$row->id_deskripsi}}">
          <li class="list-group-item ">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-sm-3 border-right">
              <div class="description-block ">
                  <p>{{ $row->deskripsi}}</p>
              </div>
            </div>
            <div class="col-sm-3 border-right">
              <div class="description-block ">
                  <p class="card-title float-none w-100 ">
                  @if( $row -> status == 1)
                    <?php $done = $done+1; ?>
                    done
                  @elseif( $row -> status == 2)
                    <?php $onProgress = $onProgress+1; ?>
                    on progres
                  @elseif($row -> status == 3)
                    <?php $notDone = $notDone+1; ?>
                    not done
                  @endif 
                  </p>
              </div>
            </div>
            <div class="col-sm-3 border-right">
              <div class="description-block">
                <img src="{{ asset('assets/proyek/'.$row->image) }}" class="w-100" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="description-block">
                <p class="card-title float-none w-100 ">{{ $row -> keterangan }}</p>
              </div>
            </div>
            </div>    
          </li>
      @endforeach
      </ul>
    </form>
  </div>
</div>
<script></script>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
</body>
</html>
  <?php
  $total = $done+$onProgress+$notDone;
  $done2 = ($done/$total)*100;
  $onProgress2 = ($onProgress/$total)*100;
  $notDone2 = ($notDone/$total)*100;
  ?>
  <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
  <script>
    $(document).ready(function(){
      setTimeout(function(){ 
      window.addEventListener("load", window.print());
       }, 1000);
    })
    $(function () {
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutData        = {
        labels: [
            'done',
            'on progres',
            'not done',
        ],
        datasets: [
          {
            data: [{{ round($done2) }} ,{{ round($onProgress2) }},{{ round($notDone2) }}],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
        tooltips: {
          callbacks: {
            title: function(tooltipItem, data) {
              return donutData['labels'][tooltipItem[0]['index']];
            },
            label: function(tooltipItem, data) {
              return donutData.datasets[0]['data'][tooltipItem['index']] +'%';
            },
            // afterLabel: function(tooltipItem, data) {
            //   return '('+ donutData.datasets[0]['data'][tooltipItem['index']] +'%)';
            // }
          }
        }
      }
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })
    })
  </script>