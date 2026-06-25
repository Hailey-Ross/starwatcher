<div id="particles-js"></div>

<script>
(function () {
  function getRandomBackground() {
    var bgImages = [
      'https://assets.hails.cc/i/bg1.jpg',
      'https://assets.hails.cc/i/bg2_transFlag.jpg',
      'https://assets.hails.cc/i/bg3_paintIt.png'
    ];
    return bgImages[Math.floor(Math.random() * bgImages.length)];
  }

  function loadParticles() {
    if (window._hailsParticlesLoaded) return;
    window._hailsParticlesLoaded = true;

    var coreScript = document.createElement('script');
    coreScript.src = 'https://assets.hails.cc/particlejs/particles.js';
    coreScript.onload = function () {
      var configScript = document.createElement('script');
      configScript.src = 'https://assets.hails.cc/particlejs/script.js';
      document.body.appendChild(configScript);
    };
    document.body.appendChild(coreScript);
  }

  window.addEventListener('load', function () {
    document.body.style.backgroundImage = "url('" + getRandomBackground() + "')";
    loadParticles();
  });
})();
</script>
