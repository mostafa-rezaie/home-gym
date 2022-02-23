@extends('layouts.app')


@section('change-plan')
<div class="container">
    <div class="plan-container flex justify-around">
        <div id="plan1" class="border-4 border-l-red-600 p-4">
            <h1 class="font-bold text-lg ">
                Plan <span class="text-3xl text-red-600">1</span>
            </h1>
            <h1 class="text-2xl text-red-600 mt-3">Lose Belly Challenge</h1>
        </div>
        <div  id="plan1" class="border-4 border-l-red-600 p-4">
            <h1 class="font-bold text-lg ">
                Plan <span class="text-3xl text-red-600">2</span>
            </h1>
            <h1 class="text-2xl text-red-600 mt-3">Keep Fit Challenge</h1>
        </div>
        <div id="plan1" class="border-4 border-l-red-600 p-4">
            <h1 class="font-bold text-lg ">
                Plan <span class="text-3xl text-red-600">3</span>
            </h1>
            <h1 class="text-2xl text-red-600 mt-3">Six Pack Challenge</h1>

        </div>

    </div>
    <div class="input-container w-64 mx-auto mt-12">

        <form action="change-plan" method="POST">
            @csrf
            <input id="plan" type="number" class="form-control" name="plan">
            <div class="button-container flex justify-center">

                <button type="submit" name="form3" class="btn bg-red-600  mt-2 w-1/2  text-white ">Submit</button>
            </div>

        </form>
    </div>
</div>
@endsection