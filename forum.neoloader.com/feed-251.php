<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=172&amp;t=3402" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2014-02-10T14:49:24+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=172&amp;t=3402</id>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2014-02-10T14:49:24+01:00</updated>
<published>2014-02-10T14:49:24+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3402&amp;p=17237#p17237</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3402&amp;p=17237#p17237"/>
<title type="html"><![CDATA[Download Queque Improvements]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3402&amp;p=17237#p17237"><![CDATA[
Is complete now, any idea/suggestion? Can it be technically done or it will remain a dream?<br /><br />Plus, any idea about how to integrate with hostercache uploads? What about queque hostercaches after active uploads reached the goal, and get always 1 (not 0!!) when all reached 1:1 ratio?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Mon Feb 10, 2014 2:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2014-01-19T13:25:02+01:00</updated>
<published>2014-01-19T13:25:02+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3402&amp;p=17211#p17211</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3402&amp;p=17211#p17211"/>
<title type="html"><![CDATA[Download Queque Improvements]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3402&amp;p=17211#p17211"><![CDATA[
Hi, in last release a queque system for downloading (and sharing) files is added. At the moment that's better than nothing but it could be so much useful than now. I'm writing few suggestion for a better system:<br /><br /><ul><br /><li>Actually we have only 1 value to choose, that mean the max active torrent. Instead we should have 2 values:<br /> <strong>*Tot --&gt; Max Total Torrents:</strong> The total torrent active that count sharing+downloading torrents<br /> <strong>*Down --&gt; Max Downloading Torrents:</strong> It counts the downloading torrent only.<br /> Of course these value should respect following condition: <strong>Down&lt;=Tot !</strong> (aka the users should not be able to choose Down&gt;Tot for the correct behavior)<br /></li><li>Slow torrents torrents don't cause an huge overhead value, so shouldn't be included in the queque. Rare torrent should get priority in any case. So:<br /> *If "<strong>Source&lt;X <span style="text-decoration: underline">or</span> Speed&lt;Y</strong> torrent should be always active, aka get a position of "0" in the queque (or not counted).<br /> * X and Y should be configurable, if someone have awesome connection speed could increase the default vale... (default could be X = 10 and Y = 100)<br /> *Note the "or" in the condictions, it mean that one condition is enough to get the position 0 at the file. Plus, you could make them switchable, aka I can turn off the X and use only Y, or reverse.<br /></li><li>The managing of queque for downloading torrents is easy, when a torrent is complete get his position on seeding queque and the following downloading torrent will start. <br />The seeding queque should work in the same way, counting as <strong>"complete" when a torrent reach 1:1 ratio</strong>.<br />It could be improved adding an incremental step that will be considered when all the torrent reached 1:1 ratio, I'll make an example: When 1:1 ratio restart the queque and put the goal at 1.5:1. Then 2.0:1. Then 2.5:1... and so on. In that case the "increment" is 0.5, but you could also make it switchable (I think first 1:1 and then 0.5 increment are the best default values).<br /><strong>Note:</strong> Of course rare torrents (the X of previous point) should keep the posistion 0 and be always uploaded.<br /></li><li>Many hosters downloads are so fast, so they should be included in the torrent downloading queque, for example when hoster speed is &gt; 100kb/s (or setable with &gt; "z")<br /></li></ul><br />If is possible add such condictions in the queque system we could make the torrent managment a lot of better and use a lower value than the actual default 5 that still not solve the huge overhead of torrent downloading. For example using a Down = 1 and Tot = 2 by default (in that condictions there should be 1 downloading and 1 seeding torrent, and when all the downloads are complete 2 seeding torrents). CPU usage is better as well.<br /><br />Sorry for the bad english... Bye.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Sun Jan 19, 2014 1:25 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php