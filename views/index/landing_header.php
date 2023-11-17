    <!-- Desktop header -->
    <section class="desktop-section-header">
        <div class="container-section-header">
            <!-- Banner -->
            <h1 id="banner-phrase"></h1>
            <!-- Static text -->
            <h2>De la Visión a la Realidad</h2>
            <h2>Tu Solucion Web Integral</h2>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var loop = 0;
            var phrases = [
                "Excelencia digital",
                "Captura, Crea, Cautiva",
                "Experiencias Digitales",
                "Desarrollo web integral"
            ]
            var phrases_qty = phrases.length;
            document.querySelector('#banner-phrase').innerHTML = phrases[loop];

            function bannerAnimation() {
                document.querySelector('#banner-phrase').innerHTML = phrases[loop];
                document.querySelector('#banner-phrase').style.animationName = "headerSlideIn";
                document.querySelector('#banner-phrase').style.animationDuration = "4s"; // Adjust the duration as needed
                document.querySelector('#banner-phrase').style.animationIterationCount = "infinite";
                
                loop++;
                if(loop > phrases_qty - 1){
                    loop = 0;
                }
            }

            bannerAnimation();

            setInterval(bannerAnimation, 4000); 

        });
    </script>


    <!-- Mobile header -->
    <section class="mobile-section-header">
        <div class="mobile-container-section-header">
            <!-- Banner -->
            <h1 id="mobile-banner-phrase"></h1>
            <!-- Static text -->
            <h2>De la Visión a la Realidad</h2>
            <h2>Tu Solucion Web Integral</h2>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var loop = 0;
            var phrases = [
                "Excelencia digital",
                "Captura, Crea, Cautiva",
                "Experiencias Digitales",
                "Desarrollo web integral"
            ]
            var phrases_qty = phrases.length;
            document.querySelector('#mobile-banner-phrase').innerHTML = phrases[loop];

            function mobileBannerAnimation() {
                document.querySelector('#mobile-banner-phrase').innerHTML = phrases[loop];
                document.querySelector('#mobile-banner-phrase').style.animationName = "headerSlideIn";
                document.querySelector('#mobile-banner-phrase').style.animationDuration = "4s"; // Adjust the duration as needed
                document.querySelector('#mobile-banner-phrase').style.animationIterationCount = "infinite";
                
                loop++;
                if(loop > phrases_qty - 1){
                    loop = 0;
                }
            }

            mobileBannerAnimation();

            setInterval(mobileBannerAnimation, 4000); 

        });
    </script>










