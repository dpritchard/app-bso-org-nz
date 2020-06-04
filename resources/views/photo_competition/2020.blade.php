@extends('layouts.main')

@section('content')
<div class="mb-5">
	<h1>2020 Photo Competition</h1>
	<!-- Notes for 2021. Need: Short Title. Author. Caption (optional). Set data in php and pass to JS. Need author to be supressed until voting finished.-->
	<!-- 
	<p>Welcome to the 2020 BSO Photo Competition. This year we have received 62 photos, from 13 photographers, across the 3 categories.</p>

	<p>Our judges will decide the overall category winners and their decision will be announced on May 13th at the AGM. However we also have a <em>People’s Choice Award</em> which is up to you!</p>

	<h3>Voting Information</h3>
	<p>BSO members may vote for as many as three of their favourite photos (votes are not limited to one per category). You may browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites, from which you can select up to three photos to vote for.</p>
	<p>Note that this webpage does not record your votes directly - it simply helps you browse and select your favourites. Information on how to cast your vote via email will be displayed once you have selected at least one photo to vote for.</p>
	-->
	<p>Welcome to the 2020 BSO Photo Competition. This year, we received 62 photos, from 13 photographers, across the 3 categories.</p>
	
	<p>Our judges announced the overall category winners on May 13th 2020 at the AGM. At the same time we announced the <em>People’s Choice Award</em> chosen by BSO members. For the first time ever the members agreed with the judges!</p>

	<h3>Category Winner: Plant Portrait and <em>People’s Choice Award</em></h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/jx7p3x/1_38_Bright_flowers_of_an_otherwise_well_camouflaged_Haastia_sinclairii_var_sinclairii_at_Lathrop_Saddle_Hokitika.jpg" class="figure-img img-fluid rounded" alt="Hokitika Haastia">
		<figcaption class="figure-caption"><em>Hokitika Haastia</em> by Ian Geary. Bright flowers of an otherwise well camouflaged <em>Haastia sinclairii</em> var. sinclairii at Lathrop Saddle, Hokitika.</figcaption>
	</figure>
	

	<h3>Category Winner: Plants in the Landscape</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/bqe6vx/2_6_Alpine_Tarns.jpg" class="figure-img img-fluid rounded" alt="Alpine Tarns">
		<figcaption class="figure-caption"><em>Alpine Tarns</em> by John Barkla.</figcaption>
	</figure>
	

	<h3>Category Winner: Plants and People</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/bxv5o8/3_1_Takitimu_camp.jpg" class="figure-img img-fluid rounded" alt="Takitimu camp">
		<figcaption class="figure-caption"><em>Takitimu camp</em> by John Barkla.</figcaption>
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
    	{code: 3, name: 'Plants and People', description: ''}
    ]" 
    v-bind:images="[
{f: 'https://bso.org.nz/f/vxk638/1_1_Cyathea_medullaris.jpg', c: 'Cyathea medullaris - A young mamaku frond making its way into the world'},
{f: 'https://bso.org.nz/f/mxjzr8/1_2_Asplenium_bulbiferum.jpg', c: 'Asplenium bulbiferum - This fern may be common but it greatly enhances an urban spinney'},
{f: 'https://bso.org.nz/f/d8dn3q/1_3_Ramaria_sp.jpg', c: 'Ramaria sp. - Found in Ross Creek Reserve, Dunedin, this fungus put on a grand display throughout autumn.'},
{f: 'https://bso.org.nz/f/e89n7x/1_4_Stegostyla_lyallii.jpg', c: 'Stegostyla lyallii - Lake Monowai, December 2019'},
{f: 'https://bso.org.nz/f/bxvrvq/1_5_Leptospermum_scoparium.jpg', c: 'Leptospermum scoparium - Burnt Ridge Track, Borland Lodge, December  2019'},
{f: 'https://bso.org.nz/f/d84nzq/1_6_Shelf_fungus.jpg', c: 'Shelf fungus - Nature trail, Borland Lodge, December 2019'},
{f: 'https://bso.org.nz/f/p8lwbx/1_7_Spider_orchid.jpg', c: 'Spider orchid - Ulva Island, November 2019'},
{f: 'https://bso.org.nz/f/v854zx/1_8_Warm_fuzzies.jpeg', c: 'Warm fuzzies - Fuligo septica, the “dog vomit” slime mould - Lake Monowai, Fiordland'},
{f: 'https://bso.org.nz/f/w8p5oq/1_9_Flamboyant_lichen.jpeg', c: 'Flamboyant lichen - Yarrumia colensoi displaying prominent orange-brown fruiting bodies and golden vegetative propagules - Green Lake, Fiordland'},
{f: 'https://bso.org.nz/f/1832nx/1_10_Orchid_study.jpg', c: 'Orchid Study. Diuris orientis - Diuris orientis is one of the many small orchids found in the eucalyptus woodlands of South Australia'},
{f: 'https://bso.org.nz/f/k8n5k8/1_11_Strategies_for_Success.jpg', c: 'Strategies for Success - The flower of the burdock is a rich purple colour when it opens offering nectar to pollinating insects.'},
{f: 'https://bso.org.nz/f/lqb2oq/1_12_Celestial_Object.jpg', c: 'Celestial Object - Natural light transforms the most prosaic of all plants, the dandelion, into an ethereal object.'},
{f: 'https://bso.org.nz/f/4861yq/1_13_The_Mechanics_of_the_Mycosphere.jpg', c: 'The Mechanics of the Mycosphere - A tiny fungus growing on a fallen branch reveals a surprising pattern when examined closely.'},
{f: 'https://bso.org.nz/f/jx7n38/1_14_Coprosma_atropurpurea.jpg', c: ''},
{f: 'https://bso.org.nz/f/b8mnoq/1_15_Sporophytes.jpg', c: ''},
{f: 'https://bso.org.nz/f/oxz4nq/1_16_Snow_Bank_Celmisia.jpg', c: ''},
{f: 'https://bso.org.nz/f/gqom4x/1_17_Leucopogon_fraseri.jpg', c: 'Leucopogon fraseri - A small spiky plant with pretty star shaped flowers, common in Central Otago.'},
{f: 'https://bso.org.nz/f/lq2pk8/1_18_Ourisia_macrophylla_ssp_macrophylla_Taranaki.jpg', c: 'Ourisia macrophylla ssp. macrophylla, Taranaki - A large showy plant decorating the roadsides of Egmont National Park.'},
{f: 'https://bso.org.nz/f/4q1mrq/1_19_Raoulia_subulata.jpg', c: 'Raoulia subulata - A vivid green cushion growing in alpine seepages above 1900 m in the Harris Mountains.'},
{f: 'https://bso.org.nz/f/n8wdmx/1_20_Myosotis_glabrescens_and_friend.jpg', c: 'Myosotis glabrescens with friend - A new population of this species discovered in the Harris Mountains.'},
{f: 'https://bso.org.nz/f/bqeyv8/1_21_Life_amidst_the_litter.jpg', c: 'Life amidst the litter - Birch bolete enjoying Autumn sun, surrounded by fallen leaves'},
{f: 'https://bso.org.nz/f/eqgkvx/1_22_Im_hungry.jpg', c: `I'm hungry! - Pittosporum cornifolium seeds, presented in a jaw-like capsule`},
{f: 'https://bso.org.nz/f/exyvmx/1_23_Seaside_Blechnum.jpg', c: 'Seaside Blechnum - Coastal Blechnum banksii flecked with sand and salt at Akatore'},
{f: 'https://bso.org.nz/f/rxrgg8/1_24_Weeping_broom.jpg', c: ''},
{f: 'https://bso.org.nz/f/vxk13q/1_25_Gentianella_saxicola.jpg', c: ' Gentianella saxicola explosion -  Bluff/Motupohue.'},
{f: 'https://bso.org.nz/f/mxjmrx/1_26_Rhopalostylus_sapida_seed_pod.jpg', c: ' Rhopalostylus sapida seed pod – unrealised potential -  Kahurangi National Park.'},
{f: 'https://bso.org.nz/f/d8dg38/1_27_Dublin_Bay.jpeg', c: `Rosa ‘Dublin Bay’ - The glory of lockdown`},
{f: 'https://bso.org.nz/f/e89e7x/1_28_Sorbus.jpeg', c: 'Sorbus aucuparia - The large berries of this white variety defy the wind even after the leaves have gone'},
{f: 'https://bso.org.nz/f/bxvjvx/1_29_Dahlia.jpeg', c: `Dahlia 'Purple Gem' - Despised by many, but I love  how they fill my garden with a burst of colour dahlias in autumn.`},
{f: 'https://bso.org.nz/f/d84wzq/1_30_Schizostylis.jpeg', c: 'Cross-fertilisation - Red Schizostylis coccinea  often crosses with the pink variety in my garden'},
{f: 'https://bso.org.nz/f/p8lmbq/1_31_Pseudocyphellaria_glabra.jpeg', c: 'Christmas garland – Pseudocyphellaria glabra - In the beech forest near Borland Saddle this Pseudocyphellaria glabra with its coloured fruiting bodies and highlights of lacy white Leifidium tenerum looked particularly festive.'},
{f: 'https://bso.org.nz/f/v85wz8/1_32_Cladonia_carneola_Mt_Burns.jpeg', c: 'Alpine Golf – Cladonia carneola - This alpine pixie cup lichen, Cladonia carneola, shelters in a rocky crevice on the windswept slopes of Mt Burns, Fiordland'},
{f: 'https://bso.org.nz/f/w8pmo8/1_33_Graphis_librata.jpg', c: 'Lichen Hieroglyphics - Graphis librata - The graphic library of script lichens, or graphids, contains several genera with elongated and convoluted lirellae (fruiting bodies). The diversity increases towards the equator and this specimen was found in Northland'},
{f: 'https://bso.org.nz/f/1833n8/1_34_Coral_fungi.jpg', c: 'Ramaria samuelsii - Coral Fungus'},
{f: 'https://bso.org.nz/f/k8nzk8/1_35_Raoulia_australis.jpg', c: 'Raoulia australis - Close Cover'},
{f: 'https://bso.org.nz/f/lqbzoq/1_36_A_Grifola_fungus_blooming_from_a_fallen_tree_at_Woodhaugh_Gardens.jpg', c: 'Fungal bloom - A Grifola fungus blooming from a fallen tree at Woodhaugh Gardens'},
{f: 'https://bso.org.nz/f/4862yx/1_37_A_native_morel_Morchella_species_at_Tangoio_Falls_Hawkes_Bay.jpg', c: `A tasty morsel - A native morel (Morchella species) at Tangoio Falls, Hawke’s Bay`},
{f: 'https://bso.org.nz/f/jx7p3x/1_38_Bright_flowers_of_an_otherwise_well_camouflaged_Haastia_sinclairii_var_sinclairii_at_Lathrop_Saddle_Hokitika.jpg', c: 'Hokitika Haastia - Bright flowers of an otherwise well camouflaged Haastia sinclairii var. sinclairii at Lathrop Saddle, Hokitika'},
{f: 'https://bso.org.nz/f/b8mmo8/2_1_Borland_Saddle_Ridge.jpg', c: 'Borland Saddle Ridge - Snow tussock & tarn, December 2019'},
{f: 'https://bso.org.nz/f/oxzvnq/2_2_Natures_womb.jpeg', c: `Nature's womb - Seedlings of black beech Fuscospora solandri nestling in a knot hole -  Borland Saddle, Fiordland`},
{f: 'https://bso.org.nz/f/gqo34q/2_3_Stranglehold.jpeg', c: 'Stranglehold - Freycinetia banksii enveloping trunk of host tree - Abel Tasman National Park'},
{f: 'https://bso.org.nz/f/lq2okx/2_4_Radiance_in_vines.jpeg', c: 'Radiance in vines - Lianes reaching for the canopy - Tuapeka West'},
{f: 'https://bso.org.nz/f/n8wpmx/2_5_Pebble_Garden.jpg', c: 'Pebble Garden - Leptinella goyenii is found growing in one of the most extreme alpine environments in New Zealand, the summit of the Old Woman Range at 1600 metres.'},
{f: 'https://bso.org.nz/f/bqe6vx/2_6_Alpine_Tarns.jpg', c: ''},
{f: 'https://bso.org.nz/f/eqg6v8/2_7_Redheads_party.jpg', c: ''},
{f: 'https://bso.org.nz/f/exywm8/2_8_Alien_convention.jpg', c: ''},
{f: 'https://bso.org.nz/f/rxr7g8/2_9_Watch_where_you_walk_1.jpg', c: ''},
{f: 'https://bso.org.nz/f/bqe66x/2_10_Watch_where_you_walk_2.jpg', c: ''},
{f: 'https://bso.org.nz/f/eqg6e8/2_11_Moonrise.jpg', c: ''},
{f: 'https://bso.org.nz/f/exywe8/2_12_Day_at_the_beach.jpg', c: ''},
{f: 'https://bso.org.nz/f/rxr7j8/2_13_Blasted_Bones.jpg', c: 'Blasted Manuka bones - Rakiura. When I see this photograph, it transports me straight back to Rakiura/Stewart Island; the mud, the ruthless wind and cold, the loneliness; and moments of unexpected, naked beauty. It also reminds me of a cave drawing of an animal, and perhaps a more comical version of the Uffington Chalk Horse.'},
{f: 'https://bso.org.nz/f/vxk348/2_14_Tenacious_totara.jpg', c: ''},
{f: 'https://bso.org.nz/f/mxj3yq/2_15_Placopsis.jpeg', c: 'Plethora of Placopsis - At least four species of Placopsis decorate the landscape of this moist rock beside the Borland Saddle road. Placopsis perrugosa, P. illita, P. polycarpa and P. subgelida all have nodules of cyanobacteria (cephalodia) characteristic of this genus. In this picture some of the cephalodia are notably pink, prominent and brain shaped.'},
{f: 'https://bso.org.nz/f/d8d2bq/2_16_Size_rules.jpg', c: 'Donatia novae zelandiae and Celmisia sessiliflora - Size Rules'},
{f: 'https://bso.org.nz/f/e89gmq/2_17_Above_the_trees_in_Kahurangi_National_Park.jpg', c: 'Kahurangi vista - Above the trees in Kahurangi National Park'},
{f: 'https://bso.org.nz/f/bxv5o8/3_1_Takitimu_camp.jpg', c: ''},
{f: 'https://bso.org.nz/f/d846bx/3_2_Fergus_photographing_Tane_Mahuta.jpg', c: 'Fergus photographing Tane Mahuta - Fergus using his botanical skills to get the perfect shot of Tane Mahuta.'},
{f: 'https://bso.org.nz/f/p8l3y8/3_3_Wet_Land_Self_portrait.jpg', c: `Wet Land/Self portrait - Near Okarito Lagoon, West Coast. I’m forever trying to capture the colour of saltmarsh meadows and saline wetlands; in particular the effect, in concert, of great swathes of oioi. This has become an unexpected favourite, though hardly any oioi in it, and though not a good photo. I haven’t changed the colour, I swear!`},
{f: 'https://bso.org.nz/f/v857mx/3_4_Child_entranced.jpg', c: 'Child entranced -  A tenuous link, I admit. Taken at an outdoor art event in Auckland (Art in the Dark, in Western Park). Many displays were far more complex and sophisticated than this one, but by comparison this was totally charming and totally effective: a single light attached to a small tree fern, amidst shimmering sedges, and attracting tiny bugs in multitudes. The kids thought it was magical.'},
{f: 'https://bso.org.nz/f/w8p4e8/3_5_Captivated_by_turf_plants.jpg', c: ''},
{f: 'https://bso.org.nz/f/183o48/3_6_Urban_Xanthoparmelia_scabrosa.jpeg', c: 'Car logo – Xanthoparmelia scabrosa - Discerning people in Dunedin, and elsewhere, are proud to have their car decorated with this ubiquitous urban lichen, whose common name is Sexy Pavement Lichen.'},
{f: 'https://bso.org.nz/f/k8n62q/3_7_Exploring_the_lush_forests_near_Teer_Plateau_South_Westland.jpg', c: 'Off the beaten path - Exploring the lush forests near Teer Plateau, South Westland'},
]"></v-photo-vote>
</div>
@endsection
