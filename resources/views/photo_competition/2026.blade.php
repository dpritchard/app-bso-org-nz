@extends('layouts.main')

@section('content')
<div class="mb-5">
	<h1>2026 Photo Competition</h1>
	<!-- Notes for 2027... Need to streamline this: Short Title. Author. Caption (optional). Set data in php and pass to JS. Supress author until voting finished.-->
<!--

	<p>Welcome to the 2026 BSO Photo Competition. This year we have received 68 photos, from 16 photographers, across the 3 categories.</p>

	<p>Our judges will decide the overall category winners and their decision will be announced on June 10 2026 at the AGM. However, we also have a <em>People’s Choice Award</em> which is up to you!</p>

	<h3>Voting Information</h3>
	<p>BSO members may vote for as many as three of their favourite photos (votes are not limited to one per category). You may browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites, from which you can select up to three photos to vote for.</p>
	<p>Note that this webpage does not record your votes directly - it simply helps you browse and select your favourites. Information on how to cast your vote via email will be displayed once you have selected at least one photo to vote for.</p>

 -->

	<p>Welcome to the 2026 BSO Photo Competition. This year, we received 68 photos, from 16 photographers, across the 3 categories.</p>

	<p>Our judges announced the overall category winners on June 10 2026 at the AGM. At the same time we announced the <em>People’s Choice Award</em> chosen by BSO members. This year we had a tie for the <em>People’s Choice Award</em>.</p>

	<h3>Category Winner: Plant Portrait</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/8d11n8/1_15_double_star_stinkhorns.jpg" class="figure-img img-fluid rounded" alt="Double Star Stinkhorns">
		<figcaption class="figure-caption"><em>Double Star Stinkhorns</em> by Lily Donahue. Devil’s fingers fungus embracing off the track at Cobb Reservoir in Kahurangi National Park.</figcaption>
	</figure>

	<h3>Category Winner: Plants in the Landscape</h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/86nvdx/2_19_theres_gold_in_them_thar_hills.jpg" class="figure-img img-fluid rounded" alt="Theres gold in them thar hills">
		<figcaption class="figure-caption"><em>There's gold in them thar hills</em> by Rach Baxter. Old Man Range.</figcaption>
	</figure>

	<h3>Category Winner: Pest Plant Pics</h3>
	<p></p>
	<figure class="figure">
		<img src="https://bso.org.nz/f/xvy75x/3_6_riparian_beauty.jpg" class="figure-img img-fluid rounded" alt="Riparian beauty">
		<figcaption class="figure-caption"><em>Riparian beauty</em> by John Barkla. Weed or not, montbretia add colour to the sombre streamside.</figcaption>
	</figure>

	<h3><em>People’s Choice Award (1/2)</em></h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/8355px/1_22_resilient_leatherwood.jpg" class="figure-img img-fluid rounded" alt="Resilient leatherwood">
		<figcaption class="figure-caption"><em>Resilient leatherwood</em> by John Barkla. Tough leatherwood (<em>Macrolearia colensoi</em>) stands defiant on Rakiura/Stewart Island's Tin Range.</figcaption>
	</figure>

	<h3><em>People’s Choice Award (2/2)</em></h3>
	<figure class="figure">
		<img src="https://bso.org.nz/f/8ml9rx/2_14_redwoods_in_fog.jpg" class="figure-img img-fluid rounded" alt="Redwoods in fog">
		<figcaption class="figure-caption"><em>Redwoods in Fog</em> by John Barkla. Crowns of giant redwoods disappear into the thickening fog.</figcaption>
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
    	{code: 3, name: 'Pest Plant Pics', description: ''}
    ]"
    v-bind:images="[
{f: 'https://bso.org.nz/f/qor4wq/1_1_sundew_drosera_spatulata.jpg', c: 'Glowing amongst pigmy plants on a barren ridge of the Denniston plateau, this Sundew attracts human and insect alike'},
{f: 'https://bso.org.nz/f/q2k13q/1_2_umbrella_moss_hypopterygium_sp.jpg', c: 'Early December and time to reproduce. All along the track the carpet of moss displayed its red hooded sporangia'},
{f: 'https://bso.org.nz/f/q1j1bq/1_3_pagoda_fungus_podoserpula_sp.jpg', c: 'Building in progress: new subdivisions of the fungus ascend the tree in the coastal Nikau forest'},
{f: 'https://bso.org.nz/f/8w5r18/1_4_nikau_rhopalostylis_sapida.jpg', c: 'The bright fruit of the Nikau glowing in the bush promises bounty to Māori and bird alike'},
{f: 'https://bso.org.nz/f/qe254q/1_5_growing_with_the_flow.jpg', c: 'Potamogeton cheesemanii, forms an interesting pattern on the surface of the water in a backwater pool, Tasman River bed'},
{f: 'https://bso.org.nz/f/qg2lzx/1_6_the_bear_cortinarius_ursus.jpg', c: 'The mycorrhizal fungus Cortinarius ursus is surrounded by tiny bryophytes and filmy ferns on the floor of the beech forest where it grows'},
{f: 'https://bso.org.nz/f/xyd3lx/1_7_knights_delight.jpg', c: 'Apothecia cups of Notoparmelia subtestacea on mountain beech bark'},
{f: 'https://bso.org.nz/f/xrm928/1_8_a_flash_in_the_pan.jpg', c: 'Nationally critical herb Ceratocephala pungens puts in a brief appearence in spring before summer sets in'},
{f: 'https://bso.org.nz/f/qe225q/1_9_hypogymnia_subphysodes_sculpture.jpg', c: 'Hypogymnia subphysodes sculpture'},
{f: 'https://bso.org.nz/f/qg222x/1_10_trentepohlia_filaments.jpg', c: 'Free-living Trentepohlia filaments'},
{f: 'https://bso.org.nz/f/xyddrx/1_11_celmisia_on_the_rocks.jpg', c: 'Celmisia on the rocks'},
{f: 'https://bso.org.nz/f/xrmmd8/1_12_full_nest_lower_hutt.jpg', c: 'Full nest, Lower Hutt'},
{f: 'https://bso.org.nz/f/xknnex/1_13_drosera_spatulata_west_coast.jpg', c: 'Drosera spatulata, West Coast'},
{f: 'https://bso.org.nz/f/xj665q/1_14_kotukutuku_bloom_west_coast.jpg', c: 'Kōtukutuku bloom, West Coast'},
{f: 'https://bso.org.nz/f/8d11n8/1_15_double_star_stinkhorns.jpg', c: 'Devil’s fingers fungus embracing off the track at Cobb Reservoir in Kahurangi National Park'},
{f: 'https://bso.org.nz/f/xvyy5x/1_16_a_cascade_of_spotty_mushrooms.jpg', c: 'A cascade of spotty mushrooms'},
{f: 'https://bso.org.nz/f/8933e8/1_17_coming_into_view.jpg', c: 'Tiny white Mycena under the land lens'},
{f: 'https://bso.org.nz/f/8411r8/1_18_hairy_wobbly_brackets.jpg', c: 'Hairy wobbly brackets'},
{f: 'https://bso.org.nz/f/8lnn9x/1_19_water_fern.jpg', c: 'Water fern, Histiopteris incisa, living up to its name, covered in glittering water droplets'},
{f: 'https://bso.org.nz/f/85eel8/1_20_microscopic_moss.jpg', c: 'A close-up of Camptochaete arbuscula moss, showing its beautiful jewel-like leaves'},
{f: 'https://bso.org.nz/f/8pppy8/1_21_leafy_liverwort.jpg', c: 'A close-up of leafy liverwort Plagiochila stephensoniana, showing its beautiful texture and form'},
{f: 'https://bso.org.nz/f/8355px/1_22_resilient_leatherwood.jpg', c: 'Tough leatherwood (Macrolearia colensoi) stands defiant on Rakiura/Stewart Island’s Tin Range'},
{f: 'https://bso.org.nz/f/8nllbq/1_23_behind_the_barricade.jpg', c: 'A ragged porcupine shrub seeks protection behind the remains of a forest giant'},
{f: 'https://bso.org.nz/f/qbjjg8/1_24_gliophorus_graminicolor.jpg', c: 'A species of agaric fungus in the family Hygrophoraceae '},
{f: 'https://bso.org.nz/f/86nndx/1_25_gliophorus_viridis.jpg', c: 'Verdigris waxcap'},
{f: 'https://bso.org.nz/f/xzkk1x/1_26_mycena_ura.jpg', c: 'Translucent red amongst the mosses'},
{f: 'https://bso.org.nz/f/x711zx/1_27_hygrocybe.jpg', c: 'Vibrant yellow waxcaps'},
{f: 'https://bso.org.nz/f/8ppky8/1_28_pingao_on_whenua_hou.jpg', c: 'Pingao on Whenua Hou'},
{f: 'https://bso.org.nz/f/835kpx/1_29_karo_pittosporum_crassifolium.jpg', c: 'Karo - Pittosporum crassifolium'},
{f: 'https://bso.org.nz/f/q2kkwq/1_30_mt_cook_lily_ranunculus_lyallii.jpg', c: 'Mt Cook Lily - Ranunculus lyallii'},
{f: 'https://bso.org.nz/f/q1jjkq/1_31_native_clematis_clematis_paniculata.jpg', c: 'Native Clematis - Clematis paniculata'},
{f: 'https://bso.org.nz/f/8w55v8/1_32_a_mystery_orchid.jpg', c: 'Unidentified orchid on the Annapurna Circuit at 4000 metres in Nepal'},
{f: 'https://bso.org.nz/f/qe2g5q/1_33_touch_the_sky.jpg', c: 'Harakeke in flower reaching for the sky'},
{f: 'https://bso.org.nz/f/qg2r2x/1_34_new_life.jpg', c: 'A fern frond breaking through the rubble'},
{f: 'https://bso.org.nz/f/xydrrx/1_35_catching_sunlight.jpg', c: 'Fern moss flattered by morning sunlight'},
{f: 'https://bso.org.nz/f/qorkzq/1_36_polystichum_vestitum.jpg', c: 'Polystichum vestitum - Kepler track'},
{f: 'https://bso.org.nz/f/8nlybq/1_37_aciphylla_crosby-smithii.jpg', c: 'Aciphylla crosby-smithii - Kepler track'},
{f: 'https://bso.org.nz/f/qbjvg8/1_38_pas_de_deux.jpg', c: 'From the Westland ballet company'},
{f: 'https://bso.org.nz/f/8d1en8/2_1_horoeka_pseudopanax_crassifolia.jpg', c: 'A place to grow: fringing waterside bush by Te Anau a cluster of juvenile horoeka seeded from a nearby adult tree take up the fight for sun and space'},
{f: 'https://bso.org.nz/f/8936e8/2_2_living_on_the_edge.jpg', c: 'Epilobium microphyllum, growing among the stones is well adapted to the dynamic open shingle riverbed of the Tasman River'},
{f: 'https://bso.org.nz/f/8413r8/2_3_distinctly_dangerous.jpg', c: 'A massive plant of Aciphylla scott-thomsonii, is a particularly striking member of this streamside montane shrubland community'},
{f: 'https://bso.org.nz/f/xvye5x/2_4_between_a_rock_and_a_hard_place.jpg', c: 'Celmisia lyalli and C. viscosa shelter beneath a schist outcrop on the Old Man Range'},
{f: 'https://bso.org.nz/f/8ln79x/2_5_merino_art.jpg', c: 'Hummocks of Melicytus alpinus sculpted by grazing in the northern Dunstan mountains'},
{f: 'https://bso.org.nz/f/85e3l8/2_6_salty_cracks.jpg', c: 'Nationally vulnerable Atriplex buchananii and Nationally critical Puccinellia raroflorens on an inland saline salt pan in summer'},
{f: 'https://bso.org.nz/f/8pp3y8/2_7_ramalina_celastri_dance.jpg', c: 'Ramalina celastri lichen dance stage'},
{f: 'https://bso.org.nz/f/8nlpbq/2_8_beech_bole_majic_landscape.jpg', c: 'Beech bole magic  Mosses, liverworts and lichens'},
{f: 'https://bso.org.nz/f/8359px/2_9_dunes_at_sunset.jpg', c: 'Dunes at sunset'},
{f: 'https://bso.org.nz/f/qbj5g8/2_10_dune_lake_reflections.jpg', c: 'Dune lake reflections'},
{f: 'https://bso.org.nz/f/86n9dx/2_11_silverpeaks_tapestry_1.jpg', c: 'Hypogymnia sp. hidden in subalpine scrub. Taken on 35mm film'},
{f: 'https://bso.org.nz/f/x712zx/2_12_silverpeaks_tapestry_2.jpg', c: 'Subalpine scrub along the Silverpeaks track. Taken on 35mm film'},
{f: 'https://bso.org.nz/f/xzkp1x/2_13_alpine_veronica.jpg', c: 'Veronica odora cluster among the alpine rocks of the Rock and Pillar Range'},
{f: 'https://bso.org.nz/f/8ml9rx/2_14_redwoods_in_fog.jpg', c: 'Crowns of giant redwoods disappear into the thickening fog'},
{f: 'https://bso.org.nz/f/q2kzwq/2_15_clavulina_coral_fungus.jpg', c: 'Coral fungus ectomicorrhizzal on mountain beech'},
{f: 'https://bso.org.nz/f/xzk91x/2_16_plant_life_on_whenua_hou.jpg', c: 'Plant life on Whenua Hou'},
{f: 'https://bso.org.nz/f/q1jrkq/2_17_rainforest_beauty_in_nepal.jpg', c: 'Platystemma contains a single species: Platystemma violoides with only one Gesneriaceae relative in New Zealand: Rhabdothamnus solandri (taurepo)'},
{f: 'https://bso.org.nz/f/qe2d5q/2_18_light_and_shadow.jpg', c: 'A canopy of native Sliver Beech trees in Kinloch'},
{f: 'https://bso.org.nz/f/86nvdx/2_19_theres_gold_in_them_thar_hills.jpg', c: 'Old Man Range'},
{f: 'https://bso.org.nz/f/8mlgrx/2_20_octobers_starry_skies.jpg', c: 'Clematis marata growing through Korokio. Alexandra'},
{f: 'https://bso.org.nz/f/xyd9rx/2_21_puccinellia_at_the_biofilm_margin.jpg', c: 'Puccinellia raroflorens occupying a microbial matrix (biofilm) in the inland salt pan at Chapman Road Scientific Reserve'},
{f: 'https://bso.org.nz/f/xrmdd8/3_1_an_opportunistic_invader.jpg', c: 'The exotic parasitic dodder Cuscuta epithymum, is thriving on a native host, in this instance, Raoulia hookeri '},
{f: 'https://bso.org.nz/f/xj615q/3_2_slippery_pavement_pests.jpg', c: 'Slippery pavement Pests. Xanthoparmelia scabrosa and friends'},
{f: 'https://bso.org.nz/f/xkn7ex/3_3_pines_marching_on.jpg', c: 'Pines marching on'},
{f: 'https://bso.org.nz/f/8d1zn8/3_4_life_and_death.jpg', c: 'Life and death'},
{f: 'https://bso.org.nz/f/893we8/3_5_fairy_forest.jpg', c: 'Introduced Amanita muscaria is weedy and spreading in NZ'},
{f: 'https://bso.org.nz/f/xvy75x/3_6_riparian_beauty.jpg', c: 'Weed or not, montbretia add colour to the sombre streamside'},
{f: 'https://bso.org.nz/f/8lne9x/3_7_chamomile_and_clover.jpg', c: 'Plant life meets the silt filled water of Dart River'},
{f: 'https://bso.org.nz/f/841vr8/3_8_a_pesky_trait.jpg', c: 'A pesky trait - Muehlenbeckia australis climbs towards Urtica ferox'},
{f: 'https://bso.org.nz/f/85e1l8/3_9_making_dunes.jpg', c: 'Ammophila arenaria (marram grass) stabilises sand and forms dunes at Warrington Beach'},
	]"></v-photo-vote>
</div>
@endsection
