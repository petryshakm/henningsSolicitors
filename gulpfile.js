//npm install gulp-less gulp-sass gulp-watch gulp-livereload gulp-connect gulp-autoprefixer --save
var gulp = require('gulp');


var sass = require('gulp-sass');
var watch = require('gulp-watch'); // відстеження зміни в файлах
var livereload = require('gulp-livereload'); // перезагрузка сторінки
var connect = require('gulp-connect'); // локальний сервер потрібен для livereload
var autoprefixer = require('gulp-autoprefixer'); // автопрефікс


// локальний сервер, виклик за адресою localhost:8080
gulp.task('connect', function() {
	return connect.server({
		livereload: true,
	});
});






// sass
gulp.task('sass', function() {
	/*
	return - ставиться для запуску програм асенхронно
	src('css/*.sass') -  шукає потрібні елеенти
	.pipe(sass()) - бере необхідний уже скачений модуль
	.pipe(gulp.dest('css')) -  записує результат у папку

	** -  переглядаються владенні папки

	function run() -  написана для gulp-watch
	*/
	function run(){
		return gulp.src('sass/style.scss')
		.pipe(sass())
		.pipe(autoprefixer(
			{
				browsers: ['last 3 versions'],cascade: false
			}
		))
		.pipe(gulp.dest('css/'));
	}
	watch('sass/**/*.scss', run);
	return run();
});



// збирає всі задачі
gulp.task('default', ['connect', 'sass']);














