<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Systemopdateringer tilgængelige';
$lang['emails_updates_available_message'] = <<<EOT
Hej,

Der er fundet nye systemopdateringer til {site_anchor}.

Disse opdateringer kan omfatte sikkerhedsrettelser, ydeevneforbedringer eller nye funktioner.
Vi anbefaler, at du gennemgår dem så hurtigt som muligt.

Du kan gennemgå og administrere de tilgængelige opdateringer fra admin-dashboardet:
{link}

Hvis du allerede har gennemgået eller anvendt opdateringerne, er der ikke behov for yderligere handling.

Dette er en automatisk systemmeddelelse sendt af {site_name}.
Svar venligst ikke på denne e-mail.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Kontoaktivering';
$lang['emails_account_activation_request_message'] = <<<EOT
Hej {name},

Tak for din registrering på {site_anchor}. Din konto er oprettet og skal aktiveres, før du kan bruge den.

For at aktivere din konto, skal du klikke på følgende link eller kopiere og indsætte det i din browser:
{link}

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nyt aktiveringslink';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hej {name},

Du har for nylig anmodet om et nyt aktiveringslink på {site_anchor}, fordi din konto ikke var aktiv.
For at aktivere din konto, skal du klikke på følgende link eller kopiere og indsætte det i din browser:
{link}

Hvis du ikke har anmodet om dette, kræves der ingen yderligere handling.

Denne handling blev anmodet fra denne IP-adresse: {ip_link}.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Konto aktiveret';
$lang['emails_account_activation_success_message'] = <<<EOT
Hej {name},

Din konto på {site_anchor} er blevet aktiveret med succes. Du kan nu <a href="{login_url}" target="_blank" rel="noopener">logge ind</a>, når du vil.

Vi håber, du vil nyde dit ophold.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Konto afventer godkendelse';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hej {name},

Tak fordi du har tilmeldt dig {site_anchor}. Din konto er oprettet, men skal godkendes af en administrator, før den bliver aktiv.
Vi beklager dette ekstra trin - det er udelukkende af sikkerhedsmæssige årsager.

Du vil modtage en bekræftelses-e-mail, så snart din konto er godkendt.

Vi håber, du vil nyde dit ophold.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Konto godkendt';
$lang['emails_account_approval_success_message'] = <<<EOT
Hej {name},

Gode nyheder! Din konto på {site_anchor} er netop blevet godkendt.

Du kan nu logge ind og begynde at bruge din konto med det samme:
{link}

Vi er glade for at have dig med.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Konto gendannet';
$lang['emails_account_restored_message'] = <<<EOT
Hej {name},

Denne e-mail bekræfter, at din konto på {site_anchor} er blevet gendannet.

Velkommen tilbage! Vi håber, at du vil nyde dit ophold denne gang.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Velkommen til {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hej {name},

De fleste websteder sender virkelig lange velkomst-e-mail-sekvenser, efter du har registreret dig.

Gode nyheder: vi er ikke som de fleste.
Men vi vil gerne byde dig velkommen alligevel og takke dig for at du har tilsluttet dig {site_anchor}.

Vi håber, du vil nyde dit ophold. Venlig hilsen,

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Anmodning om ændring af e-mail';
$lang['emails_email_change_request_message'] = <<<EOT
Hej {name},

Du modtager denne e-mail, fordi vi har modtaget en anmodning om ændring af e-mail for din konto på {site_anchor}.

Klik på følgende link eller kopier og indsæt det i din browser, hvis du vil fortsætte:
{link}

Hvis du ikke har anmodet om ændring af e-mailadresse, er der ikke behov for yderligere handling.

Denne handling blev anmodet fra denne IP-adresse: {ip_link}.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-mailadresse ændret';
$lang['emails_email_change_success_message'] = <<<EOT
Hej {name},

Denne e-mail bekræfter, at din e-mailadresse, der bruges på {site_anchor}, er blevet ændret.

Hvis du ikke har udført denne handling, bedes du kontakte os hurtigst muligt for at løse dette problem.

Denne handling blev udført fra denne IP-adresse: {ip_link}.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Advarsel om mislykket login';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hej {name},

Nogen har for nylig forsøgt at logge ind på din {site_name} konto med en forkert adgangskode.

Serverdato: {date}
Enhed: {browser}, {platform}
IP-adresse: {ip_link}

Hvis det ikke var dig, så vær rolig - loginforsøget mislykkedes.

Hvis det var dig, og du ikke kan huske din adgangskode, så klik på nedenstående link for at nulstille den:
{reset_link}

Hvis du har problemer med at logge ind, så kontakt vores team eller anmod om et engangs-loginlink.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Notifikation om vellykket login';
$lang['emails_login_alert_success_message'] = <<<EOT
Hej {name},

Vi sender dig denne e-mail efter en succesfuld login til din {site_name} konto.

Server dato: {date}
Enhed: {browser}, {platform}
IP adresse: {ip_link}

Hvis det var dig, kan du trygt ignorere denne e-mail.

Hvis det ikke var dig, bedes du venligst ændre din adgangskode omgående for at sikre din konto.

Kontakt os venligst, hvis du har brug for hjælp.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Hurtigt loginlink';
$lang['emails_login_magic_link_message'] = <<<EOT
Hej {name},

Her er dit magiske link til at logge ind på din {site_name} konto.

Klik på linket nedenfor for at logge ind:
{link}

Linket udløber om: {time}

Hvis du ikke anmodede om dette link, kan du ignorere denne e-mail.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'To-faktor-godkendelse';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hej {name},

Din to-faktor autentificeringskode er: <strong>{code}</strong>

Du kan altid deaktivere to-faktor autentificering i dine kontoindstillinger.

Denne handling blev udført fra denne IP-adresse: {ip_link}.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Anmodning om nulstilling af adgangskode';
$lang['emails_password_change_request_message'] = <<<EOT
Hej {name},

Du modtager denne e-mail, fordi vi har modtaget en anmodning om nulstilling af adgangskoden til din konto på {site_anchor}.

Klik på følgende link eller kopier og indsæt det i din browser, hvis du vil fortsætte:
{link}

Hvis du ikke har anmodet om nulstilling af adgangskode, er der ingen yderligere handling nødvendig.

Denne handling blev anmodet fra denne IP-adresse: {ip_link}.

Med venlig hilsen,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Adgangskode ændret';
$lang['emails_password_change_success_message'] = <<<EOT
Hej {name},

Denne e-mail bekræfter, at din adgangskode på {site_name} er blevet ændret med succes. Du kan nu <a href="{login_url}" target="_blank" rel="noopener">logge ind</a> med den nye adgangskode.

Hvis du ikke udførte denne handling, bedes du kontakte os hurtigst muligt for at løse dette problem.

Denne handling blev udført fra denne IP-adresse: {ip_link}.

Med venlig hilsen,
-- {site_name} Team.
EOT;
