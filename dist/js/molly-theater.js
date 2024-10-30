// Global
var theaterId = document.getElementById('mollyPluginTheater');
var theaterVideo = document.getElementById('mollyTheaterVideo');

// Data Attrs
var mpvVimeo = document.querySelectorAll('[data-molly-theater-vimeo]');
var mpvYoutube = document.querySelectorAll('[data-molly-theater-youtube]');

// iframe code
var iframeCodeFirst = '<div class="mollyTheaterCtn custom"><div class="mollyTheaterSize custom"><div id="mollyTheaterVideo" class="mollyTheater custom"><iframe class="mollyTheaterIframe custom" src="';
var iframeCodeSecond = '?autoplay=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; accelerometer; encrypted-media; gyroscope;"></iframe></div></div><div class="mollyVideoCloseTheaterButton custom"></div></div>';

// Functions
function openPlayer() {
  theaterId.classList.add('theaterIsOpen');
  document.body.classList.add('theaterIsOpen');
}
function closePlayer() {
  theaterId.innerHTML = '';
  theaterId.classList.remove('theaterIsOpen');
  document.body.classList.remove('theaterIsOpen');
}

// Open Player
// Vimeo
for (var i = 0; i < mpvVimeo.length; i++) {
  mpvVimeo[i].addEventListener('click', function() {
    var daVimeo = this.getAttribute('data-molly-theater-vimeo');
    var iframeVimeo = iframeCodeFirst + 'https://player.vimeo.com/video/' + daVimeo + iframeCodeSecond;
    openPlayer();
    theaterId.innerHTML = iframeVimeo;
  }, false);
}
// Youtube
for (var i = 0; i < mpvYoutube.length; i++) {
  mpvYoutube[i].addEventListener('click', function() {
    var daYoutube = this.getAttribute('data-molly-theater-youtube');
    var iframeYoutube = iframeCodeFirst + 'https://www.youtube.com/embed/' + daYoutube + iframeCodeSecond;
    openPlayer();
    theaterId.innerHTML = iframeYoutube;
  }, false);
}

// Close Player
document.addEventListener('keydown', function(e) {
  if (e.keyCode == 27) { // escape key maps to keycode `27`
    closePlayer();
  }
});
theaterId.addEventListener('click', function() {
  closePlayer();
}, false);