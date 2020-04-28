@extends('layouts.main')

@section('content')
<div class="mb-5">
	<h1>2020 Photo Competition</h1>
	<p>Welcome to the 2020 BSO Photo Competition. This year we have received 62 photos, from 13 photographers, across the 3 categories.</p>

	<p>Our judges will decide the overall category winners and their decision will be announced on May 13th at the AGM. However we also have a <em>People’s Choice Award</em> which is up to you!</p>

	<h3>Voting Information</h3>
	<p>BSO members may vote for as many as three of their favourite photos (votes are not limited to one per category). You may browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites, from which you can select up to three photos to vote for.</p>
	<p>Note that this webpage does not record your votes directly - it simply helps you browse and select your favourites. Information on how to cast your vote via email will be displayed once you have selected at least one photo to vote for.</p>
</div>
<div class="d-flex align-items-center">
	<v-photo-vote 
    v-bind:categories="[
    	{code: 1, name: 'Plant Portrait', description: ''},
    	{code: 2, name: 'Plants in the Landscape', description: ''},
    	{code: 3, name: 'Plants and People', description: ''}
    ]" 
    v-bind:images="[
    	'https://bso.org.nz/f/vxk638/1_1_Cyathea_medullaris.jpg',
		'https://bso.org.nz/f/mxjzr8/1_2_Asplenium_bulbiferum.jpg',
		'https://bso.org.nz/f/d8dn3q/1_3_Ramaria_sp.jpg',
		'https://bso.org.nz/f/e89n7x/1_4_Stegostyla_lyallii.jpg',
		'https://bso.org.nz/f/bxvrvq/1_5_Leptoscopariium_scoparium.jpg',
		'https://bso.org.nz/f/d84nzq/1_6_Shelf_fungus.jpg',
		'https://bso.org.nz/f/p8lwbx/1_7_Spider_orchid.jpg',
		'https://bso.org.nz/f/v854zx/1_8_Warm_fuzzies.jpeg',
		'https://bso.org.nz/f/w8p5oq/1_9_Flamboyant_lichen.jpeg',
		'https://bso.org.nz/f/1832nx/1_10_Orchid_study.jpg',
		'https://bso.org.nz/f/k8n5k8/1_11_Strategies_for_Success.jpg',
		'https://bso.org.nz/f/lqb2oq/1_12_Celestial_Object.jpg',
		'https://bso.org.nz/f/4861yq/1_13_The_Mechanics_of_the_Mycosphere.jpg',
		'https://bso.org.nz/f/jx7n38/1_14_Coprosma_atropurpurea.jpg',
		'https://bso.org.nz/f/b8mnoq/1_15_Sporophytes.jpg',
		'https://bso.org.nz/f/oxz4nq/1_16_Snow_Bank_Celmisia.jpg',
		'https://bso.org.nz/f/gqom4x/1_17_Leucopogon_fraseri.jpg',
		'https://bso.org.nz/f/lq2pk8/1_18_Ourisia_macrophylla_ssp_macrophylla_Taranaki.jpg',
		'https://bso.org.nz/f/4q1mrq/1_19_Raoulia_subulata.jpg',
		'https://bso.org.nz/f/n8wdmx/1_20_Myosotis_glabrescens_and_friend.jpg',
		'https://bso.org.nz/f/bqeyv8/1_21_Life_amidst_the_litter.jpg',
		'https://bso.org.nz/f/eqgkvx/1_22_Im_hungry.jpg',
		'https://bso.org.nz/f/exyvmx/1_23_Seaside_Belchnum.jpg',
		'https://bso.org.nz/f/rxrgg8/1_24_Weeping_broom.jpg',
		'https://bso.org.nz/f/vxk13q/1_25_Gentianella_saxicola.jpg',
		'https://bso.org.nz/f/mxjmrx/1_26_Rhopalostylus_sapida_seed_pod.jpg',
		'https://bso.org.nz/f/d8dg38/1_27_Dublin_Bay.jpeg',
		'https://bso.org.nz/f/e89e7x/1_28_Sorbus.jpeg',
		'https://bso.org.nz/f/bxvjvx/1_29_Dahlia.jpeg',
		'https://bso.org.nz/f/d84wzq/1_30_Schizostylis.jpeg',
		'https://bso.org.nz/f/p8lmbq/1_31_Pseudocyphellaria_glabra.jpeg',
		'https://bso.org.nz/f/v85wz8/1_32_Cladonia_carneola_Mt_Burns.jpeg',
		'https://bso.org.nz/f/w8pmo8/1_33_Graphis_librata.jpg',
		'https://bso.org.nz/f/1833n8/1_34_Coral_fungi.jpg',
		'https://bso.org.nz/f/k8nzk8/1_35_Raoulia_australis.jpg',
		'https://bso.org.nz/f/lqbzoq/1_36_A_Grifola_fungus_blooming_from_a_fallen_tree_at_Woodhaugh_Gardens.jpg',
		'https://bso.org.nz/f/4862yx/1_37_A_native_morel_Morchella_species_at_Tangoio_Falls_Hawkes_Bay.jpg',
		'https://bso.org.nz/f/jx7p3x/1_38_Bright_flowers_of_an_otherwise_well_camouflaged_Haastia_sinclairii_var_sinclairii_at_Lathrop_Saddle_Hokitika.jpg',
		'https://bso.org.nz/f/b8mmo8/2_1_Borland_Saddle_Ridge.jpg',
		'https://bso.org.nz/f/oxzvnq/2_2_Natures_womb.jpeg',
		'https://bso.org.nz/f/gqo34q/2_3_Stranglehold.jpeg',
		'https://bso.org.nz/f/lq2okx/2_4_Radiance_in_vines.jpeg',
		'https://bso.org.nz/f/n8wpmx/2_5_Pebble_Garden.jpg',
		'https://bso.org.nz/f/bqe6vx/2_6_Alpine_Tarns.jpg',
		'https://bso.org.nz/f/eqg6v8/2_7_Redheads_party.jpg',
		'https://bso.org.nz/f/exywm8/2_8_Alien_covention.jpg',
		'https://bso.org.nz/f/rxr7g8/2_9_Watch_where_you_walk_1.jpg',
		'https://bso.org.nz/f/bqe66x/2_10_Watch_where_you_walk_2.jpg',
		'https://bso.org.nz/f/eqg6e8/2_11_Moonrise.jpg',
		'https://bso.org.nz/f/exywe8/2_12_Day_at_the_beach.jpg',
		'https://bso.org.nz/f/rxr7j8/2_13_Blasted_Bones.jpg',
		'https://bso.org.nz/f/vxk348/2_14_Tenacious_totara.jpg',
		'https://bso.org.nz/f/mxj3yq/2_15_Placopsis.jpeg',
		'https://bso.org.nz/f/d8d2bq/2_16_Size_rules.jpg',
		'https://bso.org.nz/f/e89gmq/2_17_Above_the_trees_in_Kahurangi_National_Park.jpg',
		'https://bso.org.nz/f/bxv5o8/3_1_Takitimu_camp.jpg',
		'https://bso.org.nz/f/d846bx/3_2_Fergus_photographing_Tane_Mahuta.jpg',
		'https://bso.org.nz/f/p8l3y8/3_3_Wet_Land_Self_portrait.jpg',
		'https://bso.org.nz/f/v857mx/3_4_Child_entranced.jpg',
		'https://bso.org.nz/f/w8p4e8/3_5_Captivated_by_turf_plants.jpg',
		'https://bso.org.nz/f/183o48/3_6_Urban_Xanthprmelia_scabrosa.jpeg',
		'https://bso.org.nz/f/k8n62q/3_7_Exploring_the_lush_forests_near_Teer_Plateau_South_Westland.jpg',
    ]"></v-photo-vote>
</div>
@endsection
