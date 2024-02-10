<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=171&amp;t=3321" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-09-28T13:06:17+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=171&amp;t=3321</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-09-28T13:06:17+01:00</updated>
<published>2013-09-28T13:06:17+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16635#p16635</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16635#p16635"/>
<title type="html"><![CDATA[0.40 (PrivateBeta) - Point of situation]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16635#p16635"><![CDATA[
- In the 1st wizard on the right of tracing slide, is wrote Log instead of Low.<br />fixed<br /><br />- On right click on client Cancel Transfer should be called Drop Source... <br />Cancel Transfer is fine for now<br /><br /><br />- Closing the connection manager = close neoloader [opened from tray and closed it... neoloader closed too without any prompt]<br />fixed in 0.40b<br /><br />- WebUI, it's stucked at loading<br />you already reported this its a know bug and will be fixed at some point<br /><br />- Is not possible run NeoLoader on linux<br />on some distributions it works fine, it needs more testing to find out the problematic dependancies<br /><br /><br />- Removing a multi file the folders are not deleted and sometimes you must click remove 2 times.<br />not removing folders is a known bug on the list <a href="http://board.neoloader.com/bugs/3276-known-bug-list-continuously-updated.html" class="postlink">http://board.neoloader.com/bugs/3276-known-bug-list-continuously-updated.html</a><br />removing twice is intended, first time otu kill only the multifile, the second time you kill all sub files,<br />how else woudl you remove a multifile without killing its content?<br /><br />- Log is not autoscrolled, a switch up on the log that turn it off/on would be helpful.<br />it should switch between autpo scroll and nor auto scroll depanding on the cursor position, if its at the botom autoscrol is on else its of<br /><br /><br />to be tested:<br />- After auto-update it doesn't auto start. (I mean update scheduled and neoloader.exe launch) [tested from 0.39 to 0.40]<br />- ReHash all files after update [from 0.39 to 0.40]<br /><br /><br />still work in progress:<br />- 10Kb/s in overhead measure are missing. (sometimes it does some jump on 15+)<br />- Upload unstability may be due to overhead caused from download speed. Aka, download speed is unstable cause unpload unstability due to variation of overhead, or upload overhead falling down and slots don't get bandwitch when download speed fall down.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Sep 28, 2013 1:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-09-09T12:59:25+01:00</updated>
<published>2013-09-09T12:59:25+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16601#p16601</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16601#p16601"/>
<title type="html"><![CDATA[0.40 (PrivateBeta) - Point of situation]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16601#p16601"><![CDATA[
Also...<br /><br />- Removing a multi file the folders are not deleted and sometimes you must click remove 2 times.<br />- Log is not autoscrolled, a switch up on the log that turn it off/on would be helpful.<br />- Still a lot of overhead not counted.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Mon Sep 09, 2013 12:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-08-27T12:17:55+01:00</updated>
<published>2013-08-27T12:17:55+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16575#p16575</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16575#p16575"/>
<title type="html"><![CDATA[0.40 (PrivateBeta) - Point of situation]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16575#p16575"><![CDATA[
Is ugly :P<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Tue Aug 27, 2013 12:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-08-27T11:35:23+01:00</updated>
<published>2013-08-27T11:35:23+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16574#p16574</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16574#p16574"/>
<title type="html"><![CDATA[0.40 (PrivateBeta) - Point of situation]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16574#p16574"><![CDATA[
the column shows URL's so every string has to be proeprly url encoded, that means no spaces and no special charakters<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Tue Aug 27, 2013 11:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-08-27T09:15:24+01:00</updated>
<published>2013-08-27T09:15:24+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16573#p16573</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16573#p16573"/>
<title type="html"><![CDATA[0.40 (PrivateBeta) - Point of situation]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16573#p16573"><![CDATA[
Forgot to say that actually the others ed2k nickname are bugged, any "special" character is not readable (: / - .), and if they stay AFTER, instead before the ip we need an huge columm to read them,  I wish you can put them BEFORE the ip address.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Tue Aug 27, 2013 9:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-08-26T12:17:54+01:00</updated>
<published>2013-08-26T12:17:54+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16572#p16572</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16572#p16572"/>
<title type="html"><![CDATA[0.40 (PrivateBeta) - Point of situation]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3321&amp;p=16572#p16572"><![CDATA[
Hi, I did some fast tests on 0.40 and I decided to write a "point of situation", that is a sort of bugs/todo things IMHO.<br /><br />I wish also offi bug list will be updated after this post.<br /><br />Let's start with 2 little things in the UI that doesn't matter too much:<br />- In the 1st wizard on the right of tracing slide, is wrote Log instead of Low.<br />- On right click on client Cancel Transfer should be called Drop Source... and more details about how many time the source is ignored are appreciated<br /><br />Some other low importance issues not UI related:<br />- After auto-update it doesn't auto start. (I mean update scheduled and neoloader.exe launch) [tested from 0.39 to 0.40]<br />- ReHash all files after update [from 0.39 to 0.40]<br /> *It <span style="text-decoration: underline">could</span> be caused from rework of hashing system<br /><br />Following are important things that may cause many problems:<br />- 10Kb/s in overhead measure are missing. (sometimes it does some jump on 15+)<br />- Closing the connection manager = close neoloader [opened from tray and closed it... neoloader closed too without any prompt]<br />- Upload unstability <span style="text-decoration: underline">may be</span> due to overhead caused from download speed. Aka, download speed is unstable cause unpload unstability due to variation of overhead, or upload overhead falling down and slots don't get bandwitch when download speed fall down.<br /><br />What's totally not working:<br />- WebUI, it's stucked at loading <br />- Is not possible run NeoLoader on linux<br /><br />What I did not tested:<br />- Hosters downloading and anything else hoster related<br />- NeoLoader fur MAC (and surely I'll never test it)<br /><br />ps: IT lang file and default columms size/order will be updated before 0.40 final if david x. remember to advise me :P<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Mon Aug 26, 2013 12:17 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php