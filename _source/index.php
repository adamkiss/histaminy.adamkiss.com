<?php

use Cocur\Slugify\Slugify;

require_once __DIR__ . '/vendor/autoload.php';

$data = [
	'Vajcia' => [
		[
			'prepeličie vajcia',
			'vaječný žĺtok',
		],
		[],
		[
			'slepačie vajcia',
			'vaječný bielok',
		],
		[],
	],
	'Mliečne výrobky' => [
		[
			'čerstvé maslo, smotanové maslo',
			'kozie mlieko',
			'ovčie mlieko',
			'surové, nespracované',
			'sladká smotana (neochutená, bez éčok)',
			'srvátka',
			'maslový syr',
			'syr gouda (nezrelý, mladý)',
			'syr krémový, neochutený, veľmi mladý (čerstvý)',
			'syr macarpone',
			'syr mozzarela',
			'syr ricotta',
			'tvaroh',
		],
		[
			'cmar (mierne kyslý, na začiatku fermentácie)',
			'jogurt (neochutený)',
			'kefír',
			'maslo s mliečnou kultúrou',
			'bezlaktózové mlieko',
			'sušené mlieko',
			'kyslá smotana',
			'syr fet',
		],
		[
			'hotové syrové výrobky s prísadami',
			'syr čedar',
			'syr fontina',
			'syr gouda (vyzretý)',
			'syr plesnivý',
			'syr raclette',
			'syr roquefort',
			'syr tavený',
			'syr z nepasterizovaného mlieka',
			'výrobky z nespracovaného surového mlieka',
		],
		[
			'tvrdý syr',
			'všetky zrejúce syry',
		],
	],
	'Mäso' => [
		['hovädzie (čerstvé)',
			'hydina',
			'kačacie',
			'jazyk (teľací, hovädzí)',
			'kuracie (bez kože)',
			'mleté mäso, skonzumované hneď po pomletí',
			'morčacie',
			'prepeličie',
			'pštrosie',
			'teľacie (čerstvé)',
			'bravčová masť',
			'sadlo', ],
		[
			'bravčové (čerstvé)',
			'divina',
			'zverina',
		],
		[
			'mleté mäso (vážené, balené)',
			'vnútornosti',
		],
		[
			'klobásy',
			'mäso sušené',
			'mäso údené',
			'párky',
			'sušená šunka',
			'šunka',
			'saláma',
		]
	],
	'Ryby a morské plody' => [
		[
			'pstruh obyčajný, dúhovaný',
			'ryba (čerstvo chytená, hlboko zmrazená)',
			'sivoň americký',
		],
		[],
		[
			'všetky druhy morských plodov'
		], [
			'ryba údená',
			'ančovičky',
			'ryba kupovaná, chladená',
			'tuniak',
		]
	],
	'Rastlinné potraviny' => [
		[
			'amarant',
			'sladké zemiaky, bataty',
			'zemiaky',
			'kamut',
			'konopné semená',
			'kukurica sladká: klas, čerstvá, pasterizovaná, sušená (múka, kaša), kukuričné lupienky (neochutené, bez éčok)',
			'maltodextrín',
			'ovos',
			'pšenica khorasan (Turanicum)',
			'pšeno',
			'quinoa',
			'ryža: divoká, indiánska',
			'ryžové chlebíčky, lupienky, rezance',
			'palmový škrob',
			'špalda',
			'zizánia',
		],
		[
			'chlieb',
			'jačmeň',
			'pečivo',
			'pšenica',
			'raž',
			'žito',
		],
		[
			'jačmenný slad, slad',
			'pohánka',
			'pšeničné klíčky',
			'slnečnicové semienka',
		]
	],
	'Orechy a semiačka' => [
		[
			'makadamové orechy',
			'para orechy',
			'tigrie oriešky, nepražené',
			'pistácie',
			'mandle nepražené',
			'chia semiačka',
			'psyllium',
			'tekvicové semiačka',
		], [
			'kešu',
			'lieskové orechy',
			'mandle, pražené',
			'píniové semienka',
			'gaštany',
			'sezam',
		], [
			'arašidy',
			'chufa, zemné mandle pražené',
			'tigrie oriešky pražené',
			'slnečnicové semiačka',
		],
		[
			'vlašské orechy'
		]
	],
	'Tuky a oleje' => [
		[
			'kokosový olej',
			'bodliakový olej',
			'margarín bez éčok',
			'olivový olej',
			'palmový olej',
			'repkový olej',
			'olej z čiernej rasce',
			'olej z tekvicových semien',
			'tekvicový olej',
		], [
			'slnečnicový olej',
			'makadámový olej',
		],
		[
			'olej z vlašských orechov',
		],
		[]
	],
	'Zelenina' => [
		[
			'artičoky',
			'asparágus',
			'brokolica',
			'čakanka',
			'cibuľa biela (s bielou šupkou)',
			'cuketa',
			'dyňa',
			'fenikel',
			'kapusta (červená, čínska)',
			'karfiol',
			'mrkva',
			'paprika sladká',
			'paštrnák',
			'polníček',
			'reďkovka: biela, červená',
			'repa: biela, červená',
			'šalát',
			'ľadový šalát',
			'špargľa',
			'tekvica',
			'uhorka',
			'zeler',
			'žerucha',
		],
		[
			'cesnak',
			'chren',
			'cibuľa',
			'hrach siaty (čerstvý, sušený)',
			'kaleráb',
			'kapusta ružičková',
			'kel',
			'pór',
			'zelené fazuľky',
			'rukola',
		],
		[
			'bôb',
			'čili papričky',
			'baklažán',
			'cícer',
			'fazuľa borlotti',
			'žihľava',
			'olivy',
			'paprika štipľavá',
			'paradajky',
			'rajčiaky',
			'sója (bôby, múka)',
			'šošovica',
			'špenát',
			'strukoviny (sója, šošovica, hrach, fazuľa)',
			'zaváraná zelenina',
		],
		[
			'kapusta kvasená',
			'kapusta kyslá',
		]
	],
	'Ovocie' => [
		[
			'acerola',
			'banán cukrový',
			'baza čierna',
			'broskyňa',
			'brusnice',
			'čerešne',
			'čučoriedky',
			'ďatle (sušené)',
			'dračie ovocie',
			'dula',
			'egreš',
			'goji',
			'granátové jablko',
			'hrozienka',
			'hrozno',
			'hurmi kaki',
			'jablko',
			'kakaové maslo',
			'kaki',
			'karambola',
			'kokos, kokosové mlieko',
			'kustovnica čínska',
			'liči',
			'marhuľa',
			'melón (okrem vodného melónu)',
			'nektárinka',
			'ostružina',
			'rakytník',
			'ríbezľa červená, čierna',
			'višne',
		],
		[
			'figy (čerstvé, alebo sušené)',
			'hruška',
			'mango',
			'melón vodový',
			'rebarbora',
			'šípky',
			'slivky, sušené slivky',
		],
		[
			'ananás',
			'avokádo',
			'zrelý banán',
			'jahoda',
			'kakao, kakaový prášok',
			'maliny',
			'mandarínky',
			'papája',
			'kiwi',
		],
		[
			'limetka',
			'pomaranč',
			'pomarančová kôra',
			'citrón',
			'citrónová kôra',
			'citrusy: grapefruit, grep',
		]
	],
	'Byliny' => [
		[
			'bazalka',
			'mäta',
			'oregano',
			'petržlen',
			'rozmarín',
			'šalvia',
			'saturejka',
			'majorán',
			'tymian',
			'koriander',
		],
		[
			'cesnak medvedí',
			'pažítka',
			'kôpor',
		],
		[
			'senovka grécka',
			'žihľava',
		]
	],
	'Huby, hríby' => [
		[],
		[
			'kvasnice (všetky druhy)',
			'šampiňóny',
		],
		[
			'hríb smrekový',
			'hríby, huby',
		],
		[
			'červené riasy',
			'chaluhy',
			'hnedé riasy',
			'morské riasy',
			'riasy',
		]
	],
	'Sladidlá' => [
		[
			'agáve nektár, sirup',
			'brezový cukor, xylitol, xylit',
			'cukor (repkový, trstinový',
			'dextróza',
			'sorbitolový cukor',
			'fruktóza',
			'glukóza',
			'javorový cukor',
			'karamel',
			'laktóza',
			'palmový cukor',
			'maltóza, sladový cukor',
			'med',
			'sacharóza',
		],
		[
			'umelé sladidlá',
		],
		[
			'koreň sladkého drievka',
			'sladový extrakt',
		]
	],
	'Koreniny, dochucovadlá, arómy' => [
		[
			'jalovec (bobule)',
			'kardanom',
			'klinček',
			'kmín',
			'koriander',
			'kurkuma',
			'ocot kvasný, liehový',
			'paprika sladká',
			'rasca',
			'rasca čierna',
			'bobkový list',
			'rímsky koriander',
			'škorica',
			'tymian',
			'fenikel',
		],
		[
			'mak',
			'muškátový oriešok',
			'jablčný ocot',
			'vanilka: vanilkový prášok, cukor, extrakt',
			'zázvor',
		],
		[
			'biele korenie',
			'bujóny',
			'čierne korenie',
			'zelené korenie',
			'karí',
			'kvasnicový extrakt',
			'paprika palivá',
			'rasca rímska',
			'sójová omáčka',
			'horčičné semienko',
			'klinčeky',
		],
		[
			'ocot balzamiko',
			'vinný ocot (z bieleho, červeného vína)',
			'sójová omáčka',
			'horčica',
			'kečup',
		],
	],
	'Nápoje' => [
		[
			'voda z vodovodu',
			'minerálna voda, neperlivá',
			'čaj verbena',
			'kamilkový čaj',
			'lipový čaj',
			'roiboos',
			'šalviový čaj',
			'mätový čaj',
			'brusnicový nektár',
			'bazový sirup',
		],
		[
			'termálna voda s obsahom síry, fluóru, jódu, kyseliny uhličitej',
			'bylinné čaje z liečivých bylín',
			'maté',
			'zelený čaj',
			'žihľavový čaj',
			'šípkový čaj',
			'pomarančový džús',
			'limonády',
			'sladké perlivé nápoje',
			'sóda',
			'coca - cola',
			'cola',
			'káva',
			'espresso',
			'ovsený nápoj',
			'ryžové mlieko',
			'bezhistamínové víno',
		],
		[
			'paradajkový džús',
			'energetické nápoje',
			'čokoládové nápoje',
			'kakaové nápoje',
			'varená čokoláda',
			'sójové mlieko',
			'brandy',
			'liehovina, číra',
			'pálenka, číra',
			'pivo',
			'rum',
			'víno biele',
		],
		[
			'čierny čaj',
			'citrusové džúsy',
			'alkohol, etanol',
			'liehovina',
			'pálenka prifarbená, ochutená',
			'šampanské',
			'šumivé víno',
			'víno',
			'víno červené',
		]
	]
];

$slugify = new Slugify();
$slugify->activateRuleSet('slovak');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabuľka histamínov</title>

	<?= '<style>' . file_get_contents(__DIR__ . '/index.css') . '</style>'; ?>
</head>

<body>
	<main>
		<div class="bg-levels">
			<div class="bg-level-0"></div>
			<div class="bg-level-1"></div>
			<div class="bg-level-2"></div>
			<div class="bg-level-3"></div>
		</div>

		<header>
			<div>Level 0</div>
			<div>Level 1</div>
			<div>Level 2</div>
			<div>Level 3</div>
		</header>

<?php foreach($data as $section => $food) { ?>
		<section>
			<h1><?= $section ?></h1>
			<ul>
<?php foreach($food as $level => $items) {
					foreach ($items as $item) {
						printf(
							"\t\t\t\t<li data-level-%d data-visible data-match=\"%s\">%s</li>\n",
							$level,
							$slugify->slugify($item, ' '),
							$item
						);
					}
				} ?>
			</ul>
		</section>
		<?php } ?>
	</main>
</body>

</html>
