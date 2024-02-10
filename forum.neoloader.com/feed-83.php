<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=171&amp;t=6818" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2015-12-16T11:01:53+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=171&amp;t=6818</id>
<entry>
<author><name><![CDATA[Neophyte]]></name></author>
<updated>2015-12-16T11:01:53+01:00</updated>
<published>2015-12-16T11:01:53+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21875#p21875</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21875#p21875"/>
<title type="html"><![CDATA[Re: Cannot connect to NeoShare network]]></title>

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
<title type="html"><![CDATA[Re: Cannot connect to NeoShare network]]></title>

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
<title type="html"><![CDATA[Cannot connect to NeoShare network]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6818&amp;p=21871#p21871"><![CDATA[
I cannot connect to the NeoShare network, probably because there's something wrong with bootstrap server. I wonder why there's no neonodes.dat file bundled in the installer? Can someone here on forum send me that file?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3790">Zebra</a> — Fri Nov 27, 2015 11:50 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php