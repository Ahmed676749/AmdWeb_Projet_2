{extends file="views/structure.tpl"}
{block name="content"}
  
      <main>
        <!--Section description-->
        <section class="description">
          <h1 class="style-h"></h1>
          <div class="wrapper-details">
          
            
            <div class="left-box card-job">
              <p>{$uneOffre->getTitre()}</p>
              <p>Salaire: {$uneOffre->getSalaire()} &euro; / mois</p>
            </div>
            <div class="right-box card-job">
              <p>Description :</p>
              <p>
              {$uneOffre->getDescription()}
              </p>
              <p>
                Type d'emploi : Temps plein, CDI
                <br />
               
              </p>
              <p>
                Avantages :
                <br />
                Horaires flexibles participation au transport
                <br />
                Date de début prévue : 19/09/2038
              </p>
              <p>
                Qualifications:
                <br />
                Technologies de l'information: 1 an
                <br />
                Développement web: 1 an
                <br />
                HTML5: 1 an
              </p>
              <button class="style-button" type="submit">POSTULEZ</button>
            </div>
         
          </div>
        </section>
      </main>
   
    {/block}