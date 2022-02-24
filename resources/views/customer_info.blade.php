<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="shortcut icon" type="x-icon" href="img/icon_logo2.png"> <!--icone du site-->
    <meta charset="UTF-8"> 
    <title>Kany Parfum</title>
    <style>
        .facebook{
            color:black;
            margin-left: 500px;
        }
    
        .facebook:hover{
            color:darkgray;
            transition: color 0.2s;
        }
        .instagram{
            color:black;
            margin-left: 20px;
        }
    
        .instagram:hover{
            color:darkgray;
            transition: color 0.2s;
        }
        .titles{
            color:black;
        }
        .titles:hover{
            color:darkgray;
            transition: color 0.2s;
        }
        .cart{
            color:black;
        }
        .cart:hover{
            color:darkgray;
            transition: color 0.2s;
        }
        .categories{
            color:black;
        }
        .categories:hover{
            color:darkgray;
            transition: color 0.2s;
        }
        
    
    </style>
    
    <link rel="stylesheet" href="/css/customer_info.css">
    <script src="https://kit.fontawesome.com/4b069de36c.js" crossorigin="anonymous"></script>
</head>
    <body>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
        <div class="navbar">
            
        <div class="logo"></div>
            <img src="img/brand_logo.jpg" width="260px">
            
            
        <a class="facebook"  href="https://facebook.com/kanyparfum" target="_blank">
            <i class="fab fa-facebook-square fa-2x"></i>
        </a>
          
        <a class="instagram" href="https://www.instagram.com/kany.parfum/"  target="_blank">
            <i class="fab fa-instagram fa-2x"></i>
        </a>
           
        <div class="phone"></div>
            <i class="fab fa-whatsapp fa-2x"></i>
        <ul>
            <li><a href="">06 12 91 50 50</a></li></ul>
            
        </div>
    
        <div class="cart">
            <a href="/cart_product">
            <ion-icon name="bag-outline"></ion-icon>    
        </div>
         
        <nav>
        <ul>
            <li><a class="titles" href="#lui">POUR LUI</a></li>
            <li><a class="titles" href="#elle">POUR ELLE</a></li>
            <li><a class="titles" href="#unisexe">UNISEXE</a></li>
        </ul>    
        </nav>
        
        <div class="title">
            <p><center>MON &nbsp;&nbsp;&nbsp;PANIER</center></p>
        </div>
        
        
        <div class="text">
            <p><left><b>INFORMATIONS DE FACTURATION</b></left></p>
        </div>
        
        
        
        <form>
            
            <label for="cv"><b>Civilité</b></label>

            <select name="civilité" id="civilité">
                <option selected disabled> Civilité </option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
                <option value="Mlle">Mlle</option>
            </select>
            
            <div>
                <label><b>Nom</b></label>
                <input type="text" Nom="Nom">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label><b>Prénom</b></label>
                <input type="text" Prénom="Prénom">
            </div>
            
            
            
            <div>
                <label><b>Tél</b></label>
                <input type="text" placeholder="06 06 06 06 06" Tél="Tél">
            </div>
            
            <div>
                <label><b>E-Mail</b></label>
                <input type="email" placeholder="mail@mail.com" type="email">
            </div>
        
        </form>
        
        <div class="text">
            <p><left><b>INFORMATIONS DE LIVRAISON</b></left></p>
        </div>
        
        <form action="validate_page.html" method="get">
            
            <label for="cv"><b>Civilité</b></label>

            <select name="civilité" id="civilité">
                <option selected disabled> Civilité </option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
                <option value="Mlle">Mlle</option>
            </select>
            
            <div>
                <label for="Nom" ><b>Nom</b></label>
                <input type="text" name="Nom">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label><b>Prénom</b></label>
                <input type="text" name="Prénom">
             </div>  
            
                 
            
            
            <div>
                <label><b>Adresse</b></label>
                <input type="text" name="Adresse">
            </div>
            
            <div>
                <label><b>Code postal</b></label>
                <input type="text" name="Code postal">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                <label for="ville"><b>Ville</b></label>

            <select name="civilité" id="civilité">
                <option selected disabled> Ville </option>
                <option value="Mr">Casablanca</option>
                <option value="Mme">Meknès</option>
                <option value="Mlle">Fès</option>
            </select>
                
            </div>
            
            <div>
                <label><b>Tél</b></label>
                <input type="text" placeholder="06 06 06 06 06" name="Tél">
            </div>
        
        </form>
        
        <div class="text">
            <p><left><b>PANIER</b></left></p>
        </div>
        
        <div class="produit">
            <p><b>Sauvage, 50 ml (x2)</b></p>
            <p><b>Terre d'Hermès, 100 ml</b></p>
        </div>
        
        
        
        <div class="btn1">
            <span><a href="/validate_page" style="color: white">VALIDER MA COMMANDE</span>
        </div>
        <div class="btn2">
            <span><a href="/cart_product" style="color: white">RETOURNER AU PANIER</span>
        </div>
        
        <!--Bottom-->
       
<footer>
            
            <a class="facebook-bottom"  href="https://facebook.com/kanyparfum" target="_blank">
                <i class="fab fa-facebook-square fa-2x"></i>
            </a>
        
            <a class="instagram-bottom" href="https://www.instagram.com/kany.parfum/"  target="_blank">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
        
            <a class="phone-bottom">
                <i class="fab fa-whatsapp fa-2x"></i>
            </a>
        
            <ul>
                <li><a class="phonenumber"href="">06 12 91 50 50</a></li>
            </ul>
        
            <h2>© 2021 Kany Parfum</h2>
        </footer>        
</body>
</html>