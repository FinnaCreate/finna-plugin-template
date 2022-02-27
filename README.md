# Wordpress Plugin Boilerplate

Finna Create opinionated wordpress plugin development starter boilerplate.

Uses:

-   NPM (for hot reloading and build)
-   Composer (for namespace autoloading from /inc directory)

Includes:

-   Esbuild (Rapid compiling and watcher)
-   Browsersync (Optional: Auto browser refresh in wp-admin area)
-   Typescript
-   Tailwindcss
-   Postcss

**NOTE:** _This is a work in progress. Very alpha, subject to change so keep an eye out :)_

## Installation

---

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

---

**Run npm script to have both esbuild automatically run new build when files change and browser sync automatially reload the page in the browser**

```shell
npm run watch-sync
```
