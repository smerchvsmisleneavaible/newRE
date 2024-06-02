$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

const audioElements = Array.from(document.getElementsByTagName('audio'));
const stopOtherAudio = (currentAudio) => {
    audioElements.forEach((audio) => {
        if (audio !== currentAudio) {
            audio.pause();
            audio.currentTime = 0;
        }
    });
};
audioElements.forEach((audio) => {
    audio.addEventListener('play', () => stopOtherAudio(audio));
});
