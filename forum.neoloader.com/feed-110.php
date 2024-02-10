<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=172&amp;t=6791" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2015-03-29T08:48:24+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=172&amp;t=6791</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-03-29T08:48:24+01:00</updated>
<published>2015-03-29T08:48:24+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21652#p21652</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21652#p21652"/>
<title type="html"><![CDATA[Re: multi-IP]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21652#p21652"><![CDATA[
Ok,<br />I will need to think about how to do that the best way.<br /><br />Neo's internal layout would allow to have multiple client objects internally for each one source object, but since a VM is needed anyways for the login,<br />it may be more convenient to go again with a voodoo approach.<br /><br />Multiple client objects would be the most elegant solution but also the most complicated one, and it would add some CPU/RAM overhead for use also without this feature.<br /><br />The voodoo approach needs multiple full Neos to run but is simpler to implement as I only need to redirect the IO operations and duplicate the file list.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sun Mar 29, 2015 8:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[enOehTsIsihT]]></name></author>
<updated>2015-03-29T07:58:37+01:00</updated>
<published>2015-03-29T07:58:37+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21650#p21650</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21650#p21650"/>
<title type="html"><![CDATA[Re: multi-IP]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21650#p21650"><![CDATA[
<blockquote><div><cite>DavidXanatos wrote:</cite><br />I see....<br /><br />ok, hmm... <br />do you want the feature to work like in your video a.k.a. LanCast / Local peer discovers,<br />or do you want it o work the VooDoo way a.k.a. without the clients on the VM having to keep the files on the VHD?<br /><br />David<br /></div></blockquote><br />I want it o work the VooDoo way a.k.a. without the clients on the VM having to keep the files on the VHD.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1087">enOehTsIsihT</a> — Sun Mar 29, 2015 7:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-03-29T07:35:19+01:00</updated>
<published>2015-03-29T07:35:19+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21649#p21649</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21649#p21649"/>
<title type="html"><![CDATA[Re: multi-IP]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21649#p21649"><![CDATA[
I see....<br /><br />ok, hmm... <br />do you want the feature to work like in your video a.k.a. LanCast / Local peer discovers,<br />or do you want it o work the VooDoo way a.k.a. without the clients on the VM having to keep the files on the VHD?<br /><br />David<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sun Mar 29, 2015 7:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[enOehTsIsihT]]></name></author>
<updated>2015-03-29T03:44:41+01:00</updated>
<published>2015-03-29T03:44:41+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21648#p21648</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21648#p21648"/>
<title type="html"><![CDATA[Re: multi-IP]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21648#p21648"><![CDATA[
That makes a difference for all downloads.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1087">enOehTsIsihT</a> — Sun Mar 29, 2015 3:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-03-28T19:03:27+01:00</updated>
<published>2015-03-28T19:03:27+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21647#p21647</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21647#p21647"/>
<title type="html"><![CDATA[Re: multi-IP]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21647#p21647"><![CDATA[
Does that make a difference for torrents for you or only for ed2k downloads.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Mar 28, 2015 7:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[enOehTsIsihT]]></name></author>
<updated>2015-03-28T18:53:19+01:00</updated>
<published>2015-03-28T18:53:19+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21645#p21645</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21645#p21645"/>
<title type="html"><![CDATA[Re: multi-IP]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21645#p21645"><![CDATA[
The function can let neoloader use bandwidth effectively.<br />It  seem like neomule's voodoo,but it don't need to  run  neoloaders<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1087">enOehTsIsihT</a> — Sat Mar 28, 2015 6:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-03-28T08:31:37+01:00</updated>
<published>2015-03-28T08:31:37+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21642#p21642</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21642#p21642"/>
<title type="html"><![CDATA[Re: multi-IP]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21642#p21642"><![CDATA[
Hi,<br />Yes thats somewhat possible but ... <br />iirc. you get the other IP by logging in to some service vpn or PPPoE or so...<br />To what extent windows would allow you having multiple parallel vpn connections open idk. that would have to be tested.<br />So it may be that you would still need a VM with a proxy application that the NeoLoader on the host would connect to.<br /><br />Anyways this would be not very trivial to add as than Neo would need to manage internal multiple IP's/identity's ofcause doable but not as strait forwards as it could be.<br /><br />What would be the benefit of such a feature?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Mar 28, 2015 8:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[enOehTsIsihT]]></name></author>
<updated>2015-03-28T05:33:52+01:00</updated>
<published>2015-03-28T05:33:52+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21641#p21641</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21641#p21641"/>
<title type="html"><![CDATA[multi-IP]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6791&amp;p=21641#p21641"><![CDATA[
I download the same files by vmware because I need vmware for geting multi-IP<br /><br />Can neolader be added the funtion for geting multi-IP?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1087">enOehTsIsihT</a> — Sat Mar 28, 2015 5:33 am</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php