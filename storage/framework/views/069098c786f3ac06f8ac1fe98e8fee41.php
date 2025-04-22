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
               aprovadas 24/7. A Sua Nova Plataforma de Cassino online 100% Fairplay.
            </h2>
            <div class="intro-login">
               <?php if(Auth::user()): ?>
               <a id="loginRegister">Depositar</a>
               <?php else: ?>
               <button type="button" id="loginRegister">Entrar ou Cadastrar
               </button>
               <?php endif; ?>
               <div class="content-intro-login">
                  <span><small>Registre-se agora mesmo e começe a ganhar muito dinheiro online!<b></b></small></span>
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
         <a href="javascript:;"
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
                     src="/templates/default/img/betnew/iconeswheel.png">
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
         <a href="javascript:;"
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
   <div class="head-one-category">
            <a href="/slots/" class="h-one-category">
               <svg width="24" height="24" focusable="false" aria-hidden="true" class="">
                  <use xlink:href="/templates/default/img/betnew/svg-sprite.e1149d9.svg#icon-inhouse"
                     class="svg-use"></use>
               </svg>
               JOGOS DA CASA
            </a>
         </div>
   <div class="index-features2">
      <div class="one-category">
         
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
                        <a href="/battle" class="play-game-slide">
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
                    PgSoft
                </a>
            </div>
    <div class="index-features2">
        <div class="one-category">
           
            <div class="banners-slots">
            <div class="banner-slot" data-game="FortuneTiger"><a href="/api/slots/get/7546.html" target="_blank"><img src="../img/126.jpg"/></a></div>
                <div class="banner-slot" data-game="FortuneMouse"><a href="/api/slots/get/03.html" target="_blank"><img src="../img/68.jpg"/></a></div>
                <div class="banner-slot" data-game="FortuneRabbit"><a href="/api/slots/get/7747.html" target="_blank"><img src="/img/129.jpeg"/></a></div>
                <div class="banner-slot" data-game="FortuneOX"><a href="/api/slots/get/02.html" target="_blank"><img src="../img/127.png"/></a></div>
                <div class="banner-slot" data-game="LuckyNeko"><a href="/api/slots/get/01.html" target="_blank"><img src="../img/89.jpg"/></a></div>
                <div class="banner-slot" data-game="DragonHatch"><a href="/api/slots/get/7760.html" target="_blank"><img src="../img/57.jpg"/></a></div>
                <div class="banner-slot" data-game="MidasFortune"><a href="/api/slots/get/04.html" target="_blank"><img src="../img/midas-fortune-online-slot.jpeg"/></a></div>
                <div class="banner-slot" data-game="RiseOfApolo"><a href="/api/slots/get/05.html" target="_blank"><img src="../img/rise-of-apollo-online-slot.jpeg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/06.html" target="_blank"><img src="../img/piggy-gold-online-slot.jpg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/07.html" target="_blank"><img src="../img/candy-bonanza-online-slot.jpeg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/08.html" target="_blank"><img src="../img/legend-of-hou-yi-online-slot.jpg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/09.html" target="_blank"><img src="../img/crypto-gold-online-slot.jpeg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/10.html" target="_blank"><img src="../img/buffalo-win-online-slot.jpeg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/11.html" target="_blank"><img src="../img/super-gold-drive-online-slot.jpg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/12.html" target="_blank"><img src="../img/treasures-of-aztec-z-slot-5.jpg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/13.html" target="_blank"><img src="../img/ways-of-the-qilin-online-slot.jpeg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/14.html" target="_blank"><img src="../img/jurassic-kingdom-online-slot.jpeg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/15.html" target="_blank"><img src="../img/captains-bounty-online-slot.jpeg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/16.html" target="_blank"><img src="../img/tree-of-fortune-online-slot.jpg"/></a></div>
                <div class="banner-slot" data-game="Piggy"><a href="/api/slots/get/17.html" target="_blank"><img src="../img/medusa-2-online-slot.jpeg"/></a></div>
                
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
            <div class="banner-slot" data-game="Plinko"><a href="/api/bgaming/start/Plinko/false/desktop" target="_blank"><img src="../img/Plinko.png"/></a></div>
                <div class="banner-slot" data-game="Minesweeper"><a href="/api/bgaming/start/Minesweeper/false/desktop" target="_blank"><img src="../img/Minesweeper.png"/></a></div>
                <?php 
        $jogos = ['AlienFruits', 'AllLuckyClover', 'AlohaKingElvis', 'AmericanRoulette', 'Avalon', 'AztecMagic', 'AztecMagicMegaways', 'AztecMagicDeluxe', 'Baccarat', 'BCMillion', 'BeerBonanza', 'BetfuryMillion', 'BigAtlantisFrenzy', 'BitcoinMillion', 'BitslerBookOfCats', 'BitslerMillion', 'BitstarzBillion', 'BlackjackPro', 'BlazeBonanza', 'BlazeMillion', 'BobsCoffeeShop', 'BonanzaBillion', 'BookOfBlaze', 'BookOfCatsMegaways', 'BookOfKemet', 'BookOfPyramids', 'BraveViking', 'BurningChilliX', 'CandyMonsta', 'CaribbeanPoker', 'CasinoHoldem', 'CherryFiesta', 'CoinslottyCoin', 'CoinslottyMines', 'CoinslottyPlinko', 'CoinslottyRocketDice', 'CrazyStarter', 'DeepSea', 'DesertTreasure', 'DigDigDigger', 'Domnitors', 'DomnitorsDeluxe', 'DomnitorsTreasure', 'DoubleExposure', 'DragonsGold100', 'EasterHeist', 'EasterPlinko', 'ElvisFrog', 'ElvisFrogInBizzo', 'ElvisFrogInPlayamo', 'ElvisFrogInWooCasino', 'ElvisFrogTrueways', 'ElvisFrogTwentyBet', 'EuropeanRoulette', 'FantasyPark', 'FireLightning', 'FortyFruityMillion', 'FourLuckyClover', 'FourLuckyDiamonds', 'FrenchRoulette', 'FruitMillion', 'Gangsterz', 'GiftRush', 'GoldRushWithJohnny', 'HalloweenBonanza', 'HawaiiCocktails', 'HeadsTails', 'HeadsTailsXY', 'HelloEaster', 'HiLoSwitch', 'HitTheRoute', 'JacksOrBetter', 'JogoDoBicho', 'JohnnyCash', 'JourneyFlirt', 'LegacyOfCobra', 'Limbo', 'LuckyBlue', 'LuckyCrew', 'LuckyDamaMuerta', 'LuckyFarmBonanza', 'LuckyLadyClover', 'LuckyLadyMoon', 'LuckyOak', 'LuckySweets', 'Maneki88Gold', 'MechanicalClover', 'MechanicalOrange', 'MinesweeperXY', 'MissCherryFruits', 'N1Million', 'NominiMillion', 'OasisPoker', 'PennyPelican', 'PinUpBonanza', 'PlatinumLightning', 'PlinkoMBit', 'PlinkoXY', 'Pontoon', 'PotionSpells', 'PrincessOfSky', 'PrincessRoyal', 'Road2Riches', 'RocketDice', 'RocketDiceXY', 'RoyalHighRoad', 'SavageBuffaloSpirit', 'ScratchDice', 'ScrollOfAdventure', 'SicBo', 'SicBoMacau', 'SlotomonGo', 'SpaceXY', 'SpinAndSpell', 'TexasHoldem', 'TreyPoker', 'WbcRingOfRiches', 'WestTown',];

foreach ($jogos as $k => $v) {
    $imagePath = '/img/'.$v.'.png'; // Define o caminho da imagem
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
</div><?php /**PATH /home/dinojogo/htdocs/dinojogo.com/resources/views/pages/home.blade.php ENDPATH**/ ?>