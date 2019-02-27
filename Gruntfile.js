module.exports = function(grunt) {

    // Require it at the top and pass in the grunt instance
    require('@lodder/time-grunt')(grunt);

	grunt.initConfig({

        // Concatenate all the javascript files into a single one: all.js
		concat: {
			dist: {
				files: {
					'dist/js/all.js' : [
						'js/dev/modernizr.custom.js',
                        'js/dev/**/*.js'
					]
				}
			}
		},

        // Minify all.js file for production
        uglify: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                    'dist/js/all.min.js': ['dist/js/all.js']
                }
            }
        },

        sass: {
            dist: {
                files: {
                    'dist/css/style.css' : 'scss/custom/master.scss'
                }
            }
        },

        // Process css files for production
        postcss: {
            options: {
                map: {
                    inline: false // save all sourcemaps as separate files...
                },

                processors: [
                    require('pixrem')(), // add fallbacks for rem units
                    require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
                    require('cssnano')() // minify the result
                ]
            },
            dist: {
                src: 'dist/css/style.css'
            }
        },

        watch: {
            sass: {
                files: [
                    'scss/custom/**/*.scss'
                ],
                tasks: [
                    'sass',
                    'postcss'
                ]
            },

            js: {
                files: ['js/**/*.js'],
                tasks: ['concat', 'uglify']
            }
        }

	});

    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-postcss');

	grunt.registerTask('default', [
		'concat',
		'uglify',
        'sass',
        'postcss'
	]);

};