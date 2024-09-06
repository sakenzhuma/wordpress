<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> x-data="{ menu: false }">
<?php wp_body_open(); ?>
<div class='flex flex-column min-h-100'>
<div class="bb bc ph1">
<div class="container">
   <div class="flex justify-between items-center">
         <div class="flex items-center">
            <div class="pt1">
               <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52"
               viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none"
               stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M20 7.5v9l-4 2.25l-4 2.25l-4 -2.25l-4 -2.25v-9l4 -2.25l4 -2.25l4 2.25z" />
                  <path d="M12 12l4 -2.25l4 -2.25" />
                  <path d="M12 12l0 9" />
                  <path d="M12 12l-4 -2.25l-4 -2.25" />
                  <path d="M20 12l-4 2v4.75" />
                  <path d="M4 12l4 2l0 4.75" />
                  <path d="M8 5.25l4 2.25l4 -2.25" />
               </svg></a>
            </div>
            <div class="flex flex-column pl1 justify-center">
               <span><a class="f4 fw7 iblack lh-solid dib mb0" href="/">MyHub</a></span>
				   <span class="f6 lh-solid mb0">Internet Business Solutions</span>
            </div>
         </div>
         <div class="dn flex-ns flex-auto justify-end pr4">
            <ul class="flex justify-end">
               <li class="ph3 dn-m"><a href="/">Home</a></li>
               <li class="ph3"><a href="/category/services">Services</a></li>
               <li class="ph3"><a href="/category/services">Works</a></li>
               <li class="ph3 dn-m"><a href="/category/blog">Blog</a></li>
               <li class="ph3 dn-m"><a href="/about">About</a></li>
            </ul>
         </div>
         <div class="flex dn-ns flex-auto justify-end items-center pr2">
            <span x-on:click="menu = !menu" class='pointer pt2'><svg xmlns="http://www.w3.org/2000/svg"
               width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5"
               stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" />
            </svg></span>
         </div>
   </div>
</div>
</div>
<main>
<div>
   <div class='container relative'>
      <div x-show="menu" x-on:mouseleave="menu=false"
         class='db dn-ns pa3 bg-white bl bb bc mw5 absolute right-0'>
         <ul class="db justify-end pr4">
            <li class="ph2 mb2"><a href="/">Home</a></li>
            <li class="ph2 mb2"><a href="/category/services">Services</a></li>
            <li class="ph2 mb2"><a href="/category/services">Works</a></li>
            <li class="ph2 mb2"><a href="/category/blog">Blog</a></li>
            <li class="ph2 mb2"><a href="/about">About</a></li>
         </ul>
      </div>
   </div>
</div>


