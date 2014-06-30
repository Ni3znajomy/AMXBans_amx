// Author Notes:
// This file has been translated from English to Chinese by wc2345 from www.amxbans.de.

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","utf-8"); //ISO-8859-1,utf-8
define("_LOCALE","cn_CN"); //de_DE,fr_FR,en_EN...

//default
define("_SHORTSECONDS","秒");
define("_NOACCESS","您无权查看此页!");
define("_LOADTIME","生成页面");
define("_BANSINDB","禁止在数据库");
define("_BY","到");
define("_OR","或");
define("_ON","打开");
define("_OFF","关闭");
define("_YES","确定");
define("_NO","没有");
define("_OWN","所有");
define("_CLEAR","复位");
define("_OPENSTEAMCOMSITE","Steam 社区访问页面");
define("_ADMINAREA","管理区");
define("_NOSITE","页面不可用!");
define("_DELETE","删除");
define("_ADD","增加");
define("_EDIT","编辑");
define("_DEFAULTLANG","默认语言");
define("_OTHER","其他");
define("_VIEWIP","显示IP");
define("_LEVEL","等级");
define("_DETAILS","产品详细介绍");
define("_SYSTEMSETTINGS","系统");
define("_VIEWSETTINGS","视图");
define("_COMMENTSETTINGS","评论");
define("_FILESETTINGS","档");
define("_BANLISTSETTINGS","封禁名单");
define("_CONFIGURATION","组");
define("_REPAIR","修复");
define("_AUTO","自动");
define("_TEST","测试");
//user menu
define("_HOME","首页");
define("_BANLIST","封禁名单");
define("_SEARCH","搜索");
define("_SERVER","服务器");
//info amxaccess
define("_INFO_ACCESS","访问信息");
define("_ACCESSFLAGS","访问标记");
define("_ACCESSPERMS","访问权限");
define("_ACCESS_FLAGS","a - Immunity (can't be kicked/banned etc.)<br />b - Reserved slots (can use reserved slots)<br />c - amx_kick command<br />d - amx_ban and amx_unban commands<br />e - amx_slay and amx_slap commands<br />f - amx_map command<br />g - amx_cvar command (not all CVARs available)<br />h - amx_cfg command<br />i - amx_chat and other chat commands<br />j - amx_vote and other vote commands<br />k - Access to sv_password cvar (through amx_cvar command)<br />l - Access to amx_rcon command and rcon_password cvar (through amx_cvar command)<br />m - User defined Level A (for other plugins)<br />n - User defined Level B<br />o - User defined Level C<br />p - User defined Level D<br />q - User defined Level E<br />r - User defined Level F<br />s - User defined Level G<br />t - User defined Level H<br />u - Menu access<br />z - User (not admin)");
define("_FLAG_FLAGS","a - kick a player on wrong password<br />b - Clan tag<br />c - that's the SteamID<br />d - that's the IP<br />e - no password (only SteamID/IP necessary)<br />k - Name or tag (CaSe SenSiTiVe!).");
define("_ADDADMINTOSERVERS","添加到服务器管理");
define("_WITHSTATICBANTIME","静态封禁时间");
//main header
define("_LOGGED","登录用户为");
define("_NOTLOGGED","未登录");
define("_LOGOUT","注销");
define("_LOGIN","登录");
define("_MENU","菜单");
//ban list
define("_DATE","日期");
define("_PLAYER","玩家");
define("_ADMIN","管理员");
define("_REASON","原因");
define("_LENGHT","封禁时长");
define("_SITE","页面");
define("_BANS","封禁");
define("_BL_COMMENTS","评论");
define("_BL_FILES","文档");
define("_BL_KICKS","踢");
define("_TO","到");
define("_YEAR","年");
define("_YEARS","年");
define("_MONTH","月");
define("_MONTHS","月");
define("_WEEK","星期");
define("_WEEKS","星期");
define("_DAY","天");
define("_DAYS","日");
define("_HOUR","小时");
define("_HOURS","小时");
define("_MIN","分钟");
define("_MINS","分钟");
define("_OF","于");
define("_REMAINING","其余");
//ban list details
define("_PERMANENT","永久");
define("_BANDETAILS","封禁详情");
define("_STEAMID","SteamID");
define("_STEAMCOMID","Steam 社区 ID");
define("_NOTAVAILABLE","不提供");
define("_NOSTEAMID","no SteamID");
define("_STEAMID&IP","SteamID 和/或 IP");
define("_HIDDEN","隐蔽");
define("_INVOKED","引用");
define("_BANLENGHT","封禁时长");
define("_EXPIRES","过期");
define("_NOTAPPLICABLE","不适用");
define("_ALREADYEXP","已过期");
define("_IP","IP 地址");
define("_BANTYPE","封禁类型");
define("_BANBY","Banned by");
define("_BANON","Banned on");
define("_FILE_TOBIG","文件过大");
define("_FILE_TYPENOTALLOWED","文件类型不允许");
define("_FROM","从");
define("_DOWNLOAD","下载");
define("_DOWNLOADS","下载");
define("_FILE","文档");
define("_NEWFILE","新文档");
define("_COMMENT","评论");
define("_COMMENTS","评论");
define("_NEWCOMMENT","新评论");
define("_NOCOMMENTS","没有评论");
define("_BACK","后退");
define("_TIP_EDIT","编辑");
define("_TIP_DEL","删除");
define("_TIP_DOWNLOAD","下载");
define("_TIP_BACK","后退");
define("_TIP_SENDMAIL","发送 E-mail");
define("_EMAIL","E-mail");
define("_FILEUPLOAD","上传文件");
define("_UPLOAD","更新");
define("_ENTRYEDIT","编辑项");
define("_EDITBAN","编辑封禁");
define("_TOTALEXPBANS","共有过期禁令");
define("_EDITCOMMENT","编辑评论");
define("_ADDCOMMENT","评论");
define("_NOFILES","没有文件");
define("_BANDETAILSEDITS","过去的变化");
define("_EDITREASON","编辑原因");
define("_UNBANPLAYER","解除封禁");
define("_UNBANNED","取消封禁");
define("_BANHISTORY","封禁历史");
//Login
define("_USERNAME","用户名");
define("_PASSWORD","密码");
define("_REMEMBERME","记住登录状态");
define("_LOGINBLOCKED","登录受阻!");
define("_LOGINFAILEDPW","检查密码!");
define("_LOGINFAILED","登录失败!");
define("_LOGINTRY","尝试");
define("_SEC","Second");
define("_SECS","Seconds");
//admins amxx
define("_AMXADMINSETTINGS","AMX Mod X 管理员管理");
define("_NAME","名称");
define("_NICKNAME","昵称");
define("_MANAGEAMXADMINS","AMX Mod X 管理员");
define("_ADDAMXADMINS","添加 AMX Mod X 管理员");
define("_ACCESS","管理权限");
define("_FLAGS","帐号类型");
define("_SETTINGS","设置");
define("_SAVE","保存");
define("_EVER","无限");
define("_SHOWINADMINLIST","在管理列表中显示");
define("_ADMINVALIDITY","合法性");
define("_ADMINEXPIRATION","有效期至");
define("_CREATED","创建");
define("_EXTENDWITH","延长");
define("_STEAMIDIPNAME","SteamID / IP / 名字");
//server
define("_SERVERSETTINGS","服务器设置");
define("_MOD","Mod");
define("_RCONPW","RCON 密码");
define("_DEL","删除");
define("_MOTDURL","motd 网址");
define("_MOTDDELAY","motd 延迟");
define("_SERVERMENU","服务器菜单");
define("_REASONSSET","封禁原因");
define("_HOSTNAME","服务器名称");
define("_VERSION","版本");
define("_LASTSEEN","最后一次在线");
define("_TIMEZONEFIXX","修复时区");
define("_SERVERRCON","发送服务器命令(RCON)");
define("_RCON_RELOADADMINS","刷新管理员");
define("_RCON_RESTARTMAP","刷新地图/插件");
define("_RCON_STATUS","统计命令");
define("_RCON_PLUGINS","显示AMXX插件列表");
define("_RCON_MODULES","显示AMXX模块列表");
define("_RCON_METALIST","显示Metamods列表");
define("_RCON_PREDEFINED","自定义");
define("_RCON_USERDEFINED","用户自定义");
define("_RCON_SEND","发送");
define("_RCON_SERVERRESPONSE","从服务器的响应:");
define("_RCON_MAPRESTARTED","换图地图服务器将被重新启动 (命令: restart).");
define("_RCON_TIMEDOUT","服务器无响应!");
define("_RCON_CMDDENIED","RCON 命令被禁止!");
//server admins
define("_SERVERADMINSETTINGS","服务器管理员设置");
define("_ADMINS","管理员");
define("_ACTIV","活跃");
define("_CUSTOMFLAGS","自定义标记");
define("_STATICBANTIME","静态封禁时间");
define("_EDITADMINS","编辑管理员");
define("_SPECIALS","服务器专用");
//reasons
define("_REASONSSETTINGS","管理封禁原因");
define("_REASONSSETS","封禁原因' sets");
define("_NEWREASON","新原因");
define("_SAVESET","保存设置");
define("_EDITSET","编辑设置");
define("_REASONS","原因");
//settings
define("_SITESETTINGS","网站管理");
define("_BANNER","Banner");
define("_BANNERURL","Banner URL");
define("_DESIGN","设计");
define("_BANSPERPAGE","Bans per page");
define("_NEWSET","新组");
define("_COOKIENAME","Cookie 名称");
define("_STARTPAGE","首页");
define("_SHOWCOMMENTSCOUNT","查看评论数量");
define("_SHOWFILESCOUNT","查看次数文件");
define("_SHOWKICKCOUNT","查看踢出次数");
define("_FILE_USERUPLOADALLOWED","允许用户上传文件");
define("_MAXFILESIZE","最大. 文件大小");
define("_FILE_ALLOWEDTYPES","允许文件扩展名");
define("_COMMENTUSERALLOWEDWRITE","用户可以发表评论");
define("_USECAPTURE","Use Captcha");
define("_AUTOPRUNE","自动数据库修剪");
define("_USECOMMENTSYSTEM","使用注释系统");
define("_USEFILESYSTEM","使用文件系统");
define("_AUTOPRUNE_MAXOFFENCES","Maximum expired bans before permanent ban");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Ban reason for maximum expired bans");
define("_MUSTBEON","必须在!");
//admin list
define("_ADMINSINCE","管理以来");
define("_ADMINTO","直到管理员");
define("_UNLIMITED","无限");
//admins web
define("_WEBADMINADD","添加Web管理");
define("_WEBADMINSSETTINGS","Web管理员管理");
define("_WEBADMINS","网络管理员");
define("_LASTLOGIN","最后登录");
define("_WADMINADDEDFAILED","添加失败。请检查是否有充分?");
define("_NEVER","从来没有");
define("_YOURPASSWORD","出于安全原因，您将登出后，请修改自己的密码!");
define("_ENTERPASSWORD","输入新密码:");
define("_PASSWORD2","再次输入密码");
define("_NEWPASSWORD","更改密码");
define("_PASSWORDCHANGED","密码已被更改!");
define("_PASSWORDCHANGEDFAILED","密码更改失败!");
define("_EMAILSENT","一封电子邮件已经发送到指定的地址.");
//search
define("_SEARCHRESULT","搜索结果");
define("_SEARCHWITH","查找");
define("_SEARCHFOR","搜索");
define("_PLAYERSWITH","玩家同");
define("_MOREBANSHIS","or more previous bans");
define("_ACTIVEBANS","正常封禁");
define("_EXPIREDBANS","过期封禁");
//Admin list
define("_ADMLIST","管理员名单");
//captcha
define("_SCODE","安全码:");
define("_SCODEENTER","请输入安全码:");
//update
define("_WEBVERSIONINFO","网站版本信息");
define("_PLUGINVERSIONINFO","插件版本信息");
define("_VERSION_CURRENT","当前");
define("_VERSION_RELEASE","最新发布");
define("_VERSION_BETA","最新的测试");
define("_LASTCHANGELOG","更新日志");
define("_WEB","网站");
define("_YOURWEB","你的网站");
define("_PLUGIN","AMX Mod X 插件");
define("_UPDATE_RECOMMENDED","更新推荐!");
define("_UPDATE_NOTNEEDED","没有必要更新");
define("_WEBUPDATE_RECOMMENDED","网页更新的建议!");
define("_PLUGINUPDATE_RECOMMENDED","AMX Mod X 插件更新建议!");
//admin menu
define("_MENUHOME","管理员首页");
define("_MENUMAINSERVER","服务器");
define("_MENUMAINWEB","网站");
define("_MENUMAINOTHER","其余");
define("_MENUMAINMODULE","模型");
define("_MENUSERVER","服务器");
define("_MENUAMXADMINS","AMX 管理员");
define("_MENUSERVERADMINS","分配 AMX 管理员");
define("_MENUREASONS","封禁原因");
define("_MENUWEBCONFIG","设置");
define("_MENUUSERLEVEL","用户级别");
define("_MENUWEBADMINS","网络管理员");
define("_MENUUSERMENU","用户菜单");
define("_MENUMODULE","模型");
define("_MENUUPDATE","更新");
define("_MENUINFO","系统信息");
define("_MENULOGS","日志");
//admin user menu
define("_USERMENU","用户菜单");
define("_USERMENUSETTINGS","用户菜单设置");
define("_MENULOGGEDIN","用户登录");
define("_MENULOGGEDOUT","用户登出");
define("_POSITION","位置");
define("_LANGKEY1","默认语言 1");
define("_LANGKEY2","默认语言 2");
define("_URL1","网址 1");
define("_URL2","网址 2");
define("_USERMENUADD","新用户菜单");
//admin module
define("_MODULSETTINGS","模块管理");
define("_MODULSETTINGS2","模块设置");
define("_NAMELANGKEY","默认菜单语言");
define("_INDEXSITE","索引页");
define("_ADMINSITE","管理页面");
define("_TEMPLATE","模板");
//admin info
define("_SERVERINFO","服务器信息");
define("_SERVERSETUP","服务器设置");
define("_PHPMODULES","PHP模块");
define("_OTHERFUNCTIONS","其他功能");
define("_STATISTIK","统计");
define("_CLEARCACHE","清除页面缓存");
define("_DBSIZE","数据库大小");
define("_DBOPTIMIZE","优化数据库");
define("_OPTIMIZE","优化");
define("_PRUNEDB","整理封禁");
define("_PRUNE","整理");
define("_DBPRUNED","封禁整理");
//user level
define("_ADMINLEVELSETTINGS","Web管理等级的管理");
define("_AMXADMINS","AMX 管理员");
define("_WEBSETTINGS","网络设置");
define("_LEVELVIEW","显示");
define("_LEVELUNBAN","解除封禁");
define("_LEVELIMPORT","导入");
define("_LEVELEXPORT","导出");
define("_PERM","用户等级");
define("_DBPRUNE","整理数据库");
define("_SERVEREDIT","编辑服务器");
define("_NEWLEVEL","新等级");
define("_YOURLEVEL","您的等级:您登出时将保存:");
//admin logs
define("_LOGS","网站日志");
define("_FILTER","筛选");
define("_ALL","所有日志");
define("_OLDERTHEN","以上日志");
define("_GO","进行");
define("_ACTION","动作");
define("_ACTIONLOGS","做动作");
define("_REMARKS","描述");
define("_USER","用户");
//add ban
define("_ADDBAN","添加封禁");
define("_NEWBAN","添加新封禁");
define("_NOBANNAME","没有输入名字!");
define("_ACTIVBANEXISTS","目前已经是一个正常的封禁!");
//messages
define("_BANADDSUCCESS","封禁添加成功");
define("_BANEDITED","封禁保存");
define("_AMXADMINSAVESUCCESS","AMX Mod X 管理员储存成功");
define("_AMXADMINDELETED","AMX Mod X 管理员删除");
define("_AMXADMINADDED","AMX Mod X 管理员添加");
define("_NONAME","名称丢失!");
define("_NOFLAGS","访问类型丢失!");
define("_NOSTEAM","No Steam账号进入!");
define("_NOVALIDTIME","有效时间丢失");
define("_REASONSETADDED","增加设置原因");
define("_REASONSETDELETED","删除设置原因");
define("_REASONSSETSAVED","保存设置原因");
define("_REASONADDED","增加原因");
define("_REASONDELETED","删除原因");
define("_REASONSAVED","保存原因");
define("_SADMINSAVED","服务器管理保存");
define("_SERVERSAVED","服务器设置保存");
define("_SERVERDELETED","删除服务器");
define("_CACHEDELETED","网站缓存清除");
define("_LOGDELETED","日志删除");
define("_MODULSAVED","模块设置保存");
define("_CONFIGSAVED","保存设置");
define("_LEVELADDED","创建等级");
define("_LEVELDELFAILED","错误:<br /><br />Webadmin(s) 在网站管理(s)这一等级已经存在(s)<br />等级不能删除.");
define("_LEVELDELETED","等级删除");
define("_LEVELSAVED","等级保存");
define("_USERMENUDELETED","菜单中删除用户");
define("_USERMENUADDED","菜单中添加用户");
define("_USERMENUPOSSAVED","菜单中保存用户");
define("_USERMENUSAVED","用户菜单保存");
define("_WADMINSAVED","Web 管理员保存");
define("_WADMINDELETED","Web 管理员删除");
define("_WADMINADDED","Web 管理员添加");
define("_COMDELETED","评论已删除");
define("_COMADDED","评论已添加");
define("_COMEDITED","评论编辑");
define("_WRONGCAPTCHA","错误的安全码!");
define("_FILEDELFAILED","文件不能删除!");
define("_FILENOTFOUND","文件未找到!");
define("_ERROR","错误");
define("_FILEEDITED","目录保存");
define("_FILENOFILE","没有文件!");
define("_FILETYPENOTALLOWED","文件类型不允许!");
define("_FILETOBIG","文件过大!");
define("_FILEUPLOADFAIL","上传错误!");
define("_FILEUPLOADSUCCESS","文件上传成功");
define("_FILENOTAVAILABLE","文件不可用!");
define("_FILEDELSUCCESS","文件成功删除");
define("_NOREQUIREDFIELDS","必填字段丢失!");
define("_DBOPTIMIZED","数据库优化");
//live viewer
define("_SELECTSERVER","选择服务器");
define("_ADDHLSW","添加到HLSW");
define("_CONNECT","连结");
define("_NUMBER","#");
define("_FRAGS","Frags");
define("_ONLINE","时间");
define("_ADDRESS","地址");
define("_MAP","地图");
define("_NEXTMAP","下张地图");
define("_TIMELEFT","剩余时间");
define("_TIMELIMIT","地图时间");
define("_FRIENDLYFIRE","友军伤害");
define("_GAMETYPE","游戏模式");
define("_ANTICHEAT","反作弊工具");
define("_ADDONS","插件");
define("_PROTOCOL","协议");
define("_NOPLAYERS","没有玩家");
define("_PLAYERCONNECTING","玩家正在连接...");
define("_SERVEROFFLINE","Server not available");
define("_REFRESH","刷新");
define("_NOTIMELIMIT","没有时间限制");
//live ban
define("_ADDBANONLINE","增加在线封禁");
define("_BANSETTINGS","封禁/踢出 设置");
define("_SHOW","显示");
define("_USERID","用户ID");
define("_STATUSNAME","岗位名称");
define("_BOT","Bot");
define("_PLAYER","玩家");
define("_HLTV","HLTV");
define("_UNKNOWN","onbekend");
define("_BAN","封禁");
define("_KICK","踢出");
define("_WRONGRCON","RCON 密码错误!");
define("_PLAYERKICKED","踢出玩家!");
define("_ADDBANSUCCESSKICK","封禁补充说明.玩家将被踢出!");
define("_BANANDKICK","踢出玩家后封禁");
define("_BANPLAYER","确定封禁这个玩家?");
define("_KICKPLAYER","确定踢出这个玩家?");
//title
define("_TITLEADMIN","分配管理员");
define("_TITLEADMINLIST","管理员名单");
define("_TITLEBANLIST","封禁名单");
define("_TITLELOGIN","登录");
define("_TITLESEARCH","搜索");
define("_TITLEVIEW","服务器在线状态");
define("_TITLEBANDETAIL","详情");
define("_TITLEBANADD","添加封禁");
define("_TITLEBANADDONLINE","添加线上封禁");
define("_TITLEAMXADMINS","AMX Mod X 管理员");
define("_TITLEREASONS","封禁原因");
define("_TITLESERVERADMINS","服务器管理员");
define("_TITLESERVER","服务器");
define("_TITLEINFO","信息");
define("_TITLELOGS","日志");
define("_TITLEMODULE","模型");
define("_TITLEUPDATE","版本检查");
define("_TITLEUSERLEVEL","用户等级");
define("_TITLESITE","页面设置");
define("_TITLEUSERMENU","用户菜单");
define("_TITLEWEBADMIN","Web 管理");
//value check
define("_NOUSERNAME","没有输入的用户名!");
define("_NOPASSWORD","没有输入的密码!");
define("_ACCESSINVALID","访问无效!");
define("_FLAGSBCDMISSING","访问类型必须是 B, C 或 D!");
define("_NONICKNAME","没有输入的昵称!");
define("_NOTAG","没有家族标记/输入名称!");
define("_EMAILINVALID","E-mail地址无效!");
define("_STEAMIDINVALID","SteamID 无效!");
define("_IPINVALID","IP 地址无效!");
define("_FLAGSINVALID","访问类型无效!");
define("_USERNAMETOSHORT","名称太短!");
define("_USERNAMETOLONG","名称太长!");
define("_NICKNAMETOSHORT","昵称太短!");
define("_NICKNAMETOLONG","昵称太长!");
define("_PASSWORDTOSHORT","密码太短!");
define("_PASSWORDTOLONG","密码太长!");
define("_NOREASONSET","没有输入原因名称!");
define("_REASONSETTOSHORT","原因组名称太短!");
define("_REASONSETTOLONG","原因组名称太长!");
define("_NOREASON","没有输入封禁原因!");
define("_REASONTOSHORT","封禁原因太短!");
define("_REASONTOLONG","封禁原因太长!");
define("_PASSWORDNOTMATCH","输入的密码不匹配!");
define("_NOCOMMENT","没有输入评论!");
define("_NOEDITREASON","没有输入原因!");
define("_COMMENTTOSHORT","评论太短!");
define("_COMMENTTOLONG","评论太长!");
define("_STEAMTOLONG","SteamID 太长!");
define("_STEAMTOSHORT","SteamID 太短!");
define("_NOIP","没有输入IP地址!");
define("_IPTOLONG","IP地址太长!");
define("_IPTOSHORT","IP地址太短!");
//alerts
define("_SAVEEDIT","保存更改?");
define("_DELBAN","您确定删除此封禁?");
define("_DELDEMO","您确定删除此文件?");
define("_DELCOMMENT","您确定删除此评论?");
define("_DELADMIN","您确定删除此管理员?");
define("_DELLEVEL","您确定删除此等级?");
define("_DELLOGSALL","您确定删除所以日志?");
define("_DELLOGS","您确定删除这些日志?");
define("_SAVESETTINGS","保存设置和应用?");
define("_DATALOSS","\n该数据无法恢复!");
define("_DELSERVER","您确定删除此服务器?");
//motd
define("_NOEXPIREDBANS","封禁无过期");
define("_YOUAREBANNED","您已被封禁!!");
//new design related
define("_OS", "操作系统");
define("_VAC", "VAC");
define("_VAC_ALT", "Valve 反作弊");
define("_NA", "N/A");
define("_STATS", "统计");
define("_PERM_BANS", "永久性封禁");
define("_TEMP_BANS", "临时封禁");
define("_ACTIVE_SERVERS", "在线服务器");
define("_LATEST_BAN", "最新封禁");
define("_LATEST_KICKS", "最新踢出");
define("_BROWSE_ALL", "浏览全部");
define("_POWERED_BY", "技术支持");
define("_DESIGN_BY", "设计");
define("_NO_BANS", "在数据库中没有封禁");
define("_FIRST_PAGE", "第一页");
define("_LAST_PAGE", "最后一页");
define("_PREVIOUS_PAGE", "上一页");
define("_NEXT_PAGE", "下一页");
define("_PICK_DATE", "选择一个日期");
define("_WEB_VERSION", "网站版本");
define("_WEBSERVER", "网络服务器");
define("_MODULES", "模块");
define("_MIN_OR", "分钟 或");
define("_SIZE", "大小");
define("_UPD_CONNECT_ERROR", "无法连接更新服务器!");
define("_UPD_DB_ERROR", "找不到数据库更新.");
define("_UPD_SELECT_ERROR", "不能更新数据库.");
define("_ADMINID", "管理员的 SteamID"); 
define("_TRACKBACK", "Trackback");  
define("_SETUP_EXISTS", "<b>Security Alert!</b><br />setup.php still remains in your AMXBans Directory.<br /><br />You can still access the Admin Control Panel, but we strongly recommend you to remove it! ");
?>