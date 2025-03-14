<?php
/**
 * The footer for our theme.
 */

?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="column-4">
                    <a href="/"><img src="/wp-content/themes/konverzija/images/logo_konverzija.svg" alt="Konverzija logo" class="footer-logo"></a>
                    <h4>Regionalna digital marketing konferencija</h4>
                    <p>Za sve informacije i pitanja pišite nam na:
                        <a href="mailto:info@konverzija.org">info@konverzija.org</a>
                        ili nam se javite na live chat-u klikom na ikonicu desno.
                    </p>
                </div>

                <div class="column-4 newsletter">
                    <h4>Prijavite se na newsletter, ostvarite popust i budite u toku sa novostima.</h4>
                    <form method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
<div style="display: none;">
<input type="hidden" name="meta_web_form_id" value="344767836" />
<input type="hidden" name="meta_split_id" value="" />
<input type="hidden" name="listname" value="awlist6247204" />
<input type="hidden" name="redirect" value="https://www.aweber.com/thankyou-coi.htm?m=text" id="redirect_39d2bc3d262763bf0225bfa2ddb92e57" />

<input type="hidden" name="meta_adtracking" value="My_Web_Form" />
<input type="hidden" name="meta_message" value="1" />
<input type="hidden" name="meta_required" value="name,email" />

<input type="hidden" name="meta_tooltip" value="" />
</div>
<div id="af-form-344767836" class="af-form"><div id="af-header-344767836" class="af-header"><div class="bodyText"></div></div>
<div id="af-body-344767836" class="af-body af-standards">
<div class="af-element">

<div class="af-textWrap">
<input id="awf_field-113885140" type="text" name="name" placeholder="Ime i prezime" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="503" oninvalid="this.setCustomValidity('Ovo polje je obavezno')"
 oninput="setCustomValidity('')" required/>
</div>
<div class="af-clear"></div></div>
<div class="af-element">
<div class="af-textWrap"><input class="text" id="awf_field-113885141" type="text" name="email" placeholder="E-mail" value="" tabindex="504" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " oninvalid="this.setCustomValidity('Ovo polje je obavezno')"
 oninput="setCustomValidity('')" required/>
</div><div class="af-clear"></div>
</div>
<div class="af-element buttonContainer">
<input name="submit" class="submit" type="submit" value="Prijavi se" tabindex="505" />
<div class="af-clear"></div>
</div>
</div>
<div id="af-footer-344767836" class="af-footer"><div class="bodyText"><p>&nbsp;</p></div></div>
</div>
<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=zCws7GzsHMxs" alt="" /></div>
</form>
                        
                </div>

                <div class="column-4">
                    <h4>Pratite nas na:</h4>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/konverzija/" target="_blank"><img src="/wp-content/themes/konverzija/images/facebook.svg" alt="Facebook"></a></li>
                        <li><a href="https://www.instagram.com/konverzija/" target="_blank"><img src="/wp-content/themes/konverzija/images/instagram.svg" alt="Instagram"></a></li>
                        <li><a href="https://www.youtube.com/channel/UC01EWuzIYESxAJxx_RUhNjw" target="_blank"><img src="/wp-content/themes/konverzija/images/youtube.svg" alt="YouTube"></a></li>
                        <li><a href="https://twitter.com/konverzija" target="_blank"><img src="/wp-content/themes/konverzija/images/twitter.svg" alt="Twitter"></a></li>
                        <li><a href="https://www.tiktok.com/@konverzija" target="_blank"><img src="/wp-content/themes/konverzija/images/TikTok.svg" alt="TikTok"></a></li>
                    </ul>
                    <div class="privacy">
                        <a href="/uslovi-koristenja/">Uslovi korištenja</a>
                        <a href="/politika-privatnosti/">Politika privatnosti</a>
                        <a href="/impressum/">Impressum</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="backToTop"><img src="/wp-content/themes/konverzija/images/back-to-top.svg" alt="Nazad na vrh"></div>
    </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
          //nazad na vrh
        jQuery(function () {
            //Scroll event
            jQuery(window).scroll(function () {
                var scrolled = jQuery(window).scrollTop();
                if (scrolled > 900) jQuery('#backToTop').fadeIn('slow');
                if (scrolled < 900) jQuery('#backToTop').fadeOut('slow');
            });

            //Click event
            jQuery('#backToTop').click(function () {
                jQuery("html, body").animate({ scrollTop: "0" }, 500);
            });

        });


    </script>
      <script type="text/javascript">
// Special handling for in-app browsers that don't always support new windows
(function() {
    function browserSupportsNewWindows(userAgent) {
        var rules = [
            'FBIOS',
            'Twitter for iPhone',
            'WebView',
            '(iPhone|iPod|iPad)(?!.*Safari\/)',
            'Android.*(wv|\.0\.0\.0)'
        ];
        var pattern = new RegExp('(' + rules.join('|') + ')', 'ig');
        return !pattern.test(userAgent);
    }

    if (!browserSupportsNewWindows(navigator.userAgent || navigator.vendor || window.opera)) {
        document.getElementById('af-form-344767836').parentElement.removeAttribute('target');
    }
})();
</script><script type="text/javascript">
  
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-344767836")) {
                document.getElementById("af-form-344767836").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-344767836")) {
                document.getElementById("af-body-344767836").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-344767836")) {
                document.getElementById("af-header-344767836").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-344767836")) {
                document.getElementById("af-footer-344767836").className = "af-footer af-quirksMode";
            }
        }
    })();

</script>

</body>
</html>