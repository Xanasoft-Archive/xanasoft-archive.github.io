<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=172&amp;t=6806" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2015-07-04T00:10:44+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=172&amp;t=6806</id>
<entry>
<author><name><![CDATA[DreamBliss]]></name></author>
<updated>2015-07-03T10:04:37+01:00</updated>
<published>2015-07-03T10:04:37+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21756#p21756</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21756#p21756"/>
<title type="html"><![CDATA[Re: LOTS of features are needed!]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21756#p21756"><![CDATA[
<span style="font-size: 120%; line-height: normal">Let me know if these links help you with the file checking/hashing/resuming of torrents:<br /><!-- m --><a class="postlink" href="http://stackoverflow.com/questions/2572521/extract-the-sha1-hash-from-a-torrent-file">http://stackoverflow.com/questions/2572 ... rrent-file</a><!-- m --><br /><!-- m --><a class="postlink" href="https://en.wikipedia.org/wiki/Torrent_file#Distributed_hash_tables">https://en.wikipedia.org/wiki/Torrent_f ... ash_tables</a><!-- m --><br /><!-- m --><a class="postlink" href="https://en.wikipedia.org/wiki/Distributed_hash_table">https://en.wikipedia.org/wiki/Distributed_hash_table</a><!-- m --><br /><br />I think this is the best one:<br /><!-- m --><a class="postlink" href="http://www.libtorrent.org/manual-ref.html">http://www.libtorrent.org/manual-ref.html</a><!-- m --></span><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4411">DreamBliss</a> — Fri Jul 03, 2015 10:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DreamBliss]]></name></author>
<updated>2015-07-04T00:10:44+01:00</updated>
<published>2015-07-03T09:58:10+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21755#p21755</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21755#p21755"/>
<title type="html"><![CDATA[Re: LOTS of features are needed!]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21755#p21755"><![CDATA[
<span style="font-size: 120%; line-height: normal">I don't know anything about the programming, but if you looked at torrent programs, most of them I have used so far, have had some sort of file check that they do. So it cycles through this file check for all partially completed files once brought into the torrent program. Once the check is done, the downloading resumes from where it was left off. Of course of the download was already in the torrent program there is no need to run this file check. This is more for imported torrents or adopted directories. Did I explain this very well? It might be called a hash check or something like that. Maybe I can find something on Google then post a link.<br /><br />Auto-Load torrents is a cool new feature I have seen in some torrent programs. How this works is you set a directory where .torrent files are located. With this option checked, the program will automatically import them. If the files already exist, the trackers are merged. If the files exist partially, that is if the torrent leads the program to a partially downloaded file, the files is imported, checked and resumed. This feature basically allows people to just download their .torrent files for whatever they want into the directory set to auto-load them, and it saves them the step iof having to double click to add each one. Very useful as a way to batch import too.<br /><br />Yeah that would be cool to be able to turn that off through the UI. No sense allocating space for torrents that stall or never get past 0%. When you're tight on space as I am its a cold shock to see all your remaining room ate up by something like that.</span><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4411">DreamBliss</a> — Fri Jul 03, 2015 9:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-07-03T07:17:30+01:00</updated>
<published>2015-07-03T07:17:30+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21751#p21751</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21751#p21751"/>
<title type="html"><![CDATA[Re: LOTS of features are needed!]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21751#p21751"><![CDATA[
Automatically using partial downloads of torrents is difficult as the nececery informations are storred by the other application in its own program directory and each application may do that differently.<br />With eMule/eDonkey thats easy as the convenstion d storing this data is standardized somewhat.<br />But neverthe less I wil look into it at least for some mainstream application that should be doable<br /><br />&gt;Auto-load torrents from a directory set by the user.<br />what should this do exactly, load and download like open more than one file at once, or do you mean somethign else?<br /><br />&gt;Turning on or off the Allocating Space feature.<br />This is present there is just no setting for that in the UI, it can be changed in the ini file, I will add a seting switch  in the UI for the next build.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Fri Jul 03, 2015 7:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DreamBliss]]></name></author>
<updated>2015-07-04T00:10:18+01:00</updated>
<published>2015-07-02T12:16:04+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21747#p21747</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21747#p21747"/>
<title type="html"><![CDATA[LOTS of features are needed!]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=6806&amp;p=21747#p21747"><![CDATA[
<span style="font-size: 120%; line-height: normal">To start with NeoLoader should be able to work with files already downloaded. In other words, if I set a directory where files that have been partly downloaded by another program exist, it should check those parts and resume each file to get whatever is missing. Right now it appears to be overwriting all previously downloaded files outside of NeoLoader.<br /><br />Easier batch .torrent import - preferably drag and drop.<br /><br />Auto-load torrents from a directory set by the user.<br /><br />Turning on or off the Allocating Space feature.<br /><br />I'll post more as I think of them. Awesome that you included a search in this! I really appreciated that!</span><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4411">DreamBliss</a> — Thu Jul 02, 2015 12:16 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php