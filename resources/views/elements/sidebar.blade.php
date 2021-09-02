<!--**********************************
  Sidebar Fixed
***********************************-->
<div class="fixed-content-box">
  <div class="head-name">
    MotaAdmin
    <span class="close-fixed-content fa-left d-lg-none">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
    </span>
  </div>
  <div class="fixed-content-body dz-scroll" id="DZ_W_Fixed_Contant">
    <div class="tab-content" id="menu">
      <div class="tab-pane chart-sidebar fade show active" id="dashboard-area" role="tabpanel"></div>
      <div class="tab-pane fade" id="dashboard" role="tabpanel">
        <ul class="metismenu tab-nav-menu">
          <li class="nav-label">DASHBOARD</li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/><path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/></g>
              </svg>
              Dashboard
            </a>
            <ul aria-expanded="false">
              <li><a href="{!! url('/index'); !!}">Light</a></li>
              <li><a href="{!! url('/index-2'); !!}">Dark</a></li>
              <li><a href="{!! url('/index-3'); !!}">Mini Sidebar</a></li>
              <li><a href="{!! url('/index-4'); !!}">Sidebar</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="apps">
        <ul class="metismenu tab-nav-menu">
          <li class="nav-label">APPS</li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><polygon fill="#000000" opacity="0.3" points="5 7 5 15 19 15 19 7"/>       <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3"/><path d="M5,7 L5,15 L19,15 L19,7 L5,7 Z M5.25,5 L18.75,5 C19.9926407,5 21,5.8954305 21,7 L21,15 C21,16.1045695 19.9926407,17 18.75,17 L5.25,17 C4.00735931,17 3,16.1045695 3,15 L3,7 C3,5.8954305 4.00735931,5 5.25,5 Z" fill="#000000" fill-rule="nonzero"/></g></svg>
              <span class="nav-text">Apps</span>
              <span class="badge badge-xs badge-light">10</span>
            </a>
            <ul aria-expanded="false">
              <li><a href="{!! url('/app-profile'); !!}">Profile</a></li>
              <li><a href="{!! url('/post-details'); !!}">Post Detail</a></li>
              <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                <ul aria-expanded="false">
                  <li><a href="{!! url('/email-compose'); !!}">Compose</a></li>
                  <li><a href="{!! url('/email-inbox'); !!}">Inbox</a></li>
                  <li><a href="{!! url('/email-read'); !!}">Read</a></li>
                </ul>
              </li>
              <li><a href="{!! url('/app-calender'); !!}">Calendar</a></li>
              <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                <ul aria-expanded="false">
                  <li><a href="{!! url('/ecom-product-grid'); !!}">Product Grid</a></li>
                  <li><a href="{!! url('/ecom-product-list'); !!}">Product List</a></li>
                  <li><a href="{!! url('/ecom-product-detail'); !!}">Product Details</a></li>
                  <li><a href="{!! url('/ecom-product-order'); !!}">Order</a></li>
                  <li><a href="{!! url('/ecom-checkout'); !!}">Checkout</a></li>
                  <li><a href="{!! url('/ecom-invoice'); !!}">Invoice</a></li>
                  <li><a href="{!! url('/ecom-customers'); !!}">Customers</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3"/><path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000"/></g></svg>
            <span class="nav-text">Charts</span>
            <span class="badge badge-xs badge-light">06</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{!! url('/chart-flot'); !!}">Flot</a></li>
            <li><a href="{!! url('/chart-morris'); !!}">Morris</a></li>
            <li><a href="{!! url('/chart-chartjs'); !!}">Chartjs</a></li>
            <li><a href="{!! url('/chart-chartist'); !!}">Chartist</a></li>
            <li><a href="{!! url('/chart-sparkline'); !!}">Sparkline</a></li>
            <li><a href="{!! url('/chart-peity'); !!}">Peity</a></li>
          </ul>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="components">
        <ul class="metismenu tab-nav-menu">
          <li class="nav-label">Components</li>
          <li class="mega-menu mega-menu-xl">
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path><path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path></g></svg>
              <span class="nav-text">Bootstrap</span>
              <span class="badge badge-xs badge-light">17</span>
            </a>
            <ul aria-expanded="false">
              <li><a href="{!! url('/ui-accordion'); !!}">Accordion</a></li>
              <li><a href="{!! url('/ui-alert'); !!}">Alert</a></li>
              <li><a href="{!! url('/ui-badge'); !!}">Badge</a></li>
              <li><a href="{!! url('/ui-button'); !!}">Button</a></li>
              <li><a href="{!! url('/ui-modal'); !!}">Modal</a></li>
              <li><a href="{!! url('/ui-button-group'); !!}">Button Group</a></li>
              <li><a href="{!! url('/ui-list-group'); !!}">List Group</a></li>
              <li><a href="{!! url('/ui-media-object'); !!}">Media Object</a></li>
              <li><a href="{!! url('/ui-card'); !!}">Cards</a></li>
              <li><a href="{!! url('/ui-carousel'); !!}">Carousel</a></li>
              <li><a href="{!! url('/ui-dropdown'); !!}">Dropdown</a></li>
              <li><a href="{!! url('/ui-popover'); !!}">Popover</a></li>
              <li><a href="{!! url('/ui-progressbar'); !!}">Progressbar</a></li>
              <li><a href="{!! url('/ui-tab'); !!}">Tab</a></li>
              <li><a href="{!! url('/ui-typography'); !!}">Typography</a></li>
              <li><a href="{!! url('/ui-pagination'); !!}">Pagination</a></li>
              <li><a href="{!! url('/ui-grid'); !!}">Grid</a></li>
            </ul>
          </li>
          <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000"></path><path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3"></path></g></svg>
            <span class="nav-text">Plugins</span>
            <span class="badge badge-xs badge-light">07</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{!! url('/uc-select2'); !!}">Select 2</a></li>
            <li><a href="{!! url('/uc-nestable'); !!}">Nestedable</a></li>
            <li><a href="{!! url('/uc-noui-slider'); !!}">Noui Slider</a></li>
            <li><a href="{!! url('/uc-sweetalert'); !!}">Sweet Alert</a></li>
            <li><a href="{!! url('/uc-toastr'); !!}">Toastr</a></li>
            <li><a href="{!! url('/map-jqvmap'); !!}">Jqv Map</a></li>
            <li><a href="{!! url('/uc-lightgallery'); !!}">Light Gallery</a></li>
          </ul>
          </li>
          <li>
            <a href="{!! url('/widget-basic'); !!}" class="ai-icon" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><path d="M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L8,21 C5.790861,21 4,19.209139 4,17 C4,14.790861 5.790861,13 8,13 L20,13 C21.1045695,13 22,13.8954305 22,15 Z M7,19 C8.1045695,19 9,18.1045695 9,17 C9,15.8954305 8.1045695,15 7,15 C5.8954305,15 5,15.8954305 5,17 C5,18.1045695 5.8954305,19 7,19 Z" fill="#000000" opacity="0.3"/><path d="M15.5421357,5.69999981 L18.3705628,8.52842693 C19.1516114,9.30947552 19.1516114,10.5758055 18.3705628,11.3568541 L9.88528147,19.8421354 C8.3231843,21.4042326 5.79052439,21.4042326 4.22842722,19.8421354 C2.66633005,18.2800383 2.66633005,15.7473784 4.22842722,14.1852812 L12.7137086,5.69999981 C13.4947572,4.91895123 14.7610871,4.91895123 15.5421357,5.69999981 Z M7,19 C8.1045695,19 9,18.1045695 9,17 C9,15.8954305 8.1045695,15 7,15 C5.8954305,15 5,15.8954305 5,17 C5,18.1045695 5.8954305,19 7,19 Z" fill="#000000" opacity="0.3"/><path d="M5,3 L9,3 C10.1045695,3 11,3.8954305 11,5 L11,17 C11,19.209139 9.209139,21 7,21 C4.790861,21 3,19.209139 3,17 L3,5 C3,3.8954305 3.8954305,3 5,3 Z M7,19 C8.1045695,19 9,18.1045695 9,17 C9,15.8954305 8.1045695,15 7,15 C5.8954305,15 5,15.8954305 5,17 C5,18.1045695 5.8954305,19 7,19 Z" fill="#000000"/></g></svg>
              <span class="nav-text">Widget</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="forms">
        <ul class="metismenu tab-nav-menu">
          <li class="nav-label">Forms</li>
          <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/><rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/></g></svg>
            <span class="nav-text">Forms</span>
            <span class="badge badge-xs badge-light">05</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{!! url('/form-element'); !!}">Form Elements</a></li>
            <li><a href="{!! url('/form-wizard'); !!}">Wizard</a></li>
            <li><a href="{!! url('/form-editor-summernote'); !!}">Summernote</a></li>
            <li><a href="{!! url('/form-pickers'); !!}">Pickers</a></li>
            <li><a href="{!! url('/form-validation-jquery'); !!}">Jquery Validate</a></li>
          </ul>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="table">
        <ul class="metismenu tab-nav-menu">
          <li class="nav-label">Table</li>
          <li><a href="{!! url('/table-bootstrap-basic'); !!}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path><path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path></g></svg>
            Bootstrap
          </a>
          </li>
          <li><a href="{!! url('/table-datatable-basic'); !!}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M3,4 L20,4 C20.5522847,4 21,4.44771525 21,5 L21,7 C21,7.55228475 20.5522847,8 20,8 L3,8 C2.44771525,8 2,7.55228475 2,7 L2,5 C2,4.44771525 2.44771525,4 3,4 Z M10,10 L20,10 C20.5522847,10 21,10.4477153 21,11 L21,13 C21,13.5522847 20.5522847,14 20,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L20,16 C20.5522847,16 21,16.4477153 21,17 L21,19 C21,19.5522847 20.5522847,20 20,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"/><rect fill="#000000" opacity="0.3" x="2" y="10" width="5" height="10" rx="1"/></g></svg>
          Datatable</a>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="extra">
        <ul class="metismenu tab-nav-menu">
          <li class="nav-label">Extra</li>
          <li><a href="{!! url('/page-register'); !!}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/><rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/></g></svg>
          Register</a>
          </li>
          <li><a href="{!! url('/page-login'); !!}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" opacity="0.3" transform="translate(9.000000, 12.000000) rotate(-270.000000) translate(-9.000000, -12.000000) " x="8" y="6" width="2" height="12" rx="1"/><path d="M20,7.00607258 C19.4477153,7.00607258 19,6.55855153 19,6.00650634 C19,5.45446114 19.4477153,5.00694009 20,5.00694009 L21,5.00694009 C23.209139,5.00694009 25,6.7970243 25,9.00520507 L25,15.001735 C25,17.2099158 23.209139,19 21,19 L9,19 C6.790861,19 5,17.2099158 5,15.001735 L5,8.99826498 C5,6.7900842 6.790861,5 9,5 L10.0000048,5 C10.5522896,5 11.0000048,5.44752105 11.0000048,5.99956624 C11.0000048,6.55161144 10.5522896,6.99913249 10.0000048,6.99913249 L9,6.99913249 C7.8954305,6.99913249 7,7.89417459 7,8.99826498 L7,15.001735 C7,16.1058254 7.8954305,17.0008675 9,17.0008675 L21,17.0008675 C22.1045695,17.0008675 23,16.1058254 23,15.001735 L23,9.00520507 C23,7.90111468 22.1045695,7.00607258 21,7.00607258 L20,7.00607258 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.000000, 12.000000) rotate(-90.000000) translate(-15.000000, -12.000000) "/><path d="M16.7928932,9.79289322 C17.1834175,9.40236893 17.8165825,9.40236893 18.2071068,9.79289322 C18.5976311,10.1834175 18.5976311,10.8165825 18.2071068,11.2071068 L15.2071068,14.2071068 C14.8165825,14.5976311 14.1834175,14.5976311 13.7928932,14.2071068 L10.7928932,11.2071068 C10.4023689,10.8165825 10.4023689,10.1834175 10.7928932,9.79289322 C11.1834175,9.40236893 11.8165825,9.40236893 12.2071068,9.79289322 L14.5,12.0857864 L16.7928932,9.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.500000, 12.000000) rotate(-90.000000) translate(-14.500000, -12.000000) "/></g></svg>
            Login
          </a></li>
          <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/><rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/><rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/></g></svg>
            Error
            <span class="badge badge-xs badge-light">05</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="{!! url('/page-error-400'); !!}">Error 400</a></li>
            <li><a href="{!! url('/page-error-403'); !!}">Error 403</a></li>
            <li><a href="{!! url('/page-error-404'); !!}">Error 404</a></li>
            <li><a href="{!! url('/page-error-500'); !!}">Error 500</a></li>
            <li><a href="{!! url('/page-error-503'); !!}">Error 503</a></li>
          </ul>
          </li>
          <li><a href="{!! url('/page-lock-screen'); !!}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><mask fill="white"><use xlink:href="#path-1"/></mask><g/><path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"/></g></svg>
          Lock Screen</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="tab-pane chart-sidebar fade show active" role="tabpanel">
      <div class="card">
        <div class="card-header align-items-start">
          <div>
            <h6>Daily Sales</h6>
            <p>Check out each colum for more details</p>
          </div>
          <span class="btn btn-primary light sharp ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"/><rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"/><path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/><rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"/></g></svg>
          </span>
        </div>
        <div class="card-body">
          <canvas id="daily-sales-chart" height="85" style="height:85px;"></canvas>
        </div>
      </div>
      <div class="card bg-warning-light">
        <div class="card-header align-items-start mb-3">
          <div>
            <h6>Profit Share</h6>
            <p>Check out each colum for more details</p>
          </div>
          <span class="btn btn-warning light sharp ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3"/><path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000"/></g></svg>
          </span>
        </div>
        <div class="card-body">
          <div class="chart-point">
            <div class="check-point-area">
              <canvas id="ShareProfit"></canvas>
            </div>
            <ul class="chart-point-list">
              <li><i class="fa fa-circle text-primary mr-1"></i> 40% Tickets</li>
              <li><i class="fa fa-circle text-success mr-1"></i> 35% Events</li>
              <li><i class="fa fa-circle text-warning mr-1"></i> 25% Other</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card bg-info-light">
        <div class="card-header align-items-start mb-3">
          <div>
            <h6>Visitors By Browser</h6>
            <p>Check out each colum for more details</p>
          </div>
          <span class="btn btn-info light sharp ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M3,4 L20,4 C20.5522847,4 21,4.44771525 21,5 L21,7 C21,7.55228475 20.5522847,8 20,8 L3,8 C2.44771525,8 2,7.55228475 2,7 L2,5 C2,4.44771525 2.44771525,4 3,4 Z M10,10 L20,10 C20.5522847,10 21,10.4477153 21,11 L21,19 C21,19.5522847 20.5522847,20 20,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,11 C9,10.4477153 9.44771525,10 10,10 Z" fill="#000000"/><rect fill="#000000" opacity="0.3" x="2" y="10" width="5" height="10" rx="1"/></g></svg>
          </span>
        </div>
        <div class="card-body">
          <p class="mb-2 d-flex"><img width="22" height="22" src="{{ asset('images/browser/icon1.png') }}" class="mr-2" alt=""/>Photoshop
            <span class="pull-right text-warning ml-auto">85%</span>
          </p>
          <div class="progress mb-3" style="height:4px">
            <div class="progress-bar bg-warning progress-animated" style="width:85%; height:4px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <p class="mb-2 d-flex"><img width="22" height="22" src="{{ asset('images/browser/icon2.png') }}" class="mr-2" alt=""/>Code editor
            <span class="pull-right text-success ml-auto">90%</span>
          </p>
          <div class="progress mb-3" style="height:4px">
            <div class="progress-bar bg-success progress-animated" style="width:90%; height:4px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <p class="mb-2 d-flex"><img width="22" height="22" src="{{ asset('images/browser/icon1.png') }}" class="mr-2" alt=""/>Illustrator
            <span class="pull-right text-danger ml-auto">65%</span>
          </p>
          <div class="progress" style="height:4px">
            <div class="progress-bar bg-danger progress-animated" style="width:65%; height:4px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--**********************************
  Sidebar End
***********************************-->