# pxltheme
MP Theme is a simple starter theme for WordPress development. It takes care of some of the things you end up doing on each developments of a theme, thus saving a little time here and there.

Below is some basic information about the theme.

## Template Files

The template files in the theme are only starting points and contain little if no markup.

## Structure

The theme has the following folder structure:

* Assets - this contains all the theme assets including images, CSS, SASS files and javascript files
* Page templates - any page templates created should be placed in here to keep things nice and organised
* Parts - this folder is for placing calls to `get_template_part` files. It contains a loops folder for `content-{loop}.php` files
* Inc - this is an includes file for some other functions

## Scripts & Styles

The theme has a file named main.js in the `assets/js/` folder which is were all the theme javascript functionality should be added. This is minified and compressed into the `main-min.js` file in the same folder. It is this file that is enqueued in the footer of the site. The theme also includes the `fitvids` library for responsive video which is added to the main.js file when compiled.

The styles are handled with SASS in the `assets/scss/` folder. The underscore files breakdown the SASS into easily manageable chunks and they are all included in the main `style.scss` file. This is compiled to `assets/css/style.css` which is the stylesheet which is enqueued on the front end.

## Codekit

The theme contains a `config.codekit` file which means codekit users need not worry about compiling things in the correct place as long as the theme folder itself is added to Codekit on development.
