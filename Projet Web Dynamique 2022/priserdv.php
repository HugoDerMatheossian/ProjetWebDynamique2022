<!---Idée pour l'arrangement des créneaux ainsi que la prise de réservation donner par ALEXIS AUBLET TD3-->

<?php  
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);
if ($db_found){

    $id=$_GET['id']; 
    echo $id;
  $sql = "SELECT * FROM rdv_medecin WHERE ID_Medecin = $id";
    $result = mysqli_query($db_handle,$sql);
    while ($data = mysqli_fetch_assoc($result)){
        echo "J'ai un rdv le  :". $data['Jour']; 
        echo "à  :". $data['Heure'];
        if (mysqli_num_rows($result) == 0){
            
        }
        else{
             switch($data['Jour'])
            {
                case 'Lundi':
                    echo "J'ai un rdv Lundi";
                    switch($data['Heure']){
                        case '8h':
                            echo "J'ai déja un rdv LUNDI 8h";
                            ?> <style type="text/css">
                                .L8h{
                                    background : red;
                                    pointer-events: none;
                                }
                                </style> <?php 
                                break;
                                case '9h':
                                    ?> <style type="text/css">
                                        .L9h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                     </style> <?php 
                                 break;
                                 case '10h':
                                    ?> <style type="text/css">
                                        .L10h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                        </style> <?php 
                                 break;
                                 case '11h':
                                    ?> <style type="text/css">
                                        .L11h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                        </style> <?php 
                                 break;
                                 case '12h':
                                    ?> <style type="text/css">
                                        .L12h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                        </style> <?php 
                                 break;
                                 case '13h':
                                    ?> <style type="text/css">
                                        .L13h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                        </style> <?php 
                                 break;
                                 case '14h':
                                    ?> <style type="text/css">
                                        .L14h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                        </style> <?php 
                                break;
                                case '15h':
                                    ?> <style type="text/css">
                                        .L15h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                        </style> <?php 
                                 break;
                                case '16h':
                                    ?> <style type="text/css">
                                        .L16h{
                                            background : red;
                                           pointer-events: none;
                                                }
                                    </style> <?php 
                                 break;
                                 case '17h':
                                    ?> <style type="text/css">
                                        .L17h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                        </style> <?php 
                                 break;
                                 case '18h':
                                    ?> <style type="text/css">
                                        .L18h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                        </style> <?php 
                                 break;
                    }
                    break;
                    case'Mardi':
                        switch($data['Heure']){
                            case "8h":
                                echo "COUCOU";
                                ?> <style type="text/css">
                                    .M8h{
                                       background:red;
                                    }
                                    </style> <?php 
                                    break;
                                    case '9h':
                                        ?> <style type="text/css">
                                            .M9h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                         </style> <?php 
                                     break;
                                     case '10h':
                                        ?> <style type="text/css">
                                            .M10h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                            </style> <?php 
                                     break;
                                     case '11h':
                                        ?> <style type="text/css">
                                            .M11h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                            </style> <?php 
                                     break;
                                     case '12h':
                                        ?> <style type="text/css">
                                            .M12h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                            </style> <?php 
                                     break;
                                     case '13h':
                                        ?> <style type="text/css">
                                            .M13h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                            </style> <?php 
                                     break;
                                     case '14h':
                                        ?> <style type="text/css">
                                            .M14h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                            </style> <?php 
                                    break;
                                    case '15h':
                                        ?> <style type="text/css">
                                            .M15h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                            </style> <?php 
                                     break;
                                    case '16h':
                                        ?> <style type="text/css">
                                            .M16h{
                                                background : red;
                                               pointer-events: none;
                                                    }
                                        </style> <?php 
                                     break;
                                     case '17h':
                                        ?> <style type="text/css">
                                            .M17h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                            </style> <?php 
                                     break;
                                     case '18h':
                                        ?> <style type="text/css">
                                            .M18h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                            </style> <?php 
                                     break;
                        }
                        break;
                        case'Mercredi':
                            switch($data['Heure']){
                                case '8h':
                                    ?> <style type="text/css">
                                        .MM8h{
                                            background : red;
                                            pointer-events: none;
                                        }
                                        </style> <?php 
                                        break;
                                        case '9h':
                                            ?> <style type="text/css">
                                                .MM9h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                             </style> <?php 
                                         break;
                                         case '10h':
                                            ?> <style type="text/css">
                                                .MM10h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                                </style> <?php 
                                         break;
                                         case '11h':
                                            ?> <style type="text/css">
                                                .MM11h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                                </style> <?php 
                                         break;
                                         case '12h':
                                            ?> <style type="text/css">
                                                .MM12h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                                </style> <?php 
                                         break;
                                         case '13h':
                                            ?> <style type="text/css">
                                                .MM13h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                                </style> <?php 
                                         break;
                                         case '14h':
                                            ?> <style type="text/css">
                                                .MM14h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                                </style> <?php 
                                        break;
                                        case '15h':
                                            ?> <style type="text/css">
                                                .MM15h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                                </style> <?php 
                                         break;
                                        case '16h':
                                            ?> <style type="text/css">
                                                .MM16h{
                                                    background : red;
                                                   pointer-events: none;
                                                        }
                                            </style> <?php 
                                         break;
                                         case '17h':
                                            ?> <style type="text/css">
                                                .MM17h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                                </style> <?php 
                                         break;
                                         case '18h':
                                            ?> <style type="text/css">
                                                .MM18h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                                </style> <?php 
                                         break;
                            }
                            break;
                            case'Jeudi':
                                switch($data['Heure']){
                                    case '8h':
                                        ?> <style type="text/css">
                                            .J8h{
                                                background : red;
                                                pointer-events: none;
                                            }
                                            </style> <?php 
                                            break;
                                            case '9h':
                                                ?> <style type="text/css">
                                                    .J9h{
                                                        background : red;
                                                        pointer-events: none;
                                                    }
                                                 </style> <?php 
                                             break;
                                             case '10h':
                                                ?> <style type="text/css">
                                                    .J10h{
                                                        background : red;
                                                        pointer-events: none;
                                                    }
                                                    </style> <?php 
                                             break;
                                             case '11h':
                                                ?> <style type="text/css">
                                                    .J11h{
                                                        background : red;
                                                        pointer-events: none;
                                                    }
                                                    </style> <?php 
                                             break;
                                             case '12h':
                                                ?> <style type="text/css">
                                                    .J12h{
                                                        background : red;
                                                        pointer-events: none;
                                                    }
                                                    </style> <?php 
                                             break;
                                             case '13h':
                                                ?> <style type="text/css">
                                                    .J13h{
                                                        background : red;
                                                        pointer-events: none;
                                                    }
                                                    </style> <?php 
                                             break;
                                             case '14h':
                                                ?> <style type="text/css">
                                                    .J14h{
                                                        background : red;
                                                        pointer-events: none;
                                                    }
                                                    </style> <?php 
                                            break;
                                            case '15h':
                                                ?> <style type="text/css">
                                                    .J15h{
                                                        background : red;
                                                        pointer-events: none;
                                                    }
                                                    </style> <?php 
                                             break;
                                            case '16h':
                                                ?> <style type="text/css">
                                                    .J16h{
                                                        background : red;
                                                       pointer-events: none;
                                                            }
                                                </style> <?php 
                                             break;
                                             case '17h':
                                                ?> <style type="text/css">
                                                    .J17h{
                                                        background : red;
                                                        pointer-events: none;
                                                    }
                                                    </style> <?php 
                                             break;
                                             case '18h':
                                                ?> <style type="text/css">
                                                    .J18h{
                                                        background : red;
                                                        pointer-events: none;
                                                    }
                                                    </style> <?php 
                                             break;
                                }
                                break;
                                case'Vendredi':
                                    switch($data['Heure']){
                                        case '8h':
                                            ?> <style type="text/css">
                                                .V8h{
                                                    background : red;
                                                    pointer-events: none;
                                                }
                                                </style> <?php 
                                                break;
                                                case '9h':
                                                    ?> <style type="text/css">
                                                        .V9h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                     </style> <?php 
                                                 break;
                                                 case '10h':
                                                    ?> <style type="text/css">
                                                        .V10h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                        </style> <?php 
                                                 break;
                                                 case '11h':
                                                    ?> <style type="text/css">
                                                        .V11h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                        </style> <?php 
                                                 break;
                                                 case '12h':
                                                    ?> <style type="text/css">
                                                        .V12h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                        </style> <?php 
                                                 break;
                                                 case '13h':
                                                    ?> <style type="text/css">
                                                        .V13h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                        </style> <?php 
                                                 break;
                                                 case '14h':
                                                    ?> <style type="text/css">
                                                        .V14h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                        </style> <?php 
                                                break;
                                                case '15h':
                                                    ?> <style type="text/css">
                                                        .V15h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                        </style> <?php 
                                                 break;
                                                case '16h':
                                                    ?> <style type="text/css">
                                                        .V16h{
                                                            background : red;
                                                           pointer-events: none;
                                                                }
                                                    </style> <?php 
                                                 break;
                                                 case '17h':
                                                    ?> <style type="text/css">
                                                        .V17h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                        </style> <?php 
                                                 break;
                                                 case '18h':
                                                    ?> <style type="text/css">
                                                        .V18h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                        </style> <?php 
                                                 break;
                                    }
                                    break;
                                    case'Samedi':
                                        switch($data['Heure']){
                                            case '8h':
                                                ?> <style type="text/css">
                                                    .S8h{
                                                        background-color : red;
                                                        pointer-events: none;
                                                    }
                                                    </style> <?php 
                                            break;
                                            case '9h':
                                                        ?> <style type="text/css">
                                                            .S9h{
                                                                background : red;
                                                                pointer-events: none;
                                                            }
                                                         </style> <?php 
                                                     break;
                                                     case '10h':
                                                        ?> <style type="text/css">
                                                            .S10h{
                                                                background : red;
                                                                pointer-events: none;
                                                            }
                                                            </style> <?php 
                                                     break;
                                                     case '11h':
                                                        ?> <style type="text/css">
                                                            .S11h{
                                                                background : red;
                                                                pointer-events: none;
                                                            }
                                                            </style> <?php 
                                                     break;
                                                     case '12h':
                                                        ?> <style type="text/css">
                                                            .S12h{
                                                                background : red;
                                                                pointer-events: none;
                                                            }
                                                            </style> <?php 
                                                     break;
                                                     case '13h':
                                                        ?> <style type="text/css">
                                                            .S13h{
                                                                background : red;
                                                                pointer-events: none;
                                                            }
                                                            </style> <?php 
                                                     break;
                                                     case '14h':
                                                        ?> <style type="text/css">
                                                            .S14h{
                                                                background : red;
                                                                pointer-events: none;
                                                            }
                                                            </style> <?php 
                                                    break;
                                                    case '15h':
                                                        ?> <style type="text/css">
                                                            .S15h{
                                                                background : red;
                                                                pointer-events: none;
                                                            }
                                                            </style> <?php 
                                                     break;
                                                    case '16h':
                                                        ?> <style type="text/css">
                                                            .S16h{
                                                                background : red;
                                                               pointer-events: none;
                                                                    }
                                                        </style> <?php 
                                                     break;
                                                     case '17h':
                                                        ?> <style type="text/css">
                                                            .S17h{
                                                                background : red;
                                                                pointer-events: none;
                                                            }
                                                            </style> <?php 
                                                     break;
                                                     case '18h':
                                                        ?> <style type="text/css">
                                                            .S18h{
                                                                background : red;
                                                                pointer-events: none;
                                                            }
                                                            </style> <?php 
                                                     break;
                                        }
                                        break;
                                        case"Dimanche":
                                            switch($data['Heure']){
                                                case "8h":
                                                    ?> <style type="text/css">
                                                        .D8h{
                                                            background : red;
                                                            pointer-events: none;
                                                        }
                                                        </style> <?php 
                                                        break;
                                                        case '9h':
                                                            ?> <style type="text/css">
                                                                .D9h{
                                                                    background : red;
                                                                    pointer-events: none;
                                                                }
                                                             </style> <?php 
                                                         break;
                                                         case '10h':
                                                            ?> <style type="text/css">
                                                                .D10h{
                                                                    background : red;
                                                                    pointer-events: none;
                                                                }
                                                                </style> <?php 
                                                         break;
                                                         case '11h':
                                                            ?> <style type="text/css">
                                                                .D11h{
                                                                    background : red;
                                                                    pointer-events: none;
                                                                }
                                                                </style> <?php 
                                                         break;
                                                         case '12h':
                                                            ?> <style type="text/css">
                                                                .D12h{
                                                                    background : red;
                                                                    pointer-events: none;
                                                                }
                                                                </style> <?php 
                                                         break;
                                                         case '13h':
                                                            ?> <style type="text/css">
                                                                .D13h{
                                                                    background : red;
                                                                    pointer-events: none;
                                                                }
                                                                </style> <?php 
                                                         break;
                                                         case '14h':
                                                            ?> <style type="text/css">
                                                                .D14h{
                                                                    background : red;
                                                                    pointer-events: none;
                                                                }
                                                                </style> <?php 
                                                        break;
                                                        case '15h':
                                                            ?> <style type="text/css">
                                                                .D15h{
                                                                    background : red;
                                                                    pointer-events: none;
                                                                }
                                                                </style> <?php 
                                                         break;
                                                        case '16h':
                                                            ?> <style type="text/css">
                                                                .D16h{
                                                                    background : red;
                                                                   pointer-events: none;
                                                                        }
                                                            </style> <?php 
                                                         break;
                                                         case '17h':
                                                            ?> <style type="text/css">
                                                                .D17h{
                                                                    background : red;
                                                                    pointer-events: none;
                                                                }
                                                                </style> <?php 
                                                         break;
                                                         case '18h':
                                                            ?> <style type="text/css">
                                                                .D18h{
                                                                    background : red;
                                                                    pointer-events: none;
                                                                }
                                                                </style> <?php 
                                                         break;
                                            }
                                            break;

            }
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
                    <td id="LM" class='L8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=8h">8h</a></td>
                    <td id="MM" class='M8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=8h">8h</a></td>
                    <td id="MMM" class='MM8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=8h">8h</a></td>
                    <td id="JM" class='J8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=8h">8h</a></td>
                    <td id="VM" class='V8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=8h">8h</a></td>
                    <td id="SM" class='S8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=8h">8h</a></td>
                    <td id="DM" class='D8h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=8h">8h</a></td>
                    
                </tr>
                <tr>
                    <td id="LM" class='L9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=9h">9h</a></td>
                    <td id="MM" class='M9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=9h">9h</a></td>
                    <td id="MMM" class='MM9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=9h">9h</a></td>
                    <td id="JM" class='J9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=9h">9h</a></td>
                    <td id="VM" class='V9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=9h">9h</a></td>
                    <td id="SM" class='S9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=9h">9h</a></td>
                    <td id="DM" class='D9h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=9h">9h</a></td>
                    
                </tr>
                <tr>
                <td id="LM" class='L10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=10h">10h</a></td>
                    <td id="MM" class='M10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=10h">10h</a></td>
                    <td id="MMM" class='MM10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=10h">10h</a></td>
                    <td id="JM" class='J10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=10h">10h</a></td>
                    <td id="VM" class='V10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=10h">10h</a></td>
                    <td id="SM" class='S10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=10h">10h</a></td>
                    <td id="DM" class='D10h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=10h">10h</a></td>
                        
                </tr>
                <tr>
                <td id="LM" class='L11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=11h">11h</a></td>
                    <td id="MM" class='M11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=11h">11h</a></td>
                    <td id="MMM" class='MM11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=11h">11h</a></td>
                    <td id="JM" class='J11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=11h">11h</a></td>
                    <td id="VM" class='V11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=11h">11h</a></td>
                    <td id="SM" class='S11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=11h">11h</a></td>
                    <td id="DM" class='D11h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=11h">11h</a></td>
                </tr>
                <tr>
                <td id="LM" class='L12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=12h">12h</a></td>
                    <td id="MM" class='M12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=12h">12h</a></td>
                    <td id="MMM" class='MM12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=12h">12h</a></td>
                    <td id="JM" class='J12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=12h">12h</a></td>
                    <td id="VM" class='V12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=12h">12h</a></td>
                    <td id="SM" class='S12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=12h">12h</a></td>
                    <td id="DM" class='D12h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=12h">12h</a></td>
                    
                </tr>
                <tr>
                <td id="LM" class='L13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=13h">13h</a></td>
                    <td id="MM" class='M13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=13h">13h</a></td>
                    <td id="MMM" class='MM13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=13h">13h</a></td>
                    <td id="JM" class='J13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=13h">13h</a></td>
                    <td id="VM" class='V13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=13h">13h</a></td>
                    <td id="SM" class='S13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=13h">13h</a></td>
                    <td id="DM" class='D13h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=13h">13h</a></td>
                    
                </tr>
                <tr>
                <td id="LA" class='L14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=14h">14h</a></td>
                    <td id="MA" class='M14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=14h">14h</a></td>
                    <td id="MMA" class='MM14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=14h">14h</a></td>
                    <td id="JA" class='J14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=14h">14h</a></td>
                    <td id="VA" class='V14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=14h">14h</a></td>
                    <td id="SA" class='S14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=14h">14h</a></td>
                    <td id="DA" class='D14h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=14h">14h</a></td>
                    
                </tr>
                <tr>
                <td id="LA" class='L15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=15h">15h</a></td>
                    <td id="MA" class='M15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=15h">15h</a></td>
                    <td id="MMA" class='MM15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=15h">15h</a></td>
                    <td id="JA" class='J15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=15h">15h</a></td>
                    <td id="VA" class='V15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=15h">15h</a></td>
                    <td id="SA" class='S15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=15h">15h</a></td>
                    <td id="DA" class='D15h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=15h">15h</a></td>
                    
                    
                </tr>
                <tr>
                <td id="LA" class='L16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=16h">16h</a></td>
                    <td id="MA" class='M16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=16h">16h</a></td>
                    <td id="MMA" class='MM16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=16h">16h</a></td>
                    <td id="JA" class='J16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=16h">16h</a></td>
                    <td id="VA" class='V16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=16h">16h</a></td>
                    <td id="SA" class='S16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=16h">16h</a></td>
                    <td id="DA" class='D16h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=16h">16h</a></td>
                       
                </tr>
                <tr>
                <td id="LA" class='L17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=17h">17h</a></td>
                    <td id="MA" class='M17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=17h">17h</a></td>
                    <td id="MMA" class='MM17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=17h">17h</a></td>
                    <td id="JA" class='J17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=17h">17h</a></td>
                    <td id="VA" class='V17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=17h">17h</a></td>
                    <td id="SA" class='S17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=17h">17h</a></td>
                    <td id="DA" class='D17h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=17h">17h</a></td>
                    
    
                </tr>
                <tr>
                <td id="LA" class='L18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Lundi &heure=18h">18h</a></td>
                    <td id="MA" class='M18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mardi &heure=18h">18h</a></td>
                    <td id="MMA" class='MM18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Mercredi &heure=18h">18h</a></td>
                    <td id="JA" class='J18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Jeudi &heure=18h">18h</a></td>
                    <td id="VA" class='V18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Vendredi &heure=18h">18h</a></td>
                    <td id="SA" class='S18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Samedi &heure=18h">18h</a></td>
                    <td id="DA" class='D18h'><a href="confirmationrdv.php?&id=<?php echo $id ?>&jour=Dimanche &heure=18h">18h</a></td>
                    
                </tr>

                
            </table>  
        </div>
    </div>

        <div id="footer">
		<footer>
		<small>
			<hr>
				<!--pre>Mail:<a href="mailto:hugo.dermatheossian@omnes_sante.fr">hugo.dermatheossian@edu.ece.fr</a>   Téléphone: <em>(+33)1 44 39 06 00</em>       Adresse:37, Quai de Grenelle,75015 Paris</pre-->
			</hr>
		</small>
	</footer>
	</div>	
    </body>
</html>