module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		//sass task
		sass: {
			dev: {
				options: {
					style: 'expanded',
					sourcemap: 'none'
				},
				files: {
					'compiled/style.css': 'sass/style.scss'
				}
			},

			dist: {
				options: {
					style: 'compressed',
					sourcemap: 'none'
				},
				files: {
					'style.css': 'sass/style.scss'
				}
			}
		},

		//autoprefixer
		autoprefixer: {
			options: {
				browsers: ['last 2 version']
			},
			multiple_files: {
				expand: true,
				flatten: true,
				src: 'compiled/*.css',
				dest: '',
			}
		},

		//watch tasks
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass', 'autoprefixer']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.registerTask('default', ['watch']);
}