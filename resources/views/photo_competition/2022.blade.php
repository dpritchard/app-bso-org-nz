@extends('layouts.main')

@section('content')
<div class="mb-5">
	<h1>2022 Photo Competition</h1>
	<!-- Notes for 2022. Need to streamline this: Short Title. Author. Caption (optional). Set data in php and pass to JS. Need author to be supressed until voting finished.-->

	<p>Welcome to the 2022 BSO Photo Competition. This year we have received XX photos, from XX photographers, across the 3 categories.</p>

	<p>Our judges will decide the overall category winners and their decision will be announced on May XX at the AGM. However, we also have a <em>People’s Choice Award</em> which is up to you!</p>

	<h3>Voting Information</h3>
	<p>BSO members may vote for as many as three of their favourite photos (votes are not limited to one per category). You may browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites, from which you can select up to three photos to vote for.</p>
	<p>Note that this webpage does not record your votes directly - it simply helps you browse and select your favourites. Information on how to cast your vote via email will be displayed once you have selected at least one photo to vote for.</p>

<!-- 	
	<p>Welcome to the 2022 BSO Photo Competition. This year, we received XX photos, from XX photographers, across the 3 categories.</p>

	<p>Our judges announced the overall category winners on May XX 2022 at the AGM. At the same time we announced the <em>People’s Choice Award</em> chosen by BSO members. For the second time ever the members agreed with the judges!</p>

	<h3>Category Winner: Plant Portrait</h3>
	<figure class="figure">
		<img src="" class="figure-img img-fluid rounded" alt="">
		<figcaption class="figure-caption"></figcaption>
	</figure>

	<h3>Category Winner: Plants in the Landscape and <em>People’s Choice Award</em></h3>
	<figure class="figure">
		<img src="" class="figure-img img-fluid rounded" alt="">
		<figcaption class="figure-caption"></figcaption>
	</figure>

	<h3>Category Winner: Wetland Plants</h3>
	<figure class="figure">
		<img src="" class="figure-img img-fluid rounded" alt="">
		<figcaption class="figure-caption"></figcaption>
	</figure>


	<h3>Viewing Information</h3>
	<p>We set this page up for members choice voting but now you may now use it to browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites.</p>
 -->

</div>
<div class="d-flex align-items-center">
	<v-photo-vote
	v-bind:allow-votes="true"
    v-bind:categories="[
    	{code: 1, name: 'Plant Portrait', description: ''},
    	{code: 2, name: 'Plants in the Landscape', description: ''},
    	{code: 3, name: 'Wetland Plants', description: ''}
    ]"
    v-bind:images="[
{f: 'https://bso.org.nz/f/b8mw9q/1_1_fuchsia_excorticata.jpg', c: 'A beautiful Fuchsia obscured by an unknown plant.'},
{f: 'https://bso.org.nz/f/oxz29x/1_2_heavenly.jpg', c: 'A Cyathophorum bulbosum reaching for the light.'},
{f: 'https://bso.org.nz/f/gqoglx/1_3_chalice_for_fairies.jpg', c: 'Several Cladonia balancing water droplets.'},
{f: 'https://bso.org.nz/f/4q154x/1_4_dew_spirals.jpg', c: 'A cluster of dewy bryophytes in the early morning.'},
{f: 'https://bso.org.nz/f/n8w4dx/1_5_cushion_-shyness.jpg', c: 'Cushions of Grimmia sharing a stone wall.'},
{f: 'https://bso.org.nz/f/bqer6x/1_6_stop_for_a_sip.jpg', c: 'This ‘pixie cup’ Alpine Cladonia with its farinose soredia and red-rimmed Thallus grows along the bush track leading from the Cobb Valley to Peel Ridge'},
{f: 'https://bso.org.nz/f/eqgjeq/1_7_clingingtothecliff.jpeg', c: 'Olearia oporina on the edge of a cliff overlooking Puysegur Point, south western-most point of the South Island, 46 degrees South'},
{f: 'https://bso.org.nz/f/exy5e8/1_8_bumblingpollinator.jpeg', c: 'Olearea oporina flower attracting bumble bee pollinator, Preservation Inlet, Fiordland National Park'},
{f: 'https://bso.org.nz/f/rxrkjq/1_9_oohyuckaslimy.jpeg', c: 'Earthstar fungi (Geastrum vellutinum) surveying a vibrant blue slime mold. Tuapeka West.'},
{f: 'https://bso.org.nz/f/bqerrx/1_10_kidmenot.jpeg', c: 'Kidney fern/Raurenga (Hymenophyllum nephrophyllum) Chalky Inlet, Fiordland National Park.'},
{f: 'https://bso.org.nz/f/eqgjpq/1_11_shitake_yum.jpg', c: 'New Zealand shitake (Lentinula novae-zelandiae), on a rotting log under kanuka/beech forest. Tuapeka West, Otago'},
{f: 'https://bso.org.nz/f/exy5z8/1_12_coral_fungi.jpg', c: 'Ramaria'},
{f: 'https://bso.org.nz/f/rxrk6q/1_13_mason_bay.jpg', c: 'View to Ernest Islands Mason Bay Stewart Island'},
{f: 'https://bso.org.nz/f/vxk45q/1_14_manuka_flower.jpg', c: 'Leptospermum scoparium'},
{f: 'https://bso.org.nz/f/mxjv2x/1_15_lichen.jpg', c: 'Lichen'},
{f: 'https://bso.org.nz/f/d8dyp8/1_16_hymenophyllum_frankliniae.jpg', c: 'This filmy fern is abundant in the forests of Stewart Island'},
{f: 'https://bso.org.nz/f/e899r8/1_17_celmisia_clavata.jpg', c: 'Celmisia clavata, is a Stewart Island endemic and is found on the bleak uplands of these isolated herb moors'},
{f: 'https://bso.org.nz/f/bxvvwx/1_18_craspedia_lanata.jpg', c: 'Mt Bitterness, St Mary Range'},
{f: 'https://bso.org.nz/f/d84yl8/1_19_earina_autumnalis.jpg', c: 'Hapuka Estuary Reserve, South Westland'},
{f: 'https://bso.org.nz/f/p8llz8/1_20_harakeke_flowers.jpg', c: 'Bull Creek Reserve'},
{f: 'https://bso.org.nz/f/w8pvj8/2_1_tautuku_excursion_2022.jpg', c: 'Tautuku excursion 2022'},
{f: 'https://bso.org.nz/f/v85rnq/2_2_tautuku_plant_excursion_2022.jpg', c: 'Tautuku plant excursion 2022'},
{f: 'https://bso.org.nz/f/183p5q/2_3_pathway.jpeg', c: 'Classic Pohutukawa on the beach'},
{f: 'https://bso.org.nz/f/k8ndpx/2_4_a_rocky_start.jpeg', c: 'Plant community amongst the granite outcrops on Mackay Downs'},
{f: 'https://bso.org.nz/f/lqb9vx/2_5_usnea_punk.jpg', c: 'This alpine Usnea, sharing its rock with Rhizocarpon geographicum, protects itself from the bright Marlborough sun on Black Birch peak with a purple pigment, as if dipped in the hairdresser’s dyepot'},
{f: 'https://bso.org.nz/f/486blx/2_6_stop_take_care.jpg', c: 'The bright Trentepohlia cliff face by Split Rock seems to both warn and draw trampers on into this tricky space'},
{f: 'https://bso.org.nz/f/jx7b58/2_7_lone_sheep_on_black_birch_peak.jpg', c: 'The picture deceives, as the scree on Black Birch peak is covered with a veritable flock of sheep (Haastia pulvinaris)'},
{f: 'https://bso.org.nz/f/b8mjn8/2_8_a_nest_of_spiders.jpg', c: 'On D’Urville Island Corybas sp. abound on damp bush edges'},
{f: 'https://bso.org.nz/f/oxzjvq/2_9_prevailing_winds_puysegur_point.jpeg', c: 'Kanuka sculpted by the prevailing Westerly winds of the roaring forties. Preservation Inlet, Fiordland National Park.'},
{f: 'https://bso.org.nz/f/gqo93q/2_10_humid_halo.jpg', c: 'Lichens absorb many times their weight in water. This widens the window for photosynthesis, increases local humidity and reduces the risk of flooding. Rock wall, Dunedin.'},
{f: 'https://bso.org.nz/f/lq25gq/2_11_radiant_leaves.jpg', c: 'Cabbage trees/ tī kōuka (Cordyline australis) catch the evening light streaming over the Blue Mountains. Tuapeka West, Otago.'},
{f: 'https://bso.org.nz/f/4q1lz8/2_12_competitive_colonisation.jpg', c: 'Lichens jostling for space on a concrete wall. Diverse genera include Xanthoria, Xanthoparmelia, Physcia, Phaeophyscia, Parmotrema, Usnea, Polyozosia and Caloplaca.'},
{f: 'https://bso.org.nz/f/n8wylx/2_13_uv_id.jpg', c: 'Some lichens can convert UV light into visible light. Here the bluish glow of Lepra novaezelandiae distinguishes it from orange Pertusaria sorodes and unknown species show up.'},
{f: 'https://bso.org.nz/f/bqelrx/2_14_southern_rata.jpg', c: 'Metrsideros umbellale'},
{f: 'https://bso.org.nz/f/eqgppq/2_15_rakeahua_river.jpg', c: 'The riparian forest fringing the Rakeahua River is reflected in the water.'},
{f: 'https://bso.org.nz/f/exykz8/2_16_a_view_worth_the_blisters_2022.jpg', c: 'A beautiful sunset after a 21km walk and a 900m climb in Fiordland, on the Hump Ridge Track'},
{f: 'https://bso.org.nz/f/rxrl6x/2_17_bush_stream.jpg', c: 'Bull Creek Reserve'},
{f: 'https://bso.org.nz/f/mxjy2x/3_1_2022_tautuku_botanical_excursion.jpg', c: '2022 Tautuku botanical excursion'},
{f: 'https://bso.org.nz/f/vxkr58/3_2_tautuku_botanical_excursion_end_up_with_muddy_shoes.jpg', c: 'Tautuku botanical excursion end up with muddy shoes.'},
{f: 'https://bso.org.nz/f/d8d4p8/3_3_reflections.jpeg', c: 'Tataki wetlands'},
{f: 'https://bso.org.nz/f/e892rx/3_4_a_1000_acre_view.jpeg', c: 'Looking over the Empodisma wetlands towards the Haystack.'},
{f: 'https://bso.org.nz/f/bxvgwx/3_5_sundews.jpg', c: 'Among the bog plants fringing this stepped pool is the sundew Drosera arcturi'},
{f: 'https://bso.org.nz/f/d84zlq/3_6_utricularia_dichotoma.jpg', c: 'The tiny bladderwort, Utricularia dichotoma, abundant throughout this montane wetland and is noticeable only when it flowers'},
{f: 'https://bso.org.nz/f/p8lkzx/3_7_alpine_swamp.jpg', c: 'Mt Bitterness, St Mary Range'},
]"></v-photo-vote>
</div>
@endsection
