<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=161&amp;t=3271" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-05-24T19:25:43+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=161&amp;t=3271</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-05-24T19:25:43+01:00</updated>
<published>2013-05-24T19:25:43+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16288#p16288</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16288#p16288"/>
<title type="html"><![CDATA[NeoLoader 0.32 Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16288#p16288"><![CDATA[
Next Release NeoLoader 0.32d<br />======================<br />updated qwt plot library<br />updated qtservices libs <br />updated qjsoin libs<br />updated qbencode libs<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Fri May 24, 2013 7:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-05-23T16:34:32+01:00</updated>
<published>2013-05-23T16:34:32+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16280#p16280</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16280#p16280"/>
<title type="html"><![CDATA[NeoLoader 0.32 Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16280#p16280"><![CDATA[
NeoLoader 0.32b<br />======================<br />Reworked Qt's JavaScript debugger to work with googles V8 engine, for NeoKad Debugging.<br />fixed UTF8 bug in torrent file names (Qt's utf8 conversion suxxx, now done manually and it works)<br />fixed crash bug when canceling a torrent<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Thu May 23, 2013 4:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-05-19T08:59:25+01:00</updated>
<published>2013-05-19T08:59:25+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16273#p16273</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16273#p16273"/>
<title type="html"><![CDATA[NeoLoader 0.32 Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16273#p16273"><![CDATA[
NeoLoader 0.32a<br />======================<br />Fixed rehashing problem on restart (i hope)<br />Fixed unicode bug in filenames<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sun May 19, 2013 8:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-05-18T15:37:57+01:00</updated>
<published>2013-05-18T15:37:57+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16268#p16268</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16268#p16268"/>
<title type="html"><![CDATA[NeoLoader 0.32 Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3271&amp;p=16268#p16268"><![CDATA[
<img src="http://update.neoloader.to/Resources/Splash.jpg" class="postimage" alt="Image" /><br /><br />NeoLoader 0.32<br />======================<br />Reworked Hash conflict detection<br />Fixed bugs in hashing system<br />Reworked endgame mode, sometimes parts did never compelte if some clients send bad data.<br />Fixed file Duplicate handling and detection in multifile torrents<br />Added ipfilter auto update<br /><br />Fixed bug when adding torretn file and file staying in panding state.<br />Reworked BC limit handling to smart self manage references.<br />fixed many bugs reported by Neo26<br /><br /><br />Additionally to Torrent and eMule file sharing, NeoLoader now also has its own sharing network.<br /><strong><span style="color: #ff0000">NeoShare </span></strong>is a anonymous P2P filesharing network that uses NeoKad to route packets between cryptographic endpoints. The implementaion provides TOR/I2P anonymization to those who want it, as well as plausible deniability to all other users. A node initiates a secure comminucation channel which is indistinguishable form a node mearly relaying data frames. The data frames are relayed using a unidirectional convergent mesh routing towards the tunnel exchange points in the target area. This method ensures that slow relaying nodes do not pose a bottle neck in the tunnel. All data is transferred using end-to-end encryption (using EC-Diffie-Hellman key exchange and AES 256 bit encryption). Additionally all communication between each hop is encrypted so that a traffic analysis can not reveal the route of data frames through the network.<br /><br />To sped up your Torrent and eMule Downloads:<br />We have a unique feature called "<span style="color: #ff0000"><strong>Hoster Cache</strong></span>". When you add your hoster accounts (free or premium) to NeoLoader, your client will upload data from the Torrent and ed2k network to file hosters. Other NeoLoader clients can then download the data directly from hosters. So the uploader multiplies his own upload bandwith by using hosters as a "cache" to spread files. You can test our new Hoster Cache Feature using this <strong><a href="http://link.neoloader.to/magnet:?dn=TestFile%20-%20ubuntu-12.10-desktop-i386.rar&xl=773283930&xt=urn:neo:1Gc3FjgosvlcW_VbYpe85EwbzWLbLraNVQkacG-kcrs&xt=urn:btih:bb460a58cdd703acf5a21bf4629be4bdd9eb9deb&tr=udp://tracker.publicbt.com:80/announce" class="postlink">TestFile</a></strong>. You find the password to your NeoLoader under Settings -&gt; General. (Address can be left empty, assuming NeoLoader is running on the same host as your WebBrowser).<br /><strong><a href="http://link.neoloader.to/magnet:?dn=TestFile%20-%20ubuntu-12.10-desktop-i386.rar&xl=773283930&xt=urn:neo:1Gc3FjgosvlcW_VbYpe85EwbzWLbLraNVQkacG-kcrs&xt=urn:btih:bb460a58cdd703acf5a21bf4629be4bdd9eb9deb&tr=udp://tracker.publicbt.com:80/announce" class="postlink">Download TestFile</a></strong><br /><br /><strong>Downloads</strong><br /><a href="http://update.neoloader.to/win/NeoSetup.exe" class="postlink"><img src="http://neoloader.to/images/logo_windows.png" class="postimage" alt="Image" />Windows</a><br /><a href="http://update.neoloader.to/mac/NeoLoader.zip" class="postlink"><img src="http://neoloader.to/images/logo_apple.png" class="postimage" alt="Image" />Mac OS</a><br /><a href="http://update.neoloader.to/linux/ubuntu.x64/NeoLoader.tar" class="postlink"><img src="http://neoloader.to/images/logo_linux.png" class="postimage" alt="Image" />Linux</a><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat May 18, 2013 3:37 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php