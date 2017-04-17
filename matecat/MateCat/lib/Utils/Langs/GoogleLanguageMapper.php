<?php

/**
 * Class Langs_GoogleLanguageMapper
 * This class is responsible of mapping google web interface language codes
 * to Matecat languages.<br/>
 * The reference language list is placed in
 * <a href="https://sites.google.com/site/tomihasa/google-language-codes">
 * https://sites.google.com/site/tomihasa/google-language-codes
 * </a>
 */
class Langs_GoogleLanguageMapper {

	public static $googleLang2lang = array(
		"af"	    =>	"afrikaans",
		"ak"	    =>	"akan",
		"sq"	    =>	"albanian",
		"am"	    =>	"amharic",
		"ar"	    =>	"arabic",
		"hy"	    =>	"armenian",
		"az"	    =>	"azerbaijani",
		"eu"	    =>	"basque",
		"be"	    =>	"belarusian",
		"bem"	    =>	"bemba",
		"bn"	    =>	"bengali",
		"bh"	    =>	"bihari",
		"xx-bork"	=>	"bork, bork, bork!",
		"bs"	    =>	"bosnian",
		"br"	    =>	"breton",
		"bg"	    =>	"bulgarian",
		"km"	    =>	"cambodian",
		"ca"	    =>	"catalan",
		"chr"	    =>	"cherokee",
		"ny"	    =>	"chichewa",
		"zh-CN"	    =>	"chinese (simplified)",
		"zh-TW"	    =>	"chinese (traditional)",
		"co"	    =>	"corsican",
		"hr"	    =>	"croatian",
		"cs"	    =>	"czech",
		"da"	    =>	"danish",
		"nl"	    =>	"dutch",
		"xx-elmer"	=>	"elmer fudd",
		"en"	    =>	"english",
		"eo"	    =>	"esperanto",
		"et"	    =>	"estonian",
		"ee"	    =>	"ewe",
		"fo"	    =>	"faroese",
		"tl"	    =>	"filipino",
		"fi"	    =>	"finnish",
		"fr"	    =>	"french",
		"fy"	    =>	"frisian",
		"gaa"	    =>	"ga",
		"gl"	    =>	"galician",
		"ka"	    =>	"georgian",
		"de"	    =>	"german",
		"el"	    =>	"greek",
		"gn"	    =>	"guarani",
		"gu"	    =>	"gujarati",
		"xx-hacker"	=>	"hacker",
		"ht"	    =>	"haitian creole",
		"ha"	    =>	"hausa",
		"haw"	    =>	"hawaiian",
		"iw"	    =>	"hebrew",
		"hi"	    =>	"hindi",
		"hu"	    =>	"hungarian",
		"is"	    =>	"icelandic",
		"ig"	    =>	"igbo",
		"id"	    =>	"indonesian",
		"ia"	    =>	"interlingua",
		"ga"	    =>	"irish",
		"it"	    =>	"italian",
		"ja"	    =>	"japanese",
		"jw"	    =>	"javanese",
		"kn"	    =>	"kannada",
		"kk"	    =>	"kazakh",
		"rw"	    =>	"kinyarwanda",
		"rn"	    =>	"kirundi",
		"xx-klingon"	=>	"klingon",
		"kg"	    =>	"kongo",
		"ko"	    =>	"korean",
		"kri"	    =>	"krio (sierra leone)",
		"ku"	    =>	"kurdish",
		"ckb"	    =>	"kurdish (soranî)",
		"ky"	    =>	"kyrgyz",
		"lo"	    =>	"laothian",
		"la"	    =>	"latin",
		"lv"	    =>	"latvian",
		"ln"	    =>	"lingala",
		"lt"	    =>	"lithuanian",
		"loz"	    =>	"lozi",
		"lg"	    =>	"luganda",
		"ach"	    =>	"luo",
		"mk"	    =>	"macedonian",
		"mg"	    =>	"malagasy",
		"ms"	    =>	"malay",
		"ml"	    =>	"malayalam",
		"mt"	    =>	"maltese",
		"mi"	    =>	"maori",
		"mr"	    =>	"marathi",
		"mfe"	    =>	"mauritian creole",
		"mo"	    =>	"moldavian",
		"mn"	    =>	"mongolian",
		"sr-ME"	    =>	"montenegrin",
		"ne"	    =>	"nepali",
		"pcm"	    =>	"nigerian pidgin",
		"nso"	    =>	"northern sotho",
		"no"	    =>	"norwegian",
		"nn"	    =>	"norwegian (nynorsk)",
		"oc"	    =>	"occitan",
		"or"	    =>	"oriya",
		"om"	    =>	"oromo",
		"ps"	    =>	"pashto",
		"fa"	    =>	"persian",
		"xx-pirate"	=>	"pirate",
		"pl"	    =>	"polish",
		"pt-BR"	    =>	"portuguese (brazil)",
		"pt-PT"	    =>	"portuguese (portugal)",
		"pa"	    =>	"punjabi",
		"qu"	    =>	"quechua",
		"ro"	    =>	"romanian",
		"rm"	    =>	"romansh",
		"nyn"	    =>	"runyakitara",
		"ru"	    =>	"russian",
		"gd"	    =>	"scots gaelic",
		"sr"	    =>	"serbian",
		"sh"	    =>	"serbo-croatian",
		"st"	    =>	"sesotho",
		"tn"	    =>	"setswana",
		"crs"	    =>	"seychellois creole",
		"sn"	    =>	"shona",
		"sd"	    =>	"sindhi",
		"si"	    =>	"sinhalese",
		"sk"	    =>	"slovak",
		"sl"	    =>	"slovenian",
		"so"	    =>	"somali",
		"es"	    =>	"spanish",
		"es-419"    =>	"spanish (latin american)",
		"su"	    =>	"sundanese",
		"sw"	    =>	"swahili",
		"sv"	    =>	"swedish",
		"tg"	    =>	"tajik",
		"ta"	    =>	"tamil",
		"tt"	    =>	"tatar",
		"te"	    =>	"telugu",
		"th"	    =>	"thai",
		"ti"	    =>	"tigrinya",
		"to"	    =>	"tonga",
		"lua"	    =>	"tshiluba",
		"tum"	    =>	"tumbuka",
		"tr"	    =>	"turkish",
		"tk"	    =>	"turkmen",
		"tw"	    =>	"twi",
		"ug"	    =>	"uighur",
		"uk"	    =>	"ukrainian",
		"ur"	    =>	"urdu",
		"uz"	    =>	"uzbek",
		"vi"	    =>	"vietnamese",
		"cy"	    =>	"welsh",
		"wo"	    =>	"wolof",
		"xh"	    =>	"xhosa",
		"yi"	    =>	"yiddish",
		"yo"	    =>	"yoruba",
		"zu"	    =>	"zulu"
	);

	public static function getLanguageCode($googleCode){
		return self::$googleLang2lang[$googleCode];
	}

	public static function getGoogleLanguageCode($languageCompleteName){
		$langs = array_flip(self::$googleLang2lang);
		return $langs[$languageCompleteName];
	}
} 