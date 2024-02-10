<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://forum.neoloader.com/feed.php?f=166" />

<title>NeoLoader Forum</title>
<subtitle>Forum of the NeoLoader P2P Client/Downloader</subtitle>
<link href="http://forum.neoloader.com/index.php" />
<updated>2015-11-13T10:59:58+01:00</updated>

<author><name><![CDATA[NeoLoader Forum]]></name></author>
<id>http://forum.neoloader.com/feed.php?f=166</id>
<entry>
<author><name><![CDATA[thecoder2012]]></name></author>
<updated>2015-11-13T10:59:58+01:00</updated>
<published>2015-11-13T10:59:58+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3196&amp;p=21869#p21869</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3196&amp;p=21869#p21869"/>
<title type="html"><![CDATA[Feature Wünsche • Re: Integration von Captcha Dienste wie 9kw.eu?]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3196&amp;p=21869#p21869"><![CDATA[
<blockquote><div><cite>DavidXanatos wrote:</cite><br /><blockquote><div><cite>thecoder2012 wrote:</cite>Genial! Hoffentlich noch in diesem Jahr. :1:<br /></div></blockquote><br /><br />garatiert noch diesen monat *g*</div></blockquote><br />Bisher funktioniert 9kw.eu leider nicht sauber. Getestet mit NeoLoade v0.53a<br />Erstens ist immer noch Benutzername+Passwort für 9kw.eu hinterlegt statt Feld &quot;API Key&quot; und zweitens crasht NeoLoader wenn man in beide Felder dann einen API Key einträgt und auf &quot;Prüfen&quot; geht. Siehe <a href="http://forum.neoloader.com/viewtopic.php?f=165&amp;t=6816" class="postlink">Crashdump</a> und die <a href="http://forum.neoloader.com/viewtopic.php?f=167&amp;t=3358&amp;p=16897" class="postlink">Wünsche zwecks Captcha Dienste</a>.<br /><br />Das Captcha wird mit max. Timeout von 200 Sekunden eingereicht beim Downloadversuch und andere Optionen sind leider bisher auch nicht möglich. Damit sind so genannte Free Downloads mit Captcha nur erschwert bei Neoloader möglich. <br /><br />Hab auf Github leider auch nicht den Source für die einzelnen Captcha Dienste gefunden (Scripts.7z?)<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3225">thecoder2012</a> — Fri Nov 13, 2015 10:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DavidXanatos]]></name></author>
<updated>2015-04-12T09:39:54+01:00</updated>
<published>2015-04-12T09:39:54+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21673#p21673</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21673#p21673"/>
<title type="html"><![CDATA[Feature Wünsche • Re: NeuLoader 32bit Linux Version]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
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
<title type="html"><![CDATA[Feature Wünsche • Re: NeuLoader 32bit Linux Version]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
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
<title type="html"><![CDATA[Feature Wünsche • Re: NeuLoader 32bit Linux Version]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
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
<title type="html"><![CDATA[Feature Wünsche • Re: NeuLoader 32bit Linux Version]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=2965&amp;p=21639#p21639"><![CDATA[
Hallo,<br /><br />ich habe Interesse am Betrieb des neoloader core auf meinem QNAP TS410<br /><br /><div class="codebox"><p>Code: </p><code>&#91;~&#93; # uname -a<br />Linux TS410 3.4.6 #1 Mon Jan 26 15:32:29 CST 2015 armv5tel unknown<br /></code></div><br /><br />Kriegst Du das hin?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4393">matchi</a> — Thu Mar 26, 2015 7:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ekliptor]]></name></author>
<updated>2014-01-11T15:33:25+01:00</updated>
<published>2014-01-11T15:33:25+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3395&amp;p=17172#p17172</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3395&amp;p=17172#p17172"/>
<title type="html"><![CDATA[Feature Wünsche • Deutsche Übersetzung für NeoLoader]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3395&amp;p=17172#p17172"><![CDATA[
Wir suchen dringend deutsche Ãœbersetzer fÃ¼r NeoLoader. Bitte meldet euch bei Interesse via PM bei David oder mir.<br />Es kann auch in kleinen Abschnitten Ãœbersetzt werden.<br /><br />Vielen Dank <img class="smilies" src="http://forum.neoloader.com/images/smilies/16.gif" alt=":16:" title="16" /><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=4324">Ekliptor</a> — Sat Jan 11, 2014 3:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-12-10T20:30:23+01:00</updated>
<published>2013-12-10T20:30:23+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17061#p17061</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17061#p17061"/>
<title type="html"><![CDATA[Feature Wünsche • ]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17061#p17061"><![CDATA[
Yes we understood, like eMule's categories... or uTorrent etiquets.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Tue Dec 10, 2013 8:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[skiniz]]></name></author>
<updated>2013-12-10T14:36:52+01:00</updated>
<published>2013-12-10T14:36:52+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17059#p17059</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17059#p17059"/>
<title type="html"><![CDATA[Feature Wünsche • ]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17059#p17059"><![CDATA[
hello, I did not want to split the download, my question was to create filters to display only files of a protocol within the download section<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3612">skiniz</a> — Tue Dec 10, 2013 2:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[esher]]></name></author>
<updated>2013-12-10T13:48:14+01:00</updated>
<published>2013-12-10T13:48:14+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17058#p17058</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17058#p17058"/>
<title type="html"><![CDATA[Feature Wünsche • ]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17058#p17058"><![CDATA[
hi<br /><br />2) neoloader could download the same file from different protocols, there is no reason to divide them. <br />if you're, istead, asking for the window tab where u can find all sources you found for that file, you need to select the file you're downloading, and open the transfers tab (under the download window), so u can see source <img class="smilies" src="http://forum.neoloader.com/images/smilies/tongue.png" alt=":p" title=":p" /> rotocol:ip.<br /><br />ciao<br /><br />2) neoloder in realtÃ  puÃ² scaricare lo stesso file contemporaneamente da diversi protocolli, non c'Ã¨ ragione per dividerli. Se invece stai chiedendo dove puoi trovare la finestra con tutte le fonti e il relativo proticollo, dovresti selezionare il file che stai scaricando ed aprire la tabella trasferimenti che si treova giusto in basso, vedrai source <img class="smilies" src="http://forum.neoloader.com/images/smilies/tongue.png" alt=":p" title=":p" /> rotocol:ip.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=1009">esher</a> — Tue Dec 10, 2013 1:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[skiniz]]></name></author>
<updated>2013-12-09T21:59:46+01:00</updated>
<published>2013-12-09T21:59:46+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17055#p17055</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17055#p17055"/>
<title type="html"><![CDATA[Feature Wünsche • ]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17055#p17055"><![CDATA[
si lo vista la sezione in inglese, ti ho risposto qui perchÃ¨ la discussione era giÃ  aperta<br /><br /><br />ps: cmq la funzione era in interfaccia ma nonostante sia selezionata non li prende in automatico i magnet, penso sia una configurazione di chrome che non la fa associare con neoloader<br /><br />questo Ã¨ l'ultimo messaggio ora mi sposto nella sezione in inglese<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3612">skiniz</a> — Mon Dec 09, 2013 9:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-12-09T15:53:01+01:00</updated>
<published>2013-12-09T15:53:01+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17054#p17054</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17054#p17054"/>
<title type="html"><![CDATA[Feature Wünsche • ]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17054#p17054"><![CDATA[
In futuro probabilmente si potrÃ  fare, per il discorso di youtube, non so.<br /><br />Allora Ã¨ in Interfaccia, "Register File Extensions".<br /><br />Quindi non riesci ad utilizzare neanche la sezione inglese?<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Mon Dec 09, 2013 3:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[skiniz]]></name></author>
<updated>2013-12-09T14:41:31+01:00</updated>
<published>2013-12-09T14:41:31+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17053#p17053</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17053#p17053"/>
<title type="html"><![CDATA[Feature Wünsche • ]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17053#p17053"><![CDATA[
io per ora uso jdownloader per scaricare dai siti hoster e youtube, se viene implementato posso usare solo neoloader come unico programma per torrent, ed2k, siti host etc.,<br /><br /><br />altro suggerimento: <br /><br />io amo tantissimo in utorrent le etichette che uso per catalogare i file in download/upload, se inserisco un etichetta utorrent mi crea direttamente la cartella e scarica i file in quella cartella, se Ã¨ possibile si potrebbe fare anche in neoloader<br /><br />questo e quello che vedo nel menÃ¹ opzione/generale<br /><br /><a href="http://imageshack.com/i/0ysqskj" class="postlink"><img src="http://imagizer.imageshack.us/v2/150x100q90/c/34/sqsk.jpg" class="postimage" alt="Image" /></a><p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3612">skiniz</a> — Mon Dec 09, 2013 2:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neo26]]></name></author>
<updated>2013-12-09T11:53:27+01:00</updated>
<published>2013-12-09T11:53:27+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17051#p17051</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17051#p17051"/>
<title type="html"><![CDATA[Feature Wünsche • ]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17051#p17051"><![CDATA[
Trovi difficoltÃ  anche ad utilizzare la sezione inglese ? Comunque non preoccuparti, Ã¨ possibile aprire una sezione italiana in futuro... per questa volta va bene un eccezione.<br /><br />Il numero 4 c'Ã¨ giÃ , in opzioni/generale. ChiderÃ² se si puÃ² inserire nel wizard... non ricordo se c'Ã¨ giÃ  anche qui...<br />Per la numero 3, a che scopo? Ci sono giÃ  mille metodi per scaricare video da youtube...<br /><br />Grazie della segnalazione intanto, giro tutto allo sviluppatore.<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=2495">Neo26</a> — Mon Dec 09, 2013 11:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[skiniz]]></name></author>
<updated>2013-12-09T00:19:37+01:00</updated>
<published>2013-12-09T00:19:37+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17049#p17049</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17049#p17049"/>
<title type="html"><![CDATA[Feature Wünsche • ]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17049#p17049"><![CDATA[
il post lo creato io, vi metto ance versione italiana<br /><br />salve, sono italiano sto scrivendo tramite google translator, vorrei proporre alcuni suggerimenti:<br /><br />1) ricerca file per formato (video, audio, archivio, etc.), oppure dopo aver effettuato la ricerca possibilitÃ  di filtrare per formato;<br /><br />2) nella sezione downloads creare delle sottosezioni di visualizzazione, es sez torrent per i file torret, ed2k, neoloader, on-line;<br /><br />3) ricerca file anche su siti di hostin video come youtube ed altri;<br /><br />4) possibilitÃ  di associare i magnet link a neoloader, es. io clicco su un magnet link ed il file viene preso automaticamente da neoloader come avviene per i torrent;<br /><br /><br />bug version 0.42e<br /><br />vari crash, webUi non carica<p>Statistics: Posted by <a href="http://forum.neoloader.com/memberlist.php?mode=viewprofile&amp;u=3612">skiniz</a> — Mon Dec 09, 2013 12:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2013-12-09T00:13:40+01:00</updated>
<published>2013-12-09T00:13:40+01:00</published>
<id>http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17048#p17048</id>
<link href="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17048#p17048"/>
<title type="html"><![CDATA[Feature Wünsche • VorschlÃ¤ge]]></title>

<category term="Feature Wünsche" scheme="http://forum.neoloader.com/viewforum.php?f=166" label="Feature Wünsche"/>
<content type="html" xml:base="http://forum.neoloader.com/viewtopic.php?t=3373&amp;p=17048#p17048"><![CDATA[
hallo, ich bin mit Google Translator Italian'm Schreiben, wÃ¼rde Ich mag einige VorschlÃ¤ge vor:<br /><br />1) Suche nach Datei-Format (Video-, Audio-, Archiv-, etc.), oder nach der Suchoption von Filtern durch Format.<br /><br />2) im Download-Bereich auf Teilabschnitten der Visualisierung zu erstellen, z. B. Abschnitt fÃ¼r Torrent-Dateien Torret, ed2k, neoloader, on-line;<br /><br />3) Suchen Sie auch Dateien auf Websites wie YouTube und anderen Video-hostin;<br /><br />4) die FÃ¤higkeit, Magnetverbindungen assoziieren neoloader, zB. Ich auf einem Magneten Link klicken und die Datei wird automatisch von neoloader genommen, wie es der Fall fÃ¼r Torrents;<br /><br /><br />Bug-Version 0.42e<br /><br />verschiedene Crash WebUI nicht geladen<p>Statistics: Posted by Guest — Mon Dec 09, 2013 12:13 am</p><hr />
]]></content>
</entry>
</feed>Fatal: Not able to open ./cache/data_global.php