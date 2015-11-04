module.exports = {
	nypost: {
		options: {
			base: "./",
			css: [
				"static/css/nypost-screen.min.css"
			],
			ignore: [
				"@font-face",
				/url\(/
			],
			width: 320,
			height: 568,
			minify: true
		},
		src: "client/html/article-sample-nypost.html",
		dest: "static/css/nypost-screen.critical.css"
	},
	pagesix: {
		options: {
			base: "./",
			css: [
				"static/css/pagesix-screen.min.css"
			],
			ignore: [
				"@font-face",
				/url\(/
			],
			width: 320,
			height: 568,
			minify: true
		},
		src: "client/html/article-sample-pagesix.html",
		dest: "static/css/pagesix-screen.critical.css"
	}
};