@extends('layouts.app')
@section('title', 'Home :: '.config('app.name'))
@push('after-styles')
    <style>
        .main {
            background-color: #fff;
        }

        .lunchbag {
            margin: 0 0 15px 15px;
            float: right;
        }

        .alert {
            margin-bottom: 2rem;
        }
    </style>
@endpush
@section('content')
    <div class="col maxw-1200 mx-auto mt-xl-5 mt-3">
        <div class="pr-2 pl-2">
            @include('includes.partials.messages')
            <img class="lunchbag" alt="lunchbag" src="/img/lunch124x83.jpg">
            <h1>Welcome to the CCA Lunch Ordering System</h1>
            <br/>
            <br/>
            @auth
                <h4 style="color:green;">** You Are Logged In **</h4>
            @else<h4>Returning Users</h4>
            <a class="btn btn-primary" href="{!! route('login') !!}" role="button">View My Orders</a>
            <br/><br/><br/>
            <h4>New User or Forgot Your Password?</h4>
            <p>
                <a class="btn btn-primary" href="{!! route('password.request') !!}" role="button">Reset Password</a>
            </p>
            @endauth
            <br/><br/>
            <h4>Payments</h4>
            <p>
                Payments can be made in the following ways:
            </p>
            <ul class="mylist">
                <li>
                    You can use PayPal to pay for lunch on this website, or
                </li>
                <li>
                    Your tuition bill will reflect your balance due at the end of the month.
                </li>
            </ul>
            <br/>
            <h4>About The Lunch Ordering System</h4>
            <p>
                This system works in "real-time", which means that you can add or delete lunch orders up until the time
                orders are placed with our vendors. So for example if you place an order but then your child will end up
                missing school and therefore that lunch order, you will be able to cancel the order if it has not
                already been placed with the vendor.
            </p>
            <p>
                Questions? Problems? Please feel free to <a href="{!! route('contact') !!}">contact us</a>.
            </p>
            <p>
                Thanks for using the Lunch Ordering System!
            </p>
            <p>
                <em>The CCA Lunch Ordering Team</em>
            </p>
        </div>
    </div>
@endsection
