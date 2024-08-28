// Gallery - add data attr
$("#gallery").unitegallery({
    gallery_theme: "tilesgrid",
    theme_navigation_type: "bullets",
    theme_bullets_margin_top: 20,
    tile_width: 230,					//tile width
    tile_height: 230,					//tile height
    tile_enable_shadow: false,			//enable shadow of the tile
    tile_border_color: "#F0EAD6",		//tile outline color
    tile_background_color: "#F0EAD6",		//tile outline color
    lightbox_type: "compact",	
    lightbox_slider_image_border: false,		
    lightbox_overlay_color: "#000",		//the color of the overlay. if null - will take from css
    lightbox_overlay_opacity:0.8,			//the opacity of the overlay. for compact type - 0.6
    lightbox_textpanel_title_text_align: "center",	
    lightbox_textpanel_title_font_family: 'Merriweather',
    lightbox_textpanel_title_font_size: 18,
});