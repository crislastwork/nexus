<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>KITTEH PAGE</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'/>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jssor.core.js"></script>
        <script type="text/javascript" src="js/jssor.utils.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
        <script type="text/javascript" src="js/slider.js"></script>
        <script type="text/javascript" src="js/contact.js"></script>
        <script type="text/javascript" src="js/policy.js"></script>
        
    </head>
    <body>
        <div id="container">
            <div id="header"><img id="imageheader" u="image" src="images/logo.png" /></div>
            <!--        slider      -->
            <div id="slider1_container" style="position: relative; width: 960px; height: 380px; overflow: hidden;">

                <div u="slides" style="cursor: move; position: absolute; width: 960px; height: 380px; top: 0px;
                     left: 0px; overflow: hidden;">
                    <div><img u="image" src="images/grumpy-cat-placeholder-960x400.jpg" /></div>
                    <div><img u="image" src="images/nyan-cat-placeholder-960x400.jpg" /></div>
                    <div><img u="image" src="images/synth-cat-placeholder-960x400.jpg" /></div>
                </div>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssord20l" style="width: 70px; height: 132px; top: 123px; left: 0px;"></span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssord20r" style="width: 70px; height: 132px; top: 123px; right: -11px"></span>
            </div>
            <!--      end slider      -->

            <div id="content">
             
                <p class="definition">Cupcake ipsum dolor sit jujubes. Lemon drops marshmallow gingerbread
                    fruitcake macaroon applicake dessert. Tofee sweet roll jelly beans.
                    Donut jujubes pastry lemon drops.</p> 
            
                <hr class="line"/>
                
                <span class="contenttitle">KITTEH IPSUM</span>
                <p>Cupkace ipsum dolor sit amet bear claw oat cake candy canes jelly-o.
                    Jelly beans tootsie roll halvah pastry. Sesame snaps toffe marzipan macaroon
                    fruitcake cheesecake sweet brownie donut. Sesame snaps halvan tart cheesecake 
                    applicake. Caramels donut jelly-o powder marzipan danish pastry fruitcake 
                    chocolate cake. Overwear.com marshmallow tootsie roll topping. Pastry sweet 
                    roll biscuit muffin candy wafer pastry macaroon. Tofee cotton candy chocolate 
                    bar. Tiramisu sweet roll cheesecake soufflé sweet cheesecake jelly beans
                    lollipop.</p>
                <p>Croissant topping tart gummies jelly bear claw gummies. Chupa chups icing 
                    ice cream gummi bears. Gummies gingerbread marshmallow halvah bear claw powder.
                    Cheesecake dragée jelly croissant. Marshmallow chocolate cake pudding candy
                    canes jelly. Sugar plum liquorice unerdwear.com biscuit pie gummi bears oat 
                    cake tootsie roll. Tootsie roll marzipan chocolate bar chocolate cake sweet 
                    roll cupcake caramels oat cake. Gummie bears tiramisu croissant cupcake. Apple 
                    pie dragée souflée gingerbread applicake sugar plum pudding. Apple pie muffin 
                    jelly-o croissant lollipop carrot cake gingerbread bear claw bear claw.</p>
                <br/>
                <img src="images/grumpy-cat-placeholder-340x240.jpg" />
                <br/>
                <hr class="line"/>
            </div>

            <div id="contact">
                <p>Cupkace ipsum dolor sit amet bear claw oat cake candy canes jelly-o.
                    Jelly beans tootsie roll halvah pastry. Sesame snaps toffe marzipan macaroon
                    fruitcake cheesecake sweet brownie donut. Sesame snaps halvan tart cheesecake 
                    applicake. Caramels donut jelly-o powder marzipan danish pastry fruitcake 
                    chocolate cake. Overwear.com marshmallow tootsie roll topping.</p>

                <form method="post" class="contactform" id="contactform">
   
                        <label>NAME*</label></br>
                        <input type="text" class="name" name="name"/></br></br>
                        <label>EMAIL ADDRESS*</label></br>
                        <input type="email" class="email" name="email"/></br></br>
                        <label>ADDRESS</label></br>
                        <textarea cols="35" rows="5" class="message" name="message"></textarea></br></br>
                        <h4>*Indicates required field</h4>
                        <div>
                            <div class="msg"></div>
                            <button class="submit_button">
                                <div id="inbutton">
                                    <div id="inbuttontext">SUBMIT FORM</div>
                                    <div><img src="images/cat.png" width="80"/></div>
                                </div>
                            </button>
                        </div>

                </form>
                
                <div id="policy">View our privacy policy</div>
                <div id="policytext" style="display:none">
                        <p>Sesame snaps halvah tart cheesecake applicake. Caramels donuts 
                        jelly-o powder marzipan danish pastry fruitcake chocolate cake.
                        Someclothes.com marshmallow tootsie roll topping.</p>
                </div>
            </div>
            <div id="footer">
                <div id="contactinfo">
                    <span class="contenttitle">CONTACT KITTEH</span>
                    <p><strong>Grumpy Cat</strong><br/>
                    Sesame sapns, Halvah tart, cheesecake, TR27 4HH</p>
                    
                    <p><img src="images/send.png"/><strong>E-mail <span id="infomail">cupcake@nyancat.com</span></strong></p>
                    
                    <p><img src="images/phone.png"/><strong>Telephone</strong> +44 (0)1736 758 600</p>
                    
                    <p id="databy"><strong>Kitten Meow</strong> (Registered Address) Foundry Square, Hayle, Cornwall, TR27 4HH</p>
                </div>
            </div>
        </div>

    </body>
</html>
