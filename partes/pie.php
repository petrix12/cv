<!-- grids block 5 -->
<section class="w3l-footer-29-main" id="footer">
    <div class="footer-29 text-center">
        <div class="container">
            <div class="main-social-footer-29">
                <a href="https://www.facebook.com/HyS-Office-107321274381310/?view_public_for=107321274381310" target="_blank" class="facebook"><span class="fa fa-facebook"></span></a>
                <a href="https://twitter.com/petrix12" target="_blank" class="twitter"><span class="fa fa-twitter"></span></a>
                <a href="https://github.com/petrix12" target="_blank" class="github"><span class="fa fa-github"></span></a>
                <a href="https://www.youtube.com/channel/UCgI3CMta_Vc4GHZwbzG3e-Q" target="_blank" class="youtube"><span class="fa fa-youtube"></span></a>
                <a href="https://www.instagram.com/bazopedro/" target="_blank" class="instagram"><span class="fa fa-instagram"></span></a>
                <!--<a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>-->
                <a href="https://www.linkedin.com/in/pedro-bazo/" target="_blank" class="linkedin"><span class="fa fa-linkedin"></span></a>
            </div>
            <div class="bottom-copies text-center">
                <p class="copy-footer-29">© 2020 Ing. Pedro Jesús Bazó Canelón.</p>
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>
<!-- // grids block 5 -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<!-- Smooth scrolling -->