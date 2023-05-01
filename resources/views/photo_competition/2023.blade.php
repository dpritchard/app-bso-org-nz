@extends('layouts.main')

@section('content')
<div class="mb-5">
	<h1>2023 Photo Competition</h1>
	<!-- Notes for 2024... Need to streamline this: Short Title. Author. Caption (optional). Set data in php and pass to JS. Supress author until voting finished.-->

	<p>Welcome to the 2023 BSO Photo Competition. This year we have received 56 photos, from 13 photographers, across the 3 categories.</p>

	<p>Our judges will decide the overall category winners and their decision will be announced on May 10 2023 at the AGM. However, we also have a <em>People’s Choice Award</em> which is up to you!</p>

	<h3>Voting Information</h3>
	<p>BSO members may vote for as many as three of their favourite photos (votes are not limited to one per category). You may browse the photos by clicking on the category buttons below. You can optionally assemble a shortlist of favourites, from which you can select up to three photos to vote for.</p>
	<p>Note that this webpage does not record your votes directly - it simply helps you browse and select your favourites. Information on how to cast your vote via email will be displayed once you have selected at least one photo to vote for.</p>

	
<!-- 	
	<p>Welcome to the 2023 BSO Photo Competition. This year, we received 56 photos, from 13 photographers, across the 3 categories.</p>

	<p>Our judges announced the overall category winners on May 10 2023 at the AGM. At the same time we announced the <em>People’s Choice Award</em> chosen by BSO members. For the first time ever, we had a four-way tie for the <em>People’s Choice Award</em></p>

	<h3>Category Winner: Plant Portrait</h3>
	<figure class="figure">
		<img src="" class="figure-img img-fluid rounded" alt="XX">
		<figcaption class="figure-caption">XX. YYY.</figcaption>
	</figure>

	<h3>Category Winner: Plants in the Landscape</h3>
	<figure class="figure">
		<img src="" class="figure-img img-fluid rounded" alt="XX">
		<figcaption class="figure-caption">XX. YYY.</figcaption>
	</figure>

	<h3>Category Winner: ABCD</h3>
	<figure class="figure">
		<img src="" class="figure-img img-fluid rounded" alt="XX">
		<figcaption class="figure-caption">XX. YYY.</figcaption>
	</figure>

	<h3><em>People’s Choice Award</em></h3>
	<figure class="figure">
		<img src="" class="figure-img img-fluid rounded" alt="XX">
		<figcaption class="figure-caption">XX. YYY.</figcaption>
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
    	{code: 3, name: 'Mosses, Fungi, Lichens, and Liverworts', description: ''}
    ]"
    v-bind:images="[
{f: 'https://bso.org.nz/f/rxr66x/1_1_ranunculus_crithmifolius.jpg', c: 'Ranunculus crithmifolius: The Hawkduns'},
{f: 'https://bso.org.nz/f/exy7zx/1_2_earina_autumnalis.jpg', c: 'Earina autumnalis: Rakiura'},
{f: 'https://bso.org.nz/f/vxkl58/1_3_celmisia_polyvena.jpg', c: 'Celmisia polyvena: Rakiura'},
{f: 'https://bso.org.nz/f/e89z1x/1_4_chatham_christmas_tree_at_tuku_camp.jpg', c: 'Chatham Christmas Tree at Taiko Camp: Rautini (Brachyglottis huntii) in full flower at Taiko Camp on Chatham Island'},
{f: 'https://bso.org.nz/f/d8drpx/1_5_species_needs_renaming.jpg', c: 'Species needs renaming: Clematis foetida Raoul, should be renamed Clematis euodia (sweet smelling Gk) or hedyosmus (L) - Tuapeka West'},
{f: 'https://bso.org.nz/f/e89mrq/1_6_dead_clade_walking.jpg', c: 'Dead clade walking?: Rhabdothamnus solandri - Great Barrier Island. Pollination became drastically reduced by local extinction of bellbirds and stitchbirds in the upper North Island in around 1870. Can it survive long term?'},
{f: 'https://bso.org.nz/f/bxv6wq/1_7_gentianella_grisebachii.jpg', c: 'Gentianella grisebachii: Lake Alta, Remarkables'},
{f: 'https://bso.org.nz/f/d84ml8/1_8_h_pimelioides.jpg', c: 'Hebe pimelioides: Moke Lake'},
{f: 'https://bso.org.nz/f/p8l5zx/1_9_ranunculus_multiscarpus.jpg', c: 'Ranunculus multiscapus: Lake Alta, Remarkables'},
{f: 'https://bso.org.nz/f/bxvplx/1_10_te_waipounamu_edelweiss.jpeg', c: 'Te Waipounamu edelweiss: Leucogenes grandiceps on a rock terrace at the end of Crow Valley, Arthur’s Pass.'},
{f: 'https://bso.org.nz/f/w8pojx/1_11_alpine_carpet.jpeg', c: 'Alpine Carpet: A mosaic of alpine cushion plants featuring Anistome imbricata var. imbricata, Raoulia hectori var. hectori, Dracophyllum muscoides and Abrotanella inconspicua.'},
{f: 'https://bso.org.nz/f/183r58/1_12_doomshrooms.jpg', c: 'Doomshrooms – Grandaddy looks out over an animated young’un: Animated shroom is from Plants vs Zombies, image by Ghostgoop1980 under CC-BY-SA licence'},
{f: 'https://bso.org.nz/f/k8nnp8/1_13_hymenophyllum_malingii.jpg', c: 'Hymenophyllum malingii: Hairy filmy fern, found on a field trip to Leith Saddle'},
{f: 'https://bso.org.nz/f/lqbyv8/1_14_the_one_flower_of_myosotis_uniflora.jpg', c: 'The one flower of Myosotis uniflora: Photographed through a hand lens at Mahaka Katia/Pisa Flat'},
{f: 'https://bso.org.nz/f/486dlq/1_15_spinifex.jpg', c: 'Spinifex: Spinifex on back dune pool'},
{f: 'https://bso.org.nz/f/b8m3nx/1_16_rata.jpg', c: 'Rata: Juvenile Metrosideros fulgens on Totara'},
{f: 'https://bso.org.nz/f/jx795q/1_17_tutu.jpg', c: 'Tutu: Coriaria arborea with fruit'},
{f: 'https://bso.org.nz/f/oxzov8/1_18_freycinettia.jpg', c: 'Freycinetia: Freycinetia banksii with fruit'},
{f: 'https://bso.org.nz/f/gqow38/1_19_xeronema.jpg', c: 'Xeronema: Xeronema callistemon'},
{f: 'https://bso.org.nz/f/lq2yg8/1_20_facesinthefronds.jpg', c: 'Faces in the fronds: Masses of Durvillaea on the coastline of The Snares heave in the swell, occasionally revealing humanoid faces.'},
{f: 'https://bso.org.nz/f/4q1gzq/1_21_chionohebe_densifolia.jpg', c: 'Snow Hebe: The snow Hebe Chionohebe densifolia'},
{f: 'https://bso.org.nz/f/n8wolq/1_22_fern_bank.jpg', c: 'Fern Bank: A group of Blechnum ferns showing colourful new growth'},
{f: 'https://bso.org.nz/f/d84o1x/2_1_leucogenes_grandiceps.jpg', c: 'Grandly standing above forest giants: Leucogenes grandiceps, Paparoa track'},
{f: 'https://bso.org.nz/f/eqg9p8/2_2_celmisia_lyallii.jpg', c: 'Daisy field: Celmisia lyallii on Grandview range'},
{f: 'https://bso.org.nz/f/exyozq/2_3_blechnum_discolor.jpg', c: 'Blechnum discolor: Rakiura'},
{f: 'https://bso.org.nz/f/rxro6x/2_4_oleria_grandis_and_saddleback.jpg', c: 'Oleria grandis: Rakiura'},
{f: 'https://bso.org.nz/f/bqejj8/2_5_limestone_plant_community_of_chathams.jpg', c: 'Limestone plant community of the Chathams: Limestone outcrops at Blind Jim’s on the western edge of Te Whanga Lagoon on Chatham Island.'},
{f: 'https://bso.org.nz/f/eqg9m8/2_6_olearia_allomii.jpg', c: 'Olearia allomii: Great Barrier Island endemic Olearia, Windy Canyon. Kauri beyond.'},
{f: 'https://bso.org.nz/f/exyobq/2_7_sweet_nectar.jpg', c: 'Sweet nectar: Phormium tenax providing sweet nourishment for kaka, Great Barrier Island.'},
{f: 'https://bso.org.nz/f/rxro1x/2_8_earina_autumnalis.jpg', c: 'Earina autumnalis: Orokonui'},
{f: 'https://bso.org.nz/f/vxk5bx/2_9_stegostyla_lyallii.jpg', c: 'Stegostyla lyalli: Mt Cutten'},
{f: 'https://bso.org.nz/f/mxjlgq/2_10_alpine_shadows.jpeg', c: 'Alpine Shadows: Veronica thomsonii on a herb rockfield high above Doolans Creek.'},
{f: 'https://bso.org.nz/f/e8941q/2_11_crystals_beach.jpg', c: 'Waves: View along Crystals Beach'},
{f: 'https://bso.org.nz/f/d8dk5q/2_12_ferns_stream.jpg', c: 'Ferns and water: Cool stream on a hot day'},
{f: 'https://bso.org.nz/f/bxv2l8/2_13_sunshine_forest.jpg', c: 'Sunshine in the forest: Its not always rainy here'},
{f: 'https://bso.org.nz/f/d84b1q/2_14_coastal_spectacle.jpg', c: 'Coastal spectacle: A large swathe of native ice plant adorns a coastal bank'},
{f: 'https://bso.org.nz/f/p8l27x/2_15_kanuka_forest_outlook.jpg', c: 'Kanuka Forest Outlook: The late afternoon sun illuminates the hills and ridges of the Otago Peninsula'},
{f: 'https://bso.org.nz/f/v8561q/2_16_crag_dweller.jpg', c: 'Crag Dweller: The favoured habitat of the alpine speargrass Aciphylla simplex are the vertiginous bluffs at Hyde Rock'},
{f: 'https://bso.org.nz/f/d8dm58/3_1_ephemeral_diamonds.jpg', c: 'Ephemeral diamonds: Unknown lichen, the Hawkduns'},
{f: 'https://bso.org.nz/f/183n1x/3_2_thamnolia_vermicularis.jpg', c: 'Cushion with spikes: Thamnolia vermicularis in cushion field, the Hawkduns'},
{f: 'https://bso.org.nz/f/k8n15x/3_3_entoloma_hochstetteri.jpg', c: 'Entoloma hochstetteri: Rakiura'},
{f: 'https://bso.org.nz/f/lqbmz8/3_4_sphagnum_moss_with_sundews_drosera_binata.jpg', c: 'Sphagnum moss with sundews: Carpets of moss, ferns, sundews grow next to acidic peat lakes on Chatham Island.'},
{f: 'https://bso.org.nz/f/486zwx/3_5_tangle_in_the_undergrowth.jpg', c: 'Tangle in the undergrowth: Gleichenia dicarpa (tangle fern) intermingled with club mosses.'},
{f: 'https://bso.org.nz/f/jx7zd8/3_6_moss_curtain.jpeg', c: 'Moss Curtain: Usnea sp. decorating the edge of a mountain beech forest at Woolshed Hill, Arthur’s Pass.'},
{f: 'https://bso.org.nz/f/b8m2vq/3_7_flammulina.jpg', c: 'Honey coloured Flammulina: '},
{f: 'https://bso.org.nz/f/oxzeyx/3_8_pixie_balconies.jpg', c: 'Pixie balconies composed of crowds of Hypholoma: '},
{f: 'https://bso.org.nz/f/gqo2g8/3_9_thescream.jpg', c: 'The Scream: The gemmae cups on the thalli of these Marchantia sp. form expressive faces.'},
{f: 'https://bso.org.nz/f/lq235x/3_10_mossback.jpg', c: 'Mossback: A hunched over human figure shrouded in a coat of bryophytes.'},
{f: 'https://bso.org.nz/f/n8w268/3_11_ganodermaursa.jpg', c: 'Ganoderma ursa: Ganoderma ursa surveys a Fiordland forest.'},
{f: 'https://bso.org.nz/f/4q1pvq/3_12_united.jpg', c: 'United: These Polytrichum juniperinum sporophytes appear to have merged their hairy calyptrae.'},
{f: 'https://bso.org.nz/f/bqewjq/3_13_global_warming.jpg', c: 'Global Warming: Sunburst lichen (Xanthoria parietina) circles the globe Spikes of Ramalina erupt. Sexy pavement lichen (Xanthoparmelia scabrosa)  stars glimmer below in warming Dunedin'},
{f: 'https://bso.org.nz/f/eqgmmq/3_14_community_letterbox.jpg', c: 'Community letterbox: A healthy community of Usnea, Flavoparmelia haysomii, other Parmelioid lichens, orange Teloschistaceae and assorted crusts enhance a letterbox in cleaner air  Dunedin'},
{f: 'https://bso.org.nz/f/exy2b8/3_15_confusing_network.jpg', c: 'Confusing network: At a distance clumps of the beautiful Coral lichen, Pulchrocladia retipora, can be confused with the creamier, finer branched Cladonia confusa. Great Barrier Island.'},
{f: 'https://bso.org.nz/f/rxrw1q/3_16_crown_jewels.jpg', c: 'Crown jewels.: Red apothecia adorn the grainy splash cups of  the Red-fruited pixie cup lichen, Cladonia pleurota.  Raindrops splashing up help disperse the spores. Great Barrier Island.'},
{f: 'https://bso.org.nz/f/vxk2bx/3_17_up_the_ladder.jpg', c: 'Up the ladder: Tiers of Ladder lichen, Cladonia verticillata reach upwards beside a rock fuzzed red with Trentepohlia, a free-living green alga that sometimes joins a lichen symbiosis. Mhiwaka.'},
{f: 'https://bso.org.nz/f/mxj2g8/3_18_agrocybe_parasitica.jpg', c: 'Agrocybe parasitica: Fruiting bodies of the fungus growing on trunk of living elderberry'}
	]"></v-photo-vote>
</div>
@endsection
