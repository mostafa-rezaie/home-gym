@extends('layouts.app')


@section('info')

@guest
@if (Route::has('login'))
<div class="container">
    <div class="flex flex-col justify-center items-center ">
        <div class="font-extrabold text-6xl">Oops!!</div>
        <div class="font-extralight text-4xl pt-4">
            You are not regirterd yet
        </div>
        <div class="pt-4 font-bold justify-self-center text-4xl">
            please register first
        </div>
    </div>
</div>

@endif

@else
<div class="container">
    <div class="col-md-8 mx-auto ">
        <div class="border-l-red-600 border-l-4 font-medium text-3xl ">
            <span class="ml-1.5 text-red-500">
                Name
            </span>
        </div>
        <div class="font-extrabold text-5xl  ml-4">

            {{Auth::user()->name}}
        </div>
    </div>
    <div class="col-md-8 mx-auto mt-8">
        <div class="border-l-red-600 border-l-4 font-medium text-3xl ">
            <span class="ml-1.5 text-red-500">
                Email
            </span>
        </div>
        <div class="font-extrabold text-5xl  ml-4">

            {{Auth::user()->email}}
        </div>
    </div>
    <div class="col-md-8 mx-auto mt-8">
        <div class="border-l-red-600 border-l-4 font-medium text-3xl ">
            <span class="ml-1.5 text-red-500">
                Joined
            </span>
        </div>
        <div class="font-extrabold text-5xl  ml-4">

            {{date('Y-m-d',strtotime(Auth::user()->created_at))}}
        </div>
    </div>
    <div class="col-md-8 mx-auto mt-8">
        <div class="border-l-red-600 border-l-4 font-medium text-3xl ">
            <span class="ml-1.5 text-red-500">
                Weight
            </span>
        </div>
        <div class="font-extrabold text-5xl  ml-4">
            @if (Auth::user()->weight == null)
            <span>Not mentioned!</span>
            <div class="row mb-3">

                <div class="col-md-4 mt-1 flex">
                    <form action="info" method="POST">
                        @csrf
                        <input id="weight" type="number" class="form-control" name="weight">
                        <button type="submit" name="form1" class="btn bg-red-600 ml-1 text-white ">Submit</button>
                    </form>
                </div>
            </div>
            @else
            <span>{{Auth::user()->weight}} Kg</span>
            @endif

        </div>
    </div>
    <div class="col-md-8 mx-auto mt-8">
        <div class="border-l-red-600 border-l-4 font-medium text-3xl ">
            <span class="ml-1.5 text-red-500">
                Height
            </span>
        </div>
        <div class="font-extrabold text-5xl  ml-4">
            @if (Auth::user()->height == null)
            <span>Not mentioned!</span>
            <div class="row mb-3">

                <div class="col-md-4 mt-1 flex">
                    <form action="info" method="POST">
                        @csrf
                        <input id="height" type="number" class="form-control" name="height">
                        <button type="submit" name="form2" class="btn bg-red-600 ml-1 text-white ">Submit</button>
                    </form>
                </div>
            </div>
            @else
            <span>{{Auth::user()->height}} cm </span>
            @endif

        </div>
    </div>
    <div class="col-md-8 mx-auto mt-8">
        <div class="border-l-red-600 border-l-4 font-medium text-3xl ">
            <span class="ml-1.5 text-red-500">
                Chosen Plan
            </span>
        </div>
        <div class="font-extrabold text-5xl  ml-4">

            @if (Auth::user()->plan == 1)
            <span>
                Lose belly Challenge
            </span>
            @endif
            @if (Auth::user()->plan == 2)
            <span>
                Keep fit Challenge
            </span>
            @endif
            @if (Auth::user()->plan == 3)
            <span>

                Six Pack Challenge
            </span>
            @endif
        </div>
    </div>
</div>
@endguest
@endsection