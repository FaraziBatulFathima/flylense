    <!-- ================= FOOTER ================= -->
    <style type="text/css">
        .social-icons .icon {
            width: 60px;
            object-fit: contain;
        }
        .inter, .inters {
            position: fixed;
            bottom: 50px;
            z-index: 1000;
        }
        .inter { right: 20px; }
        .inters { left: 20px; }
        @media (max-width: 768px) {
            .social-icons .icon { width: 40px; }
            .inter, .inters { bottom: 60px; }
        }
    </style>

    <footer id="footer" style="background-color: #000; padding: 50px 0; color: #fff;">
        <div class="container text-center">
            <span class="logo-default">
                <img style="padding-bottom: 30px;" src="img/logo/3.png" width="80">
            </span>
            <p style="margin-bottom: 20px; font-size: 1rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                At Flylense, we craft compelling stories through the lens — blending creativity, strategy, and innovation to bring your brand vision to life.
            </p>
            <div style="margin-bottom: 20px;">
                <a class="scroll-to" href="#section-1" style="color: #ccc; margin: 0 10px; text-decoration: none;">About</a>
                <a class="scroll-to" href="#section-2" style="color: #ccc; margin: 0 10px; text-decoration: none;">Services</a>
                <a class="scroll-to" href="#section-5" style="color: #ccc; margin: 0 10px; text-decoration: none;">Contact</a>
                <a class="scroll-to" href="privacy.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">Privacy Policy</a>
            </div>
            <div style="margin-top: 30px;">
                <h5 style="font-weight: 600; margin-bottom: 15px;">FOLLOW US</h5>
                <div class="social-icons social-icons-colored social-icons-rounded">
                    <ul style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 15px; font-size: 1.2rem;">
                        <li><a href="https://www.linkedin.com/in/fly-lense-media-partner-0a3092343/" target="_blank" style="color: #ccc;"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/flylensemediapartner/" target="_blank" style="color: #ccc;"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/@Flylense_media_partner" target="_blank" style="color: #ccc;"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <p style="font-size: 0.8rem; color: #777; margin-top: 30px;">&copy; 2025 Flylense. All Rights Reserved.</p>
        </div>
    </footer>

    <div class="social-icons">
        <div class="inter">
            <a href="https://www.instagram.com/flylensemediapartner/" target="_blank">
                <img class="icon" src="img/7.png" alt="Instagram">
            </a>
        </div>
        <div class="inters">
            <a onclick="window.open('https://api.whatsapp.com/send?phone=+919989571223&text=Hi,%20I%20got%20your%20number%20from%20your%20website')" target="_blank">
                <img class="icon" src="img/8.png" alt="WhatsApp">
            </a>
        </div>
    </div>

</div> <!-- end: Body Inner -->

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<!-- Plugins & Scripts -->
<script src="https://www.youtube.com/iframe_api"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script src="plugins/metafizzy/infinite-scroll.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/jquery.js"></script>
<script src="js/functions.js"></script>
<script src="js/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".warning").hide();
    });
</script>

</body>
</html>