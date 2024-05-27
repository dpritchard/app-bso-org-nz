@extends('layouts.main')

@section('content')
<div class="mb-5">
	<h1>2024 Photo Competition</h1>
	<!-- Notes for 2025... Need to streamline this: Short Title. Author. Caption (optional). Set data in php and pass to JS. Supress author until voting finished.-->
<!--
	<p>Welcome to the 2024 BSO Photo Competition. This year we have received 57 photos, from 15 photographers, across the 3 categories.</p>

	<p>Our judges will decide the overall category winners and their decision will be announced on May 8 2024 at the AGM. However, we also have a <em>People’s Choice Award</em> which is up to you!</p>

	<h3>Voting Information</h3>
	<p>BSO members may vote for as many as three of their favourite photos (votes are not limited to one per category). You may browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites, from which you can select up to three photos to vote for.</p>
	<p>Note that this webpage does not record your votes directly - it simply helps you browse and select your favourites. Information on how to cast your vote via email will be displayed once you have selected at least one photo to vote for.</p>
 -->

	<p>Welcome to the 2025 BSO Photo Competition. This year, we received 57 photos, from 15 photographers, across the 3 categories.</p>

	<p>Our judges announced the overall category winners on May 8 2025 at the AGM. At the same time we announced the <em>People’s Choice Award</em> chosen by BSO members.</p>

	<h3>Category Winner: Plant Portrait</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/jx7gdx/1_9_flax_flower.jpg" class="figure-img img-fluid rounded" alt="Stunning colours on a flax flower by Lydia Turley">
		<figcaption class="figure-caption">Flax Flower by Lydia Turley. Stunning colours on a flax flower</figcaption>
	</figure>

	<h3>Category Winner: Plants in the Landscape</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/w8pelq/2_9_mountain_rays.jpeg" class="figure-img img-fluid rounded" alt="Sunset in the Murchison Mountains by Gretchen Brownstein">
		<figcaption class="figure-caption">Mountain Rays by Gretchen Brownstein. Sunset in the Murchison Mountains.</figcaption>
	</figure>


	<h3>Category Winner: Patterns in Nature</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/eqg5zx/3_3_claw.jpeg" class="figure-img img-fluid rounded" alt="A toppled makomako, Aristotelia serrata claws on to life by Allison Knight.">
		<figcaption class="figure-caption">Claw by Allison Knight. A toppled makomako, <em>Aristotelia serrata</em> claws on to life. Tuapeka West.</figcaption>
	</figure>

	<h3><em>People’s Choice Award</em></h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/d8do5x/2_3_living_in_the_alpine.jpeg" class="figure-img img-fluid rounded" alt="Dracophyllum menziesii poking through thick spring snow in front of Mt Xenicus by Anne Schlesselmann">
		<figcaption class="figure-caption">Living in the alpine by Anne Schlesselmann. <em>Dracophyllum menziesii</em> poking through thick spring snow in front of Mt Xenicus, near the Routeburn.</figcaption>
	</figure>

	<h3>Viewing Information</h3>
	<p>We set this page up for members choice voting but now you may now use it to browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites.</p>


</div>
<div class="d-flex align-items-center">
	<v-photo-vote
	v-bind:allow-votes="false"
    v-bind:categories="[
    	{code: 1, name: 'Plant Portrait', description: ''},
    	{code: 2, name: 'Plants in the Landscape', description: ''},
    	{code: 3, name: 'Patterns in Nature', description: ''}
    ]"
    v-bind:images="[
{f: 'https://bso.org.nz/f/d84718/1_1_a_tiny_spider_emerges.jpeg', c: 'An early season Corybas sp. achieves perfect form on the Rakiura forest floor'},
{f: 'https://bso.org.nz/f/p8lo78/1_2_caladenia_catenata.jpeg', c: 'Flower Ship'},
{f: 'https://bso.org.nz/f/v85m1x/1_3_drosera_arcturi.jpeg', c: 'Sticky Goodness'},
{f: 'https://bso.org.nz/f/w8p1l8/1_4_the_last_of_the_dryland_forest.jpg', c: 'Gnarly Discaria toumatou (matagouri) shrubs in the Lindis Valley'},
{f: 'https://bso.org.nz/f/183618/1_5_floating_hook_moss.jpg', c: 'Curly tips and capsules of Warnstorfia fluitans (floating hook moss) in an alpine bog, Old Man Range'},
{f: 'https://bso.org.nz/f/k8no5q/1_6_puawananga_clematis_paniculata.jpeg', c: 'Puawānanga was said to be the child of the stars Puanga (Rigel in Orion) and Rehua (Antares in Scorpio)'},
{f: 'https://bso.org.nz/f/lqbozx/1_7_something_smells_good.jpeg', c: 'Earina autumnalis on the shores of Lake Manapouri'},
{f: 'https://bso.org.nz/f/486ewx/1_8_spring_thing.jpeg', c: 'Acer platonoides flowers on a spring morning'},
{f: 'https://bso.org.nz/f/jx7gdx/1_9_flax_flower.jpg', c: 'Stunning colours on a flax flower'},
{f: 'https://bso.org.nz/f/b8m1v8/1_10_waiting_for_a_meal.jpg', c: 'Close up of a sundew among Oreobolus in a bog near Leith Saddle'},
{f: 'https://bso.org.nz/f/oxz1yq/1_11_ourisia_macrocarpa.jpg', c: 'Ourisia macrocarpa, mountain foxglove,  growing in the shade of stream side shrubs, comes into flower'},
{f: 'https://bso.org.nz/f/gqo1gx/1_12_celmisia_semicordata_mt_burns.jpg', c: 'The wide silvery leaves of the large mountain daisy, Celmisia semicordata subsp. semicordata  stand out in contrast against the Hebes and tussock grasses of this subalpine area'},
{f: 'https://bso.org.nz/f/lq2b5q/1_13_myrsine_nummularifolia_hooker_valley.jpg', c: 'Myrsine nummularia, creeping matipo, is a low growing shrub among rocks. The bright purple fruits are very conspicuous among thick leaves dotted with glands'},
{f: 'https://bso.org.nz/f/4q1nvx/1_14_epilobium_hectori.jpg', c: 'Old Woman Range'},
{f: 'https://bso.org.nz/f/n8w16x/1_15_bedstraws_and_scabweed.jpeg', c: 'Galium aff. perpusillum Clutha & Raoulia australis'},
{f: 'https://bso.org.nz/f/bqeojx/1_16_under_the_sea.jpeg', c: 'A coral fungi (Ramaria) found in the Catlins'},
{f: 'https://bso.org.nz/f/eqgom8/1_17_orange_glow.jpeg', c: 'An orange coral fungi (Ramaria) found in the Catlins'},
{f: 'https://bso.org.nz/f/exy1bx/1_18_frullania_sp.jpg', c: 'A trees bladderwort'},
{f: 'https://bso.org.nz/f/rxr118/1_19_gyromitra_infula_possibly.jpg', c: 'Walking in the pine'},
{f: 'https://bso.org.nz/f/mxjogq/2_1_polypore_plus.jpeg', c: 'A rotting Nothofagus trunk landscape is populated by colourful bracket fungi interspersed with parmelioid and beard lichens (Usnea sp). Tuapeka West'},
{f: 'https://bso.org.nz/f/vxkob8/2_2_tussock_sunset.jpeg', c: 'Tussock glows as the sun sets above Manorburn Dam, Central Otago'},
{f: 'https://bso.org.nz/f/d8do5x/2_3_living_in_the_alpine.jpeg', c: 'Dracophyllum menziesii poking through thick spring snow in front of Mt Xenicus, near the Routeburn'},
{f: 'https://bso.org.nz/f/e89r18/2_4_rakeahua_reflections.jpg', c: 'Mirror Morning'},
{f: 'https://bso.org.nz/f/bxvwl8/2_5_mason_bay.jpeg', c: 'Popping Ping'},
{f: 'https://bso.org.nz/f/d84e1q/2_6_pincushion_stepping_stones.jpg', c: 'Cushions of Agrostis muscosa and moss in an ephemeral alpine wetland, Old Man Range'},
{f: 'https://bso.org.nz/f/p8l678/2_7_alpine_red_carpet.jpg', c: 'A carpet of Epilobium tasmanicum in an alpine fell field'},
{f: 'https://bso.org.nz/f/v85g1x/2_8_brackets_at_the_beech.jpeg', c: 'New shelving installed on a decaying Fuscospora cliffortioides'},
{f: 'https://bso.org.nz/f/w8pelq/2_9_mountain_rays.jpeg', c: 'Sunset in the Murchison Mountains'},
{f: 'https://bso.org.nz/f/183z1x/2_10_reflections.jpg', c: 'Regenerating wetland podocarp forest on the West Coast'},
{f: 'https://bso.org.nz/f/k8nm5x/2_11_windy_tops.jpg', c: 'A tough day for standing upright on Flag Staff'},
{f: 'https://bso.org.nz/f/lqbdz8/2_12_anisotome_lyallii_tautuku_peninsula.jpg', c: 'Lyall’s carrot in the coastal spray zone of the Tautuku Peninsula'},
{f: 'https://bso.org.nz/f/486ywq/2_13_coastal_lichens_tautuku_peninsula.jpg', c: 'Lichens dominate in this stark coastal Catlins rockland'},
{f: 'https://bso.org.nz/f/jx7rdq/2_14_coastal_forest_pororari_valley.jpg', c: 'Coastal forest clothes the limestone walls of the Pororari River canyon'},
{f: 'https://bso.org.nz/f/b8m7v8/2_15_tuapeka_gold.jpeg', c: 'Kōwhai Sophora microphylla, making a springtime statement in the Clutha valley: Tuapeka West'},
{f: 'https://bso.org.nz/f/oxzly8/2_16_nothofagus_in_the_mist.jpeg', c: 'Beech trees on the Heaphy Track shrouded in fog'},
{f: 'https://bso.org.nz/f/gqozg8/2_17_humans_for_scale.jpg', c: 'Looking down from Key Summit, Fiordland, to subalpine vegetation and beech forest beyond'},
{f: 'https://bso.org.nz/f/lq2m58/2_18_abandoned_halfling_hamlet.jpg', c: 'A chain of purple mushrooms under a beech tree form the perfect setting for a fairytale'},
{f: 'https://bso.org.nz/f/4q17vq/2_19_fern_emerging.jpg', c: 'A tree fern spreads itself out in the canopy'},
{f: 'https://bso.org.nz/f/n8w96q/2_20_defying_gravity.jpg', c: 'Disphyma australe, The Catlins'},
{f: 'https://bso.org.nz/f/bqe4j8/2_21_veronica_buchananii.jpg', c: 'Old Woman Range'},
{f: 'https://bso.org.nz/f/eqg5mx/2_22_fungi_forest.jpeg', c: 'Coprinellus fungi creating their own forest'},
{f: 'https://bso.org.nz/f/exy4bx/2_23_chamber_choir.jpg', c: 'Lichen growing on cyanobacteria'},
{f: 'https://bso.org.nz/f/rxry18/3_1_parasol_parade.jpeg', c: 'A parade of Coprinellus disseminatus on a decaying trunk.  Frasers Gully, Dunedin'},
{f: 'https://bso.org.nz/f/bqe448/3_2_tantrum_in_the_tussock.jpg', c: 'Expressive schist tors in a dry tussock landscape. Old Dunstan Road, Central Otago'},
{f: 'https://bso.org.nz/f/eqg5zx/3_3_claw.jpeg', c: 'A toppled makomako, Aristotelia serrata claws on to life. Tuapeka West'},
{f: 'https://bso.org.nz/f/exy4lx/3_4_blechnum_durum.jpeg', c: 'The pink edges on the rear of a fresh Blechnum frond highlight the delicate veining of the upwards curving pinnae'},
{f: 'https://bso.org.nz/f/rxry28/3_5_whence_shines_the_sun.jpeg', c: 'The shadow cast by the setting sun apparently, but impossibly, echoes the shape of the rocky schist tor'},
{f: 'https://bso.org.nz/f/vxkyjq/3_6_donaita_novae-zelandiae.jpeg', c: 'Magic Eye'},
{f: 'https://bso.org.nz/f/mxjg6x/3_7_as_soft_as_moss.jpg', c: 'Branching tips of dryland moss Breutelia affinis, Roxburgh Gorge'},
{f: 'https://bso.org.nz/f/d8dweq/3_8_butterfly_symmetry.jpeg', c: 'A beautiful red admiral resting on a Veronica speciosa'},
{f: 'https://bso.org.nz/f/e89bwx/3_9_wave_to_the_crowd.jpeg', c: 'Lichen on the trail side'},
{f: 'https://bso.org.nz/f/bxv3mq/3_10_myriophyllum_robustum.jpg', c: 'Stout water milfoil under coastal forest, West Coast'},
{f: 'https://bso.org.nz/f/d84ldx/3_11_droplets_on_lupin.jpg', c: 'Rain drops on Russell lupins, Kinloch'},
{f: 'https://bso.org.nz/f/p8lrw8/3_12_fractals.jpeg', c: 'Tree fern from above'},
{f: 'https://bso.org.nz/f/v855w8/3_13__bark_community.jpg', c: 'Ridges of bark, and lichens growing on them, form layers of texture and pattern'},
{f: 'https://bso.org.nz/f/w8p94x/3_14_silver_beech_forest_mt_burns.jpg', c: 'Swathes of lichen hang from the twisted branches of silver beech trees. Following the track seems like walking through a snow storm'},
{f: 'https://bso.org.nz/f/1834yq/3_15_lunularia_cruciata.jpg', c: 'Liverworts pore'}
	]"></v-photo-vote>
</div>
@endsection
