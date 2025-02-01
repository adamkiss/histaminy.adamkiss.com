<?php

use Cocur\Slugify\Slugify;

require_once __DIR__ . '/vendor/autoload.php';

$repeat = function ($str, $times) {
	return str_repeat($str, $times);
};

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

$colors = [
	'background' => [
		'bg-transparent',
		'bg-yellow-500/5',
		'bg-amber-500/10',
		'bg-red-500/15',
	],
	'gradient' => [
		'bg-linear-to-b from-green-500/10 to-green-500/0',
		'bg-linear-to-b from-yellow-500/5 to-yellow-500/0',
		'bg-linear-to-b from-amber-500/10 to-amber-500/0',
		'bg-linear-to-b from-red-500/15 to-red-500/0',
	],
	'icon' => [
		'text-green-500',
		'text-yellow-500',
		'text-amber-600',
		'text-red-700',
	],
];

$slugify = new Slugify();
$slugify->activateRuleSet('slovak');

$production = isset($_GET['build']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Histamíny</title>

	<meta property="og:image" content="https://histaminy.adamkiss.com/histaminy.adamkiss.com-meta.jpg" />
	<meta property="og:image:alt" content="Ikona Tabuľky histamínov a nadpis 'Tabuľka histamínov'" />
	<meta property="og:site_name" content="Histamíny" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Histamíny" />
	<meta property="og:url" content="https://histaminy.adamkiss.com" />
	<meta property="og:description"
		content="Tabuľka potravín a ich levelu histamínov, s vyhľadávaním a prehľadným dizajnom" />

	<meta name="theme-color" content="#71bb64">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="apple-touch-icon" sizes="180x180" href="/histaminy-60@3x.png" type="image/png">
	<link rel="apple-touch-icon" href="/histaminy-60@1x.png" type="image/png">
	<link rel="icon" href="/histaminy-32@1x.png" type="image/png">


	<?php if($production) { ?>
	<style>
		<?= file_get_contents(__DIR__ . '/main.min.css') ?>
	</style>
	<?php } else { ?>
	<link rel="stylesheet" href="main.out.css">
	<?php } ?>

	<script src="/alpinejs@3.14.6.min.js" defer></script>
</head>

<body class="dark:!bg-zinc-800">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="hidden">
		<path id="icon-level-0" fill-rule="evenodd"
			d="M8.5 1.709a.75.75 0 0 0-1 0 8.963 8.963 0 0 1-4.84 2.217.75.75 0 0 0-.654.72 10.499 10.499 0 0 0 5.647 9.672.75.75 0 0 0 .694-.001 10.499 10.499 0 0 0 5.647-9.672.75.75 0 0 0-.654-.719A8.963 8.963 0 0 1 8.5 1.71Zm2.34 5.504a.75.75 0 0 0-1.18-.926L7.394 9.17l-1.156-.99a.75.75 0 1 0-.976 1.138l1.75 1.5a.75.75 0 0 0 1.078-.106l2.75-3.5Z"
			clip-rule="evenodd" />
		<path id="icon-level-1" fill-rule="evenodd"
			d="M6.701 2.25c.577-1 2.02-1 2.598 0l5.196 9a1.5 1.5 0 0 1-1.299 2.25H2.804a1.5 1.5 0 0 1-1.3-2.25l5.197-9ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 1 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
			clip-rule="evenodd" />
		<path id="icon-level-2" fill-rule="evenodd"
			d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
			clip-rule="evenodd" />
		<path id="icon-level-3" fill-rule="evenodd"
			d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm2.78-4.22a.75.75 0 0 1-1.06 0L8 9.06l-1.72 1.72a.75.75 0 1 1-1.06-1.06L6.94 8 5.22 6.28a.75.75 0 0 1 1.06-1.06L8 6.94l1.72-1.72a.75.75 0 1 1 1.06 1.06L9.06 8l1.72 1.72a.75.75 0 0 1 0 1.06Z"
			clip-rule="evenodd" />
	</svg>

	<main class="relative sm:mx-4 shadow-2xl lg:grid lg:grid-cols-4">
		<header x-data="{mobile: true}" x-init="
			const style = getComputedStyle(document.documentElement);
			const rem = parseFloat(style.fontSize);
			const switchWidth = parseFloat(style.getPropertyValue('--breakpoint-lg')) * rem;

			if (window.innerWidth >= switchWidth) {
				document.querySelectorAll('details').forEach(detail => detail.setAttribute('open', ''));
				mobile = false;
			}
		" class="sm:-mx-4 lg:col-span-full lg:grid lg:grid-cols-subgrid">
			<h1 class="
				text-lg text-center py-4
				lg:py-0 lg:pl-8 lg:text-left lg:border-b lg:border-r border-black/10 dark:border-white/20
			">Tabuľka histamínov</h1>
			<div x-cloak class="
				fixed bottom-0 inset-x-0 bg-white dark:bg-stone-800
				lg:relative lg:col-span-3 lg:inset-x-auto lg:pt-1
				lg:border-b border-black/10 dark:border-white/20
				focus-within:bg-blue-100 dark:focus-within:bg-blue-900
			" x-data="{items: [], sections: [], search: ''}" x-init="
					sections = Array.from(document.querySelectorAll('details'))
						.map($el => ({$el}));
					items = Array.from(document.querySelectorAll('li[data-level]'))
						.map($el => ({$el, show: true, fmt: $el.dataset?.match ?? ''}));

					$watch('search', value => {
						let searching;

						if (!value || value === '' || value.length < 2) {
							searching = false;
							items.forEach(item => item.show = true);
						} else {
							searching = true;
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
						items.forEach(item => item.$el.toggleAttribute('data-visible', item.show));
						sections.forEach(s => s.$el.toggleAttribute(
							'open',
							searching
								? s.$el.matches(':has([data-visible])')
								: !mobile
						));
					});
				">
				<div class="absolute inset-0 pl-2 lg:pt-1 flex items-center opacity-50" inert>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
						<path d="M8.25 10.875a2.625 2.625 0 1 1 5.25 0 2.625 2.625 0 0 1-5.25 0Z" />
						<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.125 4.5a4.125 4.125 0 1 0 2.338 7.524l2.007 2.006a.75.75 0 1 0 1.06-1.06l-2.006-2.007a4.125 4.125 0 0 0-3.399-6.463Z" clip-rule="evenodd" />
					</svg>
				</div>
				<input type="search" name="search" id="search" class="mt-0 py-2 pl-10 w-full focus:outline-0" x-model.debounce.300ms="search"
					placeholder="Nájdi mi… (bez mäkčeňov a dĺžňov)" />
			</div>
			<?php for($l = 0; $l < 4; $l++) {
				$padding = match($l) {
					0 => 'lg:!pl-8',
					3 => 'lg:!pr-8',
					default => '',
				};
				echo <<<HTML
					<div class="
						hidden lg:sticky lg:top-0 lg:z-50
						lg:flex items-center justify-between lg:-mb-px {$padding}
						px-4 py-2 font-bold border-b border-black/10 dark:border-white/20
						{$colors['gradient'][$l]} shadow-xl
						before:-z-1 before:absolute before:inset-0 before:block before:bg-stone-50 dark:before:bg-stone-800
					">
						<span>Level {$l}</span>
						<span class="{$colors['icon'][$l]} pt-1 flex">{$repeat('<svg class="size-[16px]" viewBox="0 0 16 16"><use href="#icon-level-' . $l . '" fill="currentColor"/></svg>', max($l, 1))}</span>
					</div>
				HTML;
			}?>
		</header>

		<?php foreach($data as $section => $food) { ?>

		<details class="group contents-if-has-visible"
			id="<?= $sslug = $slugify->slugify($section) ?>">
			<summary class="
					col-span-full flex gap-1 py-1 lg:py-2
					bg-blue-500/5 border-y border-black/10 dark:border-white/20 not-group-open:border-b-0
					 text-xl font-extralight group-first-of-type:border-t-0
				">
				<span class="marker group-open:rotate-90 scale-80 transition-transform duration-75">→</span>
				<h2 class=""><?= $section ?></h2>
			</summary>
			<ul class="lg:col-span-full lg:grid lg:grid-flow-dense lg:grid-cols-subgrid"><?php
			foreach($food as $level => $items) {
				foreach ($items as $l => $item) {
					$border = ($l === count($items) - 1) ? 'lg:!border-b-0' : '';
					echo <<<HTML
									<li class="
										p-2 border-b border-b-black/10 dark:border-b-white/10 {$border}
										{$colors['background'][$level]} lg:bg-transparent
										flex-if-visible items-start overflow-hidden
									" data-level="{$level}" data-visible data-match="{$slugify->slugify($item, ' ')}">
										<span class="grow">{$item}</span>
										{$repeat(<<<ICON
											<span class="{$colors['icon'][$level]} pt-1 lg:hidden"><svg class='size-[16px]' viewBox="0 0 16 16"><use href="#icon-level-{$level}" fill="currentColor"/></svg></span>
										ICON, max($level, 1))}
									</li>

					HTML;
				}
			} ?>
			</ul>
		</details>

		<?php } ?>

		<section id="about" class="styled-html">
			<h2>Tabuľka histamínov</h2>
			<p>Projekt pripravil <a href="https://adamkiss.com">Adam Kiss</a>, dáta zozbierala <a href="https://zdravoteka.sk/magazin/antihistaminova-dieta-ako-stravovat-mozem-nemozem-jest/" target="_blank">Zdravotéka</a>. Zdrojový kód je dostupný <a href="https://github.com/adamkiss/histaminy.adamkiss.com">GitHube</a></p>
			<p>Posledný update: 01.02.2025</p>
		</section>

		<div class="hidden lg:grid grid-cols-4 absolute -z-1 inset-0 " inert>
			<div class="<?= $colors['background'][0] ?>"></div>
			<div class="border-l border-black/10 <?= $colors['background'][1] ?>"></div>
			<div class="border-l border-black/10 <?= $colors['background'][2] ?>"></div>
			<div class="border-l border-black/10 <?= $colors['background'][3] ?>"></div>
		</div>
	</main>

	<a href="https://adamkiss.com" id="brand" target="_blank">
		<img src="/logo-adamkiss-base.svg" alt="Logo: Adam Kiss" width="60" height="60">
	</a>
</body>

</html>
