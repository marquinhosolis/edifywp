var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var imagemin = require('gulp-imagemin');
var htmlmin = require('gulp-htmlmin');
var babel = require('gulp-babel');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-sass')(require('sass'));
var del = require('del');

/*
==========================
DEV
==========================
*/

gulp.task('server', function () {
	browserSync.init({
		proxy: 'http://localhost:8000/',
	});
	gulp.watch(['src/js/*.js', '!src/js/dist/**/*'], gulp.series('js'));
	gulp.watch('src/scss/**/*', gulp.series('css'));
	gulp.watch('src/**/*.php').on('change', browserSync.reload);
});

gulp.task('clean-js', async function () {
	del('src/js/dist/**/*', { force: true });
});

gulp.task('write-js', async function () {
	gulp.src(['src/js/**/*.js', '!src/js/dist/**/*'])
		.pipe(
			babel({
				presets: ['@babel/env'],
			})
		)
		.pipe(uglify())
		.pipe(
			rename({
				suffix: '.min',
			})
		)
		.pipe(gulp.dest('src/js/dist/'))
		.pipe(browserSync.stream());
});

gulp.task('js', gulp.series('clean-js', gulp.parallel('write-js')));

gulp.task('clean-css', async function () {
	del('src/css/**/*', { force: true });
});

gulp.task('write-css', async function () {
	return gulp
		.src('src/scss/**/*.*')
		.pipe(
			sass.sync({ outputStyle: 'compressed' }).on('error', sass.logError)
		)
		.pipe(
			rename({
				suffix: '.min',
			})
		)
		.pipe(gulp.dest('src/css'))
		.pipe(browserSync.stream());
});

gulp.task('css', gulp.series('clean-css', gulp.parallel('write-css')));

/*
==========================
BUILD
==========================
*/
gulp.task('minify', function () {
	return gulp
		.src(['dist/**/*.php', '!dist/functions.php'])
		.pipe(htmlmin({ collapseWhitespace: true }))
		.pipe(gulp.dest('dist'));
});

gulp.task('img', async function () {
	gulp.src('dist/images/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('dist/images/'));
});

gulp.task('clean-dist', async function () {
	del('dist/**/*', { force: true });
});

gulp.task('write-dist', function () {
	return gulp.src('src/**/*').pipe(gulp.dest('dist'));
});

gulp.task('copy', gulp.series('clean-dist', gulp.series('write-dist')));

gulp.task('build', gulp.series('copy', gulp.parallel(['img', 'minify'])));
