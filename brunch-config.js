module.exports = {
	files : {
		javascripts: { 
			// To join all files from a dir to a single file (use for page linked scripts)
			// 'js/home.js' : '/^app\/home/'
			joinTo: {
				'js/app.js' : 'dev/js/app.js',
			}
		},
		stylesheets: {joinTo: 'styles/style.css'}
	},
	paths : {
		public: '',
		watched: ['dev']
	},
	plugins : {
		browserSync: {
			files: ["*.php"]
		}
	},
	// Disable CommonJS modules
	npm: {
		enabled: false
	},
	modules: {
		wrapper: false,
		definition: false
	}
}