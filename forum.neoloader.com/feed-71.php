<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=170&amp;t=6809" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2015-08-22T12:16:29+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=170&amp;t=6809</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-08-22T12:16:29+01:00</updated>
<published>2015-08-22T12:16:29+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6809&amp;p=21795#p21795</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6809&amp;p=21795#p21795"/>
<title type="html"><![CDATA[Re: Compilation]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6809&amp;p=21795#p21795"><![CDATA[
No not really, my own notes are as follows:<br /><br />Ubuntu 12 64 bit Qt5 unix build<br /><br /><br />pre-build steps:<br />install qt using *.run file<br /><br />install rabbitvcs: <br />sudo add-apt-repository ppa:rabbitvcs/ppa<br />or deb <!-- m --><a class="postlink" href="http://ftp.de.debian.org/debian">http://ftp.de.debian.org/debian</a><!-- m --> wheezy main<br />sudo apt-get update<br />sudo apt-get install rabbitvcs-cli rabbitvcs-core rabbitvcs-gedit rabbitvcs-nautilus3<br /><br />old<br />sudo apt-get install rabbitvcs-nautilus3<br />or<br />sudo apt-get install rabbitvcs-core rabbitvcs-nautilus rabbitvcs-gedit rabbitvcs-cli<br /><br />install g++<br />sudo apt-get install g++<br />//sudo apt-get install g++-4.6<br />//sudo update-alternatives --install /usr/bin/gcc gcc /usr/bin/gcc-4.6 10<br />//sudo update-alternatives --install /usr/bin/g++ g++ /usr/bin/g++-4.6 10<br />sudo apt-get install libxext-dev<br />   sudo apt-get install libssl-dev<br />sudo apt-get install libfuse-dev<br /><br />install open gl<br />sudo apt-get install libgl-dev<br />or<br />apt-get install libgl1-mesa-dev<br /> <br />Install boost regex<br />sudo apt-get install libboost-regex-dev<br /><br /><br />build steps:<br />• Build Crypto++: <br />./NeoLoader/crypto++$ make libcryptopp.so<br />• Build V8:<br />git clone <!-- m --><a class="postlink" href="https://chromium.googlesource.com/chromium/tools/depot_tools.git">https://chromium.googlesource.com/chrom ... _tools.git</a><!-- m --><br /><br />PATH=&quot;$HOME/Projects/Google/depot_tools:$PATH&quot;<br />Fetch v8<br /><br />./NeoLoader/v8$ make dependencies<br />./NeoLoader/v8$ make x64.release library=shared<br />make ia32.release library=shared<br /><br /><br />For V8 32 on 64<br />$ sudo apt-get install build-essential<br />$ sudo apt-get install libc6-dev-i386<br />$ sudo apt-get install g++-4.6-multilib<br /><br /><br />• Build 7z<br />./NeoLoader/7-Zip/p7zip_9.20.1$ make 7z<br />• Building sqlite3<br />gcc -c sqlite3.c -fpic<br />gcc -shared -o libsqlite3.so sqlite3.o<br />• Build utp:<br />./NeoLoader/utp$ make<br /><br />• Build NeoLoader using Qt Creator<br /> <p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Aug 22, 2015 12:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mph]]></name></author>
<updated>2015-08-22T04:34:20+01:00</updated>
<published>2015-08-22T04:34:20+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6809&amp;p=21794#p21794</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6809&amp;p=21794#p21794"/>
<title type="html"><![CDATA[Compilation]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6809&amp;p=21794#p21794"><![CDATA[
I am looking to compile this to a *nix system other than Ubuntu. Is there any documentation on compilation?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4416">mph</a> — Sat Aug 22, 2015 4:34 am</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php