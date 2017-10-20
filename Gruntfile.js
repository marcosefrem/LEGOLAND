module.exports = function(grunt) {

	require('time-grunt')(grunt);	
	require('jit-grunt')(grunt, {
		juice: 'grunt-juice-email',
		sftp: 'grunt-ssh'
	});	
	
	//Necesario para el updater de dependencias
	//require('load-grunt-tasks')(grunt);	
	
	//Funciones de seguimiento de buenas prácticas
	
	//HTML
	function checkStyle(err, stdout, stderr, cb) {		
		if ( stdout != ''){		
			grunt.fail.warn('ERROR: Hay style inline en el html');
		}
	    cb();
	}	
	
	function checkGitignore(err, stdout, stderr, cb) {		
		if ( stdout != ''){		
			grunt.fail.warn('ERROR: No has renombrado el gitignore');
		}
	    cb();
	}	
	
	//CSS
	function checkZindexCSS(err, stdout, stderr, cb) {		
		if ( stdout != ''){		
			grunt.fail.warn('ERROR: No estas usando la escala z-index');
		}
	    cb();
	}	
	
	function checkStructuralCSS(err, stdout, stderr, cb) {		
		if ( stdout != ''){		
			grunt.fail.warn('ERROR: Estas dando estilo a clases estructurales');
		}
	    cb();
	}	
	
	function checkJSCSS(err, stdout, stderr, cb) {		
		if ( stdout != ''){		
			grunt.fail.warn('ERROR: Estas dando estilo a clases de JS');
		}
	    cb();
	}	
	
	function checkIDCSS(err, stdout, stderr, cb) {		
		if ( stdout != ''){		
			grunt.fail.warn('ERROR: Estas usando IDs o colores sin variables para dar estilos');
		}
	    cb();
	}		
	/*
	function checkMarginTopCSS(err, stdout, stderr, cb) {		
		if ( stdout != ''){		
			grunt.log.error('ERROR: Estas usando margin-top, usa siempre margin-bottom');
		}
	    cb();
	}		
	*/
	function checkImportantCSS(err, stdout, stderr, cb) {		
		if ( stdout != ''){		
			grunt.log.error('ERROR: Estas usando !important');
		}
	    cb();
	}		
	
	//JS
	function checkAnimJS(err, stdout, stderr, cb) {		
		if ( stdout != ''){		
			grunt.fail.warn('ERROR: Estas usando animaciones JS y no CSS3!');
		}
	    cb();
	}	

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		secrets: grunt.file.readJSON('../basemaquetacion/secrets.json'),    
		globalConfig: grunt.file.readJSON('grunt_config.json'), 
		//Usamos watch para controlar cambios en archivos
		watch: {	
			
			checkALL:{
			    files: ["<%= globalConfig.lessPath  %>/**/*.less","<%= globalConfig.jsPath  %>/critical/**/*.js","<%= globalConfig.jsPath  %>/js/async/flyingpigs/*.js","<%= globalConfig.tplPath  %>/**/*.<%= globalConfig.tpl  %>"],
		        tasks: ["shell"],
		        options: {
		            spawn: false,
		            livereload: false,
		        },
			},
					
		    zetzer: {
		        files: ['<%= globalConfig.tplPath  %>/**/*.html'],
		        tasks: ['zetzer'],
		        options: {
		            spawn: false,
		            livereload: false,
		        },
		    },		

		    juiceHtml: {
		        files: ['mails/src/*.html'],
		        tasks: ['juice'],
		        options: {
		            spawn: false,
		            livereload: true,
		        },
		    },		

		    juiceCss: {
		        files: ['mails/src/css/**/*.css'],
		        tasks: ['juice'],
		        options: {
		            spawn: false,
		            livereload: true,
		        },
		    },	
		    
		    
		    sftp: {
		        files: ['mails/src/img/*'],
		        tasks: ['newer:sftp'],
		        options: {
		            spawn: false,
		            livereload: true,
		        },
		    },		

		    	

		    // jshint: {
		    //     files: ["<%= globalConfig.jsPath  %>/critical/*.js","<%= globalConfig.jsPath  %>/async/flyingpigs/*.js"],
		    //     tasks: ['newer:jshint'],
		    //     options: {
		    //         spawn: false,
		    //         livereload: true,
		    //     },
		    // },		
		    concat: {
		        files: ['<%= globalConfig.jsPath  %>/**/*.js'],
		        tasks: ['concat'],
		        options: {
		            spawn: false,
		            livereload: false,
		        },
		    },
			imagemin: {
			  files: ['html/**/*.{png,jpg,gif}'],
			  tasks: ['newer:imagemin'],
			  options: {
			      spawn: false,
			      livereload: false,
			  }
			},  		    
			less: {
			    files: ['<%= globalConfig.lessPath  %>/**/*.less'],
			    //No funciona bien si hay imports y usamos newer:
			    tasks: ['less'],
			    options: {
		          spawn: false,
		          livereload: false,
		      	}
			},
			svgmin: {
			    files: ['<%= globalConfig.svgPath  %>/**/*.svg'],
			    tasks: ['newer:svgmin'],
			    options: {
		          spawn: false,
		          livereload: false,
		      	}
			},			
			//webfont: {
			//    files: ['<%= globalConfig.system  %>/svg/svg-iconfont/*.svg'],
			//    tasks: ['webfont'],
			//    options: {
		    //      spawn: false,
		    //      livereload: false,
		    //  	}
			//},
			//webfontLess: {
			//    files: ['<%= globalConfig.system  %>/svg/svg-iconfont/*.svg'],
			//    tasks: ['less'],
			//    options: {
		    //      spawn: false,
		    //      livereload: false,
		    //  	}
			//},
			grunticon: {
			    files: ['<%= globalConfig.svgPath  %>/svg-icon/*.svg'],
			    tasks: ['grunticon'],
			    options: {
		          spawn: false,
		          livereload: false,
		      	}
			},
			grunticonLess: {
			    files: ['<%= globalConfig.svgPath  %>/svg-icon/*.svg'],
			    tasks: ['less'],
			    options: {
		          spawn: false,
		          livereload: false,
		      	}
			},
			
			autoprefixer: {
			    files: ['<%= globalConfig.cssPath  %>/*.css'],
			    tasks: ['autoprefixer'],
			    options: {
		          spawn: false,
		          livereload: false,
		      	}
			},
			
		},
		
		browserSync: {
		  bsFiles: {
		      src : ['<%= globalConfig.cssPath  %>/*.css','<%= globalConfig.jsPath  %>/js/*.js','<%= globalConfig.tplPath  %>/*.<%= globalConfig.tpl  %>']
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

		concat: {
		    options: {
		      stripBanners: true,
		      banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
		        '<%= grunt.template.today("yyyy-mm-dd") %> */',
		    },
		    critical: {
		      src: [
			    	'<%= globalConfig.jsPath  %>/critical/vendor/*.js',				    
			    	'<%= globalConfig.jsPath  %>/critical/*.js',
			    	'<%= globalConfig.jsPath  %>/critical/pages/**/*.js',				    
			  ],
		      dest: '<%= globalConfig.jsPath  %>/critical.js',
		    },
		    
		    async: {
		      src: [
				    				    
			    	'<%= globalConfig.jsPath  %>/async/vendor/**/*.js',
			    	'<%= globalConfig.jsPath  %>/async/bootstrap/*.js',
			    	'<%= globalConfig.jsPath  %>/async/bootstrap-plugins/**/*.js',
			    	'<%= globalConfig.jsPath  %>/async/flyingpigs/plugins/**/*.js',
			    	'<%= globalConfig.jsPath  %>/async/flyingpigs/helpers.js',
			    	'<%= globalConfig.jsPath  %>/async/flyingpigs/main.js',
					'<%= globalConfig.jsPath  %>/async/flyingpigs/pages/**/*.js',
					
				],
		      dest: '<%= globalConfig.jsPath  %>/async.js',
		    },
		    
	    },
	    
	    
		uglify: {
		  options: {
		  	mangle: false,
		  	beautify: true,
		  	wrap: false,
		  	
		  	
		  },						
		  critical: {
		    files: {
		      '<%= globalConfig.jsPath  %>/critical.js':
		      ['<%= globalConfig.jsPath  %>/critical.js'],
		    },
		  },
		  
		  async: {
		    files: {
		      '<%= globalConfig.jsPath  %>/async.js':
		      ['<%= globalConfig.jsPath  %>/async.js'],
		    },
		  },
		  
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
		   all: ["<%= globalConfig.jsPath  %>/critical/*.js","<%= globalConfig.jsPath  %>/async/flyingpigs/*.js"]
		},
		
		//webfont: {
		//    icons: {
		//        src: '<%= globalConfig.system  %>/svg/svg-iconfont/*.svg',
		//        dest: '<%= globalConfig.system  %>/fonts',
		//        destCss: '<%= globalConfig.system  %>/less/components/',
		//        options: {
		//            stylesheet: 'less',
		//            relativeFontPath: '../fonts',
		//            htmlDemo: false,
		//            embed: true,
		//            syntax: 'bootstrap'
		//        }
		//    }
		//},		
				
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
		

		zetzer: {
		    main: {
		      options: {
		        env: {
		          title: "Zetzer",
		        },
		        partials: "<%= globalConfig.tplPath  %>/includes/",
		        templates: "templates",
		        
		        dot_template_settings:{
			        strip: false,
			        
		        }
		      },
		      files: [
		        {
		          expand: true,
		          cwd: "<%= globalConfig.tplPath  %>",
		          src: "*.html",
		          dest: "html",
		          ext: ".html",
		          flatten: false
		        }
		      ]
		    },
		  },


	    juice: {
	      your_target: {
	        options: {
	          preserveMediaQueries: true,
	          applyAttributesTableElements: true,
	          applyWidthAttributes: true,
	          preserveImportant: true,
	          webResources: {
	            images: false
	          }
	        },
	        files:[
		       {
					expand: true,
					cwd: "mails/src/",
					src: "*.html",
					dest: "mails/inline/",
					ext: ".html",
				}
	        ]
	      }
	    },
			   

		sftp: {
		  test: {
		    files: {
		      "./": "mails/src/img/**"
		    },
		    options: {
			  srcBasePath :"mails/src/img/",
		      path: 'test/img/',
		      host: '<%= secrets.host %>',
		      port: '<%= secrets.port %>',
		      username: '<%= secrets.username %>',
		      password: '<%= secrets.password %>',
		      showProgress: true
		    }
		  }
		},		  
		
	    shell: {
	        options: {
	            stderr: true,
	            stdout: true,
	            stdin: true,
	        },
	        
	       checkStyle: {
	            command: 'grep -R \'style=\' --color --exclude-dir=bootstrap --exclude-dir=imports --exclude-dir=plugins <%= globalConfig.system  %>/*.html',
				options: {
                	callback: checkStyle
				},	
			},
			
			checkGitignore:{
			  command: 'find . -name \'_.gitignore\'',
			  options: {
                	callback: checkGitignore
			  },	
			  
			},

			checkZindexCSS:{
				command: 'grep -R \'z-index: 9\' --color --exclude-dir=bootstrap --exclude-dir=imports --exclude-dir=plugins <%= globalConfig.lessPath  %>/',
				options: {
                	callback: checkZindexCSS
				},	
				
			},

			checkStructuralCSS:{
				command: 'grep -R \'\.col-\|\.row\' --color --exclude-dir=bootstrap --exclude-dir=imports --exclude-dir=plugins <%= globalConfig.lessPath  %>/',
				options: {
                	callback: checkStructuralCSS
				},	
				
			},

			checkJSCSS:{
				command: 'grep -R \'\.js-\' --color --exclude-dir=bootstrap --exclude-dir=imports --exclude-dir=plugins <%= globalConfig.lessPath  %>/',
				options: {
                	callback: checkJSCSS
				},	
				
			},

			checkIDCSS:{
				command: 'grep -R \'#\' --color --exclude-dir=bootstrap --exclude-dir=imports --exclude-dir=plugins <%= globalConfig.lessPath  %>/',
				options: {
                	callback: checkIDCSS
				},	
				
			},
			/*
			checkMarginTopCSS:{
				command: 'grep -R \'margin-top\' --color --exclude-dir=bootstrap --exclude-dir=imports --exclude-dir=plugins <%= globalConfig.lessPath  %>/',
				options: {
                	callback: checkMarginTopCSS
				},	
				
			},*/
			
			checkImportantCSS:{
				command: 'grep -R \'!important\' --color --exclude-dir=bootstrap --exclude-dir=imports --exclude-dir=plugins <%= globalConfig.lessPath  %>/',
				options: {
                	callback: checkImportantCSS
				},	
				
			},
			
			checkAnimJS:{
				command: 'grep -R \'\.fade\|\.slideDown\|\.slideToggle\|\.slideUp\' --color <%= globalConfig.jsPath  %>/async/flyingpigs/',
				options: {
                	callback: checkAnimJS
				},	
				
			},
									

	    },
			  
  				
		devUpdate: {
	        main: {
	            options: {
					updateType: 'prompt', //just report outdated packages
	                reportUpdated: false, //don't report up-to-date packages
	                semver: true, //stay within semver when updating
	                packages: {
	                    devDependencies: true, //only check for devDependencies
	                    dependencies: false
	                },
	                packageJson: null, //use matchdep default findup to locate package.json
	                reportOnlyPkgs: [] //use updateType action on all packages            
	            }
	        }
	    },
		
	});
	
	//Alertas y notificaciones
	grunt.loadNpmTasks('grunt-notify');	

	// Registramos tareas
	grunt.registerTask('default',
		["shell","browserSync", "watch"]
	
	);

};