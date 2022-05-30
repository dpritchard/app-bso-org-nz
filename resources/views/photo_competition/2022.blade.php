@extends('layouts.main')

@section('content')
<div class="mb-5">
	<h1>2022 Photo Competition</h1>
	<!-- Notes for 2023... Need to streamline this: Short Title. Author. Caption (optional). Set data in php and pass to JS. Supress author until voting finished.-->
<!-- 
	<p>Welcome to the 2022 BSO Photo Competition. This year we have received 44 photos, from 10 photographers, across the 3 categories.</p>

	<p>Our judges will decide the overall category winners and their decision will be announced on May 11 2022 at the AGM. However, we also have a <em>People’s Choice Award</em> which is up to you!</p>

	<h3>Voting Information</h3>
	<p>BSO members may vote for as many as three of their favourite photos (votes are not limited to one per category). You may browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites, from which you can select up to three photos to vote for.</p>
	<p>Note that this webpage does not record your votes directly - it simply helps you browse and select your favourites. Information on how to cast your vote via email will be displayed once you have selected at least one photo to vote for.</p>
 -->
	
	<p>Welcome to the 2022 BSO Photo Competition. This year, we received 44 photos, from 10 photographers, across the 3 categories.</p>

	<p>Our judges announced the overall category winners on May 11 2022 at the AGM. At the same time we announced the <em>People’s Choice Award</em> chosen by BSO members. For the first time ever, we had a four-way tie for the <em>People’s Choice Award</em></p>

	<h3>Category Winner: Plant Portrait and <em>People’s Choice Award</em> (1 of 4)</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/eqgjeq/1_7_clingingtothecliff.jpeg" class="figure-img img-fluid rounded" alt="Clinging to the cliff by John Knight">
		<figcaption class="figure-caption">Clinging to the cliff by John Knight. Olearia oporina on the edge of a cliff overlooking Puysegur Point, south western-most point of the South Island, 46 degrees South.</figcaption>
	</figure>

	<h3>Category Winner: Plants in the Landscape</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/486blx/2_6_stop_take_care.jpg" class="figure-img img-fluid rounded" alt="Stop! Take Care! by Alyth Grant">
		<figcaption class="figure-caption">Stop! Take Care! by Alyth Grant. The bright Trentepohlia cliff face by Split Rock seems to both warn and draw trampers on into this tricky space.</figcaption>
	</figure>

	<h3>Category Winner: Wetland Plants</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/d8d4p8/3_3_reflections.jpeg" class="figure-img img-fluid rounded" alt="Reflections by Gretchen Brownstein">
		<figcaption class="figure-caption">Reflections by Gretchen Brownstein. Tataki wetlands.</figcaption>
	</figure>

	<h3><em>People’s Choice Award</em> 2 of 4</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/rxrl6x/2_17_bush_stream.jpg" class="figure-img img-fluid rounded" alt="Bush stream by Warren Jowett">
		<figcaption class="figure-caption">Bush stream by Warren Jowett. Bull Creek Reserve</figcaption>
	</figure>
	<h3><em>People’s Choice Award</em> 3 of 4</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/eqgppq/2_15_rakeahua_river.jpg" class="figure-img img-fluid rounded" alt="Reflections, Rakeahua River by David Lyttle">
		<figcaption class="figure-caption">Reflections, Rakeahua River by David Lyttle. The riparian forest fringing the Rakeahua River is reflected in the water.</figcaption>
	</figure>
	<h3><em>People’s Choice Award</em> 4 of 4</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/bqerrx/1_10_kidmenot.jpeg" class="figure-img img-fluid rounded" alt="Kid me not by John Knight">
		<figcaption class="figure-caption">Kid me not by John Knight. Kidney fern/Raurenga (<em>Hymenophyllum nephrophyllum</em>) Chalky Inlet, Fiordland National Park.</figcaption>
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
    	{code: 3, name: 'Wetland Plants', description: ''}
    ]"
    v-bind:images="[
{f: 'https://bso.org.nz/f/v85bn8/1_1_fuchsia_excorticata.jpg', c: 'Fuchsia excorticata: A beautiful Fuchsia obscured by an unknown plant.'},
{f: 'https://bso.org.nz/f/oxz29x/1_2_heavenly.jpg', c: 'Heavenly: A Cyathophorum bulbosum reaching for the light.'},
{f: 'https://bso.org.nz/f/gqoglx/1_3_chalice_for_fairies.jpg', c: 'Chalice of fairies: Several Cladonia balancing water droplets.'},
{f: 'https://bso.org.nz/f/4q154x/1_4_dew_spirals.jpg', c: 'Dew spirals: A cluster of dewy bryophytes in the early morning.'},
{f: 'https://bso.org.nz/f/n8w4dx/1_5_cushion_-shyness.jpg', c: 'Cushion shyness: Cushions of Grimmia sharing a stone wall.'},
{f: 'https://bso.org.nz/f/bqer6x/1_6_stop_for_a_sip.jpg', c: 'Stop for a Sip!: This ‘pixie cup’ Alpine Cladonia with its farinose soredia and red-rimmed Thallus grows along the bush track leading from the Cobb Valley to Peel Ridge'},
{f: 'https://bso.org.nz/f/eqgjeq/1_7_clingingtothecliff.jpeg', c: 'Clinging to the cliff: Olearia oporina on the edge of a cliff overlooking Puysegur Point, south western-most point of the South Island, 46 degrees South'},
{f: 'https://bso.org.nz/f/exy5e8/1_8_bumblingpollinator.jpeg', c: 'Bumbling pollinator: Olearia oporina flower attracting bumble bee pollinator, Preservation Inlet, Fiordland National Park'},
{f: 'https://bso.org.nz/f/rxrkjq/1_9_oohyuckaslimy.jpeg', c: '“Ooh yuck - a slimy!”: Earthstar fungi (Geastrum vellutinum) surveying a vibrant blue slime mold. Tuapeka West.'},
{f: 'https://bso.org.nz/f/bqerrx/1_10_kidmenot.jpeg', c: 'Kid me not: Kidney fern/Raurenga (Hymenophyllum nephrophyllum) Chalky Inlet, Fiordland National Park.'},
{f: 'https://bso.org.nz/f/eqgjpq/1_11_shitake_yum.jpg', c: 'Shitake – yum!: New Zealand shitake (Lentinula novae-zelandiae), on a rotting log under kanuka/beech forest. Tuapeka West, Otago'},
{f: 'https://bso.org.nz/f/exy5z8/1_12_coral_fungi.jpg', c: 'Coral Fungi  : Ramaria'},
{f: 'https://bso.org.nz/f/rxrk6q/1_13_mason_bay.jpg', c: 'Mason Bay : View to Ernest Islands Mason Bay Stewart Island'},
{f: 'https://bso.org.nz/f/vxk45q/1_14_manuka_flower.jpg', c: 'Manuka : Leptospermum scoparium'},
{f: 'https://bso.org.nz/f/mxjv2x/1_15_lichen.jpg', c: 'Lichen'},
{f: 'https://bso.org.nz/f/d8dyp8/1_16_hymenophyllum_frankliniae.jpg', c: 'Hymenophyllum franklinae: This filmy fern is abundant in the forests of Stewart Island'},
{f: 'https://bso.org.nz/f/e899r8/1_17_celmisia_clavata.jpg', c: 'Celmisia clavata: Celmisia clavata is a Stewart Island endemic and is found on the bleak uplands of these isolated herb moors'},
{f: 'https://bso.org.nz/f/bxvvwx/1_18_craspedia_lanata.jpg', c: 'Craspedia lanata: Mt Bitterness, St Mary Range'},
{f: 'https://bso.org.nz/f/d84yl8/1_19_earina_autumnalis.jpg', c: 'Earina autumnalis: Hapuka Estuary Reserve, South Westland'},
{f: 'https://bso.org.nz/f/p8llz8/1_20_harakeke_flowers.jpg', c: 'Harakeke flowers: Bull Creek Reserve'},
{f: 'https://bso.org.nz/f/w8pvj8/2_1_tautuku_excursion_2022.jpg', c: 'Tautuku Excursion 2022'},
{f: 'https://bso.org.nz/f/v85rnq/2_2_tautuku_plant_excursion_2022.jpg', c: 'Tautuku Plant Excursion 2022'},
{f: 'https://bso.org.nz/f/183p5q/2_3_pathway.jpeg', c: 'Pathway: Classic Pohutukawa on the beach'},
{f: 'https://bso.org.nz/f/k8ndpx/2_4_a_rocky_start.jpeg', c: 'A rocky start: Plant community amongst the granite outcrops on Mackay Downs'},
{f: 'https://bso.org.nz/f/lqb9vx/2_5_usnea_punk.jpg', c: 'Usnea Punk: This alpine Usnea, sharing its rock with Rhizocarpon geographicum, protects itself from the bright Marlborough sun on Black Birch peak with a purple pigment, as if dipped in the hairdresser’s dyepot'},
{f: 'https://bso.org.nz/f/486blx/2_6_stop_take_care.jpg', c: 'Stop! Take Care!: The bright Trentepohlia cliff face by Split Rock seems to both warn and draw trampers on into this tricky space'},
{f: 'https://bso.org.nz/f/jx7b58/2_7_lone_sheep_on_black_birch_peak.jpg', c: 'Lone Sheep on Black Birch peak: The picture deceives, as the scree on Black Birch peak is covered with a veritable flock of sheep (Haastia pulvinaris)'},
{f: 'https://bso.org.nz/f/b8mjn8/2_8_a_nest_of_spiders.jpg', c: 'A Nest of Spiders: On D’Urville Island Corybas sp. abound on damp bush edges'},
{f: 'https://bso.org.nz/f/oxzjvq/2_9_prevailing_winds_puysegur_point.jpeg', c: 'Prevailing winds Puysegur Point: Kanuka sculpted by the prevailing Westerly winds of the roaring forties. Preservation Inlet, Fiordland National Park.'},
{f: 'https://bso.org.nz/f/gqo93q/2_10_humid_halo.jpg', c: 'Humid halo: Lichens absorb many times their weight in water. This widens the window for photosynthesis, increases local humidity and reduces the risk of flooding. Rock wall, Dunedin.'},
{f: 'https://bso.org.nz/f/lq25gq/2_11_radiant_leaves.jpg', c: 'Radiant leaves: Cabbage trees/ tī kōuka (Cordyline australis) catch the evening light streaming over the Blue Mountains. Tuapeka West, Otago.'},
{f: 'https://bso.org.nz/f/4q1lz8/2_12_competitive_colonisation.jpg', c: 'Competitive colonisation: Lichens jostling for space on a concrete wall. Diverse genera include Xanthoria, Xanthoparmelia, Physcia, Phaeophyscia, Parmotrema, Usnea, Polyozosia and Caloplaca.'},
{f: 'https://bso.org.nz/f/n8wylx/2_13_uv_id.jpg', c: 'UV id.: Some lichens can convert UV light into visible light. Here the bluish glow of Lepra novaezelandiae distinguishes it from orange Pertusaria sorodes and unknown species show up.'},
{f: 'https://bso.org.nz/f/bqelrx/2_14_southern_rata.jpg', c: 'Rata: Metrosideros umbellata'},
{f: 'https://bso.org.nz/f/eqgppq/2_15_rakeahua_river.jpg', c: 'Reflections, Rakeahua River: The riparian forest fringing the Rakeahua River is reflected in the water.'},
{f: 'https://bso.org.nz/f/exykz8/2_16_a_view_worth_the_blisters_2022.jpg', c: 'A View Worth the Blisters: A beautiful sunset after a 21km walk and a 900m climb in Fiordland, on the Hump Ridge Track'},
{f: 'https://bso.org.nz/f/rxrl6x/2_17_bush_stream.jpg', c: 'Bush stream: Bull Creek Reserve'},
{f: 'https://bso.org.nz/f/mxjy2x/3_1_2022_tautuku_botanical_excursion.jpg', c: '2022 Tautuku Botanical Excursion'},
{f: 'https://bso.org.nz/f/vxkr58/3_2_tautuku_botanical_excursion_end_up_with_muddy_shoes.jpg', c: 'Tautuku Botanical Excursion ends up with muddy shoes'},
{f: 'https://bso.org.nz/f/d8d4p8/3_3_reflections.jpeg', c: 'Reflections: Tataki wetlands'},
{f: 'https://bso.org.nz/f/e892rx/3_4_a_1000_acre_view.jpeg', c: 'A 1000-acre view: Looking over the Empodisma wetlands towards the Haystack.'},
{f: 'https://bso.org.nz/f/bxvgwx/3_5_sundews.jpg', c: 'Sundews: Among the bog plants fringing this stepped pool is the sundew Drosera arcturi'},
{f: 'https://bso.org.nz/f/d84zlq/3_6_utricularia_dichotoma.jpg', c: 'Utricularia: The tiny bladderwort, Utricularia dichotoma, abundant throughout this montane wetland and is noticeable only when it flowers'},
{f: 'https://bso.org.nz/f/p8lkzx/3_7_alpine_swamp.jpg', c: 'Alpine swamp: Mt Bitterness, St Mary Range'}
	]"></v-photo-vote>
</div>
@endsection
