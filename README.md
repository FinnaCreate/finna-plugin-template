# Wordpress Plugin Boilerplate

[Finna Create](https://finnacreate.com) opinionated wordpress plugin development starter boilerplate.

Uses:

-   [NPM](https://www.npmjs.com/) (for hot reloading and build)
-   [Composer](https://getcomposer.org/) (for namespace autoloading from /inc directory)

Includes:

-   [Esbuild](https://esbuild.github.io/) (Rapid compiling and watcher)
-   [Browsersync](https://browsersync.io/) (Optional: Auto browser refresh in wp-admin area)
-   [Typescript](https://www.typescriptlang.org/)
-   [Tailwindcss](https://tailwindcss.com/)
-   [Postcss](https://postcss.org/)

**NOTE:** _This is a work in progress. Very alpha, subject to change so keep an eye out :)_

&nbsp;

## Installation

**1. Clone into wordpress plugins folder**

```shell
git clone https://github.com/FinnaCreate/finna-plugin-template.git
```

&nbsp;

**2. Rename folder and /finna-plugin-template.php**

_The folder and file must be the same name and lowercase_

&nbsp;

**3. Install composer dependencies**

_Make sure to cd into the plugin folder_

```shell
composer install
```

&nbsp;

**3. Install npm dependencies**

```shell
npm install
```

&nbsp;

## Development

**Configure browsersync config file**

Located at: /bs-config.js

_Use the [browsrsync options](https://browsersync.io/docs/options) api for help with your environment_

Note: Browsersync script is only enqueued for local developement and uses the `wp_get_environment_type()` to determine whether or not to enqueue the script.

You can set the wordpress enviroment in wp-config.php by adding:

```php
/* Set the environment - local, development, staging or production */
define('WP_ENVIRONMENT_TYPE', 'local');
```

&nbsp;

**Run npm script to have both esbuild automatically run new build when files change and browser sync automatially reload the page in the browser**

```shell
npm run watch-sync
```

&nbsp;

## Production Build

To build for production run:

```shell
npm run production
```

This will run Tailwind CLI and Postcss minify for your static minified css, and esbuild production mode for typescript compilation into minfied javascript.
