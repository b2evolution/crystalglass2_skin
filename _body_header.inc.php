<?php
/******************************************************
** Title........: Crystal Glass II Header
** Filename.....: /skins/crystalglass2/style.css
** Author.......: DiasWebWorks
** Website......: www.LorenDias.com
**
** Version......: 2008.09.15 23:51
** Editor.......: Loren
*******************************************************/
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

// ---------------------------- SITE HEADER INCLUDED HERE ----------------------------
// If site headers are enabled, they will be included here:
siteskin_include( '_site_body_header.inc.php' );
// ------------------------------- END OF SITE HEADER --------------------------------
?>
<!--%%%%%%%%%%-->
<!--%%%%%%%%%%-->
<div id="universe">
	<div id="sector">
		<div id="world">
			<div id="worldHeader">
				<?php
				// ------------------------- "Header" CONTAINER EMBEDDED HERE --------------------------
				// Display container and contents:
				skin_container( NT_('Header'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start' => '<div class="$wi_class$">',
					'block_end' => '</div>',
					'block_title_start' => '',
					'block_title_end' => '',
				) );
				// ----------------------------- END OF "Header" CONTAINER -----------------------------
				?>
			</div>
			<!--END #worldHeader-->
		    <div id="worldBody">
		        <!--+++++-->
				
				<?php
				// Display container and contents:
				skin_container( NT_('Page '), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start' => '<div class="$wi_class$">',
					'block_end' => '</div>',
					'list_start' => '<ul>',
					'list_end' => '</ul>',
					'item_start' => '<li>',
					'item_end' => '</li>',
				) );
				?>

				<?php link_pages() ?>


				<?php
				// Display container and contents:
				skin_container( NT_('Top'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start' => '<div class="$wi_class$">',
					'block_end' => '</div>',
					'block_display_title' => false,
					'list_start' => '<ul>',
					'list_end' => '</ul>',
					'item_start' => '<li>',
					'item_end' => '</li>',
				) );
				?>