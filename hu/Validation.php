<?php

/**
 * Validation language strings.
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
	// Core Messages
   'noRuleSets'            => 'Nincs szabályrendszer hozzáadva az ellenőrzéshez.',
   'ruleNotFound'          => '{0} hibás szabály.',
   'groupNotFound'         => '{0} hibás szabálycsoport.',
   'groupNotArray'         => '{0} szabálycsoport nem tömb.',
   'invalidTemplate'       => '{0} szabálytalan ellenörző sablon.',

	// Rule Messages
   'alpha'                 => '{field} mező csak alfabetikus karaktereket tartalmazhat.',
   'alpha_dash'            => '{field} mező csak alfanumerikus és kötőjel és gondolatjel karaktereket tartalmazhat.',
   'alpha_numeric'         => '{field} mező csak alfanumerikus karaktereket tartalmazhat.',
   'alpha_numeric_punct'   => '{field} mező csak alfanumerikus és szóköz és (~ ! # $ % & * - _ + = | : .) karaktereket tartalmazhat.',
   'alpha_numeric_space'   => '{field} mező csak alfanumerikus és szóköz karaktereket tartalmazhat',
   'alpha_space'           => '{field} mező csak alfabetikus és szóköz karaktereket tartalmazhat.',
   'decimal'               => '{field} mező csak decimális számokat tartalmazhat.',
   'differs'               => '{field} mező nem egyezhet meg a(z) {param} mezővel.',
   'equals'                => '{field} mezőnek meg kell egyezni a(z) {param} mezővel.',
   'exact_length'          => '{field} mezőnek pontosan {param} karakter hosszú lehet.',
   'greater_than'          => '{field} mezőnek egy számot kell tartalmaznia ami nagyobb mint {param}.',
   'greater_than_equal_to' => '{field} mezőnek tartalmaznia kell egy számot ami nagyobb vagy egyenlő mint a(z) {param}.',
   'hex'                   => '{field} mező csak hexadecimális karaktereket tartalmazhat.',
   'in_list'               => '{field} mező nem található a(z) {param} listában.',
   'integer'               => '{field} mezőnek tartalmaznia kell egy számot.',
   'is_natural'            => '{field} mező csak számokat tartalmazhat.',
   'is_natural_no_zero'    => '{field} mező csak számokat tartalmazhat és nem lehet 0.',
   'is_not_unique'         => '{field} mező csak olyan érték lehet, ami már korábban már rögzítésre került az adatbázisba.',
   'is_unique'             => '{field} mező csak egyedi értéket tartalmazhat, a megadott érték már szerepel az adatbázisban.',
   'less_than'             => '{field} mező csak kissebb számot tartalmazhat mint {param}.',
   'less_than_equal_to'    => '{field} mező csak kissebb számot vagy aznos számot tartalmazhat mint  {param}.',
   'matches'               => '{field} mező és a(z) {param} mező értéke nem egyezik.',
   'max_length'            => '{field} mező karaktereinek száma nem lehet több mint {param}.',
   'min_length'            => '{field} mező karaktereinek száma nem {param}.',
   'not_equals'            => '{field} mező értéke nem lehet: {param}.',
   'numeric'               => '{field} mező csak számokat tartamazhat.',
   'regex_match'           => '{field} mező nem megfelelő formátumú.',
   'required'              => '{field} mező megadása kötelező.',
   'required_with'         => '{field} mező megadása kötelező ha {param} meg van adva.',
   'required_without'      => '{field} mező megadása kötelező ha {param} nincs meg van adva.',
   'string'                => '{field} mező csak szöveget tartalmazhat.',
   'timezone'              => '{field} mező csak valós időbélyeget tartalmazhat.',
   'valid_base64'          => '{field} mező csak érvényes base64 szöveget tartalmazhat. ',
   'valid_email'           => '{field} mező csak érvényes e-mail címet tartalmazhat.',
   'valid_emails'          => '{field} mező csak érvényes e-mail címeket tartalmazhat.',
   'valid_ip'              => '{field} mező csak érvényes IP címet tartalmazhat.',
   'valid_url'             => '{field} mező csak érvényes URL-t tartalmazhat.',
   'valid_date'            => '{field} mező  csak érvényes dátumot tartalmazhat.',

	// Credit Cards
   'valid_cc_num'          => '{field} mező nem tűnik érvényes hitelkártyaszámnak.',

	// Files
   'uploaded'              => '{field} mező érvénytelen feltöltött fájlt tartalmaz.',
   'max_size'              => '{field} mező túl nagy fájlt tartalmaz.',
   'is_image'              => '{field} mező érvénytelen képfájlt tartalmaz.',
   'mime_in'               => '{field} mező érvénytelen MIME típusa érvénytelen.',
   'ext_in'                => '{field} mező érvénytelen fájl típusa érvénytelen.',
   'max_dims'              => '{field} mező vagy nem kép vagy túl széles vagy túl magas.',
];
