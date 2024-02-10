<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=171" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2016-06-24T16:39:02+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=171</id>
<entry>
<author><name><![CDATA[enOehTsIsihT]]></name></author>
<updated>2016-06-24T16:39:02+01:00</updated>
<published>2016-06-24T16:39:02+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6825&amp;p=21892#p21892</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6825&amp;p=21892#p21892"/>
<title type="html"><![CDATA[Bugs • 0.53 Bugs]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6825&amp;p=21892#p21892"><![CDATA[
1.<br />NeoKad 25.06.2016 00-32-28,292.dmp147 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!E8ckBRoB!gXmJ9ZPtxiuwT76PuZwlAaJFxBGJJs2Z86AtZQmnV70">https://mega.nz/#!E8ckBRoB!gXmJ9ZPtxiuw ... 6AtZQmnV70</a><!-- m --><br /><br />NeoKad 18.07.2016 21-06-20,242.dmp142 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!s4sHHLbT!PP6MDoNOhVZF0LcZuTeQVz4puRarXXfEK5DXh6Byrak">https://mega.nz/#!s4sHHLbT!PP6MDoNOhVZF ... 5DXh6Byrak</a><!-- m --><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1087">enOehTsIsihT</a> — Fri Jun 24, 2016 4:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neophyte]]></name></author>
<updated>2015-12-16T11:01:53+01:00</updated>
<published>2015-12-16T11:01:53+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21875#p21875</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21875#p21875"/>
<title type="html"><![CDATA[Bugs • Re: Cannot connect to NeoShare network]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21875#p21875"><![CDATA[
I can't connect to NeoShare either. NeoKad keeps connecting but it never connects. When I start it manually it gives me the following prompt:<br /><br /> Start local server NeoKad<br />10:54:32: Neo Kad ID: xxxxxxxxxxxxxxxxxxxxxxxxxxxx<br />10:54:32: UTP Socket is listening at port 9058<br />10:54:32: UTPv6 Socket is listening at port 9058<br />10:54:32: SQLite query &quot;pragma synchronous = off&quot; failed: database is locked<br />10:54:32: SQLite query &quot;pragma journal_mode = off&quot; failed: database is locked<br />10:54:32: SQLite query &quot;pragma cache_size = 2000&quot; failed: database is locked<br />10:54:32: SQLite query &quot;SELECT value FROM infos WHERE key = 'ver'&quot; failed: database is locked<br />10:54:32: SQLite query &quot;CREATE TABLE infos (key TEXT, value TEXT, UNIQUE(key) ON CONFLICT REPLACE)&quot; failed: database is locked<br />10:54:32: SQLite query &quot;INSERT INTO infos (key, value) VALUES ('ver', '1')&quot; failed: database is locked<br />10:54:32: SQLite query &quot;DROP TABLE entries&quot; failed: database is locked<br />10:54:32: SQLite query &quot;CREATE TABLE entries (idx INTEGER PRIMARY KEY AUTOINCREMENT, id BLOB, path TEXT, payload BLOB, pub INTEGER, exp INTEGER, ak BLOB, cid BLOB)&quot; failed: database is locked<br />10:54:32: SQLite query &quot;CREATE INDEX id_index ON entries (id)&quot; failed: database is locked<br />10:54:32: Neo Kad Started<br />10:56:13: SQLite query &quot;DELETE FROM entries WHERE exp &lt; :exp&quot; failed: database is locked<br /><br /><br />Other than that, I can see that NeoLoader finds some files on BitTorrent network but it never downloads anything from BT (some BT icons are green, some grey). So, being unable to connect to NeoShare or download torrents, my NeoLoader is working just like any other plain vanilla eMule client.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4427">Neophyte</a> — Wed Dec 16, 2015 11:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[OwenBurnett]]></name></author>
<updated>2015-12-08T15:04:22+01:00</updated>
<published>2015-12-08T15:04:22+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21874#p21874</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21874#p21874"/>
<title type="html"><![CDATA[Bugs • Re: Cannot connect to NeoShare network]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21874#p21874"><![CDATA[
There should be a neonodes.dat in the installer... Otherwise I have no idea about how I got mine <img class="smilies" src="http://forum.neoloader.com/images/smilies/icon_e_confused.gif" alt=":?" title="Confused" /><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4378">OwenBurnett</a> — Tue Dec 08, 2015 3:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Zebra]]></name></author>
<updated>2015-11-27T23:50:51+01:00</updated>
<published>2015-11-27T23:50:51+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21871#p21871</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21871#p21871"/>
<title type="html"><![CDATA[Bugs • Cannot connect to NeoShare network]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21871#p21871"><![CDATA[
I cannot connect to the NeoShare network, probably because there's something wrong with bootstrap server. I wonder why there's no neonodes.dat file bundled in the installer? Can someone here on forum send me that file?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3790">Zebra</a> — Fri Nov 27, 2015 11:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-10-24T12:40:46+01:00</updated>
<published>2015-10-24T12:40:46+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6815&amp;p=21867#p21867</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6815&amp;p=21867#p21867"/>
<title type="html"><![CDATA[Bugs • Re: 0.52a &amp; 0.52c crash]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6815&amp;p=21867#p21867"><![CDATA[
have you tried 0.52d build 166 ?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Oct 24, 2015 12:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[john.poria]]></name></author>
<updated>2015-10-08T21:36:54+01:00</updated>
<published>2015-10-08T21:36:54+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6815&amp;p=21864#p21864</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6815&amp;p=21864#p21864"/>
<title type="html"><![CDATA[Bugs • 0.52a &amp; 0.52c crash]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6815&amp;p=21864#p21864"><![CDATA[
<div class="inline-attachment"><dl class="file"><dt><span class="imageset icon_topic_attach"></span> <a class="postlink" href="./download/file.php?id=667">NeoLoader dmp.zip</a></dt></dl></div><br />I installed 0.52a and worked fine for a while but now crashes on start. I had also installed NeoLoader v0.52c (Build 165), it starts and upgrade but after that crashes.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4401">john.poria</a> — Thu Oct 08, 2015 9:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[enOehTsIsihT]]></name></author>
<updated>2015-09-07T02:01:00+01:00</updated>
<published>2015-09-07T02:01:00+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21818#p21818</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21818#p21818"/>
<title type="html"><![CDATA[Bugs • Re: 0.52 Bugs]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21818#p21818"><![CDATA[
NeoKad 07.09.2015 02-39-14,703.dmp<br />114 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!otVWgRJb!PcobuGwt1MERZNGv63WG8PFMo2OA605QjZIfw_52RhE">https://mega.nz/#!otVWgRJb!PcobuGwt1MER ... ZIfw_52RhE</a><!-- m --><br /><br />NeoKad 07.09.2015 21-33-31,215.dmp<br />116 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!0o8C2bSJ!jKBhs5to2KgGvCTVPM7rHO0l_SQ6Wc3uBisIIbhOW60">https://mega.nz/#!0o8C2bSJ!jKBhs5to2KgG ... isIIbhOW60</a><!-- m --><br /><br />NeoKad 07.09.2015 21-36-03,666.dmp<br />116 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!koFQRaLZ!C1ikw29CLgf1IgzzCNkI4Z6MX8IlmRGchq75n45zGR0">https://mega.nz/#!koFQRaLZ!C1ikw29CLgf1 ... q75n45zGR0</a><!-- m --><br /><br />NeoKad 07.09.2015 21-58-32,771.dmp<br />121 KB<br /><br /><!-- m --><a class="postlink" href="https://mega.nz/#!Jo9zSRhA!rx_iokKjqIBpufmzbjNY7g_3LUQhYX-iQckZFr_r6SU">https://mega.nz/#!Jo9zSRhA!rx_iokKjqIBp ... ckZFr_r6SU</a><!-- m --><br />NeoKad 08.09.2015 15-19-07,363.dmp<br />114 KB<br /><br /><!-- m --><a class="postlink" href="https://mega.nz/#!AltDWZCI!ZfuqygjoReYdIYVUwA4Mw5SJdkQxYHuWUm7A18zlHsY">https://mega.nz/#!AltDWZCI!ZfuqygjoReYd ... m7A18zlHsY</a><!-- m --><br />NeoKad 08.09.2015 16-22-42,425.dmp<br />111 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!g9dHXaYC!nRCPAEywgKX_I-CPTfh0iEnKGRGWGvomtByH9I_ONmc">https://mega.nz/#!g9dHXaYC!nRCPAEywgKX_ ... ByH9I_ONmc</a><!-- m --><br />NeoLoader v0.52c (Build 165) 07.09.2015 02-38-40,538.dmp<br />97 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!QwsQTToY!Hm-D1Q6zswexzeQWqg8nh0ufpA3LJPMYsVU-apORpd0">https://mega.nz/#!QwsQTToY!Hm-D1Q6zswex ... VU-apORpd0</a><!-- m --><br /><br />NeoLoader v0.52c (Build 165) 09.09.2015 19-49-08,022.dmp<br />102 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!5w1iXAjB!34nKDeAlxeZiCN-QqJzkB6NQ30iW9htqqPUunA8PHOc">https://mega.nz/#!5w1iXAjB!34nKDeAlxeZi ... PUunA8PHOc</a><!-- m --><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1087">enOehTsIsihT</a> — Mon Sep 07, 2015 2:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-09-04T19:45:49+01:00</updated>
<published>2015-09-04T19:45:49+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21808#p21808</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21808#p21808"/>
<title type="html"><![CDATA[Bugs • Re: 0.52 Bugs]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21808#p21808"><![CDATA[
<blockquote><div><cite>enOehTsIsihT wrote:</cite><br /><blockquote><div><cite>DavidXanatos wrote:</cite>I see where the crash is but i don't see why it crashes,<br />do you have also crashes with the 32 bit version?<br /></div></blockquote><br /><br />32 bit version<br />NeoLoader v0.52a (Build 163) 29.08.2015 04-18-31,976.dmp<br />105 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!1hU3SToL!OeG8gcxmSYZ9bgN9WchQr1MmKe0TUGTEbWPiMOL3jzA">https://mega.nz/#!1hU3SToL!OeG8gcxmSYZ9 ... WPiMOL3jzA</a><!-- m --><br /><br />NeoLoader v0.52a (Build 163) 30.08.2015 14-28-20,173.dmp<br />120 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!FwcnhYIA!YXXj8dYbPxrbIcdhuUiQEP6r54T5UO_Bi3pnSO0UF80">https://mega.nz/#!FwcnhYIA!YXXj8dYbPxrb ... 3pnSO0UF80</a><!-- m --></div></blockquote><br /><br />I have a rough idea whats the error is but i'm not sure why it happens wil have to look into it more.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Fri Sep 04, 2015 7:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-09-04T19:39:39+01:00</updated>
<published>2015-09-04T19:39:39+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21807#p21807</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21807#p21807"/>
<title type="html"><![CDATA[Bugs • Re: 0.52 v163 crash dumps]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21807#p21807"><![CDATA[
please try the beta build if it stil crashes with the old filelist.xml<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Fri Sep 04, 2015 7:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tart]]></name></author>
<updated>2015-09-03T20:08:39+01:00</updated>
<published>2015-09-03T20:08:39+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21806#p21806</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21806#p21806"/>
<title type="html"><![CDATA[Bugs • Re: 0.52 v163 crash dumps]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21806#p21806"><![CDATA[
Cool, thanks!<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4394">tart</a> — Thu Sep 03, 2015 8:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-09-03T16:58:04+01:00</updated>
<published>2015-09-03T16:58:04+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21805#p21805</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21805#p21805"/>
<title type="html"><![CDATA[Bugs • Re: 0.52 v163 crash dumps]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21805#p21805"><![CDATA[
thanks<br /><br />I will fix that hopefully in the next build.<br />for the mean time you can delete the filelist.xml from the ocnfiguration directory to make it start again but not that than all unfinished downloads will be lost.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Thu Sep 03, 2015 4:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tart]]></name></author>
<updated>2015-09-03T11:54:49+01:00</updated>
<published>2015-09-03T11:54:49+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21804#p21804</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21804#p21804"/>
<title type="html"><![CDATA[Bugs • 0.52 v163 crash dumps]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6811&amp;p=21804#p21804"><![CDATA[
Hi<br />Neoloader started crashing on loading, I uninstalled and reinstalled but still crashing on loading, please find some crash dumps.<br />Thanks!<br />tart<dl class="file"><dt><span class="imageset icon_topic_attach"></span> <a class="postlink" href="http://forum.neoloader.com/download/file.php?id=665">Neoloader.zip</a></dt></dl><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4394">tart</a> — Thu Sep 03, 2015 11:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[enOehTsIsihT]]></name></author>
<updated>2015-09-01T15:36:37+01:00</updated>
<published>2015-09-01T15:36:37+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21803#p21803</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21803#p21803"/>
<title type="html"><![CDATA[Bugs • Re: 0.52 Bugs]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21803#p21803"><![CDATA[
NeoLoader v0.52a (Build 163) 01.09.2015 22-02-36,911.dmp<br />120 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!pklW1L4K!rgrMYJquNYcr4aQo_9nPP_YuD7ETx2va3ldeIerx5vU">https://mega.nz/#!pklW1L4K!rgrMYJquNYcr ... ldeIerx5vU</a><!-- m --><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1087">enOehTsIsihT</a> — Tue Sep 01, 2015 3:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[esher]]></name></author>
<updated>2015-08-29T09:52:44+01:00</updated>
<published>2015-08-29T09:52:44+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21802#p21802</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21802#p21802"/>
<title type="html"><![CDATA[Bugs • Re: 0.52 Bugs]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21802#p21802"><![CDATA[
If NeoShare is on, it seems that getting into the summary starts a chain of failed nodes lookups (like letting a neokad search open), then a neokad disconnection followed by mulekad disconnection. I could only restart NL to fix it.<br /><br />NL to NL: there is no file transfer between myNLHome and myNLOffice(low id) via Neoshare when neoshare is on ON<br />NL to NL (horde): both NLs are occasionally starting an horde upload for a file they still have 0%(file size is less than 30kb), then they keep each other as a pending 100% source.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1009">esher</a> — Sat Aug 29, 2015 9:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[enOehTsIsihT]]></name></author>
<updated>2015-08-30T14:29:17+01:00</updated>
<published>2015-08-29T01:57:47+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21801#p21801</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21801#p21801"/>
<title type="html"><![CDATA[Bugs • Re: 0.52 Bugs]]></title>

<category term="Bugs" scheme="http://forum.neoloader.com/viewforum.php?f=171" label="Bugs"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6797&amp;p=21801#p21801"><![CDATA[
<blockquote><div><cite>DavidXanatos wrote:</cite><br />I see where the crash is but i don't see why it crashes,<br />do you have also crashes with the 32 bit version?<br /></div></blockquote><br /><br />32 bit version<br />NeoLoader v0.52a (Build 163) 29.08.2015 04-18-31,976.dmp<br />105 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!1hU3SToL!OeG8gcxmSYZ9bgN9WchQr1MmKe0TUGTEbWPiMOL3jzA">https://mega.nz/#!1hU3SToL!OeG8gcxmSYZ9 ... WPiMOL3jzA</a><!-- m --><br /><br />NeoLoader v0.52a (Build 163) 30.08.2015 14-28-20,173.dmp<br />120 KB<br /><!-- m --><a class="postlink" href="https://mega.nz/#!FwcnhYIA!YXXj8dYbPxrbIcdhuUiQEP6r54T5UO_Bi3pnSO0UF80">https://mega.nz/#!FwcnhYIA!YXXj8dYbPxrb ... 3pnSO0UF80</a><!-- m --><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1087">enOehTsIsihT</a> — Sat Aug 29, 2015 1:57 am</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php