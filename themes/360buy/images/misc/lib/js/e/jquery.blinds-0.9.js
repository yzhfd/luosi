/*!
 * jQuery Blinds
 * http://www.littlewebthings.com/projects/blinds
 *
 * Copyright 2010, Vassilis Dourdounis
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
(function($){

	$.fn.blinds = function (options) {

		$(this).find('li').hide();
		$(this).addClass('blinds_slideshow');

		settings = {};
		settings.tile_orchestration = this.tile_orchestration;

		settings.h_res = 12;
		settings.v_res = 1;

		settings.width = $(this).find('li:first').width();
		settings.height = $(this).find('li:first').height();

		jQuery.extend(settings, options);

		tiles_width = settings.width / settings.h_res;
		tiles_height = settings.height / settings.v_res;

		// Get image list
		blinds_images = [];
		$(this).find('li').each(function (i, e) {
			blinds_images[blinds_images.length] = {'title': e.alt, 'html': $(e).html()};
			
		});

		// Create blinds_container
		$(this).append('<div class="blinds_container"></div>');
        
		blinds_container = $(this).find('.blinds_container');
		blinds_container.html(blinds_images[1]['html']);
		blinds_container.css({
			'position'	: 'relative', 
			'display'	: 'block', 
			'width'		: settings.width, 
			'height'	: settings.height
		} );
		// Setup tiles
		

		jQuery.data(this[0], 'blinds_config', {
			'h_res': settings.h_res,
			'v_res': settings.v_res,
			'tiles_width': tiles_width,
			'tiles_height': tiles_height,
			'images': blinds_images,
			'img_index': 0,
			'change_buffer': 0,
			'tile_orchestration': settings.tile_orchestration
		});
	}
	
	$.fn.blinds_change = function (img_index) {

		// reset all sprites
		config = jQuery.data($(this)[0], 'blinds_config');


        $(this).children('.blinds_container').html(config.images[config.img_index]['html']);


		config.img_index = img_index;
		jQuery.data($(this)[0], 'blinds_config', config);

		
		
		
	}

	$.fn.tile_orchestration = function (i, j, total_x, total_y) {
		return (Math.abs(i-total_x/2)+Math.abs(j-total_y/2))*100;
	}

})(jQuery);


