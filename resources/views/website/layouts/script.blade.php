<!-- Scripts -->
<script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('website/js/purecounter.min.js') }}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  -->
<script src="{{ asset('website/js/swiper.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('website/js/script.js?v=') }}{{ time() }}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/608a548b62662a09efc32fc1/1f4e5l3pq';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
@captchaScripts
@stack('js')

<!-- END of Scripts -->
