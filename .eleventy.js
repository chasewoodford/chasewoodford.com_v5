const pluginDate = require("eleventy-plugin-date");
const syntaxHighlight = require("@11ty/eleventy-plugin-syntaxhighlight");

module.exports = (config) => {

	config.addPassthroughCopy({ "src/assets": "assets" });

	// PHP pages
	config.addPassthroughCopy("src/playground/weight-tracker");

	config.addPlugin(pluginDate);
	config.addPlugin(syntaxHighlight);

	config.setBrowserSyncConfig({
		files: ["dist/**/*"],
		open: true,
	});

	config.setDataDeepMerge(true);

	config.setTemplateFormats(["jpg", "png", "gif", "webp", "md", "njk"]);

	return {
		dir: {
			input: "src",
			output: "dist",
		},
	};
};
