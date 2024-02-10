<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=172" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2016-08-16T00:02:55+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=172</id>
<entry>
<author><name><![CDATA[mph]]></name></author>
<updated>2016-08-16T00:02:55+01:00</updated>
<published>2016-08-16T00:02:55+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6826&amp;p=21893#p21893</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6826&amp;p=21893#p21893"/>
<title type="html"><![CDATA[Feature Requests • Base NeoKad Client/Servant]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6826&amp;p=21893#p21893"><![CDATA[
Neoloader has tons of nice options. I for one am really interested in NeoKad. I really dislike I2P primarily because it is Java based. Same issue with Freenet. I don't even wanna touch TOR. Gnunet is actually pretty neat, but after looking into it I worried about certain aspect of privilege escalation. While the worry may be unwarranted, I am not at the level to establish for myself this as the case. However coming from the GNU community I imagine that I am concerned over nothing. But I don't have that concern with the Neokad.<br /><br />What I am wanting to try, or request, is a base Neokad only client/servant with a minimal curses/ncurses like interface. Or maybe a headless Neokad only client/servant, that could be interfaced remotely via terminal, qt, gtk, wxwidgets, etc. All functionality available via the daemon, with just a need to implement remote clients.<br /><br />I never succeeded in porting Neoloader itself to my operating system. At the time Qt5 wasn't packaged current enough. And I wasn't interested in manually building the Qt5 tools or any Qt tools just for use with Neoloader. I barely use gtk.<br /><br />I don't expect anyone to spend time coding for my lowly request. But I'd love input. I don't even know how active the Neokad network is. Is it gaining a user base? And what is the minimum limit of users before it functions as a network. I'm not asking how many users before it starts anonymizing well, just how many before connectivity is apparent. I've come to understand that kad itself needs 50,000 users, or some really high quantity of nodes, before it functions as a reliable network.<br /><br />Anyway, any response is appreciated.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4416">mph</a> — Tue Aug 16, 2016 12:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2016-06-20T21:19:03+01:00</updated>
<published>2016-06-20T21:19:03+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6819&amp;p=21891#p21891</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6819&amp;p=21891#p21891"/>
<title type="html"><![CDATA[Feature Requests • Re: Connection encryption for eD2K/eMule]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6819&amp;p=21891#p21891"><![CDATA[
We will look into it...<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Mon Jun 20, 2016 9:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neophyte]]></name></author>
<updated>2016-02-07T02:05:38+01:00</updated>
<published>2016-02-07T02:05:38+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6821&amp;p=21878#p21878</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6821&amp;p=21878#p21878"/>
<title type="html"><![CDATA[Feature Requests • User-selectable number of hops]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6821&amp;p=21878#p21878"><![CDATA[
I am not sure I understand how NeoShare works. It is described as Tor-like onion routing yet &quot;<em>the use of variable length tunnels including 0 hoops gives the system the distinct advantage over other anonymous P2P implementations</em>&quot;. How can zero hops ensure anonymity? In Tor documentation it is explained that in order to guarantee anonymity the minimum number of hops has to be three.<br /><br />Is it possible to make the number of hops selectable by user? For example, the default number of hops would be three, but the user would be able to increase the number of hops up to seven. So on the &quot;Select Speed vs Anonymity for NeoShare&quot; slider the first point from the left (the far left point) would mean three hops, the next point would be four hops and so on up to seven hops on the far right end of the slider (the middle position as shown on the following picture would signify five hops)...<br /><br /><br /><img src="http://dist.alternativeto.net/s/6b811d1d-5650-e311-8620-002590a05f5f_3_full.png?format=jpg&amp;width=1900" class="postimage" alt="Image" /><br /><br /><br />As David has already replied to someone, the slider does mean the number of hops, it's just it would be logical to me to be from three hops at least up to seven, and the quoted sentence citing 0 hops confuses me.<br /><br />Can David ar somebody else clarify this for me, please?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4427">Neophyte</a> — Sun Feb 07, 2016 2:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neophyte]]></name></author>
<updated>2016-01-24T01:06:35+01:00</updated>
<published>2016-01-24T01:06:35+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6819&amp;p=21876#p21876</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6819&amp;p=21876#p21876"/>
<title type="html"><![CDATA[Feature Requests • Connection encryption for eD2K/eMule]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6819&amp;p=21876#p21876"><![CDATA[
NeoLoader has connection encryption option for BitTorrent but not for eD2k/eMule (it offers only protocol obfuscation).<br /><br />If I remember correctly, Ekliptor's eMule Applejuice mod had options for protocol encryption too (AES).<br /><br />Why not add that feature to NeoLoader too? It would significantly improve user's privacy (although not anonymity) and prevent MITM attacks. With ever increasing hostility against P2P sharing this feature would be very important.<br /><br />If David and Ekliptor decide to implement it (I certainly hope they will), maybe it would be a good idea to make it so that it can be compatible with Applejuice (in order to maximize potential number of users).<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4427">Neophyte</a> — Sun Jan 24, 2016 1:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[esher]]></name></author>
<updated>2015-07-10T13:48:41+01:00</updated>
<published>2015-07-10T13:48:41+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21774#p21774</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21774#p21774"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21774#p21774"><![CDATA[
yes.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1009">esher</a> — Fri Jul 10, 2015 1:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[OwenBurnett]]></name></author>
<updated>2015-07-10T13:10:12+01:00</updated>
<published>2015-07-10T13:10:12+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21773#p21773</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21773#p21773"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21773#p21773"><![CDATA[
<blockquote><div><cite>esher wrote:</cite><br />ok, thanks for your time/attention.<br /></div></blockquote><br /><br />Mhhh... what do you think, should we avoid to reduce the tickets if you're the only complete source, even if there are a lot of requests ?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4378">OwenBurnett</a> — Fri Jul 10, 2015 1:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[esher]]></name></author>
<updated>2015-07-10T12:59:09+01:00</updated>
<published>2015-07-10T12:59:09+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21772#p21772</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21772#p21772"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21772#p21772"><![CDATA[
ok, thanks for your time/attention.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1009">esher</a> — Fri Jul 10, 2015 12:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[OwenBurnett]]></name></author>
<updated>2015-07-10T12:40:25+01:00</updated>
<published>2015-07-10T12:40:25+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21771#p21771</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21771#p21771"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21771#p21771"><![CDATA[
<blockquote><div><cite>esher wrote:</cite><br />you maybe misunderstood last sentence. im not sure...<br />i meant as long my nl is the ONLY complete source, the &quot;tickets&quot; won't decrease  even in case of 5k requests.<br /></div></blockquote><br /><br />mhhhh... we should be using 1 ticket each client for the lower priority and maybe 20-30 ticket each client for the higher, I don't know exactly how it is right now, must wait for DavidX <img class="smilies" src="http://forum.neoloader.com/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4378">OwenBurnett</a> — Fri Jul 10, 2015 12:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[esher]]></name></author>
<updated>2015-07-10T11:51:31+01:00</updated>
<published>2015-07-10T11:51:31+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21770#p21770</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21770#p21770"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21770#p21770"><![CDATA[
you maybe misunderstood last sentence. im not sure...<br />i meant as long my nl is the ONLY complete source, the &quot;tickets&quot; won't decrease  even in case of 5k requests.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1009">esher</a> — Fri Jul 10, 2015 11:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[OwenBurnett]]></name></author>
<updated>2015-07-10T02:22:57+01:00</updated>
<published>2015-07-10T02:22:57+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21769#p21769</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21769#p21769"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21769#p21769"><![CDATA[
<blockquote><div><cite>esher wrote:</cite><br />obvious, if there is just 1 complete source, me.<br /></div></blockquote><br /><br />I understand your point, but we cannot force the other clients to upload more, expecially more than you <img class="smilies" src="http://forum.neoloader.com/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />(or to manage the bandwitch in a smarter way)<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4378">OwenBurnett</a> — Fri Jul 10, 2015 2:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[esher]]></name></author>
<updated>2015-07-09T15:00:00+01:00</updated>
<published>2015-07-09T15:00:00+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21766#p21766</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21766#p21766"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21766#p21766"><![CDATA[
<blockquote><div><cite>OwenBurnett wrote:</cite><br />Its pratically impossible to trace &quot;filespeed&quot; accurately enough to make a priority system based on that...<br /></div></blockquote><br /><br />bummer.<br /><br /><blockquote><div><cite>OwenBurnett wrote:</cite><br />If a file is requested by 100 clients, while another one is requested by 5, its obviously this last one that need some extra &quot;tickets&quot; to get a chance to get in the upload slots.<br /></div></blockquote><br /><br />obvious.<br /><br /><blockquote><div><cite>OwenBurnett wrote:</cite><br />But on the other side, we should not make a brutal difference otherwise we won't upload the popular files in that situation.<br /></div></blockquote><br /><br />fair enough.<br /><br /><blockquote><div><cite>OwenBurnett wrote:</cite><br />file with more requests usually get more upload slot ? Well, its kinda obvious...<br /></div></blockquote><br /><br />obvious, if there is just 1 complete source, me.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1009">esher</a> — Thu Jul 09, 2015 3:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[OwenBurnett]]></name></author>
<updated>2015-07-09T13:20:04+01:00</updated>
<published>2015-07-09T13:20:04+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21765#p21765</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21765#p21765"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21765#p21765"><![CDATA[
<blockquote><div><cite>esher wrote:</cite><br />btw the current random queue with default priority  is basically a &quot;follow the majority&quot; mode . it's bad, even from your point of view because file rarity is brutally inrelevant.<br /></div></blockquote><br /><br />What do you mean with &quot;follow the majorty&quot; ? That file with more requests usually get more upload slot ? Well, its kinda obvious... to avoid that we should increase the &quot;tickets&quot; for the rare files. But on the other side, we should not make a brutal difference otherwise we won't upload the popular files in that situation.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4378">OwenBurnett</a> — Thu Jul 09, 2015 1:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[esher]]></name></author>
<updated>2015-07-09T13:01:40+01:00</updated>
<published>2015-07-09T13:01:40+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21764#p21764</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21764#p21764"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21764#p21764"><![CDATA[
btw the current random queue with default priority  is basically a &quot;follow the majority&quot; mode . it's bad, even from your point of view because file rarity is brutally inrelevant.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1009">esher</a> — Thu Jul 09, 2015 1:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[OwenBurnett]]></name></author>
<updated>2015-07-08T01:11:12+01:00</updated>
<published>2015-07-08T01:11:12+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21763#p21763</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21763#p21763"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21763#p21763"><![CDATA[
The point is not just the speed (where the system works in most of cases though, because we have to assume that the majority of the time an higher number of sources has a potential higher speed, exception are really really rare), but the lifetime of the file. With 2 sources only, it may be avaible only at certain times because both clients might be offline for days, or might disappear completely... that's why rare files really need a push, to increase the number of sources (with full file) avaible.<br /><br />Its pratically impossible to trace &quot;filespeed&quot; accurately enough to make a priority system based on that...<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4378">OwenBurnett</a> — Wed Jul 08, 2015 1:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[esher]]></name></author>
<updated>2015-07-07T12:40:54+01:00</updated>
<published>2015-07-07T12:40:54+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21762#p21762</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21762#p21762"/>
<title type="html"><![CDATA[Feature Requests • Re: Upload priority proposal]]></title>

<category term="Feature Requests" scheme="http://forum.neoloader.com/viewforum.php?f=172" label="Feature Requests"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6807&amp;p=21762#p21762"><![CDATA[
iirc neomule worked pretty much as you just described, the idea was good but it poorly failed in some situation.<br />1. all files with one request were pushed massively. Did they really need that push? i tried to search from a freind home same files and not all of them needed a particular push. <br />2. whenever you had more requests for the same file, u could often see the requesters were all stuck at the same % with the same parts. this files had no chance to be pushed. the more requesters got stuck at that point the lower the fil prio went.<br /><br />relying on complete sources count from source Exchange is failing because you know, fine, there are 9 sources + me, but they clearly made poor priority choices. and reverse when there were 2 sources + me... there could be a good sharer.<br /><br />i think we need something highly dynamic and crossprotocl effective. edit: or non crossprotocol effective... who cares!? <img class="smilies" src="http://forum.neoloader.com/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1009">esher</a> — Tue Jul 07, 2015 12:40 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php