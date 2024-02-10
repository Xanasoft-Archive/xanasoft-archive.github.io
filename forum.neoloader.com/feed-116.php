<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=172&amp;t=3567" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2014-11-22T23:19:13+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=172&amp;t=3567</id>
<entry>
<author><name><![CDATA[desodorante]]></name></author>
<updated>2014-11-22T23:19:13+01:00</updated>
<published>2014-11-22T23:19:13+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3567&amp;p=17881#p17881</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3567&amp;p=17881#p17881"/>
<title type="html"><![CDATA[Cross-file micro-chunk exchange - Feature PROPOSAL]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3567&amp;p=17881#p17881"><![CDATA[
Well it seems you got it covered already <img class="smilies" src="http://forum.neoloader.com/images/smilies/smile.png" alt=":)" title=":)" /><br />Yet, you said you can find 4 bytes per 16gb of data on average, which means a "mapping" approach will not be so far fetched, specially if the client uses its own files instead of downloading, in the rare scenario where you are sitting at 99% complete and there are no sources.<br />Anyway, thanks for the lengthy technical explanation.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4040">desodorante</a> — Sat Nov 22, 2014 11:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2014-11-22T13:53:03+01:00</updated>
<published>2014-11-22T13:53:03+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3567&amp;p=17875#p17875</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3567&amp;p=17875#p17875"/>
<title type="html"><![CDATA[Cross-file micro-chunk exchange - Feature PROPOSAL]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3567&amp;p=17875#p17875"><![CDATA[
What you describe will Generally not work for any low entropy file like any video or audio file.<br /><br />This file formats are compressed, that means in first approximation you can say about any chunk picked randomly from inside of the file that it contains 100% random data.<br /><br />Of cause the data are not really random but their meaning becomes only apparent in the context of a few hundred kb or mb of other data from the file.<br /><br />Looking on sufficiently small blocks of such a file gives you meaningless bytes with a high entropy.<br /><br />The chance for a 4 byte long block of one particular file to be contained inside an other random file of the size of lets say 128Mb is below 1:4 000 000 000  (yes below 1 in 4 billion)<br /><br />To be more exact to find a matching 4 byte long block you would need to download on average 2^32 random blocks, that is 16GB of data.<br />For a 32 byte long block the chance of finding a match withing 2 files created during the entire existence of the universe is for all intents and porpoises ~0.000 0.....<br /><br /><br />The only type of files where this could work would be files with a low entropy or files where it can be assumed 3rd party sections have been build in, like for example an ISO file of some software installation.<br />Here you can expect the ISO to contain files that are identical to files contained by other ISO's of an older version of the same software or some generic library's used by a lot of software.<br /><br />Now for a ZIPed or RARed ISO the same applies as for Audio or video files, high entropy no matches.<br /><br /><br />So such a feature if present would only benefit a small subset of all files shared on P2P.<br /><br /><br />Also the apparent problem if such a feature finding matches of files without any in any way correlated starting offset is nearly impossible, there are some signature tricks one could explore but that is not realistic to work with any acceptable amount of overhead.<br /><br /><br /><br />Neo's method of identifying ED2K files in BT or vice versa relays on neo clients first downloading a file form ed2k or BT only calculating all hashes and publishing a cheat sheet into Neo kad. Any Neo client that later on gets a ed2k hash or a torrent info hash can request the cheat sheet from NeoKad and bam he knows what hashes belong together.<br /><br />There is no way to mathematically calculate a ed2k hash from a torrent info hash.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Sat Nov 22, 2014 1:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[desodorante]]></name></author>
<updated>2014-11-22T13:27:08+01:00</updated>
<published>2014-11-22T13:27:08+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3567&amp;p=17874#p17874</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3567&amp;p=17874#p17874"/>
<title type="html"><![CDATA[Cross-file micro-chunk exchange - Feature PROPOSAL]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3567&amp;p=17874#p17874"><![CDATA[
David, Ekliptor,<br /><br />This is an idea I have been thinking for a while but I am too bad at coding to explore, let alone implement.<br />First of all, I've been a follower of your work since Neomule (not sure if Ekliptor participated on that too) and so I am very excited for this project.<br /><br />The problem I am looking to solve:<br />Provide new sources for dead files both in emule and BT (those that have no sources / seeds  / peers)<br /><br />The core idea is as follows:<br />Find a minimum, likely variable, micro-chunk size (likely byte sized) that can be exhanged between files of differesent sizes, hash and type.<br /><br />The solution I am not able to explore:<br />Taking advantage of the P2P network interoperability of Neoloader, able to translate emule parts to BT pieces, and using the emule chunk hash system (9500 kilobyte chunks using the MD4 algorithm), identify smaller byte streams within the chunk that match other files regardless of final hash, size, or type.<br /><br />Two approaches:<br />-While file is "healthy" (above 100% available), perform analysis of random parts against other file's parts to identify matching byte streams. Save this as a "map" for when the file is below 100%<br />-When file is no longer healthy (below 100%), complete missing parts with other random file's parts and hash until file checks out. Also save "map" once complete.<br /><br />For instance, say FileA.avi is incomplete and had no sources for X time at the client side. Let Neoloader request a low queued file, download a chunk, and perform analysis in the client side. It could take the missing X bytes from the downloaded file for the incomplete chunk of FileA.exe and try to hash. If it fails, it could divide the size by 2, and take 2 streams, and repeat until a minimum size is reached.<br /><br />The key to this feature is to find a reliable size to perform a search upon, and an algorithm to identify the similarity of 2 files in the network. I am confident there has to be a byte-sized stream to inspect that has a probability above chance to match other files, given the enormous ammount of information we have.<br />Of course this is likely going to be &lt;64 bytes and meant for files that are nearing completion, I am thinking &lt;1024kb left, not to swarm the networks with redundant requests.<br />If this works, Neoloader could have an ultimate killer feature: to revive dead files in P2P networks.<br />Also, this would mean you did not download a file, but a mesh of several, which has other implications.<br /><br />Thank you and I hope you don't think I am crazy <img class="smilies" src="http://forum.neoloader.com/images/smilies/biggrin.png" alt=":D" title=":D" /><br />Keep up the great work!<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4040">desodorante</a> — Sat Nov 22, 2014 1:27 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php