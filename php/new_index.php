<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>HOMEPAGE</title>
    </head>
    <body >


        <div class="container-fluid text-center border border-dark" id="up">
            <div class="row">
                <div class="col-12">
                    <h1>- Personaggi della Disney -</h1>
                </div>
            </div>
        </div>


        <div class="container-fluid text-center border border-dark">
            <div class="row">
                <div class="col-3">
                    <p>(Menu')</p>
                </div>
                <div class="col-3">
                    <div class="dropdown">
                        <button class="dropbtn " style="border: none;">Categoria Personaggi</button>
                        <div class="dropdown-content">
                          <a href="https://it.wikipedia.org/wiki/Fumetti_Disney" style="display: block;">Fumetti</a>
                          <a href="https://it.wikipedia.org/wiki/Categoria:Cortometraggi_d%27animazione_Disney" style="display: block;">Cortometraggi d'animazione</a>
                          <a href="https://it.wikipedia.org/wiki/Lungometraggi_Disney" style="display: block;">Film d'animazione</a>
                          <a href="https://it.wikipedia.org/wiki/Pixar_Animation_Studios" style="display: block;">Pixar</a>
                          <a href="https://it.wikipedia.org/wiki/Topolino_(serie_animata)" style="display: block;">Serie Televisive</a>
                          <a href="https://it.wikipedia.org/wiki/Categoria:Videogiochi_Disney" style="display: block;">Videogiochi</a>
                        </div>
                      </div>
                </div>
                <div class="col-3">
                    <div class="dropdown">
                        <button class="dropbtn " style="border: none;">Storia</button>
                        <div class="dropdown-content">
                          <a href="https://it.wikipedia.org/wiki/The_Walt_Disney_Company#1923-1927:_i_primi_cortometraggi" style="display: block;">1923-1927: i primi cortometraggi</a>
                          <a href="https://it.wikipedia.org/wiki/The_Walt_Disney_Company#1928-1937:_la_creazione_di_Topolino_e_il_successo" style="display: block;">1928-1937: la creazione di Topolino</a>
                          <a href="https://it.wikipedia.org/wiki/The_Walt_Disney_Company#1937-1954:_i_primi_lungometraggi_e_la_crisi_della_Seconda_guerra_mondiale" style="display: block;">1937-1954: i primi lungometraggi</a>
                          <a href="https://it.wikipedia.org/wiki/The_Walt_Disney_Company#1955-1966:_Disneyland_e_morte_di_Walt_Disney" style="display: block;">1955-1966: Disneyland e morte di Walt Disney</a>
                        </div>
                      </div>
                </div>
                <div class="col-3">
                    <p>Hai eseguito l'accesso come <strong><?php echo $_GET["username"]?></p>
                    <p><a href="http://localhost/disney/index.html">LOGOUT</a></p>
                </div>
            </div>
        </div>


        <div class="container-flui text-center">
            <div class="row">
                <div class="col-3 border border-dark">
                    <p>Personaggi</p>
                    <div class="list-group">
                        <li class="list-group-item"><a href="#paperino">Paperino</a></li>
                        <li class="list-group-item"><a href="#paperina">Paperina</a></li>
                        <li class="list-group-item"><a href="#nonna_papera">Nonna Papera</a></li>
                        <li class="list-group-item"><a href="#paperoga">Paperoga</a></li>
                        <li class="list-group-item"><a href="#zio_paperone">Zio Paperone</a></li>
                        <li class="list-group-item"><a href="#gastone">Gastone</a></li>
                        <li class="list-group-item"><a href="#qui_quo_qua">Qui-Quo-QUA</a></li>
                        <li class="list-group-item"><a href="#clarabella">Clarabella</a></li>
                        <li class="list-group-item"><a href="#orazio">Orazio</a></li>
                    </div>
                </div>
                <div class="col-6 border border-dark">

                    <div id="paperino">
                    <h1>PAPERINO</h1>
                    <img src="https://www.secoloditalia.it/files/2018/05/Paperino.jpg" style="width:50% ">
                    <p>Il Paperino italiano è un uomo che incarna l'italiano medio, cerca lavoro ed è letteralmente perseguitato dalla sfortuna, incappando in problemi assurdi frutto di situazioni complicate. </p>
                    </div>

                    <div id="paperina">
                    <h1>PAPERINA</h1>
                    <img src="https://static.wikia.nocookie.net/paperpedia/images/6/6a/Paperina-moderna.png/revision/latest/scale-to-width-down/250?cb=20181201185916&path-prefix=it" style="width:20% ">
                    <p>Personaggio di grande carattere, è rappresentata come la classica fidanzata iper-protettiva e gelosa nei confronti di Paperino, pronta a scatenare la gelosia del papero uscendo con il suo cugino-rivale, Gastone.</p>
                     </div>

                    <div id="nonna_papera">
                    <h1>NONNA PAPERA</h1>
                    <img src="https://static.wikia.nocookie.net/paperpedia/images/f/f1/Nonnapapera.jpg/revision/latest/scale-to-width-down/180?cb=20111219192119&path-prefix=it" style="width:50% ">
                    <p>Nonna Papera è la classica signora di campagna, arzilla nonostante l'età. Gestisce da sola la fattoria a Quacktown, è sempre disponibile a ospitare i parenti e a cucinare deliziosi manicaretti. È una papera molto intelligente e dallo spiccato senso pratico, piuttosto seria, anche se talvolta mostra una vena di arguzia</p>
                    </div>

                    <div id="paperoga">
                    <h1>PAPEROGA</h1>
                    <img src="https://static.wikia.nocookie.net/paperpedia/images/6/61/Paperoga-moderno.png/revision/latest/scale-to-width-down/340?cb=20181201185833&path-prefix=it" style="width:40% ">
                    <p>Viene descritto come un papero grandemente studioso, al pari di Pico de Paperis, ma da questi si differenzia soprattutto per il metodo: confusionario e basato soprattutto sulla manualistica spicciola e sui corsi per corrispondenza, figli della cultura del suo tempo</p>
                    </div>

                    <div id="zio_paperone">
                    <h1>ZIO PAPERONE</h1>
                    <img src="https://www.topolino.it/wp-content/uploads/2019/12/ziopaperoneintera.png" style="width:50% ">
                    <p>Zio Paperone è terribilmente avaro e ama accumulare soldi senza spendere un centesimo, né per sé né tantomeno per Paperino e Qui Quo Qua, che spesso cerca di sfruttare a suo vantaggio. </p>
                    </div>

                    <div id="gastone">
                    <h1>GASTONE</h1>
                    <img src="https://static.wikia.nocookie.net/paperpedia/images/e/e8/Gastone_0001.png/revision/latest/scale-to-width-down/340?cb=20141218170432&path-prefix=it" style="width:40% ">
                    <p>Inizialmente Gastone non compare come particolarmente fortunato: viene caratterizzato come un dandy scansafatiche e arrogante, che vive di espedienti e fa a gara con il cugino Paperino "a chi la spara più grossa"; non nasconde, comunque, una certa venalità e truffaldineria che lo rendono a tutti gli effetti un antagonista</p>
                    </div>

                    <div id="qui_quo_qua">
                    <h1>QUI QUO QUA</h1>
                    <img src="https://www.topolino.it/wp-content/uploads/2019/12/quiquoequaintera.png" style="width:40% ">
                    <p>Essi sono una versione infantile di Paperino e indossano sempre delle magliette, solitamente di colore nero, e dei cappelli con la visiera. Il colore dei berretti è stato ufficializzato attraverso la serie televisiva DuckTales ed è: rosso per Qui, blu/azzurro per Quo e verde per Qua.</p>
                    </div>

                    <div id="clarabella">
                    <h1>CLARABELLA</h1>
                    <img src="https://static.wikia.nocookie.net/paperpedia/images/7/79/Clarabella-moderna.png/revision/latest/scale-to-width-down/250?cb=20181201185136&path-prefix=it" style="width:40% ">
                    <p>Clarabella viene rappresentata come una mucca eccessivamente pettegola che ama mettersi in mostra con vestiti di classe, spesso comportandosi come una nobildonna, per mettersi in luce davanti alla Topolinia che "conta". Soprattutto agli inizi, con i suoi difetti e le sue manie la mucca appare un po' come un contraltare comico della più posata e sensata Minni; </p>
                    </div>

                    <div id="orazio">
                    <h1>ORAZIO</h1>
                    <img src="https://static.wikia.nocookie.net/paperpedia/images/d/d2/Orazio-moderno.png/revision/latest/scale-to-width-down/250?cb=20181201185453&path-prefix=it" style="width:40% ">
                    <p>È un meccanico con un innato senso pratico che si occupa di riparare qualsiasi cosa nella sua officina. Presuntuoso e spesso saccente, ma anche con un carattere un po' ingenuo e sempliciotto; a volte è fatalista ed è terribilmente geloso del successo di Topolino, ma gli rimane sempre suo amico.</p>
                    </div>    
                    
                    <div>
                        <p><a href="#up">TORNA SOPRA</a></p>
                    </div>
                </div>
                <div class="col-3 border border-dark">
                <p>LINK SITI</p>
                    <div class="list-group">
                        <li class="list-group-item"><a href="https://disney.fandom.com/it/wiki/Disney_Wiki_Italia">https://disney.fandom.com/it/wiki/Disney_Wiki_Italia</a></li>
                        <li class="list-group-item"><a href="https://it.wikipedia.org/wiki/The_Walt_Disney_Company">https://it.wikipedia.org/wiki/The_Walt_Disney_Company</a></li>
                        <li class="list-group-item"><a href="https://www.topolino.it/">https://www.topolino.it/</a></li>

                    </div>
                </div>
                </div>
            </div>
        </div>

        <style>
            .dropdown-content {
              display: none;

            }
        
            .dropdown:hover .dropdown-content {
              display: block;
            } 
            </style>
    </body>
</html>