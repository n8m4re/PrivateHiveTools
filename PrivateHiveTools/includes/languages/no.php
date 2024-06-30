<?php
/****************************
PrivateHiveTools 
https://n8m4re.com
*****************************/
$lang=array(
'_January'                  =>   'Januar',
'_February'                 =>   'Februar',
'_March'                    =>   'Mars',
'_April'                    =>   'April',
'_May'                      =>   'Mai',
'_June'                     =>   'Juni',
'_July'                     =>   'Juli',
'_August'                   =>   'August',
'_September'                =>   'September',
'_October'                  =>   'Oktober',
'_November'                 =>   'November',
'_December'                 =>   'Desember',
'_Monday'                   =>   'Mandag',
'_Tuesday'                  =>   'Tirsdag',
'_Wednesday'                =>   'Onsdag',
'_Thursday'                 =>   'Torsdag',
'_Friday'                   =>   'Fredag',
'_Saturday'                 =>   'Lørdag',
'_Sunday'                   =>   'Søndag',
  
  
/****** ERROR MESSAGES ******/
'_an_error'                 =>   'Det oppstod en feil.',
'_an_error_parse'           =>   'En feil oppstod som ikke kunne analyseres!',
'_allow_url_fopen'          =>   'php.ini <a target="_blank" href=http://www.php.net/manual/en/filesystem.configuration.php#ini.allow-url-fopen">allow_url_fopen</a> må være aktivert for at dette skal fungere!',
'_install_folder'           =>   'Vennligst slett "install" mappen...',
  
  
/****** MENU TITLES ******/
'_blacklist_title'          =>   'Svarteliste',
'_admins_title'             =>   'Behandle Admins',
'_dbTools_title'            =>   'Database-Verktøy',
'_epochKeyGen_title'        =>   'Nøkkel-Generator',
'_map_title'                =>   'Kart',
'_players_title'            =>   'Spillere / Karakterer',
'_objects_title'            =>   'Objekter / Kjøretøy',
'_logout_title'             =>   'Logg ut',
'_epochTrader_title'        =>   'Epoch Butikk',
'_locationPool_title'       =>   'Lokasjons Liste ',
'_itemPool_title'           =>   'Element Liste',
'_objectPool_title'         =>   'Objekt Liste',
'_traderPool_title'         =>   'Trader Liste',
'_infoBoard_title'          =>   'Info-Tavle',
'_epochKey'                 =>   ' Låsesmed',
'_rcon'                     =>   ' RCON',
  
/****** INFO MESSAGES ******/
'_infoBlackList'            =>   'Her kan du legge til forskjellige elementer på svartelisten. Hvis noen av elementene er inkludert i inventaret til en spiller eller et objekt, vil det vises på denne siden.',
'_battlEyeNeeded'           =>   'BattlEye må være skrudd på for at dette skal fungere.',
'_playerMustLobby'          =>  'Spilleren må være i lobbyen eller være logget ut for at endringene skal tre i kraft.',
'_afterServerRestart'       =>   'Alle endringene vil tre i effekt når Serveren / Oppdraget restartes.',
'_addItemInfo'              =>   'Hvis nye oppføringer mislykkes vennligst kjør følgende kommando:<br /><pre>ALTER TABLE `Traders_DATA` DROP INDEX `item`;</pre>',
'_afterSetup'               =>  'Etter installasjonen kan endringer gjøres i "config.php" til enhver tid.',
'_ShopInfo'                 =>   'Alle endringer trer i effekt umiddelbart.',
'_success_parse'            =>   'Analysering suksessfull.',
'_success_change'           =>   'Endringene dine har blitt lagret.',
'success_teleport_player'   =>   'Teleportering vellykket.',
'success_delete_player'     =>   'Karakteren(e) har blitt slettet.',
'success_delete_object'     =>   'Objekt(ene) har blitt slettet.',
'success_delete_entries'    =>   'Oppføring(ene) har blitt slettet.',
'success_player_healed'     =>   '<span class="icon">&#xf0f9;</span> Alle sårene har grodd. Blod fylt på.<span class="icon">&#xf0f9;</span>',
'success_player_alive'      =>   '&hearts; Karakteren har blitt gjenopplivet. &hearts;',
'success_player_dead'       =>   '&#10015; Karakteren har blitt begravet. &#10015;',
'success_object_repair'     =>   '<span class="icon">&#xf0ad;</span> Objektet har blitt reparert. <span class="icon">&#xf0ad;</span>',
'success_object_refuel'     =>   '<span class="icon">&#xf0e4;</span> Objektet har blitt påfylt. <span class="icon">&#xf0e4;</span>',
'success_add'               =>   'Lagt til.',
'success_exec'              =>   'Vellykket utført.',
'_confirm'                  =>   'Vennligst bekreft.',
  
/****** CONTENT ******/
'_latestPlayers'            =>   'Siste Spillere',
'_latestObjects'            =>   'Siste Objekter',
'_inBlackListOb'            =>   'Objekter / Kjøretøy med svartelistede elementer..',
'_inBlackListP'             =>   'Spillere med svartelistede elementer.',
'_changepass'               =>   'Endre Passord',
'_addToWaste'               =>   'Legg til avfall',
'_waste'                    =>   'Avfall',
'_toPlayer'                 =>   'til Spiller',
'_toLocation'               =>   'til Lokasjon',
'_execute'                  =>   'utfør',
'_days'                     =>   'Dager',
'_addNew'                   =>   'Lag ny oppføring',
'_lastChangeMove'           =>   'Sist endret / flyttet mer enn',
'_lastLoggedIn'             =>   'Siste login mer enn',
'_totalRecords'             =>   'Antall Oppføringer',
'_corpses'                  =>   'Lik',     
'_damaged'                  =>   'Skadet',
'_empty'                    =>   'Tom',
'_classname'                =>   'Klassenavn',
'_pleaseSelectA'            =>   'Vennligst velg en',
'_addNewTrader'             =>   'Legg til ny trader',
'_newTid'                   =>   '[ Legg til ny TID]',
'_desc'                     =>   'Beskrivelse',
'_insertSqfHere'            =>   'Vennligst kopier innholdet fra server_traders.sqf hit ..',
'_addNewProduct'            =>   'Legg til et nytt produkt.',
'_sell'                     =>   'Selg',
'_buy'                      =>   'Kjøp',
'_stock'                    =>   'Lager',
'_editOffer'                =>   'Endre Tilbud',
'_inventory'                =>   'Inventar',
'_backpack'                 =>   'Ryggsekk',
'_item'                     =>   'Element ',
'_itemSlots'                =>   'Element Plasser',
'_toolSlots'                =>   'Verktøy & Våpen Plasser',
'_backSlots'                =>   'Ryggsekk Plasser',
'_newSlot'                  =>   '[ Legg til ny ]',
'_heal'                     =>   'Helbred',
'_repair'                   =>   'Reparer',
'_refuel'                   =>   'Fyll på',
'_teleport'                 =>   'Teleport',
'_dead'                     =>   'Død',
'_alive'                    =>   'Lever',
'_all'                      =>   'Alle',
'_objects'                  =>   'Objekter',
'_object'                   =>   'Objekt',
'_vehicles'                 =>   'Kjøretøy',
'_category'                 =>   'Kategori',
'_pCreated'                 =>   'Laget',
'_pLastUpdate'              =>   'Sist Oppdatert',
'_pLastLogin'               =>   'Siste Login',
'_delete'                   =>   'Slett',
'_deleteSelected'           =>   'Slett Valgte',
'_edit'                     =>   'Rediger',
'_close'                    =>   'Lukk',
'_save'                     =>   'Lagre',
'_created'                  =>   'Laget',
'_user_add'                 =>   'Laget en bruker',
'_add'                      =>   'Legg til',
'_remove'                   =>   'Fjern',
'_wipe'                     =>  'Tøm',
'_generate'                 =>   'Generere',
'_back'                     =>   'Tilbake',
'_cancel'                   =>   'Avbryt',
'_username'                 =>   'Brukernavn',
'_submit'                   =>   'Send inn',
'_change'                   =>   'Endre',
'_change_status'            =>   'Endre Status',
'_password'                 =>   'Passord',
);