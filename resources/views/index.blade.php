@extends('master', ['seo' => $seo])
@section('content')

			<!-- start start screen -->
			<div id="start-screen" class="start-screen start-screen--style-1" data-scroll-discover="true">
				<div id="start-screen__bg" class="start-screen__bg">
					<div id="vegas-slider" data-dots="true">
						<div class="vegas-control">
							<span id="vegas-control__prev" class="vegas-control__btn">Prev</span>
							<span id="vegas-control__next" class="vegas-control__btn">Next</span>
						</div>
					</div>

					<!-- defaul vegas styles -->
					<style type="text/css">
					
						.vegas-overlay,.vegas-slide,.vegas-slide-inner,.vegas-timer,.vegas-wrapper{position:absolute;top:0;left:0;bottom:0;right:0;overflow:hidden;border:none;padding:0;margin:0}.vegas-overlay{opacity:.5;background:url(overlays/09.png) center center}.vegas-timer{top:auto;bottom:0;height:4px}.vegas-timer-progress{width:0;height:100%;background:#dca627;-webkit-transition:width ease-out;transition:width ease-out}.vegas-timer-running .vegas-timer-progress{width:100%}.vegas-slide,.vegas-slide-inner{margin:0;padding:0;background:center center no-repeat;-webkit-transform:translateZ(0);transform:translateZ(0)}body .vegas-container{overflow:hidden!important;position:relative}.vegas-video{min-width:100%;min-height:100%;width:auto;height:auto}body.vegas-container{overflow:auto;position:static;z-index:-2}body.vegas-container>.vegas-overlay,body.vegas-container>.vegas-slide,body.vegas-container>.vegas-timer{position:fixed;z-index:-1}:root body.vegas-container>.vegas-overlay,:root body.vegas-container>.vegas-slide,_::full-page-media,_:future{bottom:-76px}.vegas-transition-blur,.vegas-transition-blur2{opacity:0;-webkit-filter:blur(32px);filter:blur(32px)}.vegas-transition-blur-in,.vegas-transition-blur2-in{opacity:1;-webkit-filter:blur(0);filter:blur(0)}.vegas-transition-blur2-out{opacity:0}.vegas-transition-burn,.vegas-transition-burn2{opacity:0;-webkit-filter:contrast(1000%) saturate(1000%);filter:contrast(1000%) saturate(1000%)}.vegas-transition-burn-in,.vegas-transition-burn2-in{opacity:1;-webkit-filter:contrast(100%) saturate(100%);filter:contrast(100%) saturate(100%)}.vegas-transition-burn2-out{opacity:0;-webkit-filter:contrast(1000%) saturate(1000%);filter:contrast(1000%) saturate(1000%)}.vegas-transition-fade,.vegas-transition-fade2{opacity:0}.vegas-transition-fade-in,.vegas-transition-fade2-in{opacity:1}.vegas-transition-fade2-out{opacity:0}.vegas-transition-flash,.vegas-transition-flash2{opacity:0;-webkit-filter:brightness(25);filter:brightness(25)}.vegas-transition-flash-in,.vegas-transition-flash2-in{opacity:1;-webkit-filter:brightness(1);filter:brightness(1)}.vegas-transition-flash2-out{opacity:0;-webkit-filter:brightness(25);filter:brightness(25)}.vegas-transition-negative,.vegas-transition-negative2{opacity:0;-webkit-filter:invert(100%);filter:invert(100%)}.vegas-transition-negative-in,.vegas-transition-negative2-in{opacity:1;-webkit-filter:invert(0);filter:invert(0)}.vegas-transition-negative2-out{opacity:0;-webkit-filter:invert(100%);filter:invert(100%)}.vegas-transition-slideDown,.vegas-transition-slideDown2{-webkit-transform:translateY(-100%);transform:translateY(-100%)}.vegas-transition-slideDown-in,.vegas-transition-slideDown2-in{-webkit-transform:translateY(0);transform:translateY(0)}.vegas-transition-slideDown2-out{-webkit-transform:translateY(100%);transform:translateY(100%)}.vegas-transition-slideLeft,.vegas-transition-slideLeft2{-webkit-transform:translateX(100%);transform:translateX(100%)}.vegas-transition-slideLeft-in,.vegas-transition-slideLeft2-in{-webkit-transform:translateX(0);transform:translateX(0)}.vegas-transition-slideLeft2-out,.vegas-transition-slideRight,.vegas-transition-slideRight2{-webkit-transform:translateX(-100%);transform:translateX(-100%)}.vegas-transition-slideRight-in,.vegas-transition-slideRight2-in{-webkit-transform:translateX(0);transform:translateX(0)}.vegas-transition-slideRight2-out{-webkit-transform:translateX(100%);transform:translateX(100%)}.vegas-transition-slideUp,.vegas-transition-slideUp2{-webkit-transform:translateY(100%);transform:translateY(100%)}.vegas-transition-slideUp-in,.vegas-transition-slideUp2-in{-webkit-transform:translateY(0);transform:translateY(0)}.vegas-transition-slideUp2-out{-webkit-transform:translateY(-100%);transform:translateY(-100%)}.vegas-transition-swirlLeft,.vegas-transition-swirlLeft2{-webkit-transform:scale(2) rotate(35deg);transform:scale(2) rotate(35deg);opacity:0}.vegas-transition-swirlLeft-in,.vegas-transition-swirlLeft2-in{-webkit-transform:scale(1) rotate(0);transform:scale(1) rotate(0);opacity:1}.vegas-transition-swirlLeft2-out,.vegas-transition-swirlRight,.vegas-transition-swirlRight2{-webkit-transform:scale(2) rotate(-35deg);transform:scale(2) rotate(-35deg);opacity:0}.vegas-transition-swirlRight-in,.vegas-transition-swirlRight2-in{-webkit-transform:scale(1) rotate(0);transform:scale(1) rotate(0);opacity:1}.vegas-transition-swirlRight2-out{-webkit-transform:scale(2) rotate(35deg);transform:scale(2) rotate(35deg);opacity:0}.vegas-transition-zoomIn,.vegas-transition-zoomIn2{-webkit-transform:scale(0);transform:scale(0);opacity:0}.vegas-transition-zoomIn-in,.vegas-transition-zoomIn2-in{-webkit-transform:scale(1);transform:scale(1);opacity:1}.vegas-transition-zoomIn2-out,.vegas-transition-zoomOut,.vegas-transition-zoomOut2{-webkit-transform:scale(2);transform:scale(2);opacity:0}.vegas-transition-zoomOut-in,.vegas-transition-zoomOut2-in{-webkit-transform:scale(1);transform:scale(1);opacity:1}.vegas-transition-zoomOut2-out{-webkit-transform:scale(0);transform:scale(0);opacity:0}.vegas-animation-kenburns{-webkit-animation:kenburns ease-out;animation:kenburns ease-out}@-webkit-keyframes kenburns{0%{-webkit-transform:scale(1.5);transform:scale(1.5)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes kenburns{0%{-webkit-transform:scale(1.5);transform:scale(1.5)}100%{-webkit-transform:scale(1);transform:scale(1)}}.vegas-animation-kenburnsDownLeft{-webkit-animation:kenburnsDownLeft ease-out;animation:kenburnsDownLeft ease-out}@-webkit-keyframes kenburnsDownLeft{0%{-webkit-transform:scale(1.5) translate(10%,-10%);transform:scale(1.5) translate(10%,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsDownLeft{0%{-webkit-transform:scale(1.5) translate(10%,-10%);transform:scale(1.5) translate(10%,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsDownRight{-webkit-animation:kenburnsDownRight ease-out;animation:kenburnsDownRight ease-out}@-webkit-keyframes kenburnsDownRight{0%{-webkit-transform:scale(1.5) translate(-10%,-10%);transform:scale(1.5) translate(-10%,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsDownRight{0%{-webkit-transform:scale(1.5) translate(-10%,-10%);transform:scale(1.5) translate(-10%,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsDown{-webkit-animation:kenburnsDown ease-out;animation:kenburnsDown ease-out}@-webkit-keyframes kenburnsDown{0%{-webkit-transform:scale(1.5) translate(0,-10%);transform:scale(1.5) translate(0,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsDown{0%{-webkit-transform:scale(1.5) translate(0,-10%);transform:scale(1.5) translate(0,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsLeft{-webkit-animation:kenburnsLeft ease-out;animation:kenburnsLeft ease-out}@-webkit-keyframes kenburnsLeft{0%{-webkit-transform:scale(1.5) translate(10%,0);transform:scale(1.5) translate(10%,0)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsLeft{0%{-webkit-transform:scale(1.5) translate(10%,0);transform:scale(1.5) translate(10%,0)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsRight{-webkit-animation:kenburnsRight ease-out;animation:kenburnsRight ease-out}@-webkit-keyframes kenburnsRight{0%{-webkit-transform:scale(1.5) translate(-10%,0);transform:scale(1.5) translate(-10%,0)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsRight{0%{-webkit-transform:scale(1.5) translate(-10%,0);transform:scale(1.5) translate(-10%,0)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsUpLeft{-webkit-animation:kenburnsUpLeft ease-out;animation:kenburnsUpLeft ease-out}@-webkit-keyframes kenburnsUpLeft{0%{-webkit-transform:scale(1.5) translate(10%,10%);transform:scale(1.5) translate(10%,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsUpLeft{0%{-webkit-transform:scale(1.5) translate(10%,10%);transform:scale(1.5) translate(10%,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsUpRight{-webkit-animation:kenburnsUpRight ease-out;animation:kenburnsUpRight ease-out}@-webkit-keyframes kenburnsUpRight{0%{-webkit-transform:scale(1.5) translate(-10%,10%);transform:scale(1.5) translate(-10%,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsUpRight{0%{-webkit-transform:scale(1.5) translate(-10%,10%);transform:scale(1.5) translate(-10%,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsUp{-webkit-animation:kenburnsUp ease-out;animation:kenburnsUp ease-out}@-webkit-keyframes kenburnsUp{0%{-webkit-transform:scale(1.5) translate(0,10%);transform:scale(1.5) translate(0,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsUp{0%{-webkit-transform:scale(1.5) translate(0,10%);transform:scale(1.5) translate(0,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}
					</style>

					<!-- custom vegas styles -->
					<style type="text/css">
						#vegas-slider
						{
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100% !important;
						}

						#vegas-slider .vegas-control__btn
						{
							display: none;
							position: absolute;
							top: 50%;
							line-height: 1;
							font-size: 1.5rem;
							font-weight: 700;
							font-family: 'Poppins', sans-serif;
							color: #fff;
							text-transform: uppercase;
							cursor: pointer;
							padding: 5px;
							-webkit-transform: rotate(-90deg);
							-ms-transform: rotate(-90deg);
							-o-transform: rotate(-90deg);
							transform: rotate(-90deg);
							-webkit-transition: color 0.3s ease-in-out;
							-moz-transition: color 0.3s ease-in-out;
							-ms-transition: color 0.3s ease-in-out;
							-o-transition: color 0.3s ease-in-out;
							transition: color 0.3s ease-in-out;
							z-index: 3;
						}

						#vegas-slider .vegas-control__btn:hover { color: #dca627; }

						#vegas-control__prev { left: -10px; }
						#vegas-control__next { right: -10px; }

						#vegas-slider .vegas-dots
						{
							position: absolute;
							bottom: 20px;
							right: 10px;
							line-height: 0;
							text-align: center;
							z-index: 3;
						}

						@media (min-width: 576px)
						{
							#vegas-slider .vegas-dots
							{
								top: 50%;
								right: 20px;
								bottom: auto;
							}
						}

						#vegas-slider .vegas-dots a
						{
							display: block;
							width: 12px;
							height: 12px;
							margin: 6px 0 6px auto;
							cursor: pointer;
							background-color: transparent;
							border: 2px solid rgba(255, 255, 255, 0.5);
							border-radius: 50%;
							-webkit-transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, width 0.3s ease-in-out, border-radius 0.3s ease-in-out;
							-moz-transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, width 0.3s ease-in-out, border-radius 0.3s ease-in-out;
							-ms-transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, width 0.3s ease-in-out, border-radius 0.3s ease-in-out;
							-o-transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, width 0.3s ease-in-out, border-radius 0.3s ease-in-out;
							transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out, width 0.3s ease-in-out, border-radius 0.3s ease-in-out;
						}

						#vegas-slider .vegas-dots a:hover,
						#vegas-slider .vegas-dots a.active
						{
							width: 25px;
							border-radius: 30px;
						}

						#vegas-slider .vegas-dots a.active
						{
							background-color: #fff;
							border-color: #fff;
							cursor: default;
						}

						#start-screen_content-container
						{
							position: relative;
							height: 100%
						}

						.start-screen__content
						{
							position: absolute;
							top: 0;
							left: 0;
							right: 0;
							height: 100%;
							padding-top: 100px;
							padding-bottom: 50px;
							visibility: hidden;
							opacity: 0;
							text-align: center;
							color: #fff;
							-webkit-transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
							-moz-transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
							-ms-transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
							-o-transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
							transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
						}

						.start-screen__content.active
						{
							position: relative;
							top: auto;
							left: auto;
							right: auto;
							visibility: visible;
							opacity: 1;
							-webkit-transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
							-moz-transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
							-ms-transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
							-o-transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
							transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
						}

						.start-screen__content .title,
						.start-screen__content .subtitle
						{
							font-family: 'Poppins', sans-serif;
							text-transform: uppercase;
						}

						.start-screen__content .title
						{
							line-height: 1;
							font-size: 45px;
							font-weight: 700;
							letter-spacing: 5px;
							margin-bottom: 0;
						}

						.start-screen__content .subtitle
						{
							line-height: 1.2;
							font-size: 18px;
							font-weight: 300;
							letter-spacing: 20px;
							margin-top: 20px;
							margin-bottom: 20px;
						}

						.start-screen__content p
						{
							margin-top: 20px;
							margin-bottom: 20px;
						}

						.start-screen__content p:first-child { margin-top: 0; }
						.start-screen__content p:last-child { margin-bottom: 0; }

						.start-screen__content .custom-btn.primary
						{
							background-color: #dca627;
							color: #5b8f3f;
						}

						.start-screen__content .custom-btn.primary:hover,
						.start-screen__content .custom-btn.primary:focus
						{
							background-color: #444;
							border-color: #444;
							color: #fff;
						}

						/* first slide */
						.start-screen__content-first { }
						.start-screen__content-first .title { }
						.start-screen__content-first .subtitle {}

						/* second slide */
						.start-screen__content-second { }
						.start-screen__content-second .title { }
						.start-screen__content-second .subtitle {}

						/* third slide */
						.start-screen__content-third { }
						.start-screen__content-third .title { color: #282828; }
						.start-screen__content-third .subtitle {}

						@media only screen and (min-width: 576px)
						{
							#vegas-control__prev { left: 0px; }
							#vegas-control__next { right: 0px; }

							.start-screen__content { text-align: inherit; }

							.start-screen__content .title
							{
								line-height: 0.8;
								font-size: 80px;
								letter-spacing: 10px;
							}

							.start-screen__content .subtitle { font-size: 20px; }

							.start-screen__content p
							{
								margin-top: 20px;
								margin-bottom: 20px;
							}

							.start-screen__content-third .title { line-height: 0.6; }
						}

						@media only screen and (min-width: 768px)
						{
							.start-screen__content
							{
								padding-top: 120px;
								padding-bottom: 80px;
							}

							.start-screen__content .title
							{
								font-size: 110px;
								letter-spacing: 15px;
							}

							.start-screen__content .subtitle { font-size: 25px; }
						}

						@media only screen and (min-width: 992px)
						{
							.start-screen__content
							{
								padding-top: 120px;
								padding-bottom: 120px;
							}

							.start-screen__content .title
							{
								font-size: 130px;
								letter-spacing: 20px;
							}
						}

						@media only screen and (min-width: 1200px)
						{
							.start-screen__content .title
							{
								font-size: 150px;
								letter-spacing: 30px;
							}
						}
					</style>

					<script type="text/javascript">
						(function()
						{
							var oInterval = setInterval(function ()
							{
								if (typeof window.jQuery !== 'undefined')
								{
									clearInterval(oInterval);

									/*!-----------------------------------------------------------------------------
									 * Vegas - Fullscreen Backgrounds and Slideshows.
									 * v2.3.1 - built 2016-09-18
									 * Licensed under the MIT License.
									 * http://vegas.jaysalvat.com/
									 * ----------------------------------------------------------------------------
									 * Copyright (C) 2010-2016 Jay Salvat
									 * http://jaysalvat.com/
									 * --------------------------------------------------------------------------*/
									!function(t){"use strict";var s={slide:0,delay:5e3,loop:!0,preload:!1,preloadImage:!1,preloadVideo:!1,timer:!0,overlay:!1,autoplay:!0,shuffle:!1,cover:!0,color:null,align:"center",valign:"center",firstTransition:null,firstTransitionDuration:null,transition:"fade",transitionDuration:1e3,transitionRegister:[],animation:null,animationDuration:"auto",animationRegister:[],init:function(){},play:function(){},pause:function(){},walk:function(){},slides:[]},i={},e=function(i,e){this.elmt=i,this.settings=t.extend({},s,t.vegas.defaults,e),this.slide=this.settings.slide,this.total=this.settings.slides.length,this.noshow=this.total<2,this.paused=!this.settings.autoplay||this.noshow,this.ended=!1,this.$elmt=t(i),this.$timer=null,this.$overlay=null,this.$slide=null,this.timeout=null,this.first=!0,this.transitions=["fade","fade2","blur","blur2","flash","flash2","negative","negative2","burn","burn2","slideLeft","slideLeft2","slideRight","slideRight2","slideUp","slideUp2","slideDown","slideDown2","zoomIn","zoomIn2","zoomOut","zoomOut2","swirlLeft","swirlLeft2","swirlRight","swirlRight2"],this.animations=["kenburns","kenburnsLeft","kenburnsRight","kenburnsUp","kenburnsUpLeft","kenburnsUpRight","kenburnsDown","kenburnsDownLeft","kenburnsDownRight"],this.settings.transitionRegister instanceof Array==!1&&(this.settings.transitionRegister=[this.settings.transitionRegister]),this.settings.animationRegister instanceof Array==!1&&(this.settings.animationRegister=[this.settings.animationRegister]),this.transitions=this.transitions.concat(this.settings.transitionRegister),this.animations=this.animations.concat(this.settings.animationRegister),this.support={objectFit:"objectFit"in document.body.style,transition:"transition"in document.body.style||"WebkitTransition"in document.body.style,video:t.vegas.isVideoCompatible()},this.settings.shuffle===!0&&this.shuffle(),this._init()};e.prototype={_init:function(){var s,i,e,n="BODY"===this.elmt.tagName,o=this.settings.timer,a=this.settings.overlay,r=this;this._preload(),n||(this.$elmt.css("height",this.$elmt.css("height")),s=t('<div class="vegas-wrapper">').css("overflow",this.$elmt.css("overflow")).css("padding",this.$elmt.css("padding")),this.$elmt.css("padding")||s.css("padding-top",this.$elmt.css("padding-top")).css("padding-bottom",this.$elmt.css("padding-bottom")).css("padding-left",this.$elmt.css("padding-left")).css("padding-right",this.$elmt.css("padding-right")),this.$elmt.clone(!0).children().appendTo(s),this.elmt.innerHTML=""),o&&this.support.transition&&(e=t('<div class="vegas-timer"><div class="vegas-timer-progress">'),this.$timer=e,this.$elmt.prepend(e)),a&&(i=t('<div class="vegas-overlay">'),"string"==typeof a&&i.css("background-image","url("+a+")"),this.$overlay=i,this.$elmt.prepend(i)),this.$elmt.addClass("vegas-container"),n||this.$elmt.append(s),setTimeout(function(){r.trigger("init"),r._goto(r.slide),r.settings.autoplay&&r.trigger("play")},1)},_preload:function(){var t,s;for(s=0;s<this.settings.slides.length;s++)(this.settings.preload||this.settings.preloadImages)&&this.settings.slides[s].src&&(t=new Image,t.src=this.settings.slides[s].src),(this.settings.preload||this.settings.preloadVideos)&&this.support.video&&this.settings.slides[s].video&&(this.settings.slides[s].video instanceof Array?this._video(this.settings.slides[s].video):this._video(this.settings.slides[s].video.src))},_random:function(t){return t[Math.floor(Math.random()*t.length)]},_slideShow:function(){var t=this;this.total>1&&!this.ended&&!this.paused&&!this.noshow&&(this.timeout=setTimeout(function(){t.next()},this._options("delay")))},_timer:function(t){var s=this;clearTimeout(this.timeout),this.$timer&&(this.$timer.removeClass("vegas-timer-running").find("div").css("transition-duration","0ms"),this.ended||this.paused||this.noshow||t&&setTimeout(function(){s.$timer.addClass("vegas-timer-running").find("div").css("transition-duration",s._options("delay")-100+"ms")},100))},_video:function(t){var s,e,n=t.toString();return i[n]?i[n]:(t instanceof Array==!1&&(t=[t]),s=document.createElement("video"),s.preload=!0,t.forEach(function(t){e=document.createElement("source"),e.src=t,s.appendChild(e)}),i[n]=s,s)},_fadeOutSound:function(t,s){var i=this,e=s/10,n=t.volume-.09;n>0?(t.volume=n,setTimeout(function(){i._fadeOutSound(t,s)},e)):t.pause()},_fadeInSound:function(t,s){var i=this,e=s/10,n=t.volume+.09;1>n&&(t.volume=n,setTimeout(function(){i._fadeInSound(t,s)},e))},_options:function(t,s){return void 0===s&&(s=this.slide),void 0!==this.settings.slides[s][t]?this.settings.slides[s][t]:this.settings[t]},_goto:function(s){function i(){f._timer(!0),setTimeout(function(){y&&(f.support.transition?(h.css("transition","all "+_+"ms").addClass("vegas-transition-"+y+"-out"),h.each(function(){var t=h.find("video").get(0);t&&(t.volume=1,f._fadeOutSound(t,_))}),e.css("transition","all "+_+"ms").addClass("vegas-transition-"+y+"-in")):e.fadeIn(_));for(var t=0;t<h.length-4;t++)h.eq(t).remove();f.trigger("walk"),f._slideShow()},100)}"undefined"==typeof this.settings.slides[s]&&(s=0),this.slide=s;var e,n,o,a,r,h=this.$elmt.children(".vegas-slide"),d=this.settings.slides[s].src,l=this.settings.slides[s].video,g=this._options("delay"),u=this._options("align"),c=this._options("valign"),p=this._options("cover"),m=this._options("color")||this.$elmt.css("background-color"),f=this,v=h.length,y=this._options("transition"),_=this._options("transitionDuration"),w=this._options("animation"),b=this._options("animationDuration");this.settings.firstTransition&&this.first&&(y=this.settings.firstTransition||y),this.settings.firstTransitionDuration&&this.first&&(_=this.settings.firstTransitionDuration||_),this.first&&(this.first=!1),"repeat"!==p&&(p===!0?p="cover":p===!1&&(p="contain")),("random"===y||y instanceof Array)&&(y=y instanceof Array?this._random(y):this._random(this.transitions)),("random"===w||w instanceof Array)&&(w=w instanceof Array?this._random(w):this._random(this.animations)),("auto"===_||_>g)&&(_=g),"auto"===b&&(b=g),e=t('<div class="vegas-slide"></div>'),this.support.transition&&y&&e.addClass("vegas-transition-"+y),this.support.video&&l?(a=l instanceof Array?this._video(l):this._video(l.src),a.loop=void 0!==l.loop?l.loop:!0,a.muted=void 0!==l.mute?l.mute:!0,a.muted===!1?(a.volume=0,this._fadeInSound(a,_)):a.pause(),o=t(a).addClass("vegas-video").css("background-color",m),this.support.objectFit?o.css("object-position",u+" "+c).css("object-fit",p).css("width","100%").css("height","100%"):"contain"===p&&o.css("width","100%").css("height","100%"),e.append(o)):(r=new Image,n=t('<div class="vegas-slide-inner"></div>').css("background-image",'url("'+d+'")').css("background-color",m).css("background-position",u+" "+c),"repeat"===p?n.css("background-repeat","repeat"):n.css("background-size",p),this.support.transition&&w&&n.addClass("vegas-animation-"+w).css("animation-duration",b+"ms"),e.append(n)),this.support.transition||e.css("display","none"),v?h.eq(v-1).after(e):this.$elmt.prepend(e),h.css("transition","all 0ms").each(function(){this.className="vegas-slide","VIDEO"===this.tagName&&(this.className+=" vegas-video"),y&&(this.className+=" vegas-transition-"+y,this.className+=" vegas-transition-"+y+"-in")}),f._timer(!1),a?(4===a.readyState&&(a.currentTime=0),a.play(),i()):(r.src=d,r.complete?i():r.onload=i)},_end:function(){this.ended=!0,this._timer(!1),this.trigger("end")},shuffle:function(){for(var t,s,i=this.total-1;i>0;i--)s=Math.floor(Math.random()*(i+1)),t=this.settings.slides[i],this.settings.slides[i]=this.settings.slides[s],this.settings.slides[s]=t},play:function(){this.paused&&(this.paused=!1,this.next(),this.trigger("play"))},pause:function(){this._timer(!1),this.paused=!0,this.trigger("pause")},toggle:function(){this.paused?this.play():this.pause()},playing:function(){return!this.paused&&!this.noshow},current:function(t){return t?{slide:this.slide,data:this.settings.slides[this.slide]}:this.slide},jump:function(t){0>t||t>this.total-1||t===this.slide||(this.slide=t,this._goto(this.slide))},next:function(){if(this.slide++,this.slide>=this.total){if(!this.settings.loop)return this._end();this.slide=0}this._goto(this.slide)},previous:function(){if(this.slide--,this.slide<0){if(!this.settings.loop)return void this.slide++;this.slide=this.total-1}this._goto(this.slide)},trigger:function(t){var s=[];s="init"===t?[this.settings]:[this.slide,this.settings.slides[this.slide]],this.$elmt.trigger("vegas"+t,s),"function"==typeof this.settings[t]&&this.settings[t].apply(this.$elmt,s)},options:function(i,e){var n=this.settings.slides.slice();if("object"==typeof i)this.settings=t.extend({},s,t.vegas.defaults,i);else{if("string"!=typeof i)return this.settings;if(void 0===e)return this.settings[i];this.settings[i]=e}this.settings.slides!==n&&(this.total=this.settings.slides.length,this.noshow=this.total<2,this._preload())},destroy:function(){clearTimeout(this.timeout),this.$elmt.removeClass("vegas-container"),this.$elmt.find("> .vegas-slide").remove(),this.$elmt.find("> .vegas-wrapper").clone(!0).children().appendTo(this.$elmt),this.$elmt.find("> .vegas-wrapper").remove(),this.settings.timer&&this.$timer.remove(),this.settings.overlay&&this.$overlay.remove(),this.elmt._vegas=null}},t.fn.vegas=function(t){var s,i=arguments,n=!1;if(void 0===t||"object"==typeof t)return this.each(function(){this._vegas||(this._vegas=new e(this,t))});if("string"==typeof t){if(this.each(function(){var e=this._vegas;if(!e)throw new Error("No Vegas applied to this element.");"function"==typeof e[t]&&"_"!==t[0]?s=e[t].apply(e,[].slice.call(i,1)):n=!0}),n)throw new Error('No method "'+t+'" in Vegas.');return void 0!==s?s:this}},t.vegas={},t.vegas.defaults=s,t.vegas.isVideoCompatible=function(){return!/(Android|webOS|Phone|iPad|iPod|BlackBerry|Windows Phone)/i.test(navigator.userAgent)}}(window.jQuery||window.Zepto);

									jQuery(document).ready(function($){

										var slider = $('#vegas-slider'),
											slides = [
												{
													name: "img 1",
													src: '{{asset('assets/user/img/home_img/img_1.jpg')}}'
												},
												{
													name: "img 2",
													src: '{{asset('assets/user/img/home_img/img_2.jpg')}}'
												},
												{
													name: "img 3",
													src: '{{asset('assets/user/img/home_img/img_3.jpg')}}'
												}
											],
											slider_content = $('.start-screen__content__item'),
											dots, a, x;

										slider.vegas({
											autoplay: true,
											timer: true,
											preloadImage: true,
											transition: [ 'fade', 'zoomOut', 'blur', 'swirlLeft', 'swirlRight' ],
											transitionDuration: 4000,
											delay: 5000,
											slides: slides,
											overlay: '{{asset('assets/user/img/home_img/overlays/05.png')}}',
											init: function (globalSettings) {

												if ( this.data('dots') == true ) {

													var $this = this,
														dots = $('<nav class="vegas-dots"></nav>');

													$this.find('.vegas-control').append(dots);

													for (var i = 0; i < slides.length; i++) {
														x = $('<a "href="#" class="paginatorLink"></a>');

														x.on('click', function(e) {
															e.preventDefault();

															$this.vegas('jump', dots.find('a').index(this));
														});

														dots.append(x);
													};

													a = dots.find('a');
													a.eq(0).addClass('active');

													slider_content.eq(0).addClass('is-active');
												};
											},
											play: function (index, slideSettings) {
												
											},
											walk: function (index, slideSettings) {

												if ( this.data('dots') == true ) {

													a.removeClass('active').eq(index).addClass('active');
												};

												slider_content.removeClass('is-active').eq(index).addClass('is-active');
											}
										});

										$('#vegas-control__prev').on('click', function () {
											slider.vegas('previous');
										});

										$('#vegas-control__next').on('click', function () {
											slider.vegas('next');
										});
									});
								}
							}, 500);
						})();
					</script>
				</div>

						<div id="start-screen__content-container" class="start-screen__content-container  text-white">
					<div class="start-screen__content__item start-screen__content__item--1  align-items-center">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-12 col-md-10 col-xl-8">
									<div class="__name">Ecomarc</div>

									<h2 class="__title text-white">cultivez vos champignons</h2>

									<p class="text-center">
										Notre substrat est composé en grande partie de marc de café ce qui donne un goût et une texture unique à nos pleurotes
									</p>

									<p class="text-center mt-5 mt-md-10">
										<span class="d-none d-sm-block"><a class="custom-btn custom-btn--big custom-btn--style-3" href="#decouvrir">Découvrir</a></span>

										
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="start-screen__content__item start-screen__content__item--2  align-items-center">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-12 col-md col-lg-9 col-xl-8">
									<div class="__name">Ecomarc</div>

									<h2 class="__title text-white">Economie circulaire</span></h2>

									<p>
										À ce jour , nous avons valorisé une tonne de marc de café transformé en délicieux pleurotes étoilés et en superbe kits
									</p>

									<p class="mt-5 mt-md-10">
										<span class="d-none d-sm-block"><a class="custom-btn custom-btn--big custom-btn--style-3" href="#decouvrir">Découvrir</a></span>

										
									</p>
								</div>

								<div class="col-12 my-3 d-md-none"></div>

								<div class="col-12 col-md-auto col-lg-3 col-xl-4  text-center">
									<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=m2tBCqZL23U">
										<span></span>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="start-screen__content__item start-screen__content__item--3 align-items-center">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-12 col-md-auto col-xl-8">
									<div class="__name" style="margin-left: -35px;" >Ecomarc</div>

									<h6 class="__title text-white text-center" style="margin-left: -35px;" >Zéro<span style="color: #5b8f40">déchet</span></h6>

									<p class="text-center mt-5 mt-md-10">
										<span class="d-none d-sm-block"><a class="custom-btn custom-btn--big custom-btn--style-2" style="color: #fff;" href="#decouvrir">Découvrir</a></span>

										
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<span class="scroll-discover"></span>
			</div>
			<!-- end start screen -->

			<!-- start main -->
			<main role="main">
				<!-- Common styles
				================================================== -->
				<link rel="stylesheet" href="{{asset('assets/user/css/style.css')}}" type="text/css">

				<!-- Load lazyLoad scripts
				================================================== -->
				<script>
					(function(w, d){
						var m = d.getElementsByTagName('main')[0],
							s = d.createElement("script"),
							v = !("IntersectionObserver" in w) ? "8.17.0" : "10.19.0",
							o = {
								elements_selector: ".lazy",
								data_src: 'src',
								data_srcset: 'srcset',
								threshold: 500,
								callback_enter: function (element) {

								},
								callback_load: function (element) {
									element.removeAttribute('data-src')

									oTimeout = setTimeout(function ()
									{
										clearTimeout(oTimeout);

										AOS.refresh();
									}, 1000);
								},
								callback_set: function (element) {

								},
								callback_error: function(element) {
									element.src = "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
								}
							};
						s.type = 'text/javascript';
						s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
						s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
						m.appendChild(s);
						// m.insertBefore(s, m.firstChild);
						w.lazyLoadOptions = o;
					}(window, document));
				</script>
<!-- start section -->
				<section class="section section--dark-bg jarallax" data-speed="0.5" data-img-position="50% 80%">
					<img class="jarallax-img  lazy" data-src="{{asset('assets/user/img/bg_3.jpg')}}" alt="Ecomarc" />

					<div class="container">
						<div class="row">
							<div class="col-12 col-md-8 col-lg-6">
								<div data-aos="fade-left" data-aos-easing="ease-out-quad" data-aos-duration="700">
									<h2 class="__title">À propos <br><span> ECOMARC</span></h2>
										<p style="text-align: justify; font-size: 15px;">
										Fondé en 2018 par M. Ahmed Hamdi, Ecomarc est l’une des entreprises tunisiennes lauréates de meilleurs projets Souk At-tnmia.


									</p>

										<p style="text-align: justify; font-size: 15px;">
										Soucieuse de répondre aux attentes des consommateurs les plus exigeants, la société se spécialise dans la production et la vente de pleurotes frais et déshydratés.
Cultivés naturellement, sans aucun pesticide ni produit de synthèse, les pleurotes Ecomarc se distinguent par leur fraîcheur et leur qualité supérieure.
									</p>
									<p><a class="custom-btn custom-btn--medium custom-btn--style-1" href="/ecomarc">En savoir plus</a><br><br></p>
								</div>
							</div>
							<div class="col-12 col-md-8 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/img_1.png')}}" alt="les pleurotes Ecomarc"/>
											</div>
										</div>
						</div>
					</div>

					<div class="py-4 py-lg-10"></div>
				</section>
				<!-- end section -->

				
				<!-- start section -->
				<section class="section section--no-pb">
					<div class="container">
						<div class="special-offer special-offer--style-1" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="70">
							<h2 class="text text-center lazy"  data-src="{{asset('assets/user/img/special_offer_text_bg.jpg')}}">CULTIVEZ VOS CHAMPIGNONS</h2>
						</div>
					</div>
				</section>
				<!-- end section -->
				<!-- start section -->
				<section id="decouvrir" class="section ">
					<div class="container">
						<div class="section-heading text-center" data-aos="fade">
							<h2 class="__title">Economie <span>circulaire</span></h2>

							<p style="color: #000;">Faites pousser de délicieux champignons bio en 10 jours dans votre cuisine, tout simplement</p>
						</div>

						<!-- start posts -->
						<div class="posts posts--style-1">
							<div class="__inner">
								<div class="row">
									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="__item __item--preview" data-aos="flip-up" data-aos-delay="100" data-aos-offset="0">
											<figure class="__image">
												<img class="lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/posts_img/1.jpg')}}" alt="Pleurotes" />
											</figure>

											<div class="__content">
												

												<h3 class="__title h5">Pleurotes</h3>
												
												<p style="text-align: justify; color: #000;">Riche en vitamines (B2, B3, B5 et D) et en minéraux (cuivre, zinc, fer, phosphore et potassium), le pleurote serait efficace pour stimuler le système immunitaire.<br><br></p>

											</div>

											
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="__item __item--preview" data-aos="flip-up" data-aos-delay="200" data-aos-offset="0">
											<figure class="__image">
												<img class="lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/posts_img/2.jpg')}}" alt="Kit Pleurotes" />
											</figure>

											<div class="__content">
												

												<h3 class="__title h5">Kit Pleurotes</h3>
												
												<p style="text-align: justify; color: #000;">Avec sa pousse spectaculaire, il va épater les curieux.<br><br><br><br></p>


											
												
											</div>

											
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="__item __item--preview" data-aos="flip-up" data-aos-delay="300" data-aos-offset="0">
											<figure class="__image">
												<img class="lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/posts_img/3.jpg')}}" alt="Engrais Naturel" />
											</figure>

											<div class="__content">
												

												<h3 class="__title h5">Engrais Naturel</h3>
												
												<p style="text-align: justify; color: #000;">
												Afin d’aller plus loin dans l’économie circulaire et valorise encore plus notre résidu de la production de pleurotes (utilisés comme engrais), nous avons lancé la production de l’engrais naturel.<br></p>
												
											

												
											</div>

											
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end posts -->
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section" style="background-color: #e6fadb;">
					<div class="container">
						<div class="section-heading text-center" data-aos="fade">
							<h2 class="__title" style="color: #5b8f3f;">Commencez <span>votre voyage</span></h2>

							<p style="color: #000;" >Le pleurote se démarque des autres champignons par sa richesse en nutriments.</p>
						</div>

						<!-- start feature -->
						<div class="feature feature--style-1">
							<div class="__inner">
								<div class="row">
									<!-- start item -->
									<div class="col-6 col-sm-4 col-lg-3">
										<div class="__item  text-center" data-aos="fade" data-aos-delay="100" data-aos-offset="100">
											<i class="__ico">
												<img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/feature_img/1.png')}}" alt="demo" />
											</i>

											<h5 class="__title">Découvrir</h5>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-6 col-sm-4 col-lg-3">
										<div class="__item  text-center" data-aos="fade" data-aos-delay="200" data-aos-offset="100">
											<i class="__ico">
												<img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/feature_img/2.png')}}" alt="Commander pleurotes" />
											</i>

											<h5 class="__title">Commander</h5>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-6 col-sm-4 col-lg-3">
										<div class="__item  text-center" data-aos="fade" data-aos-delay="300" data-aos-offset="100">
											<i class="__ico">
												<img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/feature_img/3.png')}}" alt="Obtenir boite des peurotes" />
											</i>

											<h5 class="__title">Obtenez une boîte</h5>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-6 col-sm-4 col-lg-3">
										<div class="__item  text-center" data-aos="fade" data-aos-delay="400" data-aos-offset="100">
											<i class="__ico">
												<img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/feature_img/4.png')}}" alt="plaisir avec peurotes et produits frais" />
											</i>

											<h5 class="__title">Prendre plaisir!
</h5>
										</div>
									</div>
									<!-- end item -->

									
								</div>
							</div>
						</div>
						<!-- end feature -->
					</div>
				</section>
				<!-- end section -->

	


<section class="section">
					<div class="container-fluid">
						<!-- start products list -->
						<div class="section-heading section-heading--center" data-aos="fade">
							<h2 class="__title">NOS <span>PARTENAIREs</span></h2>
						</div>
						<div class="products-list">
							<!-- start item -->
							<div class="__item">
								<div class="__bg">
									<div data-jarallax-element="-140" data-speed="0.4">
										<img class="img-fluid lazy" width="224" height="243" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/products_img/bg_1.png')}}" alt="partenaires d'ecomarc "/>
									</div>
								</div>

								<div class="__inner">
									<div class="row align-items-lg-center justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/products_img/1.jpg')}}" alt="APIA"/>
											</div>
										</div>

										<div class="col-12 my-3 d-lg-none"></div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">APIA - Agence de Promotion des Investissements Agricoles</h3>

												<p style="text-align: justify;">
													L'APIA est un établissement public à caractère non administratif administratif, Créée en 1983, ayant pour mission principale la promotion de l'investissement privé dans les domaines de l'agriculture, de la pêche et des services associés ainsi que dans les activités de la première transformation intégrées aux projets Agricoles et de Pêche.
												</p>

												<p>
													<a class="custom-btn custom-btn--medium custom-btn--style-1" href="http://www.apia.com.tn/presentation.html" target="_blank">En savoir plus</a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="__item">
								<div class="__bg">
									<div data-jarallax-element="-140" data-speed="0.4">
										<img class="img-fluid lazy" width="175" height="309" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/products_img/bg_2.png')}}" alt="Soukattanmia"/>
									</div>
								</div>

								<div class="__inner">
									<div class="row align-items-lg-center justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/products_img/2.jpg')}}" alt="Soukattanmia"/>
											</div>
										</div>

										<div class="col-12 my-3 d-lg-none"></div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">Soukattanmia</h3>

												<p style="text-align: justify;">
													Souk At-tanmia représente la plus importante mobilisation d’acteurs travaillant sur la promotion de l’emploi en Tunisie à travers l’appui à l’entreprenariat. 
												</p>

												<p>
													<a class="custom-btn custom-btn--medium custom-btn--style-1" href="http://www.soukattanmia.org/" target="_blank">En savoir plus</a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							
						</div>
						<!-- end products list -->
					</div>
				</section>
				<!-- end section -->
					
				<!-- start section -->
				<section class="section section--no-pt section--gutter">
					<div class="container-fluid px-md-0">
						<!-- start product preview -->
						<div class="product-preview product-preview--style-1">
							<div class="__inner">
								<div class="row">
									<!-- start item -->
									<div class="col-12 col-md-7 col-xl-6">
										<div class="__item">
											<div class="__intro-text">
												<div class="row">
													<div class="col-md-11">
														<h2>Ecomarc <span>Recettes</span></h2>

														<p style="text-align: justify;color: #000;">
															Côté santé, le pleurote est connu pour ses vertus antioxydantes. Il participe ainsi à prévenir certaines pathologies cardiovasculaires comme l’hypertension, mais aussi le diabète. Certaines études scientifiques ont montré que certains principes actifs du pleurote aidaient à lutter contre les cellules cancéreuses et permettraient de prévenir et même de ralentir l’évolution de la maladie d’Alzheimer.
														</p>

														<p>
															<a class="custom-btn custom-btn--medium custom-btn--style-1" href="/pleurotes#sante">En savoir plus</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-5 col-xl-3">
										<div class="__item">
											<figure class="__image">
												<img class="lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/product-preview_img/1.jpg')}}" alt="Sauce de pleurotes" />
											</figure>

										
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-4 col-xl-3">
										<div class="__item">
											<figure class="__image">
												<img class="lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/product-preview_img/2.jpg')}}" alt="Salade avec pleurotes" />
											</figure>

											
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-4 col-xl-3">
										<div class="__item">
											<figure class="__image">
												<img class="lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/product-preview_img/3.jpg')}}" alt="Pleurote grillés" />
											</figure>

											
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-4 col-xl-3">
										<div class="__item">
											<figure class="__image">
												<img class="lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/product-preview_img/4.jpg')}}" alt="Plat pleurote mixte" />
											</figure>

											
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-xl-6">
										<div class="__item">
											<div class="__content">
												<h2 class="__title"><b>Autres </b>recettes</h2>
											</div>

											<a class="__link" target="_blank" href="https://www.facebook.com/ecomarctn"></a>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-7 col-xl-6 offset-xl-3">
										<div class="__item">
											<figure class="__image">
												<img class="lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/product-preview_img/5.jpg')}}" alt="Pleurote avec sauce tomate" />
											</figure>

											
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-5 col-xl-3">
										<div class="__item">
											<figure class="__image">
												<img class="lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/product-preview_img/6.jpg')}}"  alt="recettes avec pleurote" />
											</figure>

										
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end product preview -->
					</div>
				</section>
				<!-- end section -->


@endsection