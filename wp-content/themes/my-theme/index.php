<?php get_header(); ?>

<div class="container">

<?php 
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /** 
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    //the_content();
      
 
?>
    
    <section class="section1">
        <div class="section1-content">
              

                <p> <?php the_field('banner_baseline') ?> </p>
                <h1> <?php the_field('banner_title_brown') ?>  </h1>
            
            
                <div class="txtvert"> <h1>UNE QUESTION D'ÉQUILIBRE !</h1> </br>
                    <h4> S'INSCRIRE AUX RENCONTRES </h4> </br>
            
             </div>
        </div>
    </section>
    
        
    <section class="section2">
        <h1>LA CONFÉRENCE</h1>
        <div class="txt"> <p> Les Rencontres de la Fondation s'intitulent cette année "Chaîne alimentaire </br>
        végétame et durabilité: une question d'équilibre"! Elles se tiendront le 3 décembre prochain à Bruxelles </br>
et auront pour objectif de décrypter la transition nutritionnelle des systèmes alimentaires à travers le monde, </br>
qui appelle à favoriser une alimentation plus végétale. </p> 
        </div> 
    </section>
    
    


    <section class="section3"> 
        <div class="img3"> </div>
</section>
    
     

<section class="section4"> 
       <div class="trait">
            <h1>AU PROGRAMME</h1> </div>
    
<div class="parent">  
    
    <div class="colonne1">
    <div class="txt2"> 
        <h4>LES VÉGÉTAUX DANS LA CHAÎNE ALIMENTAIRE </h4>
         </div>
    <p> 8:30 Introduction par Christophe Fondation </br>
9:00 Wim de Vries Wageningen University </br>
9:45 Benjamin Alles Paris XII University </br>
10:15 Armando Perez Cueto Copenhagen University </br>
10:42 Cofee break </br>
    </p>
</div>

  <div class="colonne2">
<div class="txt3">
 <h4> LES ACTIVITÉ DE LA FONDATION</h4>
      </div>
    <p> 11:15 Jacynthe Lafrenière, Lauréate du Prix de Recherche </br>
11:35 Le projet EPICALIM de la fondation </br>
12:00 Cérémonie du Prix de Recherche </br>
12:30 Lunch </br>
    </p>
</div>
</div>

<div class="sinscrire">
    <h4> S'INSCRIRE AUX RENCONTRES </h4>
</div>

 </div> 
</section>


<section5 class="section5">

 <h1>LES ORATEURS</h1>
     <div class="txt4"> 
        <h3> Lorem ipsum calidae por portittor et sit amet dolor callis</h3>
         </div>
    
<div id="grid">  
    <div class="roundimg1"> </div>
    
    <div class="pic1"> 
        <div class="green"> Wim de Vries </br></div>
                            Lorem ipsum calidae (1) </br>
    <div class="lire"> LIRE LA VIDÉO </div> 
    </div>

    <div class="roundimg2"> </div>

    <div class="pic2"> 
        <div class="green"> Laurence Depezay </br> </div>
                            Lorem ipsum calidae (6) </br>
    <div class="lire2"> EN SAVOIR PLUS </div>

  </div>
   
   <div class="roundimg3"> </div>

    <div class="pic3"> 
        <div class="green"> Armando Perez Cueto </br> </div>
                            Copenhagen University (3) </br>
    <div class="lire3"> LIRE LA VIDEO </div>
</div>

   <div class="roundimg4"> </div>

    <div class="pic4"> 
        <div class="green"> Christophe </br> </div>
                            Lorem ipsum calidae (4)</br>
        <div class="lire4"> LIRE LA TRIBUNE </div>

</div>
</div>  

<div id="grid2">
    <div class="roundimg5"> </div>

    <div class="pic5"> 
        <div class="green"> Benjamin Alles</br> </div>
                            Paris XIII University (2) </br>
       <div class="lire5"> LIRE LA TRIBUNE </div>
</div>
    
    <div class="roundimg6"> </div>

    <div class="pic6"> 
        <div class="green"> Jacinthe Lafronière</br> </div>
                            Lorem ipsum calidae (5)</br>
       <div class="lire6"> LIRE LA VIDEO </div>
</div>
</div>


</section5>
    


<section6 class="section6">
     <h1>INFORMATIONS PRATIQUES</h1>
    
    <div class="img6"> 
    
    <div class="t1"> Square Brussels </br>
                     Mont des Arts </br>
                     1000 Bruxelles <br> 
                     Belgique </br>
    </div> 

    <div class="t2"> Le 03.12.2019 </br>
                     de 8h30 à 12h30 </br>
    </div>
    
    <div class="t3"> Healthy </br>
                     Walking Dinner </br>
    </div>
</div>
</section6>





<section7 class="section7">
     <h1>VIDÉOS</h1>
</section>


<section8 class="section8">
     <h1>ACTUS</h1>
    
<div class="grid3">
    
        <div class="imgcarre1"> </div>
    <div class="one"> 
        <div class="title1"> 
                    Villes & Agriculture: </br>
                      rapprochement ou </br>
                      distanciation? </br>
        </div>
        
        <div class="title2"> 
                    Cette année, les 11e </br>
                    Rencontres de la Fondation </br>
                    Louis Bonduelle se dérouleront  </br>
                    le 12 juin.. </br>
        </div>
     <div class="lire7"> LIRE LA SUITE</div>
     <div class="date1"> 4 Octobre 2019 </div>
 
    </div>

<div class="imgcarre2"> </div>
<div class="two"> 
        <div class="title3"> 
                    Un rôle dans la transition vers </br>
                      des comportements durables </br>
        </div>
        
        <div class="title4"> 
                    Les acitivités de la Fondation </br>
                    Louis Bonduelle visent à </br>
                    sensibiliser ses différents  </br>
                    publics.. </br>
        </div>
     <div class="lire8"> LIRE LA SUITE</div>
     <div class="date2"> 4 Octobre 2019 </div>
 
    </div>
      
<div class="imgcarre3"> </div>
<div class="three"> 
        <div class="title4"> 
                      Quand la lutte contre le </br>
                      gaspillage alimentaire sert la </br>
                      lutte contre la faim </br>
        </div>
        
        <div class="title5"> 
                    En Outaouais (Québec, </br>
                    Canada), des organismes anti- </br>
                    gaspillage... </br>
        </div>
     <div class="lire9"> LIRE LA SUITE</div>
     <div class="date3"> 4 Octobre 2019 </div>
 
    </div>

<div class="imgcarre4"> </div>
<div class="four"> 
        <div class="title6"> 
                    Légumineuse et légume: </br>
                      quelles différences? </br>
        </div>
        
        <div class="title7"> 
                    Qu'est qu'une légumineuse? </br>
                    Louis Bonduelle visent à </br>
                    sensibiliser ses différents  </br>
                    publics.. </br>
        </div>
     <div class="lire10"> LIRE LA SUITE</div>
     <div class="date4"> 4 Octobre 2019 </div>
 
    </div>



    </div>
    
    
    
    
    </div>
    
</section>


    
    <?php

  }
}
      
?>

</div>

<?php get_footer(); ?>