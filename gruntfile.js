module.exports = function(grunt) {
	require('jit-grunt')(grunt);
	
	grunt.config('phplint', {
		options : {
			phpCmd: "/usr/bin/php",
			phpArgs : {
				'-lf': true
			}
	},
	all:{
		src : '<%= paths.php.files %>'
		}
	});
  
  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: false,
          yuicompress: false,
          optimization: null
        },
        files: {
        	"wp-content/themes/stoemper2015/css/stoemper-bootstrap.css": "wp-content/themes/stoemper2015/less/stoemper-bootstrap.less", // destination file and source file
        	"wp-content/themes/stoemper2015/bootstrap/css/bootstrap.css": "wp-content/themes/stoemper2015/bootstrap/less/bootstrap.less",
        	"store/catalog/view/theme/stoemper-theme/bootstrap/css/bootstrap.css": "store/catalog/view/theme/stoemper-theme/bootstrap/less/bootstrap.less",
        	"store/catalog/view/theme/stoemper-theme/stylesheet/store-style.css": "store/catalog/view/theme/stoemper-theme/less/store-style.less"
        },
      },
    },
    watch: {
    	styles: {
    		files: ['wp-content/themes/stoemper2015/less/**/*.less', 'wp-content/themes/stoemper2015/bootstrap/less/**/*.less', 'store/catalog/view/theme/stoemper-theme/bootstrap/less/**/*.less', 'store/catalog/view/theme/stoemper-theme/less/**/*.less'],
    		//tasks: ['less', 'lesslint'],
    		tasks: ['less'],
    		options: {
    			spawn: false,
    			livereload: 35729
    		},
	    },
	    scripts: {
	    	files: ['wp-content/themes/stoemper2015/js/**/*.js'],
	        tasks: ['jshint'],
	        options: {
	        	spawn: false,
	        },
	    },
	    phplint : {
	        files : ['wp-content/themes/stoemper2015/**/*.php'], // which files to watch,
	        tasks : ['phplint'],
	        options : {
	            spawn : false
	        }
	    },
    },
    jshint: {
    	options: {
    		curly : true,
            eqeqeq : true,
            immed : true,
            latedef : true,
            newcap : false,
            noarg : true,
            sub : true,
            undef : true,
            unused : false,
            boss : true,
            eqnull : true,
            browser : true,
    		globals: {
    	        jQuery: true
    	      },
        },
        dev: {        
            src: ['wp-content/themes/stoemper2015/js/**/*.js', '!wp-content/themes/stoemper2015/js/vendor/**/*.js' ],
        }
    },
    lesslint: {
    	src: ['wp-content/themes/stoemper2015/less/stoemper-bootstrap.less']
    },
    phplint: {
        options: {
        	stdout: true,
            stderr: true,
            swapPath: '/tmp'
        },
        files: ['wp-content/themes/stoemper2015/**/*.php'], // which files to watch
    },
    
  });
  

  grunt.loadNpmTasks('grunt-lesslint');
  grunt.loadNpmTasks('grunt-phplint');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  grunt.registerTask('php', ['phplint']);
  grunt.registerTask('default', ['watch']);
}