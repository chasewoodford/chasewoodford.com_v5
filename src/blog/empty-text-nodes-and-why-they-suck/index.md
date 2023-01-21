---
title: Empty Text Nodes (And Why They Suck)
layout: post.njk
date: 2011-08-02
tags: ["post"]
---

Which issue was it that gave you pause long enough to wish you no longer had to develop for IE?

(And I can ask that question with 99% confidence that it'll resonate because nearly every cross-browser compatibility
issue I've ever experienced or helped others work their way around has been IE-related.)

More than likely, if you've had to build a webpage that was to display beautifully across multiple browser platforms,
including historic browser versions like IE7, which is still a corporate standard for many businesses, you've run into
numerous issues of compatibility.

Enter the empty text node.

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="blog-emptyTextNodes-001.png" alt="empty text nodes"></div>

In the image above, the empty text node is the cause of the little hyperlink remainders to the right of the images 
(circled in red) and appear in IE's Developer Tools outline in greyed, italicized text (as in the bottom of the two 
images above).

You can open pretty much any page in IE, hit F12 and find empty text nodes littered throughout the code. Now, I am to
understand that this page handling issue has been fixed with IE9, but haven't had a chance to test thoroughly
yet. <a title="More on empty text nodes" href="http://www.howtocreate.co.uk/wrongWithIE/?chapter=Empty+Space" target="_blank" rel="noopener">
Click here for more background information on empty text nodes</a>.

Suffice it to say, it took me several hours to figure out what these were when I first encountered them—why they were
appearing, where they were to be found in my code and how to get rid of them. Hopefully this entry will spare someone
dealing with the same issue a couple of hours' frustration.

I can't remember an empty text node I've encountered that caused a display issue that wasn't associated with a
hyperlink. Furthermore, I most often encounter the issue when hyperlinks take a list form. And the easiest way I've
found to resolve the issue in most cases is to simply remove all spaces between your <code>href</code> tag and
your <code>img</code> tag, i.e. don't break your lines of code for sake of pretty formatting. Be forewarned: this may
make your code difficult to decipher. Deal with it.

In dealing with it, I've been forced myself to deal with a larger, more philosophical quandary: who am I writing code
for? I ask myself this at the start of every project. Is someone else going to have to work with my code? Make edits to
my code? Or, am I writing code for only another computer?

Nothing gets under my skin more than code that has a million comments, comments splitting up essential code, code that
is unnecessary, code that is similar in function but unique in styling. Coders that work with these bad habits seem to
be the same who open themselves up to issues like that of empty text nodes, too. I know because I am only now slowly
getting away from these habits. I imagine we all have to beat these demons at one point or another.

That said, as your developing is developing, keep these points in mind and you'll end up fine:

<ul class="square">
 	<li>Keep your code as concise as possible while maintaining readability</li>
 	<li>Don't repeat yourself (D.R.Y.)</li>
 	<li>Use comments wisely, make sure they're truthful, remove code that's been commented out</li>
 	<li>Make sure to test, then re-test, then TEST AGAIN!</li>
</ul>