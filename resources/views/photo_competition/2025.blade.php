@extends('layouts.main')

@section('content')
<div class="mb-5">
	<h1>2025 Photo Competition</h1>
	<!-- Notes for 2026... Need to streamline this: Short Title. Author. Caption (optional). Set data in php and pass to JS. Supress author until voting finished.-->
<!--
	<p>Welcome to the 2025 BSO Photo Competition. This year we have received 48 photos, from 11 photographers, across the 3 categories.</p>

	<p>Our judges will decide the overall category winners and their decision will be announced on May 14 2025 at the AGM. However, we also have a <em>People’s Choice Award</em> which is up to you!</p>

	<h3>Voting Information</h3>
	<p>BSO members may vote for as many as three of their favourite photos (votes are not limited to one per category). You may browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites, from which you can select up to three photos to vote for.</p>
	<p>Note that this webpage does not record your votes directly - it simply helps you browse and select your favourites. Information on how to cast your vote via email will be displayed once you have selected at least one photo to vote for.</p>
 -->

	<p>Welcome to the 2026 BSO Photo Competition. This year, we received 48 photos, from 11 photographers, across the 3 categories.</p>

	<p>Our judges announced the overall category winners on May 14 2025 at the AGM. At the same time we announced the <em>People’s Choice Award</em> chosen by BSO members.</p>

	<h3>Category Winner: Plant Portrait</h3>
	<p>Also joint winner for the <em>People’s Choice Award</em></p>
	<figure class="figure">
		<img src="https://bso.org.nz/f/d849dx/1_4_dune_gentian_rakiura.jpg" class="figure-img img-fluid rounded" alt="">
		<figcaption class="figure-caption">Dune gentian, Rakiura by John Barkla.</figcaption>
	</figure>

	<h3>Category Winner: Plants in the Landscape</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/8lndwx/2_14_celmisa_in_st._marys.jpg" class="figure-img img-fluid rounded" alt="">
		<figcaption class="figure-caption"><i>Celmisia</i> in St. Marys by Rachael Baxter.</figcaption>
	</figure>


	<h3>Category Winner: Life Under the Lens</h3>
	<p>Also joint winner for the <em>People’s Choice Award</em></p>
	<figure class="figure">
		<img src="https://bso.org.nz/f/xj6k6q/3_8_fruiting_phyllosphere.jpg" class="figure-img img-fluid rounded" alt="">
		<figcaption class="figure-caption"><i>Hymenophyllum</i> species supporting life by Jo Sinclair.</figcaption>
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
    	{code: 3, name: 'Life Under the Lens', description: ''}
    ]"
    v-bind:images="[
{f: 'https://bso.org.nz/f/bxv9mq/1_1_pekepekekiore.jpeg', c: 'Edible icicle fungus, Hericium novae-zealandiae, growing on rotting Nothofagus.'},
{f: 'https://bso.org.nz/f/e89pwq/1_2_pixie_cup_fantasy.jpeg', c: 'Cladonia dreams on a decaying Pinus radiata stump.'},
{f: 'https://bso.org.nz/f/p8lzwx/1_3_uv_indicator_sunburst_lichen.jpeg', c: 'Xanthoria parietina makes an orange pigment, parietin, to protect the underlying green algae.'},
{f: 'https://bso.org.nz/f/d849dx/1_4_dune_gentian_rakiura.jpg', c: 'Dune gentian, Rakiura'},
{f: 'https://bso.org.nz/f/v85vwx/1_5_alpine_fluff_fiordland.jpg', c: 'Alpine fluff, Fiordland'},
{f: 'https://bso.org.nz/f/183dyq/1_6_gunnera_hamiltonii_rakiura.jpg', c: 'Gunnera hamiltonii, Rakiura'},
{f: 'https://bso.org.nz/f/w8pg48/1_7_clematis_paniculata.jpeg', c: 'Clematis paniculata'},
{f: 'https://bso.org.nz/f/k8n248/1_8_black_bolete.jpeg', c: 'Black bolete'},
{f: 'https://bso.org.nz/f/lqb4w8/1_9_pluteus_velutinornatus.jpeg', c: 'Pluteus velutinornatus'},
{f: 'https://bso.org.nz/f/4864kq/1_10_hanging_out_in_the_sun.jpg', c: 'Hounds tongue (Zealandia pustulata)'},
{f: 'https://bso.org.nz/f/jx7lbq/1_11_budding_tree_fuschia.jpg', c: 'Fuschsia excorticata (kōtukutuku) in the Port Hills, Christchurch'},
{f: 'https://bso.org.nz/f/b8mobx/1_12_sunbeams_across_gloxinia.jpg', c: 'Splashes of colour in the Manawatū Gorge '},
{f: 'https://bso.org.nz/f/oxz5mx/1_13_unfurling.jpg', c: 'Fern fronds in early spring, Manawatū'},
{f: 'https://bso.org.nz/f/gqoew8/1_14_celmisia.jpg', c: 'Protected'},
{f: 'https://bso.org.nz/f/lq2j38/1_15_in_a_twist.jpg', c: 'Adaptable'},
{f: 'https://bso.org.nz/f/4q1kbx/1_16_colourful_decline.jpg', c: 'Beautiful fungi on rotting log'},
{f: 'https://bso.org.nz/f/n8ww18/1_17_armillaria_limonea.jpg', c: 'A mass of fruiting caps of the saprophytic fungus Armilliaria limonea are emerging from a decaying log.'},
{f: 'https://bso.org.nz/f/bqep48/1_18_disphyma_australe.jpg', c: 'An ice plant (Disphyma australe) clings to existence in the littoral zone.'},
{f: 'https://bso.org.nz/f/893kw8/1_19_veronica_thomsonii.jpg', c: 'Veronica thomsonii'},
{f: 'https://bso.org.nz/f/xvylmx/1_20_veronica_hectorii.jpg', c: 'Veronica hectorii'},
{f: 'https://bso.org.nz/f/vxk9j8/1_21_stemonitopsis_typhinia.jpeg', c: 'Immature Stemonitopsis typhinia'},
{f: 'https://bso.org.nz/f/rxrr2x/1_22_developing_stemonitis_sp.jpg', c: 'Developing Stemonitis sp. in Woodhaugh Gardens'},
{f: 'https://bso.org.nz/f/mxjj6x/1_23_peraxilla_colensoi.jpg', c: 'Scarlets delight (Peraxilla colensoi)'},
{f: 'https://bso.org.nz/f/d8d6ex/2_1_bench_black_landscape.jpeg', c: 'Orange Teloschistes velifer glows in a lichen community sheltering between the slats of a garden seat.'},
{f: 'https://bso.org.nz/f/e891wq/2_2_candle_in_the_forest.jpeg', c: 'Yellow Chrysothrix, a leprose lichen made entirely of tiny vegetative granules, coats a dead sapling in a native beech forest. '},
{f: 'https://bso.org.nz/f/bxvdmx/2_3_lake_mackenzie_and_beyond_fiordland.jpg', c: 'Lake Mackenzie and beyond, Fiordland'},
{f: 'https://bso.org.nz/f/d84pd8/2_4_rocky_mountain_rakiura.jpg', c: 'Rocky Mountain, Rakiura'},
{f: 'https://bso.org.nz/f/p8l4wq/2_5_wormwoods.jpeg', c: 'Dead matai trunks decorated by boring insects'},
{f: 'https://bso.org.nz/f/v85nw8/2_6_kowhai_rejuvenation.jpeg', c: 'New foliage in autumn after a blitz by kowhai moth caterpillars (Uresiphita polygonalis maorialis)'},
{f: 'https://bso.org.nz/f/w8p748/2_7_salty_landscapes_1.jpg', c: 'Puccinellia raroflorens poking through the salt pan.'},
{f: 'https://bso.org.nz/f/183ly8/2_8_salty_landscapes_2.jpg', c: 'The back and forth between land and sea.'},
{f: 'https://bso.org.nz/f/lqbpw8/2_9_sunny_highlights.jpg', c: 'Morning sun through the lake edge forest '},
{f: 'https://bso.org.nz/f/k8n34q/2_10_manuka_by_the_creek.jpg', c: 'Emerald pools of Te Hoiere'},
{f: 'https://bso.org.nz/f/4866k8/2_11_sticking_out.jpg', c: 'Alpine plants on Mount Lyndon, Canterbury'},
{f: 'https://bso.org.nz/f/jx7mbx/2_12_rain_forest.jpg', c: 'A diverse assemblage of plants thrives in a damp corner of a South Otago forest.'},
{f: 'https://bso.org.nz/f/841jd8/2_13_hope.jpg', c: 'Natural regen of Podocarpus laetus seedling in front of ancient tōtara stump in Waikerikeri Conservation area '},
{f: 'https://bso.org.nz/f/8lndwx/2_14_celmisa_in_st._marys.jpg', c: 'Celmisia in St. Marys'},
{f: 'https://bso.org.nz/f/gqobw8/2_15_a_rock_s_view.jpg', c: 'Hump ridge view'},
{f: 'https://bso.org.nz/f/lq2v38/2_16_a_frame_for_a_tarn.jpg', c: 'Tarn on hump ridge track'},
{f: 'https://bso.org.nz/f/n8wv1x/3_1_olearia_laxiflora.jpg', c: 'Flower detail'},
{f: 'https://bso.org.nz/f/4q1dbq/3_2_harlequin_gecko.jpg', c: 'Chilling, soaking up some heat'},
{f: 'https://bso.org.nz/f/bqem48/3_3_birds_nest_fungi.jpg', c: 'Maturation of the gasteroid fruiting bodies of the fungus Nidula niveotormentosa'},
{f: 'https://bso.org.nz/f/eqg1zq/3_4_moss_fungi.jpg', c: 'Two tiny fungi emerge from a bed of moss in a beech forest.'},
{f: 'https://bso.org.nz/f/exyplx/3_5_grimmia_pulvinata_a_network_of_life.jpg', c: 'Grimmia pulvinata (Hedw.) Sm. & Sowerby under the fluorescence microscope (I3 blue excitation filter). '},
{f: 'https://bso.org.nz/f/rxr22q/3_6_let_there_be_red_light.jpg', c: 'Racomitrium didymum (Mont.) Lentz under the fluorescence microscope (N2.1 green excitation filter).'},
{f: 'https://bso.org.nz/f/xknjjx/3_7_cribraria_sp..jpg', c: 'Cribraria sp. under 40x lens'},
{f: 'https://bso.org.nz/f/xj6k6q/3_8_fruiting_phyllosphere.jpg', c: 'Hymenophyllum species supporting life'},
{f: 'https://bso.org.nz/f/8d1le8/3_9_moss_lens.jpg', c: 'Lenses are made of water'},
	]"></v-photo-vote>
</div>
@endsection
