const pluginDate = require("eleventy-plugin-date");
const syntaxHighlight = require("@11ty/eleventy-plugin-syntaxhighlight");

module.exports = (config) => {

	config.addPassthroughCopy( "src/assets");
	config.addPassthroughCopy( "src/resources");
	config.addPassthroughCopy("src/playground/weight-tracker");

	config.addPlugin(pluginDate);
	config.addPlugin(syntaxHighlight);

	config.setBrowserSyncConfig({
		files: ["dist/**/*"],
		open: true,
	});

	config.setDataDeepMerge(true);

	config.setTemplateFormats(["md", "njk", "png", "jpeg"]);

	return {
		dir: {
			input: "src",
			output: "dist"
		}
	};
};
