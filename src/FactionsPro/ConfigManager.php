<?php

namespace FactionsPro;

use pocketmine\utils\Config;

class ConfigManager {
    
    private $config;
    private $prefix = "§l§f[§bFactions§f] §r";
    private $plugin;
    private $messages;
    
    public function __construct($config, FactionMain $plugin) {
        $this->config = $config;
        $prefix = $this->plugin->prefs->get("prefix");
        $this->plugin = $plugin;
        $this->messages = new Config($this->plugin->getDataFolder()."lang/Messages", Config::YAML);
    }
    public function setUsage($usage){
        $this->messages->setNested("helpmessage", $usage);
        $this->messages->setNested("warcommand", $usage);
        $this->messages->setNested("createcommand", $usage);
        $this->messages->setNested("invitecommand", $usage);
        $this->messages->setNested("kickcommand", $usage);
        $this->messages->setNested("enemycommand", $usage);
        $this->messages->setNested("sllycommand", $usage);
        $this->messages->setNested("topcommand", $usage);
        $this->messages->setNested("leadercommand", $usage);
        $this->messages->setNested("promotecommand", $usage);
        $this->messages->setNested("demotecommand", $usage);
        $this->messages->setNested("addpowercommand", $usage);
        $this->messages->setNested("rmpowercommand", $usage);
        $this->messages->setNested("addbaltocommand", $usage);
        $this->messages->setNested("rmbaltocommand", $usage);
        $this->messages->setNested("pfcommand", $usage);
        $this->messages->setNested("seepowercommand", $usage);
        $this->messages->setNested("listmemberscommand", $usage);
        $this->messages->setNested("listofficerscommand", $usage);
        $this->messages->setNested("listleadercommand", $usage);
        $this->messages->setNested("saycommand", $usage);
        $this->messages->setNested("forceunclaimcommand", $usage);
        $this->messages->setNested("seebalancecommand", $usage);
        $this->messages->setNested("withdrawcommand", $usage);
        $this->messages->setNested("donatecommand", $usage);
        $this->messages->save();
    }
    public function setErrors($error){
        //War Errors
        $this->messages->setNested("wartperror", $error);
        $this->messages->setNested("waruseerror", $error);
        $this->messages->setNested("war_facnoexist", $error);
        $this->messages->setNested("war_musterror", $error);
        $this->messages->setNested("war_leaderonlyerror", $error);
        $this->messages->setNested("war_enemyerror", $error);
        
        //Create Errors
        $this->messages->setNested("createerror", $error);
        $this->messages->setNested("war_leadernoteerror", $error);
        $this->messages->setNested("create_useerror", $error);
        $this->messages->setNested("create_namenoterror", $error);
        $this->messages->setNested("create_facalreadyexisterror", $error);
        $this->messages->setNested("create_factoolongerror", $error);
        $this->messages->setNested("create_leavefirst", $error);
        
        //Invite Errors
        $this->messages->setNested("invite_facfull", $error);
        $this->messages->setNested("invite_playernoterror", $error);
        $this->messages->setNested("invite_playeralreadyerror", $error);
        $this->messages->setNested("invite_onlyloerror", $error);
        $this->messages->setNested("invite_selferror", $error);
        
        //Leader errors
        $this->messages->setNested("leader_mustfacerror", $error);
        $this->messages->setNested("leader_mustleadererror", $error);
        $this->messages->setNested("leader_needtoadderror", $error);
        $this->messages->setNested("leader_playernoterror", $error);
        $this->messages->setNested("transferleader_selferror", $error);
        
        //Promote Errors
        $this->messages->setNested("pm_mustfacerror", $error);
        $this->messages->setNested("pm_mustleadererror", $error);
        $this->messages->setNested("pm_playernoterror", $error);
        $this->messages->setNested("pm_selferror", $error);
        $this->messages->setNested("pm_playeralreadyofficererror", $error);
        
        //Demote Errors
        $this->messages->setNested("dm_mustfacerror", $error);
        $this->messages->setNested("dm_mustleadererror", $error);
        $this->messages->setNested("dm_playernoterror", $error);
        $this->messages->setNested("dm_selferror", $error);
        $this->messages->setNested("dm_alreadymembererror", $error);
        
        //Kick errors
        $this->messages->setNested("kick_mustfacerror", $error);
        $this->messages->setNested("kick_mustleadererror", $error);
        $this->messages->setNested("kick_playernoterror", $error);
        $this->messages->setNested("kick_selferror", $error);
        
        //Claim Errors
        $this->messages->setNested("claim_mustfacerror", $error);
        $this->messages->setNested("claim_onlyworldserror", $error);
        $this->messages->setNested("claim_alreadyclaimederror", $error);
        //Not useable yet.->$this->messages->setNested("claim_needplayers", $error); //Fixing bugs.
        $this->messages->setNested("claim_noclaierror", $error);
        //Not useable yet.->$this->messages->setNested("claim_noclaimerror2", $error);
        
        //Force Delete Errors
        $this->messages->setNested("fd_facnoexisterror", $error);
        $this->messages->setNested("fd_mustoperror", $error);
        
        //AddPower Errors
        $this->messages->setNested("addp_facnoexisterror", $error);
        $this->messages->setNested("addp_mustoperror", $error);
        
        //Add Money / BAlance Errors
        $this->messages->setNested("addm_facnoexisterror", $error);
        $this->messages->setNested("addm_mustoperror", $error);
        
        //Remove Money Errors
        $this->messages->setNested("rmb_facnoexisterror", $error);
        $this->messages->setNested("rmb_mustoperror", $error);
        
        //Remove Power Errors
        $this->messages->setNested("rmpower_facnoexist", $error);
        $this->messages->setNested("rmpower_mustoperror", $error);
        
        //Player Faction Errors
        $this->messages->setNested("pf_playernoterror", $error);
        
        //OverClaim Errors
        $this->messages->setNested("oc_mustfacerror", $error);
        $this->messages->setNested("oc_mustleadererror", $error);
        //Not useable right now.->$this->messages->setNested("oc_needplayers", $error); //Coming Soon.
        $this->messages->setNested("oc_notenougherror", $error);
        //Not useable yet.$this->messages->setNested("oc_needpower", $error); Coming soon.
        $this->messages->setNested("oc_selferror", $error);
        //Not useable yet.->$this->messages->setNested("oc_otherfacerror", $error); Coming soon.
        $this->messages->setNested("oc_infacploterror", $error);
        $this->messages->setNested("oc_disabled", $error);
        
        //END OF FILE - More coming very soon. Keep an eye.
    }
}