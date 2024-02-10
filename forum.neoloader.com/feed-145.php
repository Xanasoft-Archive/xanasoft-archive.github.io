<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=81&amp;t=3380" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-12-16T22:55:07+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=81&amp;t=3380</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-12-16T22:55:07+01:00</updated>
<published>2013-12-16T22:55:07+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3380&amp;p=17083#p17083</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3380&amp;p=17083#p17083"/>
<title type="html"><![CDATA[Why should I use neoloader?]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3380&amp;p=17083#p17083"><![CDATA[
NeoLoaders BitTorrent and Ed2k support is state of the art and we support all relevant protocol extensions for this networks.<br /><br />About file hosting, NeoLoader supports 2 modes of operation the classical Split archive / Solid file like JDownloader and a new hash based exchangeable multi part scheme that is similar to how P2P works, just that the parts are transfered to and from hosters and not other peers.<br />So you enter a magnet link with a Neo hash and NeoLoader can find all needed parts using a decentralized DHT/Kademlia like infrastructure and download all needed parts from hosters.<br />The way the parts are uploaded makes them perfectly interchangeable like in P2P, it also provides a keyword based download search, it basically gives you a P2P behavior with the security and speed of file Hosters.<br /><br />NeoLoader is also capable of using its Kademlia/DHT network to find hashes for a given file for different networks, so that if it happens that all or some needed hoster links are down NeoLoader can download the missing parts from ed2k or BT. That also enables to download one file form Ed2k and BT at the same time....<br /><br />This capability is also used in the opposite direction to aid P2P downloads by caching often requested parts on hosters such that other neos can download them faster from there.<br /><br />And finally we have our new Anonymous filesharing system NeoShare, so to say Neo is an AIO software that in addition has a kind of "next gen anonymous BT" <img class="smilies" src="http://forum.neoloader.com/images/smilies/biggrin.png" alt=":D" title=":D" /><br /><br />There is also a longer interview available where we explain Neos novel feature in much more detail: <a href="http://www.emule-mods.it/forum/index.php?topic=2386.0" class="postlink">Intervista agli sviluppatori di NeoLoader</a><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Mon Dec 16, 2013 10:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[untore]]></name></author>
<updated>2013-12-16T13:49:00+01:00</updated>
<published>2013-12-16T13:49:00+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3380&amp;p=17075#p17075</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3380&amp;p=17075#p17075"/>
<title type="html"><![CDATA[Why should I use neoloader?]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3380&amp;p=17075#p17075"><![CDATA[
Soo...the only p2p I am using right now is torrents (tixati), while file hosting time to time (jdownloader). Recently i checked what's up with emule, and found out about neoloader. I understand this wants to be a kind of AIO software, but leaving alone the e2dk implementation of yours, why would somebody switch to neoloader for torrents and file hosting. What is the state of these features? Can they really compete with the awesome DHT support of tixati and its fine grain options, or the big ass plugins of jdownloader and its years of experience? <br /><br />Wouldn't it have been better to just focus on the next gen edk2 instead of trying to do a AIO software? (which anyway no one really likes in the end)<br /><br />Just my 2cents<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3620">untore</a> — Mon Dec 16, 2013 1:49 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php