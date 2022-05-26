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
            <form>
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
                    <td id="LM" classe='L9h'><a href="confirmationrdv.php?id=<?php echo $id ?>jour=<?php echo "Lundi"?>&heure=<?php echo"8h-9h"?>">8h-9h</a></td>
                    <td>8h-9h</td> 
                    <td>8h-9h</td> 
                    <td>8h-9h</td> 
                    <td>8h-9h</td> 
                    <td>8h-9h</td> 
                    <td>8h-9h</td> 
                    
                </tr>
                <tr>
                    <td>9h-10h</td>
                    <td>9h-10h</td>
                    <td>9h-10h</td>
                    <td>9h-10h</td>
                    <td>9h-10h</td>
                    <td>9h-10h</td>
                    <td>9h-10h</td>
                    
                </tr>
                <tr>
                    <td>10h-11h</td>
                    <td>10h-11h</td>
                    <td>10h-11h</td>
                    <td>10h-11h</td>
                    <td>10h-11h</td>
                    <td>10h-11h</td>
                    <td>10h-11h</td>
                        
                </tr>
                <tr>
                    <td>11h-12h</td>
                    <td>11h-12h</td>
                    <td>11h-12h</td>   
                    <td>11h-12h</td>
                    <td>11h-12h</td>
                    <td>11h-12h</td>
                    <td>11h-12h</td>
                </tr>
                <tr>
                    <td>12h-13h</td>
                    <td>12h-13h</td>
                    <td>12h-13h</td>
                    <td>12h-13h</td>
                    <td>12h-13h</td>
                    <td>12h-13h</td>
                    <td>12h-13h</td>
                    
                </tr>
                <tr>
                    <td>13h-14h</td>
                    <td>13h-14h</td>
                    <td>13h-14h</td>
                    <td>13h-14h</td>
                    <td>13h-14h</td>
                    <td>13h-14h</td>
                    <td>13h-14h</td>
                    
                </tr>
                <tr>
                    <td>14h-15h</td>
                    <td>14h-15h</td>
                    <td>14h-15h</td> 
                    <td>14h-15h</td>
                    <td>14h-15h</td>
                    <td>14h-15h</td>
                    <td>14h-15h</td>
                    
                </tr>
                <tr>
                    <td>15h-16h</td>
                    <td>15h-16h</td>
                    <td>15h-16h</td>
                    <td>15h-16h</td>
                    <td>15h-16h</td>
                    <td>15h-16h</td>
                    <td>15h-16h</td>
                    
                </tr>
                <tr>
                    <td>16h-17h</td>
                    <td>16h-17h</td>
                    <td>16h-17h</td>
                    <td>16h-17h</td>
                    <td>16h-17h</td>
                    <td>16h-17h</td>
                    <td>16h-17h</td>   
                </tr>
                <tr>
                    <td>17h-18h</td>
                    <td>17h-18h</td>
                    <td>17h-18h</td>
                    <td>17h-18h</td>
                    <td>17h-18h</td>
                    <td>17h-18h</td>
                    <td>17h-18h</td>
    
                </tr>
                <tr>
                    <td>18h-19h</td>
                    <td>18h-19h</td>
                    <td>18h-19h</td>
                    <td>18h-19h</td>
                    <td>18h-19h</td>
                    <td>18h-19h</td>
                    <td>18h-19h</td>
                </tr>

                
            </table>  
</form>
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