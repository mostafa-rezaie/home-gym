var i = 1;
// exName = document.getElementById("#exName");
var plan = 1;
var url = window.location.href;
planNumber = url.charAt(url.length - 1);

exNames1 = [
    "Donkey Kicks",
    "Side Planks",
    "Diamond Push",
    "Elevated Press",
    "Calve Raises",
];
exNames2 = [
    "Squat Jumps",
    "Lateral Lunges",
    "Dead Lift",
    "Bench Dips",
    "Glute Bridge",
];
exNames3 = [
    "Bent Over Rear Raise",
    "Lateral Raises",
    "Shoulder Press",
    "Wrist Curl ",
    "Crunch",
];
if (planNumber == "e") {
    exName = [...exNames1];
    plan = 1;
    document.getElementById("exName").innerHTML = exName[0];
    imageSrc = document.querySelector("#exerciseImage");
    imageSrc.src = "gifs/"+plan+"/" + i + ".gif";
    
}
if (planNumber == "2") {
    plan = 2;
    exName = exNames2.slice();
    document.getElementById("exName").innerHTML = exNames2[0];
    imageSrc = document.querySelector("#exerciseImage");
    imageSrc.src = "gifs/"+plan+"/" + i + ".gif";
    
}
if (planNumber == "3") {
    plan = 3;
    exName = exNames3.slice();
    document.getElementById("exName").innerHTML = exNames3[0];
    imageSrc = document.querySelector("#exerciseImage");
    imageSrc.src = "gifs/"+plan+"/" + i + ".gif";
    
}

// exName.innerHTML = exName[0];

function loadPage() {
    setTimeout(() => {
        document.getElementById("result").innerHTML = "has been finished";
        document.getElementById("after").style.display = "block";
    }, 5000);
    // var timer = setInterval(() => {
    //     i++;
    //     if (i >= 5) {
    //         clearInterval(timer);
    //     }
    //     imageSrc = document.querySelector("#exerciseImage");
    //     imageSrc.src = "gifs/1/" + i + ".gif";
    //     setTimeout(() => {
    //         console.log("delayed");
    //     }, 2000);
    //     console.log("gifs/1/" + i + ".gif");
    // }, 5000);
}
function nextExercise() {
    i++;
    document.getElementById("exName").innerHTML = exName[i - 1];
    document.getElementById("after").style.display = "none";
    imageSrc = document.querySelector("#exerciseImage");
    imageSrc.src = "gifs/"+plan+"/" + i + ".gif";
    setTimeout(() => {
        timer();
    }, 1000);
    // loadPage();
}
function timer() {
    var timeLeft = 30;
    var downloadTimer = setInterval(function () {
        if (timeLeft <= 0) {
            clearInterval(downloadTimer);
            document.getElementById("progressBar").value = 30 - timeLeft;
            document.getElementById("countdown").innerHTML = "Finished";
            document.getElementById("after").style.display = "block";
            if (i == 5) {
                document.getElementById("after").style.display = "none";
                document.getElementById("finish").style.display = "block";
            }
        } else {
            document.getElementById("progressBar").value = 30 - timeLeft;
            document.getElementById("countdown").innerHTML =
                timeLeft + " seconds remaining";
        }
        timeLeft -= 5;
    }, 1000);
}
timer();

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

btn.onclick = function () {
    modal.style.display = "block";
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
