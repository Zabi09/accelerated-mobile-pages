<?php global $redux_builder_amp; ?>
<?php if(!isset($redux_builder_amp['amp_font_selector']) || $redux_builder_amp['amp_font_selector'] == 1 || empty($redux_builder_amp['amp_font_selector'])){?>
@font-face {font-family: 'Barlow Semi Condensed';font-style: normal;font-weight: 400;src: local('BarlowSemiCondensed-Regular'), local('BarlowSemiCondensed-Regular'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/BarlowSemiCondensed-Regular.ttf');}

@font-face {font-family: 'Barlow Semi Condensed';font-style: italic;font-weight: 400;src: local('BarlowSemiCondensed-Italic'), local('BarlowSemiCondensed-Italic'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/BarlowSemiCondensed-Italic.ttf');}

@font-face {font-family: 'Barlow Semi Condensed';font-style: normal;font-weight: 600;src: local('BarlowSemiCondensed-SemiBold'), local('BarlowSemiCondensed-SemiBold'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/BarlowSemiCondensed-SemiBold.ttf');} 

@font-face {font-family: 'Barlow Semi Condensed';font-style: italic;font-weight: 600;src: local('BarlowSemiCondensed-SemiBoldItalic'), local('BarlowSemiCondensed-SemiBoldItalic'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/BarlowSemiCondensed-SemiBoldItalic.ttf'); }

@font-face {font-family: 'Playfair Display';font-style: normal;font-weight: 700;src: local('PlayfairDisplay-Bold'), local('PlayfairDisplay-Bold'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/PlayfairDisplay-Bold.ttf'); }

@font-face {font-family: 'Playfair Display';font-style: italic;font-weight: 700;src: local('PlayfairDisplay-BoldItalic'), local('PlayfairDisplay-BoldItalic'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/PlayfairDisplay-BoldItalic.ttf'); }

<?php } ?>
html {
	font-size: 62.5%; /* 10px browser default */
}
body, .sp-cnt {
	font-family: 'Barlow Semi Condensed', sans-serif;
font-size: 22px;
	font-size: 2.2rem;
	font-weight: 400;
	line-height: 1.5;
}
body > div {
	font-size: 2.2rem;
}
a img:hover, a amp-img:hover {
  filter: grayscale(100%);
}
ol, ul{ list-style-position: outside }
p, ol, ul, figure{ margin: 0 0 1em; padding: 0; }
strong {font-weight:600;}
i, em {
	font-weight: 400;
	font-style: italic;
}
a, a:active, a:visited{ color: #765298;
	text-decoration: none;}
a:hover, a:active, a:focus{	color: #000;}
pre{ white-space: pre-wrap;}
.left{float:left}
.right{float:right}
.hidden, .hide{ display:none }
.clearfix{ clear:both }
blockquote,
blockquote::before {
	color: #6a6a6a;
	font-family: 'Barlow Semi Condensed', sans-serif;
}

blockquote {
	margin: 40px 60px 24px 40px;
	margin: 4rem 6rem 2.4rem 4rem;
	border-bottom: 2px solid;
}

blockquote p {
	margin-bottom:1.2rem!important;
}

blockquote::before {
	content: "\e901";
	font-family:'amp-cantechfont'!important;
	display: inline-block;
	font-size: 60px;
	font-size: 6rem;
	height: 0;
}
blockquote p:last-child {margin-bottom: 0;}
.amp-wp-unknown-size img {object-fit: contain;}
.amp-wp-enforced-sizes{ max-width: 100% }
html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{font-family: 'Barlow Semi Condensed', sans-serif;margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}body{line-height:1}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}nav ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}table{border-collapse:collapse;border-spacing:0}hr{display:border: 0;
	border-collapse: collapse;
	border-bottom: 2px solid #000;
	clear: left;
	margin: 0 auto 40px auto;
	padding-top: 20px;
	width: 85%;
	text-align:center;}hr:before {
	content: "\e917";
	font-family:'amp-cantechfont'!important;
	background:#fff;
	padding: 0 20px 0 25px;
	padding: 0 2rem 0 2.5rem;
    top: -30px;
	top: -3rem;
    position: relative;
    font-size: 4rem;
	color:#6a6a6a;
}
input, textarea, select, button {
   background-color: #fff;
   color: #000;
    display: inline-block;
    margin: 0 rem;
    font-size:1.6rem;
    padding: 1.5rem;
    width: 100%;
    font-family: 'Barlow Semi Condensed',sans-serif;
    vertical-align:middle
}
.search-form {
overflow: hidden;
    position: relative;
    padding: .5rem;
    background:#fff;
    }
    
   input.search-form-input {
    padding-right: 45px;
    padding-right: 4.5rem;
    -webkit-appearance: none;
    border-radius: 0;
    box-shadow: none;
    border: 4px solid #000;
    font-size: 22px;
    font-size: 2.2rem;
    line-height: 1;
    color: #6a6a6a;
    }
    
   .search-form:after {
    font-family: 'amp-cantechfont' !important;
    content: "\e902";
    position: absolute;
    top: 30px;
    top: 3rem;
    right: 30px;
    right: 3rem;
    width: 20px;
    width: 2rem;
    height: 20px;
    height: 2rem;
    line-height: 20px;
    line-height: 2rem;
    font-size: 35px;
    font-size: 3.5rem;
}

input.search-form-submit{
    clip: rect(0, 0, 0, 0);
    cursor: pointer;
    margin-top: 5px;
    margin-top: .5rem;
    -webkit-appearance: none;
    background-color: #000;
    border: none;
    box-shadow: none;
    color: #fff;
    font-size: 24px;
    font-size: 2.4rem;
    line-height: 1;
    text-transform: uppercase;
    white-space: normal;
    padding: 20px;
    padding: 2rem;
    border-radius: 0;
    border:0;
}

.search-form-label {
display:none;
}

.ampnoticebar {
background-color: #000; padding: 2rem; color: #fff; font-size:2rem;line-height:1.4;
}

.ampnoticebar a {
text-decoration:underline;
color:#fff;
}

.ampnoticebar a:hover {
text-decoration:none;
}

*,*:after,*:before {
box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;-o-box-sizing: border-box;}
.alignright {float: right;margin-left:10px;}
.alignleft {float: left;margin-right:10px;}
.aligncenter {display: block;margin-left: auto;margin-right: auto;}
.sp-rt p amp-img {margin-bottom:2rem;margin-left: 0;}
.related_posts amp-img {margin-bottom:1.5rem;}
.i-amphtml-fill-content {object-fit: cover;}
amp-iframe { max-width: 100%; margin-bottom : 20px; }
amp-wistia-player {margin:5px 0px;}
.wp-caption {padding: 0; max-width: 100%!important;}
.wp-caption-text {font-size: 12px;line-height: 1.5em;margin: 0;padding: .66em 10px .75em;text-align: center;}
amp-carousel > amp-img > img {object-fit: contain;}
.amp-carousel-container {position: relative;width: 100%;height: 100%;} 
.amp-carousel-img img {object-fit: contain;}
amp-instagram{box-sizing: initial;}
@font-face {font-family: 'amp-cantechfont';font-style: normal;font-weight: normal;src:  local('amp-cantechfont'), local('amp-cantechfont'), url('<?php echo plugin_dir_url(__FILE__) ?>fonts/amp-cantechfont.ttf');}
.cntr {font-family: 'Barlow Semi Condensed', sans-serif;max-width: 1100px;margin: 0 auto;width:100%;padding:0px 20px}
header .cntr{
<?php if( isset($redux_builder_amp['swift-width-control']) && $redux_builder_amp['swift-width-control']){?>
	max-width:<?php echo $redux_builder_amp['swift-width-control']?>;
<?php }?>
}
<?php if($redux_builder_amp['amp-sticky-header'] == '1'){?>
.h_m{position:fixed;z-index:9999;top:0px;width: 100vw;display:inline-block;
	<?php if($redux_builder_amp['swift-background-scheme']['rgba']){?>background: <?php echo $redux_builder_amp['swift-background-scheme'] ['rgba'] ?>;<?php }?>
	<?php if($redux_builder_amp['swift-border-line-control']){?>border-bottom: <?php echo $redux_builder_amp['swift-border-line-control'] ?>px solid;<?php } ?>
	<?php if($redux_builder_amp['swift-border-color-control']['rgba']){?>border-color:<?php echo $redux_builder_amp['swift-border-color-control'] ['rgba'] ?>;<?php } ?>
	<?php if($redux_builder_amp['swift-boxshadow-checkbox-control']){?>box-shadow:0px 0px 2px 2px #ccc;<?php }?>
	<?php if($redux_builder_amp['swift-padding-control']){?>padding: <?php echo $redux_builder_amp['swift-padding-control']['padding-top'] .' '.$redux_builder_amp['swift-padding-control']['padding-right'] .' '.$redux_builder_amp['swift-padding-control']['padding-bottom']  .' '.$redux_builder_amp['swift-padding-control']['padding-left'] ; ?>;<?php } ?>
	<?php if($redux_builder_amp['swift-margin-control']){?>margin: <?php echo  $redux_builder_amp['swift-margin-control']['margin-top'] .' '.$redux_builder_amp['swift-margin-control']['margin-right'] .' '.$redux_builder_amp['swift-margin-control']['margin-bottom']  .' '.$redux_builder_amp['swift-margin-control']['margin-left'] ; ?>;<?php } ?>
}
.content-wrapper{<?php if($redux_builder_amp['swift-height-control']){?>margin-top:<?php echo $redux_builder_amp['swift-height-control']?>;<?php } ?>}
<?php } else{ ?>
.h_m{
	position: static;
	<?php if($redux_builder_amp['swift-background-scheme']['rgba']){?>background: <?php echo $redux_builder_amp['swift-background-scheme'] ['rgba'] ?>;<?php }?>
	<?php if($redux_builder_amp['swift-border-line-control']){?>border-bottom: <?php echo $redux_builder_amp['swift-border-line-control'] ?>px solid;<?php } ?>
	<?php if($redux_builder_amp['swift-border-color-control']['rgba']){?>border-color:<?php echo $redux_builder_amp['swift-border-color-control'] ['rgba'] ?>;<?php } ?>
	<?php if($redux_builder_amp['swift-boxshadow-checkbox-control']){?>box-shadow:0px 0px 2px 2px #ccc;<?php }?>
	<?php if($redux_builder_amp['swift-padding-control']){?>padding: <?php echo $redux_builder_amp['swift-padding-control']['padding-top'] .' '.$redux_builder_amp['swift-padding-control']['padding-right'] .' '.$redux_builder_amp['swift-padding-control']['padding-bottom']  .' '.$redux_builder_amp['swift-padding-control']['padding-left'] ; ?>;<?php } ?>
	<?php if($redux_builder_amp['swift-margin-control']){?>margin: <?php echo  $redux_builder_amp['swift-margin-control']['margin-top'] .' '.$redux_builder_amp['swift-margin-control']['margin-right'] .' '.$redux_builder_amp['swift-margin-control']['margin-bottom']  .' '.$redux_builder_amp['swift-margin-control']['margin-left'] ; ?>;<?php } ?>
}
.content-wrapper{
	margin-top:0px;
} 
<?php } // Sickt CSS Ends ?>
.h_m_w{width:100%;clear:both;display: inline-flex;<?php if($redux_builder_amp['swift-height-control']){?>height:<?php echo $redux_builder_amp['swift-height-control']?>;<?php } ?>}
.h-ic a:after, .h-ic a:before{font-family: 'icomoon';font-size: 23px;<?php if(isset($redux_builder_amp['swift-element-color-control'] ['rgba']) && $redux_builder_amp['swift-element-color-control'] ['rgba']){?>color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;<?php } ?>}
.h-call a:after{content: "\e0cd";}
.h-shop a:after{align-self: center;}
.h-ic{margin:0px 10px; align-self: center;}
div .amp-logo {
    text-decoration: none;
    display: block;
    width: 100%;
	    background: url(/wp-content/themes/news-pro/images/cantech-letter-logo.svg) no-repeat;
    background-size: contain;
    margin: 0 auto;
	background-position:center;
	left: 0px;
    position: relative;
	z-index:10;
}
.amp-logo a{line-height:0;display:inline-block;opacity:0;width:-webkit-fill-available;height:5rem;<?php if(isset($redux_builder_amp['swift-element-color-control'] ['rgba']) && $redux_builder_amp['swift-element-color-control'] ['rgba']){?>color:<?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;<?php } ?>}
.logo <?php if(is_single()){ ?> h2 <?php } else{?>h1<?php }?>{margin: 0;font-size: 17px;font-weight: 700;text-transform: uppercase;display:inline-block;width:100%;}
.h-srch a{line-height:1;display:block;}
.amp-logo amp-img{margin: 0 auto;}
@media(max-width:480px){ .h-sing {font-size: 13px;} }
@media(max-width:500px){ .hamb-mnu .m-ctr {width: auto;} }
@media(max-width:740px){div .amp-logo {margin-top:0;height:3rem;} }
<?php //header-type-1


if($redux_builder_amp['header-type'] == '1'){?>
.logo{z-index: 2;flex-grow: 1;align-self: center;text-align:center;line-height:0;}
.h-1{display:flex;order:1;}
.h-nav{order: -1;align-self: center;}
.h-ic:last-child{margin-right:0;}
<?php } ?>
<?php //menu type-1 

if($redux_builder_amp['menu-type'] == '1'){?>
.m-ctr{<?php if($redux_builder_amp['swift-header-overlay']['rgba']){?>background: <?php echo $redux_builder_amp['swift-header-overlay'] ['rgba'] ?>;<?php } ?>}
.tg, .fsc{display: none;}
.fsc{width: 100%;height: -webkit-fill-available;position: absolute;cursor: pointer;top:0;left:0;}
<?php if($redux_builder_amp['header-position-type'] == '1'){?>
.tg:checked + .hamb-mnu > .m-ctr {margin-left: 0;border:none;}
.tg:checked + .hamb-mnu > .m-ctr .c-btn {position: unset;right: 0px;top:0px;}
.m-ctr{margin-left: -100%;float: left;background:#dce0e3;
    width:30%;}
<?php } ?>
<?php if($redux_builder_amp['header-position-type'] == '2'){?>
.tg:checked + .hamb-mnu > .m-ctr {margin-left: calc(100% - <?php echo $redux_builder_amp['header-overlay-width']?>);}
.m-ctr{margin-left: 100%;float: right;}
<?php } ?>
.tg:checked + .hamb-mnu > .fsc{display: block;  background:#dce0e3;
    width:30%;;height:100vh;}
    .fsc {z-index: -1;} 
.t-btn, .c-btn{cursor: pointer;}
.t-btn:after{content: "\e914"!important;
    font-family: 'amp-cantechfont'!important;
    font-size: 3rem;}
.c-btn:after{  content: "\e914";
    font-family: 'amp-cantechfont'; 
    color: #000;
    text-indent: 0;
    font-size: 3rem;
    padding: 2rem 2rem 0.5rem;
    width: 30%;
    text-align: right;
    line-height: 0;display: block;}
.c-btn{float: right;padding: 20px 10px;}
.m-ctr{transition: margin 0.3s ease-in-out;background:#dce0e3;width: 30%;height: auto;position: absolute;z-index:99;padding: 0 0% 100vh 0%;}
.amp-menu .toggle:after {content: "\e911"!important;
		font-family:'amp-cantechfont'!important;
		line-height: 1;
		font-size: 3rem;background-size: 16px;display: inline-block;top: 1px;padding: 5px;
		color:#000;
}
.amp-menu .menu-item .toggle:after{top: 3px;}
.m-menu{display: inline-block;width: 100%;padding: 2px 20px 10px 20px;}
.m-scrl{overflow-y: auto;display: inline-block;width: 100%;overflow: scroll;max-height: 394vh;}
::-webkit-scrollbar { display: none; }
.m-menu ul li.menu-item-has-children:after{}
.m-menu li li.menu-item-has-children:after{right:10px;}
.m-menu li li.menu-item-has-children:hover:after{right:10px;}
.m-menu li.menu-item-has-children:hover:after{transform:rotate(360deg);top:1px;right:0px;}
.m-menu .amp-menu li ul{font-size:14px;}
.m-menu .amp-menu {list-style-type: none;padding: 0;}
.menu-btn{margin-top:30px;text-align:center;}
.menu-btn a{color:#fff;border:2px solid #ccc;padding:15px 30px;display:inline-block;}
.amp-menu li.menu-item-has-children>ul>li {width:100%;}
.m-menu .amp-menu li.menu-item-has-children>ul>li{
	padding-left:0;
	border-bottom: 1px solid <?php if(isset($redux_builder_amp['swift-element-menu-border-color']['rgba'])){echo $redux_builder_amp['swift-element-menu-border-color']['rgba'];}?>;
	margin:0px 10px;
}
.m-menu .amp-menu .sub-menu li:last-child{border:none;}
.m-menu .amp-menu>li a {padding: 12px 7px;}
.amp-menu>li a {color: #000;
    font-size: 17px;
    font-size: 1.7rem;
    font-weight: 600;
    line-height: 1.5;
    padding: 13px 7px;margin-bottom:0;
}
.m-menu > li{font-size:17px;}
<?php } ?>

<?php if($redux_builder_amp['single-design-type'] == '1' || $redux_builder_amp['single-design-type'] == '4'){?>
<?php // Single

if(is_single() ) { ?>
.content-wrapper{
font-family: 'Barlow Semi Condensed', sans-serif;
}
<?php if($redux_builder_amp['single-new-features'] && $redux_builder_amp['ampforwp-underline-content-links']){ ?> 
.artl-cnt a{
	text-decoration: underline;
}
<?php } // Underline CSS Ends?>
.tl-exc{font-size: 16px;color: #765298;margin-top: 10px;line-height:20px;}
.amp-category {margin-bottom:1rem;}
.amp-category span:nth-child(1) {display: none;}
.amp-category span a, .amp-category span{color: #765298;
    text-decoration: none;
    text-transform:uppercase;
    font-weight: 700;
    font-size: 15px;
    font-size: 1.5rem;}
    .amp-category span a:hover {
    color:#000;
}
.amp-category span:after{content:"/";display:inline-block;margin:0px 5px 0px 5px;position:relative;top:1px;color:rgba(0, 0, 0, 0.25);}
.amp-category span:last-child:after{display:none;}
.sp{width:100%;margin-top:20px;display:inline-block;}
.amp-post-title{  font-size:55px;
    font-size:5.5rem;
    font-weight: 600;
	line-height: 1;
	margin: 0 0 16px;	
	color: #000;
	left:-.3rem;
	position:relative;}
.sf-img {width: 100%;display: inline-block;height: auto;margin-top: 33px;}
.sf-img figure{margin:0;}
.sf-img .wp-caption-text{width: 1100px;text-align: left;margin: 0 auto;color: #a1a1a1;font-size: 14px;line-height:20px;font-weight: 500;border-bottom: 1px solid #ccc;padding: 15px 0px;}
.sf-img .wp-caption-text:before{content:"\e412";font-family: 'amp-cantechfont';position: relative;top: 4px;opacity: 0.4;font-size:24pxmargin-right: 5px;}
.sp-cnt{clear: both;width: 100%;display: inline-block;position:relative; }
.sp-rl{display:inline-flex;width:100%;}
.sp-lt{display: flex;flex-direction: column;flex: 1 0 20%;order: 0;max-width:336px;}
.sp-rt{width: 72%;margin-left: 60px;flex-direction: column;justify-content: space-around;order: 1;}
.ss-ic{padding-bottom:20px; border:none;}
.sp-athr, .amp-tags, .post-date {
    margin-top:0;
    background: #dce0e3;
    padding: 20px;
    border:none;
}
.shr-txt {display:none;} 
.athr-tx, .amp-tags > span:nth-child(1), .amp-related-posts-title, .related-title, .r-pf h3{margin: 0 0 16px;}
.athr-tx, .r-pf h3,.amp-related-posts-title, .post-date, .related-title{display: block;}
.athr-tx, .r-pf h3, .amp-related-posts-title, .post-date, .related-title{text-transform: uppercase;font-size: 15px;
    font-size: 1.5rem; #765298;font-weight: 400;}
.amp-tags > span:nth-child(1)  {
font-size: 15px;
    font-size: 1.5rem;
    font-weight: 700;
    color: #765298;
    display: inline;
}
.loop-date, .post-edit-link{display:inline-block;}
div .loop-date {
    font-size:15px;
    font-size:1.5rem;
    text-transform: uppercase;
    color: #765298;
}
div .loop-date:before, .loop-category li a:before  {
    content: "/";
    padding-right: 4px;
}
.post-date .post-edit-link{;float: right;}
.sp-athr, .amp-tags, .post-date{margin-top:20px;}
.sp-athr .author-details a, .sp-athr .author-details, .amp-tags span a, .amp-tag {font-size: 15px;
    font-size: 1.5rem;color: #765298;font-weight: 400;line-height: 1.5;}
    .amp-tags span a {
     text-decoration: none;
    text-transform:uppercase;
    font-weight: 700;
    }
    .author-name {
    color: #ddd;
    font-family: 'Playfair Display',serif;
    font-size: 26px;
    font-size: 2.6rem;
    margin-bottom: 4px;
}
.amp-tags .amp-tag:after{content: "/";display: inline-block;padding: 0px 10px;position: relative;top: -1px;color: #ccc;font-size: 12px;}
.amp-tags .amp-tag:last-child:after{display:none;}
.ss-ic li:before{border-radius: 2px;text-align:center;padding: 4px 6px;}
.sgl table {width: 100%;margin-bottom:25px;}
.sgl td {padding: 0.5em 1em;border: 1px solid #ddd;}
.sgl tr:nth-child(odd) td {background: #f7f7f7;}
.fbp-cnt p, .fsp-cnt p{color: #000;
	font-family: 'Barlow Semi Condensed', sans-serif;
	font-size: 22px;
	font-size: 2.2rem;
	font-weight: 400;
	line-height: 1.5;letter-spacing: 0.10px;word-break: break-word;}

<?php // Social Sharing Conditional CSS
if($redux_builder_amp['swift-social-position'] == 'above-content'){?>
.shr-txt{display:none;}
.sp-athr{margin-top:0;}
.sp-rt .ss-ic{padding-bottom: 10px;margin-bottom: 10px;border-bottom: none;}
<?php } 
if($redux_builder_amp['swift-social-position'] == 'below-content'){?>
.shr-txt{display:none;}
.sp-athr{margin-top:0;}
.sp-rt .ss-ic{padding-bottom: 10px;margin-bottom: 20px;}
<?php } ?>


.cntn-wrp p:first-child:first-of-type {
    font-size: 26px;
    font-size:2.6rem;
    line-height: 1.3;
 }
.sp-rt .cntn-wrp p:first-of-type{
    font-size: 2.6rem;
    line-height:1.3;
}
.sp-rt .cntn-wrp .related_link p:first-of-type, .sp-rt .cntn-wrp .rp4wp-related-post-content p:first-of-type{
    font-size: 2.2rem;
    line-height: 1.5;
    word-break: break-word;
}
.sp-artl h1, h2, h3, h4, h5, h6, .amp-post-title{
font-family:  'Barlow Semi Condensed', sans-serif;
color: #000;
	font-weight: 600;
	line-height: 1;
	margin: 0 0 16px;}
<?php // H1 - H6 Font Sizes 
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h1']){ ?>
		.cntn-wrp h1{font-size:<?php echo $redux_builder_amp['swift_h1_sz']?>;}
	<?php } else { ?>
		h1, .cntn-wrp h1 {	font-size: 36px;
	font-size: 3.6rem;
	font-style: italic;}
	.amp-post-title {
    font-size:55px;
    font-size:5.5rem;
}
	<?php } //H1 ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h2']){ ?>
		.cntn-wrp h2{font-size:<?php echo $redux_builder_amp['swift_h2_sz']?>;}
	<?php } else { ?>
		h2, .cntn-wrp h2 {font-size: 35px;
	font-size: 3.5rem;}
	<?php } // H2 Ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h3']){ ?>
		.cntn-wrp h3{font-size:<?php echo $redux_builder_amp['swift_h3_sz']?>;}
	<?php } else { ?>
		h3, .cntn-wrp h3 {	font-size: 28px;
	font-size: 2.8rem;}
	<?php } // H3 Ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h4']){ ?>	
		.cntn-wrp h4{font-size:<?php echo $redux_builder_amp['swift_h4_sz']?>;}
	<?php } else { ?>
		h4,.cntn-wrp h4 {font-size: 24px;
	font-size: 2.4rem;}
	<?php } // H4 Ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h5']){ ?>
		.cntn-wrp h5{font-size:<?php echo $redux_builder_amp['swift_h5_sz']?>;}
	<?php } else { ?>
		h5,.cntn-wrp h5 {font-size: 20px;
	font-size: 2rem;
	text-decoration:underline;}
	<?php } // H5 Ends
	if($redux_builder_amp['swift_cnt'] && $redux_builder_amp['swift_cnt_h6']){ ?>
		.cntn-wrp h6{font-size:<?php echo $redux_builder_amp['swift_h6_sz']?>;}
	<?php } else { ?>
		h6,.cntn-wrp h6 {font-size: 16px;
	font-size: 1.6rem;}
	<?php } // H6 Ends
 // swift Content Heading Sizes Ends?>
.cntn-wrp p, .cntn-wrp ul, .cntn-wrp ol{font-family:  'Barlow Semi Condensed', sans-serif;
margin:0px 0px 30px 0px;word-break: break-word;}
.sp-rt p strong, .pg p strong{font-weight: 400;}

.related_link{margin-top:10px;}
.related_link a, .rp4wp-related-post-content a{color:#765298;}
.related_link p{word-break: break-all; line-height: 1.2;
    font-size: 2.2rem;
    color:#000;
letter-spacing: 0.10px;margin-top: 5px;font-weight: 400;}
.amp-related-posts ul{list-style-type:none;}
.r-pf{margin-top: 40px;display: inline-block;width: 100%;}
<?php if( 1 == $redux_builder_amp['ampforwp-inline-related-posts'] && is_single() ){ ?>
/** In content releated post desing styles **/
.related_posts .related-title,.rp4wp-related-posts h3,.r-pf h3{
	  color:#000;
     border-bottom: 2px solid #000;
     font-size: 28px;
    font-size: 2.8rem;
    font-weight: 600;
    line-height: 1.2;
    margin: 0 0 16px;
    text-transform:none;
}
.related_posts .related_link a,.related_posts .related-title a, .rp4wp-related-post-content a {
	     color: #765298;
    text-decoration: underline;
    line-height: 1.2;
    font-size: 22px;
    font-size:2.2rem;
	margin: 0px 0px 5px 0px;
    display: inline-block;
}
.related_link a:hover,.rp4wp-related-post-content a:hover,.amp-tags span a:hover {
     color:#000;
 }
 .cntn-wrp .rp4wp-related-posts ul {
    list-style-type:none;
}

.related_posts .related_link {
    padding: 0px;
    margin: 0;
}
.related_posts .has_related_thumbnail{display: inline-flex;width: 30.5%;flex-direction: column;margin:0px 4% 0px 0px;justify-content: space-evenly;padding:0;}
.related_posts .has_related_thumbnail:last-of-type {
margin-right:0;}
.related_link p{word-break: break-word;color: #000;font-size: 2.2rem!important;line-height: 1.2;
letter-spacing: 0.10px;margin-top: 5px;font-weight: 400;}
<?php } ?>
<?php if(is_single() && $redux_builder_amp['enable-single-social-icons'] ){?>
	.body.single-post{
	  padding-bottom:40px;
	}
<?php } ?>
<?php if( 1 == $redux_builder_amp['amp-author-description'] ) {?>
.sp-rt .amp-author {
overflow: hidden;
    padding: 20px;
    background-color: #6a6a6a;
    color: #ddd;
    display: inline-block;width: 100%;}
.sp-rt .amp-author-image{float:left;}
.sp-rt .author-details a{color: #222;font-size: 14px;font-weight: 500;}
.sp-rt .author-details a:hover{color:#000;text-decoration:underline;}
.amp-author-image amp-img{border: 6px solid #ddd;margin: 0px 12px 0px 0px;display: block; width:50px;}
.author-details p{margin: 0;font-size: 2.2rem;
    color:#ddd;
    line-height: 1.3;padding-top: 4px;}
<?php } ?>
<?php //Breadcrumbs
if( 1 == $redux_builder_amp['ampforwp-bread-crumb'] ) {?>
.breadcrumbs{padding-bottom: 8px;margin-bottom: 20px;
<?php if( 1 == $redux_builder_amp['breadcrumb-border'] ) {?>
border-bottom: none;
<?php }?>}
.breadcrumbs, .breadcrumb ul li{ font-size: 14px;
    font-size: 1.4rem;
    margin: 0;
    color:#000;
    text-transform:none;
    display: inline-block;list-style-type: none;}
.breadcrumb ul li a{color: #765298;
    text-decoration: none;
        line-height: 1.5;
        letter-spacing:normal;}
.breadcrumb ul li a:hover{color:#000;}
.breadcrumbs li a:after{content: "/";
    display: inline-block;
    padding: 0 5px;
    font-size: 1.4rem;
    position: relative;
    top: 1px;
    }
.breadcrumbs li:last-child a:after {display: none;}
<?php } //Breadcrumbs Ends?>
#pagination{
 border:none;
    padding:0;
    line-height:1.3;
    font-size:2.2rem;
    margin-top: 3rem;
    }
.next{float: right;width: 45%;text-align:right;position:relative;margin-top:10px;}
.next a, .prev a{ color: #765298;
    line-height: 1.2;
    font-size: 22px;
    font-size: 2.2rem;}
.prev{float: left;width: 45%;position:relative;margin-top:10px;}
.prev span, .next span{
    font-size:26px;
    font-size:2.6rem;
    text-transform:none;
    color: #000;
    border: 3px solid #000;
    padding: 0 2rem 1rem 2rem;
    position: relative;
    top: 4px;
    margin-bottom: 2rem;
  display: block;
}
.prev span:hover, .next span:hover {
     color: #765298;
     border-color:#765298;
}
.prev span:before {
    content:"<";
        font-size: 4rem;
    position: relative;
    top: .25rem;
    margin-right: 1rem;
}
.next span:after {
    content:">";
        font-size: 4rem;
    position: relative;
    top: .25rem;
    margin-left: 1rem;
}
.next:hover a, .prev:hover a{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;}
.prev:after{ border-left:3px solid #000;content: "";height: calc(100% - -10px);right:-11.3%;position: absolute;top: 50%;transform: translate(0px, -50%);width: 2px;}
.ampforwp_post_pagination{width:100%;text-align:center;display:inline-block;}
.ampforwp_post_pagination p{margin: 0;font-size: 18px;color: #444;font-weight: 500;margin-bottom:10px;}
.ampforwp_post_pagination p a{color:#000;padding:0px 10px;}
.cmts{width:100%;display:inline-block;clear:both;margin-top:40px;}
.amp-comment-button{background-color: #000;color:#fff;font-size: 22px;
    font-size: 2.2rem; padding:2rem;float: none;margin: 30px auto 0px auto;text-align: center;width:250px;}
    .amp-comment-button:hover {
    background-color:#765298;
    color:#fff;
}
.form-submit #submit{background-color: #000;font-size: 14px;text-align: center;font-weight: 400;color: #fff;cursor: pointer;margin: 0;border: 0;padding: 11px 21px;}
#respond p {margin: 12px 0;}
.amp-comment-button a{color: #fff;display: block;padding: 7px 0px 8px 0px;}
.amp-comment-button a:hover {
    color:#fff!important;
}
.comment-form-comment #comment {border-color: #ccc;width: 100%;padding: 20px;}
.cmts h3{margin: 0;font-size: 12px;padding-bottom: 6px;border-bottom: 1px solid #eee;font-weight: 400;letter-spacing: 0.5px;text-transform: uppercase;color: #444;}
.cmts h3:after{content: "";display: block;width: 115px;border-bottom: 1px solid #000;position: relative;top: 7px;}
.cmts ul{margin-top:16px;}
.cmts ul li{list-style: none;margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px solid #eee;}
.cmts .amp-comments-wrapper ul .children{margin-left:30px; }
.cmts .comment-author.vcard .says{display:none;}
.cmts .comment-author.vcard .fn{font-size: 12px;font-weight: 500;color: #333;}
.cmts .comment-metadata{font-size: 11px;margin-top: 8px;}
.amp-comments-wrapper ul li:hover .comment-meta .comment-metadata a{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;;}
.cmts .comment-metadata a{color: #999;}
.comment-content{margin-top:6px;width:100%;display:inline-block;}
.comment-content p{font-size: 14px;color: #333;line-height: 22px;font-weight: 400;margin: 0;}
.comment-meta amp-img{float:left;margin-right:10px;border-radius:50%;width:40px;}
.sp-rt .amp-author {margin-top: 5px;}
.cntn-wrp a{color: #765298;text-decoration:underline;}
.cntn-wrp a:hover, .content-wrapper a:hover{color: #000;}
.loop-wrapper{display: flex;flex-wrap: wrap;margin-bottom: 15px;}
.loop-category li{display: inline-block;list-style-type: none;margin-right: 10px;font-size: 10px;font-weight: 600;letter-spacing: 1.5px;}
ul .loop-category, .fsp-cnt .loop-category, .loop-category li a {
    color: #765298;
	font-size: 15px;
	font-size: 1.5rem;
	text-transform: uppercase;
	margin-bottom:0;
    display: block;
	font-weight:600;
    line-height: 1.3;}
.fsp .fsp-cnt {
    padding: 20px 0;
}
.loop-category li:hover a{color:#000;}
.fsp:hover h2 a{color: #000;}
.fsp h2 a{color:#000;}  
.fsp{margin: 15px;flex-basis: calc(33.33% - 30px);}
.fsp-img {margin-bottom:10px;}
h2 .loop-title, .fsp h2{ font-size: 30px;
	font-size: 3rem;
    font-weight: 600;
	line-height: 1.2;
	margin: 0 0 16px;
	font-style:italic;;}
.fsp-cnt .loop-category{margin-bottom:8px;}
.fsp-cnt .loop-category li {font-weight: 500;}
.pt-dt{margin: 8px 0px 0px 0px;display: inline-flex;color:#9a9ea1}
div.loop-date:before{
    content: "/";
padding-right: 4px;
}
blockquote{margin-bottom:20px;}
blockquote p {font-size: 34px; line-height: 1.4; font-weight: 700; position: relative; padding: 30px 0 0 0; }
blockquote p:before {content: "";border-top: 8px solid #000;width: 115px;line-height: 40px;display: inline-block;position: absolute;top: 0;}


@media(max-width:1110px){
    .cntr{width:80%;padding:0px 20px;}
    .sp-rt {margin-left: 30px;}
}
@media(max-width:1110px){
    .tl-exc {font-size: 14px;margin-top: 3px;line-height: 22px;}
    .sp-rl {display: inline-block;width: 100%;}
    
    .sp-lt {width: 100%;margin-top: 20px;max-width:100%;}
    .sp-cnt{margin-top: 15px;}
    .r-pf h3{margin-bottom:0;padding-top:20px;border-top:1px dotted #ccc; }
    .r-pf {margin-top:20px;}
    .cmts{margin:20px 0px 20px 0px;}
    .sp-rt {width: 100%;margin-left: 0;}
    .sp-rt .amp-author {padding: 20px 15px;}
    #pagination {margin: 20px 0px 20px 0px;border-top: none;}
    .amp-post-title{padding-top:10px;font-size:5.5rem;}
    .fsp{flex-basis: calc(100% - 30px);}
    .fsp-img{width:100%;float:left;margin-right:0px;}
    .fsp-cnt{width:100%;float:left;}
   
   
}
@media(max-width:640px){
    .related_posts .has_related_thumbnail {width: 100%;}
    .amp-post-title{font-size:4.5rem;}
 }

@media(max-width:480px){
    .r-pf .cntr{padding:0}
    .cntn-wrp p{line-height:1.5;}
    .related_posts .has_related_thumbnail {width: 100%;}
    .rlp-image {width: 100%;float: none;margin-right: 0px;}
    .rlp-cnt {width: 100%;float: none;}
    .amp-post-title {  font-size:45px;
    font-size:4.5rem;
	line-height: 1.2;
	}
    .sp-artl .fsp { flex-basis: calc(100%);margin: 0;}
    .cntr{width: 100%;}
    .amp-category span a { color: #765298;
    text-decoration: none;
    text-transform:uppercase;
    font-weight: 700;
    font-size: 15px;
    font-size: 1.5rem;}
    .amp-category span a:hover {
    color:#000;
    }
    .sf-img{margin-top:20px;}
    .sp{margin-top: 20px;}
    .menu-btn a{padding:10px 20px;font-size:14px;}
    .next, .prev{float: none;width: 100%;}
    #pagination {padding: 10px 0px 0px;}
    #respond {margin: 0;}
    .next a {margin-bottom: 45px;display:inline-block;}
    .prev:after{display:none;}
    .author-details p {font-size: 22px; font-size: 2.2rem;line-height: 1.3;}
    .sf-img .wp-caption-text{width:100%;padding:10px 15px;}
    .fsp-img{width:100%;float:none;margin-right:0px;}
    .fsp-cnt{width:100%;float:none;}
    .fsp{border:none; padding:0;}
    .fsp-cnt{padding: 0px;}
     blockquote p {font-size:20px;}
     <?php if($redux_builder_amp['rp_design_type'] == '2'){?>
    	.srp li .rlp-image{width:100%;float:none;margin-right:0px;}
    	.srp li .rlp-cnt{width:100%;float:none;}
    <?php } ?>
}
@media(max-width:425px){
    .sp-rt .amp-author {margin-bottom: 10px;}
    #pagination {margin: 20px 0px 10px 0px;}
    h2 .loop-title, .fsp h2 {font-size: 30px;
	font-size: 3rem;
    font-weight: 600;
	line-height: 1.2;
	margin: 0 0 16px;
	font-style:italic;}
    .r-pf h3{padding: 0px;}
}
@media(max-width:300px){
    .amp-comment-button {width: 100%;}
}
<?php } } ?>

.sp-rt{
	margin:0;
	width:100%;
}
.sp-rt .amp-author {
    margin-top: 20px;
}
.sp-artl .srp ul{
    display: flex;
    flex-wrap: wrap;
    margin: -15px;
}
.sp-artl .srp .has_thumbnail{
    margin: 15px;
    flex-basis: calc(33.33% - 30px);
}
.sf-img .wp-caption-text{
	width:100%;
}
@media(max-width:1110px){
.sp-artl .srp .has_thumbnail{
    flex-basis: calc(100% - 30px);
}
}

.amp-wp-content.breadcrumb:before {
    content: 'You are here:';
    font-size: 1.4rem;
}


.sp-artl{
	display:inline-flex;
	width:100%;
}
.sp-left {
    display: flex;
    flex-direction: column;
    width: 70%;
    padding-right: 20px;
}
.sp-artl .srp .has_thumbnail{
    margin: 15px;
	flex-basis: calc(49.33% - 30px);
}
.sp-artl .fsp{
	flex-basis: calc(49.33% - 30px);
}


@media(max-width:1110px){
.sp-artl {
    display: block;
}
.sp-left{
	width:100%;
	padding:0;
}
.sp-artl .srp .has_thumbnail, .sp-artl .fsp {
    flex-basis: calc(100% - 30px);
}
}
@media (max-width: 480px){
.sp-artl .fsp {
    flex-basis: calc(100%);
    margin: 15px 0;
}
}

<?php // Header and Archive Sidebar
if ( ampforwp_get_setting('gbl-sidebar') && ampforwp_get_setting('gnrl-sidebar') ) { ?>
.b-w, .arch-dsgn{
	display: flex;
}
.arch-psts, .b-w .hmp{
	display: flex;
    flex-direction: column;
    width: 70%;
    padding-right: 20px;
}
/*** Home page ***/
.fbp-cnt {
    float: left;
    width: 30%;
    margin-left: 20px;
}
.b-w .fsp, .arch-psts .fsp{
	flex-basis: 100%;
    padding: 20px 20px 20px 20px;
    border: 3px solid #000;
    margin: 10px 0;
}
.b-w .sdbr-right{
	margin-top:30px;
}
/** Custom Frontpage PB CSS **/
.cntr.pgb{
	max-width:1400px;
}
.pgb {
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 300px;
}
.pg-lft{
    display: flex;
    flex-direction: column;
    width: auto;
    padding-right: 30px;
}
.pgb .sdbr-right{
	width:auto;
}
@media(max-width:1110px){
	.fbp-cnt{
		width:100%;
	}
	.pg-lft{
		width:100%;
		padding:0;
	}
	.pgb {
	    display: inline-block;
	}
}
<?php }
if ( (isset($redux_builder_amp['gbl-sidebar']) && $redux_builder_amp['gbl-sidebar'] ) || (isset($redux_builder_amp['swift-sidebar']) && $redux_builder_amp['swift-sidebar'] ) ) { ?>
/*** Sidebar CSS ***/
<?php if ( is_active_sidebar( 'swift-sidebar' ) ) : ?>
.sdbr-right{
	background-color: #dce0e3;
	display:flex;
	flex-direction:column;
	width:33.5%; /*originally 30% */
}
.sdbr-right .entry .amp-wp-enforced-sizes {
    max-width:100px!important;
    height:100px;
    object-fit:cover;
}
.sdbr-right .entry h2 a{
    color: #000;
    font-size: 19px;
    font-size: 1.9rem;
    font-weight: 400;
    text-transform: none;
    font-style: italic;
    text-decoration: none;
    line-height: 1.2;
    margin-bottom: 4px;
    margin-bottom: .4rem;
    padding: 0;
    text-overflow: ellipsis;
    -webkit-line-clamp: 4!important;
    -webkit-box-orient: vertical!important;
    overflow: hidden;
    display: -webkit-box!important;
}

.sdbr-right .entry:after {
clear: both;
    content: " ";
    display: table;
    margin-bottom: 1rem;
}

.amp-sidebar{
	padding:20px;
	font-size: 1.6rem;
}
.amp-sidebar ul li{
	list-style-type: none;
    margin-bottom: 15px;
}
.amp-sidebar h4{
 color: #fff;
    margin-bottom: 0;
    background: #000;
    padding: 1rem;
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    	text-align:center;
    	font-size: 2.4rem;
	text-transform:uppercase;
}
.amp-sidebar h2 {
margin:0;
}
.newswire-widget .amp-sidebar  {}

.newswire-widget .amp-sidebar h4:before {
	 content: "\e910";
	color:#fff;
	margin-right:1rem;
	font-size:2.5rem;
	font-family: 'amp-cantechfont' !important;
	position:relative;
	top: 2px;
	top: .2rem;
}

.amp-sidebar .entry {
background-color: #fff;
    border-bottom: 3px solid #dce0e3;
    padding: 10px 10px 0px 10px;
}

.amp-sidebar time:after {
content: "/";
    padding: 0 2px 0 4px;
}
.amp-sidebar time:before {
content: "/";
    padding-right: 4px;
}
.amp-sidebar .entry-author {
text-transform:uppercase;
text-decoration: underline;
font-size:1.3rem;
color:#765298;
line-height:1.2;
}

.amp-sidebar time {
text-transform:uppercase;
font-size:1.3rem;
color:#9a9ea1;
line-height:1.2;
}
.archive .sdbr-right {margin-top:2rem;}


<?php endif; ?>
@media(max-width:1110px){
.sdbr-right{
	width:100%;
}
.sp-left{
    min-width:100%;
    margin:0 auto;
}
}
@media(max-width:1110px){
.sdbr-right{
	width:80%;
    margin: 0 auto;
}

.single-post .sdbr-right{
	width:100%;
}

.b-w .hmp, .arch-psts{
	width:100%;
	padding:0;
}
.b-w, .arch-dsgn{
	display: block;
}
.b-w .fsp, .arch-psts .fsp{
    margin: 0 auto 10px;
}
}
@media(max-width:480px){
    .sdbr-right {width: 80%;}
}
<?php } //Header and Archive Sidebar CSS Ends ?>
<?php 

//Footer
if ( isset($redux_builder_amp['footer-type']) && '1' == $redux_builder_amp['footer-type'] ) { ?>
.footer{margin-top: 80px;}
<?php if($redux_builder_amp['footer2-position-type'] == '1'){?>
.f-menu ul li .sub-menu{display:none;}
.f-menu ul li{display:inline-block;margin-right:20px;}
.f-menu ul li a {padding:0;color:#7a7a7a;}
.f-menu ul > li:hover a{color: ;}
.f-menu{font-size:22px;
    font-size:2.2rem;line-height:1.4;margin-bottom:30px;}
.rr{   background-color: #6a6a6a;
    color: #fff;
        font-size: 16px;
    font-size: 1.6rem;
    text-align: center;
    padding:20px;
     padding:2rem;
    line-height:1.4;}
.rr span{margin:0 10px 0 0px}
.rr .btt {
   background-color: #ddd;
    font-size: 25px;
    font-size: 2.5rem;
    display: block;
    padding: 2rem;
    border: 2px solid #ddd;
    margin: 2rem auto 0 auto;
    width: 30%;
    color: #000;
    text-decoration:none;
}
.rr .btt a {
}
.rr .btt:hover {
    background-color: #000;
    color:#ddd;
}
.rr a {
color: #fff;
text-decoration:underline;
}
.rr a:hover {
color:#ddd;
}
.f-menu ul li.menu-item-has-children:hover > ul{display:none;}
.f-menu ul li.menu-item-has-children:after{display:none;}
<?php } ?>
<?php if ( is_active_sidebar( 'swift-footer-widget-area'  ) ) : ?>
.f-w-f1{
padding:<?php
if(isset($redux_builder_amp['ftr1-gapping'])){
	echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-top'];
	echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-right'];
	echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-bottom'];
	echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-left'];
}
?>;
width:100%; border-top: 1px solid <?php echo $redux_builder_amp['swift-footer-brdrclr']['rgba']?>;}
<?php endif; ?>
.f-w{display: inline-flex;width: 100%;flex-wrap:wrap;}
.f-w-f2{text-align: center;border-top: 1px solid <?php echo $redux_builder_amp['swift-footer-brdrclr']['rgba']?>;
padding:<?php
if(isset($redux_builder_amp['ftr2-gapping'])){
	echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-top'];
	echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-right'];
	echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-bottom'];
	echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-left'];
}
?>;
}
.w-bl{margin-left: 0;display: flex;flex-direction: column;position: relative;flex: 1 0 22%;margin:0 15px 30px;line-height:1.5;}
.w-bl h4{font-size: <?php echo $redux_builder_amp['swift-head-size'] ?>;font-weight: <?php echo $redux_builder_amp['swift-head-fntwgth'] ?>;margin-bottom: 20px;text-transform: uppercase;letter-spacing: 1px;padding-bottom: 4px;}
.w-bl ul li, .ampforwp_wc_shortcode_title{list-style-type: none;margin-bottom: 15px;}
.w-bl ul li:last-child{margin-bottom:0;}
.w-bl ul li a{text-decoration: none;}
.w-bl .menu li .sub-menu{display:none;}

.ampforwp_wc_shortcode_title{
	margin-top: 12px;
    display: inline-block;
}
.ampforwp_wc_shortcode_excerpt{
	font-size:15px;
	line-height:1.4;
}

@media(max-width:1110px){
    .footer {margin-top: 60px;}
    .w-bl{flex:1 0 22%;}
    .f-menu ul li {margin-bottom:10px;}
    .sp-left {
        margin: 0 auto;
        width: 80%;
    }
    .cntr {
        padding: 0 14px;
    }
    .prev:after {
        right: -12%;
    }
    .r-pf h3 {
        border-top:none;
        margin-bottom: 15px;
    }
    .cntn-wrp ol {
        margin-bottom:0;
    }
    .sp-rt .cntn-wrp .related_link p, .sp-rt .cntn-wrp .rp4wp-related-posts p {
        font-size: 2.2rem;
    }
    .cntn-wrp .rp4wp-related-posts ul {
        list-style-type:none;
    }
}
@media(max-width:480px){
    .footer {margin-top: 50px;}
    <?php if ( is_active_sidebar( 'swift-footer-widget-area'  ) ) : ?>
    .f-w-f1 { padding: 45px 0px 10px 0px;}
    <?php endif; ?>
    .f-w-f2 {padding: 25px 0px;}
    .f-w{display:block;}
    .w-bl{margin-bottom:40px;}
    .w-bl{flex:100%;}
    .w-bl ul li {margin-bottom: 11px;}
    .f-menu ul li {display: inline-block;line-height: 1.8;margin-right: 13px;}
    .f-menu .amp-menu > li a {padding: 0;font-size:22px;
    font-size:2.2rem;color: #765298;}
    .rr {margin-top: 15px;font-size: 11px;
    	<?php if($redux_builder_amp['amp-gdpr-compliance-switch'] == '1'){?>
			line-height:1.8;
		<?php } ?>
	}
}
@media only screen and (max-width: 445px) {
  .rr .btt {
   width:100%;
    }
    .loop-wrapper, .arch-tlt {
        width: 100%;
    }
    .sdbr-right {
        width: 100%;
    }
    .loop-pagination {
        width: 100%;
    }
}
@media(max-width:425px){
    .footer {margin-top: 35px;}
    h1.page-title {font-size: 14vw;}
    <?php if ( is_active_sidebar( 'swift-footer-widget-area'  ) ) : ?>
    .f-w-f1 {padding: 35px 0px 10px 0px;}
    <?php endif; ?>
    .w-bl h4 {margin-bottom: 15px;}
}
@media(max-width:320px){
    .cntn-wrp p {font-size: 22px; font-size: 2.2rem;}  
    .sp-rt .cntn-wrp .related_link p, .sp-rt .cntn-wrp .rp4wp-related-posts p {font-size: 1.6rem;}
}


<?php } ?>
<?php

 //Sticky Social Icons
if(is_single() || is_page() ){ ?>
.ss-ic ul li{font-family: 'amp-cantechfont';list-style-type:none;display:inline-block;height: 50px;height: 5rem;-webkit-font-smoothing: antialiased;}
.ss-ic li a{color: #000;padding: 5px;border: 3px solid #000;margin: 0px 10px 10px 0px;display: table-cell;width: 48px;width: 4.8rem;height: 48px; height: 4.8rem;text-align: center;}
.ss-ic li a:hover {opacity:.4;background-color: #272727;color: #fff;border-color: #272727;}
<?php if($redux_builder_amp['enable-single-facebook-share'] || $redux_builder_amp['enbl-fb'] ){?>
.ss-ic ul li .s_fb{	color:#000;}
.s_fb:after{content: "\f09a";}
<?php } 
if($redux_builder_amp['enable-single-twitter-share'] || $redux_builder_amp['enbl-tw']){?>
.s_tw{color:#000;}
.s_tw:after{content: "\f099";}
<?php } 
if($redux_builder_amp['enable-single-gplus-share'] || $redux_builder_amp['enbl-gol']){?>
.s_gp{color:#000;}
.s_gp:after{content: "\f0d5";}
<?php } 
if($redux_builder_amp['enable-single-linkedin-share'] || $redux_builder_amp['enbl-lk']){?>
.s_lk{color:#000;}
.s_lk:after{content: "\f0e1";}
<?php }
if($redux_builder_amp['enable-single-pinterest-share'] || isset($redux_builder_amp['enbl-pt']) && $redux_builder_amp['enbl-pt']){?>
.s_pt{color:#000;}
.s_pt:after{content:"\f0d2";}
<?php } 
if($redux_builder_amp['enable-single-email-share']){?>
.s_em{color:#000;}
.s_em:after{content: "\f003";}
<?php }
if($redux_builder_amp['enable-single-whatsapp-share']){?>
.s_wp{color:#000;}
.s_wp:after{content: "\f232";}
<?php } 
if($redux_builder_amp['enable-single-odnoklassniki-share']){?>
.s_od{color:#000;}
.s_od:after{content: "\f263";}
<?php } 
if($redux_builder_amp['enable-single-vk-share']){?>
.s_vk{color:#000;}
.s_vk:after{content: "VK";}
<?php } 
if($redux_builder_amp['enable-single-reddit-share']){?>
.s_rd{color:#000;}
.s_rd:after{content: "\f281";}
<?php } 
if($redux_builder_amp['enable-single-tumblr-share']){?>
.s_tb{color:#000;}
.s_tb:after{content: "\f173";}
<?php } 
if($redux_builder_amp['enable-single-telegram-share']){?>
.s_tg{color:#000;}
.s_tg:after{content: "\f2c6";}
<?php } 
if($redux_builder_amp['enable-single-digg-share']){?>
.s_dg{color:#000;}
.s_dg:after{content: "\f1a6";}
<?php }
if($redux_builder_amp['enable-single-stumbleupon-share']){?>
.s_su{color:#000;}
.s_su:after{content: "\f1a4";}
<?php }
if($redux_builder_amp['enable-single-wechat-share']){?>
.s_wc{color:#000;}
.s_wc:after{content: "\f1d7";}
<?php } 
if($redux_builder_amp['enable-single-viber-share']){?>
.s_vb{color:#000;}
.s_vb:after{content: "Viber";}
<?php }
if(isset($redux_builder_amp['enable-single-yummly-share']) && $redux_builder_amp['enable-single-yummly-share']){?>
.s_ym{color:#000;}
.s_ym:after{content: "Yummly";}
<?php }
if(isset($redux_builder_amp['enable-single-hatena-bookmarks']) && $redux_builder_amp['enable-single-hatena-bookmarks']){?>
.s_hb{color:#000;}
.s_hb:after{content: "Hatena";}
<?php }
if(isset($redux_builder_amp['enable-single-pocket-share']) && $redux_builder_amp['enable-single-pocket-share']){?>
.s_pk{color:#000;}
.s_pk:after{content: "\f265";}
<?php } ?>
.s_stk{display:inline-block;padding:1%;position:fixed;bottom: 0;text-align: center;border-top: 3px solid;background:#fff;}
.s_stk ul{width:100%;display:inline-flex;}
.s_stk ul li{flex-direction: column;flex-basis: 0;flex: 1 0 5%;max-width: calc(100% - 10px);display: flex;}
.s_stk li a{margin:0;border-radius: 0;padding:12px 0px;display: block;
    width: 50px;
    background-color: #fff;
    border: 3px solid #000;
    color: #000;}

<?php } ?>

