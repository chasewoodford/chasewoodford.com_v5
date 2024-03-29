---
title: Calm Focus
layout: post.njk
featuredImage: screenshot-calmFocus.gif
featuredImageAlt: website preview
date: 2013-07-20
tags: ["project"]
projectDescription: Website promoting the benefits of biofeedback.
---

After finishing a re-design on his personal site, Gary Ames wanted to update his other web properties that promote his 
work as licensed psychologist and <a href="http://en.wikipedia.org/wiki/Biofeedback" target="_blank">biofeedback</a> 
consultant. The primary entry point for these properties is 
<a href="http://www.calmfocus.com" title="see it live">calmfocus.com</a>.

The site is loaded with information, mostly in the form of articles and presentations describing the benefits of
biofeedback, with the goal of converting site visits into inqueries for more details on Gary's services. The older
version of the site functioned, but lacked visual appeal and was not optimized for conversion.

Gary asked me to help him re-design calmfocus.com in a way that was more "enticing" to visitors&mdash;he wanted more
visuals, a non-linear flow but one with less cognitive overhead, better SEO and, of course, a higher conversion rate.

<h4 class="mt-5 mb-3">Research & Design</h4>

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="highlight-calmFocus-001.png" alt="Old version of calmfocus.com"></div>

The old version of calmfocus.com was laid out very similar to many other behavioral health sites, like 
<a href="http://www.fbh.com/rehabilitative.html" target="_blank">Foundations Behavioral Health</a> and 
<a href="http://www.ibc-pa.org/" target="_blank">The Institute for Behavioral Health</a> for example, where the landing 
page has a navigational menu, an abundance of text and contact information; no clear call to action and no incentive 
for exploration. This type of design works for visitors who come to a page looking for something specific, like a form 
or contact information, and are easily able to find what they need. But for a site that is trying to soft sell a 
service, the site needs to create a narrative through which content can educate visitors on the benefits of the service 
and, ultimately, influence decision making. This was our goal for the calmfocus.com re-design.

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="highlight-calmFocus-002.png" alt="USA Today highlight"></div>

We put together a list of sites to exemplify layouts and styles that we thought would allow the content of 
calmfocus.com to tell the story we wanted it to tell. Of those, the one that bubbled to the top of our list was 
<a href="http://www.usatoday.com" title="usatoday.com">usatoday.com</a>. The re-designed calmfocus.com borrows some of 
its design from the usatoday.com site. We imitated the navigation menu, the way images were displayed as "cards" for 
each article and switched the "Top Stories" section to a "Most Popular" section. These elements helped us create a 
non-linear flow for the site, as well as make the site more visually appealing.

We also replicated the way similar groups of content are associated through the use of color. On usatoday.com, the
sports section/articles feature a red label; the money section/articles a green label; etc. On calmfocus.com, the
academic section/articles feature a red label; the addictions section/articles feature a green label. Though the
implementation is different, the concept is the same.

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="highlight-calmFocus-003.png" alt="Color theming highlight"></div>

We kept a couple elements from the original calmfocus.com design, like the vertical navigation on the left side of the
page and the contact information at the top of the page. But we also added a couple new features to the site, too, like
search functionality and a social sharing feature. The content of the site remained relatively unchanged aside from some
search engine optimizations.

<h4 class="mt-5 mb-3">Database Migration</h4>

The biggest challenge of this project was migrating the database. The old version of the site was built using the PHP
template engine <a href="http://www.smarty.net/" target="_blank">Smarty</a>. But the framework had not been maintained
and at some point ceased to populate the database correctly when new data was added to the site via the custom-built
admin interface. Looking through the database I found a lot of good data but also a lot of corrupt and mis-placed data.
The database contained over 100 articles' worth of content and metadata.

We chose to build the re-designed calmfocus.com in WordPress. Not only does WordPress have an easy-to-learn admin
interface, it also has a great developer support community&mdash;making it easy to hand off to the next
developer&mdash;and is a well maintained product. Unfortunately, the database structure used by the old version of
calmfocus.com wasn't well documented, nor did it turn out to be very similar to
the <a href="http://codex.wordpress.org/images/9/97/WP3.8-ERD.png" title="WordPress database diagram">WordPress database
structure</a>, nor could its creator be reached for support. So I ended up doing a dump of the old database, sifted
through it using Excel and reformatted what data I could salvage so that it could be re-imported into WordPress. This
certainly saved time over manually re-entering all of the data into the new database. However, it was also an unexpected
consumption of development time, which not only took away from time I could devote to improving the site's design, but
also pushed out the project's completion date.

<h4 class="mt-5 mb-3">WordPress</h4>

The site displays content in a number of unique ways. The homepage features seven articles, which are loaded at random
on each page load using the <code>'orderby' => 'rand'</code> WordPress feature. We decided to load
articles in this manner on the homepage mainly because new content is not added to the site very frequently. Loading
articles randomly exposes visitors to potentially new content on each visit even if new content has not necessarily been
added to the site recently.

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="highlight-calmFocus-004.png" alt="Most Popular articles highlight"></div>

The homepage also features a "Most Popular" section in which the five most popular articles are listed. This list is 
controlled by a <a href="https://github.com/chasewoodford/alertfocus.com/blob/master/wp-content/themes/starkers-master/functions.php#L117-L149" target="_blank">custom WordPress function</a> 
that detects the post view count meta data and stores it as a custom field on each post. The <code>af_post_views_count</code> 
can be viewed and edited by WordPress admins, as well, via the Custom Fields section on each post's edit page.

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="highlight-calmFocus-005.png" alt="Categories highlight"></div>

All of the content on the site is associated with one or two of 20 WordPress post categories. The majority of the 
site's content is divided into two parent categories, "Perform" and "Relieve", and from there, each post is further 
identified by more specific categories, like "Add", "Autism", "Migraine", etc. Each category is assigned a unique color 
to allow for quicker recognition of related content, and these colors present themselves near navigation links and 
header backgrounds.

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="highlight-calmFocus-006.png" alt="Related posts highlight"></div>

At the bottom of each post, in addition to displaying quick links to other categories, is a "View Related Articles" 
section. This is a list of articles identified in the same category as the post currently being displayed, derived by 
a <a href="https://github.com/chasewoodford/alertfocus.com/blob/master/wp-content/themes/starkers-master/parts/single.php#L11-L16" target="_blank">post query</a> 
that looks for five posts in the same category other than the one currently being displayed and displays them in random 
order. Then, using a <code>while</code> loop, related articles are displayed, when available, or the section is hidden 
when there are no related posts. The goal of this section is to encourage users to continue exploring the site after 
they finish reading a post.

Using WordPress allows for powerful content manipulation and flexible content layout, while requiring very little code
editing from one page to the next, minimizing the time required to go from design to build.

<h4 class="mt-5 mb-3">Performance Monitoring & Optimization</h4>

Due to the amount of content and number of queries being run on each page of the calmfocus.com site, we wanted to make
sure we were conscious of the site's page speed performance from the outset of the project. Additionally, because this
site is a traffic generator for the client's business, it was important the site functioned well from a page rank
standpoint, too. The site takes advantage of various (zero-cost) performance monitoring and optimization tools to
achieve this goal.

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="highlight-calmFocus-008.png" alt="Waterfall highlight"></div>

We used <a href="http://www.webpagetest.org/" target="_blank">webpagetest.org</a> to set performance benchmarks, 
measuring page speed and asset loading on both the old and new versions of the site. The results are very comprehensive. 
It provides a waterfall view of asset loading, but also a breakdown of each stage of content loading, like time to first 
byte and time to fully loaded, as well as time to load first view and repeat view. The performance review also provides 
an extensive list of optimization recommendations. But the feature I like most is that the data is easily exportable to 
Microsoft Excel, making it very easy to save tests over time and share this data with clients. Using this tool, we were 
able to shave roughly seven seconds off page load times from the beginning of the project to the end, as well as 
identify and implement a bunch of content delivery optimizations not implemented on the old version of the site.

We were fortunate to have a third party, <a href="http://www.practicebuilders.com/" target="_blank">Practice
Builders</a>, help evaluate and guide the development of the site. Here is their
initial <a href="/resources/documents/calmFocus-webEvaluationReport.pdf">Web Evaluation
Report</a>. Though the report gives the site a relatively low overall score, it should be noted that this evaluation was
done very early in the development process. As the lone developer on this project, it was good to have outside
validation of the work completed so far. It was also reassuring to see that the roadmap I had laid out for the
development of the site matched up with the recommendations for improvements offered by the outside consultant.

As with any critique of one's work, it does take a bit of pride-swallowing in order to find benefit in evaluations like
this. No one likes receiving negative feedback, like "the website does not have a mobile version available." Even worse
when the group performing the evaluation is not in-tune with current industry standards. (There was no mobile version of
the site because it was designed responsively. At the point of this site's development, having a separate mobile version
of the site is not considered a best practice.)  So while this report did offer some validation, it also created more
work having to defend design decisions. But overall, I think the report served several beneficial purposes&mdash;in
addition to validating the site's design and roadmap, it helped re-assure the client that he did not make a mistake in
hiring me at a relatively cheap price compared to a more expensive agency, and it opened the door for discussion of
future site enhancements, creating the potential for more work in the future.

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="highlight-calmFocus-007.png" alt="Google Analytics highlight"></div>

One of the first performance monitoring and optimization tools implemented was Google Analytics. Of all the features 
offered by Google Analytics, we were most interested in "Audience Characteristics and Behavior" monitoring. We wanted 
to make sure our audience assumptions matched reality. We wanted to make sure we knew what technology they were using, 
so we could optimize the site's design for them. We wanted to make sure we knew how they were navigating the site, so 
we could make it easier for them to find the information they were looking for.

It was also important for me that we establish a baseline for page views and session durations. Armed with this data,
it's easier to validate design and development decisions, grounding what can sometimes be abstract or foreign concepts
for clients in reality with hard numbers. So we started by instantiating Google Analytics on the current production
version of calmfocus.com very early on in the re-design process, to establish a baseline, and then when the re-designed
site went live we monitored the data, measured impact and modified the site as needed.

Some other tools implemented include:

<ul>
    <li><a href="https://www.cloudflare.com/" target="_blank">Cloudflare</a>, which helps "block threats and limit abusive bots and crawlers from wasting your bandwidth and server resources" and optimizes content delivery so "visitors get the fastest page load times and best performance";</li>
    <li><a href="https://www.pingdom.com/" target="_blank">Pingdom</a>, which monitors the site and servers for downtime; and</li>
    <li><a href="https://wordpress.org/plugins/wordpress-seo/" target="_blank">WordPress SEO by Yoast</a>, the de facto SEO optimization plugin for WordPress sites.</li>
</ul>

I find all of these tools invaluable and use them on just about every project I work on. I've found that each of these
tools reduce development and maintenance time in the order of hours, saving clients time, money and, in the case of post
project handoffs, a lot of frustration trying to make sense of what seem like complicated site maintenance tasks.
