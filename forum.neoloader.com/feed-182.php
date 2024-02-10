<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=161&amp;t=3258" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-04-21T12:44:55+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=161&amp;t=3258</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-04-21T12:44:55+01:00</updated>
<published>2013-04-21T12:44:55+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3258&amp;p=16196#p16196</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3258&amp;p=16196#p16196"/>
<title type="html"><![CDATA[NeoLoader 0.30 Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3258&amp;p=16196#p16196"><![CDATA[
Release 0.30b<br />======================<br />fixed bug in hash publishment<br />Added connection limit on incomming connections<br />Added timeout to captcha dialog<br />fixed firewalled chack in neokad<br />fixed NAT-T bug ine NeoKad<br />fixed crash bug in DHT<br />fixed crash bug in tracker handling<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sun Apr 21, 2013 12:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-04-20T12:00:18+01:00</updated>
<published>2013-04-20T12:00:18+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3258&amp;p=16170#p16170</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3258&amp;p=16170#p16170"/>
<title type="html"><![CDATA[NeoLoader 0.30 Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3258&amp;p=16170#p16170"><![CDATA[
<img src="http://update.neoloader.to/Resources/Splash.jpg" class="postimage" alt="Image" /><br /><br />Release 0.30<br />======================<br />Finished implementaion of Neo Share<br />NeoKad Updated to 0.07<br /><br />Additionally to Torrent and eMule file sharing, NeoLoader now also has its own sharing network.<br /><strong><span style="color: #ff0000">NeoShare </span></strong>is a anonymous P2P filesharing network that uses NeoKad to route packets between cryptographic endpoints. The implementaion provides TOR/I2P anonymization to those who want it, as well as plausible deniability to all other users. A node initiates a secure comminucation channel which is indistinguishable form a node mearly relaying data frames. The data frames are relayed using a unidirectional convergent mesh routing towards the tunnel exchange points in the target area. This method ensures that slow relaying nodes do not pose a bottle neck in the tunnel. All data is transferred using end-to-end encryption (using EC-Diffie-Hellman key exchange and AES 256 bit encryption). Additionally all communication between each hop is encrypted so that a traffic analysis can not reveal the route of data frames through the network.<br /><br />To sped up your Torrent and eMule Downloads:<br />We have a unique feature called "<span style="color: #ff0000"><strong>Hoster Cache</strong></span>". When you add your hoster accounts (free or premium) to NeoLoader, your client will upload data from the Torrent and ed2k network to file hosters. Other NeoLoader clients can then download the data directly from hosters. So the uploader multiplies his own upload bandwith by using hosters as a "cache" to spread files. You can test our new Hoster Cache Feature using this <strong><a href="http://link.neoloader.to/magnet:?dn=TestFile%20-%20ubuntu-12.10-desktop-i386.rar&xl=773283930&xt=urn:neo:1Gc3FjgosvlcW_VbYpe85EwbzWLbLraNVQkacG-kcrs&xt=urn:btih:bb460a58cdd703acf5a21bf4629be4bdd9eb9deb&tr=udp://tracker.publicbt.com:80/announce" class="postlink">TestFile</a></strong>. You find the password to your NeoLoader under Settings -&gt; General. (Address can be left empty, assuming NeoLoader is running on the same host as your WebBrowser).<br /><strong><a href="http://link.neoloader.to/magnet:?dn=TestFile%20-%20ubuntu-12.10-desktop-i386.rar&xl=773283930&xt=urn:neo:1Gc3FjgosvlcW_VbYpe85EwbzWLbLraNVQkacG-kcrs&xt=urn:btih:bb460a58cdd703acf5a21bf4629be4bdd9eb9deb&tr=udp://tracker.publicbt.com:80/announce" class="postlink">Download TestFile</a></strong><br /><br /><strong>Downloads</strong><br /><a href="http://update.neoloader.to/win/NeoSetup.exe" class="postlink"><img src="http://neoloader.to/images/logo_windows.png" class="postimage" alt="Image" />Windows</a><br /><a href="http://update.neoloader.to/mac/NeoLoader.zip" class="postlink"><img src="http://neoloader.to/images/logo_apple.png" class="postimage" alt="Image" />Mac OS</a><br /><a href="http://update.neoloader.to/linux/ubuntu.x64/NeoLoader.tar" class="postlink"><img src="http://neoloader.to/images/logo_linux.png" class="postimage" alt="Image" />Linux</a><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Apr 20, 2013 12:00 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php