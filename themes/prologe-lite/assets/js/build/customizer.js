/**
 * Customizer Live Preview
 * Reloads changes on Theme Customizer Preview asynchronously for better usability
 * @package Prologe
 */

(function ($) {

    $head = $('head');


	// functions for our customer show or hide settings
	function hideElement( element ) {
		$( element ).css({
			clip: 'rect(1px, 1px, 1px, 1px)',
			position: 'absolute',
			width: '1px',
			height: '1px',
			overflow: 'hidden'
		});
	}

	function showElement( element ) {
		$( element ).css({
			clip: 'auto',
			position: 'relative',
			width: 'auto',
			height: 'auto',
			overflow: 'visible'
		});
	}

	// Show when you need an absolute position
	function showElementabs( element ) {
		$( element ).css({
			clip: 'auto',
			position: 'absolute',
			width: 'auto',
			height: 'auto',
			overflow: 'visible'
		});
	}
	

	// Site title.	
	wp.customize( 'blogname', function( value ) {
	  value.bind( function( newval ) {
		$( '.site-title a' ).html( newval );
	  } );
	} );
	
	// Site description.	
	wp.customize( 'blogdescription', function( value ) {
	  value.bind( function( newval ) {
		$( '.site-description' ).html( newval );
	  } );
	} );

	// Opacity Levels
	wp.customize( 'prologe_lite_cover_overlay_opacity', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-overlay-opacity-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-overlay-opacity-css"> .cover-color-overlay  { opacity:' + to + ' ; } </style>' ).appendTo( $head );
		} );
	} );

	// Cover background attachment
	wp.customize( 'prologe_lite_cover_fixed_background', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cover-bg-attachment-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cover-bg-attachment-css"> .cover-header.bg-image { background-attachment:' + to + ' ; } </style>' ).appendTo( $head );
		} );
	} );

	// Cover mobile background position
	wp.customize( 'prologe_lite_cover_fixed_background', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cover-mobile-bg-position-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cover-mobile-bg-position-css"> .bg-image { background-position:' + to + ' ; } </style>' ).appendTo( $head );
		} );
	} );
	
/* =======================
 Show or hide previews
======================= */

    // Show site title
    wp.customize('prologe_lite_show_site_title', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.site-title');
            } else {
                hideElement('.site-title');
            }
        });
    });

    // Show tagline
    wp.customize('prologe_lite_show_site_desc', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.site-description');
            } else {
                hideElement('.site-description');
            }
        });
    });


    // Show front page template title.
    wp.customize('prologe_lite_show_fp_title', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                 showElement('.template-frontpage .entry-title');
            } else {
               hideElement('.template-frontpage .entry-title');
            }
        });
    });
	
    // Show post meta info
    wp.customize('prologe_lite_single_meta_info', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.single .post-details');
            } else {
                hideElement('.single .post-details');
            }
			});
    });

    // Show summary meta
    wp.customize('prologe_lite_show_summary_meta', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.post-meta-wrapper');
            } else {
                hideElement('.post-meta-wrapper');
            }
        });
    });

    // Show summary category
    wp.customize('prologe_lite_show_summary_comments', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.post-comment-link');
            } else {
                hideElement('.post-comment-link');
            }
        });
    });

    // Show full post categories
    wp.customize('prologe_lite_show_post_categories', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.entry-categories');
            } else {
                hideElement('.entry-categories');
            }
        });
    });

    // Show edit links
    wp.customize('prologe_lite_show_edit', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.edit-post-wrapper');
            } else {
                hideElement('.edit-post-wrapper');
            }
        });
    });

    // Show featured label
    wp.customize('prologe_lite_show_featured_label', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.featured-label');
            } else {
                hideElement('.featured-label');
            }
        });
    });

    // Show author bio
    wp.customize('prologe_lite_show_author_bio', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.single .entry-footer');
            } else {
                hideElement('.single .entry-footer');
            }
        });
    });


    // Show footer tag list
    wp.customize('prologe_lite_show_post_tags', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.post-meta-single-bottom');
            } else {
                hideElement('.post-meta-single-bottom');
            }
        });
    });

    // Show post next prev
    wp.customize('prologe_lite_post_navigation', function (value) {
        value.bind(function (newval) {
            if (false === newval) {
                showElement('.pagination-single ');
            } else {
                hideElement('.pagination-single ');
            }
        });
    });
	
/* =======================
 Text based previews
======================= */

    // Blog Title textfield.
    wp.customize('prologe_lite_blog_title', function (value) {
        value.bind(function (to) {
            $('#blog-title').text(to);
        });
    });

    // Blog Description textfield.
    wp.customize('prologe_lite_blog_description', function (value) {
        value.bind(function (to) {
            $('#blog-description').text(to);
        });
    });

    // Copyright
    wp.customize('prologe_lite_copyright', function (value) {
        value.bind(function (to) {
            $('#copyright-name').text(to);
        });
    });

    // Read More textfield.
    wp.customize('prologe_lite_read_more_text', function (value) {
        value.bind(function (to) {
            $('a.more-link .faux-button').text(to);
        });
    });
	
    // CTA Heading textfield.
    wp.customize('prologe_lite_cta_heading', function (value) {
        value.bind(function (to) {
            $('#frontpage-cta-heading').text(to);
        });
    });

   // CTA Intro textfield.
    wp.customize('prologe_lite_cta_intro', function (value) {
        value.bind(function (to) {
            $('#frontpage-cta-intro').text(to);
        });
    });
	
   // CTA Button 1 textfield.
    wp.customize('prologe_lite_cta_button_text1', function (value) {
        value.bind(function (to) {
            $('#cta-button1-text').text(to);
        });
    });	
	
   // CTA Button 2 textfield.
    wp.customize('prologe_lite_cta_button_text2', function (value) {
        value.bind(function (to) {
            $('#cta-button2-text').text(to);
        });
    });	
	

/* =======================
 Colours
======================= */
    // Body Background
    wp.customize('prologe_lite_body_bg', function (value) {
        value.bind(function (to) {
            $('body').css('background', to);
        });
    });

    // Site header  Background
    wp.customize('prologe_lite_header_bg', function (value) {
        value.bind(function (to) {
            $('#site-header:not(.overlay-header #site-header)').css('background', to);
			});
    });

    // Site Title Colour
    wp.customize('prologe_lite_sitetitle_colour', function (value) {
        value.bind(function (to) {
            $('.site-title a').css('color', to);
        });
    });

    // Site Tagline Colour
    wp.customize('prologe_lite_tagline_colour', function (value) {
        value.bind(function (to) {
            $('.site-description').css('color', to);
        });
    });

    // Cover Overlay 
    wp.customize('prologe_lite_cover_overlay_bg_color', function (value) {
        value.bind(function (to) {
            $('.cover-color-overlay').css('color', to);
        });
    });

    // CTA Heading Colour
	wp.customize( 'prologe_lite_cover_cta_heading_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-overlay-heading-colour-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-overlay-heading-colour-css"> #frontpage-cta-heading { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

   // CTA Intro Colour
	wp.customize( 'prologe_lite_cover_cta_intro_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-overlay-intro-colour-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-overlay-intro-colour-css"> #frontpage-cta-intro { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

   // CTA Button Text Colour
	wp.customize( 'prologe_lite_cover_cta_button_text_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cta-button-text-colour-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cta-button-text-colour-css"> #frontpage-cta-buttons a, #frontpage-cta-buttons a:visited{ color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

   // CTA Button Text Hover Colour
	wp.customize( 'prologe_lite_cover_cta_button_text_hover_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cta-button-text-hover-colour-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cta-button-text-hover-colour-css"> #frontpage-cta-buttons a:focus, #frontpage-cta-buttons a:hover{ color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

   // CTA Button bg Colour
	wp.customize( 'prologe_lite_cover_cta_button_bg_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cta-button-bg-colour-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cta-button-bg-colour-css"> #frontpage-cta-buttons a, #frontpage-cta-buttons a:visited{ background:' + to + ';  } #frontpage-cta-buttons a.button-outline,  #frontpage-cta-buttons a.button-outline:visited {background: transparent; border-color:' + to + ';}</style>' ).appendTo( $head );
			
		} );
	} );
	
   // CTA Button bg Hover Colour
	wp.customize( 'prologe_lite_cover_cta_button_bg_hover_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cta-button-bg-hover-colour-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cta-button-bg-hover-colour-css"> #frontpage-cta-buttons a:focus, #frontpage-cta-buttons a:hover{ background:' + to + ';  } #frontpage-cta-buttons a.button-outline:focus, #frontpage-cta-buttons a.button-outline:hover { background: transparent; border-color:' + to + '; }</style>' ).appendTo( $head );
			
		} );
	} );


	/* page content bg */
	wp.customize( 'prologe_lite_content_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-content-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-content-bg-css"> #site-content  { background:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* borders and lines */
	wp.customize( 'prologe_lite_line_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-borders-lines-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-borders-lines-css"> #bottom-wrapper, #site-footer, .widget:not(:last-child), .widget_archive li:not(:last-child), .widget_pages li:not(:last-child), .widget_nav_menu li:not(:last-child), .widget_categories li:not(:last-child), .widget_recent_comments li:not(:last-child), .widget_recent_entries li:not(:last-child), .widget_nav_menu ul ul, .widget_pages ul ul, .single .entry-footer, .comments-wrapper, :not(pre) > * > code, :not(pre) > code, pre { border-color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* borders and lines */
	wp.customize( 'prologe_lite_line_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-borders-lines2-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-borders-lines2-css"> .widget_pages li:after, .widget_meta li:after, .widget_archive li:after, .widget_categories li:after, .widget_recent_comments li:after, .widget_recent_entries li:after { background:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* body text */
	wp.customize( 'prologe_lite_body_text_color', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-body-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-body-text-css"> body { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* headings and titles*/
	wp.customize( 'prologe_lite_headings', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-titles-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-titles-css"> h1, h2, h3, h4, h5, h6, .entry-title a, .entry-title a:visited, .widget-title, .template-frontpage .entry-title, ..template-frontpage .entry-title:visited { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* hover headings and titles*/
	wp.customize( 'prologe_lite_hover_headings', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-hover-titles-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-hover-titles-css"> .entry-title a:focus, .entry-title a:hover { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* cover photo text */
	wp.customize( 'prologe_lite_cover_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cover-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cover-text-css"> .cover-header .entry-header *, .page .cover-header .intro-text p { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* cover photo category text */
	wp.customize( 'prologe_lite_cover_category_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cover-category-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cover-category-text-css"> .entry-categories-inner > a { color:' + to + ' !important} </style>' ).appendTo( $head );
		} );
	} );
	
	/* cover photo category bg */
	wp.customize( 'prologe_lite_cover_category_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cover-category-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cover-category-bg-css"> .entry-categories-inner > a { background:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );	
	
	/* cover photo category hover bg */
	wp.customize( 'prologe_lite_cover_category_hover_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-cover-category-hover-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-cover-category-hover-bg-css"> .entry-categories-inner > a:hover { background:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );	

	/* archive header background*/
	wp.customize( 'prologe_lite_archive_header_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-category-header-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-category-header-bg-css"> .archive-header { background:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* archive prefix colour */
	wp.customize( 'prologe_lite_archive_prefix_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-archive-prefix-colour-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-archive-prefix-colour-css"> .archive-prefix.color-accent { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );
	/* archive header text */
	wp.customize( 'prologe_lite_archive_header_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-archive-header-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-archive-header-text-css"> .archive-header { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* footer bottom background*/
	wp.customize( 'prologe_lite_footer_bottom_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-footer-bottom-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-footer-bottom-bg-css"> #bottom-wrapper, #site-footer { background:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );
	
	/* page title background*/
	wp.customize( 'prologe_lite_page_header_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-page-header-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-page-header-bg-css"> .singular .entry-header, .singular .featured-media::before { background:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );
	
	/* page titles*/
	wp.customize( 'prologe_lite_page_titles', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-page-titles-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-page-titles-css"> .page .entry-title, #archive-title { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );
	
	/* page intro*/
	wp.customize( 'prologe_lite_page_intro', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-page-intro-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-page-intro-css"> .singular .intro-text p  { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );	
	
	/* widget titles*/
	wp.customize( 'prologe_lite_widget_titles', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-widget-titles-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-widget-titles-css"> .widget-title { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* bottom area text */
	wp.customize( 'prologe_lite_bottom_widget_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-bottom-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-bottom-text-css"> #bottom-sidebars, #bottom-sidebars .widget-title { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* bottom widget li links */
	wp.customize( 'prologe_lite_bottom_widget_li_link', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-bottom-li-links-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-bottom-li-links-css"> #bottom-sidebars .widget li a, #bottom-sidebars .widget li a:visited { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );
	
	/* bottom area borders lines */
	wp.customize( 'prologe_lite_bottom_widget_line_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-bottom-lines-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-bottom-lines-css"> #bottom-wrapper, #bottom-sidebars .widget, #bottom-sidebars .widget li { border-color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );
	
	/* dropcap */
	wp.customize( 'prologe_lite_dropcap', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-dropcap-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-dropcap-css"> .has-drop-cap:not(:focus)::first-letter { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* quote elements */
	wp.customize( 'prologe_lite_quotes', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-quotes-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-quotes-css"> blockquote { border-color:' + to + ' } .wp-block-pullquote::before { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* links */
	wp.customize( 'prologe_lite_links', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-links-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-links-css"> a, a:visited { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* content links */
	wp.customize( 'prologe_lite_content_links', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-content-links-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-content-links-css"> .entry-content p a:not(.button):not(.post-edit-link):not(.single .post-meta a) { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* mobile toggles */
	wp.customize( 'prologe_lite_toggles', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-toggles-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-toggles-css"> .header-inner .toggle path { fill:' + to + ' } .overlay-header .toggle-text { color:' + to + ' }</style>' ).appendTo( $head );
		} );
	} );

	/* mobile menu links */
	wp.customize( 'prologe_lite_mobile_menu_links', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-mobile-menu-links-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-mobile-menu-links-css"> .modal-menu a, .modal-menu ul li a { color:' + to + ' }</style>' ).appendTo( $head );
		} );
	} );

	/* main menu links */
	wp.customize( 'prologe_lite_main_menu_links', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-main-menu-links-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-main-menu-links-css"> .primary-menu a, .primary-menu ul a,  .primary-menu a:visited, .primary-menu ul a:visited,.primary-menu .icon::before, .primary-menu .icon::after { color:' + to + ' }</style>' ).appendTo( $head );
		} );
	} );

	/* main submenu bg */
	wp.customize( 'prologe_lite_main_submenu_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-main-submenu-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-main-submenu-bg-css"> .primary-menu ul::after { border-bottom-color:' + to + ' } .primary-menu ul { background:' + to + ' } .primary-menu ul ul::after { border-left-color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* social menu icon bg */
	wp.customize( 'prologe_lite_social_icon_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-social-menu-icon-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-social-menu-icon-bg-css"> .social-icons a { background:' + to + ' }</style>' ).appendTo( $head );
		} );
	} );

	/* social menu icon */
	wp.customize( 'prologe_lite_social_icon', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-social-menu-icon-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-social-menu-icon-css"> .social-icons a { color:' + to + ' } .social-icons .svg-icon {fill:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* button background */
	wp.customize( 'prologe_lite_button_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-button-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-button-bg-css"> button, .button, .faux-button, .post-edit-link, .comment-reply-link, .entry-content p a.post-edit-link, .wp-block-button__link, .wp-block-file .wp-block-file__button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"] {background:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* button text */
	wp.customize( 'prologe_lite_button_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-button-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-button-text-css"> button, .button, .faux-button, .post-edit-link, .comment-reply-link, .entry-content p a.post-edit-link, .wp-block-button__link, .wp-block-file .wp-block-file__button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"] {color:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* button hover background */
	wp.customize( 'prologe_lite_button_hover_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-button-hover-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-button-hover-bg-css"> button:hover, .button:hover,  .faux-button:hover, .post-edit-link:hover, .comment-reply-link:hover, .entry-content p a.post-edit-link:hover, .wp-block-button__link:hover, .wp-block-file .wp-block-file__button, input[type=\"button\"]:hover, input[type=\"reset\"], input[type=\"submit\"]:hover {background:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* button hover text */
	wp.customize( 'prologe_lite_button_hover_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-button-hover-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-button-hover-text-css"> button:hover, .button:hover,  .faux-button:hover, .post-edit-link:hover, .comment-reply-link:hover, .entry-content p a.post-edit-link:hover, .wp-block-button__link:hover, .wp-block-file .wp-block-file__button, input[type=\"button\"]:hover, input[type=\"reset\"], input[type=\"submit\"]:hover {color:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* input border */
	wp.customize( 'prologe_lite_input_border', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-input-border-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-input-border-css"> input, textarea {border-color:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* input bg */
	wp.customize( 'prologe_lite_input_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-input-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-input-bg-css"> input[type=\"text\"], input[type=\"password\"], input[type=\"email\"], input[type=\"url\"], input[type=\"date\"], input[type=\"month\"], input[type=\"time\"], input[type=\"datetime\"], input[type=\"datetime-local\"], input[type=\"week\"], input[type=\"number\"], input[type=\"search\"], input[type=\"tel\"], input[type=\"color\"], textarea {background:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* input border */
	wp.customize( 'prologe_lite_input_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-input-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-input-text-css"> input, textarea,select {color:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* tag cloud background */
	wp.customize( 'prologe_lite_tagcloud_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-tagcloud-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-tagcloud-bg-css"> .widget_tag_cloud a, .widget_tag_cloud a:visited {background:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* tag cloud text */
	wp.customize( 'prologe_lite_tagcloud_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-tagcloud-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-tagcloud-text-css"> .widget_tag_cloud a, .widget_tag_cloud a:visited {color:' + to + ' !important;}</style>' ).appendTo( $head );
		} );
	} );

	/* tag cloud hover background */
	wp.customize( 'prologe_lite_tagcloud_hover_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-tagcloud-hover-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-tagcloud-hover-bg-css"> .widget_tag_cloud a:hover {background:' + to + '}</style>' ).appendTo( $head );
		} );
	} );

	/* tag cloud hover text */
	wp.customize( 'prologe_lite_tagcloud_hover_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-tagcloud-hover-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-tagcloud-hover-text-css"> .widget_tag_cloud a:hover {color:' + to + ' !important}</style>' ).appendTo( $head );
		} );
	} );
	
	/* text bg selection */
	wp.customize( 'prologe_lite_select_text_bg', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-text-bg-selection-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-text-bg-selection-css"> ::selection { background:' + to + ' } ::-moz-selection { background:' + to + ' }</style>' ).appendTo( $head );
		} );
	} );

	/* text selection */
	wp.customize( 'prologe_lite_select_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-text-selection-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-text-selection-css"> ::selection { color:' + to + ' } ::-moz-selection { color:' + to + ' }</style>' ).appendTo( $head );
		} );
	} );
	
	/* table header background */
	wp.customize( 'prologe_lite_table_header', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-table-header-bg-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-table-header-bg-css"> thead th { background:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* table header background */
	wp.customize( 'prologe_lite_table_header_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-table-header-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-table-header-text-css"> thead th { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* footer text */
	wp.customize( 'prologe_lite_footer_text', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-footer-text-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-footer-text-css"> #site-footer { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* footer menu links */
	wp.customize( 'prologe_lite_footer_menu_links', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-footer-menu-links-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-footer-menu-links-css"> .footer-menu a, .footer-menu a:visited { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );
	
	/* footer menu hover links */
	wp.customize( 'prologe_lite_footer_menu_hover_links', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-footer-menu-hover-links-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-footer-menu-hover-links-css"> .footer-menu a:focus, .footer-menu a:hover { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );
	
	/* to the top */
	wp.customize( 'prologe_lite_to_top', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-to-top-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-to-top-css"> .to-the-top { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );

	/* image captions */
	wp.customize( 'prologe_lite_image_captions', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-captions-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-captions-css"> figcaption, .wp-caption-text { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );
	
	/* block gallery overlay */
	wp.customize( 'prologe_lite_gallery_overlay_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-block-gallery-overlay-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-block-gallery-overlay-css"> .blocks-gallery-item:before { background:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );	

	/* block gallery caption */
	wp.customize( 'prologe_lite_gallery_caption_colour', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-block-gallery-caption-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-block-gallery-caption-css"> .blocks-gallery-grid .blocks-gallery-image figcaption, .blocks-gallery-grid .blocks-gallery-item figcaption, .wp-block-gallery .blocks-gallery-image figcaption, .wp-block-gallery .blocks-gallery-item figcaption { color:' + to + ' } </style>' ).appendTo( $head );
		} );
	} );	

	// Block gallery Opacity Levels
	wp.customize( 'prologe_lite_block_gallery_overlay_opacity', function( value ) {
		value.bind( function( to ) {
			var style = $('#custom-block-gallery-overlay-opacity-css');

			style.remove();
			style = $( '<style type="text/css" id="custom-block-gallery-overlay-opacity-css"> .blocks-gallery-item:hover:before  { opacity:' + to + ' ; } </style>' ).appendTo( $head );
		} );
	} );
	
})(jQuery);