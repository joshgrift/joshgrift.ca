# joshgrift.ca Source

The project is split into a few sections. `template` is the codebase/template for each site. Both `joshgrift.ca` and `labs.joshgrift.ca` pull from this folder. Each site using the template/codebase must include a `config.php` file. The site is currently set up as follows:

- joshgrift.ca ($url)
  - index.php
  - config.php
- static.joshgrift.ca ($static_url)
  - fonts (fonts)
    - [font].css
  - brand (logos)
    - icon-[theme].svg
    - logo-[theme].svg
  - lib
    - jquery.js
    - fontawesome.css
  - template
    - style.css
    - head.php
    - ...
  - api
    - select.php (requests from the database)

## Sites
  Each site needs a `config.php` in it's main directory as follows:
  ```php
    // home url of the page.
    $url = "joshgrift.ca";

    // version of the template to use
    $version = "v1";

    // url to the template
    $template_uri = "/var/www/static.joshgrift.ca/template/{$version}/";

    // theme, light or dark
    $theme = "light";

    // color (blue,green,purple)
    $color = "blue";

    // logo
    $logo = "logo-labs"; //or "logo" for home

  ```

  Then each file afterward must include this file. A barebones index.php is shown below:

  ```html
  <?php include "config.php"; ?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Page Title</title>
      <?php include $template_uri . "head.php"; ?>
      <!-- by not including the <head> tag in "head.php", we allow each page to have custom meta tags -->
    </head>

    <body>
      <?php include $template_uri . "header.php"; ?>

      <section>
        All content is in separate section elements.
      </section>

      <?php include $template_uri . "footer.php"; ?>
    </body>
  </html>
  ```

### CSS

#### Custom css
  Custom css must be added manually to each page.
  The color pallet set by `$color` is defined in color-[$color].css.

#### Elements
  The template css formats a few nice elements for use in each page:
  - basic semantic elements (li, ol, ul, a, h2-h6, p)
  - section.hero (icon/text home thing)
    - svg
    - "text"
  - section.main (basic content)
  - section.colored (basic content with a background set to the primary color)
  - section.centered (guess)
  - section.spaced (extra margin)
  - section.split (two button columns)
    - div.left
    - div.right
    - div.clear (cause css)
  - section.center-column (column in the center)
  - project
    - div.icon
      - i (fa)
    - h5
    - p
    - div.tags
      - i(s) (fa)
  - product
    - div.icon
      - i (fa)
    - p
    - chevron
      - i (fa)

## Template
  The template is made up a few parts:
  - the css :: The css of the project
  - the js  :: The js of the project
  - the template files
    - `footer.php` :: The footer at the bottom of each page (optional)
    - `header.php` :: The header at the top of each page (optional) This pulls the logo based on `$url` defined in `config.php`
    - `head.php`   :: Required to be included in html's `<head>` tag. This includes the css, js, and basic libraries. Uses `$version` and `$color` defined in `config.php`.
