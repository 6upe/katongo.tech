<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/wave-animate.js') }}"></script>
<script src="{{ asset('js/circle-progress.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('js/scrollmagic.animation.gsap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>
    document.getElementById('toggle-story').addEventListener('click', function () {
      const moreStory = document.getElementById('more-story');
      if (moreStory.style.display === 'none') {
        moreStory.style.display = 'block';
        this.textContent = 'Show Less';
      } else {
        moreStory.style.display = 'none';
        this.textContent = 'Continue Reading';
      }
    });
  </script>
  