/**
 * German translation
 * @author JPG & Mace <dev@flying-datacenter.de>
 * @author tora60 from pragmaMx.org
 * @version 2013-05-01
 */
if (elFinder && elFinder.prototype && typeof(elFinder.prototype.i18) == 'object') {
	elFinder.prototype.i18.de = {
		translator : 'JPG & Mace &lt;dev@flying-datacenter.de&gt;, tora60 from pragmaMx.org',
		language   : 'Deutsch',
		direction  : 'ltr',
		dateFormat : 'd. M. Y h:i', // 13. Mai 2012 05:27
		fancyDateFormat : '$1 h:i', // will produce smth like: Today 12:25 PM
		messages   : {
			
			/********************************** errors **********************************/
			'error'                : 'Fehler',
			'errUnknown'           : 'Unbekannter Fehler.',
			'errUnknownCmd'        : 'Unbekannter Befehl.',
			'errJqui'              : 'Ungültige jQuery UI Konfiguration. Die Komponenten Selectable, draggable und droppable müssen inkludiert sein.',
			'errNode'              : 'Für elFinder muss das DOM Element erstellt werden.',
			'errURL'               : 'Ungültige elFinder Konfiguration! Die URL Option nicht gesetzt.',
			'errAccess'            : 'Zugriff verweigert.',
			'errConnect'           : 'Verbindung zum Backend fehlgeschlagen',
			'errAbort'             : 'Verbindung abgebrochen.',
			'errTimeout'           : 'Zeitüberschreitung der Verbindung.',
			'errNotFound'          : 'Backend nicht gefunden.',
			'errResponse'          : 'Ungültige Backend Antwort.',
			'errConf'              : 'Ungültige Backend Konfiguration.',
			'errJSON'              : 'PHP JSON Modul nicht vorhanden.',
			'errNoVolumes'         : 'Lesbare Volumes nicht vorhanden.',
			'errCmdParams'         : 'Ungültige Parameter für Befehl: "$1".',
			'errDataNotJSON'       : 'Daten nicht im JSON Format.',
			'errDataEmpty'         : 'Daten sind leer.',
			'errCmdReq'            : 'Backend Anfrage benötigt Befehl.',
			'errOpen'              : 'Kann "$1" nicht öffnen',
			'errNotFolder'         : 'Objekt ist kein Ordner.',
			'errNotFile'           : 'Objekt ist keine Datei.',
			'errRead'              : 'Kann "$1" nicht öffnen.',
			'errWrite'             : 'Kann nicht in "$1" schreiben.',
			'errPerm'              : 'Zugriff verweigert.',
			'errLocked'            : '"$1" ist gelockt und kann nicht umbenannt, verschoben oder gelöscht werden.',
			'errExists'            : 'Die Datei "$1" existiert bereits.',
			'errInvName'           : 'Ungültiger Datei Name.',
			'errFolderNotFound'    : 'Ordner nicht gefunden.',
			'errFileNotFound'      : 'Datei nicht gefunden.',
			'errTrgFolderNotFound' : 'Zielordner "$1" nicht gefunden.',
			'errPopup'             : 'Der Browser hat das Pop-Up-Fenster unterbunden. Um die Datei zu öffnen, Pop-Ups in den Browser Einstellungen aktivieren.',
			'errMkdir'             : 'Kann Ordner "$1" nicht erstellen.',
			'errMkfile'            : 'Kann Datei "$1" nicht erstellen.',
			'errRename'            : 'Kann "$1" nicht umbenennen.',
			'errCopyFrom'          : 'Kopieren von Dateien von "$1" nicht erlaubt.',
			'errCopyTo'            : 'Kopieren von Dateien nach "$1" nicht erlaubt.',
			'errUpload'            : 'Upload Fehler.',
			'errUploadFile'        : 'Kann "$1" nicht hochladen.',
			'errUploadNoFiles'     : 'Keine Dateien zum Hochladen gefunden.',
			'errUploadTotalSize'   : 'Daten überschreiten die Maximalgröße.',
			'errUploadFileSize'    : 'Die Datei überschreitet die Maximalgröße',
			'errUploadMime'        : 'Dateityp nicht zulässig.',
			'errUploadTransfer'    : '"$1" Transfer Fehler.',
			'errNotReplace'        : 'Das Objekt "$1" existiert bereits an dieser Stelle und kann nicht durch ein Objekt eines anderen Typs ersetzt werden.',
			'errReplace'           : 'Kann "$1" nicht ersetzen.',
			'errSave'              : 'Kann "$1" nicht speichern.',
			'errCopy'              : 'Kann "$1" nicht kopieren.',
			'errMove'              : 'Kann "$1" nicht verschieben.',
			'errCopyInItself'      : '"$1" kann sich nicht in sich selbst kopieren.',
			'errRm'                : 'Kann "$1" nicht enfernen.',
			'errRmSrc'             : 'Kann Quelldatei(en) nicht entfernen.',
			'errExtract'           : 'Kann "$1" nicht entpacken .',
			'errArchive'           : 'Archiv konnte nicht erstellt werden.',
			'errArcType'           : 'Archivtyp nicht untersützt.',
			'errNoArchive'         : 'Bei der Datei handelt es nicht um ein Archiv oder der Archivtyp nicht unterstütz.',
			'errCmdNoSupport'      : 'Das Backend unterstütz diesen Befehl nicht.',
			'errReplByChild'       : 'Der Ordner “$1” kann nicht durch etwas ersetzt werden, das ihn selbst enthält.',
			'errArcSymlinks'       : 'Aus Sicherheitsgründen ist es verboten, ein Archiv mit symbolischen Links zu extrahieren.',
			'errArcMaxSize'        : 'Die Archiv Dateien übersteigen die maximal erlaubte Größe.',
			'errResize'            : 'Größe von "$1" kann nicht geändert werden.',
			'errUsupportType'      : 'Nicht unterstützter Dateityp.',
			'errNotUTF8Content'    : 'Die Datei "$1" ist nicht im UTF-8 Format und kann nicht editiert werden.',
			'errNetMount'          : 'Verbindung mit "$1" nicht möglich.',
			'errNetMountNoDriver'  : 'Nicht unterstütztes Protokoll.',
			'errNetMountFailed'    : 'Verbindung fehlgeschlagen.',
			'errNetMountHostReq'   : 'Host benötigz.',
			'errSessionExpires'    : 'Ihre Sitzung ist aufgrund von Inaktivität abgelaufen',
			'errCreatingTempDir'   : 'Erstellung des temporären Ordners nicht möglich: "$1"',
			'errFtpDownloadFile'   : 'Download der Datei über FTP nicht möglich: "$1"',
			'errFtpUploadFile'     : 'Upload der Datei zu FTP nicht möglich: "$1"',
			'errFtpMkdir'          : 'Erstellung des Remote-Ordners auf FTP nicht möglich: "$1"',
			'errArchiveExec'       : 'Fehler bei der Archivierung der Dateien: "$1"',
			'errExtractExec'       : 'Fehler beim Extrahieren der Dateien: "$1"',

			/******************************* commands names ********************************/
			'cmdarchive'   : 'Archiv erstellen',
			'cmdback'      : 'Zurück',
			'cmdcopy'      : 'Kopieren',
			'cmdcut'       : 'Ausschreiden',
			'cmddownload'  : 'Herunterladen',
			'cmdduplicate' : 'Duplizieren',
			'cmdedit'      : 'Datei bearbeiten',
			'cmdextract'   : 'Archiv entpacken',
			'cmdforward'   : 'Vorwärts',
			'cmdgetfile'   : 'Datei auswählen',
			'cmdhelp'      : 'über diese Software',
			'cmdhome'      : 'Startordner',
			'cmdinfo'      : 'Informationen',
			'cmdmkdir'     : 'Neuer Ordner',
			'cmdmkfile'    : 'Neue Textdatei',
			'cmdopen'      : 'öffnen',
			'cmdpaste'     : 'Einfügen',
			'cmdquicklook' : 'Vorschau',
			'cmdreload'    : 'Neuladen',
			'cmdrename'    : 'Umbenennen',
			'cmdrm'        : 'Löschen',
			'cmdsearch'    : 'Suchen',
			'cmdup'        : 'In übergeordneten Ordner wechseln',
			'cmdupload'    : 'Datei hochladen',
			'cmdview'      : 'Ansehen',
			'cmdresize'    : 'Größe ändern & drehen',
			'cmdsort'      : 'Sortieren',
			'cmdnetmount'  : 'Verbinde mit Netzwerkspeicher',
			
			/*********************************** buttons ***********************************/ 
			'btnClose'  : 'Schließen',
			'btnSave'   : 'Speichern',
			'btnRm'     : 'Entfernen',
			'btnApply'  : 'Anwenden',
			'btnCancel' : 'Abbrechen',
			'btnNo'     : 'Nein',
			'btnYes'    : 'Ja',
			'btnMount'  : 'Verbinden',
			/******************************** notifications ********************************/
			'ntfopen'     : 'öffne Ordner',
			'ntffile'     : 'öffne Datei',
			'ntfreload'   : 'Ordnerinhalt neu',
			'ntfmkdir'    : 'Erstelle Ordner',
			'ntfmkfile'   : 'Erstelle Dateien',
			'ntfrm'       : 'Lösche Dateien',
			'ntfcopy'     : 'Kopiere Dateien files',
			'ntfmove'     : 'Verschiebe Dateien',
			'ntfprepare'  : 'Kopiervorgang initialisieren',
			'ntfrename'   : 'Benenne Dateien um',
			'ntfupload'   : 'Dateien hochladen',
			'ntfdownload' : 'Dateien herunterladen',
			'ntfsave'     : 'Speichere Datei',
			'ntfarchive'  : 'Erstelle Archiv',
			'ntfextract'  : 'Entpacke Dateien',
			'ntfsearch'   : 'Suche',
			'ntfresize'   : 'Bildgrößen ändern',
			'ntfsmth'     : 'Bin beschäftigt',
			'ntfloadimg'  : 'Bild laden',
			'ntfnetmount' : 'Mit Netzwerkspeicher verbinden',
			
			/************************************ dates **********************************/
			'dateUnknown' : 'unbekannt',
			'Today'       : 'Heute',
			'Yesterday'   : 'Gestern',
			'Jan'         : 'Jan',
			'Feb'         : 'Feb',
			'Mar'         : 'Mär',
			'Apr'         : 'Apr',
			'May'         : 'Mai',
			'Jun'         : 'Jun',
			'Jul'         : 'Jul',
			'Aug'         : 'Aug',
			'Sep'         : 'Sep',
			'Oct'         : 'Okt',
			'Nov'         : 'Nov',
			'Dec'         : 'Dez',

			/******************************** sort variants ********************************/
			'sortname'         : 'nach Name',
			'sortkind'         : 'nach Typ',
			'sortsize'         : 'nach Größe',
			'sortdate'         : 'nach Datum',
			'sortFoldersFirst' : 'Ordner zuerst',

			/********************************** messages **********************************/
			'confirmReq'      : 'Bestätigung Benötigt',
			'confirmRm'       : 'Sollen die Dateien gelöscht werden?<br/>Dies kann nicht rückgängig gemacht werden!',
			'confirmRepl'     : 'Datei ersetzen?',
			'apllyAll'        : 'Alles bestätigen',
			'name'            : 'Name',
			'size'            : 'Größe',
			'perms'           : 'Berechtigungen',
			'modify'          : '&Auml;nderungsdatum',
			'kind'            : 'Typ',
			'read'            : 'lesen',
			'write'           : 'schreiben',
			'noaccess'        : 'Kein Zugriff',
			'and'             : 'und',
			'unknown'         : 'unbekannt',
			'selectall'       : 'Alle Dateien auswählen',
			'selectfiles'     : 'Dateien auswählen',
			'selectffile'     : 'Erste Datei auswhählen',
			'selectlfile'     : 'Letzte Datei auswählen',
			'viewlist'        : 'Spaltenansicht',
			'viewicons'       : 'Symbolansicht',
			'places'          : 'Orte',
			'calc'            : 'Berechne',
			'path'            : 'Pfad',
			'aliasfor'        : 'Verknüpfund zu',
			'locked'          : 'Gesperrt',
			'dim'             : 'Bildgröße',
			'files'           : 'Dateien',
			'folders'         : 'Ordner',
			'items'           : 'Objekte',
			'yes'             : 'ja',
			'no'              : 'nein',
			'link'            : 'Link',
			'searcresult'     : 'Suchergebnisse',
			'selected'        : 'Objekte ausgewählt',
			'about'           : 'über',
			'shortcuts'       : 'Tastenkombinationen',
			'help'            : 'Hilfe',
			'webfm'           : 'Web Datei Manager',
			'ver'             : 'Version',
			'protocolver'     : 'Protokol Version',
			'homepage'        : 'Projekt Website',
			'docs'            : 'Dokumentation',
			'github'          : 'Forke uns auf Github',
			'twitter'         : 'Folge uns auf twitter',
			'facebook'        : 'Begleite uns auf facebook',
			'team'            : 'Team',
			'chiefdev'        : 'Chefentwickler',
			'developer'       : 'Entwickler',
			'contributor'     : 'Üntersützer',
			'maintainer'      : 'Maintainer',
			'translator'      : 'Übersetzer',
			'icons'           : 'Icons',
			'dontforget'      : 'und vergiss dein Handtuch nicht',
			'shortcutsof'     : 'Tastenkombinationen deaktiviert',
			'dropFiles'       : 'Dateien hier ablegen',
			'dropFilesBrowser': 'Verschieben oder Einfügen von Dateien aus dem Browser',
			'or'              : 'oder',
			'selectForUpload' : 'Dateien zum Upload auswählen',
			'moveFiles'       : 'Dateien verschieben',
			'copyFiles'       : 'Dateien kopieren',
			'rmFromPlaces'    : 'Lösche von Orte',
			'aspectRatio'     : 'Seitenverhältnis',
			'scale'           : 'Maßstab',
			'width'           : 'Breite',
			'height'          : 'Höhe',
			'resize'          : 'Größe ändern',
			'crop'            : 'Zuschneiden',
			'rotate'          : 'Drehen',
			'rotate-cw'       : 'Drehe 90° im Uhrzeigersinn',
			'rotate-ccw'      : 'Drehe 90° gegen den Uhrzeigersinn',
			'degree'          : '°',
			'netMountDialogTitle' : 'verbinde Netzwerk Speicher',
			'protocol'            : 'Protokoll',
			'host'                : 'Host',
			'port'                : 'Port',
			'user'                : 'Benutzer',
			'pass'                : 'Passwort',

			/********************************** mimetypes **********************************/
			'kindUnknown'     : 'Unbekannt',
			'kindFolder'      : 'Ordner',
			'kindAlias'       : 'Verknüpfung',
			'kindAliasBroken' : 'Defekte Verknüpfung',
			// applications
			'kindApp'         : 'Programm',
			'kindPostscript'  : 'Postscript Dokument',
			'kindMsOffice'    : 'Microsoft Office Dokument',
			'kindMsWord'      : 'Microsoft Word Dokument',
			'kindMsExcel'     : 'Microsoft Excel Dokument',
			'kindMsPP'        : 'Microsoft Powerpoint Präsentation',
			'kindOO'          : 'Open Office Dokument',
			'kindAppFlash'    : 'Flash Programm',
			'kindPDF'         : 'Portables Dokumentenformat (PDF)',
			'kindTorrent'     : 'Bittorrent Datei',
			'kind7z'          : '7z Archiv',
			'kindTAR'         : 'TAR Archiv',
			'kindGZIP'        : 'GZIP Archiv',
			'kindBZIP'        : 'BZIP Archiv',
			'kindZIP'         : 'ZIP Archiv',
			'kindRAR'         : 'RAR Archiv',
			'kindJAR'         : 'Java JAR Datei',
			'kindTTF'         : 'True Type Schrift',
			'kindOTF'         : 'Open Type