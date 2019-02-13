@extends('layouts.app')

@section('content')
@include('partials.header')
@include('partials.breadcrum',['title'=>'Despre Machine learning'])
<section class="singl-blog-post-area section_padding_50">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 singl-blog-post">
				<div class="singl-blog-details wow fadeInUp">
					<h2>Artificial Intelligence</h2>
					<p>
						Inteligența Artificială, Machine Learning și Deep Learning sunt trei tehnologii aduse în discuție frecvent în ultimul timp, cu aplicații numeroase în diverse domenii. Cu toate că ele nu sunt sinonime care definesc același concept, încercarea de a le diferenția poate să genereze confuzie în anumite situații. Însă prin ce se deosebesc acestea, concret? Mai jos vom explica, pe scurt, ce semnifică fiecare.
						Inteligența artificială
					</p>
					<p>
						Concept abordat pentru prima dată cu peste 60 de ani în urmă, Inteligența Artificială desemnează, practic, capacitatea mașinăriilor de a simula inteligența umană. Astfel, această tehnologie reprezintă orice activitate care ar putea fi în mod obișnuit realizată de un individ, de exemplu cum este cazul unui computer care participă la un meci de șah, sau dispozitive inteligente precum Amazon Alexa sau Google Home, care interpretează comenzi vocale și oferă înapoi un răspuns.
					</p>
						<h2>Machine Learning</h2>
					<p>
						Machine Learning reprezintă o subdivizie a Inteligenței Artificiale și se referă la abilitatea mașinăriilor de a învăța pe cont propriu. Astfel, programele bazate pe Machine Learning pot învăța să recunoască diverse trenduri și să realizeze predicții pe baza informațiilor stocate. Companii precum IBM, Microsoft, Amazon sau Google oferă platforme complexe de Machine Learning.
					</p>
					<p>
						Spre exemplu, a aplicație a acestei tehnologii se reflectă în asigurarea unei mai bune securități a datelor. Potrivit unor studii, fiecare formă de malware tinde să aibă aproximativ același cod ca versiunea precedentă. Așadar, învățând acest comportament, algoritmii Machine Learning pot identifica tiparele legate de modul în care sunt accesate datele stocate în cloud, iar dacă sunt identificate anomalii în acest sens, ele vor fi raportate, iar în viitor vor fi anticipate posibilele scurgeri de date.
					</p>
						<h2>Deep Learning</h2>
					<p>
						Conceptul de Deep Learning s-a dezvoltat ca o extensie la Machine Learning, despre care am discutat anterior. Prin ce se caracterizează acesta? Practic, la fel ca și în cazul Machine Learning, este bazat pe introducerea unei mari cantități de date într-un sistem computerizat, prin intermediul unor rețele neuronale. Totuși, această tehnologie o depășește pe cea premergătoare ei și poate să analizeze informațiile mult mai în detaliu. Totodată, o caracteristică definitorie a acesteia este faptul că are capacitatea de a păstra în memorie acțiuni din trecut și de a învăța din propriul comportament.
					</p>
					<p>
						De exemplu, o aplicație Deep Learning se referă la sistemul de navigație a automobilelor care se conduc singure. Prin intermediul unor senzori și a unui sistem de analiză complex, vehiculele învață să recunoască obstacole și să acționeze în consecință. Un alt exemplu de Deep Learning este reprezentat de capacitatea computerelor de a recolora imagini și videoclipuri alb-negru, după ce învață cum arată anumite obiecte și cum sunt percepute de 
						oameni.
					</p>
					<p>	
						Un alt exemplu relevant ar fi Google DeepMind, un sistem inteligent care utilizează algoritmi bazați pe rețele neuronale profunde („deep neural networks”). Acesta este programat pe baza unor seturi masive de date și are capacitatea de a prezice trenduri și rezultate. Printre aplicațiile DeepMind se numără detectarea fraudelor, a spam-ului, recunoașterea vocală și a scrisului, căutarea de imagini sau realizarea traducerilor. Mai mult, în luna martie 2016, programul DeepMind AlphaGo a reușit să îl învingă pe campionul mondial la jocul Go, un board-game foarte complex, moment care a marcat o victorie uriașă în evoluția Inteligenței Artificiale.
						Așadar, după analiza celor trei concepte, putem concluziona că Deep Learning se subordonează Machine Learning, care la rândul său face parte din tot ceea ce înseamnă Inteligență Artificială. Imaginea de mai jos ilustrează perfect relațiile dintre acestea:

					</p>
						<img src="img/about/image.png">
				</div>
			</div>
		</div>
	</div>
</section>
@include('partials.footer')
@endsection