<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="shortcut icon" type="x-icon" href="/img/icon_logo2.png"> <!--icone du site-->
    <meta charset="UTF-8"> 
    <title>Kany Parfum | Acceuil</title>
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
        .user:hover{
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
    
    <link href="/css/home.css" rel="stylesheet" >
    
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
            <span> class="badge badge-pill badge-dark">{{Cart::count()}}</span>   
        </div>
        
        
         
        <nav>
        <ul>
            <li><a class="titles" href="#lui">POUR LUI</a></li>
            <li><a class="titles" href="#elle">POUR ELLE</a></li>
            <li><a class="titles" href="#unisexe">UNISEXE</a></li>
        </ul>    
        </nav>
        
            <div class="slider">
                <div class="slides">
                
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                
                    <div class="slide first">
                        <img src="img/paysage1.jpg" width="800px" alt="">
                    </div>
                    
                    <div class="slide">
                        <img src="img/paysage2.jpg" width="800px" alt="">
                    </div>
                    
                    <!--automatic navigation start-->
                    
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                    </div>
                
                    <!--automatic navigation end-->
                    
                    <!--manual navigation start-->
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                    
                    </div>
                    
                    <!--image slider end-->
                    
                    <script type="text/javascript">
                    radio1.checked=true;
                    var counter=1;
                    setInterval(function(){document.getElementById('radio'+counter).checked=true; counter++;
                        if(counter>2){
                            counter=1;
                        }
                    },5000);
                    
                    </script>
                    
                    <!--end slides-->
                </div>
                <!--end slider-->
            </div>
               
        <!--categorie POUR LUI-->
            
        <ul>
            <li2><a id="lui" class="categories" href="">POUR LUI</a></li2>
        </ul>

        <form action="{{route('cart.store')}}" id="panier_ajouter" method="POST">
            
            @csrf
            
            <div class="select">
                <select name="selectparflui" id="selectparflui">
                    <option selected disabled> Parfum </option>  

                    @foreach($parflui as $row)

                    <option value="{{$row->id}}">{{$row->nom}}</option>

                    @endforeach

                    <input type="hidden" name="id_parfum" value="{{$row->id}}">
                    <input type="hidden" name="nom_parfum" value="{{$row->nom}}">
 
                </select>
            </div>
            
            <h1>Contenance</h1>
            
            <div class="select">
                <select name="selectcontenance" id="selectcontenance">
                    <option selected disabled> Contenance </option>

                    @foreach($contenance as $row)
                    
                    <option value="{{$row->id}}">{{$row->nom}}</option>
                    
                    @endforeach

                    <input type="hidden" name="nom_contenance" value="{{$row->nom}}">
                    <input type="hidden" name="prix_contenance" value="{{$row->prix}}">

                </select>

            </div>
        
        </form> 

        <span><button form="panier_ajouter" type="submit" class="btn"> AJOUTER AU PANIER </button> </span>

        <div class="image">
            <img class="img-bottle-lui" src="img/bottle_lui.jpg">    
        </div>
            
            <!--categorie POUR ELLE-->
            
        <ul>
            <li2><a id="elle" class="categories" href="">POUR ELLE</a></li2>
        </ul>
                
            <h1>Parfum</h1>
            <div class="select">
                <select name="parfelle" id="">
                    <option selected disabled> Parfum </option>

                    @foreach($parfelle as $row)
                    <option value="{{$row->id}}">{{$row->nom}}</option>
                    @endforeach

                </select>
            </div>
            
            <h1>Contenance</h1>
            
            <div class="select">
                <select name="selectcontenance" id="selectcontenance">
                    <option selected disabled> Contenance </option>

                    @foreach($contenance as $row)
                    <option value="{{$row->id}}">{{$row->nom}}</option>
                    @endforeach

                </select>
            </div>
            
            
        <div class="btn">
            <span>AJOUTER AU PANIER</span>
        </div>
            
        <div class="image2">
            <img class="img-bottle-elle" src="img/bottle_elle.jpg">    
        </div>
            
            <!--categorie POUR UNISEXE-->
            
        <ul>
            <li2><a id="unisexe" class="categories" href="">UNISEXE</a></li2>
        </ul>
                
            <h1>Parfum</h1>
            <div class="select">
                <select name="parfunisexe" id="">
                    <option selected disabled> Parfum </option>

                    @foreach($parfunisexe as $row)
                    <option value="{{$row->id}}">{{$row->nom}}</option>
                    @endforeach
                </select>
            </div>
            
            
            <h1>Contenance</h1>
            
            <div class="select">
                <select name="selectcontenance" id="selectcontenance">
                    <option selected disabled> Contenance </option>

                    @foreach($contenance as $row)
                    <option value="{{$row->id}}">{{$row->nom}}</option>
                    @endforeach

                </select>
            </div>
            
        <div class="btn">
            <span>AJOUTER AU PANIER</span>
        </div>
            
        <div class="image3">
            <img class="img-bottle-unisexe" src="img/bottle_unisexe.jpg">    
        </div>
            
        <div class="logo"></div>
            <img class="img-logo" src="img/brand_logo.jpg" width="260px">
        
        
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