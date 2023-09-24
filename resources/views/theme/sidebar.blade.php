@php use Illuminate\Support\Facades\Route; @endphp
<div class="sidebar py-2 py-md-2 me-0 border-end">
    <div class="d-flex flex-column h-100">
        <!-- Logo -->
        <a href="/" class="mb-0 brand-icon">
        <span class="logo-icon">
        <i class="fa fa-gg-circle fs-3"></i>
        </span>
            <span class="logo-text">Balance Management</span>
        </a>
        <!-- Menu: main ul -->
        <ul class="menu-list flex-grow-1 mt-4 px-1">
            <li>
                <a class="m-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" width="24px" height="24px" viewBox="0 0 38 38">
                        <path xmlns="http://www.w3.org/2000/svg"  d="M34,18.756V34H22v-8h-6v8h-4V14.31l7-3.89L34,18.756z M34,16.472V6h-6v7.139L34,16.472z" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></path>
                        <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M34,14.19V6h-6v2h4v5.08L19,5.86L0.51,16.13l0.98,1.74L19,8.14l17.51,9.73l0.98-1.74L34,14.19z M32,32h-8v-8H14  v8H6V17.653l-2,1.111V34h12v-8h6v8h12V18.764l-2-1.111V32z"></path>
                    </svg>
                    <div>
                        <h6 class="mb-0">Dashboard</h6>
                        <small class="text-muted">Analytics Report</small>
                    </div>
                </a>
            </li>
            <li>
                <a class="m-link {{ Route::is('market.*') ? 'active' : '' }}" href="{{ route('market.index') }}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" width="24px" height="24px" viewBox="0 0 64 64">
                        <linearGradient id="crp_svg" gradientUnits="userSpaceOnUse" x1="13.876" y1="13.876" x2="50.1249" y2="50.1249">
                            <stop  offset="0" class="st2"/>
                            <stop  offset="1" class="st3"/>
                        </linearGradient>
                        <polygon class="st1" points="50,34 50,30 39.465,30 55.517,20.732 53.518,17.269 37.464,26.537 42.732,17.412 39.268,15.412
                            34,24.536 34,6 30,6 30,24.536 24.732,15.412 21.268,17.413 26.536,26.536 10.483,17.268 8.483,20.732 24.535,30 14,30 14,34
                            24.537,34 8.483,43.269 10.483,46.732 26.536,37.465 21.268,46.589 24.732,48.589 30,39.464 30,58 34,58 34,39.465 39.268,48.589
                            42.732,46.589 37.465,37.465 53.517,46.732 55.517,43.269 39.463,34 	"/>
                        <path class="st0" d="M50,36c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S52.209,36,50,36z M36,6c0,2.209-1.791,4-4,4
                            s-4-1.791-4-4s1.791-4,4-4S36,3.791,36,6z M36,58c0,2.209-1.791,4-4,4s-4-1.791-4-4s1.791-4,4-4S36,55.791,36,58z M18,32
                            c0-2.209-1.791-4-4-4s-4,1.791-4,4s1.791,4,4,4S18,34.209,18,32z M44.464,18.412c-1.104,1.913-3.552,2.568-5.464,1.464
                            c-1.914-1.104-2.568-3.551-1.465-5.464c1.105-1.913,3.551-2.569,5.465-1.464C44.912,14.052,45.568,16.499,44.464,18.412z
                            M11.483,15.536c1.913,1.104,2.569,3.551,1.464,5.464s-3.551,2.568-5.464,1.464S4.915,18.914,6.02,17S9.57,14.432,11.483,15.536z
                            M56.517,41.536c1.913,1.104,2.568,3.551,1.464,5.464s-3.551,2.569-5.464,1.465S49.948,44.913,51.053,43
                            S54.604,40.432,56.517,41.536z M25,44.124c-1.913-1.104-4.36-0.448-5.465,1.464c-1.104,1.913-0.448,4.36,1.465,5.465
                            s4.359,0.448,5.464-1.465C27.568,47.676,26.913,45.229,25,44.124z M26.464,14.412c1.104,1.913,0.448,4.36-1.465,5.464
                            s-4.359,0.449-5.464-1.464s-0.449-4.359,1.464-5.464S25.359,12.499,26.464,14.412z M7.483,41.536
                            c1.913-1.104,4.36-0.449,5.465,1.464s0.448,4.36-1.465,5.465C9.571,49.569,7.125,48.913,6.02,47S5.57,42.641,7.483,41.536z
                            M52.517,15.536c1.913-1.104,4.359-0.449,5.464,1.464s0.45,4.36-1.463,5.464s-4.36,0.448-5.465-1.465S50.604,16.641,52.517,15.536z
                            M39,44.124c-1.914,1.104-2.568,3.552-1.465,5.465s3.552,2.568,5.465,1.464s2.568-3.552,1.463-5.465
                            C43.359,43.676,40.912,43.02,39,44.124z M38,32c0,3.313-2.687,6-6,6s-6-2.687-6-6s2.687-6,6-6S38,28.687,38,32z"/>
                    </svg>
                    <div>
                        <h6 class="mb-0">Market</h6>
                        <small class="text-muted">Market CryptoPrice</small>
                    </div>
                </a>
            </li>
            <li>
                <a class="m-link {{ Route::is('invest.*') ? 'active' : '' }}" href="{{ route('invest.index') }}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" width="24px" height="24px" viewBox="0 0 64 64">
                        <path class="st1" d="M31.997,60C16.537,60,3.999,47.462,4,32.002C3.996,16.537,16.535,4,31.995,4C47.459,4,59.999,16.537,60,32
                            S47.461,60,31.997,60z M53.999,32c-0.001-12.149-9.857-22-22.005-22C19.85,10,9.995,19.851,9.999,32.002
                            C9.998,44.146,19.85,54,31.996,54C44.144,54,54,44.145,53.999,32L53.999,32z"/>
                        <path class="st0" d="M47.282,27.597c0.638-4.258-2.604-6.547-7.038-8.074l1.438-5.768l-3.51-0.875l-1.4,5.616
                            c-0.924-0.23-1.871-0.447-2.813-0.662l1.409-5.653l-3.51-0.875l-1.439,5.767c-0.764-0.175-1.514-0.347-2.243-0.527l0.004-0.017
                            l-4.842-1.21l-0.934,3.75c0,0,2.606,0.597,2.55,0.635c1.423,0.354,1.679,1.296,1.636,2.042l-3.939,15.801
                            c-0.173,0.432-0.615,1.079-1.609,0.833c0.035,0.052-2.552-0.636-2.552-0.636l-1.743,4.019l4.569,1.14
                            c0.85,0.213,1.683,0.435,2.503,0.646l-1.453,5.833l3.507,0.876l1.438-5.774c0.958,0.262,1.888,0.5,2.799,0.727l-1.434,5.745
                            l3.51,0.876l1.454-5.824c4.734,0.896,10.564,0.461,12.384-4.739c1.517-4.325-1.217-7.469-3.226-8.515
                            C45.095,32.224,46.821,30.714,47.282,27.597L47.282,27.597z M39.26,38.847c-1.084,4.36-8.425,2.004-10.806,1.413l1.929-7.729
                            C32.761,33.124,40.395,34.3,39.26,38.847L39.26,38.847z M40.346,27.535c-0.989,3.966-7.1,1.951-9.083,1.458l1.748-7.011
                            C34.994,22.476,41.377,23.397,40.346,27.535z"/>
                    </svg>
                    <div>
                        <h6 class="mb-0">Invest</h6>
                        <small class="text-muted">Invest Crypto</small>
                    </div>
                </a>
            </li>
            <li>
                <a class="m-link {{ Route::is('transaction.*') ? 'active' : '' }}" href="{{ route('transaction.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 38 38">
                        <path xmlns="http://www.w3.org/2000/svg" d="M20,25c0-1.698,0-6.334,0-11c0-4.418-1.582-8-6-8c-2.083,0-4.072,0.888-5.538,2.335  C5.708,11.053,4,14.826,4,19c0,8.284,6.716,15,15,15c2.736,0,5.294-0.745,7.503-2.025C22.87,31.719,20,28.698,20,25z" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></path>
                        <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M15,11l-1,0.01c0,0,0,0,0-0.01H15z M22,0.24v2.04C29.95,3.69,36,10.65,36,19c0,4.17-1.52,8.01-4.03,10.97  l-0.02-0.02C30.68,31.22,28.93,32,27,32c-2.79,0-5.2-1.64-6.32-4H24l2-2h-5.92C20.02,25.67,20,25.34,20,25s0.02-0.67,0.08-1H28l2-2  h-9.32c1.12-2.36,3.53-4,6.32-4c1.93,0,3.68,0.78,4.95,2.05l1.41-1.41C31.73,17.01,29.48,16,27,16c-3.91,0-7.25,2.51-8.48,6H16v2  h2.06C18.02,24.33,18,24.66,18,25s0.02,0.67,0.06,1H16v2h2.52c1.23,3.48,4.56,5.99,8.46,6C24.6,35.28,21.88,36,19,36  C9.63,36,2,28.37,2,19c0-6.07,3.2-11.41,8-14.41V6.1C8.24,6.44,6,7.72,6,11c0,2.78,2.64,3.44,4.76,3.97C12.96,15.52,14,15.9,14,17  c0,2.82-2.5,2.99-2.99,3C10.5,19.99,8,19.82,8,17H6c0,3.28,2.24,4.56,4,4.9V24h2v-2.1c1.76-0.341,4-1.62,4-4.9  c0-2.78-2.64-3.44-4.76-3.97C9.04,12.48,8,12.1,8,11c0-2.82,2.5-2.99,3-3c2.81,0,2.99,2.48,3,3h2c0-1.57-0.86-4.42-4-4.91V3.52  C14.13,2.54,16.51,2,19,2c0.34,0,0.67,0.01,1,0.03V0.02C19.67,0.01,19.33,0,19,0C8.52,0,0,8.52,0,19c0,10.48,8.52,19,19,19  c10.48,0,19-8.52,19-19C38,9.54,31.06,1.68,22,0.24z"></path>
                    </svg>
                    <div>
                        <h6 class="mb-0">Transaction</h6>
                        <small class="text-muted">Transaction History</small>
                    </div>
                </a>
            </li>
            <li class="collapsed">
                <a class="m-link {{ Route::is('financial-management.*') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="20px" viewBox="0 0 32 32">
                        <path d="M2,0v32h28V0H2z M28,30H4V2h24V30z" style="fill:var(--primary-color);"></path>
                        <path d="M19,8V4H6v10h20V8H19z M8,6h9v2H8V6z M24,12H8v-2h16V12z" style="fill:var(--svg-color);"></path>
                        <path d="M19,20v-4H6v10h20v-6H19z M8,18h9v2H8V18z M24,24H8v-2h16V24z" style="fill:var(--svg-color);"></path>
                    </svg>
                    <div>
                        <h6 class="mb-0">Finance</h6>
                        <small class="text-muted">Finance Management</small>
                    </div>
                    <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span>
                </a>
                <ul class="sub-menu collapse {{ Route::is('financial-management.*') ? 'show' : '' }}" id="menu-Authentication">
                    <li><a class="ms-link {{ Route::is('financial-management.category.*') ? 'active' : '' }}" href="{{ route('financial-management.category.index') }}"><span>Category</span></a></li>
                    <li><a class="ms-link {{ Route::is('financial-management.reason.*') ? 'active' : '' }}" href="{{ route('financial-management.reason.index') }}"><span>Reason</span></a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link {{ Route::is('statistic.*') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#menu-Statistic" href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <div>
                        <h6 class="mb-0">Statistic</h6>
                        <small class="text-muted">Statistic System</small>
                    </div>
                    <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span>
                </a>
                <ul class="sub-menu collapse {{ Route::is('statistic.*') ? 'show' : '' }}" id="menu-Statistic">
                    <li><a class="ms-link {{ Route::is('statistic.expense') ? 'active' : '' }}" href="{{ route('statistic.expense') }}"><span>Expense</span></a></li>
                </ul>
                <ul class="sub-menu collapse {{ Route::is('statistic.*') ? 'show' : '' }}" id="menu-Statistic">
                    <li><a class="ms-link {{ Route::is('statistic.income') ? 'active' : '' }}" href="{{ route('statistic.income') }}"><span>Income</span></a></li>
                </ul>
            </li>
        </ul>
        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-muted">
            <span><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>
