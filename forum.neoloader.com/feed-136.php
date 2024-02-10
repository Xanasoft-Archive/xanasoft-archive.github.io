<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=166&amp;t=2965" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2015-04-12T09:39:54+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=166&amp;t=2965</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-04-12T09:39:54+01:00</updated>
<published>2015-04-12T09:39:54+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21673#p21673</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21673#p21673"/>
<title type="html"><![CDATA[Re: NeuLoader 32bit Linux Version]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21673#p21673"><![CDATA[
Nachtrag:<br /><br />Ich werde vorraussichtlich die lib crypto++ mit openssl ersätzen, das solte das kompilieren auf ARM erheblich erleichtern, <br />openssl unterstützt nciht so viele verschiedene schifren wie crypto++ aber alle die wir brauchen, und das EC crypto scheint wesentlich performanter implementiert zu sein <img class="smilies" src="http://forum.neoloader.com/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br /><br />David X.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sun Apr 12, 2015 9:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-03-28T08:38:44+01:00</updated>
<published>2015-03-28T08:38:44+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21643#p21643</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21643#p21643"/>
<title type="html"><![CDATA[Re: NeuLoader 32bit Linux Version]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21643#p21643"><![CDATA[
Hi,<br /><br />hmm... as far as I see its a linux on a ARM CPU, that might be a little bit challenging as for that i would need to compile Qt the libcryptopp and V8 for arm, idk. how difficult that is at the moment.<br /><br />also jo is kompliziert, so was habe ich schon ein Weilchen auf meiner todo samt einem Build für ein RasPi aber ich befürchte das wird noch paar Monate dauern bis ich dazu komme.<br /><br />Bis dahin kann ich dir aber so was empfehlen: <!-- m --><a class="postlink" href="http://geizhals.at/intel-nuc-board-de3815tybe-blkde3815tybe-a1102627.html?hloc=at&amp;hloc=de">http://geizhals.at/intel-nuc-board-de38 ... at&amp;hloc=de</a><!-- m --><br />Das ist ein all in one mainboard von intel, das braucht nur noch ein ram riegel und ein altes 19v laptop netzteil. <br />Auf ein SSD/HDD kannst du verzichten da sind 4 GB on board flash verbaut auf den man ein entsprechend kleines ubuntu o.ä. packen kann samt Neo und dem sagst du er so den Netzwerk Share von deinem QNAP für die files nähmen.<br /><br /><br /><br />LG<br />David X.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Mar 28, 2015 8:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[OwenBurnett]]></name></author>
<updated>2015-03-26T14:02:07+01:00</updated>
<published>2015-03-26T14:02:07+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21640#p21640</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21640#p21640"/>
<title type="html"><![CDATA[Re: NeuLoader 32bit Linux Version]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21640#p21640"><![CDATA[
I don't understand your language, but D.X. is away for around 1 week, when he's back he'll help you. Meanwhile you can try to explain the problem in english, for what I've seen using google translate try to take a look here: <!-- l --><a class="postlink-local" href="http://forum.neoloader.com/viewtopic.php?f=170&amp;t=6766">viewtopic.php?f=170&amp;t=6766</a><!-- l --><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4378">OwenBurnett</a> — Thu Mar 26, 2015 2:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[matchi]]></name></author>
<updated>2015-03-26T07:50:16+01:00</updated>
<published>2015-03-26T07:50:16+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21639#p21639</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21639#p21639"/>
<title type="html"><![CDATA[Re: NeuLoader 32bit Linux Version]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21639#p21639"><![CDATA[
Hallo,<br /><br />ich habe Interesse am Betrieb des neoloader core auf meinem QNAP TS410<br /><br /><div class="codebox"><p>Code: </p><code>&#91;~&#93; # uname -a<br />Linux TS410 3.4.6 #1 Mon Jan 26 15:32:29 CST 2015 armv5tel unknown<br /></code></div><br /><br />Kriegst Du das hin?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4393">matchi</a> — Thu Mar 26, 2015 7:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Terrorizer]]></name></author>
<updated>2012-09-07T04:01:48+01:00</updated>
<published>2012-09-07T04:01:48+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=15257#p15257</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=15257#p15257"/>
<title type="html"><![CDATA[NeuLoader 32bit Linux Version]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=15257#p15257"><![CDATA[
<blockquote><div><cite>DavidXanatos wrote:</cite><br />wen bedarf da ist kÃ¶nen wir den neo fÃ¼r jede belibige linux version kompilieren,<br />ubuntu 32 bit wÃ¤re einfach, andere mÃ¼sten wir schauen...<br /></div></blockquote><br /><br />...ja genau um diese Version ginge es mir; Ubuntu 32-bit !!!<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=82">Terrorizer</a> — Fri Sep 07, 2012 4:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2012-09-06T22:38:46+01:00</updated>
<published>2012-09-06T22:38:46+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=15255#p15255</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=15255#p15255"/>
<title type="html"><![CDATA[NeuLoader 32bit Linux Version]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=15255#p15255"><![CDATA[
wen bedarf da ist kÃ¶nen wir den neo fÃ¼r jede belibige linux version kompilieren,<br />ubuntu 32 bit wÃ¤re einfach, andere mÃ¼sten wir schauen...<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Thu Sep 06, 2012 10:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Terrorizer]]></name></author>
<updated>2012-09-06T19:35:34+01:00</updated>
<published>2012-09-06T19:35:34+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=15253#p15253</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=15253#p15253"/>
<title type="html"><![CDATA[NeuLoader 32bit Linux Version]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=15253#p15253"><![CDATA[
...wirds da auch eine 32-bit Version fÃ¼r Linux geben ???<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=82">Terrorizer</a> — Thu Sep 06, 2012 7:35 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php