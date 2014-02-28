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


## What was copied from the main site

In making blog.bergcloud.com look like the main bergcloud.com site, some things
had to be manually copied. All the CSS and JS for the main site and the blog is
on bergcloud.com, so we just link directly to that. But other things...

We started with the standard WP TwentyFourteen theme, and deleted most of the
more specialised templates, because we have simple needs.

### Copied HTML

Both the `header.php` and `footer.php` templates contain HTML copied directly
from the main website. Any links in that HTML had to be correct manually.

The header's `<head>` element is a mix of WP-specific stuff and things copied
from the main site. Both the `favicon.ico` and `bergicon.png` were copied over.

The header's navigation is copied over, with only the links changed and the
"Blog" link's `active` state changed.

The footer has its content copied over from a few files in the main site. Two
changes (other than fixed links):

	* The list of countries used in the shop modal-popup is manually inserted
	  into the HTML, whereas it's generated dynamically from an array on
	  the main site.
	* The jQuery `ready()` call at the end had to be tweaked to work with WP's
	  use of noConflict.

### Replicating the design/structure

Because most of the blog's content is pretty simple (headers, paragraphs, etc), very little of it needed custom CSS; it looked fine as it was.

A few tags were added to WP template files to give them a sensible Bootstrap structure that mirrors the main site. Basically:

	<!-- header navigation is here. -->

	<div class="container container-padded">
		<div class="row">
			<div class="col-md-9">
				<p>The main content is here.</p>
			</div>
			<div class="col-md-3 sidebar">
				<p>Sidebar content is here.</p>
			</div>
		</div>
	</div>

	<!-- footer is here. -->

The existing WordPress HTML structure and element id's were included within this basic framework.

Some of the elements that exist in a blog, but not on the main site needed to
be styled from scratch (eg, pager links, search form, comments). For these we
used some of the styles from the TwentyFourteen theme, for speed, and
simplified/tweaked them to make them fit in with the Berg style.

