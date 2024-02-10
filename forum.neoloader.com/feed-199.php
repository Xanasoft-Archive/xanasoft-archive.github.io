<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=170&amp;t=3164" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-11-01T09:06:52+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=170&amp;t=3164</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-11-01T09:06:52+01:00</updated>
<published>2013-11-01T09:06:52+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=16736#p16736</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=16736#p16736"/>
<title type="html"><![CDATA[query: large numbers of files?]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=16736#p16736"><![CDATA[
hmm... I will release an up to date linux build this weekend.<br />So may by you can just test and tell us if it worked.<br /><br />Cheers<br />David X.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Fri Nov 01, 2013 9:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stoat]]></name></author>
<updated>2013-11-01T01:35:34+01:00</updated>
<published>2013-11-01T01:35:34+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=16735#p16735</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=16735#p16735"/>
<title type="html"><![CDATA[query: large numbers of files?]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=16735#p16735"><![CDATA[
Sorry for the long delay replying.<br /><br /><blockquote><div><cite>Ekliptor wrote:</cite><br />Unfortunately that amount of files will currently cause some problems, if it's possible at all. Once all those files are hashed (assuming you have a few GB of memory to keep all the hashes in the RAM), it will take at least 15 minutes to restart NeoLoader because loading a huge amount of files from the filelist-file from disk takes a very long time...<br /></div></blockquote><br /><br />Most programs take quite a while to start up with this number of files on board<br /><br /><blockquote class="uncited"><div><br />So right now NeoLoader isn't perfectly suited to handle that amount of data. But we definitely plan to work on it.<br />Some questions to better understand your situation and improve the file handling in future versions:<br />In what network do you plan to share your files? Torrent? ed2k? or Hosters? or all of them?<br />Do you know any client that can handle that amount of data without any problems? (including startup time)<br /></div></blockquote><br /><br />Primarily ed2k/Kad, but "all" is a good long-term target.<br /><br />I'm running on Linux, with the main system daemon-only.<br /><br />Amule runs but has trouble with the numbers but takes about an hour to fully share everything.<br /><br />Mldonkey runs fine and has the same problem as amule at startup. When adding files it can take 6-12 hours to notice and start advertising them - that's because the way it scans directories it can take several passes to pick up everything.<br /><br />Both programs have memory footprints of about 2Gb and neither uses very much CPU (the system ~ 8 year old dual 2.1GHz 5140 Xeon server.)<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3098">Stoat</a> — Fri Nov 01, 2013 1:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ekliptor]]></name></author>
<updated>2013-02-18T08:06:27+01:00</updated>
<published>2013-02-18T08:06:27+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=15950#p15950</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=15950#p15950"/>
<title type="html"><![CDATA[query: large numbers of files?]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=15950#p15950"><![CDATA[
Unfortunately that amount of files will currently cause some problems, if it's possible at all. Once all those files are hashed (assuming you have a few GB of memory to keep all the hashes in the RAM), it will take at least 15 minutes to restart NeoLoader because loading a huge amount of files from the filelist-file from disk takes a very long time...<br /><br />So right now NeoLoader isn't perfectly suited to handle that amount of data. But we definitely plan to work on it.<br />Some questions to better understand your situation and improve the file handling in future versions:<br />In what network do you plan to share your files? Torrent? ed2k? or Hosters? or all of them?<br />Do you know any client that can handle that amount of data without any problems? (including startup time)<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4324">Ekliptor</a> — Mon Feb 18, 2013 8:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stoat]]></name></author>
<updated>2013-02-17T22:04:29+01:00</updated>
<published>2013-02-17T22:04:29+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=15948#p15948</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=15948#p15948"/>
<title type="html"><![CDATA[query: large numbers of files?]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3164&amp;p=15948#p15948"><![CDATA[
How well does Neo handle upload areas containing large numbers/volumes of files?<br /><br />In my case, that's ~37000 files and 11TB of data.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3098">Stoat</a> — Sun Feb 17, 2013 10:04 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php