@extends('admin.layout.main')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Biểu đồ doanh thu theo ngày</h5>
                  </div>
                  <div>
                    <select class="form-select" id="year" name="year">
                      <option value="1">Tháng 1 2024</option>
                      <option value="2">Tháng 2 2024</option>
                      <option value="3">Tháng 3 2024</option>
                      <option value="4">Tháng 4 2024</option>
                      <option value="5">Tháng 5 2024</option>
                      <option value="6">Tháng 6 2024</option>
                      <option value="7">Tháng 7 2024</option>
                      <option value="8">Tháng 8 2024</option>
                      <option value="9">Tháng 9 2024</option>
                      <option value="10">Tháng 10 2024</option>
                      <option value="11">Tháng 11 2024</option>
                      <option value="12">Tháng 12 2024</option>
                    </select>
                  </div>
                </div>
                <div id="chartPaymentContainer">
                {!! $chartPayment->container() !!}
                {!! $chartPayment->script() !!}
                </div>
                <div class="mt-5" id="chartDebtContainer">
                {!! $chartDebt->container() !!}
                {!! $chartDebt->script() !!}
                </div>
                <div id="preChartContainer">
                <canvas id="barPaymentChart"></canvas>
                <canvas class="mt-5" id="barDebtChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Doanh thu hàng năm</h5>
                    <div class="row align-items-center">
                     
                      <div class="col-12">
                        <div class="d-flex justify-content-center">
                          <div style="width: 70%;height:12rem">
                                {!! $chartCircle->container() !!}
                                {!! $chartCircle->script() !!}
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <h4 class="fw-semibold mb-3">$36,358</h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            @if ($growthPercentage >0)
                            <i class="ti ti-arrow-up-left text-success"></i>
                            @elseif($growthPercentage <0)
                            <i class="ti ti-arrow-down-right text-danger"></i>
                            @else
                            <i class="ti ti-arrow-right text-danger"></i>
                            @endif
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">
                            {{ $growthMessage }}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-12">
                        <h5 class="card-title mb-9 fw-semibold">Báo cáo doanh thu theo tháng</h5>
                      </div>
                     
                    </div>
                  </div>
                  <div>
                     <div>
                        {!! $chartLine->container() !!} <!-- Thẻ này sẽ tự động hiển thị biểu đồ -->
                    </div>

                    {!! $chartLine->script() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <h5 class="card-title fw-semibold">Giao dịch gần đây</h5>
                </div>
                @foreach ($dataOrder as $item)
                <ul class="timeline-widget mb-0 position-relative mb-n5">
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">{{ \Carbon\Carbon::parse($item->updated_at)->format('m/d-H:i') }}</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">Đã xác nhận thanh toán {{$item->reservation_name}} với {{ number_format($item->payment, 0, ',', '.') }}
                    VNĐ</div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">{{ \Carbon\Carbon::parse($item->created_at)->format('m/d-H:i') }}</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Đã nhận nhận giao dịch mới <a
                        href="javascript:void(0)" class="text-primary d-block fw-normal">{{$item->order_id}}</a>
                    </div>
                  </li>
                </ul>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Assigned</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Priority</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Budget</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Elite Admin</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                            <span class="fw-normal">Project Manager</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                            <span class="fw-normal">Project Manager</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$12.8k</h6>
                        </td>
                      </tr>      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                            <span class="fw-normal">Frontend Engineer</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Hosting Press HTML</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$2.4k</h6>
                        </td>
                      </tr>                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        $('#year').change(function() {
            var month = $(this).val();
            loadChartData(month); 
        });
        $('#preChartContainer').hide()
        function loadChartData(month) {
            $.ajax({
                url: '{{ route("admin.chart.data") }}', 
                method: 'GET',
                data: { month: month }, 
                success: function(response) {
                    $('#chartPaymentContainer').hide()
                    $('#chartDebtContainer').hide()
                    $('#preChartContainer').show()
                    updatePaymentChart(response); 
                    updateDebtChart(response); 
                },
                error: function() {
                    alert('Có lỗi xảy ra khi lấy dữ liệu');
                }
            });
        }

        var barPaymentChart;
        var barDebtChart;
        function updatePaymentChart(data) {
            if (barPaymentChart) {
              barPaymentChart.destroy();
            }
            var ctx = document.getElementById('barPaymentChart').getContext('2d');
            barPaymentChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.labels, 
                    datasets: [{
                        label: 'Thanh toán',
                        data: data.payments, 
                        backgroundColor: '#7599FF', 
                    },
                   ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
        function updateDebtChart(data) {
            if (barDebtChart) {
              barDebtChart.destroy();
            }
            var ctx = document.getElementById('barDebtChart').getContext('2d');
            barDebtChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.labels, 
                    datasets: [ {
                        label: 'Nợ',
                        data: data.debts, 
                        backgroundColor: '#64C8FF', 
                    },
                   ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    </script>
@endsection
