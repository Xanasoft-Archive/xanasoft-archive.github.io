<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=171&amp;t=3325" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-09-10T12:31:53+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=171&amp;t=3325</id>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-09-10T12:31:53+01:00</updated>
<published>2013-09-10T12:31:53+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16606#p16606</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16606#p16606"/>
<title type="html"><![CDATA[Control IP Overhead feature (0.40 beta)]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16606#p16606"><![CDATA[
Let's make this test in the beta and later we'll decide if keep that settings fur final version but I think once found an acceptable value the setting is not needed.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Tue Sep 10, 2013 12:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-09-10T12:23:46+01:00</updated>
<published>2013-09-10T12:23:46+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16605#p16605</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16605#p16605"/>
<title type="html"><![CDATA[Control IP Overhead feature (0.40 beta)]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16605#p16605"><![CDATA[
&gt;     About the overhead... what are you waiting for ? <br /><br /><em>About some overhead still not counted, it is some more IP overhead, it can not be counted by principle, it can only be guessed.<br /><span style="text-decoration: underline">I don't know at this point how to make the guessing more accurate</span>, I should add a MSS setting that would probably help.</em><br /><br />MSS wont help you as the MSS you tolled me is the default DSL one, the one I have and the one Neo uses, so it would only help other users.<br /><br />The problem with IP overhead is that you always have some packet lost and resent packets and there is no way to get the info win the OS how many they ware.<br />So we can guess the amount of frames sent and those the ACK count we should revive, but wen can't know how much packet lost there ware.<br /><br />May be I could add a setting in % where a user can enter his expected packet lost, a.k.a. the % miss match between what Neo guesses assuming no lost at all and what the user sees on the network adapter.<br /><br /><br />EDIT: or I could add a NAFC like feature and measure the discrepance and create some correction table for the speed :/ <br />like the user would have to train Neo to his connection, would be cool though not n00b friendly i think.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Tue Sep 10, 2013 12:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-09-10T12:19:02+01:00</updated>
<published>2013-09-10T12:19:02+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16604#p16604</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16604#p16604"/>
<title type="html"><![CDATA[Control IP Overhead feature (0.40 beta)]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16604#p16604"><![CDATA[
I still not understand really good what it does so I give no suggestions about On/Off.<br /><br />About the overhead... what are you waiting for ? <img class="smilies" src="http://forum.neoloader.com/images/smilies/smile.png" alt=":)" title=":)" /><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Tue Sep 10, 2013 12:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-09-10T12:16:26+01:00</updated>
<published>2013-09-10T12:16:26+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16603#p16603</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16603#p16603"/>
<title type="html"><![CDATA[Control IP Overhead feature (0.40 beta)]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16603#p16603"><![CDATA[
Control IP Overhead is a setting that shouldn't be public i think,<br /><br />it also does not do what you think it does.<br /><br />What it does is when disabled the bandwidth control always allows for IP overhead so that if you set your upload limit below the value that you generate in terms of IP overhead due to fast downloading, the overhead will go beyond the limit line int he starts. Say it wont be controlled or one could also say limited.<br /><br />Howe ever any other upload traffic will remain limited, and the IP overhead will still be taken into account, say for example if you limit your upload to 20 kb/s and neo estimates 15 kb/s IP overhead it will adjust upload to 5 and the limit will be kept.<br /><br />The limit will only be exceeded when the IP overhead is greater than the total set bandwidth limit.<br /><br />I will remove the setting from the gui in the next version, though I'm not sure if to set it enabled or disabled by default.<br /><br /><br /><br />About some overhead still not counted, it is some more IP overhead, it can not be counted by principle, it can only be guessed.<br />I don't know at this point how to make the guessing more accurate, I should add a MSS setting that would probably help.<br /><br /><br />David X.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Tue Sep 10, 2013 12:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-09-10T11:13:32+01:00</updated>
<published>2013-09-10T11:13:32+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16602#p16602</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16602#p16602"/>
<title type="html"><![CDATA[Control IP Overhead feature (0.40 beta)]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3325&amp;p=16602#p16602"><![CDATA[
Hi, I tried to turn that feature on/off but I see no difference, it's bugged?<br /><br />btw, there is still a lot of overhead not counted.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Tue Sep 10, 2013 11:13 am</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php