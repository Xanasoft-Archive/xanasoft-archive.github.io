<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=161&amp;t=3474" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2014-10-14T09:02:00+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=161&amp;t=3474</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2014-10-14T09:02:00+01:00</updated>
<published>2014-10-14T09:02:00+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3474&amp;p=17699#p17699</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3474&amp;p=17699#p17699"/>
<title type="html"><![CDATA[NeoLoader 0.48 Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3474&amp;p=17699#p17699"><![CDATA[
<blockquote><div><cite>newmax wrote:</cite><br />Thanks David <img class="smilies" src="http://forum.neoloader.com/images/smilies/smile.png" alt=":)" title=":)" /><br />Any news for mac osx version ?<br /></div></blockquote><br />I need a Virtual machien with an up to date Mac OS X to build a new release and I didn't head time yet to setup/find one.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Tue Oct 14, 2014 9:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[newmax]]></name></author>
<updated>2014-10-13T16:38:51+01:00</updated>
<published>2014-10-13T16:38:51+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3474&amp;p=17695#p17695</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3474&amp;p=17695#p17695"/>
<title type="html"><![CDATA[NeoLoader 0.48 Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3474&amp;p=17695#p17695"><![CDATA[
Thanks David <img class="smilies" src="http://forum.neoloader.com/images/smilies/smile.png" alt=":)" title=":)" /><br />Any news for mac osx version ?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3760">newmax</a> — Mon Oct 13, 2014 4:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2014-10-11T19:04:59+01:00</updated>
<published>2014-10-11T19:04:59+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3474&amp;p=17689#p17689</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3474&amp;p=17689#p17689"/>
<title type="html"><![CDATA[NeoLoader 0.48 Release]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3474&amp;p=17689#p17689"><![CDATA[
<img src="http://update.neoloader.to/Resources/Splash.jpg" class="postimage" alt="Image" /><br /><br /><br />Release 0.48<br />======================<br />Priority system is now working also on upload<br />fixed: Create MultiFile its not greyed out when no file its selected<br />added combo box for "Mid state in separate core setting should be removed"<br />With separate core the UI instances is now limited to 1<br />fixed: Chunk Selection Bar overlay its not working correctly and maybe also chunk selection (imho we should use "zz" system)<br />fixed statistics bug (8. statistics bug)<br />fixed pie charts in summary page to always show 100% even if networks got dissabled<br />fixed: Check for update setting its ignored with separate core, updates are checked at every UI launch<br />fixed: 2. lose speed bug<br />added: write lock for files being verifyed to prevent corruption in some cases<br />fixed: 11. remaining bug<br />added option to temporary change bandwidth limits using tray menu<br />fixed crash in ipc system on shutdown<br />fixed 2. <a href="https://mega.co.nz/#!ZoUWVKSY!RI5hvF...MjYazGRjQLSIc0" class="postlink">https://mega.co.nz/#!ZoUWVKSY!RI5hvF...MjYazGRjQLSIc0</a><br />added default option to simplify grabber interface<br />added check to ensure master hash can not be dropped<br />grabber list is now saved on exit<br /><br />Additionally to Torrent and eMule file sharing, NeoLoader now also has its own sharing network.<br /><strong><span style="color: #ff0000">NeoShare </span></strong>is a anonymous P2P filesharing network that uses NeoKad to route packets between cryptographic endpoints. The implementaion provides TOR/I2P anonymization to those who want it, as well as plausible deniability to all other users. A node initiates a secure comminucation channel which is indistinguishable form a node mearly relaying data frames. The data frames are relayed using a unidirectional convergent mesh routing towards the tunnel exchange points in the target area. This method ensures that slow relaying nodes do not pose a bottle neck in the tunnel. All data is transferred using end-to-end encryption (using EC-Diffie-Hellman key exchange and AES 256 bit encryption). Additionally all communication between each hop is encrypted so that a traffic analysis can not reveal the route of data frames through the network.<br /><br />To sped up your Torrent and eMule Downloads:<br />We have a unique feature called "<span style="color: #ff0000"><strong>Hoster Cache</strong></span>". When you add your hoster accounts (free or premium) to NeoLoader, your client will upload data from the Torrent and ed2k network to file hosters. Other NeoLoader clients can then download the data directly from hosters. So the uploader multiplies his own upload bandwith by using hosters as a "cache" to spread files. You can test our new Hoster Cache Feature using this <strong><a href="http://link.neoloader.to/magnet:?dn=TestFile%20-%20ubuntu-12.10-desktop-i386.rar&xl=773283930&xt=urn:neo:1Gc3FjgosvlcW_VbYpe85EwbzWLbLraNVQkacG-kcrs&xt=urn:btih:bb460a58cdd703acf5a21bf4629be4bdd9eb9deb&tr=udp://tracker.publicbt.com:80/announce" class="postlink">TestFile</a></strong>. You find the password to your NeoLoader under Settings -&gt; General. (Address can be left empty, assuming NeoLoader is running on the same host as your WebBrowser).<br /><strong><a href="http://link.neoloader.to/magnet:?dn=TestFile%20-%20ubuntu-12.10-desktop-i386.rar&xl=773283930&xt=urn:neo:1Gc3FjgosvlcW_VbYpe85EwbzWLbLraNVQkacG-kcrs&xt=urn:btih:bb460a58cdd703acf5a21bf4629be4bdd9eb9deb&tr=udp://tracker.publicbt.com:80/announce" class="postlink">Download TestFile</a></strong><br /><br /><br /><br /><strong>Downloads</strong><br /><a href="http://update.neoloader.to/win/x86/NeoInstaller.exe" class="postlink"><img src="http://neoloader.to/images/logo_windows.png" class="postimage" alt="Image" />Windows</a><br /><a href="http://update.neoloader.to/linux/x86/neoloader_2014.0_i386.deb" class="postlink"><img src="http://neoloader.to/images/logo_linux.png" class="postimage" alt="Image" />Linux</a><br /><a href="http://update.neoloader.to/linux/x64/neoloader_2014.0_amd64.deb" class="postlink"><img src="http://neoloader.to/images/logo_linux.png" class="postimage" alt="Image" />Linux (x64)</a><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Oct 11, 2014 7:04 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php