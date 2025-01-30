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
			'surové, nespracované mlieko',
			'sladká smotana (neochutená, bez éčok)',
			'srvátka',
			'maslový syr',
			'gouda (nezrelý, mladý)',
			'krémový neochutený syr, veľmi mladý (čerstvý) syr',
			'mascarpone',
			'mozzarela',
			'ricotta',
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
			'syr feta',
		],
		[
			'hotové syrové výrobky s prísadami',
			'cheddar (čedar)',
			'fontina',
			'gouda (vyzretý)',
			'plesnivý syr (camembert, brie, roquefort)',
			'raclette',
			'tavený syr',
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
	<script src="/alpinejs@3.14.6.min.js" defer></script>
</head>

<body>
	<main>
		<header>
			<div class="header"><!-- 🤷🏻 -->
				<h1>Tabuľka histamínov</h1>
				<div x-cloak x-data>
					<select name="jump" id="jump" placeholder="Preskoč na…" x-on:change="
						document.getElementById($el.value).scrollIntoView({behavior: 'smooth'});
						$el.value = '...';
					">
						<option disabled value="...">Preskoč na…</option>
						<?php foreach($data as $section => $_) { ?>
						<option
							value="<?= $slugify->slugify($section) ?>">
							<?= $section ?></option>
						<?php } ?>
					</select>
				</div>
				<div x-cloak class="search-wrapper" x-data="{items: [], search: ''}" x-init="
						items = Array.from(document.querySelectorAll('li[data-visible]'))
							.map(item => ({item, show: true, fmt: item.dataset?.match ?? ''}));

						console . log(items);

						$watch('search', value => {
							if (!value || value === '' || value.length < 2) {
								items.forEach(item => item.show = true);
							} else {
								const val = value.toLowerCase();
								if (val.includes(' ')) {
									val = val.split(' ').filter(v => v.length > 1).join(' ');
									items.forEach(item => {
										item.show = val.every(p => item.fmt.includes(p));
									});
								} else {
									items.forEach(item => {
										item.show = item.fmt.includes(val);
									});
								}
							}
							items.forEach(item => item.item.toggleAttribute('data-visible', item.show));
						});
					">
					<input type="search" name="search" id="search" class="" x-model.debounce.300ms="search"
						placeholder="Nájdi mi…" />
				</div>
			</div>
			<div data-level data-level-0><span>Level 0</span> <span data-level-emoji>✅</span></div>
			<div data-level data-level-1><span>Level 1</span> <span data-level-emoji>⚠️</span></div>
			<div data-level data-level-2><span>Level 2</span> <span data-level-emoji>🚫🚫</span></div>
			<div data-level data-level-3><span>Level 3</span> <span data-level-emoji>❌❌❌</span></div>
		</header>


		<?php foreach($data as $section => $food) { ?>
		<section id="<?= $sslug = $slugify->slugify($section) ?>">
			<h1><span><?= $section ?></span><a
			href="#<?= $sslug ?>">#</a><span class="grow"> </span><a
					href="#">↑</a></h1>
			<ul>
				<?php foreach($food as $level => $items) {
					foreach ($items as $item) {
						printf(
							"\t\t\t\t<li data-level-%d data-visible data-match=\"%s\"><span>%s</span><span data-level-emoji>%s</span></li>\n",
							$level,
							$slugify->slugify($item, ' '),
							$item,
							match ($level) {
								0 => '✅',
								1 => '⚠️',
								2 => '🚫🚫',
								3 => '❌❌❌',
							}
						);
					}
				} ?>
			</ul>
		</section>
		<?php } ?>

		<div class=" bg-levels" inert>
			<div class="bg-level-0"></div>
			<div class="bg-level-1"></div>
			<div class="bg-level-2"></div>
			<div class="bg-level-3"></div>
		</div>
	</main>

	<a href="https://adamkiss.com" id="brand" target="_blank">
		<img src="/logo-adamkiss-base.svg" alt="Logo: Adam Kiss" width="60" height="60">
	</a>
</body>

</html>
