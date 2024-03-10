@include('frontend.admin.admin_dash_commons.header')


@include('frontend.admin.admin_dash_commons.sidebar')




<!-- page content -->

@yield('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-12 text-center">
            <h3>User Info</h3>
            @if ($user)
            <h3>{{ $user->whatsapp }}'s Profile</h3>
            @else
            <p>User not found.</p>
            @endif
        </div>
    </div>
    <div class="row">
        <h3>This user reffered by</h3>
        <div>
            @foreach($reffered_user as $row)
            <h4>{{$row->email}}</h4>
            @endforeach
        </div>


    </div>
</div>

<!-- /page content -->


@include('frontend.admin.admin_dash_commons.footer')