<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=168&amp;t=2694" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2012-07-30T00:10:43+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=168&amp;t=2694</id>
<entry>
<author><name><![CDATA[Ekliptor]]></name></author>
<updated>2012-07-30T00:10:43+01:00</updated>
<published>2012-07-30T00:10:43+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2694&amp;p=13913#p13913</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2694&amp;p=13913#p13913"/>
<title type="html"><![CDATA[NeoLoader Magnet Links for Hoster Downloads]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2694&amp;p=13913#p13913"><![CDATA[
You can generate NeoLoader Magnet links for any hoster link by using the following PHP function:<br /><div class="codebox"><p>Code: </p><code>function getNeoMagnetLink($file_name, $link_array, $with_neo_domain = true) {<br />    $link = 'magnet:?dn=' . urlencode($file_name);<br />    if ($with_neo_domain)<br />        $link = 'http://link.neoloader.to/' . $link;<br />    for ($i = 0; $i &lt; count($link_array); $i++)<br />        $link .= '&xs.' . ($i+1) . '=' . urlencode($link_array&#91;$i&#93;);<br />    return $link;<br />}</code></div><br /><br />Example call:<br /><div class="codebox"><p>Code: </p><code>$links = array('http://uploaded.to/file/3gkvtb8h');<br />$magnet_link = getNeoMagnetLink('NeoLoader Windows Installer', $links);<br />echo $magnet_link;</code></div><br />Will give you:<br /><div class="codebox"><p>Code: </p><code>http://link.neoloader.to/magnet:?dn=NeoLoader+Windows+Installer&xs.1=http%3A%2F%2Fuploaded.to%2Ffile%2F3gkvtb8h</code></div><br /><br /><br />Note:<br />Using the "Get Link" Feature of a NeoLoader will give you Magnet Links with more information like file hashes, file size, etc... If the files you want to link are stored on your local hard drive you, you should use a NeoLoader to generate these links. However, in case you just have some hoster links the code above will be perfectly fine to create a collection of links for a specific file name.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4324">Ekliptor</a> — Mon Jul 30, 2012 12:10 am</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php