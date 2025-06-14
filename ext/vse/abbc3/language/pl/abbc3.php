<?php
/**
*
* Advanced BBCode Box [Polish]
* Translated by Pico88
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Hidden BBCode
	'ABBC3_HIDDEN_ON'			=> 'Ukryta zawartość',
	'ABBC3_HIDDEN_OFF'			=> 'Ukryta zawartość (tylko dla użytkowników)',
	'ABBC3_HIDDEN_EXPLAIN'		=> 'To forum wymaga zarejestrowania i zalogowania się, aby zobaczyć ukrytą zawartość.',

	// Spoiler BBCode
	'ABBC3_SPOILER_SHOW'		=> '► Pokaż',
	'ABBC3_SPOILER_HIDE'		=> '▼ Ukryj',

	// Off Topic BBCode
	'ABBC3_OFFTOPIC'			=> 'Off Topic',

	// Font BBCode
	'ABBC3_FONT_BBCODE'			=> 'Czcionki',
	'ABBC3_FONT_SAFE'			=> 'Bezpieczne Czcionki',
	'ABBC3_GOOGLE_FONTS'		=> 'Czcionki Google',

	// BBCode help lines
	'ABBC3_ALIGN_HELPLINE'		=> 'Wyrównaj tekst: [align=center|left|right|justify]tekst[/align]',
	'ABBC3_BBVIDEO_HELPLINE'	=> 'Osadź dowolny plik wideo: [bbvideo]http://video_url[/bbvideo]',
	'ABBC3_BLUR_HELPLINE'		=> 'Rozmycie tekstu: [blur=color]tekst[/blur]',
	'ABBC3_DIR_HELPLINE'		=> 'Kierunek tekstu: [dir=ltr|rtl]tekst[/dir]',
	'ABBC3_DROPSHADOW_HELPLINE'	=> 'Tekst z twardym cieniem: [dropshadow=color]tekst[/dropshadow]',
	'ABBC3_FADE_HELPLINE'		=> 'Pulsujący tekst: [fade]tekst[/fade]',
	'ABBC3_FLOAT_HELPLINE'		=> 'Float tekst: [float=left|right]tekst[/float]',
	'ABBC3_FONT_HELPLINE'		=> 'Rodzaj czcionki: [font=Comic Sans MS]tekst[/font]',
	'ABBC3_GLOW_HELPLINE'		=> 'Poświata tekstu: [glow=color]tekst[/glow]',
	'ABBC3_HIDDEN_HELPLINE'		=> 'Ukryj tekst dla gośći: [hidden]tekst[/hidden]',
	'ABBC3_HIGHLIGHT_HELPLINE'	=> 'Wyróżnij tekst: [highlight=yellow]tekst[/highlight]  Podpowiedź: możesz również opisać kolor HEXami',
	'ABBC3_MARQUEE_HELPLINE'	=> 'Pływający tekst: [marq=up|down|left|right]tekst[/marq]',
	'ABBC3_MOD_HELPLINE'		=> 'Wiadomość moderatora: [mod=username]tekst[/mod]',
	'ABBC3_NFO_HELPLINE'		=> 'Informacja NFO: [nfo]NFO tekst[/nfo]',
	'ABBC3_OFFTOPIC_HELPLINE'	=> 'Off Topic: [offtopic]tekst[/offtopic]',
	'ABBC3_PREFORMAT_HELPLINE'	=> 'Tekst preformatowany: [pre]tekst[/pre]',
	'ABBC3_SHADOW_HELPLINE'		=> 'Tekst z miękkim cieniem: [shadow=kolor]tekst[/shadow]',
	'ABBC3_SOUNDCLOUD_HELPLINE'	=> 'SoundCloud: [soundcloud]https://soundcloud.com/user-name/song-title[/soundcloud]',
	'ABBC3_SPOILER_HELPLINE'	=> 'Spoiler: [spoil]tekst[/spoil]',
	'ABBC3_STRIKE_HELPLINE'		=> 'Przekreślenie tekstu: [s]tekst[/s]',
	'ABBC3_SUB_HELPLINE'		=> 'Indeks dolny: [sub]tekst[/sub]',
	'ABBC3_SUP_HELPLINE'		=> 'Indeks górny: [sup]tekst[/sup]',
	'ABBC3_YOUTUBE_HELPLINE'	=> 'Film z YouTube: [youtube]http://youtube_url[/youtube]',
	'ABBC3_AUTOVIDEO_HELPLINE'	=> 'Embed MP4/OGG/WEBM video files: URL must start with <samp class="error">https</samp> or <samp class="error">http</samp> and end with <samp class="error">.mp4</samp>, <samp class="error">.ogg</samp> or <samp class="error">.webm</samp> (no BBCode needed). Note that browser support and GUI implementation varies.',

	// Utility BBCodes
	'ABBC3_COPY_BBCODE'			=> 'Kopiuj zaznaczony tekst',
	'ABBC3_PASTE_BBCODE'		=> 'Wklej skopiowany tekst',
	'ABBC3_PASTE_ERROR'			=> 'Najpierw należy skopiować fragment tekstu, a następnie wkleić go',
	'ABBC3_PLAIN_BBCODE'		=> 'Usuń wszystkie znacznki BBCode z zaznaczonego tekstu',
	'ABBC3_NOSELECT_ERROR'		=> 'Tekst nie został wybrany.',

	// BBCode Wizards
	'ABBC3_BBCODE_WIZ_SUBMIT'	=> 'Wstawić do wiadomość',
	'ABBC3_BBCODE_WIZ_EXAMPLE'	=> 'Przykład',
	'ABBC3_BBVIDEO_SITES'		=> 'Dozwolone witryny',
	'ABBC3_URL_LINK'			=> 'Dodaj URL',
	'ABBC3_URL_DESCRIPTION'		=> 'Opcjonalny opis',
	'ABBC3_URL_EXAMPLE'			=> 'https://www.phpbb.com',

	// Pipe tables
	'ABBC3_PIPE_TABLES'			=> 'Utwórz tabele',
	'ABBC3_PIPE_TABLES_EXPLAIN'	=> 'Utwórz tabele wykorzystując dowolny z poniższych formatów w stylu ASCII.',
	'ABBC3_PIPE_DOCUMENTATION'	=> 'User Guide',
	'ABBC3_PIPE_SIMPLE'			=> 'Prosta tabela',
	'ABBC3_PIPE_COMPACT'		=> 'Kompaktowa tabela',
	'ABBC3_PIPE_COMPACT_EXPLAIN'=> 'Zewnętrzne pionowe linie i spacje wokół nich nie są niezbędne.',
	'ABBC3_PIPE_ALIGNMENT'		=> 'Wyrównanie tekstu',
	// Pipe Table Example Code: DO NOT NEED TO TRANSLATE THESE EXAMPLES
	'ABBC3_PIPE_SIMPLE_EX'		=> "| Header 1 | Header 2 |\n|----------|----------|\n| Cell 1   | Cell 2   |",
	'ABBC3_PIPE_COMPACT_EX'		=> "Header 1|Header 2\n-|-\nCell 1|Cell 2",
	'ABBC3_PIPE_ALIGNMENT_EX'	=> "| Left | Center | Right |\n|:-----|:------:|------:|\n|   x  |    x   |   x   |",

	// ACP
	'ABBC3_BBCODE_ORDERED'		=> 'Kolejność BBCode została zsynchronizowana.',
	'ABBC3_BBCODE_GROUP'		=> 'Zarządzaj grupami, które mogą używać tego BBCode',
	'ABBC3_BBCODE_GROUP_INFO'	=> 'Jeżeli nie wybrano żadnych grup, wszyscy użytkownicy mogą używać tego BBCode. Użyj CTRL + kliknięcie (lub CMD + kliknięcie na Mac), aby wybrać/odznaczyć więcej niż jedną grupę.',

	// BBCode FAQ
	'ABBC3_FAQ_TITLE'			=> 'Advanced BBCode Box BBCodes',
	'ABBC3_FAQ_SAMPLE_TEXT'		=> 'The quick brown fox jumps over the lazy dog',
	'ABBC3_FAQ_ANSWER'			=> '%1$s<br><br><strong>Example:</strong><br>%2$s<br><br><strong>Result:</strong><br>%3$s<hr />',
));
