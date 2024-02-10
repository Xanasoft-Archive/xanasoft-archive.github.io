<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=161&amp;t=3455" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2014-09-06T12:40:03+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=161&amp;t=3455</id>
<entry>
<author><name><![CDATA[Axl_Mas]]></name></author>
<updated>2014-09-06T12:40:03+01:00</updated>
<published>2014-09-06T12:40:03+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3455&amp;p=17655#p17655</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3455&amp;p=17655#p17655"/>
<title type="html"><![CDATA[NeoLoader 0.45c Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3455&amp;p=17655#p17655"><![CDATA[
Hi DavidXanatos,<br /><br />This version works well and stable on lubuntu 64bit, many thanks!<br />The only one issue I found is cpu usage...20% on turionX2 64 2400mhz.<br />200 kb/s max upload<br /><br />Regards <img class="smilies" src="http://forum.neoloader.com/images/smilies/wink.png" alt=";)" title=";)" /><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3535">Axl_Mas</a> — Sat Sep 06, 2014 12:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2014-06-22T14:54:34+01:00</updated>
<published>2014-06-22T14:54:34+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3455&amp;p=17553#p17553</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3455&amp;p=17553#p17553"/>
<title type="html"><![CDATA[NeoLoader 0.45c Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3455&amp;p=17553#p17553"><![CDATA[
<img src="http://update.neoloader.to/Resources/Splash.jpg" class="postimage" alt="Image" /><br /><br /><br />Release 0.45c<br />===================================<br />reworked file handling to remove bottlenecks not even 30000 files are not a problem<br />fixed critikal neo kad bug in transport obfuscation code<br /><br /><br />Release 0.45a<br />===================================<br />added priority download system<br />reworked file streaming<br />improved download start when allogating large files<br />added preallocation limit, a.k.a. negnegably smal files are not being prealocated (init seting)<br />fixed issue causing invalid hashing after adding a multifile from grabber<br /><br /><br /><br />Additionally to Torrent and eMule file sharing, NeoLoader now also has its own sharing network.<br /><strong><span style="color: #ff0000">NeoShare </span></strong>is a anonymous P2P filesharing network that uses NeoKad to route packets between cryptographic endpoints. The implementaion provides TOR/I2P anonymization to those who want it, as well as plausible deniability to all other users. A node initiates a secure comminucation channel which is indistinguishable form a node mearly relaying data frames. The data frames are relayed using a unidirectional convergent mesh routing towards the tunnel exchange points in the target area. This method ensures that slow relaying nodes do not pose a bottle neck in the tunnel. All data is transferred using end-to-end encryption (using EC-Diffie-Hellman key exchange and AES 256 bit encryption). Additionally all communication between each hop is encrypted so that a traffic analysis can not reveal the route of data frames through the network.<br /><br />To sped up your Torrent and eMule Downloads:<br />We have a unique feature called "<span style="color: #ff0000"><strong>Hoster Cache</strong></span>". When you add your hoster accounts (free or premium) to NeoLoader, your client will upload data from the Torrent and ed2k network to file hosters. Other NeoLoader clients can then download the data directly from hosters. So the uploader multiplies his own upload bandwith by using hosters as a "cache" to spread files. You can test our new Hoster Cache Feature using this <strong><a href="http://link.neoloader.to/magnet:?dn=TestFile%20-%20ubuntu-12.10-desktop-i386.rar&xl=773283930&xt=urn:neo:1Gc3FjgosvlcW_VbYpe85EwbzWLbLraNVQkacG-kcrs&xt=urn:btih:bb460a58cdd703acf5a21bf4629be4bdd9eb9deb&tr=udp://tracker.publicbt.com:80/announce" class="postlink">TestFile</a></strong>. You find the password to your NeoLoader under Settings -&gt; General. (Address can be left empty, assuming NeoLoader is running on the same host as your WebBrowser).<br /><strong><a href="http://link.neoloader.to/magnet:?dn=TestFile%20-%20ubuntu-12.10-desktop-i386.rar&xl=773283930&xt=urn:neo:1Gc3FjgosvlcW_VbYpe85EwbzWLbLraNVQkacG-kcrs&xt=urn:btih:bb460a58cdd703acf5a21bf4629be4bdd9eb9deb&tr=udp://tracker.publicbt.com:80/announce" class="postlink">Download TestFile</a></strong><br /><br /><br /><br /><strong>Downloads</strong><br /><a href="http://update.neoloader.to/win/x86/NeoInstaller.exe" class="postlink"><img src="http://neoloader.to/images/logo_windows.png" class="postimage" alt="Image" />Windows</a><br /><a href="http://update.neoloader.to/linux/x86/neoloader_2014.0_i386.deb" class="postlink"><img src="http://neoloader.to/images/logo_linux.png" class="postimage" alt="Image" />Linux</a><br /><a href="http://update.neoloader.to/linux/x64/neoloader_2014.0_amd64.deb" class="postlink"><img src="http://neoloader.to/images/logo_linux.png" class="postimage" alt="Image" />Linux (x64)</a><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sun Jun 22, 2014 2:54 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php