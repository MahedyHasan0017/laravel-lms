@extends('layouts.app')

@section('home_content')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>User Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            <li class="breadcrumb-item"><a href="{{route('regular_user_logout')}}">Logout</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-wrapper edutim-course-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="course-sidebar">
                    <div class="course-single-thumb">
                        <img src="{{ asset('assets/images/clients/test-2.jpg')}}" alt="user-image" class="img-fluid rounded-circle">
                    </div>
                    <div class="course-title">
                        <h4 class="mt-4 mb-3">Name: {{ $user->username }}</h4>
                        <p class="mb-2">Since: {{ $user->created_at->format('Y-m-d') }}</p>
                     
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                The current link item
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Profile</a>
                            <a href="#" class="list-group-item list-group-item-action">My Courses</a>
                            <a href="#" class="list-group-item list-group-item-action">Wishlist</a>
                            <a class="list-group-item list-group-item-action disabled" aria-disabled="true">Notifications</a>
                            <a href="#" class="list-group-item list-group-item-action">Transactions</a>
                            <a href="{{ route('users_data') }}" class="list-group-item list-group-item-action">Referral</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single-course-details">
                    <h4 class="course-title mb-4">Profile</h4>
                    <div class="mb-4">
                        <h4>Your Balance: {{$user->balance}} TK</h4>
                        <h4>Student ID: {{$user->user_id}}</h4>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first-name">First Name</label>
                                    <input type="text" class="form-control" id="first-name" value="{{ $user->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" value="{{$user->last_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number/Whatsapp</label>
                            <input type="text" class="form-control" id="phone" value="{{ $user->whatsapp }}">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea rows="3" class="form-control" id="bio"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div class="d-block">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-main">Save Profile Now</button>
                        </div>
                    </form>

                    <div class="mt-5">
                        <div>
                            <h4>Your Referral Code</h4>
                        </div>
                        <div class="my-3">
                            <h2>{{$user->user_id}}</h2>
                        </div>
                        <div>
                            <button class="btn btn-main">Copy Link</button>
                            <p>https://mybestelearning.com/sign-up/{{$user->user_id}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
