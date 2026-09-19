<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponenter';
$lang['admin_content'] = 'Indhold';
$lang['admin_database_backup'] = 'Database Sikkerhedskopier';
$lang['admin_extensions'] = 'Udvidelser';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Hjælp';
$lang['admin_languages'] = 'Sprog';
$lang['admin_logs'] = 'Systemlogfiler';
$lang['admin_media'] = 'Mediebibliotek';
$lang['admin_modules'] = 'Moduler';
$lang['admin_plugins'] = 'Plugins';
$lang['admin_reports'] = 'Aktivitetslog';
$lang['admin_settings'] = 'Systemindstillinger';
$lang['admin_sysinfo'] = 'Systeminformation';
$lang['admin_system'] = 'System';
$lang['admin_system_firewall'] = 'Systemfirewall';
$lang['admin_themes'] = 'Temaer';
$lang['admin_updates'] = 'Systemopdateringer';
$lang['admin_users'] = 'Brugere';
$lang['admin_view_site'] = 'Se Hjemmeside';
$lang['per_page'] = 'Per Side';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Tak fordi du skaber med <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Ingen aktive elementer.} other{<b>#</b> ud af <b>%s</b> elementer er aktive.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Installer';
$lang['admin_install_error'] = 'Kunne ikke installere pakken.';
$lang['admin_install_error_com'] = 'Installationen mislykkedes: %s';
$lang['admin_install_location_app'] = 'Kun denne applikation';
$lang['admin_install_location_core'] = 'Alle applikationer';
$lang['admin_install_location_select'] = '&#151; Vælg placering &#151;';
$lang['admin_install_success'] = 'Pakken blev installeret.';
$lang['admin_install_upload'] = 'Upload';
$lang['admin_install_upload_error'] = 'Kunne ikke uploade pakken.';
$lang['admin_install_upload_success'] = 'Pakken blev uploadet.';
$lang['admin_install_upload_tip'] = 'Installer en pakke ved at uploade dens <b>.zip</b>-fil her.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Kunne ikke rydde gamle sikkerhedskopifiler.';
$lang['admin_database_backup_clean_success'] = '%d sikkerhedskopifiler slettet. %d diskplads frigivet.';
$lang['admin_database_backup_create'] = 'Opret Sikkerhedskopi';
$lang['admin_database_backup_create_confirm'] = 'Er du sikker på, at du vil oprette en sikkerhedskopi nu?';
$lang['admin_database_backup_create_error'] = 'Kunne ikke oprette sikkerhedskopifil. Sørg for at mappen <b>%s</b> er skrivbar.';
$lang['admin_database_backup_create_success'] = 'Database sikkerhedskopifil <b>%s</b> oprettet med succes.';
$lang['admin_database_backup_delete_confirm'] = 'Er du sikker på, at du vil slette disse sikkerhedskopifiler?';
$lang['admin_database_backup_delete_error'] = 'Kunne ikke slette valgte sikkerhedskopifiler.';
$lang['admin_database_backup_delete_success'] = 'Sikkerhedskopifiler blev slettet med succes.';
$lang['admin_database_backup_download_error'] = 'Kunne ikke downloade den valgte sikkerhedskopifil.';
$lang['admin_database_backup_download_success'] = 'Sikkerhedskopifil downloadet med succes.';
$lang['admin_database_backup_lock_confirm'] = 'Er du sikker på, at du vil låse disse sikkerhedskopifiler?';
$lang['admin_database_backup_lock_error'] = 'Kunne ikke låse valgte sikkerhedskopifiler.';
$lang['admin_database_backup_lock_success'] = 'Sikkerhedskopifiler låst med succes.';
$lang['admin_database_backup_locked_error'] = 'Kunne ikke slette låste sikkerhedskopifiler.';
$lang['admin_database_backup_missing_error'] = 'Sikkerhedskopifilen kunne ikke findes.';
$lang['admin_database_backup_unlock_confirm'] = 'Er du sikker på, at du vil låse disse sikkerhedskopifiler op?';
$lang['admin_database_backup_unlock_error'] = 'Kunne ikke låse valgte sikkerhedskopifiler op.';
$lang['admin_database_backup_unlock_success'] = 'Sikkerhedskopifiler låst op med succes.';
$lang['admin_database_prune'] = 'Rens';
$lang['admin_database_prune_confirm'] = 'Er du sikker på, at du vil rense databasen? En sikkerhedskopi vil blive oprettet før udførelse.';
$lang['admin_database_prune_error'] = 'Kunne ikke rense database.';
$lang['admin_database_prune_next'] = 'Næste rensning: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Database renset med succes.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Slet Logfiler';
$lang['admin_logs_delete_confirm'] = 'Er du sikker på, at du vil slette valgte logfiler?';
$lang['admin_logs_delete_error'] = 'Kunne ikke slette logfiler.';
$lang['admin_logs_delete_success'] = 'Logfiler slettet med succes.';
$lang['admin_logs_error_disabled'] = 'Logning er ikke aktiveret i øjeblikket.';
$lang['admin_logs_error_empty'] = 'Ingen logfiler fundet.';
$lang['admin_logs_error_missing'] = 'Enten kunne logfilen ikke findes, eller den var tom.';
$lang['admin_logs_tip'] = 'Logning kan hurtigt skabe meget store filer. For live hjemmesider, overvej at slette gamle filer.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Er du sikker på, at du vil slette valgte e-mails?';
$lang['admin_emails_delete_error'] = 'Kunne ikke slette valgte e-mails.';
$lang['admin_emails_delete_success'] = 'Valgte e-mails slettet med succes.';
$lang['admin_emails_email_from'] = 'Sendt Fra';
$lang['admin_emails_mail_queue'] = 'E-mail Kø';
$lang['admin_emails_mailer'] = 'Masse E-mail';
$lang['admin_emails_search'] = 'Søg i e-mails efter emne eller indhold...';
$lang['admin_emails_send_error'] = 'Kunne ikke sætte e-mailen i kø. Prøv venligst igen.';
$lang['admin_emails_send_none'] = 'Ingen brugere matcher dine valgte kriterier.';
$lang['admin_emails_send_success'] = 'E-mailen er sat i kø og vil blive sendt snart.';
$lang['admin_emails_send_to_banned'] = 'Send til bandlyste brugere.';
$lang['admin_emails_send_to_deleted'] = 'Send til slettede brugere.';
$lang['admin_emails_send_to_disabled'] = 'Send til inaktive brugere.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Tilføj Bruger';
$lang['admin_users_all_users'] = 'Alle Brugere';
$lang['admin_users_ban_confirm'] = 'Er du sikker på, at du vil udelukke de valgte brugere?';
$lang['admin_users_ban_error'] = 'Kan ikke udelukke de valgte brugere.';
$lang['admin_users_ban_success'] = 'De valgte brugere blev udelukket.';
$lang['admin_users_delete_confirm'] = 'Er du sikker på, at du vil slette de valgte brugere?';
$lang['admin_users_delete_error'] = 'Kan ikke slette de valgte brugere.';
$lang['admin_users_delete_success'] = 'De valgte brugere blev slettet.';
$lang['admin_users_disable_confirm'] = 'Er du sikker på, at du vil deaktivere de valgte brugere?';
$lang['admin_users_disable_error'] = 'Kan ikke deaktivere de valgte brugere.';
$lang['admin_users_disable_success'] = 'De valgte brugere blev deaktiveret.';
$lang['admin_users_edit'] = 'Rediger Bruger';
$lang['admin_users_edit_error'] = 'Kunne ikke opdatere bruger.';
$lang['admin_users_edit_success'] = 'Bruger opdateret med succes.';
$lang['admin_users_enable_confirm'] = 'Er du sikker på, at du vil aktivere de valgte brugere?';
$lang['admin_users_enable_error'] = 'Kan ikke aktivere de valgte brugere.';
$lang['admin_users_enable_success'] = 'De valgte brugere blev aktiveret.';
$lang['admin_users_groups'] = 'Grupper';
$lang['admin_users_lock_confirm'] = 'Er du sikker på, at du vil låse valgte brugere?';
$lang['admin_users_lock_error'] = 'Kunne ikke låse valgte brugere.';
$lang['admin_users_lock_success'] = 'Valgte brugere låst med succes.';
$lang['admin_users_logged'] = 'Indloggede Brugere';
$lang['admin_users_manage'] = 'Administrer Brugere';
$lang['admin_users_remove_confirm'] = 'Er du sikker på, at du vil slette de valgte brugere og alle deres data permanent?';
$lang['admin_users_remove_error'] = 'Kan ikke slette de valgte brugere og alle deres data permanent.';
$lang['admin_users_remove_success'] = 'De valgte brugere og alle deres data blev slettet.';
$lang['admin_users_restore_confirm'] = 'Er du sikker på, at du vil gendanne de valgte brugere?';
$lang['admin_users_restore_error'] = 'Kan ikke gendanne de valgte brugere.';
$lang['admin_users_restore_success'] = 'De valgte brugere blev gendannet.';
$lang['admin_users_search'] = 'Søg efter navn, brugernavn eller e-mail...';
$lang['admin_users_unban_confirm'] = 'Er du sikker på, at du vil ophæve udelukkelsen af de valgte brugere?';
$lang['admin_users_unban_error'] = 'Kan ikke ophæve udelukkelsen af de valgte brugere.';
$lang['admin_users_unban_success'] = 'Udelukkelsen af de valgte brugere blev ophævet.';
$lang['admin_users_unlock_confirm'] = 'Er du sikker på, at du vil låse valgte brugere op?';
$lang['admin_users_unlock_error'] = 'Kunne ikke låse valgte brugere op.';
$lang['admin_users_unlock_success'] = 'Valgte brugere låst op med succes.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Ryd Logfiler';
$lang['admin_reports_clear_confirm'] = 'Er du sikker på, at du vil rydde handlingsloggen?';
$lang['admin_reports_clear_error'] = 'Kunne ikke rydde handlingslog.';
$lang['admin_reports_clear_success'] = 'Handlingslog ryddet med succes.';
$lang['admin_reports_latest_actions'] = 'Seneste Handlinger';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Er du sikker på, at du vil slette valgte filer?';
$lang['admin_media_delete_error'] = 'Kunne ikke slette filer.';
$lang['admin_media_delete_success'] = 'Filer slettet med succes.';
$lang['admin_media_file_delete_error'] = 'Kunne ikke slette fil.';
$lang['admin_media_file_delete_success'] = 'Fil slettet med succes.';
$lang['admin_media_file_update_error'] = 'Kunne ikke opdatere fil.';
$lang['admin_media_file_update_success'] = 'Fil opdateret med succes.';
$lang['admin_media_search'] = 'Søg efter navn, beskrivelse eller filnavn...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Ingen aktive moduler.} other{<b>#</b> ud af <b>%s</b> moduler er aktive.}';
$lang['admin_modules_add'] = 'Tilføj Modul';
$lang['admin_modules_delete_confirm'] = 'Er du sikker på, at du vil slette modulet: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Kunne ikke slette modulet.';
$lang['admin_modules_delete_success'] = 'Modul slettet med succes.';
$lang['admin_modules_disable_all_confirm'] = 'Er du sikker på, at du vil deaktivere alle moduler?';
$lang['admin_modules_disable_all_error'] = 'Kunne ikke deaktivere alle moduler.';
$lang['admin_modules_disable_all_success'] = 'Alle moduler blev deaktiveret med succes.';
$lang['admin_modules_disable_confirm'] = 'Er du sikker på, at du vil deaktivere modulet: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Kunne ikke deaktivere modulet.';
$lang['admin_modules_disable_success'] = 'Modul deaktiveret med succes.';
$lang['admin_modules_enable_all_confirm'] = 'Er du sikker på, at du vil aktivere alle moduler?';
$lang['admin_modules_enable_all_error'] = 'Kunne ikke aktivere alle moduler.';
$lang['admin_modules_enable_all_success'] = 'Alle moduler blev aktiveret med succes.';
$lang['admin_modules_enable_confirm'] = 'Er du sikker på, at du vil aktivere modulet: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Kunne ikke aktivere modulet.';
$lang['admin_modules_enable_success'] = 'Modul aktiveret med succes.';
$lang['admin_modules_install_tip'] = 'Moduler tilføjer nye funktioner og funktionalitet til din hjemmeside. Gennemse tilgængelige moduler i <a href="%s" target="_blank" rel="noopener">modulbiblioteket</a> eller upload en som en <b>.zip</b> pakke.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Ingen aktive plugins.} other{<b>#</b> ud af <b>%s</b> plugins er aktive.}';
$lang['admin_plugins_add'] = 'Tilføj Plugin';
$lang['admin_plugins_delete_confirm'] = 'Er du sikker på, at du vil slette pluginet: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Kunne ikke slette pluginet.';
$lang['admin_plugins_delete_success'] = 'Plugin slettet med succes.';
$lang['admin_plugins_disable_all_confirm'] = 'Er du sikker på, at du vil deaktivere alle plugins?';
$lang['admin_plugins_disable_all_error'] = 'Kunne ikke deaktivere alle plugins.';
$lang['admin_plugins_disable_all_success'] = 'Alle plugins blev deaktiveret med succes.';
$lang['admin_plugins_disable_confirm'] = 'Er du sikker på, at du vil deaktivere pluginet: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Kunne ikke deaktivere pluginet.';
$lang['admin_plugins_disable_success'] = 'Plugin deaktiveret med succes.';
$lang['admin_plugins_enable_all_confirm'] = 'Er du sikker på, at du vil aktivere alle plugins?';
$lang['admin_plugins_enable_all_error'] = 'Kunne ikke aktivere alle plugins.';
$lang['admin_plugins_enable_all_success'] = 'Alle plugins blev aktiveret med succes.';
$lang['admin_plugins_enable_confirm'] = 'Er du sikker på, at du vil aktivere pluginet: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Kunne ikke aktivere pluginet.';
$lang['admin_plugins_enable_success'] = 'Plugin aktiveret med succes.';
$lang['admin_plugins_install_tip'] = 'Plugins udvider eksisterende funktioner med ekstra muligheder eller integrationer. Installer fra <a href="%s" target="_blank" rel="noopener">plugin biblioteket</a> eller upload en <b>.zip</b> fil.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Tilføj Tema';
$lang['admin_themes_delete_confirm'] = 'Er du sikker på, at du vil slette temaet: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Kunne ikke slette tema.';
$lang['admin_themes_delete_error_active'] = 'Du kan ikke slette det aktuelt aktive tema.';
$lang['admin_themes_delete_success'] = 'Tema slettet med succes.';
$lang['admin_themes_disable_confirm'] = 'Er du sikker på, at du vil deaktivere temaet: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Kunne ikke deaktivere temaet.';
$lang['admin_themes_disable_success'] = 'Temaet er blevet deaktiveret.';
$lang['admin_themes_enable_confirm'] = 'Er du sikker på, at du vil aktivere temaet: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Kunne ikke aktivere tema.';
$lang['admin_themes_enable_success'] = 'Tema aktiveret med succes.';
$lang['admin_themes_install_tip'] = 'Temaer ændrer din hjemmesides udseende og layout. Vælg fra <a href="%s" target="_blank" rel="noopener">temabiblioteket</a> eller upload en <b>.zip</b> fil for at installere dit eget.';
$lang['admin_themes_none_tip'] = 'Denne applikation kører uden et tema. Installer et for at tilpasse den offentligt tilgængelige brugerflade.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menuer';
$lang['admin_menus_assign_error'] = 'Kunne ikke opdatere menuplaceringer.';
$lang['admin_menus_assign_success'] = 'Menuplaceringer opdateret med succes.';
$lang['admin_menus_header'] = 'Der er <b>%s</b> menupositioner tilgængelige.';
$lang['admin_menus_location'] = 'Placering';
$lang['admin_menus_locations'] = 'Menuplaceringer';
$lang['admin_menus_manage'] = 'Administrer Menuer';
$lang['admin_menus_menu'] = 'Tildelt Menu';
$lang['admin_menus_none'] = '&#151; Ingen &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Tilføj sprog';
$lang['admin_languages_default_confirm'] = 'Er du sikker på, at du vil gøre dette sprog til hjemmesidens standardsprog?';
$lang['admin_languages_default_error'] = 'Kunne ikke ændre standardsprog.';
$lang['admin_languages_default_error_nochange'] = 'Dette sprog er allerede standardsproget.';
$lang['admin_languages_default_success'] = 'Standardsprog ændret med succes.';
$lang['admin_languages_disable_all_confirm'] = 'Er du sikker på, at du vil deaktivere alle sprog?';
$lang['admin_languages_disable_all_error'] = 'Kunne ikke deaktivere alle sprog.';
$lang['admin_languages_disable_all_success'] = 'Alle sprog blev deaktiveret med succes.';
$lang['admin_languages_disable_confirm'] = 'Er du sikker på, at du vil deaktivere sproget: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Kunne ikke deaktivere sprog.';
$lang['admin_languages_disable_error_default'] = 'Standardsproget kan ikke deaktiveres.';
$lang['admin_languages_disable_error_nochange'] = 'Dette sprog er allerede deaktiveret.';
$lang['admin_languages_disable_success'] = 'Sprog deaktiveret med succes.';
$lang['admin_languages_enable_all_confirm'] = 'Er du sikker på, at du vil aktivere alle sprog?';
$lang['admin_languages_enable_all_error'] = 'Kunne ikke aktivere alle sprog.';
$lang['admin_languages_enable_all_success'] = 'Alle sprog blev aktiveret med succes.';
$lang['admin_languages_enable_confirm'] = 'Er du sikker på, at du vil aktivere sproget: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Kunne ikke aktivere sprog.';
$lang['admin_languages_enable_error_nochange'] = 'Dette sprog er allerede aktiveret.';
$lang['admin_languages_enable_success'] = 'Sprog aktiveret med succes.';
$lang['admin_languages_install_tip'] = 'Sprog tilføjer oversættelser til dit websteds grænseflade og indhold. Gennemse tilgængelige sprog i <a href="%s" target="_blank" rel="noopener">sprogkataloget</a>, eller upload en <b>.zip</b>-pakke for at installere dit eget.';
$lang['admin_languages_tip'] = 'Aktivér, deaktivér og sæt hjemmesidens standardsprog. Aktiverede sprog er tilgængelige for hjemmesidebesøgende.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Nye opdateringer tilgængelige!';
$lang['update_backup_error'] = 'Kunne ikke oprette en sikkerhedskopi af den eksisterende pakke. Opdateringen blev afbrudt.';
$lang['update_check_disabled'] = 'Automatiske opdateringstjek er deaktiveret. Aktiver dem for at se opdateringer.';
$lang['update_check_error'] = 'Kunne ikke køre opdateringstjekket på nuværende tidspunkt.';
$lang['update_check_success'] = 'Opdateringstjek gennemført med succes.';
$lang['update_install_error'] = 'Pakken kunne ikke installeres. Den tidligere version blev beholdt.';
$lang['update_install_success'] = 'Pakke opdateret med succes til den nyeste version.';
$lang['update_interval_3days'] = 'Hver 3. dag';
$lang['update_interval_biweekly'] = 'Hver 2. uge';
$lang['update_interval_daily'] = 'Hver dag';
$lang['update_interval_monthly'] = 'En gang om måneden';
$lang['update_interval_weekly'] = 'En gang om ugen';
$lang['update_not_available'] = 'Din hjemmeside er opdateret.';
$lang['update_rollback_error'] = 'Kunne ikke gendanne den tidligere version. Manuel indgriben kan være nødvendig.';
$lang['update_rollback_success'] = 'Tidligere version gendannet med succes.';
$lang['updates_available'] = 'Tilgængelige opdateringer';
$lang['updates_check_now'] = 'Tjek nu';
$lang['updates_check_now_confirm'] = 'Er du sikker på, at du vil tjekke for opdateringer nu?';
$lang['updates_current_version'] = 'Nuværende version';
$lang['updates_enable'] = 'Aktiver opdateringer';
$lang['updates_last_check'] = 'Sidste tjek: %s';
$lang['updates_latest_version'] = 'Seneste version';
$lang['updates_next_check'] = 'Næste planlagte tjek: %s';
$lang['updates_previous_version'] = 'Tidligere version';
$lang['updates_recent'] = 'Senest opdateret';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Blokering af den angivne IP-adresse mislykkedes.';
$lang['admin_firewall_ban_success'] = 'IP-adressen er blevet blokeret.';
$lang['admin_firewall_block_ip'] = 'Bloker IP-adresse';
$lang['admin_firewall_delete_confirm'] = 'Er du sikker på, at du vil fjerne blokeringen af de valgte IP-adresser?';
$lang['admin_firewall_delete_error'] = 'Fjernelse af blokeringen af de valgte IP-adresser mislykkedes.';
$lang['admin_firewall_delete_success'] = 'De valgte IP-adresser er blevet frigivet.';
$lang['admin_firewall_duration'] = 'Blokeringsvarighed';
$lang['admin_firewall_permanent'] = 'Permanent';
$lang['admin_firewall_reason'] = 'Blokeringsårsag';
$lang['admin_firewall_tip'] = 'Se og administrer IP-adresser, der er blokeret af firewallen på grund af gentagne overtrædelser eller mistænkelig aktivitet.';

// Settings
$lang['404_ban_duration'] = '404-blokeringsvarighed';
$lang['404_threshold'] = '404-fejlgrænse';
$lang['uri_ban_duration'] = 'URI-blokeringsvarighed';
$lang['uri_strike_threshold'] = 'URI-grænse';
