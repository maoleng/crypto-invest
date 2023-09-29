@extends('theme.master')

@section('title') Dashboard @endsection

@section('body')
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row g-3 mb-3 row-deck">
                <div class="col-xl-7 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary border-bottom-0 py-3">
                            <h6 class="card-title mb-0 text-light">My Wallet</h6>
                        </div>

                        <div class="row card-body">
                            <div class="col-lg-5">
                                <div>Balance</div>
                                <h3>
                                    <span id="t-balance">*************</span>
                                    <button id="btn-toggle_balance" class="btn btn-outline-primary">
                                        <i id="i-toggle_balance" style="vertical-align: middle;" class="icofont-eye-alt"></i>
                                    </button>
                                </h3>
                                <div class="mt-3 pt-3 text-uppercase text-muted border-top pt-2 small">Cash</div>
                                <h5><span id="t-cash_balance">*************</span></h5>
                                <div class="mt-3 text-uppercase text-muted small">Crypto</div>
                                <h5><span id="t-crypto_balance">*************</span></h5>
                                <div class="mt-3 text-uppercase text-muted small">ONUS</div>
                                <h5><span id="t-onus_balance">*************</span></h5>
                            </div>
                            <div class="col-lg-7">
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary border-bottom-0 py-3">
                            <h6 class="card-title mb-0 text-light">Earn / Spend</h6>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Today" role="tab">Today</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Week" role="tab">Week</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Month" role="tab">Month</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Year" role="tab">Year</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#All" role="tab">All</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="Today">
                                    <div>Earn</div>
                                    <h3>{!! formatVND($overview->earn_today) !!}</h3>
                                    <div>Spend</div>
                                    <h3>{!! formatVND($overview->spend_today) !!}</h3>
                                </div>
                                <div class="tab-pane fade" id="Week">
                                    <div>Earn</div>
                                    <h3>{!! formatVND($overview->earn_week) !!}</h3>
                                    <div>Spend</div>
                                    <h3>{!! formatVND($overview->spend_week) !!}</h3>
                                </div>
                                <div class="tab-pane fade" id="Month">
                                    <div>Earn</div>
                                    <h3>{!! formatVND($overview->earn_month) !!}</h3>
                                    <div>Spend</div>
                                    <h3>{!! formatVND($overview->spend_month) !!}</h3>
                                </div>
                                <div class="tab-pane fade" id="Year">
                                    <div>Earn</div>
                                    <h3>{!! formatVND($overview->earn_year) !!}</h3>
                                    <div>Spend</div>
                                    <h3>{!! formatVND($overview->spend_year) !!}</h3>
                                </div>
                                <div class="tab-pane fade" id="All">
                                    <div>Earn</div>
                                    <h3>{!! formatVND($overview->total_earn) !!}</h3>
                                    <div>Spend</div>
                                    <h3>{!! formatVND($overview->total_spend) !!}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/page/widget.js"></script>
    <script src="assets/js/page/chart-apex.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn-toggle_balance').on('click', function () {
                const cur = $('#i-toggle_balance').hasClass('icofont-eye-alt')
                if (cur === true) {
                    $('#i-toggle_balance').removeClass('icofont-eye-alt').addClass('icofont-eye-blocked')
                    $('#t-balance').html('{!! formatVND($balance) !!}')
                    $('#t-cash_balance').html('{!! formatVND($cash_balance) !!}')
                    $('#t-crypto_balance').html('{!! formatVND($crypto_balance) !!}')
                    $('#t-onus_balance').html('{!! formatVND($onus_balance) !!}')
                } else {
                    $('#i-toggle_balance').removeClass('icofont-eye-blocked').addClass('icofont-eye-alt')
                    $('#t-balance').html('*************')
                    $('#t-cash_balance').html('*************')
                    $('#t-crypto_balance').html('*************')
                    $('#t-onus_balance').html('*************')
                }
            })


            var options = {
                series: [{{ "$cash_balance, $crypto_balance, $onus_balance" }}],
                chart: {
                    type: 'donut',
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                labels: ['Cash', 'Crypto', 'ONUS'],
                dataLabels: {
                    textAnchor: 'middle',
                    distributed: false,
                    offsetX: 0,
                    offsetY: 0,
                    style: {
                        fontSize: '16px',
                        fontFamily: 'Helvetica, Arial, sans-serif',
                        fontWeight: 600,
                        colors: ['white']
                    },
                    background: {
                        enabled: true,
                        foreColor: 'black',
                        padding: 5,
                        borderRadius: 2,
                        borderWidth: 1,
                        borderColor: '#fff',
                        opacity: 1,
                        dropShadow: {
                            enabled: true,
                            top: 1,
                            left: 1,
                            blur: 1,
                            color: '#000',
                            opacity: 1
                        }
                    },
                    dropShadow: {
                        enabled: false,
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();


        });
    </script>
@endsection
