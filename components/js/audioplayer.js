/**
 * @name audioplayer.js
 * @version 0.1
 * @author luca mack
 * @description provides an api to insert an audioplayer element on a website by just adding html attributes to elements 
*/

// Function to initialize the audio player
function initializeAudioPlayer(player) {
    const controls = player.querySelector('[data-audioplayer-controls]');
    const playlist = player.querySelector('[data-audioplayer-playlist]');
    const currentTrackImage = player.querySelector('[data-audioplayer-current-image]');
    const currentTrackTitle = player.querySelector('[data-audioplayer-current-track]');
    const currentArtistTitle = player.querySelector('[data-audioplayer-current-artist]');

    const playPauseButton = controls.querySelector('[data-audioplayer-control="play-pause"]');
    const prevButton = controls.querySelector('[data-audioplayer-control="prev"]');
    const nextButton = controls.querySelector('[data-audioplayer-control="next"]');
    const repeatPlaylistButton = controls.querySelector('[data-audioplayer-control="repeat-playlist"]');
    const repeatTrackButton = controls.querySelector('[data-audioplayer-control="repeat-track"]');
    const volumeInput = controls.querySelector('[data-audioplayer-control="volume"]');
    const muteUnmuteButton = controls.querySelector('[data-audioplayer-control="mute-unmute"]');
    const progressBar = controls.querySelector('[data-audioplayer-control="progress-bar"]');

    const trackItems = Array.from(playlist.querySelectorAll('[data-audioplayer-track]'));
    let currentTrackIndex = 0;
    let audio = new Audio(); // Create a new audio element

    function loadAndPlayTrack(index) {
        const trackItem = trackItems[index];
        const trackURL = trackItem.getAttribute('data-audioplayer-track-url'); // Corrected attribute retrieval
        const trackImage = trackItem.querySelector('[data-audioplayer-track-cover]');
        const trackTitle = trackItem.querySelector('[data-audioplayer-track-title]');
        const artistTitle = trackItem.querySelector('[data-audioplayer-track-artist]');

        audio.src = trackURL;
        currentTrackImage.src = trackImage.src;
        currentTrackTitle.textContent = trackTitle.textContent;
        currentArtistTitle.textContent = artistTitle.textContent;

        // Check if audio is ready and then play
        if (audio.readyState >= 3) {
            playAudio();
        } else {
            audio.addEventListener('canplay', playAudio);
        }
    }

    function playAudio() {
        audio.play().then(() => {
            playPauseButton.setAttribute('data-audioplayer-current-state', 'play');
        }).catch(error => {
            console.error('Error trying to play the audio:', error);
        });
    }


    // Event listeners for play/pause, prev, and next buttons
    playPauseButton.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            playPauseButton.setAttribute('data-audioplayer-current-state', 'play');
        } else {
            audio.pause();
            playPauseButton.setAttribute('data-audioplayer-current-state', 'pause');
        }
    });

    prevButton.addEventListener('click', () => {
        currentTrackIndex = (currentTrackIndex - 1 + trackItems.length) % trackItems.length;
        loadAndPlayTrack(currentTrackIndex);
    });

    nextButton.addEventListener('click', () => {
        currentTrackIndex = (currentTrackIndex + 1) % trackItems.length;
        loadAndPlayTrack(currentTrackIndex);
    });

    // Function to toggle repeat playlist
    function toggleRepeatPlaylist() {
        audio.loop = false; // Disable track looping
        repeatPlaylistButton.classList.toggle('active');
        // Logic to repeat the playlist
        audio.onended = () => {
            if (repeatPlaylistButton.classList.contains('active')) {
                currentTrackIndex = (currentTrackIndex + 1) % trackItems.length;
                loadAndPlayTrack(currentTrackIndex);
            }
        };
    }

    // Function to toggle repeat track
    function toggleRepeatTrack() {
        repeatTrackButton.classList.toggle('active');
        audio.loop = repeatTrackButton.classList.contains('active');
    }

    // Function to update volume
    function updateVolume() {
        audio.volume = volumeInput.value / 100;
    }

    // Function to toggle mute/unmute
    function toggleMuteUnmute() {
        audio.muted = !audio.muted;
        muteUnmuteButton.classList.toggle('muted', audio.muted);
    }

    // Function to update progress bar
    function updateProgressBar() {
        progressBar.value = (audio.currentTime / audio.duration) * 100;
    }

    function seekTrack(event) {
        const progressBarRect = progressBar.getBoundingClientRect();
        const seekTime = ((event.clientX - progressBarRect.left) / progressBarRect.width) * audio.duration;
        audio.currentTime = seekTime;
    }

    // Add event listeners
    repeatPlaylistButton.addEventListener('click', toggleRepeatPlaylist);
    repeatTrackButton.addEventListener('click', toggleRepeatTrack);
    volumeInput.addEventListener('input', updateVolume);
    muteUnmuteButton.addEventListener('click', toggleMuteUnmute);
    progressBar.addEventListener('change', seekTrack);

    // Update progress bar as the track plays
    audio.addEventListener('timeupdate', updateProgressBar);

    // Initialize the player with the first track
    loadAndPlayTrack(currentTrackIndex);

}

// Initialize all audio players on the page
const audioPlayers = document.querySelectorAll('[data-audioplayer]');
audioPlayers.forEach((player) => {
    initializeAudioPlayer(player);
});