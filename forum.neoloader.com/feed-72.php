<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=170&amp;t=3360" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2015-08-16T10:10:02+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=170&amp;t=3360</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-08-16T10:10:02+01:00</updated>
<published>2015-08-16T10:10:02+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=21792#p21792</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=21792#p21792"/>
<title type="html"><![CDATA[Re: x64 support]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=21792#p21792"><![CDATA[
Yes I did and it seams to work ok, I will probably provide a x64 build for the next final release.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sun Aug 16, 2015 10:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Automan]]></name></author>
<updated>2015-08-13T23:11:30+01:00</updated>
<published>2015-08-13T23:11:30+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=21789#p21789</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=21789#p21789"/>
<title type="html"><![CDATA[Re: x64 support]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=21789#p21789"><![CDATA[
David, I've seen that now you've switched to VS2013.<br />Have you tried to recompile for x64 now?<br />Cheers<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3584">Automan</a> — Thu Aug 13, 2015 11:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-11-14T09:22:45+01:00</updated>
<published>2013-11-14T09:22:45+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16905#p16905</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16905#p16905"/>
<title type="html"><![CDATA[x64 support]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16905#p16905"><![CDATA[
The only real benefits if x64 software are:<br />1. &gt; 2GB memory allocation per process<br />2. new registers and opcodes that for appropriately optimized software give a substantial speed improvement, but! This mostly aplyes to FPU intensive applications, a.k.a. multimedia, simulations and scientific applications that do vectorisable operations.<br /><br />NeoLoader is not such an application, its only part that would benefit from this improvements would be the Hashing and Crypto, but! Its already fast enough and I am not going to change the implementations on my own, its much to easy to fuck something up there and compromise security or cause data corruption, I'll stick to a tested well known library.<br /><br />And now the downsides:<br />1. every pointer is twice in size, a.k.a. more memory usage<br /><br />David X.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Thu Nov 14, 2013 9:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-11-13T20:38:57+01:00</updated>
<published>2013-11-13T20:38:57+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16904#p16904</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16904#p16904"/>
<title type="html"><![CDATA[x64 support]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16904#p16904"><![CDATA[
You will not notice any relevant difference running it on 32 bit system or under wow64 process.<br /><br />Ok, the new PCs come out with 64bit system but where is the 64bit software ? All the software that the "medium user" want is still 32 bit. And the % of old PCs with 32 bit system is still very high.<br /><br />And do you know why a lot of software are not avaible in x64 ? Because there are not real benefits , the x64 bit processor is more accurate, not faster as the majority of people think. For example in a p2p software there will be not any relevant different using it with 32 or 64 bit instruction, there could be instead new issues in the 64 version (and that's what happened to neoloader).<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Wed Nov 13, 2013 8:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Automan]]></name></author>
<updated>2013-11-13T19:12:53+01:00</updated>
<published>2013-11-13T19:12:53+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16901#p16901</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16901#p16901"/>
<title type="html"><![CDATA[x64 support]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16901#p16901"><![CDATA[
Well, according to official Microsoft reference, the WOV64 subsystem is declared as emulation layer with very little performance loss.<br />Anyway I think that you can provide with minimal effort a 64bit compiled version along with every new 32bit exe, stating that it is not officially supported. This is just my opinion...<br />I have 2 PC one desktop with Windows 8.1 OS and the laptop with Windows 7 64.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3584">Automan</a> — Wed Nov 13, 2013 7:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-11-13T16:24:34+01:00</updated>
<published>2013-11-13T16:24:34+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16900#p16900</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16900#p16900"/>
<title type="html"><![CDATA[x64 support]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16900#p16900"><![CDATA[
&gt;but running x86 executables under x64 OS is like using an emulator<br />that is false, there is no performance impact in using x86 the CPU is switching into x86 mode and executing the code nativly.<br /><br />The support for the x64 bit version was dropped because MS VS 2012 displayed some issues when compiling x64 binary (like arbitrary reordering function calls in argument lists, etc...). <br />With SP3 thats supposed to have been fixed but for now i don't see a reason to risk strange problems again.<br /><br />David X.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Wed Nov 13, 2013 4:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Automan]]></name></author>
<updated>2013-11-13T16:05:30+01:00</updated>
<published>2013-11-13T16:05:30+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16899#p16899</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16899#p16899"/>
<title type="html"><![CDATA[x64 support]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3360&amp;p=16899#p16899"><![CDATA[
Apart installer issues, why has been dropped the x64 support?<br />Really almost 90% of the PC of the last 3 years are coming out with x64 OS.<br />I don't know  the real performance improvement between 32bit and 64bit, but running x86 executables under x64 OS is like using an emulator<br />I'm a bit disappointed about that and i hope in another solution :-)<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3584">Automan</a> — Wed Nov 13, 2013 4:05 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php