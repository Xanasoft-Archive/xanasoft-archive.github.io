<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=168&amp;t=3292" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2013-07-03T07:21:50+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=168&amp;t=3292</id>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2013-07-03T07:21:50+01:00</updated>
<published>2013-07-03T07:21:50+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3292&amp;p=16345#p16345</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3292&amp;p=16345#p16345"/>
<title type="html"><![CDATA[Einpaar worte zu Neokad]]></title>

<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3292&amp;p=16345#p16345"><![CDATA[
Der NeoLoader hat ein eigenes Kad Netzwerk welches so designet ist das man ohne die Clients selber upzudaten neue Features hinzufÃ¼gen kann, das wird erreicht indem auf den nodes eine V8 Engine lÃ¤uft und fÃ¼r das verarbeiten der payload anfragen zustÃ¤ndig ist.<br />Wen man ein neuen payload typ hinzufÃ¼gen/modifizieren will braucht man dafÃ¼r nur ein script schreiben und es zusammen mit der anfrage verschicken.<br /><br />Das NeoKad ist zudem in der Lage rekursive lookups durchzufÃ¼hren womit der Ursprung eines lookups verschleiert/anonymisiert wird. Zudem kann das Netzwerk dazu verwendet werden verschleiert/anonymisiert beliebige packte zwischen nodes auszutauschen, was fÃ¼r ein anonymes P2P System verwendet wird.<br /><br />Als Transport Layer wird die UTP library verwendet (<a href="http://en.wikipedia.org/wiki/Micro_Transport_Protocol" class="postlink">Micro Transport Protocol - Wikipedia, the free encyclopedia</a>) wobei ale UTP packete obfusciert werden um ISP filtern zu entgehen ("statischer node spezifischer key" X "packet solt" damit wird jedes packte individuell RC4 verschlÃ¼sselt). Zudem steht eine starke end to end VerschlÃ¼sselung zur verfÃ¼gung (optional, zu Auswahl beim handshake stehen so ziemlich alle Algorithmen aus der CryptoPP library).<br />UTP erlaubt einfaches Nat Traversal so das auch nodes hinter einem NAT oder Firewall am Routing teilnehmen kÃ¶nnen.<br /><br />Das Routing kann dank der RekursivitÃ¤t auch mit einem fragmentiertem Netzwerk zurecht kommen. Also z.B. wen ein teil der Nodes nur IPv4 und ein anderer nur IPv6 haben, kÃ¶nnen sie dennoch mit einander Daten austauschen Ã¼ber die Nodes die beides unterstÃ¼tzen.<br /><br />Dieses System kÃ¶nnte man auch dazu benutzen absichtlich herbeigefÃ¼hrte Fragmentierung zu Ã¼berbrÃ¼cken, wen man z.B. eine Closed Source Only variante des NeoKad releasen wÃ¼rde welche Ã¼ber ein zusÃ¤tzlichen stÃ¤rker obfuscierten transport layer verfÃ¼gt und bei deutschen und chinesischen Benutzern automatisch den "Ã¶ffentlichen" transport layer deaktiviert.<br />So das Benutzer aus diesen LÃ¤ndern nicht in direkten Kontrakt treten kÃ¶nnen mit modifizierten (insbesondere loggenden) versonnen des Clients. Ja ich weiÃŸ security by obscurity, aber skype fÃ¤hrt damit ziemlich erfolgreich und die MAFIAA sind auch nicht gerade besonders IT affig, das sollte ihre logge effektiv aus dem Netzwerk aushalten in den LÃ¤ndern in den das bloÃŸe weiterleiten von Zufallsdaten zu Problemen fÃ¼hren kann.<br /><br />Im Prinzip ist das NeoKad kein explizit fÃ¼r filesharing gedachtes System, sonder eher ein general purpose Kad Netzwerk fÃ¼r alles mÃ¶gliche. Daher wird das NeoKad auch als separate exe released so das im Prinzip jeder Entwickler auf dieser basis ein eigenes Kad basiertes System fÃ¼r den eigen Gebrauch AufsÃ¤tzen kann.<br /><br />Denkbar wÃ¤re hier z.B. ein Zensur resistentes DNS System, oder vielleicht ein dezentraler messager, was auch immer.<br /><br />Das coole an dem Ansatz ist das sich ganz viele klein Projekte die selben Kad Nodes teilen, was der Netzwerk Performance sehr zu gute kommen sollte.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=561">DavidXanatos</a> — Wed Jul 03, 2013 7:21 am</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php