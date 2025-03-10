/**
*
* This is the GRUNT config file. 
* This file tells grunt what to with our files. 
*
* Commands:
*
* 'grunt' : Run the watch task. Watches all files and runs their tasks on save. 
* 'grunt [taskname]' : Runs the task you specify 
*
*/

module.exports = function (grunt) {

	//Require plugins from the outset to save time
	require('jit-grunt')(grunt, {
		'watch': 'grunt-contrib-watch',
		'jshint': 'grunt-contrib-jshint',
		'sass': 'grunt-contrib-sass',
		'uglify': 'grunt-contrib-uglify-es',
		'file_append': 'grunt-file-append'
	});

	//Configure grunt tasks
	grunt.initConfig({

		/**
		 * GRUNT default task.
		 * Watches all files and runs their tasks on save
		 */
		watch: {
			scripts: {
				files: [
					'app/assets/scripts.js'
				],
				tasks: ['jshint', 'uglify']
			},
			css: {
				files: ['app/assets/*.scss'],
				tasks: ['sass', 'file_append']
			}
		},

		/**
		 * jshint will help format our js
		 */
		jshint: {
			all: ['src/js/*.js'],
			options: {
				'esversion': 6,
				'-W038': false,
				'sub': true,
				'expr': true,
				'strict': false,
				'validthis': true,
				'boss': true,
				'loopfunc': true,
				'proto': true
			}
		},

		/**
		 * Run sass compile on thre main stylesheet
		 */
		sass: {
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'public/css/main.min.css': 'app/assets/style.scss'
				}
			}
		},

		/**
		 * Uglify and concat files in the original folder 
		 * to a main file in the theme js root.
		 */
		uglify: {
			my_target: {
				files: {
					'public/js/main.min.js': ['app/assets/*.js'],
				}
			}
		},

		/**
		 * Add charset declaration removed by scss compression
		 */
		file_append: {
			default_options: {
				files: [
					{
						prepend: '@charset "UTF-8";',
						input: 'public/css/main.min.css',
						output: 'public/css/main.min.css',
					}
				]
			}
		}
	});

	//The default task to be run
	grunt.registerTask('default', ['watch']);


};
