@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{asset('css/progress.css')}}">
<script src="{{asset('js/progress.js')}}"></script>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body ">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="border-l-4 border-red-600">

                        <h1 class="py-2 text-4xl tracking-tighter pl-2 font-bold">Hi dear <span class="uppercase">
                                {{Auth::user()->name}}</h1>
                        </span>
                    </div>
                    <h2 class="pt-4 text-3xl">you have completed
                        <span class="text-red-600">
                            {{Auth::user()->dayNum}}
                        </span>
                        days of your
                        @if (Auth::user()->plan == 1)
                        <span class="text-red-600">
                            lose belly Challenge
                        </span>
                        @endif
                        @if (Auth::user()->plan == 2)
                        <span class="text-red-600">
                            Keep fit Challenge
                        </span>
                        @endif
                        @if (Auth::user()->plan == 3)
                        <span class="text-red-600">

                            Six Pack Challenge
                        </span>
                        @endif

                    </h2>
                    <div class="pt-4 text-3xl">Keep up the good work till reach your goals</div>
                    <div class=" pt-4 ">
                        <div class="row1 flex items-center justify-center">
                            @if (Auth::user()->plan ==1)

                            <button onclick="location.href='/exercise'"
                                class="btn mr-1.5 font-extrabold bg-red-600 text-white col-md-6 ">
                                Start
                                Excercise
                            </button>
                            @endif
                            @if (Auth::user()->plan ==2)

                            <button onclick="location.href='/exercise2'"
                                class="btn mr-1.5 font-extrabold bg-red-600 text-white col-md-6 ">
                                Start
                                Excercise
                            </button>
                            @endif
                            @if (Auth::user()->plan ==3)

                            <button onclick="location.href='/exercise3'"
                                class="btn mr-1.5 font-extrabold bg-red-600 text-white col-md-6 ">
                                Start
                                Excercise
                            </button>
                            @endif
                            <button class="btn font-extrabold col-md-3 border-2 border-black text-black">View your
                                work</button>
                        </div>

                        <div class="row1 pt-2 flex items-center justify-center">
                            <button onclick="location.href='/info'" class="btn ml-px font-extrabold col-md-3 border-2 border-black text-black">

                                    View info
                            </button>
                            <button onclick="location.href='/change-plan'" class="btn ml-1.5 font-extrabold bg-red-600 text-white col-md-6 ">
                                Change Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>

</div>
@if (Auth::user()->plan == 1)
<div>
</div>
@endif
@endsection