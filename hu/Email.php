<?php
/**
 * Email language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'Az email ellenőrzési folyamat egy tömböt vár.',
    'invalidAddress'      => 'Érvénytelen email cím: {0}',
   'attachmentMissing'    => 'A {0} csatolmány nem található',
   'attachmentUnreadable' => 'A csatolmány nem nyitható meg: {0}',
   'noFrom'               => 'A "Feladó" fejléc nélküli emailt nem lehet elküldeni.',
   'noRecipients'         => 'Meg kell adnia a címzetteket: Címzett, Másolat vagy Titkos másolat',
   'sendFailurePHPMail'   => 'Nem lehet e-mailt küldeni PHP mail () használatával. Lehet, hogy a szerver nincs konfigurálva e-mail küldésére ezzel a módszerrel.',
   'sendFailureSendmail'  => 'Nem sikerült e-mailt küldeni a PHP Sendmail segítségével. Előfordulhat, hogy a kiszolgáló nincs konfigurálva e-mail küldésére ezzel a módszerrel.',
   'sendFailureSmtp'      => 'Nem lehet e-mailt küldeni a PHP SMTP használatával. Lehet, hogy a szerver nincs konfigurálva e-mail küldésére ezzel a módszerrel.',
   'sent'                 => 'Üzenetét sikeresen elküldtük a következő protokoll használatával: {0}',
   'noSocket'             => 'Nem lehet megnyitni egy socket-et a sendmail számára. Kérjük, ellenőrizze a beállításokat.',
   'noHostname'           => 'Nem adta meg az SMTP host nevét.',
   'SMTPError'            => 'A következő SMTP hibát tapasztaltuk: {0}',
   'noSMTPAuth'           => 'Hiba: Be kell állítani egy SMTP felhasználónevet és jelszót.',
   'failedSMTPLogin'      => 'Nem sikerült elküldeni az AUTH LOGIN parancsot. Hiba: {0}',
   'SMTPAuthUsername'     => 'Nem sikerült hitelesíteni a felhasználónevet. Hiba: {0}',
   'SMTPAuthPassword'     => 'Nem sikerült hitelesíteni a jelszót. Hiba: {0}',
   'SMTPDataFailure'      => 'Nem lehet az adatokat elküldeni: {0}',
   'exitStatus'           => 'Kilépés státusz kódja: {0}',
];
