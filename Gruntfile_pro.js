module.exports = function(grunt) {

	require('time-grunt')(grunt);	
	require('jit-grunt')(grunt, {
		juice: 'grunt-juice-email',
		sftp: 'grunt-ssh'
	});	
	
	
	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		globalConfig: grunt.file.readJSON('grunt_config.json'), 
		
		//Añadimos las diferentes páginas para hacer los CSS críticos
		criticalcss: {
			home: {
			  options: {
			    url: 'http://localhost/',
			    width: 1366,
			    height: 768,
			    buffer:1000000*1024,
			    ignoreConsole: true,
			    filename: '<%= globalConfig.cssPath  %>/styles.min.css',
			    outputfile: '<%= globalConfig.cssPath  %>critical-home.css'
			  }
			},
			contact: {
			  options: {
			    url: 'http://localhost/contact',
			    width: 1366,
			    height: 768,
			    buffer:1000000*1024,
			    ignoreConsole: true,
			    filename: '<%= globalConfig.cssPath  %>/styles.min.css',
			    outputfile: '<%= globalConfig.cssPath  %>critical-contact.css'
			  }
			},
			
		},		
		
		
		
		//Usamos watch para controlar cambios en archivos
		watch: {	
			
			imagemin: {
			  files: ['html/**/*.{png,jpg,gif}'],
			  tasks: ['newer:imagemin'],
			  options: {
			      spawn: false,
			      livereload: false,
			  }
			},  		    

		},
		
		browserSync: {
		  bsFiles: {
		      src : ['<%= globalConfig.cssPath  %>/*.css','<%= globalConfig.jsPath  %>/js/*.js','<%= globalConfig.tplPath  %>/**/*.<%= globalConfig.tpl  %>']
		  },
		  options: {
		    proxy: "<%= globalConfig.web  %>",
			    watchTask : true,
		  }
		},
		svgmin: {
		    options: {
		        plugins: [
		            {
		                removeViewBox: false
		            }, {
		                removeUselessStrokeAndFill: false
		            }
		        ]
		    },
			multiple: {
				files: [{
					expand:true,
					cwd: '<%= globalConfig.svgPath  %>/',
					src: ['**/*.svg'],
					dest: '<%= globalConfig.svgPath  %>/'
				}]
			}

		},		
		uglify: {
			options: {
				mangle: false,
				beautify: false,
				wrap: true,
			},						
			critical: {
			  files: {
			    '<%= globalConfig.jsPath  %>/critical.js':
			    [
			    	'<%= globalConfig.jsPath  %>/critical/**/*.js',
					
				],
			  },
			},
			
			async: {
			  files: {
			    '<%= globalConfig.jsPath  %>/async.js':
			    [
				    
					// WP Plugins
					//'<%= globalConfig.tplPath  %>/wp-content/plugins/**/*.js',
					
					// Drupal 7 Plugins
					//'<%= globalConfig.tplPath  %>/sites/all/modules/**/*.js',
					
					// Magento 1.9 Plugins
					//'<%= globalConfig.tplPath  %>/app/code/community/**/*.js',
				    
			    	'<%= globalConfig.jsPath  %>/async/vendor/**/*.js',
			    	'<%= globalConfig.jsPath  %>/async/bootstrap/*.js',
			    	'<%= globalConfig.jsPath  %>/async/bootstrap-plugins/**/*.js',
			    	'<%= globalConfig.jsPath  %>/async/flyingpigs/plugins/**/*.js',
			    	'<%= globalConfig.jsPath  %>/async/flyingpigs/helpers_async.js',
			    	'<%= globalConfig.jsPath  %>/async/flyingpigs/main_async.js',
					'<%= globalConfig.jsPath  %>/async/flyingpigs/pages/**/*.js',

					
					
				],
			  },
			}
		},
		imagemin: {
			options: {
			cache: false
			},
			theme: {
				files: [{
				  expand: true,
				  cwd: '<%= globalConfig.imgPath  %>/',
				  src: ['**/*.{png,jpg,gif}'],
				  dest: '<%= globalConfig.imgPath  %>/'
				}]
			},
			user: {
				files: [{
				  expand: true,
				  cwd: '<%= globalConfig.imgUserPath  %>/',
				  src: ['**/*.{png,jpg,gif}'],
				  dest: '<%= globalConfig.imgUserPath  %>/'
				}]
			}
		},
		less: {
		  production: {
		    options: {
		      paths: ["css"],			    
		      cleancss: true,
		      yuicompress: true,
		      modifyVars: {
			      flyingpigsVersion : grunt.template.today('ddmmyyyy')
			      
		      }		      
		    },
	        files:[
		       {
					expand: true,
					cwd: "<%= globalConfig.lessPath  %>/",
					src: "*.less",
					dest: "<%= globalConfig.cssPath  %>",
					ext: ".min.css",
				}
	        ]
		  }
		},	
		
		jshint: {
		   all: ["<%= globalConfig.jsPath  %>/critical/flyingpigs/*.js","<%= globalConfig.jsPath  %>/async/flyingpigs/*.js"]
		},
		
		grunticon: {
		    myIcons: {
		        files: [{
		            expand: true,
		            cwd: '<%= globalConfig.svgPath  %>/svg-icon',
		            src: ['*.svg', '*.png'],
		            dest: "<%= globalConfig.cssPath  %>/grunticon"
		        }],
		        options: {
			        pngfolder :'ie8-icon',
			        enhanceSVG: true,
			        cssprefix:'.icon-',
		        }
		    }
		},	
		
		autoprefixer: {
			
			options: {
			      browsers: ['last 2 versions']
			},			
			no_dest: {
		      src: '<%= globalConfig.cssPath  %>/*.css', // -> src/css/file1.css, src/css/file2.css
		    },			
			
		},
		
	});
	

	// Registramos tareas
	grunt.registerTask('default',
		["browserSync", "watch"]
	);

};