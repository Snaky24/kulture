</main>
</div>
</body>
<footer class="pied_de_page-mobile">
        <h3 class="pied-de-page__elements">
                <img class="logo__footer-mobile" src="<?php echo $niveau; ?>liaisons/images/svg/logo.svg" alt="Logo">
                <span class="pied_de_page__coordonnees-mobile">
                        <a class="lien__mails-mobile">info@goall.ca</a>
                        <a class="credit-mobile">©2024 GO-ALL</a>
                </span>
                <span class="social-buttons-mobile">
                        <a class="social-button social-button--facebook-mobile" aria-label="Facebook">
                                <i class="fab fa-facebook-f-mobile"></i>
                                <img class="svg__socials-mobile" src="<?php echo $niveau; ?>liaisons/images/svg/facebook.svg" alt="Logo Facebook" width="20" height="20">
                        </a>
                        <a class="social-button social-button--x-mobile" aria-label="X">
                                <i class="fab fa-x-x-mobile"></i>
                                <img class="svg__socials-mobile" src="<?php echo $niveau; ?>liaisons/images/svg/x.svg" alt="Logo X" width="20" height="20">
                        </a>
                        <a class="social-button social-button--instagram-mobile" aria-label="Instagram">
                                <i class="fab fa-instagram-mobile"></i>
                                <img class="svg__socials-mobile" src="<?php echo $niveau; ?>liaisons/images/svg/instagram.svg" alt="Logo Instagram" width="20" height="20">
                        </a>
                        <a class="social-button social-button--youtube-mobile" aria-label="Youtube">
                                <i class="fab fa-youtube-yt-mobile"></i>
                                <img class="svg__socials-mobile" src="<?php echo $niveau; ?>liaisons/images/svg/youtube.svg" alt="Logo Youtube" width="20" height="20">
                        </a>
                </span>
        </h3>
        <section class="pied-de-page__compte">
                <div class="card__elements">
                        <ul class="card__elements-liste">
                                <li class="card__elements-items">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="compte__svg">
                                                <path d="M8,.5C3.8643.5.5,3.8643.5,8c0,2.0415.7998,3.9414,2.248,5.3452,1.4014,1.3896,3.2666,2.1548,5.252,2.1548.2482,0,.4945-.012.7382-.0356,1.7062-.1654,3.287-.9028,4.5098-2.1153.0008-.0008.0015-.0016.0023-.0024l.0016-.0015s.0002-.0005.0005-.0008c1.4493-1.4072,2.2476-3.3051,2.2476-5.3444,0-4.1357-3.3643-7.5-7.5-7.5ZM6.8575,14.3957c-.0261-.0046-.0528-.0067-.0788-.0115-.3552-.0671-.7005-.1683-1.0364-.2927-.0404-.015-.0817-.0273-.1218-.0431-.3229-.1271-.6331-.2839-.9318-.4623-.0457-.0273-.0921-.0532-.1371-.0816-.2906-.1837-.5667-.3932-.8276-.6243-.0231-.0204-.046-.0411-.0687-.0618.5311-1.9387,2.3144-3.3184,4.3448-3.3184s3.814,1.3798,4.3449,3.3186c-.0221.0201-.0443.0402-.0667.0599-.2628.2329-.5405.4439-.8333.6287-.0422.0266-.0858.0508-.1285.0764-.3008.1801-.6135.338-.939.4659-.0382.015-.0777.0268-.1161.0411-.3372.1251-.6837.2264-1.0403.2938-.0257.0048-.0521.0068-.0779.0114-.3738.0659-.7552.1044-1.1431.1044s-.7689-.0385-1.1425-.1043ZM13.12,11.9928c-.817-2.0687-2.8407-3.4928-5.12-3.4928s-4.3033,1.4243-5.1201,3.4933c-.8912-1.128-1.3799-2.5156-1.3799-3.9933,0-3.584,2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5c0,1.4764-.4879,2.8629-1.38,3.9928Z"></path>
                                                <path d="M8,2.5c-1.3789,0-2.5,1.1216-2.5,2.5s1.1211,2.5,2.5,2.5,2.5-1.1216,2.5-2.5-1.1211-2.5-2.5-2.5ZM8,6.5c-.8271,0-1.5-.6729-1.5-1.5s.6729-1.5,1.5-1.5,1.5.6729,1.5,1.5-.6729,1.5-1.5,1.5Z"></path>
                                        </svg>
                                        <p class="compte__items">
                                                <?php
                                                if ($ligneUtilisateurs) {
                                                        echo htmlspecialchars($ligneUtilisateurs['prenom']) . " " . htmlspecialchars($ligneUtilisateurs['nom']);
                                                } else {
                                                        echo "Aucun utilisateur trouvé.";
                                                }
                                                ?></p>
                                </li>
                                <li class="card__elements-items">
                                        <svg class="parametres__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <defs>
                                                        <style>
                                                                .cls-1 {
                                                                        fill: none;
                                                                        stroke: #1d1d1b;
                                                                        stroke-miterlimit: 10;
                                                                }
                                                        </style>
                                                </defs>
                                                <path class="cls-1" d="M8,.5C3.86.5.5,3.86.5,8c0,2.04.8,3.94,2.25,5.35,1.4,1.39,3.27,2.15,5.25,2.15.25,0,.49-.01.74-.04,1.71-.17,3.29-.9,4.51-2.12,0,0,0,0,0,0h0s0,0,0,0c1.45-1.41,2.25-3.31,2.25-5.34C15.5,3.86,12.14.5,8,.5Z" />
                                                <path d="M7.27,2.99c-.17,0-.31.12-.35.28l-.14.66c-.28.08-.55.18-.81.31l-.57-.36c-.14-.09-.33-.07-.44.05l-1.03,1.03c-.12.12-.14.3-.05.44l.37.58c-.13.24-.24.5-.32.77l-.68.16c-.16.04-.28.18-.28.35v1.43c0,.17.11.31.28.35l.68.16c.08.27.19.53.32.77l-.37.58c-.09.14-.07.32.05.44l1.01,1.03c.12.12.31.14.45.05l.59-.37c.26.14.53.25.81.33l.14.67c.03.17.18.28.35.28h1.43c.17,0,.31-.12.35-.28l.14-.65c.29-.08.57-.19.83-.33l.57.35c.14.09.32.07.44-.05l1.01-.98c.12-.12.14-.3.06-.44l-.36-.59c.14-.25.24-.52.33-.79l.67-.14c.17-.03.28-.18.28-.35v-1.47c0-.17-.12-.31-.28-.35l-.64-.14c-.08-.28-.19-.55-.33-.81l.35-.57c.09-.14.07-.32-.05-.44l-1.03-1.03c-.12-.12-.3-.14-.44-.05l-.57.35c-.26-.14-.53-.25-.81-.33l-.14-.65c-.04-.17-.18-.28-.35-.28h-1.45ZM7.56,3.71h.87l.12.54c.03.13.13.24.27.27.37.08.73.23,1.06.42.12.07.26.07.38,0l.47-.3.63.63-.3.47c-.07.12-.07.26,0,.38.19.31.34.67.43,1.06.03.13.14.24.27.27l.55.12v.9l-.56.12c-.13.03-.24.13-.27.26-.09.37-.23.71-.42,1.03-.07.11-.07.26,0,.38l.3.49-.6.59-.48-.3c-.12-.07-.26-.07-.38,0-.33.2-.7.34-1.08.42-.14.03-.24.14-.27.27l-.12.55h-.85l-.12-.57c-.03-.13-.13-.24-.27-.27-.39-.09-.75-.23-1.06-.42-.12-.07-.26-.07-.38,0l-.49.31-.6-.62.32-.5c.07-.11.08-.26,0-.38-.19-.31-.34-.66-.43-1.02-.03-.13-.13-.23-.26-.26l-.57-.14v-.86l.57-.14c.13-.03.23-.13.27-.26.09-.36.24-.7.43-1.02.07-.12.07-.26,0-.38l-.31-.5.62-.62.47.3c.12.07.26.07.38,0,.3-.19.66-.31,1.06-.4.13-.03.24-.14.26-.27l.12-.56h0ZM8.01,5.85c-1.18,0-2.15.97-2.15,2.15s.96,2.14,2.15,2.14,2.15-.96,2.15-2.14-.97-2.15-2.15-2.15ZM8.01,6.57c.79,0,1.43.64,1.43,1.43s-.64,1.43-1.43,1.43-1.43-.63-1.43-1.43.64-1.43,1.43-1.43Z" />
                                        </svg>

                                        <p class="parametres__items">Mes paramètres</p>
                                </li>
                                <li class="card__elements-items">
                                        <svg class="deconnexion__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <defs>
                                                        <style>
                                                                .cls-1 {
                                                                        fill: none;
                                                                        stroke: #1d1d1b;
                                                                }

                                                                .cls-1,
                                                                .cls-2 {
                                                                        stroke-miterlimit: 10;
                                                                }

                                                                .cls-2 {
                                                                        fill: #1d1d1b;
                                                                        stroke: #000;
                                                                        stroke-width: .5px;
                                                                }
                                                        </style>
                                                </defs>
                                                <path class="cls-1" d="M8,.5C3.86.5.5,3.86.5,8c0,2.04.8,3.94,2.25,5.35,1.4,1.39,3.27,2.15,5.25,2.15.25,0,.49-.01.74-.04,1.71-.17,3.29-.9,4.51-2.12,0,0,0,0,0,0h0s0,0,0,0c1.45-1.41,2.25-3.31,2.25-5.34C15.5,3.86,12.14.5,8,.5Z" />
                                                <g>
                                                        <path class="cls-2" d="M7.99,13.01c-2.73,0-4.93-2.21-4.93-4.94,0-1.34.55-2.63,1.52-3.56.09-.09.25-.1.34,0,0,0,0,0,0,0,.09.09.09.25,0,.34-1.77,1.7-1.84,4.52-.14,6.29,1.7,1.77,4.52,1.84,6.29.14,1.77-1.7,1.84-4.52.14-6.29-.04-.05-.09-.09-.14-.14-.09-.09-.09-.25,0-.34.09-.09.25-.1.34,0,0,0,0,0,0,0,1.97,1.89,2.03,5.01.14,6.98-.93.97-2.22,1.52-3.57,1.52Z" />
                                                        <path class="cls-2" d="M7.99,8.48c-.13,0-.24-.11-.24-.24V3.24c0-.13.11-.24.24-.24s.24.11.24.24v5.01c0,.13-.11.24-.24.24Z" />
                                                </g>
                                        </svg>

                                        <p class="deconnexion__items">Me d&eacute;connecter</p>
                                </li>
                        </ul>
                </div>
        </section>
</footer>

</html>