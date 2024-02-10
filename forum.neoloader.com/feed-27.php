<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=168" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-07-03T07:21:50+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=168</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-07-03T07:21:50+01:00</updated>
<published>2013-07-03T07:21:50+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3292&amp;p=16345#p16345</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3292&amp;p=16345#p16345"/>
<title type="html"><![CDATA[Erweiterungen • Einpaar worte zu Neokad]]></title>

<category term="Erweiterungen" scheme="http://forum.neoloader.com/viewforum.php?f=168" label="Erweiterungen"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3292&amp;p=16345#p16345"><![CDATA[
Der NeoLoader hat ein eigenes Kad Netzwerk welches so designet ist das man ohne die Clients selber upzudaten neue Features hinzufÃ¼gen kann, das wird erreicht indem auf den nodes eine V8 Engine lÃ¤uft und fÃ¼r das verarbeiten der payload anfragen zustÃ¤ndig ist.<br />Wen man ein neuen payload typ hinzufÃ¼gen/modifizieren will braucht man dafÃ¼r nur ein script schreiben und es zusammen mit der anfrage verschicken.<br /><br />Das NeoKad ist zudem in der Lage rekursive lookups durchzufÃ¼hren womit der Ursprung eines lookups verschleiert/anonymisiert wird. Zudem kann das Netzwerk dazu verwendet werden verschleiert/anonymisiert beliebige packte zwischen nodes auszutauschen, was fÃ¼r ein anonymes P2P System verwendet wird.<br /><br />Als Transport Layer wird die UTP library verwendet (<a href="http://en.wikipedia.org/wiki/Micro_Transport_Protocol" class="postlink">Micro Transport Protocol - Wikipedia, the free encyclopedia</a>) wobei ale UTP packete obfusciert werden um ISP filtern zu entgehen ("statischer node spezifischer key" X "packet solt" damit wird jedes packte individuell RC4 verschlÃ¼sselt). Zudem steht eine starke end to end VerschlÃ¼sselung zur verfÃ¼gung (optional, zu Auswahl beim handshake stehen so ziemlich alle Algorithmen aus der CryptoPP library).<br />UTP erlaubt einfaches Nat Traversal so das auch nodes hinter einem NAT oder Firewall am Routing teilnehmen kÃ¶nnen.<br /><br />Das Routing kann dank der RekursivitÃ¤t auch mit einem fragmentiertem Netzwerk zurecht kommen. Also z.B. wen ein teil der Nodes nur IPv4 und ein anderer nur IPv6 haben, kÃ¶nnen sie dennoch mit einander Daten austauschen Ã¼ber die Nodes die beides unterstÃ¼tzen.<br /><br />Dieses System kÃ¶nnte man auch dazu benutzen absichtlich herbeigefÃ¼hrte Fragmentierung zu Ã¼berbrÃ¼cken, wen man z.B. eine Closed Source Only variante des NeoKad releasen wÃ¼rde welche Ã¼ber ein zusÃ¤tzlichen stÃ¤rker obfuscierten transport layer verfÃ¼gt und bei deutschen und chinesischen Benutzern automatisch den "Ã¶ffentlichen" transport layer deaktiviert.<br />So das Benutzer aus diesen LÃ¤ndern nicht in direkten Kontrakt treten kÃ¶nnen mit modifizierten (insbesondere loggenden) versonnen des Clients. Ja ich weiÃŸ security by obscurity, aber skype fÃ¤hrt damit ziemlich erfolgreich und die MAFIAA sind auch nicht gerade besonders IT affig, das sollte ihre logge effektiv aus dem Netzwerk aushalten in den LÃ¤ndern in den das bloÃŸe weiterleiten von Zufallsdaten zu Problemen fÃ¼hren kann.<br /><br />Im Prinzip ist das NeoKad kein explizit fÃ¼r filesharing gedachtes System, sonder eher ein general purpose Kad Netzwerk fÃ¼r alles mÃ¶gliche. Daher wird das NeoKad auch als separate exe released so das im Prinzip jeder Entwickler auf dieser basis ein eigenes Kad basiertes System fÃ¼r den eigen Gebrauch AufsÃ¤tzen kann.<br /><br />Denkbar wÃ¤re hier z.B. ein Zensur resistentes DNS System, oder vielleicht ein dezentraler messager, was auch immer.<br /><br />Das coole an dem Ansatz ist das sich ganz viele klein Projekte die selben Kad Nodes teilen, was der Netzwerk Performance sehr zu gute kommen sollte.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Wed Jul 03, 2013 7:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ekliptor]]></name></author>
<updated>2012-07-30T00:10:43+01:00</updated>
<published>2012-07-30T00:10:43+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2694&amp;p=13913#p13913</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2694&amp;p=13913#p13913"/>
<title type="html"><![CDATA[Erweiterungen • NeoLoader Magnet Links for Hoster Downloads]]></title>

<category term="Erweiterungen" scheme="http://forum.neoloader.com/viewforum.php?f=168" label="Erweiterungen"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2694&amp;p=13913#p13913"><![CDATA[
You can generate NeoLoader Magnet links for any hoster link by using the following PHP function:<br /><div class="codebox"><p>Code: </p><code>function getNeoMagnetLink($file_name, $link_array, $with_neo_domain = true) {<br />    $link = 'magnet:?dn=' . urlencode($file_name);<br />    if ($with_neo_domain)<br />        $link = 'http://link.neoloader.to/' . $link;<br />    for ($i = 0; $i &lt; count($link_array); $i++)<br />        $link .= '&xs.' . ($i+1) . '=' . urlencode($link_array&#91;$i&#93;);<br />    return $link;<br />}</code></div><br /><br />Example call:<br /><div class="codebox"><p>Code: </p><code>$links = array('http://uploaded.to/file/3gkvtb8h');<br />$magnet_link = getNeoMagnetLink('NeoLoader Windows Installer', $links);<br />echo $magnet_link;</code></div><br />Will give you:<br /><div class="codebox"><p>Code: </p><code>http://link.neoloader.to/magnet:?dn=NeoLoader+Windows+Installer&xs.1=http%3A%2F%2Fuploaded.to%2Ffile%2F3gkvtb8h</code></div><br /><br /><br />Note:<br />Using the "Get Link" Feature of a NeoLoader will give you Magnet Links with more information like file hashes, file size, etc... If the files you want to link are stored on your local hard drive you, you should use a NeoLoader to generate these links. However, in case you just have some hoster links the code above will be perfectly fine to create a collection of links for a specific file name.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4324">Ekliptor</a> — Mon Jul 30, 2012 12:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ekliptor]]></name></author>
<updated>2012-07-29T23:49:08+01:00</updated>
<published>2012-07-29T23:49:08+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2693&amp;p=13912#p13912</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2693&amp;p=13912#p13912"/>
<title type="html"><![CDATA[Erweiterungen • NeoLoader JavaScript Web API]]></title>

<category term="Erweiterungen" scheme="http://forum.neoloader.com/viewforum.php?f=168" label="Erweiterungen"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2693&amp;p=13912#p13912"><![CDATA[
NeoLoader can be included into <strong>any website</strong>. You then can communicate with the NeoLoader of your website's visitor through our API.<br /><br />To include the API you have to add the following JavaScript code:<br /><div class="codebox"><p>Code: </p><code>&#91;font=monospace&#93;&lt;script type="text/javascript" src="&#91;URL&#93;http://localhost:1600/WebAPI/api/api.nocache.js&#91;/URL&#93;"&gt;&#91;/font&#93;&#91;font=monospace&#93;&lt;/script&gt;<br />&#91;/font&#93;&#91;font=monospace&#93;&lt;div id="neoLogin"&gt;&#91;/font&#93;&#91;font=monospace&#93;&lt;/div&gt;&#91;/font&#93;</code></div><br />In case you want to include a NeoLoader <span style="text-decoration: underline">running on a domain other than localhost</span>, you have to add the following:<br /><div class="codebox"><p>Code: </p><code>&#91;font=monospace&#93;&lt;script type="text/javascript"&gt;<br />&#91;/font&#93;&#91;font=monospace&#93;if (typeof Neo === "undefined")<br />    Neo = new Object();<br />Neo.address = "http://yourdomain:1600";<br />&lt;/script&gt;<br />&#91;/font&#93;&#91;font=monospace&#93;&lt;script type="text/javascript" src="&#91;url=http://localhost:1600/WebAPI/api/api.nocache.js&#93;http://yourdomain:1600/WebAPI/api/api.nocache.js&#91;/URL&#93;"&gt;&#91;/font&#93;&#91;font=monospace&#93;&lt;/script&gt;<br />&#91;/font&#93;&#91;font=monospace&#93;&lt;div id="neoLogin"&gt;&#91;/font&#93;&#91;font=monospace&#93;&lt;/div&#91;/font&#93;</code></div><br /><br /><br /><br /><span style="font-size: 134%; line-height: normal">The API provides the following functionality:<br /></span><br /><span style="color: #b22222"><span style="font-size: 100%; line-height: normal"><strong>Events:</strong></span></span><br /><strong>Neo.onReady()</strong><br /><div class="codebox"><p>Code: </p><code>&#91;font=monospace&#93;if (typeof Neo === "undefined")&#91;/font&#93;<br />&#91;font=monospace&#93;    Neo = new Object();&#91;/font&#93;<br />&#91;font=courier new&#93;Neo.onReady = function() {&#91;/font&#93;<br />&#91;font=courier new&#93;    // NeoLoader API can now be used...&#91;/font&#93;<br />&#91;font=courier new&#93;}&#91;/font&#93;</code></div><br /><br /><br /><br /><strong><span style="font-size: 100%; line-height: normal"><span style="color: #b22222">Functions:</span><br /></span>Neo.search.startSearch(keyword, network, callback)</strong><br />/**<br />     * Starts a search for a given keyword.<br />     * @param keyword (String) Keyword to search for<br />     * @param network (String) Network to be searched. Allowed values: "Torrent", "MuleKad"<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.search.fetchSeachResults(searchID, callback)<br /></strong>/**<br />     * Gets search results for a given search ID.<br />     * @param searchID (Number) Search ID<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.search.fetchRunningSearches(callback)</strong><br />/**<br />     * Gets all currently open searches.<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.search.destroySearch(searchID)</strong><br />/**<br />     * Destroys an open search.<br />     * @param searchID (Number) Search ID<br />     */<br /><br /><strong>Neo.grabber.startGrabberTask(links, callback)</strong><br />/**<br />     * Starts a new file grabber task, i.e. searches the given links for possible downloads.<br />     * <br />You have to call setFile() with "Grab" as action and the file ID from fetchGrabberTaskResults(*task ID this function returns*) to start downloading a file you grabbed with this function.<br />     * @param links (String) String containing download link(s)<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.grabber.fetchGrabberTaskResults(taskID, callback)</strong><br />/**<br />     * Gets file grabber results for a given task ID.<br />     * @param taskID (Number) Grabber Task ID<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.grabber.fetchRunningGrabberTasks(callback)</strong><br />/**<br />     * Gets all currently open grabber tasks.<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.grabber.destroyGrabberTask(taskID)</strong><br />/**<br />     * Destroys an open grabber task.<br />     * @param taskID (Number) Grabber Task ID<br />     */<br /><br /><strong>Neo.files.deleteFile(id)<br /></strong>/**     * Deletes a file from NeoLoader and hard disk.<br />     * @param id (Number) File ID<br />     */<br /><br /><strong>Neo.files.fetchFiles(state, callback)</strong><br />/**<br />     * Gets all files currently being in the given state.<br />     * @param state (String) Regular Expression String specifying the desired file state(s).<br />     * <br />Acceptable states: Removed, Duplicate, Paused, Started, Stopped, Temp, Pending, Loading, Sharing, Error<br />     * <br />Examples: all Downloads "(Started|Stopped|Paused) Loading", all complete files "(Started|Stopped|Paused) Sharing"<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.files.setFile(id, action, request, callback)</strong><br />/**<br />     * Sets a file to a given state.<br />     * @param id (Number) File ID<br />     * @param action (String) State the file is set to or action which is performed for the file. May be empty (i.e. "").<br />     * <br />Acceptable actions: Start, Pause, Stop, Remove, Delete, MakeTorrent, ClearTorrent, UploadTorrent, Grab, Upload, UploadArchive, RemoveArchive, Check, Cleanup, Reset<br />     * @param request (JavaScriptObject) Request object specifying more details. Usually not needed. May be null.<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.files.addDownloadLinks(filename, links, callback)</strong><br />/**<br />     * Adds download links.<br />     * <br />Unlike startGrabberTask() this function immediately starts downloading the link(s).<br />     * @param filename (String) Name of the file to be created for the given download links.<br />     * @param links (String) download links to add<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.files.addMagnetLinks(links, callback)</strong><br />/**<br />     * Adds Magnet links.<br />     * <br />Unlike startGrabberTask() this function immediately starts downloading the link(s).<br />     * @param links (String) Magnet links to add<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.files.addFiles(files, startDownload, callback)<br /></strong>/**     * Adds torrents or dlc containers to download. You cann call this function directly from JavaScript or add it to an input field of type "file" or a file drop-listener, etc..<br />     * <br />Example: &lt;input type="file" multiple="" onchange="Neo.files.addFiles(this.files, true, {onUpdate: function(json) {...}})"&gt;<br />     * @param files (Object-Array) Files to add<br />     * @param startDownload If &lt;tt&gt;true&lt;/tt&gt;, the download starts immediately. If &lt;tt&gt;false&lt;/tt&gt;, the files are just added to the grabber list and you have to call<br />     * setFile() with "Grab" as action and the file ID from fetchGrabberTaskResults(*task ID this callback returns*) to start downloading.<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.files.getFileDetails(id, callback)<br /></strong>/**     * Gets file details.<br />     * <br />Some of this information is also returned by fetchFiles(), but this function returns more information.<br />     * @param id (Number) File ID<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><strong>Neo.files.getFileLink(id, callback)<br /></strong>/**     * Returns the Neo Magnet download link for this file.<br />     * @param id (Number) File ID<br />     * @param callback (JavaScriptObject) Object receiving results: {onUpdate: function(json) {...}}<br />     */<br /><br /><br /><strong>Example API Call:</strong><br /><div class="codebox"><p>Code: </p><code>&#91;font=monospace&#93;&lt;script type="text/javascript"&gt;<br />&#91;/font&#93;&#91;font=courier new&#93;Neo.files.addMagnetLinks("your-magnet-link...", {<br />    onUpdate: function(json) {<br />        // link has been added, look at json variable for details<br />    }<br />});&#91;/font&#93;<br />&#91;font=monospace&#93;&lt;/script&gt;&#91;/font&#93;</code></div><br /><br /><br /><br /><strong><span style="font-size: 100%; line-height: normal"><span style="color: #b22222">Supported Languages:<br /></span></span></strong>The NeoLoader API is currently available in English and German. To set the language of the API you have to set a cookie in your website.<br />The cookie is called "lang" and acceptable values are "en" and "de". Default will be English (if no language cookie or an unknown value is present).<br /><br /><br /><br />If you have any questions or suggestions concerning our API don't hesitate to ask us.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4324">Ekliptor</a> — Sun Jul 29, 2012 11:49 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php