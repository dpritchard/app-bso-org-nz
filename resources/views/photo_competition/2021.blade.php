@extends('layouts.main')

@section('content')
<div class="mb-5">
	<h1>2021 Photo Competition</h1>
	<!-- Notes for 2022. Need to streamline this: Short Title. Author. Caption (optional). Set data in php and pass to JS. Need author to be supressed until voting finished.-->
	
	<p>Welcome to the 2021 BSO Photo Competition. This year we have received 46 photos, from 12 photographers, across the 3 categories.</p>

	<p>Our judges will decide the overall category winners and their decision will be announced on May 12th at the AGM. However we also have a <em>People’s Choice Award</em> which is up to you!</p>

	<h3>Voting Information</h3>
	<p>BSO members may vote for as many as three of their favourite photos (votes are not limited to one per category). You may browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites, from which you can select up to three photos to vote for.</p>
	<p>Note that this webpage does not record your votes directly - it simply helps you browse and select your favourites. Information on how to cast your vote via email will be displayed once you have selected at least one photo to vote for.</p>

	<!-- 
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
-->

</div>
<div class="d-flex align-items-center">
	<v-photo-vote 
	v-bind:allow-votes="false" 
    v-bind:categories="[
    	{code: 1, name: 'Plant Portrait', description: ''},
    	{code: 2, name: 'Plants in the Landscape', description: ''},
    	{code: 3, name: 'Urban Ecology', description: ''}
    ]" 
    v-bind:images="[
{f: 'https://bso.org.nz/f/mxjryq/1_1_aciphylla_dobsonii_and_speargrass_weevil.jpg', c: 'Aciphylla dobsonii and speargrass weevil - with speargrass weevil (Lyperobius barretii) Mt Bitterness, St Marys Range'},
{f: 'https://bso.org.nz/f/d8ddb8/1_2_nothothlapsi_rosulatum.jpg', c: 'Nothothlapsi rosulatum - Mt Bitterness, St. Marys Range'},
{f: 'https://bso.org.nz/f/e89vmq/1_3_ranunculus_acreus_and_alpine_grasshopper.jpg', c: 'Ranunculus acreus and alpine grasshopper - with Brachaspis nivalus, alpine grasshopper, Mt Bitterness, St Marys Range'},
{f: 'https://bso.org.nz/f/bxvbo8/1_4_capsules_up_close.jpg', c: 'Capsules up close - Seed capsules of Dispthyma australe peeking out from between the leaves'},
{f: 'https://bso.org.nz/f/d84rbx/1_5_hidden_berry.jpg', c: 'Hidden berry - Coprosma obconica revealing a small purple streaked berry'},
{f: 'https://bso.org.nz/f/p8ljyq/1_6_blending_in.jpg', c: 'Blending in - A well disguised Lepidium tenuicaule hiding amongst Acaena microphylla'},
{f: 'https://bso.org.nz/f/v85km8/1_7_spring_glory.jpg', c: 'Spring is sprung - Clematis paniculata, female flowers. Pua Wänanga, the child of the star of summer and the star of harvest, signalling that spring is here - time for planting for an abundant harvest.'},
{f: 'https://bso.org.nz/f/w8pbeq/1_8_afterglow.jpg', c: 'Afterglow - Clematis paniculata, female inflorescence, pre-seed stage.'},
{f: 'https://bso.org.nz/f/183y4q/1_9_rakau_rangatira.jpg', c: 'Rakau rangatira - Podocarpus totara, Banks Peninsula; prized by Maori as a chiefly tree with excellent durable timber.'},
{f: 'https://bso.org.nz/f/k8n92q/1_10_monoclea_and_moss.jpg', c: 'Monoclea and Moss - A portrait of the liverwort Monoclea forsteri'},
{f: 'https://bso.org.nz/f/lqbkpq/1_11_wheki-ponga.jpg', c: 'Whekī-ponga - Dicksonia fibrosa along the Upper Mangamate Stream, Whirinaki Te Pua-a-Tāne Conservation Park.'},
{f: 'https://bso.org.nz/f/486rg8/1_12_spiralling_pikao.jpg', c: 'Spiralling Pīkao - Ficinia spiralis on a small beach just north of Punakaiki, West Coast.'},
{f: 'https://bso.org.nz/f/jx7k18/1_13_dewy_buttercup.jpg', c: 'Dewy buttercup - The At Risk – Declining Ranunculus buchananii near the summit of Tamatea Peak (1640 m), Fiordland National Park.'},
{f: 'https://bso.org.nz/f/b8mv98/1_14_wharariki.jpg', c: 'Wharariki - Phormium cookianum on the track to Green Lake Hut, with the morning sun melting the frost and shining through a leaf.'},
{f: 'https://bso.org.nz/f/oxzg9q/1_15_ranunculus_sericophyllus.jpg', c: 'Ranunculus sericophyllus - The silky alpine buttercup is one of the most conspicuous herbs of the Mt Cook fellfield.'},
{f: 'https://bso.org.nz/f/gqo6lq/1_16_adenochilus_gracilis.jpg', c: 'Adenochilus gracilis - A colony of orchids on a rotting beech log under silver beech forest, Takitimu Mountains.'},
{f: 'https://bso.org.nz/f/lq2ndq/1_17_epilobium_porphyrium.jpg', c: 'Epilobium porphyrium - The striking red foliage of this willowherb brightens the alpine rockland at Mount Cook.'},
{f: 'https://bso.org.nz/f/rxrjj8/1_18_phormium_tenax.jpg', c: 'Phormium tenax'},
{f: 'https://bso.org.nz/f/n8w7dx/1_19_disphyma_austral.jpg', c: 'Disphyma austral - Catlins'},
{f: 'https://bso.org.nz/f/vxkp4q/1_20_blechnum.jpg', c: 'Blechnum - Flagstaff'},
{f: 'https://bso.org.nz/f/eqgyeq/1_21_mamaku.jpg', c: 'Mamaku - Hokianga'},
{f: 'https://bso.org.nz/f/exyee8/1_22_fan-tastic.jpeg', c: 'Fan-tastic - A glowing green Pannaria minutiphylla (formerly P. microphyllizans) fans out between a larger foliose lichen and a small liverwort, Metzgaria.  On smooth bark, Hinewai, Banks Peninsula.'},
{f: 'https://bso.org.nz/f/rxrnjq/1_23_carmichaelia-crassiculis.jpg', c: 'Coral Broom - Carmichaelia crassicaulis is adapted to the harsh climate in Central Otago'},
{f: 'https://bso.org.nz/f/vxkd4q/1_24_gentianella-amabilis.jpg', c: 'Gentianella amabilis - Gentianella amabilis is a unique gentian found in the alpine bogs of Otago.'},
{f: 'https://bso.org.nz/f/mxjwy8/1_25_still-life_frits.jpg', c: 'Still Life - A pot of Fritillaria pontica shows the delicate colours of the flowers in this study.'},
{f: 'https://bso.org.nz/f/d8d3bx/1_26_atriplex_buchananii.jpg', c: 'Among the pebbles - Atriplex buchananii creeping through the pebbles at Long Point'},
{f: 'https://bso.org.nz/f/e89dmq/2_1_aciphylla_dobsonii.jpg', c: 'Aciphylla dobsonii - Mt Bitterness, St. Marys Range'},
{f: 'https://bso.org.nz/f/bxvno8/2_2_ranunculus_acreus.jpg', c: 'Ranunculus acreus - Mt Bitterness, St. Marys Range'},
{f: 'https://bso.org.nz/f/d84gb8/2_3_miniature_forest.j', c: 'Miniature forest - Joined and flattened tops of small trees crowd together'},
{f: 'https://bso.org.nz/f/p8l9y8/2_4_yum.jpg', c: 'Yum! - Aseroe rubra “donating” faecal-smelling nectar to a willing spore-spreader: Calliphora vomitoria.'},
{f: 'https://bso.org.nz/f/v85ymx/2_5_entanglement.jpeg', c: 'Entanglement - Ripogonum scandens, supplejack, Gordon Park scenic reserve Whanganui; Kareao, used by Maori to construct eel traps.'},
{f: 'https://bso.org.nz/f/w8pneq/2_6_a_path_less_taken.jpg', c: 'A Path Less Taken - A moss-covered path through beech forest in Mahu Whenua'},
{f: 'https://bso.org.nz/f/183e4x/2_7_the_fern_bridge.jpg', c: 'The Fern Bridge - A natural log bridge in Ross Creek, Dunedin'},
{f: 'https://bso.org.nz/f/k8n42x/2_8_mountain_mists.jpg', c: 'Mountain Mists - A stunning morning after heavy rainfall in Mahu Whenua'},
{f: 'https://bso.org.nz/f/lqb3px/2_9_a_forest_unexplored.jpg', c: 'A Forest Unexplored - A mountainous, mist-filled beech forest'},
{f: 'https://bso.org.nz/f/4867gq/2_10_flock_of_vegetable_sheep.jpg', c: 'Flock of vegetable sheep - Raoulia australis above Quartzville, Central Otago.'},
{f: 'https://bso.org.nz/f/jx771x/2_11_defiant_before_the_storm.jpg', c: 'Defiant before the storm - Slim snow tussock (Chionochloa macra) on the crest of the Dunstan Range.'},
{f: 'https://bso.org.nz/f/b8me9q/2_12_subapline_vegetation.jpg', c: 'Subalpine vegetation - Mt Ruapehu'},
{f: 'https://bso.org.nz/f/oxzy9q/2_13_mitey_moonscape.jpeg', c: 'Mitey moonscape - A tiny red mite contemplates grazing options in the lunar landscape of the hummocky, black-fruited, crustose lichen Pertusaria subverrucosa.  Subalpine basalt, Hinewai'},
{f: 'https://bso.org.nz/f/gqoylx/2_14_rockscape.jpeg', c: 'Rockscape - Orange Caloplaca flows out of hummocks of Pertusaria, amongst pale islands of fertile Lecanora farinacea. Dark Lecidea lurks on the right.  Rock outcrop, Hinewai.'},
{f: 'https://bso.org.nz/f/lq29dx/2_15_echium.jpg', c: 'Colours in the Landscape - Rain in Central Otago softens the normally harsh light and accentuates the colours of the wildflowers'},
{f: 'https://bso.org.nz/f/mxjpyx/2_16_ecological_processes.jpg', c: 'What next? - Humans can do so much but ecology has the final say.'},
{f: 'https://bso.org.nz/f/n8wldq/3_1_fire_and_ice.jpeg', c: 'Fire and ice - Unusually, this Teloschistes velifer has fruit cups as well  as powdery propagules (soredia). Physcia adscendens twines above.  Both are common urban lichens. Larch twig, Otago.'},
{f: 'https://bso.org.nz/f/bqe168/3_2_life_behind_bars.jpeg', c: 'Life behind bars - This very sick Xanthoria parietina clings to  the bars of the fence around Orokonui Ecosanctuary. Tremella, a lichenicolous fungus, caused the pustulous galls on the apothecia. '},
{f: 'https://bso.org.nz/f/eqg3e8/3_3_urban-ecology.jpg', c: 'The Urban Jungle - The great Australian city of Brisbane is home to 2.5 million people and the bin chicken, Threskiornis molucca. Here, three birds are enjoying the civic amenities in the heart of the city.'},
{f: 'https://bso.org.nz/f/exygex/3_4_rata_over_wakari.jpg', c: 'Rata over Wakari - Flowering southern rata signal that it’s summer in Dunedin'},
]"></v-photo-vote>
</div>
@endsection
