<!---Idée pour l'arrangement des créneaux ainsi que la prise de réservation donner par ALEXIS AUBLET TD3-->



<?php  
$database="omnes_sante";
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);

if ($db_found){

    $id=$_GET['id']; 
    $sql ="SELECT * FROM creneaux_medecin  WHERE ID_Medecin=$id ";
    $res = mysqli_query($db_handle,$sql);

    while ( $data = mysqli_fetch_assoc($res)){
        if ($data['LundiMatin']=="N"){
            ?><style type="text/css">
                #LM{
                    background:black;
                    color:black;
                    pointer-events:none;  
                }
                </style> <?php
        }else if($data['LundiMatin']=="S"){
            ?><style type="text/css">
            #LM{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['LundiAprem']=="N"){
            ?><style type="text/css">
                #LA{
                    background:black;
                    color:black;
                    pointer-events:none;  
                }
                </style> <?php
        }else if($data['LundiAprem']=="S"){
            ?><style type="text/css">
            #LA{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['MardiMatin']=="N"){
            ?><style type="text/css">
                #MM{
                    background:black;
                    color:black;
                    pointer-events:none;   
                }
                </style> <?php
        }else if($data['MardiMatin']=="S"){
            ?><style type="text/css">
            #MM{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['MardiAprem']=="N"){
            ?><style type="text/css">
                #MA{
                    background:black;
                    color:black;
                    pointer-events:none;  
                }
                </style> <?php
        }else if($data['MardiAprem']=="S"){
            ?><style type="text/css">
            #MA{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['MercrediMatin']=="N"){
            ?><style type="text/css">
                #MMM{
                    background:black;
                    color:black;
                    pointer-events:none;   
                }
                </style> <?php
        }else if($data['MercrediMatin']=="S"){
            ?><style type="text/css">
            #MMM{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['MercrediAprem']=="N"){
            ?><style type="text/css">
                #MMA{
                    background:black;
                    color:black;
                    pointer-events:none;   
                }
                </style> <?php
        }else if($data['MercrediAprem']=="S"){
            ?><style type="text/css">
            #MMA{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        } if ($data['JeudiMatin']=="N"){
            ?><style type="text/css">
                #JM{
                    background:black;
                    color:black;
                    pointer-events:none;  
                }
                </style> <?php
        }else if($data['JeudiMatin']=="S"){
            ?><style type="text/css">
            #JM{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['JeudiAprem']=="N"){
            ?><style type="text/css">
                #JA{
                    background:black;
                    color:black;
                    pointer-events:none; 
                }
                </style> <?php
        }else if($data['JeudiAprem']=="S"){
            ?><style type="text/css">
            #JA{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['VendrediMatin']=="N"){
            ?><style type="text/css">
                #VM{
                    background:black;
                    color:black;
                    pointer-events:none;  
                }
                </style> <?php
        }else if($data['VendrediMatin']=="S"){
            ?><style type="text/css">
            #VM{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        } if ($data['VendrediAprem']=="N"){
            ?><style type="text/css">
                #VA{
                    background:black;
                    color:black;
                    pointer-events:none;   
                }
                </style> <?php
        }else if($data['VendrediAprem']=="S"){
            ?><style type="text/css">
            #VA{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['SamediMatin']=="N"){
            ?><style type="text/css">
                #SM{
                    background:black;
                    color:black;
                    pointer-events:none;  
                }
                </style> <?php
        }else if($data['SamediMatin']=="S"){
            ?><style type="text/css">
            #SM{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['SamediAprem']=="N"){
            ?><style type="text/css">
                #SA{
                    background:black;
                    color:black;
                    pointer-events:none;   
                }
                </style> <?php
        }else if($data['SamediAprem']=="S"){
            ?><style type="text/css">
            #SA{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
        if ($data['DimancheMatin']=="N"){
            ?><style type="text/css">
                #DM{
                    background:black;
                    color:black;
                    pointer-events:none;  
                }
                </style> <?php
        }else if($data['DimancheMatin']=="S"){
            ?><style type="text/css">
            #DM{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        } if ($data['DimancheAprem']=="N"){
            ?><style type="text/css">
                #DA{
                    background:black;
                    color:black;
                    pointer-events:none;  
                }
                </style> <?php
        }else if($data['DimancheAprem']=="S"){
            ?><style type="text/css">
            #DA{
                background:blue;
                pointer-events:none;  
            }
            </style> <?php
        }
    }
 
}

// si existe pas 
else {
    echo"Database not found";
}

// on ferme la connection
mysqli_close($db_handle);
?>


<html>
    <head>
        
        <style type="text/css">
            table
{
    border-collapse: collapse; 
    
}
td
{
    border: 1px solid black;
}
#tableau {
background-color: antiquewhite;
text-align: center;
width: 50%;
height: 50%;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    
}
#header {
    background-color:white;
    color: blue;
    text-align: center;
    padding: 0px;
}

#nav {
    background-color: white;
    color: black;
    text-align: center;
    padding: 0px;
}


#footer {
    position: absolute;
    width: 100%;
    background-color: white;
    color: black;
    clear: both;
    text-align: center;
    padding: 0px;
    bottom: 0px;
}

.bouton{
    background-color:#00BFFF;
    border: solid;
    color: black;
    padding: 10px;
    margin: 10px;
    text-align: center;
    display: inline-block;
    font-size: 20px;
    cursor: pointer;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
}
.bouton:hover {
    background-color: #4169E1;
    color: white;
}
#boite
{
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width:60% ;
    height: 60%;
    margin-left: auto;
    margin-right: auto;
}

#emploi
{
    text-align: center;
    background-color: whitesmoke;
    margin-top: auto;
    margin-bottom: auto;
    display: flex;
    margin-left: auto;
    margin-right: auto;
}

#table
{
    text-align: center;
}
        </style>
    </head>
    <body>
    <div id="header"> 
		<h1>Omnes Santé<img src="logo.png" height="40px" ></h1>
	</div>

	<div id="nav">
			<table>
				<br>
				<a href="Accueil.html" class="bouton" style="width: 200px">Accueil</a>
				<a href="toutparcourir.html" class="bouton" style="width: 200px">Tout Parcourir</a>
				<a href="recherche.php" class="bouton" style="width: 200px">Recherche</a>
				<a href="rdv.html" class="bouton" style="width: 200px">Rendez-vous</a>
				<a href="choixTypeCompte.html" class="bouton" style="width: 200px">Votre Compte</a>
			</table>
	</div>

    <div class="Boite" id="boite">
        <div id="emploi">
            <table id="table">
                <tr>
                
                    <td>Lundi</td>
                    <td>Mardi</td>
                    <td>Mercredi</td>
                    <td>Jeudi</td>
                    <td>Vendredi</td>
                    <td>Samedi</td>
                    <td>Dimanche</td>
                </tr>
                <tr>
                    <td id="LM" classe='L8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=8h">8h</a></td>
                    <td id="MM" classe='L8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=8h">8h</a></td>
                    <td id="MMM" classe='L8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=8h">8h</a></td>
                    <td id="JM" classe='L8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=8h">8h</a></td>
                    <td id="VM" classe='L8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=8h">8h</a></td>
                    <td id="SM" classe='L8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=8h">8h</a></td>
                    <td id="DM" classe='L8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=8h">8h</a></td>
                    
                </tr>
                <tr>
                    <td id="LM" classe='L9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=9h">9h</a></td>
                    <td id="MM" classe='L9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=9h">9h</a></td>
                    <td id="MMM" classe='L9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=9h">9h</a></td>
                    <td id="JM" classe='L9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=9h">9h</a></td>
                    <td id="VM" classe='L9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=9h">9h</a></td>
                    <td id="SM" classe='L9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=9h">9h</a></td>
                    <td id="DM" classe='L9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=9h">9h</a></td>
                    
                </tr>
                <tr>
                <td id="LM" classe='L10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=10h">10h</a></td>
                    <td id="MM" classe='L10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=10h">10h</a></td>
                    <td id="MMM" classe='L10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=10h">10h</a></td>
                    <td id="JM" classe='L10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=10h">10h</a></td>
                    <td id="VM" classe='L10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=10h">10h</a></td>
                    <td id="SM" classe='L10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=10h">10h</a></td>
                    <td id="DM" classe='L10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=10h">10h</a></td>
                        
                </tr>
                <tr>
                <td id="LM" classe='L11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=11h">11h</a></td>
                    <td id="MM" classe='L11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=11h">11h</a></td>
                    <td id="MMM" classe='L11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=11h">11h</a></td>
                    <td id="JM" classe='L11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=11h">11h</a></td>
                    <td id="VM" classe='L11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=11h">11h</a></td>
                    <td id="SM" classe='L11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=11h">11h</a></td>
                    <td id="DM" classe='L11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=11h">11h</a></td>
                </tr>
                <tr>
                <td id="LM" classe='L12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=12h">12h</a></td>
                    <td id="MM" classe='L12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=12h">12h</a></td>
                    <td id="MMM" classe='L12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=12h">12h</a></td>
                    <td id="JM" classe='L12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=12h">12h</a></td>
                    <td id="VM" classe='L12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=12h">12h</a></td>
                    <td id="SM" classe='L12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=12h">12h</a></td>
                    <td id="DM" classe='L12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=12h">12h</a></td>
                    
                </tr>
                <tr>
                <td id="LM" classe='L13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=13h">13h</a></td>
                    <td id="MM" classe='L13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=13h">13h</a></td>
                    <td id="MMM" classe='L13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=13h">13h</a></td>
                    <td id="JM" classe='L13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=13h">13h</a></td>
                    <td id="VM" classe='L13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=13h">13h</a></td>
                    <td id="SM" classe='L13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=13h">13h</a></td>
                    <td id="DM" classe='L13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=13h">13h</a></td>
                    
                </tr>
                <tr>
                <td id="LA" classe='L14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=14h">14h</a></td>
                    <td id="MA" classe='M14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=14h">14h</a></td>
                    <td id="MMA" classe='MM14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=14h">14h</a></td>
                    <td id="JA" classe='J14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=14h">14h</a></td>
                    <td id="VA" classe='V14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=14h">14h</a></td>
                    <td id="SA" classe='S14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=14h">14h</a></td>
                    <td id="DA" classe='D14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=14h">14h</a></td>
                    
                </tr>
                <tr>
                <td id="LA" classe='L15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=15h">15h</a></td>
                    <td id="MA" classe='M15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=15h">15h</a></td>
                    <td id="MMA" classe='MM15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=15h">15h</a></td>
                    <td id="JA" classe='J15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=15h">15h</a></td>
                    <td id="VA" classe='V15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=15h">15h</a></td>
                    <td id="SA" classe='S15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=15h">15h</a></td>
                    <td id="DA" classe='D15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=15h">15h</a></td>
                    
                    
                </tr>
                <tr>
                <td id="LA" classe='L16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=16h">16h</a></td>
                    <td id="MA" classe='M16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=16h">16h</a></td>
                    <td id="MMA" classe='MM16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=16h">16h</a></td>
                    <td id="JA" classe='J16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=16h">16h</a></td>
                    <td id="VA" classe='V16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=16h">16h</a></td>
                    <td id="SA" classe='S16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=16h">16h</a></td>
                    <td id="DA" classe='D16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=16h">16h</a></td>
                       
                </tr>
                <tr>
                <td id="LA" classe='L17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=17h">17h</a></td>
                    <td id="MA" classe='M17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=17h">17h</a></td>
                    <td id="MMA" classe='MM17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=17h">17h</a></td>
                    <td id="JA" classe='J17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=17h">17h</a></td>
                    <td id="VA" classe='V17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=17h">17h</a></td>
                    <td id="SA" classe='S17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=17h">17h</a></td>
                    <td id="DA" classe='D17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=17h">17h</a></td>
                    
    
                </tr>
                <tr>
                <td id="LA" classe='L18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=18h">18h</a></td>
                    <td id="MA" classe='M18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=18h">18h</a></td>
                    <td id="MMA" classe='MM18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=18h">18h</a></td>
                    <td id="JA" classe='J18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=18h">18h</a></td>
                    <td id="VA" classe='V18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=18h">18h</a></td>
                    <td id="SA" classe='S18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=18h">18h</a></td>
                    <td id="DA" classe='D18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=18h">18h</a></td>
                    
                </tr>

                
            </table>  
        </div>
    </div>

        <div id="footer">
		<footer>
		<small>
			<hr>
				<pre>Mail:<a href="mailto:hugo.dermatheossian@omnes_sante.fr">hugo.dermatheossian@edu.ece.fr</a>   Téléphone: <em>(+33)1 44 39 06 00</em>       Adresse:37, Quai de Grenelle,75015 Paris</pre>
			</hr>
		</small>
	</footer>
	</div>	
    </body>
</html>