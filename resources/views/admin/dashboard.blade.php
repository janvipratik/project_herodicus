@extends('partial.master')
@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-3 page-header-breadcrumb">
            {{-- <div>
                <p class="fw-semibold fs-18 mb-0">Welcome back, Json Taylor !</p>
                <span class="fs-semibold text-muted">Track your sales activity, leads and deals here.</span>
            </div> --}}
            <div class="btn-list mt-md-0 ">
            </div>
        </div>
        <!-- Start::page-header -->
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary">
                                            <i class="ti ti-users fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Service Master</p>
                                                <h4 class="fw-semibold mt-1">1,02,890</h4>
                                            </div>
                                            <div id="crm-total-customers" style="min-height: 40px;">
                                                <div id="apexchartsu0pxfxjw"
                                                    class="apexcharts-canvas apexchartsu0pxfxjw apexcharts-theme-light"
                                                    style="width: 100px; height: 40px;"><svg id="SvgjsSvg3004"
                                                        width="100" height="40" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG3006" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs3005">
                                                                <clipPath id="gridRectMasku0pxfxjw">
                                                                    <rect id="SvgjsRect3011" width="105.5" height="41.5"
                                                                        x="-2.75" y="-0.75" rx="0" ry="0"
                                                                        opacity="1" stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMasku0pxfxjw"></clipPath>
                                                                <clipPath id="nonForecastMasku0pxfxjw"></clipPath>
                                                                <clipPath id="gridRectMarkerMasku0pxfxjw">
                                                                    <rect id="SvgjsRect3012" width="104" height="44"
                                                                        x="-2" y="-2" rx="0" ry="0"
                                                                        opacity="1" stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3017" x1="0"
                                                                    y1="1" x2="1" y2="1">
                                                                    <stop id="SvgjsStop3018" stop-opacity="0.9"
                                                                        stop-color="rgba(66,45,112,0.9)" offset="0">
                                                                    </stop>
                                                                    <stop id="SvgjsStop3019" stop-opacity="0.9"
                                                                        stop-color="rgba(132,90,223,0.9)" offset="0.98">
                                                                    </stop>
                                                                    <stop id="SvgjsStop3020" stop-opacity="0.9"
                                                                        stop-color="rgba(132,90,223,0.9)" offset="1">
                                                                    </stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3010" x1="0" y1="0"
                                                                x2="0" y2="40" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                                height="40" fill="#b1b9c4" filter="none"
                                                                fill-opacity="0.9" stroke-width="1"></line>
                                                            <g id="SvgjsG3022" class="apexcharts-grid">
                                                                <g id="SvgjsG3023" class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3036" x1="0" y1="4"
                                                                        x2="100" y2="4" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3037" x1="0"
                                                                        y1="8" x2="100" y2="8"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3038" x1="0"
                                                                        y1="12" x2="100" y2="12"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3039" x1="0"
                                                                        y1="16" x2="100" y2="16"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3040" x1="0"
                                                                        y1="20" x2="100" y2="20"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3041" x1="0"
                                                                        y1="24" x2="100" y2="24"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3042" x1="0"
                                                                        y1="28" x2="100" y2="28"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3043" x1="0"
                                                                        y1="32" x2="100" y2="32"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3044" x1="0"
                                                                        y1="36" x2="100" y2="36"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                </g>
                                                                <g id="SvgjsG3024" class="apexcharts-gridlines-vertical"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3026" x1="0"
                                                                        y1="0" x2="0" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3027" x1="12.5"
                                                                        y1="0" x2="12.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3028" x1="25"
                                                                        y1="0" x2="25" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3029" x1="37.5"
                                                                        y1="0" x2="37.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3030" x1="50"
                                                                        y1="0" x2="50" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3031" x1="62.5"
                                                                        y1="0" x2="62.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3032" x1="75"
                                                                        y1="0" x2="75" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3033" x1="87.5"
                                                                        y1="0" x2="87.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3034" x1="100"
                                                                        y1="0" x2="100" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                </g>
                                                                <line id="SvgjsLine3047" x1="0" y1="40"
                                                                    x2="100" y2="40" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3046" x1="0" y1="1"
                                                                    x2="0" y2="40" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3025" class="apexcharts-grid-borders"
                                                                style="display: none;">
                                                                <line id="SvgjsLine3035" x1="0" y1="0"
                                                                    x2="100" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine3045" x1="0" y1="40"
                                                                    x2="100" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG3013"
                                                                class="apexcharts-line-series apexcharts-plot-series">
                                                                <g id="SvgjsG3014" class="apexcharts-series"
                                                                    seriesName="Value" data:longestSeries="true"
                                                                    rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath3021"
                                                                        d="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="url(#SvgjsLinearGradient3017)"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="1.5" stroke-dasharray="0"
                                                                        class="apexcharts-line" index="0"
                                                                        clip-path="url(#gridRectMasku0pxfxjw)"
                                                                        pathTo="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                                        pathFrom="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3015"
                                                                        class="apexcharts-series-markers-wrap"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <g id="SvgjsG3016" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3048" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                            </line>
                                                            <line id="SvgjsLine3049" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3050" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG3051" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG3052" class="apexcharts-point-annotations"></g>
                                                            <g id="SvgjsG3053" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3054" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3007" class="apexcharts-annotations"></g>
                                                        <g id="SvgjsG3064" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <rect id="SvgjsRect3009" width="0" height="0" x="0"
                                                            y="0" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fefefe"></rect>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-primary" href="javascript:void(0);">View All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-success fw-semibold">+40%</p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary">
                                            <i class="ti ti-users fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Video Category</p>
                                                <h4 class="fw-semibold mt-1">1,02,890</h4>
                                            </div>
                                            <div id="crm-total-customers" style="min-height: 40px;">
                                                <div id="apexchartsu0pxfxjw"
                                                    class="apexcharts-canvas apexchartsu0pxfxjw apexcharts-theme-light"
                                                    style="width: 100px; height: 40px;"><svg id="SvgjsSvg3004"
                                                        width="100" height="40" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG3006" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs3005">
                                                                <clipPath id="gridRectMasku0pxfxjw">
                                                                    <rect id="SvgjsRect3011" width="105.5"
                                                                        height="41.5" x="-2.75" y="-0.75" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMasku0pxfxjw"></clipPath>
                                                                <clipPath id="nonForecastMasku0pxfxjw"></clipPath>
                                                                <clipPath id="gridRectMarkerMasku0pxfxjw">
                                                                    <rect id="SvgjsRect3012" width="104"
                                                                        height="44" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3017"
                                                                    x1="0" y1="1" x2="1"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3018" stop-opacity="0.9"
                                                                        stop-color="rgba(66,45,112,0.9)" offset="0">
                                                                    </stop>
                                                                    <stop id="SvgjsStop3019" stop-opacity="0.9"
                                                                        stop-color="rgba(132,90,223,0.9)" offset="0.98">
                                                                    </stop>
                                                                    <stop id="SvgjsStop3020" stop-opacity="0.9"
                                                                        stop-color="rgba(132,90,223,0.9)" offset="1">
                                                                    </stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3010" x1="0" y1="0"
                                                                x2="0" y2="40" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                                height="40" fill="#b1b9c4" filter="none"
                                                                fill-opacity="0.9" stroke-width="1"></line>
                                                            <g id="SvgjsG3022" class="apexcharts-grid">
                                                                <g id="SvgjsG3023" class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3036" x1="0"
                                                                        y1="4" x2="100" y2="4"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3037" x1="0"
                                                                        y1="8" x2="100" y2="8"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3038" x1="0"
                                                                        y1="12" x2="100" y2="12"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3039" x1="0"
                                                                        y1="16" x2="100" y2="16"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3040" x1="0"
                                                                        y1="20" x2="100" y2="20"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3041" x1="0"
                                                                        y1="24" x2="100" y2="24"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3042" x1="0"
                                                                        y1="28" x2="100" y2="28"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3043" x1="0"
                                                                        y1="32" x2="100" y2="32"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3044" x1="0"
                                                                        y1="36" x2="100" y2="36"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                </g>
                                                                <g id="SvgjsG3024" class="apexcharts-gridlines-vertical"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3026" x1="0"
                                                                        y1="0" x2="0" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3027" x1="12.5"
                                                                        y1="0" x2="12.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3028" x1="25"
                                                                        y1="0" x2="25" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3029" x1="37.5"
                                                                        y1="0" x2="37.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3030" x1="50"
                                                                        y1="0" x2="50" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3031" x1="62.5"
                                                                        y1="0" x2="62.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3032" x1="75"
                                                                        y1="0" x2="75" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3033" x1="87.5"
                                                                        y1="0" x2="87.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3034" x1="100"
                                                                        y1="0" x2="100" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                </g>
                                                                <line id="SvgjsLine3047" x1="0" y1="40"
                                                                    x2="100" y2="40" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3046" x1="0" y1="1"
                                                                    x2="0" y2="40" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3025" class="apexcharts-grid-borders"
                                                                style="display: none;">
                                                                <line id="SvgjsLine3035" x1="0" y1="0"
                                                                    x2="100" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine3045" x1="0" y1="40"
                                                                    x2="100" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG3013"
                                                                class="apexcharts-line-series apexcharts-plot-series">
                                                                <g id="SvgjsG3014" class="apexcharts-series"
                                                                    seriesName="Value" data:longestSeries="true"
                                                                    rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath3021"
                                                                        d="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="url(#SvgjsLinearGradient3017)"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="1.5" stroke-dasharray="0"
                                                                        class="apexcharts-line" index="0"
                                                                        clip-path="url(#gridRectMasku0pxfxjw)"
                                                                        pathTo="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                                        pathFrom="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3015"
                                                                        class="apexcharts-series-markers-wrap"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <g id="SvgjsG3016" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3048" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                            </line>
                                                            <line id="SvgjsLine3049" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3050" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG3051" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG3052" class="apexcharts-point-annotations"></g>
                                                            <g id="SvgjsG3053" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3054" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3007" class="apexcharts-annotations"></g>
                                                        <g id="SvgjsG3064" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <rect id="SvgjsRect3009" width="0" height="0" x="0"
                                                            y="0" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fefefe"></rect>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-primary" href="javascript:void(0);">View All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-success fw-semibold">+40%</p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-secondary">
                                            <i class="ti ti-wallet fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Mange Subscriptions</p>
                                                <h4 class="fw-semibold mt-1">$56,562</h4>
                                            </div>
                                            <div id="crm-total-revenue" style="min-height: 40px;">
                                                <div id="apexcharts065cy6f8g"
                                                    class="apexcharts-canvas apexcharts065cy6f8g apexcharts-theme-light"
                                                    style="width: 100px; height: 40px;"><svg id="SvgjsSvg3065"
                                                        width="100" height="40" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG3067" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs3066">
                                                                <clipPath id="gridRectMask065cy6f8g">
                                                                    <rect id="SvgjsRect3072" width="105.5"
                                                                        height="41.5" x="-2.75" y="-0.75" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask065cy6f8g"></clipPath>
                                                                <clipPath id="nonForecastMask065cy6f8g"></clipPath>
                                                                <clipPath id="gridRectMarkerMask065cy6f8g">
                                                                    <rect id="SvgjsRect3073" width="104"
                                                                        height="44" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3078"
                                                                    x1="0" y1="1" x2="1"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3079" stop-opacity="0.9"
                                                                        stop-color="rgba(18,92,115,0.9)" offset="0">
                                                                    </stop>
                                                                    <stop id="SvgjsStop3080" stop-opacity="0.9"
                                                                        stop-color="rgba(35,183,229,0.9)" offset="0.98">
                                                                    </stop>
                                                                    <stop id="SvgjsStop3081" stop-opacity="0.9"
                                                                        stop-color="rgba(35,183,229,0.9)" offset="1">
                                                                    </stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3071" x1="0" y1="0"
                                                                x2="0" y2="40" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                                height="40" fill="#b1b9c4" filter="none"
                                                                fill-opacity="0.9" stroke-width="1"></line>
                                                            <g id="SvgjsG3083" class="apexcharts-grid">
                                                                <g id="SvgjsG3084" class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3097" x1="0"
                                                                        y1="4" x2="100" y2="4"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3098" x1="0"
                                                                        y1="8" x2="100" y2="8"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3099" x1="0"
                                                                        y1="12" x2="100" y2="12"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3100" x1="0"
                                                                        y1="16" x2="100" y2="16"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3101" x1="0"
                                                                        y1="20" x2="100" y2="20"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3102" x1="0"
                                                                        y1="24" x2="100" y2="24"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3103" x1="0"
                                                                        y1="28" x2="100" y2="28"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3104" x1="0"
                                                                        y1="32" x2="100" y2="32"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3105" x1="0"
                                                                        y1="36" x2="100" y2="36"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                </g>
                                                                <g id="SvgjsG3085" class="apexcharts-gridlines-vertical"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3087" x1="0"
                                                                        y1="0" x2="0" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3088" x1="12.5"
                                                                        y1="0" x2="12.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3089" x1="25"
                                                                        y1="0" x2="25" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3090" x1="37.5"
                                                                        y1="0" x2="37.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3091" x1="50"
                                                                        y1="0" x2="50" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3092" x1="62.5"
                                                                        y1="0" x2="62.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt" class="apexcharts-gridline">
                                                                    </line>
                                                                    <line id="SvgjsLine3093" x1="75"
                                                                        y1="0" x2="75" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3094" x1="87.5"
                                                                        y1="0" x2="87.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3095" x1="100"
                                                                        y1="0" x2="100" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <line id="SvgjsLine3108" x1="0" y1="40"
                                                                    x2="100" y2="40" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3107" x1="0" y1="1"
                                                                    x2="0" y2="40" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3086" class="apexcharts-grid-borders"
                                                                style="display: none;">
                                                                <line id="SvgjsLine3096" x1="0" y1="0"
                                                                    x2="100" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine3106" x1="0" y1="40"
                                                                    x2="100" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG3074"
                                                                class="apexcharts-line-series apexcharts-plot-series">
                                                                <g id="SvgjsG3075" class="apexcharts-series"
                                                                    seriesName="Value" data:longestSeries="true"
                                                                    rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath3082"
                                                                        d="M 0 8C 4.375 8 8.125 17.6 12.5 17.6C 16.875 17.6 20.625 8 25 8C 29.375 8 33.125 4.799999999999997 37.5 4.799999999999997C 41.875 4.799999999999997 45.625 25.6 50 25.6C 54.375 25.6 58.125 20.8 62.5 20.8C 66.875 20.8 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="url(#SvgjsLinearGradient3078)"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="1.5" stroke-dasharray="0"
                                                                        class="apexcharts-line" index="0"
                                                                        clip-path="url(#gridRectMask065cy6f8g)"
                                                                        pathTo="M 0 8C 4.375 8 8.125 17.6 12.5 17.6C 16.875 17.6 20.625 8 25 8C 29.375 8 33.125 4.799999999999997 37.5 4.799999999999997C 41.875 4.799999999999997 45.625 25.6 50 25.6C 54.375 25.6 58.125 20.8 62.5 20.8C 66.875 20.8 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                                        pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3076"
                                                                        class="apexcharts-series-markers-wrap"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <g id="SvgjsG3077" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3109" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                            </line>
                                                            <line id="SvgjsLine3110" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3111" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG3112" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG3113" class="apexcharts-point-annotations"></g>
                                                            <g id="SvgjsG3114" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3115" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3068" class="apexcharts-annotations"></g>
                                                        <g id="SvgjsG3125" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <rect id="SvgjsRect3070" width="0" height="0" x="0"
                                                            y="0" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fefefe"></rect>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-secondary" href="javascript:void(0);">View All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-success fw-semibold">+25%</p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-8">
                <div class="row">
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                < <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-success">
                                            <i class="ti ti-wave-square fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Conversion Ratio</p>
                                                <h4 class="fw-semibold mt-1">12.08%</h4>
                                            </div>
                                            <div id="crm-conversion-ratio" style="min-height: 40px;">
                                                <div id="apexchartsr7l3zvn3i"
                                                    class="apexcharts-canvas apexchartsr7l3zvn3i apexcharts-theme-light"
                                                    style="width: 100px; height: 40px;"><svg id="SvgjsSvg6404"
                                                        width="100" height="40"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG6406" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs6405">
                                                                <clipPath id="gridRectMaskr7l3zvn3i">
                                                                    <rect id="SvgjsRect6411" width="105.5"
                                                                        height="41.5" x="-2.75" y="-0.75"
                                                                        rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskr7l3zvn3i"></clipPath>
                                                                <clipPath id="nonForecastMaskr7l3zvn3i"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskr7l3zvn3i">
                                                                    <rect id="SvgjsRect6412" width="104"
                                                                        height="44" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient6417"
                                                                    x1="0" y1="1" x2="1"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop6418" stop-opacity="0.9"
                                                                        stop-color="rgba(19,96,74,0.9)" offset="0">
                                                                    </stop>
                                                                    <stop id="SvgjsStop6419" stop-opacity="0.9"
                                                                        stop-color="rgba(38,191,148,0.9)"
                                                                        offset="0.98"></stop>
                                                                    <stop id="SvgjsStop6420" stop-opacity="0.9"
                                                                        stop-color="rgba(38,191,148,0.9)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine6410" x1="0" y1="0"
                                                                x2="0" y2="40" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="40" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9" stroke-width="1">
                                                            </line>
                                                            <g id="SvgjsG6422" class="apexcharts-grid">
                                                                <g id="SvgjsG6423"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine6436" x1="0"
                                                                        y1="4" x2="100" y2="4"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6437" x1="0"
                                                                        y1="8" x2="100" y2="8"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6438" x1="0"
                                                                        y1="12" x2="100" y2="12"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6439" x1="0"
                                                                        y1="16" x2="100" y2="16"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6440" x1="0"
                                                                        y1="20" x2="100" y2="20"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6441" x1="0"
                                                                        y1="24" x2="100" y2="24"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6442" x1="0"
                                                                        y1="28" x2="100" y2="28"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6443" x1="0"
                                                                        y1="32" x2="100" y2="32"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6444" x1="0"
                                                                        y1="36" x2="100" y2="36"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG6424" class="apexcharts-gridlines-vertical"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine6426" x1="0"
                                                                        y1="0" x2="0" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6427" x1="12.5"
                                                                        y1="0" x2="12.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6428" x1="25"
                                                                        y1="0" x2="25" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6429" x1="37.5"
                                                                        y1="0" x2="37.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6430" x1="50"
                                                                        y1="0" x2="50" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6431" x1="62.5"
                                                                        y1="0" x2="62.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6432" x1="75"
                                                                        y1="0" x2="75" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6433" x1="87.5"
                                                                        y1="0" x2="87.5" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine6434" x1="100"
                                                                        y1="0" x2="100" y2="40"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <line id="SvgjsLine6447" x1="0" y1="40"
                                                                    x2="100" y2="40" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine6446" x1="0" y1="1"
                                                                    x2="0" y2="40" stroke="transparent"
                                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG6425" class="apexcharts-grid-borders"
                                                                style="display: none;">
                                                                <line id="SvgjsLine6435" x1="0" y1="0"
                                                                    x2="100" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine6445" x1="0" y1="40"
                                                                    x2="100" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG6413"
                                                                class="apexcharts-line-series apexcharts-plot-series">
                                                                <g id="SvgjsG6414" class="apexcharts-series"
                                                                    seriesName="Value" data:longestSeries="true"
                                                                    rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath6421"
                                                                        d="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 17.6 50 17.6C 54.375 17.6 58.125 9.600000000000001 62.5 9.600000000000001C 66.875 9.600000000000001 70.625 24 75 24C 79.375 24 83.125 0 87.5 0C 91.875 0 95.625 20.8 100 20.8"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="url(#SvgjsLinearGradient6417)"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="1.5" stroke-dasharray="0"
                                                                        class="apexcharts-line" index="0"
                                                                        clip-path="url(#gridRectMaskr7l3zvn3i)"
                                                                        pathTo="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 17.6 50 17.6C 54.375 17.6 58.125 9.600000000000001 62.5 9.600000000000001C 66.875 9.600000000000001 70.625 24 75 24C 79.375 24 83.125 0 87.5 0C 91.875 0 95.625 20.8 100 20.8"
                                                                        pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG6415"
                                                                        class="apexcharts-series-markers-wrap"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <g id="SvgjsG6416" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine6448" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                            </line>
                                                            <line id="SvgjsLine6449" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG6450" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG6451" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG6452" class="apexcharts-point-annotations"></g>
                                                            <g id="SvgjsG6453" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG6454" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG6407" class="apexcharts-annotations"></g>
                                                        <g id="SvgjsG6464" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <rect id="SvgjsRect6409" width="0" height="0" x="0"
                                                            y="0" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fefefe"></rect>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-success" href="javascript:void(0);">View All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-danger fw-semibold">-12%</p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-6 col-md-6">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-top justify-content-between">
                                <div>
                                    <span class="avatar avatar-md avatar-rounded bg-warning">
                                        <i class="ti ti-briefcase fs-16"></i>
                                    </span>
                                </div>
                                <div class="flex-fill ms-3">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <div>
                                            <p class="text-muted mb-0">Total Deals</p>
                                            <h4 class="fw-semibold mt-1">2,543</h4>
                                        </div>
                                        <div id="crm-total-deals" style="min-height: 40px;">
                                            <div id="apexchartsdv822i5x"
                                                class="apexcharts-canvas apexchartsdv822i5x apexcharts-theme-light"
                                                style="width: 100px; height: 40px;"><svg id="SvgjsSvg2097"
                                                    width="100" height="40" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG2099" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs2098">
                                                            <clipPath id="gridRectMaskdv822i5x">
                                                                <rect id="SvgjsRect2104" width="105.5" height="41.5"
                                                                    x="-2.75" y="-0.75" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskdv822i5x"></clipPath>
                                                            <clipPath id="nonForecastMaskdv822i5x"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskdv822i5x">
                                                                <rect id="SvgjsRect2105" width="104" height="44"
                                                                    x="-2" y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient2110" x1="0"
                                                                y1="1" x2="1" y2="1">
                                                                <stop id="SvgjsStop2111" stop-opacity="0.9"
                                                                    stop-color="rgba(123,92,37,0.9)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop2112" stop-opacity="0.9"
                                                                    stop-color="rgba(245,184,73,0.9)" offset="0.98">
                                                                </stop>
                                                                <stop id="SvgjsStop2113" stop-opacity="0.9"
                                                                    stop-color="rgba(245,184,73,0.9)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <line id="SvgjsLine2103" x1="0" y1="0"
                                                            x2="0" y2="40" stroke="#b6b6b6"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                            height="40" fill="#b1b9c4" filter="none"
                                                            fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG2115" class="apexcharts-grid">
                                                            <g id="SvgjsG2116" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2129" x1="0" y1="4"
                                                                    x2="100" y2="4" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2130" x1="0" y1="8"
                                                                    x2="100" y2="8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2131" x1="0" y1="12"
                                                                    x2="100" y2="12" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2132" x1="0" y1="16"
                                                                    x2="100" y2="16" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2133" x1="0" y1="20"
                                                                    x2="100" y2="20" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2134" x1="0" y1="24"
                                                                    x2="100" y2="24" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2135" x1="0" y1="28"
                                                                    x2="100" y2="28" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2136" x1="0" y1="32"
                                                                    x2="100" y2="32" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2137" x1="0" y1="36"
                                                                    x2="100" y2="36" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2117" class="apexcharts-gridlines-vertical"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2119" x1="0" y1="0"
                                                                    x2="0" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2120" x1="12.5" y1="0"
                                                                    x2="12.5" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2121" x1="25" y1="0"
                                                                    x2="25" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2122" x1="37.5" y1="0"
                                                                    x2="37.5" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2123" x1="50" y1="0"
                                                                    x2="50" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2124" x1="62.5" y1="0"
                                                                    x2="62.5" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2125" x1="75" y1="0"
                                                                    x2="75" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2126" x1="87.5" y1="0"
                                                                    x2="87.5" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2127" x1="100" y1="0"
                                                                    x2="100" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <line id="SvgjsLine2140" x1="0" y1="40"
                                                                x2="100" y2="40" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2139" x1="0" y1="1"
                                                                x2="0" y2="40" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2118" class="apexcharts-grid-borders"
                                                            style="display: none;">
                                                            <line id="SvgjsLine2128" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2138" x1="0" y1="40"
                                                                x2="100" y2="40" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG2106"
                                                            class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG2107" class="apexcharts-series"
                                                                seriesName="Value" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2114"
                                                                    d="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 20.8 50 20.8C 54.375 20.8 58.125 17.6 62.5 17.6C 66.875 17.6 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="url(#SvgjsLinearGradient2110)"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="1.5" stroke-dasharray="0"
                                                                    class="apexcharts-line" index="0"
                                                                    clip-path="url(#gridRectMaskdv822i5x)"
                                                                    pathTo="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 20.8 50 20.8C 54.375 20.8 58.125 17.6 62.5 17.6C 66.875 17.6 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                                    pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2108"
                                                                    class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2109" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2141" x1="0" y1="0"
                                                            x2="100" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2142" x1="0" y1="0"
                                                            x2="100" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2143" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2144" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2145" class="apexcharts-point-annotations"></g>
                                                        <g id="SvgjsG2146" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2147" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"></g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2100" class="apexcharts-annotations"></g>
                                                    <g id="SvgjsG2157" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <rect id="SvgjsRect2102" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe"></rect>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <div>
                                            <a class="text-warning" href="javascript:void(0);">View All<i
                                                    class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                        </div>
                                        <div class="text-end">
                                            <p class="mb-0 text-success fw-semibold">+19%</p>
                                            <span class="text-muted op-7 fs-11">this month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
