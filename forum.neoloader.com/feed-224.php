<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=171&amp;t=3253" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-05-05T13:10:42+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=171&amp;t=3253</id>
<entry>
<author><name><![CDATA[kopot]]></name></author>
<updated>2013-05-05T13:10:42+01:00</updated>
<published>2013-05-05T13:10:42+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16221#p16221</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16221#p16221"/>
<title type="html"><![CDATA[_except_handler4_common in msvcrt.dll]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16221#p16221"><![CDATA[
I downloaded new NeoSetup and started it. Installer said  "_except_handler4_common in msvcrt.dll" three times, but continued installation process. Program NeoLoader starts  OK. Thank you!<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3361">kopot</a> — Sun May 05, 2013 1:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-04-20T12:38:24+01:00</updated>
<published>2013-04-20T12:38:24+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16171#p16171</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16171#p16171"/>
<title type="html"><![CDATA[_except_handler4_common in msvcrt.dll]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16171#p16171"><![CDATA[
I tested the new version and a clean install forked on a cleanly installed winXP VM<br /><br />let me please know if it works for you<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Apr 20, 2013 12:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kopot]]></name></author>
<updated>2013-04-13T16:06:51+01:00</updated>
<published>2013-04-13T16:06:51+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16153#p16153</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16153#p16153"/>
<title type="html"><![CDATA[_except_handler4_common in msvcrt.dll]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16153#p16153"><![CDATA[
The problem with inet_ntop was solved by downloading ws2_32.dll. Now problem is with _except_handler4_common.<br />The error message refers to msvcrt.dll. But entry point _except_handler4_common is in library MSVCR100.dll, and this library is placed in NeoLoader directory.<br />PEDump of NeoLoader includes reference to MSVCR100.dll and _except_handler4_common<br /><br />  MSVCR100.dll<br />  Hint/Name Table: 0033C494<br />...<br />   238  ?_type_info_dtor_internal_method@type_info@@QAEXXZ<br />   545  _except_handler4_common<br />   495  _controlfp_s<br />...<br /><br />but they can't come to agreement <img class="smilies" src="http://forum.neoloader.com/images/smilies/smile.png" alt=":)" title=":)" /><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3361">kopot</a> — Sat Apr 13, 2013 4:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-04-11T18:42:02+01:00</updated>
<published>2013-04-11T18:42:02+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16152#p16152</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16152#p16152"/>
<title type="html"><![CDATA[_except_handler4_common in msvcrt.dll]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16152#p16152"><![CDATA[
hmm... windows XP this will be the problem,<br />hmm.... will have to look into it if I can work without inet_ntop<br /><br />David X.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Thu Apr 11, 2013 6:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kopot]]></name></author>
<updated>2013-04-11T16:46:33+01:00</updated>
<published>2013-04-11T16:46:33+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16151#p16151</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16151#p16151"/>
<title type="html"><![CDATA[_except_handler4_common in msvcrt.dll]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3253&amp;p=16151#p16151"><![CDATA[
I downloaded NeoLoader for Windows and tried to start it. The message appeared:<br /><em>Entry point inet_ntop not found in ws2_32.dll</em><br />I downloaded ws2_32.dll and copied it to NeoLoader directory. The message on start is:<br /><em>Entry point _except_handler4_common not found in msvcrt.dll</em><br /><br />I use Windows XP SP3<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3361">kopot</a> — Thu Apr 11, 2013 4:46 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php