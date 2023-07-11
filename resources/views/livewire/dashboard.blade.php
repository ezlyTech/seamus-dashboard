 <main class="main-content position-relative h-100 border-radius-lg">
    <div class="container-fluid py-4">
            <!-- Filters -->
            {{-- <div class="row">
                <div class="col-12">
                    <form action="" method="GET" style="width: 100%">
                        <div style="display:flex; justify-content:space-between;" class="flex-wrap">
                            <div style="width:fit-content" class="d-flex flex-wrap">
                                <div class="mx-2">
                                    <label for="">From</label>
                                    <input wire:model="startDate" type="date" class="form-control">
                                </div>
                                <div class="mx-2">
                                    <label for="">To</label>
                                    <input wire:model="endDate" type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
            </div> --}}
      

      <!-- 3 Cards -->      
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Orders</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $count }}
                      <span class="text-success text-sm font-weight-bolder">{{ $count }}</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Average Value</p>
                    <h5 class="font-weight-bolder mb-0">
                      ₱ {{ $average }}
                      <span class="text-success text-sm font-weight-bolder">12%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Gross Sales</p>
                    <h5 class="font-weight-bolder mb-0">
                      ₱ {{ $totalPrice }}
                      <span class="text-success text-sm font-weight-bolder">21%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Charts -->
      <div class="row py-4">
        {{-- Gross Sales Monthly --}}
        <div class="col-lg-5 mb-lg-0 mb-4">
          <div class="card h-100">
              <div class="card-body p-3">
                  <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                      <div class="chart">
                          <canvas id="chart-bars" class="chart-canvas" height="270px"></canvas>
                      </div>
                  </div>
                  <h6 class="ms-2 mt-4 mb-0"> Gross Sales Monthly</h6>
                  <p class="text-sm ms-2"> (<span class="font-weight-bolder">+23%</span>) than last week </p>
              </div>
          </div>
        </div>

        {{-- Gross Chart --}}
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header pb-0">
                    <h6>2023 Gross Chart</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">68%</span> increased
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300px"></canvas>
                    </div>
                </div>
            </div>
        </div>
      </div>

      
      <div class="row">
        <!-- Order's Status -->
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Order's Status</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2 overflow-auto" style="max-height: 350px">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-end" style="padding-right: 20px">Order</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-end" style="padding-right: 20px">Avg. Value</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-end" style="padding-right: 20px">Gross Sales</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ( $statuses->count() > 0 )
                      @foreach ( $statuses as $status )
                        <tr>
                          <td class="align-middle text-sm">
                            <span class="badge badge-sm badge-default
                            {{ $status->status_name == 'Delivered' ? 'delivered' : ''  }}
                            {{ $status->status_name == 'On Delivery' ? 'on-delivery' : ''  }}
                            {{ $status->status_name == 'In-Transit' ? 'in-transit' : ''  }}
                            {{ $status->status_name == 'Incomplete' ? 'incomplete' : ''  }}
                            {{ $status->status_name == 'Picked-Up' ? 'picked-up' : ''  }}
                            {{ $status->status_name == 'Problematic' ? 'problematic' : ''  }}
                            {{ $status->status_name == 'Reserved' ? 'reserved' : ''  }}
                            {{ $status->status_name == 'Returned' ? 'returned' : ''  }}
                            {{ $status->status_name == 'ODZ' ? 'odz' : ''  }}
                            {{ $status->status_name == 'RTS' ? 'rts' : ''  }}
                            {{ $status->status_name == 'Detained' ? 'detained' : ''  }}
                            ">{{ $status->status_name }}</span>
                          </td>
                          <td class="text-end">
                            <p class="text-sm font-weight-bold mb-0">{{ $statusCounts[$status->id] ?? 0 }}</p>
                          </td>
                          <td class="text-end">
                            <p class="text-sm font-weight-bold mb-0">₱ {{ $statusAverages[$status->id] ?? 0 }}</p>
                          </td>
                          <td class="text-end">
                            <p class="text-sm font-weight-bold mb-0">₱ {{ $statusTotalPrices[$status->id] ?? 0 }}</p>
                          </td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                          <td>
                              <p class="text-xs font-weight-bold mb-0">No result</p>
                          </td>
                      </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Courier's Status -->
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Courier's Status</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2 overflow-auto" style="max-height: 350px">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Courier</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-end" style="padding-right: 20px">Order</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-end" style="padding-right: 20px">Avg. Value</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-end" style="padding-right: 20px">Gross Sales</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ( $couriers->count() > 0 )
                      @foreach ( $couriers as $courier )
                        <tr>
                          <td class="align-middle text-sm">
                            <p class="text-sm font-weight-bold mb-0 text-uppercase">{{ $courier->courier_name }}</p>
                          </td>
                          <td class="text-end">
                            <p class="text-sm font-weight-bold mb-0">{{ $courierCounts[$courier->id] ?? 0 }}</p>
                          </td>
                          <td class="text-end">
                            <p class="text-sm font-weight-bold mb-0">₱ {{ $courierAverages[$courier->id] ?? 0 }}</p>
                          </td>
                          <td class="text-end">
                            <p class="text-sm font-weight-bold mb-0">₱ {{ $courierTotalPrices[$courier->id] ?? 0 }}</p>
                          </td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                          <td>
                              <p class="text-xs font-weight-bold mb-0">No result</p>
                          </td>
                      </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- CSR Activity -->
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>CSR Activity</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2 overflow-auto" style="max-height: 350px">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CSR Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-end" style="padding-right: 20px">Order</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-end" style="padding-right: 20px">Avg. Value</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-end" style="padding-right: 20px">Gross Sales</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ( $csrData->count() > 0 )
                      @foreach ( $csrData as $csrName => $data )
                        <tr>
                          <td class="align-middle text-sm">
                            <p class="text-sm font-weight-bold mb-0 text-uppercase">{{ $csrName }}</p>
                          </td>
                          <td class="text-end">
                            <p class="text-sm font-weight-bold mb-0">{{ $data['count'] }}</p>
                          </td>
                          <td class="text-end">
                            <p class="text-sm font-weight-bold mb-0">₱ {{ $data['average']}}</p>
                          </td>
                          <td class="text-end">
                            <p class="text-sm font-weight-bold mb-0">₱ {{ $data['totalPrice'] }}</p>
                          </td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                          <td>
                              <p class="text-xs font-weight-bold mb-0">No result</p>
                          </td>
                      </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="/assets/js/plugins/chartjs.min.js"></script>
  <script src="/assets/js/plugins/Chart.extension.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Nov" ,"Dec" ,"Jan", "Feb", "March", "April", "May", "June", "July"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        tooltips: {
          enabled: true,
          mode: "index",
          intersect: false,
        },
        scales: {
          yAxes: [{
            gridLines: {
              display: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 0,
              fontSize: 14,
              lineHeight: 3,
              fontColor: "#fff",
              fontStyle: 'normal',
              fontFamily: "Open Sans",
            },
          }, ],
          xAxes: [{
            gridLines: {
              display: false,
            },
            ticks: {
              display: false,
              padding: 20,
            },
          }, ],
        },
      },
    });

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(253,235,173,0.4)');
    gradientStroke1.addColorStop(0.2, 'rgba(245,57,57,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(255,214,61,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.4)');
    gradientStroke2.addColorStop(0.2, 'rgba(245,57,57,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(255,214,61,0)'); //purple colors


    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Nov" ,"Dec" ,"Jan", "Feb", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Gross Profit",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#fbcf33",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Gross Sales",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#f53939",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6

          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        tooltips: {
          enabled: true,
          mode: "index",
          intersect: false,
        },
        scales: {
          yAxes: [{
            gridLines: {
              borderDash: [2],
              borderDashOffset: [2],
              color: '#dee2e6',
              zeroLineColor: '#dee2e6',
              zeroLineWidth: 1,
              zeroLineBorderDash: [2],
              drawBorder: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              fontSize: 11,
              fontColor: '#adb5bd',
              lineHeight: 3,
              fontStyle: 'normal',
              fontFamily: "Open Sans",
            },
          }, ],
          xAxes: [{
            gridLines: {
              zeroLineColor: 'rgba(0,0,0,0)',
              display: false,
            },
            ticks: {
              padding: 10,
              fontSize: 11,
              fontColor: '#adb5bd',
              lineHeight: 3,
              fontStyle: 'normal',
              fontFamily: "Open Sans",
            },
          }, ],
        },
      },
    });
  </script>
