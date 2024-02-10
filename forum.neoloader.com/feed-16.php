<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=174&amp;t=3322" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-08-29T18:10:23+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=174&amp;t=3322</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-08-29T18:10:23+01:00</updated>
<published>2013-08-29T18:10:23+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3322&amp;p=16578#p16578</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3322&amp;p=16578#p16578"/>
<title type="html"><![CDATA[eDonkey-Hybride Horde Protocol]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3322&amp;p=16578#p16578"><![CDATA[
<blockquote><div><cite>Neo26 wrote:</cite><br />A list of compatible clients?<br /></div></blockquote><br /><br />eDonkeyHybrid<br />lphant, the original client (befoure the domain hijack)<br /><br />and anyone who adds the protocol extension.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Thu Aug 29, 2013 6:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-08-29T09:14:04+01:00</updated>
<published>2013-08-29T09:14:04+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3322&amp;p=16577#p16577</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3322&amp;p=16577#p16577"/>
<title type="html"><![CDATA[eDonkey-Hybride Horde Protocol]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3322&amp;p=16577#p16577"><![CDATA[
A list of compatible clients?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Thu Aug 29, 2013 9:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-08-28T13:39:27+01:00</updated>
<published>2013-08-28T13:39:27+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3322&amp;p=16576#p16576</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3322&amp;p=16576#p16576"/>
<title type="html"><![CDATA[eDonkey-Hybride Horde Protocol]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3322&amp;p=16576#p16576"><![CDATA[
NeoLoader since version 0.40 supports eDonkey-Hybride's Horde Protocol or at least how I understand it to be supposed to work.<br /><br />A short feature description:<br />The Horde Protocol enables Torrent like piece trading between clients.<br /><br />When a client starts an upload slot to an other client (and booth support the feature), and the initiating client wants to engage in trading it sends a OP_HORDESLOTREQ to the downloader.<br />The downloader has to answer with an P_HORDESLOTREJ if he is not interested or with a OP_HORDESLOTANS and shortly after start uploading back to the initiator.<br />The mutual upload sessions will be maintained as long as booth clients are satisfied with the UL/DL ratio of the two sessions.<br /><br />The normal 9,35 MB session limit is lifted, the sessions may persist until booth sides finish their files.<br /><br />David X.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Wed Aug 28, 2013 1:39 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php