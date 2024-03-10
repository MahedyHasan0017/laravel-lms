@include('frontend.admin.admin_dash_commons.header')


@include('frontend.admin.admin_dash_commons.sidebar')




<!-- page content -->

@yield('content')

<div class="right_col" role="main">
  <div class="row">
    <div class="col-12 text-center">
      <h3>Admin Dashboard</h3>
    </div>
  </div>
</div>

<!-- /page content -->


@include('frontend.admin.admin_dash_commons.footer')