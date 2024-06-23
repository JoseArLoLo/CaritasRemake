const { src, dest, watch, parallel } = require('gulp')

//CSS
const sass = (require('gulp-sass'))(require('sass'));
const plumber = require('gulp-plumber');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');

//Imagenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

// Javascript
const terser = require('gulp-terser')

function css(done) {
    src("src/scss/**/*.scss") //Identificar archivo SCSS
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass()) //COMPILAR ARCHIVO IDENTIFICADO
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest("build/css")) //GUARDAR ARCHIVO RESULTANTE

    done();
}

function imagenes(done) {
 
    const opciones = {
      optimizationLevel: 3
    }
   
    src("src/img/**/*.{png,jpg}")
      .pipe( cache( imagemin(opciones) ) ) 
      .pipe( dest("build/img") )
   
    done();
  }

function versionWebp( done ) {
    const opciones = {
        quality: 50
    };
    src('src/img/**/*.{png,jpg}')
        .pipe( webp(opciones) )
        .pipe( dest('build/img') )
    
    done();
}

function versionAvif( done ) {
    const opciones = {
        quality: 50
    };
    src('src/img/**/*.{png,jpg}')
        .pipe( avif(opciones) )
        .pipe( dest('build/img') )
    
    done();
}

function javascript( done ) {
    src('src/js/**/*.js')
        .pipe(sourcemaps.init())
        .pipe( terser() )
        .pipe(sourcemaps.write('.'))
        .pipe(dest('build/js'));
 
    done();
}
function svg(done) {
    src('src/img/**/*.svg') // Ruta de los archivos SVG fuente
      .pipe(imagemin()) // Opcional: puedes aplicar optimización de imágenes aquí si lo deseas
      .pipe(dest('build/img')); // Directorio de destino
  
    done();
  }

function dev(done) {
    watch("src/scss/**/*.scss", css);
    watch("src/js/**/*.js", javascript);
    watch("src/img/*.*", imagenes)
    watch("src/img/*.*", versionWebp)
    watch("src/img/*.*", versionAvif)
    watch('src/img/**/*.svg', svg);
    done();
}

exports.css = css;
exports.js = javascript;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.svg = svg;
exports.dev = parallel( imagenes, versionWebp, versionAvif, svg, javascript, dev );







function tarea(done) {
    console.log("Mi primera chamba");
    done();
}

exports.primerTarea = tarea;