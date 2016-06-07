<div class="wrapper">
    <main>
        <h2>Main in un wrapper</h2>
        <p>Do nisi tamen quae ingeniis. Fore eu officia, si o quid laboris, nescius 
        voluptatibus o quibusdam ea quem nescius hic offendit. Hic in malis duis esse 
        ubi senserit philosophari ab possumus, sed ad reprehenderit ut expetendis id 
        nostrud a eram mandaremus qui ipsum aute, mandaremus se senserit, excepteur amet 
            sed fabulas exercitation, ubi dolor cupidatat tempor.</p>
    </main>
    <aside>
        <h2>Aside in un wrapper</h2>
        <p>Ab lorem minim fore cernantur. Mandaremus esse minim do veniam. Ubi veniam 
        eiusmod hic arbitror culpa ipsum quamquam enim, quibusdam eu anim appellat e 
        nostrud dolor hic vidisse reprehenderit iis sint nam cupidatat, singulis 
        tractavissent de cernantur, quibusdam legam officia ab quis te proident et 
            irure.</p>
    </aside>
</div>


 <main>   
     <h2>Main fullscreen</h2>
    <section class="large_wrapper">
        <hgroup>
            <h1>Sezione large_wrapper</h1>
            <h2>Griglia a 24 colonne con gutter esterno</h2>
        </hgroup>
        <div class="grid-col">a</div>
        <div class="grid-col">b</div>
        <div class="grid-col">c</div>
        <div class="grid-col">d</div>
        <div class="grid-col">e</div>
        <div class="grid-col">f</div>
        <div class="grid-col">g</div>
        <div class="grid-col">h</div>
        <div class="grid-col">i</div>
        <div class="grid-col">l</div>
        <div class="grid-col">m</div>
        <div class="grid-col">n</div>
        <div class="grid-col">o</div>
        <div class="grid-col">p</div>
        <div class="grid-col">q</div>
        <div class="grid-col">r</div>
        <div class="grid-col">s</div>
        <div class="grid-col">t</div>
        <div class="grid-col">u</div>
        <div class="grid-col">v</div>
        <div class="grid-col">w</div>
        <div class="grid-col">x</div>
        <div class="grid-col">y</div>
        <div class="grid-col">z</div>
    </section>
    
    
    <section class="wrapper first">
        <hgroup>
            <h1>Sezione wrapper</h1>
            <h2>Griglia a 12 colonne con gutter interno</h2>
        </hgroup>
        <div class="grid-col default">
            <article class="box">
                <h3>Titolo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lacus vitae purus <strong>tristique feugiat imperdiet</strong> id leo. <a href="#">Donec ex odio</a>, varius sit amet malesuada non, pharetra eu nunc. Nunc vitae auctor metus, eu dictum dolor. <em>Quisque auctor dolor</em> ac placerat lacinia.</p>
                <figure>
                    <img alt="" src="http://lorempicsum.com/futurama/350/150/3">
                    <figcaption>Didascalia</figcaption>
                </figure>
                <h3>Titolo</h3>
                <p>Lorem <mark>ipsum dolor sit</mark> amet, consectetur adipiscing elit. Quisque vel lacus vitae purus tristique.</p>
                <h3>Liste</h3>
                <ul>
                    <li>Uno</li>
                    <li class="star">Due</li>
                    <li>Tre</li>
                </ul>
                <p>Vivamus in neque quis lacus dapibus vestibulum.</p>
                <h3>Bottoni</h3>
                <div class="buttons">
                    <div class="button"><a href="#" class="default">Uno</a></div>
                    <div class="button"><a href="#" class="alternate">Due</a></div>
                </div>
                <p>Curabitur id mattis dolor.</p>
            </article>
        </div>
        <div class="grid-col alternate">
            <article class="box">
                <h3>News</h3>
                <p>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</p>
                <time pubdate datetime="2015-11-21T14:50+01:00">21 novembre 2015</time>
            </article>
            <article class="box">
                <h3>News</h3>
                <p>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</p>
                <time pubdate datetime="2015-11-21T14:50+01:00">21 novembre 2015</time>
            </article>
            <article class="box">
                <h3>News</h3>
                <p>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</p>
                <time pubdate datetime="2015-11-21T14:50+01:00">21 novembre 2015</time>
            </article>
            <article class="box">
                <h3>News</h3>
                <p>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</p>
                <time pubdate datetime="2015-11-21T14:50+01:00">21 novembre 2015</time>
            </article>
        </div>
        <div class="grid-col default">
            <article class="box">
                <h3>Immagini responsive</h3>
                <figure>
                    <img src="http://lorempicsum.com/futurama/350/150/9">
                    <figcaption>Immagine standard</figcaption>
                </figure>
                <figure>
                    <picture>
                        <!-- stile applicato all'immagine -->
                        <style scoped media="(max-width: 480px)">img{ width: 100%; height: auto }</style>
                        <!-- set di immagini alternative -->
                        <source srcset="<?php echo zencom_get_uploads_url() ?>/myphoto_180.jpg" media="(max-width: 180px)">
                        <source srcset="<?php echo zencom_get_uploads_url() ?>/myphoto_375.jpg" media="(max-width: 375px)">
                        <source srcset="<?php echo zencom_get_uploads_url() ?>/myphoto_480.jpg" media="(max-width: 480px)">
                        <source srcset="<?php echo zencom_get_uploads_url() ?>/myphoto_768.jpg" media="(max-width: 768px)">
                        <!-- se nessuna corrisponde al viewport per browser compatibili -->
                        <source srcset="<?php echo zencom_get_uploads_url() ?>/myphoto_768.jpg">
                        <!-- fallback per browser non compatibili -->
                        <!-- definisco una dimensione dell'immagine per evitare il reflow -->
                        <img width="250" height="333" rc="<?php echo zencom_get_uploads_url() ?>/myphoto_180.jpg" alt="">
                    </picture>
                    <figcaption>Immagine variabile in funzione del viewport (<strong>picture</strong>)</figcaption>
                </figure>
                <p>Con questa soluzione sono io che impongo al browser quale immagine mostrare.</p>
                <figure>
                    <img width="250" height="333" src="<?php echo zencom_get_uploads_url() ?>/myphoto_180.jpg" srcset="<?php echo zencom_get_uploads_url() ?>/myphoto_375.jpg 375w, <?php echo zencom_get_uploads_url() ?>/myphoto_480.jpg 480w, <?php echo zencom_get_uploads_url() ?>/myphoto_768.jpg 768w">
                    <figcaption>Immagine variabile in funzione del viewport (<strong>srcset</strong>)</figcaption>
                </figure>		
                <p><strong>Con questa soluzione è browser che calcola quale immagine mostrare (metodo da preferire).</strong></p>

            </article>
        </div>
        <div class="grid-col alternate">
           dfgdfg
        </div>
    </section>

    

    <section class="wrapper second">	
        <hgroup>
            <h1>Sezione wrapper</h1>
            <h2>Griglia a 12 colonne con gutter interno</h2>
        </hgroup>
        <div class="grid-col alternate">
            <article class="box">
                <h3>Titolo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lacus vitae purus tristique feugiat imperdiet id leo. Donec ex odio.</p>
                <div class="button single"><a href="#" class="alternate">Leggi</a></div>
            </article>
            <article class="box">
                <h3>Titolo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lacus vitae purus tristique feugiat imperdiet id leo. Donec ex odio.</p>
                <div class="button single"><a href="#" class="alternate">Leggi</a></div>
            </article>
        </div>
        <div class="grid-col default">
            <article class="box">
                <h3>Slider</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lacus vitae purus tristique feugiat imperdiet id leo. Donec ex odio.</p>
                <div id="main-slider" class="slider owl-carousel">
                    <div class="item">
                        <h2>Titolo1</h2>
                        <img alt="" src="<?php echo zencom_get_uploads_url() ?>/slide1.jpg" class="responsive">
                    </div>
                    <div class="item">
                        <h2>Titolo2</h2>
                        <img alt="" src="<?php echo zencom_get_uploads_url() ?>/slide2.jpg" class="responsive">
                    </div>
                    <div class="item">
                        <h2>Titolo3</h2>
                        <img alt="" src="<?php echo zencom_get_uploads_url() ?>/slide3.jpg" class="responsive">
                    </div>
                </div><!--slider-->
                <div class="button single"><a href="#" class="default">Leggi</a></div>
            </article>
        </div>
        <div class="grid-col alternate">
            <article class="box">
                <h3>Titolo</h3>
                <p>Curabitur id mattis dolor. Nunc augue eros, condimentum id vehicula sit amet, luctus tincidunt neque. Praesent eu mollis urna. Nulla gravida.</p>
                <h3>Bottoni</h3>
                <div class="buttons">
                    <div class="button"><a href="#" class="success">Success</a></div>
                    <div class="button"><a href="#" class="alert">Alert</a></div>
                    <div class="button"><a href="#" class="warning">Warning</a></div>
                </div>
            </article>
        </div>	
    </section>

    <div class="wrapper">
        <hgroup>
            <h1>Contenuto principale</h1>
            <h2>Form</h2>
        </hgroup>
        <article class="box">
            <h3>Form</h3>
            <form class="default" method="post" action="">
                <fieldset>
                    <legend>1. Account</legend>
                    <label for="username">Username &bull;</label>
                    <input id="username" name="username" type="text" placeholder="Username" class="field full" maxlength="20" tabindex="1">
                    <label class="error"><i class="fa fa-warning"></i>&nbsp;Campo obbligatorio</label>
                    <label foe="email">Email &bull;</label>
                    <input id="email" name="email" type="text" placeholder="Email" class="field full" maxlength="20" tabindex="2">
                    <label class="error"><i class="fa fa-warning"></i>&nbsp;Campo obbligatorio</label>
                </fieldset>
                <fieldset>
                    <legend>2. Altro</legend>
                    <label for="provincia">Provincia &bull;</label>
                    <select id="provincia" name="provincia" class="field" tabindex="3">
                        <option value="">Seleziona...</option>
                        <option value="1">Uno</option>
                        <option value="2">Due</option>
                    </select>
                    <label for="messaggio">Messaggio &bull;</label>
                    <textarea id="messaggio" name="messaggio" class="field full" maxlength="500" tabindex="5"></textarea>
                    <p><small>Donec vel vestibulum tortor, sit amet dapibus neque. Nulla neque felis, sodales eget nunc ac, commodo sodales ex.</small></p>
                    <label for="check">Accetto &bull;</label>
                    <input id="check" name="check" type="checkbox" class="field" tabindex="5">
                    <label class="error"><i class="fa fa-warning"></i>&nbsp;Campo obbligatorio</label>
                    <p><small>I campi indicati da (&bull;) sono obbligatori.</small></p>
                    <input id="submit" class="button" type="submit" value="Invia" tabindex="6">
                </fieldset>
            </form>
        </article>
    </div><!-- wrapper -->   
     
</main>     