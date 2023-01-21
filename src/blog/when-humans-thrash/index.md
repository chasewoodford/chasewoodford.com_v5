---
title: When Humans Thrash
layout: post.njk
date: 2017-01-12
tags: ["post"]
---

<div class="alert alert-info" role="alert">
  This post was originally written for and posted on <a class="alert-link" href="https://www.verilogue.com/2017/01/12/when-humans-thrash/" target="_blank" rel="noopener">Verilogue's blog</a>.
</div>

In computer science, thrashing occurs when the process of data transfer prohibits the execution of operations. When your
computer is thrashing, it's perceived as slow, sluggish, on the verge of crashing.

Remember when you tried to open that PDF on your older work laptop and you saw Adobe Acrobat launch in your task bar but
the application never actually displayed the document? You felt like your computer had frozen trying to open the PDF,
because you were working on like 10 other things at the time. You didn't have time to wait for Adobe, so you killed the
non-responsive program.

Your computer was likely thrashing.

<div class="text-center"><img class="mw-100 mb-4 shadow border" src="blog-whenHumansThrash-001.png" alt="Man at computer holding head in hand"></div>

People thrash, too.

You see it on a daily basis. Think of that self-proclaimed expert multitasker you know. The one who never really seems
to get anything done. Take pity. They may be living in a perpetual state of thrashing.

As Brian Christian and Tom Griffiths put it
in <a href="https://www.amazon.com/Algorithms-Live-Computer-Science-Decisions/dp/1627790365/" target="_blank" rel="noopener">
Algorithms to Live By: The Computer Science of Human Decisions</a>:

<figure class="bg-light p-3 rounded border">
  <blockquote class="blockquote fst-italic">
    <p class="small">
        Thrashing is a very recognizable human state. If you've ever had a moment where you wanted to stop doing 
        everything just to have the chance to write down everything you were supposed to be doing, but couldn't spare 
        the time, you've thrashed. And the cause is much the same for people as for computers: each task is a draw on 
        our limited cognitive resources. When merely remembering everything we need to be doing occupies out full 
        attention—or prioritizing every task consumes all the time we had to do them—or our train of though is 
        continually interrupted before those thoughts can translate to action—it feels like panic, like paralysis by 
        way of hyperactivity.
    </p>
  </blockquote>
  <figcaption class="blockquote-footer mt-2 mb-0">
    Christian and Griffiths, 123
  </figcaption>
</figure>

It's a condition that's easy to get into, and difficult to work out of.

When you're multitasking, you're never focused on one thing. In fact, the term is a misnomer; people can't actually do
more than one task at a time. What you're doing when you're multitasking is switching from task to task. In computer
science, this process is known as paging. Paging is the process of swapping data in memory for data on disk, i.e. task
switching.

Taking a look at the Verilogue database, we see tons of conversations around multitasking.2 Patients often use it as a
benchmark for disease progression or impact of treatment.

<audio controls src="https://www.verilogue.com/wp-content/uploads/2017/01/whenhumansthrash-patientclip.mp3"></audio>

<b>PT:</b> I used to be able to multitask way better before.

<b>PT:</b> I'm not good at multitasking anymore.

<b>PT:</b> Multitasking is pretty much out of the question.

Most physicians take this feedback, with other quality of life concerns voiced by patients, as a cue to adjust current
treatment. Some note the issue as cognitive dysfunction and suggest psychotherapy. Others recommend sleep and
vacationing to reduce stress and anxiety, which is attributed to patients' inability to multitask

But only 2 out of 20 physicians address the issue directly, emphasizing that the best way to reduce the overwhelming
feeling of thrashing is to focus on doing one thing at a time.

<audio controls src="https://www.verilogue.com/wp-content/uploads/2017/01/whenhumansthrash-doctorclip.mp3"></audio>

<b>DR:</b> Try to concentrate on one thing. If you have multiple things, do multiple things at one time, it's more
difficult with you.

<b>PT:</b> Yes, yes, definitely.

<b>DR:</b> So try to just do one thing at a time.

<b>DR:</b> Now, that's very good, compartmentalizing, you know, issues is really, really important, and that's great
that you've learned, learned that.

<b>PT:</b> Yeah.

<b>DR:</b> Uh, because sometimes, you know, some people will tend to, you know, lump everything together and they'll
make the stress go much higher, the anxiety go much higher. So, isolating things, separating them out is really is a
good idea.

Sometimes working dumber is working smarter. Consider your inbox. Instead of scanning and prioritizing emails that need
a response, just start responding. You'll likely find that without spending time scanning, prioritizing and considering
all the emails in your inbox every couple of minutes–a routine that can consume an enormous amount of cognitive
resources–you'll have the entire thing cleared out in no time.

If prioritization doesn't matter for the tasks at hand, consider randomly completing tasks one by one, as a great way to
work out of your "thrashing state". If prioritization does matter, meaning you have to make a tradeoff between
responsiveness and execution, "establishing a minimum amount of time to spend on any one task helps to prevent a
commitment to responsiveness from obliterating throughput entirely" (Christian and Griffiths, 125).

Consider, again, your inbox. If you prioritize the list and dedicate a minimum amount of time to responding to emails
before checking to see if new, more urgent emails have been received, you ensure things get done efficiently. You guard
against thrashing, because you'll never spend more time sorting email than responding to it. You also maintain
prioritization. Tasks are still being completed one at a time, but here you’re working slower, not dumber, to achieve
better efficiency in task completion.

And how responsive should you be? "Try to stay on a single task as long as possible without decreasing your
responsiveness below the minimum acceptable limit. Decide how responsive you need to be—and then, if you want to get
things done, be no more responsive than that" (Christian and Griffiths, 126)

That's how modern computer operating systems work. They ignore users as much as possible without it being noticed. They
time-block to avoid thrashing due to too much context switching. They do one thing at a time, and they do it quickly.

Keep this in mind the next time you're feeling overwhelmed with all the stuff going on at work or in life. It just might
help keep you from thrashing.

(And if you found this post relating human and computer behavior interesting, you'll love <i>Algorithms to Live By</i>.)