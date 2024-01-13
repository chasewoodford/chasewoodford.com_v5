const pluginDate = require("eleventy-plugin-date");
const syntaxHighlight = require("@11ty/eleventy-plugin-syntaxhighlight");
const { DateTime } = require("luxon");

module.exports = (config) => {

	config.addPassthroughCopy( "src/assets");
	config.addPassthroughCopy( "src/resources");

	config.addPassthroughCopy("src/playground/service-unavailable/logueworks");
	config.addPassthroughCopy("src/playground/service-unavailable/revealmr");
	config.addPassthroughCopy("src/playground/service-unavailable/revealmr-dvd");
	config.addPassthroughCopy("src/playground/service-unavailable/revealmr2");
	config.addPassthroughCopy("src/playground/service-unavailable/sidewalk");

	config.addPassthroughCopy("src/playground/weight-tracker");

	config.addPlugin(pluginDate);
	config.addPlugin(syntaxHighlight);

	config.setBrowserSyncConfig({
		files: ["dist/**/*"],
		open: true,
	});

	config.addFilter("shortDate", (dateObj) => {
		return DateTime.fromJSDate(dateObj).toFormat("LLL yyyy");
	});

	config.setDataDeepMerge(true);

	config.setTemplateFormats(["md", "njk", "png", "jpeg", "gif", "webp"]);

	return {
		dir: {
			input: "src",
			output: "dist"
		}
	};
};
