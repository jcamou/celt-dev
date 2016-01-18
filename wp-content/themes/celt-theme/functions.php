<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */



/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add desktop menu walker */
require_once( 'library/menu-walker.php' );

/** Add off-canvas menu walker */
require_once( 'library/offcanvas-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Header image */
require_once( 'library/custom-header.php' );

/** Removes current page from breadcrumbs */
require_once( 'library/main-section_list-of-subpages.php' );

/** Get children for subsection pages */
require_once( 'library/list-of-children.php' );

/** Adds excerpt to pages */
require_once( 'library/add-excerpt-to-pages.php' );

/** Removes current page from breadcrumbs */
require_once( 'library/breadcrumb_navxt_remove_curitm.php' );

/** Grabs all directory profiles and displays them */
require_once( 'library/directory_functions/directory_get-profiles.php' );

/** Grabs recent posts of type passed in by user */
require_once( 'library/front-page_functions/front-page_get-recent-posts.php' );


/** Grabs a list of grad students if there are any and displays it in directory */
require_once( 'library/directory_functions/directory_get-graduate-students.php' );

/** Adds support for the custom post type - directory profiles */
//require_once( 'library/add-post-type_directory-profile.php' );

/** Adds support for the custom post type - directory profiles */
//require_once( 'library/directory-profile_functions/directory-profile_add-parent-support.php' );



?>