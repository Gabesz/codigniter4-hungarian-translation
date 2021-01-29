<?php

/**
 * Session language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'missingDatabaseTable'   => '`sessionSavePath` meg kell adnia a tábla nevét az adatbázis-munkamenet-kezelő működéséhez.',
   'invalidSavePath'        => 'Munkamenet: A(z) "{0}" konfigurált mentési útvonal nem könyvtár, nem létezik vagy nem hozható létre.',
   'writeProtectedSavePath' => 'Munkamenet: A(z) "{0}" konfigurált mentési útvonalat nem írhatja a PHP folyamat.',
   'emptySavePath'          => 'Munkamenet: Nincs konfigurálva mentési útvonal (save path).',
   'invalidSavePathFormat'  => 'Munkamenet: Érvénytelen Redis mentési útvonal (save path format) formátum: {0}',
];
