<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.loader_ {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background-color: #000;
	/*background: url(lib/loader/images/loader-128x/Preloader_2.gif) center no-repeat #fff;*/
}

.loader:before,
.loader:after,
.loader {
top:70%;
  border-radius: 50%;
  width: 2.5em;
  height: 2.5em;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation: load7 1.8s infinite ease-in-out;
  animation: load7 1.8s infinite ease-in-out;
}
.loader {
  margin: 8em auto;
  font-size: 10px;
  position: relative;
  text-indent: -9999em;
  -webkit-animation-delay: 0.16s;
  animation-delay: 0.16s;
}
.loader:before {
  left: -3.5em;
}
.loader:after {
  left: 3.5em;
  -webkit-animation-delay: 0.32s;
  animation-delay: 0.32s;
}
.loader:before,
.loader:after {
  content: '';
  position: absolute;
  top: 0;
}
@-webkit-keyframes load7 {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em #ffffff;
  }
  40% {
    box-shadow: 0 2.5em 0 0 #FFF;
  }
}
@keyframes load7 {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em #ffffff;
  }
  40% {
    box-shadow: 0 2.5em 0 0 #FFF;
  }
}
</style>
<script>
	$(window).load(function() {
		$(".loader_").fadeOut(1000);
	});
</script>
<div class="loader_"><div class="loader">Loading...</div></div>