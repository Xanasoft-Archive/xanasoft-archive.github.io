<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=170&amp;t=3310" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-07-28T17:22:17+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=170&amp;t=3310</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-07-28T17:22:17+01:00</updated>
<published>2013-07-28T17:22:17+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16502#p16502</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16502#p16502"/>
<title type="html"><![CDATA[Data Counters]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16502#p16502"><![CDATA[
C is the size of data in bytes your client requested to download from the remote client.<br />D is the count if blocks that have ben requested and added together with their respectable sizes result in C<br /><br /><br />I will not make A it user hash based, tracking clients across sessions is a violation of their right to privacy <img class="smilies" src="http://forum.neoloader.com/images/smilies/tongue.png" alt=":p" title=":p" /><br /><br /><br />yes C and D for upload is similar,<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sun Jul 28, 2013 5:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-07-28T16:50:39+01:00</updated>
<published>2013-07-28T16:50:39+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16501#p16501</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16501#p16501"/>
<title type="html"><![CDATA[Data Counters]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16501#p16501"><![CDATA[
<blockquote class="uncited"><div><br />Download Speed Column: A kb/s (B kb/s) - C/D<br />A = Download Rate<br />B = Download Rate including overhead<br />C = Requested Bytes<br />D = request coutn adding up to C bytes of data<br /></div></blockquote><br /><br />I need a better explanation about what is C and D.<br /><br /><blockquote class="uncited"><div><br />Uploaded Bytes Column A / B<br />A = Uploaded Bytes in total<br />B = Uploaded bytes during this upload session<br /></div></blockquote><br /><br />If the A is not userhash based, I think is totally useless. Couldn't you make it userhash based ? And what about on the torrent side ?<br /><br /><blockquote class="uncited"><div><br />Upload Speed Column: A kb/s (B kb/s) - C/D !*#<br />A = Upload Rate<br />B = Upload Rate including overhead<br />C = Bytes Cached in socket for Upload<br />D = individual request count that adds up to the C bytes of data<br />! = the uplaod slot is a focus slot<br />* = the upload slot is a trickle slot<br /># = the slot is blocking<br /></div></blockquote><br /><br />Need to know C and D here too, I guess is the same...<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Sun Jul 28, 2013 4:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-07-28T14:17:17+01:00</updated>
<published>2013-07-28T14:17:17+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16500#p16500</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16500#p16500"/>
<title type="html"><![CDATA[Data Counters]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16500#p16500"><![CDATA[
Ok:<br /><br />so here it comes (assumed the GUI mode is Advanced or Dev):<br /><br />The File Lists:<br /><br />Download Speed Column: A kb/s (B kb/s) [C/D]<br />A = Download Rate<br />B = Download Rate including overhead<br />C = Active Downloads<br />D = Waiting Downloads<br /><br />Downloaded Bytes Column: A - B<br />A = Downloaded Bytes<br />B = estimated time till download completion<br /><br />Upload Speed Column: A kb/s (B kb/s) [C/D]<br />A = Upload Rate<br />B = Upload Rate including overhead<br />C = Active Uploads<br />D = Waiting Uploads<br /><br />Uploaded Bytes Column: A - B<br />A = Uploaded Bytes<br />B = estimated time till 1:1 Sharing ratio<br /><br /><br />The Transfer Lists:<br /><br />Download Speed Column: A kb/s (B kb/s) - C/D<br />A = Download Rate<br />B = Download Rate including overhead<br />C = Requested Bytes<br />D = request coutn adding up to C bytes of data<br /><br />Downloaded Bytes Column A <br />A = Downloaded Bytes in total<br /><br /><br />Upload Speed Column: A kb/s (B kb/s) - C/D !*#<br />A = Upload Rate<br />B = Upload Rate including overhead<br />C = Bytes Cached in socket for Upload<br />D = individual request count that adds up to the C bytes of data<br />! = the uplaod slot is a focus slot<br />* = the upload slot is a trickle slot<br /># = the slot is blocking<br /><br />Uploaded Bytes Column A / B<br />A = Uploaded Bytes in total<br />B = Uploaded bytes during this upload session<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sun Jul 28, 2013 2:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-07-28T12:07:08+01:00</updated>
<published>2013-07-28T12:07:08+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16499#p16499</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16499#p16499"/>
<title type="html"><![CDATA[Data Counters]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3310&amp;p=16499#p16499"><![CDATA[
Hi,<br /><br />The new data counters are a bit confusing, can you give me an explanation so I can test if they works ?<br /><br />I mean in the upload and download speed, downloaded and uploaded, in both windows: download list and transfers for every client.<br /><br />Thanks<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Sun Jul 28, 2013 12:07 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php