@extends('layouts.main')

@section('content')
<div class="d-flex align-items-center">
    <v-photo-vote 
    v-bind:categories="[
    	{code: 1, name: 'Plant Portrait', description: ''},
    	{code: 2, name: 'Plants in the Landscape', description: ''},
    	{code: 3, name: 'Plants and People', description: ''}
    ]" 
    v-bind:images="[
    	'https://dev.bso.org.nz/f/vxk638/1_1_cyathea_medullaris.jpg',
		'https://dev.bso.org.nz/f/mxjzr8/1_2_asplenium_bulbiferum.jpg',
		'https://dev.bso.org.nz/f/d8dn3q/1_3_ramaria_sp.jpg',
		'https://dev.bso.org.nz/f/e89n7x/1_4_stegostyla_lyallii.jpg',
		'https://dev.bso.org.nz/f/bxvrvq/1_5_leptoscopariium_scoparium.jpg',
		'https://dev.bso.org.nz/f/d84nzq/1_6_shelf_fungus.jpg',
		'https://dev.bso.org.nz/f/p8lwbx/1_7_spider_orchid.jpg',
		'https://dev.bso.org.nz/f/v854zx/1_8_warm_fuzzies.jpeg',
		'https://dev.bso.org.nz/f/w8p5oq/1_9_flamboyant_lichen.jpeg',
		'https://dev.bso.org.nz/f/1832nx/1_10_orchid_study.jpg',
		'https://dev.bso.org.nz/f/k8n5k8/1_11_strategies_for_success.jpg',
		'https://dev.bso.org.nz/f/lqb2oq/1_12_celestial_object.jpg',
		'https://dev.bso.org.nz/f/4861yq/1_13_the_mechanics_of_the_mycosphere.jpg',
		'https://dev.bso.org.nz/f/jx7n38/1_14_coprosma_atropurpurea.jpg',
		'https://dev.bso.org.nz/f/b8mnoq/1_15_sporophytes.jpg',
		'https://dev.bso.org.nz/f/oxz4nq/1_16_snow_bank_celmisia.jpg',
		'https://dev.bso.org.nz/f/gqom4x/1_17_leucopogon_fraseri.jpg',
		'https://dev.bso.org.nz/f/lq2pk8/1_18_ourisia_macrophylla_ssp_macrophylla_taranaki.jpg',
		'https://dev.bso.org.nz/f/4q1mrq/1_19_raoulia_subulata.jpg',
		'https://dev.bso.org.nz/f/n8wdmx/1_20_myosotis_glabrescens_and_friend.jpg'
    ]"></v-photo-vote>
</div>
@endsection
