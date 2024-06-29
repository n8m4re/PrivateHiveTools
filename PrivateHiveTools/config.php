<?php

/*#### MYSQL DATABASE SETTINGS #########*/ 

$CONF['DBHOST']		= '192.168.3.1'; 		/** DATABASE HOSTNAME OR IP **/
$CONF['DBPORT'] 	= 3306; 		/** DATABASE PORT **/
$CONF['DBPASS'] 	= 'demo'; 		/** DATABASE PASSWORD **/
$CONF['DBUSER'] 	= 'demo'; 		/** DATABASE USER **/
$CONF['DBNAME'] 	= 'demo_epoch'; 		/** DATABASE NAME **/


/*#### GAME SETTINGS  #################*/

$CONF['GAME'] 		= 1; 			/** 1=A2EPOCH, 2=DAYZMOD **/
$CONF['GAMEIP']		= '192.168.3.1'; 		/** IP OF GAMESERVER **/
$CONF['GAMEPORT']	= 2027; 		/** PORT OF GAMESERVER **/
$CONF['GAMERCON'] 	= 'aaaa'; 	/** RCON PASSWORD OF GAMESERVER **/
$CONF['GAMEMAP'] 	= 1; 		/** 1=chernarus,2=chernarusplus,3=lingor,4=namalsk,5=ovaron,6=panthera2,7=utes,8=altis,9=stratis,10=sauerland,11=takistan,12=zargabad,13=napf **/
$CONF['INSTANCE'] 	= 1; 		/** SERVER INSTANCE ( see /MPMissions/init.sqf ) **/
 
 
/*#### PHT SETTINGS ###################*/
$CONF['PHT_RESET_KEY'] 		= '12345678'; 	/** pw reset key **/	
$CONF['PHT_FORCE_LANG'] 	= ''; 				/** de / en / no **/
$CONF['PHT_MAXTABLEDATA'] 	= 10;
$CONF['PHT_SQLITE']		  	= true;
$CONF['PHT_SQLITEDB']	  	= 'ab6d89dd47dcbd7d464100e19bde965a0179505e989579de433f6205d7804b76_db.sqlite';
$CONF['PHT_SETUP'] 			= false; 
$CONF['PHT_AUTH']	  		= true;				
$CONF['PHT_TOKEN']    		= 'd9be3270539e2a673d62a8a7c89e664918544a17c8b5c8964d8945b13624d988';	/** needed when PHT_AUTH set to false **/