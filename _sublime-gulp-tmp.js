var gulp = require('gulp');
var less = require('gulp-less');
var cleancss = require('gulp-clean-css');
var rename = require('gulp-rename');
gulp.task('default', ['less'], function() {
	gulp.watch('assets/less/*.less', ['less']);
	gulp.watch('libs/bootstrap-3.3.7/less/*.less', ['less']);
});
gulp.task('less', function() {
	console.info('less');
	gulp.src('assets/less/style.less')
		.pipe(less())
		.pipe(gulp.dest('assets/css/'))
		.pipe(cleancss())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(gulp.dest('assets/css/'));

	gulp.src('libs/bootstrap-3.3.7/less/bootstrap.less')
		.pipe(less())
		.pipe(gulp.dest('libs/bootstrap-3.3.7/css/'))
		.pipe(cleancss())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(gulp.dest('libs/bootstrap-3.3.7/css/'));
});

/**/;module.exports = gulp;