<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=172&amp;t=3307" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2014-01-20T08:40:41+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=172&amp;t=3307</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2014-01-20T08:40:41+01:00</updated>
<published>2014-01-20T08:40:41+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=17220#p17220</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=17220#p17220"/>
<title type="html"><![CDATA[pre-allocate all files]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=17220#p17220"><![CDATA[
There is an major issue when writing to an empty many GB large file at the end.<br />such an action triggers windows to fill all the empty space before the written area with 0's and that takes a loooong time, so long infact that the buffer runs full and neo must stop downloading for many minutes for the write operations to finish.<br />Thats not good and the only proper fix is to preallocate the file.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Mon Jan 20, 2014 8:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2014-01-20T06:17:25+01:00</updated>
<published>2014-01-20T06:17:25+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=17219#p17219</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=17219#p17219"/>
<title type="html"><![CDATA[pre-allocate all files]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=17219#p17219"><![CDATA[
It seems that it's implemented instead... why did you changed idea ? It's even not switchable.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Mon Jan 20, 2014 6:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-07-27T16:56:47+01:00</updated>
<published>2013-07-27T16:56:47+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=16495#p16495</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=16495#p16495"/>
<title type="html"><![CDATA[pre-allocate all files]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=16495#p16495"><![CDATA[
I don't see the benefit in prealocating files, since neo uses a asynchronous IO there should be no problems allocating large files on the fly.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Jul 27, 2013 4:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[enOehTsIsihT]]></name></author>
<updated>2013-07-26T04:14:06+01:00</updated>
<published>2013-07-26T04:14:06+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=16493#p16493</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=16493#p16493"/>
<title type="html"><![CDATA[pre-allocate all files]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3307&amp;p=16493#p16493"><![CDATA[
Neoloader may  need the function.<br /><br />And it let user choose that,append or not.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1087">enOehTsIsihT</a> — Fri Jul 26, 2013 4:14 am</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php