<?php

	/**
	 * Turkish language file for phpPgAdmin.  Use this as a basis
	 * for new translations.
	 *
	 * $Id: turkish.php,v 1.1 2003/04/27 11:00:06 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = 'T&uuml;rk&ccedil;e';
	$lang['appcharset'] = 'ISO-8859-9';

	// Basic strings
	$lang['strintro'] = 'phpPgAdmin\'e ho&#351;geldiniz.';
	$lang['strlogin'] = 'Giri&#351;';
	$lang['strloginfailed'] = 'Giri&#351; Ba&#351;ar&#305;s&#305;z';
	$lang['strserver'] = 'Sunucu';
	$lang['strlogout'] = '&Ccedil;&#305;k&#305;&#351;';
	$lang['strowner'] = 'Sahibi';
	$lang['straction'] = 'Eylem';
	$lang['stractions'] = 'Eylemler';
	$lang['strname'] = 'Ad';
	$lang['strdefinition'] = 'Tan&#305;m';
	$lang['stroperators'] = 'Operat&ouml;rler';
	$lang['straggregates'] = 'Aggregates';
	$lang['strproperties'] = '&Ouml;zellikler';
	$lang['strbrowse'] = 'G&ouml;zat';
	$lang['strdrop'] = 'Sil';
	$lang['strdropped'] = 'Silindi';
	$lang['strnull'] = 'Null';
	$lang['strnotnull'] = 'Null/Null de&#287;il';
	$lang['strprev'] = '&Ouml;nceki';
	$lang['strnext'] = 'Sonraki';
	$lang['strfailed'] = 'ba&#351;ar&#305;s&#305;z oldu';
	$lang['strcreate'] = 'Yarat';
	$lang['strcreated'] = 'Yarat&#305;ld&#305;';
	$lang['strcomment'] = 'Yorum';
	$lang['strlength'] = 'Uzunluk';
	$lang['strdefault'] = '&Ouml;n tan&#305;ml&#305; de&#287;er';
	$lang['stralter'] = 'De&#287;i&#351;tir';
	$lang['strok'] = 'Tamam';
	$lang['strcancel'] = '&#304;ptal Et';
	$lang['strsave'] = 'Kaydet';
	$lang['strreset'] = 'Temizle';
	$lang['strinsert'] = 'Ekle';
	$lang['strselect'] = 'Se&ccedil;';
	$lang['strdelete'] = 'Sil';
	$lang['strupdate'] = 'G&uuml;ncelle';
	$lang['strreferences'] = 'References';
	$lang['stryes'] = 'Evet';
	$lang['strno'] = 'Hay&#305;r';
	$lang['stredit'] = 'D&uuml;zenle';
	$lang['strcolumns'] = 'Kolonlar';
	$lang['strrows'] = 'sat&#305;r';
	$lang['strexample'] = '&Ouml;rnek:';
	$lang['strback'] = 'Geri';
	$lang['strqueryresults'] = 'Sorgu sonu&ccedil;lar&#305;';
	$lang['strshow'] = 'G&ouml;ster';
	$lang['strempty'] = 'Bo&#351;';
	$lang['strlanguage'] = 'Dil';
	$lang['strencoding'] = 'Karakter kodlamas&#305;';
	$lang['strvalue'] = 'De&#287;er';
	$lang['strunique'] = 'Tekil';
	$lang['strprimary'] = 'Birincil';
	$lang['strexport'] = 'Export';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'Devam Et';
	$lang['stradmin'] = 'Y&ouml;netici';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analyze';
	$lang['strcluster'] = 'Cluster';
	$lang['strreindex'] = 'Reindex';
	$lang['strrun'] = '&Ccedil;al&#305;&#351;t&#305;r';
	$lang['stradd'] = 'Ekle';
	$lang['strevent'] = 'Event';
	$lang['strwhere'] = 'Where';
	$lang['strinstead'] = 'Do Instead';
	$lang['strwhen'] = 'When';
	$lang['strformat'] = 'Format';

	// Error handling
	$lang['strnoframes'] = 'Bu uygulamay&#305; kullanabilmek i&ccedil;in frame destekleyen bir web istemcisi kullanman&#305;z gerekmektedir.';
	$lang['strbadconfig'] = 'config.inc.php dosyaniz g&uuml;ncel de&#287;il. Bu dosyay&#305; yeni config.inc.php-dist dosyas&#305;ndan yaratman&#305;z gerekmektedir.';
	$lang['strnotloaded'] = 'PHP kurulumunuzda PostgreSQL deste&#287;i bulunamam&#305;&#351;t&#305;r.';
	$lang['strbadschema'] = 'Ge&ccedil;ersiz &#351;ema.';
	$lang['strbadencoding'] = '&#304;stemci dil kodlamas&#305;n&#305; ayarlamaya &ccedil;al&#305;&#351;&#305;rken bir hata olu&#351;tu.';
	$lang['strsqlerror'] = 'SQL hatas&#305;:';
	$lang['strinstatement'] = '&Uuml;stteki hata, a&#351;a&#287;&#305;daki ifade i&ccedil;inde olu&#351;tu:';
	$lang['strinvalidparam'] = 'Ge&ccedil;ersiz betik parametreleri.';
	$lang['strnodata'] = 'Sat&#305;r bulunamad&#305;.';

	// Tables
	$lang['strtable'] = 'Tablo';
	$lang['strtables'] = 'Tablolar';
	$lang['strshowalltables'] = 'T&uuml;m tablolar&#305; g&ouml;ster';
	$lang['strnotables'] = 'Veritaban&#305;nda tablo bulunamad&#305;.';
	$lang['strnotable'] = 'Veritaban&#305;nda tablo bulunamad&#305;.';
	$lang['strcreatetable'] = 'Yeni tablo yarat';
	$lang['strtablename'] = 'Tablo ad&#305;';
	$lang['strtableneedsname'] = 'Tablonuza bir ad vermeniz gerekmektedir.';
	$lang['strtableneedsfield'] = 'En az bir alan belirtmeniz gerekmektedir.';
	$lang['strtableneedscols'] = 'Ge&ccedil;erli miktarda kolon say&#305;s&#305; belirtmeniz gerekmektedir.';
	$lang['strtablecreated'] = 'Tablo yarat&#305;ld&#305;.';
	$lang['strtablecreatedbad'] = 'Tablo yarat&#305;lamad&#305;.';
	$lang['strconfdroptable'] = '&quot;%s&quot; tablosunu kald&#305;rmak istedi&#287;inizden emin misiniz?';
	$lang['strtabledropped'] = 'Tablo kald&#305;r&#305;ld&#305;.';
	$lang['strtabledroppedbad'] = 'Tablo kald&#305;r&#305;lamad&#305;.';
	$lang['strconfemptytable'] = '&quot;%s&quot; tablosunu bo&#351;altmak istedi&#287;inizden emin misiniz?';
	$lang['strtableemptied'] = 'Tablo bo&#351;alt&#305;ld&#305;.';
	$lang['strtableemptiedbad'] = 'Tablo bo&#351;alt&#305;lamad&#305;.';
	$lang['strinsertrow'] = 'Yeni kay&#305;t gir';
	$lang['strrowinserted'] = 'Yeni kay&#305;t girildi.';
	$lang['strrowinsertedbad'] = 'Yeni kay&#305;t girme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['streditrow'] = 'Kay&#305;d&#305;n i&ccedil;eri&#287;ini de&#287;i&#351;tir.';
	$lang['strrowupdated'] = 'Kay&#305;t g&uuml;ncellendi.';
	$lang['strrowupdatedbad'] = 'Kay&#305;t g&uuml;ncelleme i&#351;leme ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strdeleterow'] = 'Kayd&#305; sil';
	$lang['strconfdeleterow'] = 'Bu kayd&#305; silmek istedi&#287;inize emin misiniz?';
	$lang['strrowdeleted'] = 'Kay&#305;t silindi.';
	$lang['strrowdeletedbad'] = 'Kay&#305;t silinme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strsaveandrepeat'] = 'Kaydet ve tekrarla';
	$lang['strfield'] = 'Alan';
	$lang['strfields'] = 'Alanlar';
	$lang['strnumfields'] = 'Alan say&#305;s&#305;';
	$lang['strfieldneedsname'] = 'Alan k&#305;sm&#305;na ad vermelisiniz';
	$lang['strselectneedscol'] = 'En az bir kolon i&#351;aretlemelisiniz';
	$lang['straltercolumn'] = 'Kolonu de&#287;i&#351;tir (alter)';
	$lang['strcolumnaltered'] = 'Kolon de&#287;i&#351;tirildi (alter)';
	$lang['strcolumnalteredbad'] = 'Kolon de&#287;i&#351;tirilme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
        $lang['strconfdropcolumn'] = '&quot;%s&quot; kolonunu &quot;%s&quot; tablosundan silmek istedi&#287;inize emin misiniz?';
	$lang['strcolumndropped'] = 'Kolon silindi.';
	$lang['strcolumndroppedbad'] = 'Kolon silme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['straddcolumn'] = 'Yeni kolon ekle';
	$lang['strcolumnadded'] = 'Kolon eklendi.';
	$lang['strcolumnaddedbad'] = 'Kolon eklenemedi.';
	$lang['strschemaanddata'] = '&#350;ema ve veri';
	$lang['strschemaonly'] = 'Sadece &#351;ema';
	$lang['strdataonly'] = 'Sadece veri';

	// Users
	$lang['struseradmin'] = 'Kullan&#305;c&#305; Y&ouml;netimi';
	$lang['struser'] = 'Kullan&#305;c&#305;';
	$lang['strusers'] = 'Kullan&#305;c&#305;lar';
	$lang['strusername'] = 'Kullan&#305;c&#305; Ad&#305;';
	$lang['strpassword'] = '&#350;ifresi';
	$lang['strsuper'] = 'Superuser m&#305;?';
	$lang['strcreatedb'] = 'Veritaban&#305; yaratabilsin mi?';
	$lang['strexpires'] = 'Expires';
	$lang['strnousers'] = 'Kullan&#305;c&#305; bulunamad&#305;.';
        $lang['struserupdated'] = 'Kullan&#305;c&#305; g&uuml;ncellendi.';
	$lang['struserupdatedbad'] = 'Kullan&#305;c&#305; g&uuml;ncelleme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strshowallusers'] = 'T&uuml;m kullan&#305;c&#305;lar&#305; g&ouml;ster.';
	$lang['strcreateuser'] = 'Yeni kullan&#305;c&#305; yarat';
	$lang['strusercreated'] = 'Kullan&#305;c&#305; yarat&#305;ld&#305;.';
	$lang['strusercreatedbad'] = 'Kullan&#305;c&#305; yarat&#305;lma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strconfdropuser'] = '&quot;%s&quot; kullan&#305;c&#305;s&#305;n&#305; silmek istedi&#287;inize emin misiniz?';
	$lang['struserdropped'] = 'Kullan&#305;c&#305; silindi.';
	$lang['struserdroppedbad'] = 'Kullan&#305;c&#305; silme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
		
	// Groups
	$lang['strgroupadmin'] = 'Grup Y&ouml;netimi';
	$lang['strgroup'] = 'Grup';
	$lang['strgroups'] = 'Gruplar';
	$lang['strnogroup'] = 'Grup bulunamad&#305;.';
	$lang['strnogroups'] = 'Grup bulunamad&#305;.';
	$lang['strcreategroup'] = 'Yeni grup yarat';
	$lang['strshowallgroups'] = 'T&uuml;m gruplar&#305; g&ouml;ster';
	$lang['strgroupneedsname'] = 'Grup yaratabilmek i&ccedil;in bir ad vermelisiniz.';
	$lang['strgroupcreated'] = 'Grup yarat&#305;ld&#305;.';
	$lang['strgroupcreatedbad'] = 'Grup yaratma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';	
	$lang['strconfdropgroup'] = '&quot;%s&quot; grubunu silmek istedi&#287;inize emin misiniz?';
	$lang['strgroupdropped'] = 'Grup silindi.';
	$lang['strgroupdroppedbad'] = 'Grup silme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strmembers'] = '&Uuml;yeler';

	// Privilges
	$lang['strprivilege'] = '&#304;zni';
	$lang['strprivileges'] = '&#304;zinler';
	$lang['strnoprivileges'] = 'Bu nesnenin bir izni yoktur.';
	$lang['strgrant'] = '&#304;zni ver';
	$lang['strrevoke'] = '&#304;zni kald&#305;r';
	$lang['strgranted'] = '&#304;zimler verildi.';
	$lang['strgrantfailed'] = '&#304;zinlerin grant i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strgrantuser'] = 'Kullan&#305;c&#305; izinlerini d&uuml;zenle';
	$lang['strgrantgroup'] = 'Grup izinlerini d&uuml;zenle';

	// Databases
	$lang['strdatabase'] = 'Veritaban&#305;';
	$lang['strdatabases'] = 'Veritabanlar&#305;';
	$lang['strshowalldatabases'] = 'T&uuml;m veritabanlar&#305;n&#305; g&ouml;ster';
	$lang['strnodatabase'] = 'Veritaban&#305; bulunamad&#305;.';
	$lang['strnodatabases'] = 'Veritaban&#305; bulunamad&#305;.';
	$lang['strcreatedatabase'] = 'Veritaban&#305; yarat';
	$lang['strdatabasename'] = 'Veritaban&#305; ad&#305;';
	$lang['strdatabaseneedsname'] = 'Veritaban&#305;n&#305;za bir ad vermelisiniz.';
	$lang['strdatabasecreated'] = 'Veritaban&#305; yarat&#305;ld&#305;.';
	$lang['strdatabasecreatedbad'] = 'Veritaban&#305; yarat&#305;lamad&#305;.';	
	$lang['strconfdropdatabase'] = '&quot;%s&quot; veritaban&#305;n&#305; kald&#305;rmak istedi&#287;inize emin misiniz?';
	$lang['strdatabasedropped'] = 'Veritaban&#305; kald&#305;r&#305;ld&#305;.';
	$lang['strdatabasedroppedbad'] = 'Veritaban&#305; kald&#305;rma ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strentersql'] = 'Veritaban&#305; &uuml;zerinde &ccedil;al&#305;&#351;t&#305;r&#305;lacak sorgu/sorgular&#305; a&#351;a&#287;&#305;ya yaz&#305;n&#305;z:';
	$lang['strvacuumgood'] = 'Vacuum i&#351;lemi tamamland&#305;.';
	$lang['strvacuumbad'] = 'Vacuum i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['stranalyzegood'] = 'Analyze i&#351;lemi tamamland&#305;.';
	$lang['stranalyzebad'] = 'Analyze i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';

	// Views
	$lang['strview'] = 'View';
	$lang['strviews'] = 'Viewlar';
	$lang['strshowallviews'] = 'T&uuml;m viewlar&#305; g&ouml;ster';
	$lang['strnoview'] = 'Bir view bulunamad&#305;.';
	$lang['strnoviews'] = 'Bir view bulunamad&#305;.';
	$lang['strcreateview'] = 'View yarat';
	$lang['strviewname'] = 'View ad&#305;';
	$lang['strviewneedsname'] = 'View i&ccedil;in bir ad belirtmelisiniz.';
	$lang['strviewneedsdef'] = 'View i&ccedil;in bir tan&#305;m belirtmelisiniz.';
	$lang['strviewcreated'] = 'View yarat&#305;ld&#305;.';
	$lang['strviewcreatedbad'] = 'View yaratma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strconfdropview'] = '&quot;%s&quot; viewini kald&#305;rmak istedi&#287;inize emin misiniz?';
	$lang['strviewdropped'] = 'View kald&#305;r&#305;ld&#305;.';
	$lang['strviewdroppedbad'] = 'View kald&#305;rma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strviewupdated'] = 'View g&uuml;ncellendi.';
	$lang['strviewupdatedbad'] = 'View g&uuml;ncelleme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';

	// Sequences
	$lang['strsequence'] = 'Sequence';
	$lang['strsequences'] = 'Sequences';
	$lang['strshowallsequences'] = 'Show all sequences';
	$lang['strnosequence'] = 'No sequence found.';
	$lang['strnosequences'] = 'No sequences found.';
	$lang['strcreatesequence'] = 'Create sequence';
	$lang['strlastvalue'] = 'Son de&#287;er';
	$lang['strincrementby'] = 'Artt&#305;rma de&#287;eri';	
	$lang['strstartvalue'] = 'Ba&#351;lang&#305;&ccedil; De&#287;eri';
	$lang['strmaxvalue'] = 'Max De&#287;er';
	$lang['strminvalue'] = 'Min De&#287;er';
	$lang['strcachevalue'] = 'Cache De&#287;eri';
	$lang['strlogcount'] = 'Log Count';
	$lang['striscycled'] = 'Is Cycled?';
	$lang['striscalled'] = 'Is Called?';
	$lang['strsequenceneedsname'] = 'Sequence i&ccedil;in bir ad belirtmelisiniz.';
	$lang['strsequencecreated'] = 'Sequence yarat&#305;ld&#305;.';
	$lang['strsequencecreatedbad'] = 'Sequence yaratma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.'; 
	$lang['strconfdropsequence'] = '&quot;%s&quot; sequence ini kald&#305;rmak istedi&#287;inize emin misiniz?';
	$lang['strsequencedropped'] = 'Sequence kald&#305;r&#305;ld&#305;.';
	$lang['strsequencedroppedbad'] = 'Sequence kald&#305;rma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';

	// Indexes
	$lang['strindexes'] = 'Indeksler';
	$lang['strindexname'] = 'Indeks ad&#305;';
	$lang['strshowallindexes'] = 'T&uuml;m indeksleri g&ouml;ster';
	$lang['strnoindex'] = 'Hi&ccedil;bir indeks bulunamad&#305;.';
	$lang['strnoindexes'] = 'Hi&ccedil;bir indeks bulunamad&#305;.';
	$lang['strcreateindex'] = 'Indeks yarat';
	$lang['strindexname'] = 'Indeks ad&#305;';
	$lang['strtabname'] = 'Tab Ad&#305;';
	$lang['strcolumnname'] = 'Kolon ad&#305;';
	$lang['strindexneedsname'] = 'Indeksinize bir ad vermeniz gerekmektedir.';
	$lang['strindexneedscols'] = 'Ge&ccedil;erli kol&#305;n say&#305;s&#305; vermeniz gerekmektedir.';
	$lang['strindexcreated'] = 'Indeks yarat&#305;ld&#305;.';
	$lang['strindexcreatedbad'] = 'Index creation failed.';
	$lang['strconfdropindex'] = '&quot;%s&quot; indeksini kald&#305;rmak istedi&#287;inize emin misiniz?';
	$lang['strindexdropped'] = 'Indeks kald&#305;r&#305;ld&#305;.';
	$lang['strindexdroppedbad'] = 'Indeks kald&#305;r&#305;lamad&#305;.';
	$lang['strkeyname'] = 'Anahtar ad&#305;';
	$lang['struniquekey'] = 'Tekil (Unique) Anahtar';
	$lang['strprimarykey'] = 'Birincil Anahtar (Primary Key)';
 	$lang['strindextype'] = 'Indeksin tipi';
	$lang['strindexname'] = 'Indeksin ad&#305;';
	$lang['strtablecolumnlist'] = 'Tablodaki kolonlar';
	$lang['strindexcolumnlist'] = 'Indeksteki kolonlar';

	// Rules
	$lang['strrules'] = 'Rules';
	$lang['strrule'] = 'Rule';
	$lang['strshowallrules'] = 'Show all Rules';
	$lang['strnorule'] = 'Rule bulunamad&#305;.';
	$lang['strnorules'] = 'Rule bulunamad&#305;.';
	$lang['strcreaterule'] = 'Rule yarat';
	$lang['strrulename'] = 'Rule ad&#305;';
	$lang['strruleneedsname'] = 'Rule i&ccedil;in bir ad belirtmelisiniz.';
	$lang['strrulecreated'] = 'Rule yarat&#305;ld&#305;.';
	$lang['strrulecreatedbad'] = 'Rule yaratma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strconfdroprule'] = '&quot;%s&quot; kural&#305;n&#305; &quot;%s&quot; tablosundan silmek istedi&#287;inize emin misiniz?';
	$lang['strruledropped'] = 'Rule silindi';
	$lang['strruledroppedbad'] = 'Rule silinme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';

	// Constraints
	$lang['strconstraints'] = 'K&#305;s&#305;tlamalar';
	$lang['strshowallconstraints'] = 'T&uuml;m k&#305;s&#305;tlamalar&#305; (constraint) g&ouml;ster.';
	$lang['strnoconstraints'] = 'Hi&ccedil;bir k&#305;s&#305;tlama (constraint) bulunamad&#305;.';
	$lang['strcreateconstraint'] = 'K&#305;s&#305;tlama (Constraint) yarat';
	$lang['strconstraintcreated'] = 'K&#305;s&#305;tlama (Constraint) yarat&#305;ld&#305;.';
	$lang['strconstraintcreatedbad'] = 'K&#305;s&#305;tlama (Constraint) yaratma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strconfdropconstraint'] = '&quot;%s&quot; &uuml;zerindeki &quot;%s&quot; k&#305;s&#305;tlamas&#305;n&#305; (constraint) kald&#305;rmak istiyor musunuz?';
	$lang['strconstraintdropped'] = 'K&#305;s&#305;tlama (Constraint) kald&#305;r&#305;ld&#305;';
	$lang['strconstraintdroppedbad'] = 'K&#305;s&#305;tlama (Constraint) i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['straddcheck'] = 'Kontrol (Check) ekle';
	$lang['strcheckneedsdefinition'] = 'Kontrol (Check) k&#305;s&#305;tlamas&#305; (constraint) i&ccedil;in bir tan&#305;m girilmelidir.';
	$lang['strcheckadded'] = 'Kontrol k&#305;s&#305;tlamas&#305; (Check constraint) eklendi.';
	$lang['strcheckaddedbad'] = 'Kontrol k&#305;s&#305;tlamas&#305; (Check constraint) ekleme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['straddpk'] = 'Birincil Anahtar Ekle';
	$lang['strpkneedscols'] = 'Birincil anahtar i&ccedil;in en az bir kolon gereklidir.';
	$lang['strpkadded'] = 'Birincil anahtar eklendi.';
	$lang['strpkaddedbad'] = 'Birincil anahtar eklenemedi.';
	$lang['stradduniq'] = 'Tekil (Unique) anahtar ekle';
	$lang['struniqneedscols'] = 'Tekil anahtar yaratmak i&ccedil;in en az bir kolon gerekir.';
	$lang['struniqadded'] = 'Tekil anahtar eklendi.';
	$lang['struniqaddedbad'] = 'Tekil anahtar eklenemedi.';
	$lang['straddfk'] = '&#304;kincil anahtar ekle';
	$lang['strfkneedscols'] = '&#304;kincil anahtar yaratmak i&ccedil;in en az bir kolon gerekir.';
	$lang['strfkadded'] = '&#304;kincil anahtar eklendi.';
	$lang['strfkaddedbad'] = '&#304;kincil anahtar eklenemedi.';
	$lang['strfktarget'] = 'Hedef tablo';

	// Functions
	$lang['strfunction'] = 'Fonksiyon';
	$lang['strfunctions'] = 'Fonksiyonlar';
	$lang['strshowallfunctions'] = 'T&uuml;m fonksiyonlar&#305; g&ouml;ster';
	$lang['strnofunction'] = 'Fonksiyon bulunamad&#305;.';
	$lang['strnofunctions'] = 'Fonksiyon bulunamad&#305;.';
	$lang['strcreatefunction'] = 'Fonksiyon yarat';
	$lang['strfunctionname'] = 'Fonksiyon ad&#305;';
	$lang['strreturns'] = 'D&ouml;nderilen de&#287;er';
	$lang['strarguments'] = 'Arg&uuml;manlar';
	$lang['strfunctionneedsname'] = 'Fonksiyona bir ad vermelisiniz.';
	$lang['strfunctionneedsdef'] = 'Fonksiyona bir tan&#305;m vermelisiniz.';
	$lang['strfunctioncreated'] = 'Fonksiyon yarat&#305;ld&#305;.';
	$lang['strfunctioncreatedbad'] = 'Fonksiyon yaratma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strconfdropfunction'] = '&quot;%s&quot; fonksiyonunu kald&#305;rmak istedi&#287;inize emin misiniz?';
	$lang['strfunctiondropped'] = 'Fonksiyon kald&#305;r&#305;ld&#305;.';
	$lang['strfunctiondroppedbad'] = 'Fonksiyon kald&#305;rma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strfunctionupdated'] = 'Fonksiyon g&uuml;ncellendi.';
	$lang['strfunctionupdatedbad'] = 'Function g&uuml;ncelleme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';

	// Triggers
	$lang['strtrigger'] = 'Trigger';
	$lang['strtriggers'] = 'Triggerlar';
	$lang['strshowalltriggers'] = 'T&uuml;m triggerlar&#305; g&ouml;ster';
	$lang['strnotrigger'] = 'Trigger bulunamad&#305;.';
	$lang['strnotriggers'] = 'Trigger bulunamad&#305;.';
	$lang['strcreatetrigger'] = 'Yeni trigger yarat';
	$lang['strtriggerneedsname'] = 'Trigger i&ccedil;in bir ad belirtmelisiniz.';
	$lang['strtriggerneedsfunc'] = 'Trigger i&ccedil;in bir fonksiyon belirtmelisiniz.';
	$lang['strtriggercreated'] = 'Trigger yarat&#305;ld&#305;.';
	$lang['strtriggercreatedbad'] = 'Trigger yarat&#305;lamad&#305;.';
	$lang['strconfdroptrigger'] = '&quot;%s&quot; triggerini &quot;%s&quot; tablosundan kald&#305;rmak istedi&#287;inize emin misiniz?';
	$lang['strtriggerdropped'] = 'Trigger silindi.';
	$lang['strtriggerdroppedbad'] = 'Trigger silinme i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';

	// Types
	$lang['strtype'] = 'Veri tipi';
	$lang['strtypes'] = 'Veri tipleri';
	$lang['strshowalltypes'] = 'T&uuml;m veri tiplerini g&ouml;ster';
	$lang['strnotype'] = 'Hi&ccedil; veri tipi bulunamad&#305;.';
	$lang['strnotypes'] = 'Hi&ccedil; veri tipi bulunamad&#305;.';
	$lang['strcreatetype'] = 'Yeni veri tipi yarat';
	$lang['strtypename'] = 'Veri tipi ad&#305;';
	$lang['strinputfn'] = 'Giri&#351; (Input) fonksiyonu';
	$lang['stroutputfn'] = '&Ccedil;&#305;k&#305;&#351; (Output) fonksiyonu';
	$lang['strpassbyval'] = 'Passed by val?';
	$lang['stralignment'] = 'Alignment';
	$lang['strelement'] = 'Eleman';
	$lang['strdelimiter'] = 'Delimiter';
	$lang['strstorage'] = 'Storage';
	$lang['strtypeneedsname'] = 'Veri tipi i&ccedil;in bir ad vermelisiniz.';
	$lang['strtypeneedslen'] = 'Veri tipiniz i&ccedil;in bir uzunluk belirtmelisiniz.';
	$lang['strtypecreated'] = 'Veri tipi yarat&#305;ld&#305;';
	$lang['strtypecreatedbad'] = 'Veri tipi yarat&#305;lamad&#305;.';
	$lang['strconfdroptype'] = '&quot;%s&quot; veri tipini kald&#305;rmak istedi&#287;inize emin misiniz?';
	$lang['strtypedropped'] = 'Veri tipi kald&#305;r&#305;ld&#305;.';
	$lang['strtypedroppedbad'] = 'Veri tipi kald&#305;r&#305;lamad&#305;.';

	// Schemas
	$lang['strschema'] = '&#350;ema';
	$lang['strschemas'] = '&#350;emalar';
	$lang['strshowallschemas'] = 'T&uuml;m &#351;emalar&#305; g&ouml;ster';
	$lang['strnoschema'] = 'Bir &#351;ema bulunamad&#305;.';
	$lang['strnoschemas'] = 'Bir &#351;ema bulunamad&#305;.';
	$lang['strcreateschema'] = '&#350;ema yarat';
	$lang['strschemaname'] = '&#350;ema ad&#305;';
	$lang['strschemaneedsname'] = '&#350;ema i&ccedil;in bir ad belirtmelisiniz.';
	$lang['strschemacreated'] = '&#350;ema yarat&#305;ld&#305;';
	$lang['strschemacreatedbad'] = '&#350;ema yaratma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu';
	$lang['strconfdropschema'] = '&quot;%s&quot; &#351;emas&#305;n&#305; kald&#305;rmak istedi&#287;inize emin misiniz?';
	$lang['strschemadropped'] = '&#350;ema kald&#305;r&#305;ld&#305;.';
	$lang['strschemadroppedbad'] = '&#350;ema kald&#305;rma i&#351;lemi ba&#351;ar&#305;s&#305;z oldu.';

	// Reports
	$lang['strreport'] = 'Rapor';
	$lang['strreports'] = 'Raporlar';
	$lang['strshowallreports'] = 'T&uuml;m raporlar&#305; g&ouml;ster';
	$lang['strnoreports'] = 'Hi&ccedil;bir rapor bulunamad&#305;';
	$lang['strcreatereport'] = 'Rapor yarat&#305;ld&#305;.';
	$lang['strreportdropped'] = 'Rapor silindi';
	$lang['strreportdroppedbad'] = 'Rapor silme i&#351;i ba&#351;ar&#305;s&#305;z oldu.';
	$lang['strconfdropreport'] = '&quot;%s&quot; raporunu silmek istedi&#287;inize emin misiniz?';
	$lang['strreportneedsname'] = 'Raporunuza bir ad vermelisiniz.';
	$lang['strreportneedsdef'] = 'Raporunuz i&ccedil;in SQL sorgular&#305; yazmal&#305;s&#305;n&#305;z.';
	$lang['strreportcreated'] = 'Rapor kaydedildi.';
	$lang['strreportcreatedbad'] = 'Rapor kaydetme ba&#351;ar&#305;s&#305;z oldu.';

	// Miscellaneous
	$lang['strtopbar'] = '%s,  %s:%s  &uuml;zerinde &ccedil;al&#305;&#351;&#305;yor -- &quot;%s&quot; kullan&#305;c&#305;s&#305; ile , %s tarihinde giri&#351; yapt&#305;n&#305;z';
	$lang['strtimefmt'] = 'jS M, Y g:iA';

?>