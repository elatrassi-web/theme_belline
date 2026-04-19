<?php
/**
 * The template for displaying the footer
 */
?>
    <footer id="colophon" class="site-footer" style="text-align: center; padding: 20px;">
        <div class="site-info">
            <a href="<?php echo esc_url( home_url( '/cgu-cgv' ) ); ?>" style="font-size:13px;color:rgb(255, 255, 0);">CGU / CGV</a>
            <br><br>
            <!-- Original Footer Banners -->
            <a href="http://annuaire-esoterique.com/cartomancie.php" target="_blank" rel="noopener"><img src="http://annuaire-esoterique.com/Annuaire88x31.gif" alt="annuaire-esoterique.com" width="88" height="31" border="0"></a>
            <a href="https://www.autosurf.fr/?ref=10148" target="_blank"><img src="https://www.autosurf.fr/promo/trafic2.gif" alt="Autosurf Officiel" width="88" height="31"></a>
            <a href="http://esopole.com" target="_blank" rel="noopener"><img src="https://esopole.com/Banniere/EsopoleRef88x31.gif" style="width:88px;height:31px;" alt="Portail esoterique"></a>
            <a href="https://www.voyancemax.fr" target="_blank">https://www.voyancemax.fr</a>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->


    <!-- Cookie Consent Banner -->
    <div id="cookie-consent-banner" style="display: none; position: fixed; bottom: 0; left: 0; width: 100%; background-color: #2c2c2c; color: #fff; padding: 15px 20px; z-index: 9999; box-sizing: border-box; text-align: center; font-family: sans-serif; font-size: 14px; box-shadow: 0 -2px 10px rgba(0,0,0,0.5); border-top: 2px solid #444;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: row; align-items: center; justify-content: space-between; gap: 20px;">
            <div style="flex: 1; text-align: left; line-height: 1.5;">
                Ce site utilise des cookies pour vous garantir la meilleure expérience sur notre site. En poursuivant votre navigation, vous acceptez l'utilisation de cookies pour vous proposer des contenus et services adaptés à vos centres d'intérêts... Si vous souhaitez ignorer les cookies, vous pouvez modifier les paramètres de votre navigateur. <a href="#" style="color: #aaa; text-decoration: underline;">En savoir plus...</a>
            </div>
            <div>
                <button id="accept-cookies-btn" style="background-color: #fafa00; color: #000; border: none; padding: 10px 30px; font-weight: bold; cursor: pointer; border-radius: 3px; font-size: 14px;">Accepter !</button>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var banner = document.getElementById('cookie-consent-banner');
        var acceptBtn = document.getElementById('accept-cookies-btn');

        // Check if cookie exists
        if (!document.cookie.split('; ').find(row => row.startsWith('belline_cookies_accepted='))) {
            banner.style.display = 'block';
        }

        acceptBtn.addEventListener('click', function() {
            // Set cookie for 1 year
            var d = new Date();
            d.setTime(d.getTime() + (365*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = "belline_cookies_accepted=true;" + expires + ";path=/";

            // Hide banner
            banner.style.display = 'none';
        });
    });
    </script>
<?php wp_footer(); ?>

</body>
</html>
