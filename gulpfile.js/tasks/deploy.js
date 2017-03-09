var config  = require('../config')
var rsync   = require('gulp-rsync')
var gulp    = require('gulp')
var path    = require('path')
var argv    = require('minimist')(process.argv);
var _       = require('lodash');

var settings = {
  src: ['../ci2810'],
  rsync: {
    root: '/',
    relative: false,
    incremental: true,
    progress: true,
    emptyDirectories: true,
    archive: true,
    exclude: [
      '.*',
      '*.md',
      'node_modules',
      'package.json',
      'bower_components',
      'bower.json',
      'gulpfile.js',
      'assets',
      'composer*',
      '.env.example'
    ]
  }
}

if(argv.staging) {
  settings.rsync = _.merge(settings.rsync, {
    destination: '/var/www/vhosts/ci2018.carney.co/wp-content/themes',
    hostname: 'chuckd-deploy'
  });
}
else if(argv.production) {
  settings.rsync = _.merge(settings.rsync, {
    destination: 'production/directory/here',
    hostname: 'production-hostname-here'
  });
}

var deployTask = function() {
  return gulp.src(settings.src)
    .pipe(rsync(settings.rsync))
}

gulp.task('deploy', ['production'], deployTask)
module.exports = deployTask
