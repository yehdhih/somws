@extends('layouts.master')
@section('title')
SOMACOGIR
@stop

@include('partials.slide')
@section('outcontainer')

<section id="catalogue">
  <div class="container">
    <div class="row">
       <div class="col-sm-12 title">
         <h2 class="text-center collor"> CATALOGUES </h2>
       </div>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="thumbnail text-center">
            <h2>L’ÉCTRICITÉ</h2>
            <a href="{{ url('/electricite') }}">
                <img src="src/images/gmi.jpg" alt=""  class="img-responsive"/>
                <p > LA SOMACOGIR  vous conseille et vous apporte La Solution adaptée en matériel électrique
                  résidentiel, tertiaire et industriel en partenariat avec les grandes marques internationales.
                  SOMACOGIR intervient dans les secteurs des énergies renouvelables; éclairage, éclairage BT,
                  réseau MT, informatique, alarme, aération et climatisation, outillage, automatisme...
                </p>
            </a>
        </div>
      </div>


      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="thumbnail text-center">
            <h2>QUINCAILLERIE</h2>
            <a href="{{ url('/quincaillerie') }}">
                <img src="src/images/o1.jpg" alt=""  class="img-responsive"/>
                LA SOMACOGIR, c’est votre spécialiste de la vente d’outillage professionnel
                Que vous soyez un professionnel du bâtiment ou un particulier, exigez la quali-
                té professionnelle pour votre outillage électroportatif, votre outillage à main, les
                consommables, la quincaillerie et tous les équipements et fournitures dont vous...


                <p >
                </p>
            </a>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="thumbnail text-center">
            <h2>GROUPES </h2>
            <a href="{{ url('/groupes') }}">
                <img src="src/images/gmg.jpg" alt=""  class="img-responsive"/>
                <p > LA SOMACOGIR est distribu-
                    teur exclusif de Pramac en
                    Mauritanie depuis 14 ans .
                    Dans le secteur des groupes
                    électrogène s
                    PRAMAC
                    offre d es solutions pour toutes
                    sortes de besoins: du groupes
                    électrogènes portables ou in-
                    dustriels pour des applications
                    stationnaires ou secours.
                    PRAMAC conçoit, fabrique
                        et installe une gamme com-
                        plète de groupes électrogènes...
                </p>
            </a>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="thumbnail text-center">
            <h2>ADJUVANTS</h2>
            <a href="{{ url('/sika') }}">
                <img src="src/images/gms1.png" alt=""  class="img-responsive"/>
                <p > LA SOMACOGIR est distributeur agrée de sika en Mauritanie .
                    Sika est une entreprise suisse qui produit des matériaux de construction.
                    Active au niveau mondial dans les secteurs des spécialités chimiques, elle est
                    fournisseur dans les domaines de l’étanchéité, du collage, de l’insonorisation,
                    du renforcement et de la protection d’ossatures. Sika est représentée dans 94...

                </p>
            </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="thumbnail text-center">
            <h2>ACIERS</h2>
            <a href="{{ url('/aciers') }}">
                <img src="src/images/gmc.jpeg" alt=""  class="img-responsive"/>
                <p > Vous cherchez un produit métallurgique de qualité, disponible sans délai et
                        bien sûr à bon prix. La SOMACOGIR est le partenaire qu’il vous faut.
                        Une équipe passionnée et expérimentée, une infrastructure et des outils perfor-
                        mants, un stock impressionnant. Un service prompt et efficace.
                        ACIERS - PLATS - RONDS - CARRÉS - CORNIÈRES ...
                </p>
            </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="thumbnail text-center">
            <h2>HUILES</h2>
            <a href="{{ url('/huiles') }}">
                <img src="src/images/gmh.jpg" alt=""  class="img-responsive"/>
                <p > Castrol est le principal fabricant et distributeur d’huiles lubrifiantes, graisses et
                    services dérivés de qualité supérieure au monde. Castrol propose des lubri-
                    fiants destinés à presque toutes les applications domestiques, commerciales
                    et industrielles.
                    Lubrifiants destinés au secteur automobile : développés pour les clients, produits ...
                </p>
            </a>
        </div>
      </div>





    </div>
  </div>




</section>
@endsection
@section('extra')
@include('partials.clients')
@include('partials.up-footer')
@stop
