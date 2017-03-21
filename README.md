# Carnegie International

---
This is a Wordpress theme designed for the "truss phase" of the 2018 Carnegie International website.
This theme is based on the [Sage WordPress starter theme](http://roots.io/sage).

* Source: [https://github.com/cmoa/carnegie-international](https://github.com/cmoa/carnegie-international)
* Homepage: [http://2018.carnegieinternational.org](http://2018.carnegieinternational.org/)


## Requirements

| Prerequisite    | How to check | How to install globally
| --------------- | ------------ | ----------------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js 0.12.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

For more installation notes, refer to the [Install  Gulp and Bower](#install-gulp-and-bower) section in this document.

## Features

* Static data
* Elastic search
* Party Records application


## Theme Installation

Bottom line is you want to get the files in this repo into your local development environment. There are many ways to do this, two of which we will cover here.

### via Command-Line

1. Set up your local development environment.
2. Install/update your [front-end development tools](https://gist.github.com/kulas/ac630cae98000c33ca35d77ba7a78223)
3. Install/update the [WordPress Command-line Interface](http://wp-cli.org)
4. Install/update WordPress
5. Install the theme:
    * From the WordPress themes directory, use the command `git clone <repository-url>` to download this theme to your directory.


Then activate the theme via [wp-cli](http://wp-cli.org/commands/theme/activate/).

```
wp theme activate your-theme-name-here

```

### via GitHub Website

1. Set up your local development environment.
2. Download the latest theme release from GitHub.
3. In your WordPress admin panel, navigate to Appearance->Themes
4. Click Add New
5. Click Upload Theme
6. Upload the zip file that you downloaded.



## Theme Setup

Edit `lib/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, post formats, and sidebars.

---

## Theme Development

Sage uses [Gulp](http://gulpjs.com/) as its build system and [Bower](http://bower.io/) to manage front-end packages.

### Install Gulp and Bower

Building or updating the theme requires [node.js](http://nodejs.org/download/) and several other front-end tools to be installed on your local machine. See this Gist: [Install & Maintain Front-End Tools](https://gist.github.com/kulas/ac630cae98000c33ca35d77ba7a78223) for  step-by-step instruction.

In brief, from the command line:

1. Install [Gulp](http://gulpjs.com) and [Bower](http://bower.io/) _globally_ with `npm install -g gulp bower`
2. Navigate to the theme directory, then run `npm install` and run `bower install` to install _local_ dependencies



You now have all the necessary dependencies to run the build process.

### Available Gulp Commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

### Using BrowserSync
~~To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `assets/manifest.json` to reflect your local development hostname.~~

~~For example, if your local development URL is `http://project-name.dev` you would update the file to read:~~

```json
...
  "config": {
    "devUrl": "http://project-name.dev"
  }
...
```
~~If your local development URL looks like `http://localhost:8888/project-name/` you would update the file to read:~~

```json
...
  "config": {
    "devUrl": "http://localhost:8888/project-name/"
  }
...
```

## Documentation

~~Sage documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).~~

## Contributing

~~Contributions are welcome from everyone. We have [contributing guidelines](https://github.com/roots/guidelines/blob/master/CONTRIBUTING.md) to help you get started.~~
