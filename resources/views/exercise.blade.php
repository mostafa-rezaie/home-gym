@extends('layouts.app')


@section('exercise')
<script src="{{ asset('js/exercise.js') }}" defer></script>
<?php 
$time = 10;
$plan = Auth::user()->plan;
if ($plan == 1){
    $planName = 'Lose Belly Challenge';
}
if ($plan == 2){
    $planName = 'Keep Fit Challenge';
}
if ($plan == 3){
    $planName = 'Six Pack Challenge';
}
$dayNumber = Auth::user()->dayNum + 1;
$calBurned = $time * $plan * 1.5 * 10;
?>
<div class="container">
    <div class="container">
        <div class="box flex justify-center items-center">
            <div class="w-2/3 mx-auto mt-1">
                <div class="text-center">
                    <span
                        class="text-red-600 font-extrabold text-4xl text-center mt-3 border-x-4 border-x-red-600 px-4 "
                        id="exName"> </span>
                </div>
                <div class="imageContainer mt-3">

                    <img id="exerciseImage" class="mx-auto h-96" src="" alt="" />
                </div>
            </div>
            <div class="w-1/3 pr-32 text-center">
                <div id="countdown" class="text-2xl font-bold mb-1">
                </div>
                <progress value="0" max="30" id="progressBar" class="mt-2 w-full"></progress>
                <div id="after" style="display: none">
                    <button onclick="nextExercise()" class="btn bg-red-600 text-white mt-2">next excersie</button>
                </div>


                {{-- MODAL --}}
                <div id="finish" style="display: none">

                    <button class="btn btn-primary" id="myBtn">
                        Finish!
                    </button>
                    <div id="myModal" class="modal">

                        <div class="modal-content">
                            <h1 class="font-extrabold text-4xl mb-2 ">CONGRANTS!! </h1>
                            <h2 class="font-bold text-2xl mb-2">Dear {{Auth::user()->name}}</h2>
                            <h2 class="font-bold text-2xl text-red-400">
                                you have completed <?php echo $dayNumber ?>th your
                                <?php echo $planName ?>
                            </h2>
                            <h3 class="font-bold text-2xl ">
                                you burned <?php echo $calBurned  ?> Kcal today!
                            </h3>
                            <form action="/change-day" method="GET">
                                @csrf
                                <button type="submit"
                                    class="btn bg-red-600 text-white font-bold w-44 border mx-auto mt-4 rounded-md hover">
                                    Go Home</button>

                            </form>
                            {{-- <a href="/home">
                                <button
                                    class="btn bg-red-600 text-white font-bold w-44 border mx-auto mt-4 rounded-md hover">
                                    Go Home</button>


                            </a> --}}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection