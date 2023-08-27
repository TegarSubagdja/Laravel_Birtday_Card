const button = document.getElementById('button');

button.addEventListener('click', () => {
    var audio = new Audio("assets/musik/musik.mp3");
    audio.oncanplaythrough = function () {
        audio.play();
    }
    audio.onended = function () {
        audio.play();
    }
})