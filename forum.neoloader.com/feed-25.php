<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=167" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-11-13T15:27:51+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=167</id>
<entry>
<author><name><![CDATA[thecoder2012]]></name></author>
<updated>2013-11-13T15:27:51+01:00</updated>
<published>2013-11-13T15:27:51+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3358&amp;p=16897#p16897</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3358&amp;p=16897#p16897"/>
<title type="html"><![CDATA[Script Entwicklung • Beispiel / Anleitung um einen Captcha Service ala 9kw.eu per Script zu integrieren?]]></title>

<category term="Script Entwicklung" scheme="http://forum.neoloader.com/viewforum.php?f=167" label="Script Entwicklung"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3358&amp;p=16897#p16897"><![CDATA[
<blockquote><div><cite>DavidXanatos wrote:</cite><br />Bitte NeoLoader updaten, und im tree unter services-&gt;&gt;Captcha solver schauen, da sollten 4 dienste drin sein inklusive  9kw.eu<br /></div></blockquote><br />Okay danke. Scheint nach einem Update in der Tat so zu sein. <br /><br />Nur der Button &quot;Buy Account&quot; bei 9kw.eu fährt nach <a href="http://neoloader.to/affiliate.php?domain=9kw.eu" class="postlink">http://neoloader.to/affiliate.php?domain=9kw.eu</a> aber dort scheint nichts dahinter zu sein? (reflink ist in jedem account bei 9kw zu finden)<br /><br />Dazu hat 9kw ja einen API Key und nicht Username+Passwort für Zugriffe über Downloadtools.<br />Support von Mouse-/Klickcaptchas (für 9kw) vielleicht integrieren damit man die Plugins für die File-/Linkhoster entsprechend anpassen kann.<br /><br />Habe mir gerade mal den Source von 9kweu.js angeschaut und plowshare ist kein gutes Beispiel für die Integration. Issue bei Plowshare ist dazu auch offen bzw. der Entwickler dort arbeitet an einer besseren Integration.<br /><br />Änderungsvorschläge:<br />1. Bei &quot;source&quot; den Wert plowshare in neoloader Ã¤ndern. (plowshare steht zweimal im Code)<br />2. maxtimeout auf 300 erhöhen sonst ist die interne Priorität vom Vorgang bei 9kw geringer.<br />3. 10+6+6+7+7+8+8+9+9+10+10+20+20+20+30+30=210 =&gt; erhöhen auf 300 (am besten den max. Timeout einstellbar machen)<br />4. Obiger Link anpassen sonst sind neue User verwirrt, wenn es nicht funktioniert.<br />5. Wenn möglich bei 9kw/antigate das Feld auf &quot;API Key&quot; ändern statt Username/Password (laut Code wird Username ignoriert)<br />6. Möglichst noch Optionen einbauen für die Accounts (Guthaben vom Account ggf. zusätzliche Optionen wie Prio/confirm bei 9kw/cbh/antigate)<br />7. Falscher API Key wird auch mit Status &quot;Ok&quot; angezeigt.<br /><br />Freue mich das Neoloader auch in diesem Bereich langsam Fortschritte macht.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3225">thecoder2012</a> — Wed Nov 13, 2013 3:27 pm</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php