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
	// Only the HTML: sidewalk.png is already copied via the "png" template format,
	// and copying it twice fails on a clean build (EPERM on Windows)
	config.addPassthroughCopy("src/playground/service-unavailable/sidewalk/index.html");

	config.addPassthroughCopy("src/playground/weight-tracker");

	config.addPlugin(pluginDate);
	config.addPlugin(syntaxHighlight);

	// Reload the dev server when webpack rebuilds main.js / main.css
	config.setServerOptions({
		watch: ["dist/main.js", "dist/main.css"],
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
