---
title: The Difference Between Constant and Variable Bitrate
layout: post.njk
date: 2016-08-16
tags: ["post"]
---

The difference between Constant Bitrate (CBR) and Variable Bitrate (VBR) is the focus of Part 2 of my recent audio file
exploration. In case you missed Part 1, you
can <a title="Audio Codecs and Containers for Beginners" href="/blog/audio-codecs-containers-beginners/">
learn about audio codecs and containers here</a>.

First, we should define what a bitrate is. A bitrate refers to the number of bits (data) processed over a given amount
of time. You'll come across bitrates in many places. Your Internet connection, for instance, is measured in bitrate. You
might have a Verizon Fios package with a "100 Mbps Internet". That 100 Mbps is the bitrate, 100 Megabits per second (
1,000,000 bits per second).

In digital multimedia, bitrate represents the amount of data stored per unit of time of a recording. Typically, the
higher the bitrate
— <a title="Bit rate on Wikipedia" href="https://en.wikipedia.org/wiki/Bit_rate" target="_blank" rel="noopener">
sometimes inaccurately abbreviated as "bps"</a>, not to be confused with "beats per second" — the higher the audio
quality. Another way of thinking about it is there's more detail in the data at each point of a recording, making the
audio sound more rich.

The difference between Constant Bitrate (CBR) and Variable Bitrate (VBR) is pretty straight forward. However, there are
considerations to be made when deciding to use one over the other.

<h4>What is Constant Bitrate (CBR)?</h4>

CBR encoding keeps the rate of bits constant throughout an audio file's duration. Typical values used in MP3s, for
instance, include 128 (CD quality), 256 and 320 kbps (highest possible per the MP3 standard). The advantage to using CBR
encoding is that the data can be processed faster. A disadvantage is that CBR encoded audio files are poorly optimized
when it comes to quality versus file size.

<h4>What is Variable Bitrate (VBR)?</h4>

VBR encoding, on the other hand, allocates more bits to complex segments of an audio file and less bits to simpler
segments, meaning a VBR encoded audio file has a bitrate that varies throughout the audio file's duration. A VBR encoded
audio file is typically measured by its average bit rate. These files are highly optimized, having smaller file sizes
with no noticeable quality loss compared to equivalent CBR encoded audio files. But there are some disadvantages, too.
It typically takes longer to encode and decode variable bitrate audio files because the process is more complex. You may
also find that some devices and software, typically older, do not support VBR encoded audio files as well as CBR encoded
audio files.

<h4>TL;DR</h4>

Between the two types of encoding, Constant Bitrate (CBR) and Variable Bitrate (VBR), VBR is preferred in most cases
because it encodes data more accurately (better quality) using fewer bits (smaller file size).

<h4>Yeah, but...</h4>

I once opened an audio file with iTunes, years ago, and noticed the duration wasn't displaying correctly. The audio file
was a VBR encoded file. And iTunes was, well, iTunes. But I soon realized it wasn't just iTunes that had this issue. A
bunch of media players had the same issue. Or worst yet, when I tried to seek through an audio file, the software would
just crash or bug out. It still happens today. Sometimes I feel my life's calling is to get to the bottom of this.

From what I can tell, many media players estimate durations based on bitrate. But if your bitrate is variable, this
becomes difficult to do accurately. A poor algorithm may display an estimated duration of 4:00 minutes, when the actual
duration of the audio file is 4:45 — a considerable difference, especially if the audio stops playing at the 4:00 minute
mark. Likewise, seeking to the mid-point of a file by means of a UI control, like a slider or seekbar, may mislead — the
user may think they're listening to the middle of a song, but may really be listening to only the first minute of a
song.

Madness! People can praise VBR all they want, but in my experience it's caused nothing
but <a title="MP3 Sucks" href="http://r6.ca/blog/20030720T195900Z.html" target="_blank" rel="noopener">confusion</a>
and <a title="VBR Mp3 Fix" href="http://txfx.net/2005/02/08/vbr-mp3-fix/" target="_blank" rel="noopener">trouble</a>
. <a title="Why don’t podcasts use VBR MP3s? Because iOS and macOS don’t accurately seek them" href="https://marco.org/2016/08/15/vbr-mp3-plea" target="_blank" rel="noopener">
VBR encoding may not be as hot as some people make them out to be</a>. A word of warning to the wise.