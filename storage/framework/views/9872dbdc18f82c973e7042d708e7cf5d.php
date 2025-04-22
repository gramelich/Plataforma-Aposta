
<meta charset="utf-8">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/components.css" rel="stylesheet" type="text/css">
<link href="css/homes.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/css/introduction.css">

<link rel="stylesheet" href="https://unpkg.com/flickity@2.3.0/dist/flickity.css">



<script>
    if (window.innerWidth > 600) {
        document.querySelector('.swiper-slide').style.width = 'calc(50%)';
    }
</script>


<div class="container">
    <div class="intro">
        <div class="intro-left">
            <div>
                <img width="350px"src="/img/bemvindo.png" style="margin-bottom:10px;"/>
                <br>
                <h2 class="intro-subtitle">Divirta-se jogando e ganhando dinheiro online, Retiradas rápidas e
                    aprovadas 24/7. A Sua Nova Plataforma de Cassino online 100% Fairplay.</h2>
                <div class="intro-login">

                    <?php if(Auth::user()): ?>
                        <a href="index.html">BuumBet</a>
                    <?php else: ?>
                        <button type="button" id="loginRegister">Entrar ou Cadastrar
                        </button>
                    <?php endif; ?>

                    <div class="content-intro-login">
                        <span><small>Acesse agora nosso site<b></b></small></span>
                        <img width="44" height="44" src="/img/logofogo.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-right">
        </div>
    </div>

    <div class="index-features">
        <div class="col-features">
            <a href="/crash" class="free-to-play"
                style="background-image: url('/img/bg-1_2x.dc8a421.png');">
                <span>Jogue Agora o Crash e Lucre até 300x por partida!</span>
            </a>
            <a href="/affiliate"
                style="background-image: url('/img/bg-2_1x.c124441.png');">
                <span>Lucre com Indicações</span>
            </a>
            <a href="#"
                class="wallet-link"
                style="background-image: url('/img/bg-3_1x.6150cf5.png');">
                <span>Saques Imediatos</span>
            </a>
        </div>


        <div class="col-features">
            <a href="/wheel" class="#">
                <span>Jogue na Roleta e Multiplique Sua Banca em até 50x</span>
                <div class="parent-spin-preview">
                    <img width="101" height="77" src="/img/MOEDA_02.png"
                            class="coin coin-1">
                    <img width="79" height="76"
                            src="/img/MOEDA_03.png"
                            class="coin coin-2">
                    <img width="119" height="119" src="/img/MOEDA_04.png"
                            class="coin coin-3">
                    <img width="76" height="77"
                            src="/img/MOEDA_05.png"
                            alt="" class="coin coin-4">
                    <img width="152" height="162" src="/img/MOEDA_05.png"
                            class="coin coin-5">
                    <img width="124" height="126" src="/img/MOEDA_03.png"
                            class="coin coin-6">
                    <div class="spin-preview layer-0">
                        <img width="405" height="405"
                                src="/templates/default/img/betnew/spin-preview-layer-0@1x.dd1753f.webp">
                    </div>
                    <div class="spin-preview layer-1">
                        <img width="276" height="276"
                                src="/templates/default/img/betnew/spin-preview-layer-1@1x.b9d7398.webp">
                    </div>
                    <div class="spin-preview layer-2">
                        <img width="233" height="233"
                                src="/templates/default/img/betnew/spin-preview-layer-2@1x.e4cd111.webp">
                    </div>
                    <div class="spin-preview layer-3">
                        <img width="233" height="233"
                                src="/templates/default/img/betnew/spin-preview-layer-3@1x.3d0893e.webp">
                    </div>
                    <div class="spin-preview layer-4">
                        <img width="194" height="194"
                                src="/img/roleta.png">
                    </div>
                </div>
            </a>
        </div>

        <div class="col-features">
            <a href="#"
            class="wallet-link"
                style="background-image: url(/img/bg-4_1x.56ae9bd.png);">
                <span>Depósitos Imediatos</span>
            </a>
            <a href="/mines" class="free-to-play"
                style="background-image: url(/img/bg-5_1x.0006b1c.png);">
                <span>Lucre Muito no Mines</span>
            </a>
            <a href="javascript:;"
                style="background-image: url(/img/bg-6_1x.8938de0.png);">
                <span>Sistema 100% FairPlay</span>
            </a>
        </div>
    </div>

    <div class="index-features2">
        <div class="one-category">
            <div class="head-one-category">
                <a href="/slots/" class="h-one-category">
                    <svg width="24" height="24" focusable="false" aria-hidden="true" class="">
                        <use xlink:href="/templates/default/img/betnew/svg-sprite.e1149d9.svg#icon-inhouse"
                                class="svg-use"></use>
                    </svg>
                    JOGOS DA CASA
                </a>
            </div>

            <div class="swiper game-swiper">
                <div class="swiper-wrapper" style="height: 1rm;">

                    <div class="swiper-slide">
                        <div class="game-slide">
                            <div class="img-game-slide"
                                    style="background-image: url(/img/jogos_display04.png);">
                                <div class="meta-game-slide hot">hot</div>
                                <div class="meta-game-slide new">new</div>
                            </div>
                            <div class="hover-game-slide">
                                <div class="h-game-slide">Crash</div>
                                <a href="/crash" class="play-game-slide">
                                    <svg focusable="false" aria-hidden="true" class="">
                                        <use
                                            xlink:href="/templates/default/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                            class="svg-use"></use>
                                    </svg>
                                </a>
                                <div class="provider-game-slide">
                                    <a href="#">
                                        Jogo da Casa
                                    </a>
                                </div>
                                <div class="provider-game-slide">
                                    Jogue agora!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-slide">
                            <div class="img-game-slide"
                                    style="background-image: url(/img/jogos_display06.png);">
                                <div class="meta-game-slide hot">hot</div>
                                <div class="meta-game-slide new">new</div>
                            </div>
                            <div class="hover-game-slide">
                                <div class="h-game-slide">Roleta</div>
                                <a href="/wheel" class="play-game-slide">
                                    <svg focusable="false" aria-hidden="true" class="">
                                        <use
                                            xlink:href="/templates/default/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                            class="svg-use"></use>
                                    </svg>
                                </a>
                                <div class="provider-game-slide">
                                    <a href="#">
                                        Jogo da Casa
                                    </a>
                                </div>
                                <div class="provider-game-slide">
                                    Jogue agora!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-slide">
                            <div class="img-game-slide"
                                    style="background-image: url(/img/jogos_display05.png);">
                                <div class="meta-game-slide hot">hot</div>
                                <div class="meta-game-slide new">new</div>
                            </div>
                            <div class="hover-game-slide">
                                <div class="h-game-slide">Mines</div>
                                <a href="/mines" class="play-game-slide">
                                    <svg focusable="false" aria-hidden="true" class="">
                                        <use
                                            xlink:href="/templates/default/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                            class="svg-use"></use>
                                    </svg>
                                </a>
                                <div class="provider-game-slide">
                                    <a href="#">
                                        Jogo da Casa
                                    </a>
                                </div>
                                <div class="provider-game-slide">
                                    Jogue agora!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-slide">
                            <div class="img-game-slide"
                                    style="background-image: url(/img/jogos_display02.png);">
                                <div class="meta-game-slide hot">hot</div>
                                <div class="meta-game-slide new">new</div>
                            </div>
                            <div class="hover-game-slide">
                                <div class="h-game-slide">Tower</div>
                                <a href="/tower" class="play-game-slide">
                                    <svg focusable="false" aria-hidden="true" class="">
                                        <use
                                            xlink:href="/templates/default/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                            class="svg-use"></use>
                                    </svg>
                                </a>
                                <div class="provider-game-slide">
                                    <a href="#">
                                        Jogo da Casa
                                    </a>
                                </div>
                                <div class="provider-game-slide">
                                    Jogue agora!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-slide">
                            <div class="img-game-slide"
                                    style="background-image: url(/img/jogos_display01.png);">
                                <div class="meta-game-slide hot">hot</div>
                                <div class="meta-game-slide new">new</div>
                            </div>
                            <div class="hover-game-slide">
                                <div class="h-game-slide">Batalha</div>
                                <a href="/coinflip" class="play-game-slide">
                                    <svg focusable="false" aria-hidden="true" class="">
                                        <use
                                            xlink:href="/templates/default/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                            class="svg-use"></use>
                                    </svg>
                                </a>
                                <div class="provider-game-slide">
                                    <a href="#">
                                        Jogo da Casa
                                    </a>
                                </div>
                                <div class="provider-game-slide">
                                    Jogue agora!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-slide">
                            <div class="img-game-slide"
                                    style="background-image: url(/img/jogos_display03.png);">
                                <div class="meta-game-slide hot">hot</div>
                                <div class="meta-game-slide new">new</div>
                            </div>
                            <div class="hover-game-slide">
                                <div class="h-game-slide">Dice</div>
                                <a href="/dice" class="play-game-slide">
                                    <svg focusable="false" aria-hidden="true" class="">
                                        <use
                                            xlink:href="/templates/default/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                            class="svg-use"></use>
                                    </svg>
                                </a>
                                <div class="provider-game-slide">
                                    <a href="#">
                                        Jogo da Casa
                                    </a>
                                </div>
                                <div class="provider-game-slide">
                                    Jogue agora!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="game-slide">
                            <div class="img-game-slide"
                                    style="background-image: url(/img/logofogo.png);">
                                <div class="meta-game-slide hot">hot</div>
                                <div class="meta-game-slide new">new</div>
                            </div>
                            <div class="hover-game-slide">
                                <div class="h-game-slide">Double</div>
                                <a href="/double" class="play-game-slide">
                                    <svg focusable="false" aria-hidden="true" class="">
                                        <use
                                            xlink:href="/templates/default/img/betnew/svg-sprite.e1149d9.svg#icon-play"
                                            class="svg-use"></use>
                                    </svg>
                                </a>
                                <div class="provider-game-slide">
                                    <a href="#">
                                        Jogo da Casa
                                    </a>
                                </div>
                                <div class="provider-game-slide">
                                    Jogue agora!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
      <!--
         <div class="slots">
             <a href="#" class="h-one-category"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M18.75 5H1.25C0.918479 5 0.600537 5.1317 0.366117 5.36612C0.131696 5.60054 0 5.91848 0 6.25L0 18.75C0 19.0815 0.131696 19.3995 0.366117 19.6339C0.600537 19.8683 0.918479 20 1.25 20H18.75C19.0815 20 19.3995 19.8683 19.6339 19.6339C19.8683 19.3995 20 19.0815 20 18.75V6.25C20 5.91848 19.8683 5.60054 19.6339 5.36612C19.3995 5.1317 19.0815 5 18.75 5ZM15 18.12C15 18.2854 14.935 18.4441 14.819 18.562C14.703 18.6798 14.5453 18.7474 14.38 18.75H1.88C1.71291 18.75 1.55267 18.6836 1.43452 18.5655C1.31637 18.4473 1.25 18.2871 1.25 18.12V6.88C1.25 6.71291 1.31637 6.55267 1.43452 6.43452C1.55267 6.31637 1.71291 6.25 1.88 6.25H14.38C14.5453 6.25262 14.703 6.32016 14.819 6.43802C14.935 6.55589 15 6.71463 15 6.88V18.12ZM17.5 15C17.2528 15 17.0111 14.9267 16.8055 14.7893C16.6 14.652 16.4398 14.4568 16.3451 14.2284C16.2505 13.9999 16.2258 13.7486 16.274 13.5061C16.3223 13.2637 16.4413 13.0409 16.6161 12.8661C16.7909 12.6913 17.0137 12.5722 17.2561 12.524C17.4986 12.4758 17.7499 12.5005 17.9784 12.5952C18.2068 12.6898 18.402 12.85 18.5393 13.0555C18.6767 13.2611 18.75 13.5028 18.75 13.75C18.75 14.0815 18.6183 14.3995 18.3839 14.6339C18.1495 14.8683 17.8315 15 17.5 15ZM17.5 10C17.2528 10 17.0111 9.92669 16.8055 9.78934C16.6 9.65199 16.4398 9.45676 16.3451 9.22835C16.2505 8.99995 16.2258 8.74861 16.274 8.50614C16.3223 8.26366 16.4413 8.04093 16.6161 7.86612C16.7909 7.6913 17.0137 7.57225 17.2561 7.52402C17.4986 7.47579 17.7499 7.50054 17.9784 7.59515C18.2068 7.68976 18.402 7.84998 18.5393 8.05554C18.6767 8.2611 18.75 8.50277 18.75 8.75C18.75 9.08152 18.6183 9.39946 18.3839 9.63388C18.1495 9.8683 17.8315 10 17.5 10Z" fill="#8C9099"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M7.64995 14.8C7.28311 14.9624 6.87832 15.0194 6.48091 14.9646C6.08351 14.9099 5.70921 14.7455 5.39995 14.49C3.87995 13 7.09995 9.39 8.12995 8.75C9.12995 9.39 12.3699 12.97 10.8499 14.49C10.5407 14.7455 10.1664 14.9099 9.76898 14.9646C9.37158 15.0194 8.96678 14.9624 8.59995 14.8L9.33995 16.25H6.90995L7.64995 14.8Z" fill="#414952"></path><path d="M10.62 6.25003C10.4561 6.24677 10.2992 6.1826 10.18 6.07003L5.18003 1.07003C5.06455 0.95067 5 0.7911 5 0.625027C5 0.458955 5.06455 0.299385 5.18003 0.180027C5.29938 0.0645548 5.45895 0 5.62503 0C5.7911 0 5.95067 0.0645548 6.07003 0.180027L11.07 5.18003C11.1855 5.29938 11.2501 5.45895 11.2501 5.62503C11.2501 5.7911 11.1855 5.95067 11.07 6.07003C10.9483 6.18492 10.7874 6.24927 10.62 6.25003Z" fill="#8C9099"></path><path d="M10.62 6.25001C10.4561 6.24675 10.2992 6.18258 10.18 6.07001C10.0646 5.95065 10 5.79108 10 5.62501C10 5.45894 10.0646 5.29937 10.18 5.18001L13.93 1.43001C14.0498 1.32086 14.207 1.26204 14.369 1.26579C14.531 1.26954 14.6853 1.33557 14.7999 1.45015C14.9145 1.56473 14.9805 1.71905 14.9842 1.88104C14.988 2.04304 14.9292 2.20025 14.82 2.32001L11.07 6.07001C10.9483 6.18491 10.7874 6.24925 10.62 6.25001Z" fill="#8C9099"></path></g><defs><clipPath id="clip0"><rect width="20" height="20" fill="white"></rect></clipPath></defs></svg> Cassino Ao Vivo</a>
             <div class="slots-grid">
                                         <a href="/api/slots/get/8220" target="_blank"><img src="https://static.static-cdns.com/resources/sitepicstbs/royal2/game_img_2/7Mojos.jpg"></a>
                                         <a href="/api/slots/get/8109" target="_blank"><img src="https://static.static-cdns.com/resources/sitepicstbs/royal/game_img_2/69casinojack.jpg"></a>
                                         <a href="/api/slots/get/7995" target="_blank"><img src="https://static.static-cdns.com/resources/sitepicstbs/evolution/game_img_2/Evolution.jpg"></a>
                                         <a href="/api/slots/get/7839" target="_blank"><img src="https://static.static-cdns.com/resources/sitepicstbs/evolution_ezugi/game_img_2/ezugi.jpg"></a>
                                         <a href="/api/slots/get/6667" target="_blank"><img src="https://static.static-cdns.com/resources/sitepicstbs/tomhorn_live/game_img_2/Vivo.jpg"></a>
                                         <a href="/api/slots/get/4667" target="_blank"><img src="https://static.static-cdns.com/resources/sitepicstbs/tvbet/game_img_2/tvbet.jpg"></a>
                                         <a href="/api/slots/get/4573" target="_blank"><img src="https://static.static-cdns.com/resources/sitepicstbs/royal/game_img_2/69casino.jpg"></a>
                                 </div>
             <div class="slots-info">
                 <div></div>
                 <div clas="slots-see-more"><a href="/games/category/live_dealers" target="_blank">Ver mais</a></div>
             </div>
         </div>
         !-->
      
   </div>
   <div class="head-one-category">
                <a href="/slots/" class="h-one-category">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M19.9999 0.499977C19.9708 0.361296 19.8957 0.236509 19.7868 0.145782C19.6779 0.0550541 19.5416 0.00368564 19.3999 -2.31452e-05C13.6099 -0.320023 9.12995 1.56998 6.50995 5.30998C6.1892 5.17425 5.85354 5.07691 5.50995 5.01998C4.8823 4.92689 4.24241 4.95944 3.62744 5.11572C3.01247 5.27201 2.43468 5.54892 1.92763 5.93037C1.42058 6.31182 0.994362 6.79022 0.673742 7.33777C0.353122 7.88532 0.144485 8.49112 0.0599479 9.11998C-0.0427691 9.74656 -0.0206725 10.3873 0.124968 11.0053C0.270609 11.6233 0.536924 12.2065 0.908614 12.7213C1.2803 13.2361 1.75004 13.6723 2.29085 14.005C2.83165 14.3377 3.43287 14.5603 4.05995 14.66C4.75316 14.764 5.46096 14.7093 6.12995 14.5C6.10857 14.0454 6.13202 13.5899 6.19995 13.14C6.34078 12.1773 6.69144 11.2573 7.22713 10.4451C7.76282 9.63296 8.47045 8.94843 9.29995 8.43998C9.00199 7.47688 8.41987 6.62635 7.62995 5.99998C9.75995 3.06998 13.1899 1.42998 17.6299 1.32998C15.1621 3.45539 13.334 6.22526 12.3499 9.32998C11.1663 9.42377 10.057 9.94413 9.22827 10.7943C8.39949 11.6445 7.9076 12.7667 7.84404 13.9524C7.78048 15.138 8.14957 16.3063 8.88271 17.2403C9.61585 18.1742 10.6631 18.8102 11.8299 19.03C13.107 19.266 14.4254 18.9851 15.4953 18.249C16.5652 17.5129 17.2989 16.382 17.5349 15.105C17.771 13.828 17.4901 12.5095 16.754 11.4396C16.0179 10.3697 14.887 9.63602 13.6099 9.39998C14.7492 6.09481 16.8923 3.228 19.7399 1.19998C19.8523 1.12626 19.9381 1.01858 19.9848 0.892649C20.0316 0.766717 20.0369 0.629131 19.9999 0.499977ZM3.17995 7.49998C2.48995 8.01998 1.71995 8.14998 1.45995 7.79998C1.19995 7.44998 1.55995 6.79998 2.25995 6.23998C2.95995 5.67998 3.71995 5.58998 3.96995 5.93998C4.21995 6.28998 3.83995 6.99998 3.14995 7.47998L3.17995 7.49998ZM11.1099 11.89C10.4199 12.4 9.64995 12.53 9.39995 12.18C9.14995 11.83 9.49995 11.13 10.1899 10.62C10.8799 10.11 11.6499 9.97998 11.9099 10.33C12.1699 10.68 11.7799 11.35 11.0799 11.87L11.1099 11.89Z" fill="#8C9099"></path>
                        <path d="M15.1299 10.3699C15.693 11.1313 15.9978 12.0529 15.9999 12.9999C16.0013 13.5912 15.8858 14.1769 15.6601 14.7235C15.4344 15.2701 15.103 15.7667 14.6849 16.1848C14.2667 16.6029 13.7701 16.9343 13.2236 17.16C12.677 17.3857 12.0913 17.5012 11.4999 17.4999C10.5529 17.4978 9.63138 17.1929 8.86993 16.6299C9.24794 17.1627 9.73768 17.6067 10.305 17.9307C10.8723 18.2548 11.5034 18.4511 12.1545 18.5061C12.8055 18.561 13.4606 18.4732 14.0742 18.2489C14.6878 18.0245 15.245 17.6689 15.707 17.2069C16.1689 16.7449 16.5245 16.1877 16.7489 15.5741C16.9733 14.9606 17.0611 14.3054 17.0061 13.6544C16.9512 13.0034 16.7549 12.3722 16.4308 11.8049C16.1067 11.2376 15.6628 10.7479 15.1299 10.3699Z" fill="#414952"></path>
                        <path d="M17.5899 1.28998C15.1221 3.41539 13.294 6.18526 12.3099 9.28998C12.7484 9.27272 13.1869 9.32332 13.6099 9.43998C14.7492 6.13481 16.8923 3.268 19.7399 1.23998C19.8606 1.16419 19.9519 1.04977 19.9992 0.915373C20.0464 0.78098 20.0467 0.63455 19.9999 0.499977C19.9708 0.361296 19.8957 0.236509 19.7868 0.145782C19.6779 0.0550541 19.5416 0.00368564 19.3999 -2.31452e-05C13.6099 -0.320023 9.12995 1.56998 6.50995 5.30998C6.92419 5.46579 7.30448 5.70007 7.62995 5.99998C9.75995 2.99998 13.1899 1.38998 17.5899 1.28998Z" fill="#414952"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="20" height="19" fill="white"></rect>
                        </clipPath>
                    </defs>
                    </svg>
                    HOTS
                </a>
            </div>
    <div class="index-features2">
        <div class="one-category">
           
            <div class="banners-slots">
            <div class="banner-slot" data-game="JokerQueen"><a href="/api/bgaming/start/JokerQueen/false/desktop" target="_blank"><img src="img/banners-games/jokerquenn.png"/></a></div>
                <div class="banner-slot" data-game="ElvisFrogTrueways"><a href="/api/bgaming/start/ElvisFrogTrueways/false/desktop" target="_blank"><img src="img/banners-games/elvis.png"/></a></div>
                <div class="banner-slot" data-game="ZeusSanctuary"><a href="/api/bgaming/start/ZeusSanctuary/false/desktop" target="_blank"><img src="img/banners-games/zeus.png"/></a></div>
                <div class="banner-slot" data-game="AztecMagicBonanza"><a href="/api/bgaming/start/AztecMagicBonanza/false/desktop" target="_blank"><img src="img/banners-games/indio.png"/></a></div>
                <div class="banner-slot" data-game="WildCashX9990"><a href="/api/bgaming/start/WildCashX9990/false/desktop" target="_blank"><img src="img/banners-games/cashh.png"/></a></div>
                <div class="banner-slot" data-game="CloverBonanza"><a href="/api/bgaming/start/CloverBonanza/false/desktop" target="_blank"><img src="img/banners-games/clove.png"/></a></div>
                
            </div>
        </div>
    </div>
<!---
   <div class="head-one-category">
                <a href="/slots/" class="h-one-category">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M19.9999 0.499977C19.9708 0.361296 19.8957 0.236509 19.7868 0.145782C19.6779 0.0550541 19.5416 0.00368564 19.3999 -2.31452e-05C13.6099 -0.320023 9.12995 1.56998 6.50995 5.30998C6.1892 5.17425 5.85354 5.07691 5.50995 5.01998C4.8823 4.92689 4.24241 4.95944 3.62744 5.11572C3.01247 5.27201 2.43468 5.54892 1.92763 5.93037C1.42058 6.31182 0.994362 6.79022 0.673742 7.33777C0.353122 7.88532 0.144485 8.49112 0.0599479 9.11998C-0.0427691 9.74656 -0.0206725 10.3873 0.124968 11.0053C0.270609 11.6233 0.536924 12.2065 0.908614 12.7213C1.2803 13.2361 1.75004 13.6723 2.29085 14.005C2.83165 14.3377 3.43287 14.5603 4.05995 14.66C4.75316 14.764 5.46096 14.7093 6.12995 14.5C6.10857 14.0454 6.13202 13.5899 6.19995 13.14C6.34078 12.1773 6.69144 11.2573 7.22713 10.4451C7.76282 9.63296 8.47045 8.94843 9.29995 8.43998C9.00199 7.47688 8.41987 6.62635 7.62995 5.99998C9.75995 3.06998 13.1899 1.42998 17.6299 1.32998C15.1621 3.45539 13.334 6.22526 12.3499 9.32998C11.1663 9.42377 10.057 9.94413 9.22827 10.7943C8.39949 11.6445 7.9076 12.7667 7.84404 13.9524C7.78048 15.138 8.14957 16.3063 8.88271 17.2403C9.61585 18.1742 10.6631 18.8102 11.8299 19.03C13.107 19.266 14.4254 18.9851 15.4953 18.249C16.5652 17.5129 17.2989 16.382 17.5349 15.105C17.771 13.828 17.4901 12.5095 16.754 11.4396C16.0179 10.3697 14.887 9.63602 13.6099 9.39998C14.7492 6.09481 16.8923 3.228 19.7399 1.19998C19.8523 1.12626 19.9381 1.01858 19.9848 0.892649C20.0316 0.766717 20.0369 0.629131 19.9999 0.499977ZM3.17995 7.49998C2.48995 8.01998 1.71995 8.14998 1.45995 7.79998C1.19995 7.44998 1.55995 6.79998 2.25995 6.23998C2.95995 5.67998 3.71995 5.58998 3.96995 5.93998C4.21995 6.28998 3.83995 6.99998 3.14995 7.47998L3.17995 7.49998ZM11.1099 11.89C10.4199 12.4 9.64995 12.53 9.39995 12.18C9.14995 11.83 9.49995 11.13 10.1899 10.62C10.8799 10.11 11.6499 9.97998 11.9099 10.33C12.1699 10.68 11.7799 11.35 11.0799 11.87L11.1099 11.89Z" fill="#8C9099"></path>
                        <path d="M15.1299 10.3699C15.693 11.1313 15.9978 12.0529 15.9999 12.9999C16.0013 13.5912 15.8858 14.1769 15.6601 14.7235C15.4344 15.2701 15.103 15.7667 14.6849 16.1848C14.2667 16.6029 13.7701 16.9343 13.2236 17.16C12.677 17.3857 12.0913 17.5012 11.4999 17.4999C10.5529 17.4978 9.63138 17.1929 8.86993 16.6299C9.24794 17.1627 9.73768 17.6067 10.305 17.9307C10.8723 18.2548 11.5034 18.4511 12.1545 18.5061C12.8055 18.561 13.4606 18.4732 14.0742 18.2489C14.6878 18.0245 15.245 17.6689 15.707 17.2069C16.1689 16.7449 16.5245 16.1877 16.7489 15.5741C16.9733 14.9606 17.0611 14.3054 17.0061 13.6544C16.9512 13.0034 16.7549 12.3722 16.4308 11.8049C16.1067 11.2376 15.6628 10.7479 15.1299 10.3699Z" fill="#414952"></path>
                        <path d="M17.5899 1.28998C15.1221 3.41539 13.294 6.18526 12.3099 9.28998C12.7484 9.27272 13.1869 9.32332 13.6099 9.43998C14.7492 6.13481 16.8923 3.268 19.7399 1.23998C19.8606 1.16419 19.9519 1.04977 19.9992 0.915373C20.0464 0.78098 20.0467 0.63455 19.9999 0.499977C19.9708 0.361296 19.8957 0.236509 19.7868 0.145782C19.6779 0.0550541 19.5416 0.00368564 19.3999 -2.31452e-05C13.6099 -0.320023 9.12995 1.56998 6.50995 5.30998C6.92419 5.46579 7.30448 5.70007 7.62995 5.99998C9.75995 2.99998 13.1899 1.38998 17.5899 1.28998Z" fill="#414952"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="20" height="19" fill="white"></rect>
                        </clipPath>
                    </defs>
                    </svg>
                    PRAGMATIC
                </a>
            </div>
            <div class="index-features2">
        <div class="one-category">
           
            <div class="banners-slots">
                <div class="banner-slot" data-game="SweetBonanza"><a href="/api/slots/get/7546" target="_blank"><img src="https://mediumrare.imgix.net/f95b3adf9d28d57496dd8da909c0cb97515104194924c5abb4cc9ad792f35dfe?&dpr=1&format=auto&auto=format&q=50&w=220"/></a></div>
                <div class="banner-slot" data-game="GatesofOlympus"><a href="/api/slots/get/7546" target="_blank"><img src="https://mediumrare.imgix.net/abb9098000cde7009fb88c54c26621682110bfbe895818cff2a7b99e7a05a0d3?&dpr=1&format=auto&auto=format&q=50&w=220"/></a></div>
                <div class="banner-slot" data-game="FortuneTigger"><a href="/api/slots/get/7546" target="_blank"><img src="https://i.imgur.com/ZofjuzJ.jpeg"/></a></div>
                <div class="banner-slot" data-game="TheDogHouse"><a href="/api/slots/get/7546" target="_blank"><img src="https://mediumrare.imgix.net/b214c2d002d97ce71bc2d75688d12fd94beebcd17cbd348ba81ea8f850108f03?&dpr=1&format=auto&auto=format&q=50&w=220"/></a></div>
                <div class="banner-slot" data-game="GoldenOx"><a href="/api/slots/get/7546" target="_blank"><img src="https://mediumrare.imgix.net/74e418cf655fef8d4449aa3be2aa876e5c444badc7e67a165afc11151be7bfb8?&dpr=1&format=auto&auto=format&q=50&w=220"/></a></div>
                <div class="banner-slot" data-game="TheHandOfMidas"><a href="/api/slots/get/7546" target="_blank"><img src="https://mediumrare.imgix.net/bcbe46a6b6ebc5c217be945b23e4417f2e3dff1248c3124ddc768ada86e8dfcf?&dpr=1&format=auto&auto=format&q=50&w=220"/></a></div>
        
            </div>
        </div>
    </div>
    ---!>
    <div class="head-one-category">
                <a href="/slots/" class="h-one-category">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M19.9999 0.499977C19.9708 0.361296 19.8957 0.236509 19.7868 0.145782C19.6779 0.0550541 19.5416 0.00368564 19.3999 -2.31452e-05C13.6099 -0.320023 9.12995 1.56998 6.50995 5.30998C6.1892 5.17425 5.85354 5.07691 5.50995 5.01998C4.8823 4.92689 4.24241 4.95944 3.62744 5.11572C3.01247 5.27201 2.43468 5.54892 1.92763 5.93037C1.42058 6.31182 0.994362 6.79022 0.673742 7.33777C0.353122 7.88532 0.144485 8.49112 0.0599479 9.11998C-0.0427691 9.74656 -0.0206725 10.3873 0.124968 11.0053C0.270609 11.6233 0.536924 12.2065 0.908614 12.7213C1.2803 13.2361 1.75004 13.6723 2.29085 14.005C2.83165 14.3377 3.43287 14.5603 4.05995 14.66C4.75316 14.764 5.46096 14.7093 6.12995 14.5C6.10857 14.0454 6.13202 13.5899 6.19995 13.14C6.34078 12.1773 6.69144 11.2573 7.22713 10.4451C7.76282 9.63296 8.47045 8.94843 9.29995 8.43998C9.00199 7.47688 8.41987 6.62635 7.62995 5.99998C9.75995 3.06998 13.1899 1.42998 17.6299 1.32998C15.1621 3.45539 13.334 6.22526 12.3499 9.32998C11.1663 9.42377 10.057 9.94413 9.22827 10.7943C8.39949 11.6445 7.9076 12.7667 7.84404 13.9524C7.78048 15.138 8.14957 16.3063 8.88271 17.2403C9.61585 18.1742 10.6631 18.8102 11.8299 19.03C13.107 19.266 14.4254 18.9851 15.4953 18.249C16.5652 17.5129 17.2989 16.382 17.5349 15.105C17.771 13.828 17.4901 12.5095 16.754 11.4396C16.0179 10.3697 14.887 9.63602 13.6099 9.39998C14.7492 6.09481 16.8923 3.228 19.7399 1.19998C19.8523 1.12626 19.9381 1.01858 19.9848 0.892649C20.0316 0.766717 20.0369 0.629131 19.9999 0.499977ZM3.17995 7.49998C2.48995 8.01998 1.71995 8.14998 1.45995 7.79998C1.19995 7.44998 1.55995 6.79998 2.25995 6.23998C2.95995 5.67998 3.71995 5.58998 3.96995 5.93998C4.21995 6.28998 3.83995 6.99998 3.14995 7.47998L3.17995 7.49998ZM11.1099 11.89C10.4199 12.4 9.64995 12.53 9.39995 12.18C9.14995 11.83 9.49995 11.13 10.1899 10.62C10.8799 10.11 11.6499 9.97998 11.9099 10.33C12.1699 10.68 11.7799 11.35 11.0799 11.87L11.1099 11.89Z" fill="#8C9099"></path>
                        <path d="M15.1299 10.3699C15.693 11.1313 15.9978 12.0529 15.9999 12.9999C16.0013 13.5912 15.8858 14.1769 15.6601 14.7235C15.4344 15.2701 15.103 15.7667 14.6849 16.1848C14.2667 16.6029 13.7701 16.9343 13.2236 17.16C12.677 17.3857 12.0913 17.5012 11.4999 17.4999C10.5529 17.4978 9.63138 17.1929 8.86993 16.6299C9.24794 17.1627 9.73768 17.6067 10.305 17.9307C10.8723 18.2548 11.5034 18.4511 12.1545 18.5061C12.8055 18.561 13.4606 18.4732 14.0742 18.2489C14.6878 18.0245 15.245 17.6689 15.707 17.2069C16.1689 16.7449 16.5245 16.1877 16.7489 15.5741C16.9733 14.9606 17.0611 14.3054 17.0061 13.6544C16.9512 13.0034 16.7549 12.3722 16.4308 11.8049C16.1067 11.2376 15.6628 10.7479 15.1299 10.3699Z" fill="#414952"></path>
                        <path d="M17.5899 1.28998C15.1221 3.41539 13.294 6.18526 12.3099 9.28998C12.7484 9.27272 13.1869 9.32332 13.6099 9.43998C14.7492 6.13481 16.8923 3.268 19.7399 1.23998C19.8606 1.16419 19.9519 1.04977 19.9992 0.915373C20.0464 0.78098 20.0467 0.63455 19.9999 0.499977C19.9708 0.361296 19.8957 0.236509 19.7868 0.145782C19.6779 0.0550541 19.5416 0.00368564 19.3999 -2.31452e-05C13.6099 -0.320023 9.12995 1.56998 6.50995 5.30998C6.92419 5.46579 7.30448 5.70007 7.62995 5.99998C9.75995 2.99998 13.1899 1.38998 17.5899 1.28998Z" fill="#414952"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="20" height="19" fill="white"></rect>
                        </clipPath>
                    </defs>
                    </svg>
                    SLOTS
                </a>
            </div>
   <div class="index-features2">
        <div class="one-category">
           
            <div class="banners-slots">
            <div class="banner-slot" data-game="Plinko"><a href="/api/bgaming/start/Plinko/false/desktop" target="_blank"><img src="img/banners-games/Plinko.png"/></a></div>
                <div class="banner-slot" data-game="Minesweeper"><a href="/api/bgaming/start/Minesweeper/false/desktop" target="_blank"><img src="img/banners-games/Minesweeper.png"/></a></div>
                <?php 
        $jogos = ['AlienFruits', 'AllLuckyClover', 'AlohaKingElvis', 'AmericanRoulette', 'Avalon', 'AztecMagic', 'AztecMagicMegaways', 'AztecMagicDeluxe', 'Baccarat', 'BCMillion', 'BeerBonanza', 'BetfuryMillion', 'BigAtlantisFrenzy', 'BitcoinMillion', 'BitslerBookOfCats', 'BitslerMillion', 'BitstarzBillion', 'BlackjackPro', 'BlazeBonanza', 'BlazeMillion', 'BobsCoffeeShop', 'BonanzaBillion', 'BookOfBlaze', 'BookOfCatsMegaways', 'BookOfKemet', 'BookOfPyramids', 'BraveViking', 'BurningChilliX', 'CandyMonsta', 'CaribbeanPoker', 'CasinoHoldem', 'CherryFiesta', 'CoinslottyCoin', 'CoinslottyMines', 'CoinslottyPlinko', 'CoinslottyRocketDice', 'CrazyStarter', 'DeepSea', 'DesertTreasure', 'DigDigDigger', 'Domnitors', 'DomnitorsDeluxe', 'DomnitorsTreasure', 'DoubleExposure', 'DragonsGold100', 'EasterHeist', 'EasterPlinko', 'ElvisFrog', 'ElvisFrogInBizzo', 'ElvisFrogInPlayamo', 'ElvisFrogInWooCasino', 'ElvisFrogTrueways', 'ElvisFrogTwentyBet', 'EuropeanRoulette', 'FantasyPark', 'FireLightning', 'FortyFruityMillion', 'FourLuckyClover', 'FourLuckyDiamonds', 'FrenchRoulette', 'FruitMillion', 'Gangsterz', 'GiftRush', 'GoldRushWithJohnny', 'HalloweenBonanza', 'HawaiiCocktails', 'HeadsTails', 'HeadsTailsXY', 'HelloEaster', 'HiLoSwitch', 'HitTheRoute', 'JacksOrBetter', 'JogoDoBicho', 'JohnnyCash', 'JourneyFlirt', 'LegacyOfCobra', 'Limbo', 'LuckyBlue', 'LuckyCrew', 'LuckyDamaMuerta', 'LuckyFarmBonanza', 'LuckyLadyClover', 'LuckyLadyMoon', 'LuckyOak', 'LuckySweets', 'Maneki88Gold', 'MechanicalClover', 'MechanicalOrange', 'MinesweeperXY', 'MissCherryFruits', 'N1Million', 'NominiMillion', 'OasisPoker', 'PennyPelican', 'PinUpBonanza', 'PlatinumLightning', 'PlinkoMBit', 'PlinkoXY', 'Pontoon', 'PotionSpells', 'PrincessOfSky', 'PrincessRoyal', 'Road2Riches', 'RocketDice', 'RocketDiceXY', 'RoyalHighRoad', 'SavageBuffaloSpirit', 'ScratchDice', 'ScrollOfAdventure', 'SicBo', 'SicBoMacau', 'SlotomonGo', 'SpaceXY', 'SpinAndSpell', 'TexasHoldem', 'TreyPoker', 'WbcRingOfRiches', 'WestTown',];

foreach ($jogos as $k => $v) {
    $imagePath = 'img/banners-games/'.$v.'.png'; // Define o caminho da imagem
    echo '<div class="banner-slot" data-game="'.$v.'"><a href="/api/bgaming/start/'.$v.'/false/desktop" target="_blank"><img src="'.$imagePath.'"/></a></div>';
}


        ?>
            </div>
        </div>
    </div>
   <style>
      .banners-slots {
      padding: 10px 0px;
      width: 100%;
      display: inline-grid;
      grid-template-columns: repeat(6, [col-start] 1fr);
      grid-gap: 10px;
      }
      .banners-slots .banner-slot {
      border-radius: 10px;
      cursor: pointer;
      width: 100%;
      overflow: hidden;
      }
      .banners-slots .banner-slot:hover {
      transform: scale(1.05);
      }
      .banners-slots img {
      width: 100%;
      }
      @media (max-width: 700px) {
      .banners-slots {
      padding: 10px 0px;
      width: 100%;
      display: inline-grid;
      grid-template-columns: repeat(3, [col-start] 1fr);
      grid-gap: 10px;
      }
      }
   </style>
   <div class="head-one-category">
                <a href="/slots/" class="h-one-category">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 1280.000000 1181.000000" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,1181.000000) scale(0.100000,-0.100000)"
                        fill="#9e9e9e" stroke="none">
                        <path d="M6327 11292 c-60 -180 -161 -489 -227 -687 -65 -198 -233 -709 -373
                        -1135 -141 -426 -367 -1114 -503 -1527 l-248 -753 -2358 0 c-1297 0 -2358 -3
                        -2358 -7 0 -5 170 -130 378 -279 207 -149 1057 -758 1887 -1353 831 -596 1518
                        -1091 1528 -1100 20 -19 55 94 -420 -1346 -187 -570 -344 -1047 -628 -1910
                        -141 -429 -286 -869 -322 -978 -36 -109 -63 -201 -60 -204 7 -6 -236 -180
                        1912 1362 1012 726 1855 1331 1872 1343 l33 23 762 -548 c2447 -1758 3053
                        -2191 3056 -2188 2 2 -46 153 -106 337 -61 183 -216 655 -346 1048 -511 1556
                        -712 2168 -811 2470 -145 440 -185 563 -185 575 0 6 855 623 1900 1373 1045
                        750 1900 1368 1900 1373 0 5 -909 10 -2357 11 l-2356 3 -164 500 c-90 275
                        -272 826 -403 1225 -131 399 -383 1166 -560 1705 -177 539 -325 983 -329 987
                        -4 5 -55 -139 -114 -320z"/>
                        </g>
                    </svg>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="20" height="19" fill="white"></rect>
                        </clipPath>
                    </defs>
                    </svg>
                    EM BREVE
                </a>
            </div>
   <div class=index-features>
      <div data-delay="0" data-animation="slide" class="slider-slots-games w-slider" data-autoplay="true"
         data-easing="linear" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
         data-nav-spacing="3" data-duration="5000" data-infinite="true">
         <div class="mask-slider-slots w-slider-mask" style="filter: grayscale(100%);">
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/fdf003ed00a77f12ab7e2a50ec2b4dcf786ddc862x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/33182334cd83b0e10e19629f4fa4ac71132f99432x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/9bbe1dec074937e5f32e807af3aae69048429da82x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/9aaf2b39cc39450a9c1fbcf9a34a14e22x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/de9512d69ce79a4d0f2057cff1e9a120d9d228c62x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/ee7a358afa08459780a49d57fa74a7972x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/a755941f59081d45aadaf6845f5b2c981433f6e22x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/30e25e9c13cc44e9acf124b45bbff59f2x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/62f8cca1448246d39dee4eab0bc7a9dc2x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/3a3a634b94aeb9decd9434a42bad2843c7c49fb22x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/deba1669e73d429402aa031918f9500e3aa92d7c2x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/487824fd0de785408f4b9536a5e51cb937e705032x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/38a72c2ae9e44589a1b91401998bcfa42x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/bad98b300e37dc429548aeb7a3179c2efccbb1102x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/cbfa63a19da17b6192bcc5a8de4f0fd3db7a886f2x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/650710e90ac77e0fd30676d05f8685bd9f9e41bd2x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/6fe1d6a618ae8507b87840b431938154faa671f52x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/6f093db8745c488976981f7a520c586e89f1438e2x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/dd7e2f3c937e43e189c3261c62fa82a46ab987ba2x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/7c404e44d4d631aed5002302856c1faab3c081462x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/93adad6f64824ea3a2fee45cdd0873792x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
            <div class="slide-slots-games w-slide" data-ix="hover-slot-coming">
               <img
                  src="images/6e6c237fefec4a20a337f96f8ef4e7bc2x.jpeg" loading="eager" alt=""
                  class="slot-game">
               <div class="coming-slot">
                  <div>Em Breve</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

</div>
<?php /**PATH /www/wwwroot/taurus.bet/resources/views/pages/home.blade.php ENDPATH**/ ?>