<?php

/**
 * Image language strings.
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
   'sourceImageRequired'    => 'A beállításokban meg kell adnia egy képet forrásnak.',
   'gdRequired'             => 'A funkció használatához a \'GD image library\'-re van szükség.',
   'gdRequiredForProps'     => 'A kép tulajdonságainak meghatározásához szerverének támogatnia kell a \'GD image library\'-t.',
   'gifNotSupported'        => 'A GIF-képeket az engedélyezési korlátozások miatt gyakran nem támogatják. Lehet, hogy ehelyett JPG vagy PNG képeket kell használnia.',
   'jpgNotSupported'        => 'JPG kép nem támogatott.',
   'pngNotSupported'        => 'PNG képek nem támogatottak.',
   'webpNotSupported'       => 'WEBP képek nem támogatottak.',
   'fileNotSupported'       => 'A mellékelt fájl nem támogatott kép típusú fájl.',
   'unsupportedImageCreate' => 'Szervere nem támogatja az ilyen típusú képek feldolgozásához szükséges GD funkciót.',
   'jpgOrPngRequired'       => 'A beállításokban megadott képátméretezési protokoll csak JPEG vagy PNG képtípusokkal működik. ',
   'rotateUnsupported'      => 'Úgy tűnik, hogy a szerver nem támogatja a képelforgatást.',
   'libPathInvalid'         => 'A képtárhoz vezető útvonal nem megfelelő. Kérjük, adja meg a helyes elérési utat a képbeállításai között. {0}',
   'imageProcessFailed'     => 'A képfeldolgozás nem sikerült. Kérjük, ellenőrizze, hogy szervere támogatja-e a kiválasztott protokollt, és hogy a képtárhoz vezető útvonal helyes-e. ',
   'rotationAngleRequired'  => 'A kép elforgatásához elforgatási szög szükséges.',
   'invalidPath'            => 'A képhez vezető útvonal nem megfelelő.',
   'copyFailed'             => 'A képmásolási folyamat nem sikerült.',
   'missingFont'            => 'Nem található a használni kívánt betűtípus.',
   'saveFailed'             => 'Nem sikerült menteni a képet. Kérjük, ellenőrizze, hogy a kép és a könyvtár írható-e.',
   'invalidDirection'       => 'A flip iránya csak `függőleges` vagy `vízszintes` lehet. Megadva: {0} ',
   'exifNotSupported'       => 'A jelenlegi PHP konfiguráció nem támogatja az EXIF adatok olvasását.',
];
