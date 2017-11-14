<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="devWrapper">
    <a href="tel:18005001713">1.800.500.1713</a>
    <p>Toronto Offices</p>
    <div>
      <button class="hamburger" title="Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    <nav>
      <span>Menu</span>
      <ul>
        <li><a href="http://offices.rentofficespacetoronto.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=input&displayNavigationBanner=no&displaySortBy=no&displayDisclaimer=no">Search Spaces</a></li>
        <li class="itemHasChildren">
          <a href="#">Toronto Neighbourhoods <i class="fa fa-angle-right"></i></a>
          <ul class="subMenu">
            <li class="backSubMenu"><a href="#"><i class="fa fa-angle-left"></i> Back</a></li>
            <li><a href="http://offices.rentofficespacetoronto.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no">All of Toronto</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Downtown">Downtown Core</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=East_York">East York</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Etobicoke">Etobicoke</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Junction">The Junction</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=King_East">King East</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=King_West">King West</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Leslieville">Leslieville</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Liberty_Village">Liberty Village</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Midtown">Midtown</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Toronto_North">Toronto North</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Parkdale">Parkdale</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Queen_West">Queen West</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Yonge_and_Dundas">Yonge and Dundas</a></li>
            <li><a href="http://tormls.idxblue.com/index.php?query_id=sixspace&unique_frame_link=sixspace&action=select&displayNavigationBanner=no&displaySortBy=no&area=Yorkville">Yorkville</a></li>
          </ul>
        </li>
        <li><a href="#">Blog</a></li>
        <li><a href="http://rentofficespacetoronto.com/contact-us/">Contact</a></li>
      </ul>
      <span class="menuSocial">
        <p>Follow Us</p>
        <a href="https://facebook.com/RentSpaceToronto" target="_blank"><i class="fa fa-facebook-official"></i></a>
        <a href="https://www.instagram.com/rentofficetoronto/" target="_blank"><i class="fa fa-instagram"></i></a>
      </span>
    </nav>
  </div>
</header>

