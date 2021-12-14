<!-- JavaScript files-->
<script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {
    
        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
        var div = document.createElement("div");
        div.className = 'd-none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }
    // this is set to Bootstrapious website as you cannot 
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.a4dea202.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://demo.bootstrapious.com/sell/1-2-0/icons/orion-svg-sprite.svg'); 
    
</script>
<!-- jQuery-->
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap JavaScript Bundle (Popper.js included)-->
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Owl Carousel-->
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/owl.carousel/owl.carousel.js"></script>
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
<!-- NoUI Slider (price slider)-->
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/nouislider/nouislider.min.js"></script>
<!-- Smooth scrolling-->
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
<!-- Lightbox gallery-->
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/glightbox/js/glightbox.min.js"> </script>
<!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/object-fit-images/ofi.min.js"></script>
<script>var basePath = ''</script>
<script src="js/theme.d7b4a888.js"></script>
<script src="https://d19m59y37dris4.cloudfront.net/sell/2-0/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="js/demo.36f8799a.js"></script>