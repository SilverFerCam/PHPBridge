<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Digital Transformation Roadmap, Consultancy, Maturity Business"/>
    <meta name="description" content="Find out the maturity of your business with our QuickScan. Fill the form to learn more!"/>
    <title>SilverStorm | Digital Transformation Maturity Quick Scan</title>
    <link rel="shortcut icon" href="img/favicon.png"/>
    <link type="text/css" rel="stylesheet" href="css/form.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="https://silver-storm.com"><img class="logo" src="https://info.silver-storm.com/hs-fs/hubfs/SILVERSTORM_Blanco-01-1.png?width=250&name=SILVERSTORM_Blanco-01-1.png" width="300px"></a>
        </div>
        <div class="formulario">
            <div class="header">
                <img src="https://info.silver-storm.com/hs-fs/hubfs/Incidencias6.png?width=300&height=300&name=Incidencias6.png">
                <h1 class="baloo">Find out the Digital Maturity of your business with our FREE QuickScan</h1>
                <h4 class="baloo">Fill out the form to immediately receive your personal report</h4>   
                <h5 class="baloo">The questionnaire will only take maximum 5 minutes and consist of 20 short questions</h6>             
            </div>
            <div class="cuestionario">
                <form action="php/form.php" method="POST">
                    <div class="duo">
                        <div class="data izq">
                            <label for="firstname">Name*:</label>
                            <input type="text" id="firstname" name="firstname" required autocomplete="off">
                        </div>   
                        <div class="data der">     
                            <label for="firstname">Email*:</label>
                            <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="name@example.com" required autocomplete="off">
                        </div>
                    </div>     
                    <div class="duo">   
                        <div class="data izq">
                            <label for="job">Job title:</label>
                            <input type="text" id="job" name="job" autocomplete="off">
                        </div>
                        <div class="data der">
                            <label for="company">Company:</label>
                            <input type="text" id="company" name="company" autocomplete="off">
                        </div>
                    </div>
                    <div class="duo">   
                        <div class="data izq">
                            <label for="country">Country*:</label>
                            <input type="text" id="country" name="country" required autocomplete="off">
                        </div>
                        <div class="data der">
                            <label for="phone">Phone Number:</label>
                            <input type="number" id="phone" name="phone" autocomplete="off" pattern="[0-9]{9}">
                        </div>
                    </div>
                    <!--
                    <div class="duo country">   
                        <div class="data izq">
                            <label for="country">Country:</label>
                            <select  name="country" id="country" class="inputcountry">
                                <option value=""></option>
                                <option value="Spain">Spain</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Mexico">Mexico</option>
                                <option value="France">France</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Israel">Israel</option>
                                <option value="other">Other (Please specify)</option>
                            </select>
                        </div>   
                        <div class="data der other" id="nodoOther">
                            <label for="other">Other:</label>
                            <input type="text" id="other" name="other" autocomplete="off">
                        </div>                     
                    </div>
                    -->
                    <div class="privacy">
                        <p><b>SilverStorm</b> is committed to protecting and respecting your privacy, and we'll only use your personal information to administer your account ant to provide the products and services you requested from us.
                        From time to time we would like to contact you about our products and services, as well as other content that may be interested to you.
                        If you consent to us contacting you for this purpose, please tick below to say hoy you would like us to contact you:</p>
                        
                        <input type="checkbox" id="check" class="check" name="check">
                        <label for="check">I agree to receive other communications from <b>SilverStorm</b></label>

                        <p>You can unsuscribe from these communications at any time. For more information on how to unsuscribe, our privacy practices, ad how we are commited to protecting and respecting your privacy, please review our <a href="https://silver-storm.com/politica-de-privacidad/">Privacy Policy.</a> By clicking Submit below, you consent to allow SilverStorm to store and process the personal information submited above to provide you the content requested.</p>
                    </div>
                    <div class="enviar">
                        <input type="submit" id="submit" class="submit" value="Submit">
                    </div>        
                </form> 
            </div>                           
        </div>    
    </div>      
</body>
<script src="js/formulario.js?v=<?php echo time(); ?>"></script>
</html>