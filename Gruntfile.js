module.exports = function(grunt) {

  // var mozjpeg = require('imagemin-mozjpeg');

  grunt.initConfig({

    uglify: {
      target: {
        files: {
          'build/js/script.js': [
            'js/jquery-2.1.4.min.js', 
            'js/countdown.min.js',
            'js/tooltipster/js/jquery.tooltipster.min.js',
            'js/bootstrap-scrollspy.min.js',
            'js/jquery.smooth-scroll.js',
            'js/jquery-validation/dist/jquery.validate.min.js',
            'js/jquery.form.min.js',
            'js/modal/js/modal.js',
            'video-js/video.js',
            'js/app.js'
          ]
        }
      }
    },

    cssmin: {
      target: {
        files: [{
          'build/css/style.css': ['css/style.css']
        }]
      }
    },

    imagemin: {

      dist: {                          
        options: {                       
          optimizationLevel: 3
        },
        files: {                         
          'img/background-excellence.jpg': 'build/img/background-excellence.jpg', 
          'img/top-timer-before-background.png': 'build/img/top-timer-before-background.png'
        }
      }
    }
  });

  
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.registerTask('default', ['cssmin']);
  grunt.registerTask('build', ['uglify', 'cssmin']);
  grunt.registerTask('imagemin', ['imagemin']);

};