# Berg blog WordPress theme

The WordPress theme for http://blog.bergcloud.com.

Adapted from the standard TwentyFourteen WP theme.

Uses CSS and JS from the main http://bergcloud.com website.

There are probably a few files here that are no longer needed.

## Local development

If you need to make changes to CSS/JS then you'll need to have a local copy of the main bergcloud.com site code, and run its Compass SASS processing. 

You'll also need to *temporarily* change the domain returned by `berg_get_domain()` in `functions.php` in the WP theme, so it points to your local copy of the bergcloud.com site. eg:

	function berg_get_domain() {
		return 'http://0.0.0.0:3000/';
	}

And then remember to change it back to `http://bergcloud.com/` before uploading any theme changes to blog.bergcloud.com. I fail to see how this can possibly ever go slightly wrong. Um.

