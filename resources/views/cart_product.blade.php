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
    
    <link rel="stylesheet" href="css/cart_product.css">
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
        <ul><center>
            <li><a class="titles" href="#lui">POUR LUI</a></li>
            <li><a class="titles" href="#elle">POUR ELLE</a></li>
            <li><a class="titles" href="#unisexe">UNISEXE</a></li>
            </center>
        </ul>    
        </nav>
        
        <!--Détails panier-->
        
        <div class="title">
            <p><center>MON &nbsp;&nbsp;&nbsp;PANIER</center></p>
        </div>
        
        
        
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>PRODUIT</th>
                    <th>QUANTITÉ</th>
                    <th>CONTENANCE</th>
                    <th>SOUS-TOTAL</th>
                    <th></th>
                </tr>
                
                <tr>
                    
                    <td>
                        <div class="cart-line">
                            <div class="cart-info">
                                <img src="img/bottlecart_lui.jpg">
                                <div class="info-text">
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Sauvage</b></p>
                                    <p><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>parfum get price</b></small><p>
                                </div>
                            </div>
                        </div>
                    <td><input type="number" min="1" value="1"></td>
                    <td><b>50 ml</b></td>
                    <td><b>50,00 MAD</b></td>
                    <td><i class="far fa-trash-alt"></i></td>                       
                    
                </tr>
                
                <tr>
                    
                    <td>
                        <div class="cart-line">
                            <div class="cart-info">
                                <img src="img/bottlecart_elle.jpg">
                                <div class="info-text">
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Sauvage</b></p>
                                    <p><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>PRIX UNITAIRE: 50,00 MAD</b></small><p>
                                </div>
                            </div>
                        </div>
                    <td><input type="number" min="1" value="1"></td>
                    <td><b>50 ml</b></td>
                    <td><b>50,00 MAD</b></td>
                    <td><i class="far fa-trash-alt"></i></td>                       
                    
                </tr>
                
                <tr>
                    <td>
                            <div class="cart-info">
                                <img src="img/bottlecart_unisexe.jpg">
                                <div class="info-text">
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Sauvage</b></p>
                                    <p><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>PRIX UNITAIRE: 50,00 MAD</b> </small><p>
                                </div>
                            </div>
                        
                    <td><input type="number" min="1" value="1"></td>
                    <td><b>50 ml</b></td>
                    <td><b>50,00 MAD</b></td>
                    <td><i class="far fa-trash-alt"></i></td> 
                  
                      
                                               
                </tr>    
            </table>
            
            <div class="prix-total">
                <table>
                    <tr>
                        <td><b>SOUS-TOTAL</b></td>
                        <td><b>150,00 MAD</b></td>
                    </tr>
                    <tr>
                        <td><b>FRAIS DE LIVRAISON</b></td>
                        <td><b>20,00 MAD</b></td>
                    </tr>
                    <tr>
                        <td><b>MONTANT TOTAL</b></td>
                        <td><b>170,00 MAD</b></td>
                    </tr>
                </table>
            
            
            </div>
            
        </div>
        
        <div class="btn1">
            <span><a href="/customer_info" style="color: white">FINALISER MA COMMANDE</span>
        </div>
        <div class="btn2">
            
            <span><a href="/" style="color: white">POURSUIVRE MES ACHATS</span>
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