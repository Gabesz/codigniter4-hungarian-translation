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
   'alpha_space'           => '{field} mező csak alfabetikus és szókö karaktereket tartalmazhat.',
   'decimal'               => '{field} mező csak decimális számokat tartalmazhat.',
   'differs'               => '{field} mező nem egyezhet meg a(z) {param} mezővel.',
   'equals'                => '{field} mezőnek meg kell egyezni a(z) {param} mezővel.',
   'exact_length'          => '{field} mezőnek pontosan meg kell egyezni {param} karaktereinek számával.',
   'greater_than'          => 'The {field} field must contain a number greater than {param}.',
   'greater_than_equal_to' => 'The {field} field must contain a number greater than or equal to {param}.',
   'hex'                   => 'The {field} field may only contain hexidecimal characters.',
   'in_list'               => 'The {field} field must be one of: {param}.',
   'integer'               => 'The {field} field must contain an integer.',
   'is_natural'            => 'The {field} field must only contain digits.',
   'is_natural_no_zero'    => 'The {field} field must only contain digits and must be greater than zero.',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
   'is_unique'             => 'The {field} field must contain a unique value.',
   'less_than'             => 'The {field} field must contain a number less than {param}.',
   'less_than_equal_to'    => 'The {field} field must contain a number less than or equal to {param}.',
   'matches'               => 'The {field} field does not match the {param} field.',
   'max_length'            => 'The {field} field cannot exceed {param} characters in length.',
   'min_length'            => 'The {field} field must be at least {param} characters in length.',
   'not_equals'            => 'The {field} field cannot be: {param}.',
   'numeric'               => 'The {field} field must contain only numbers.',
   'regex_match'           => 'The {field} field is not in the correct format.',
   'required'              => 'The {field} field is required.',
   'required_with'         => 'The {field} field is required when {param} is present.',
   'required_without'      => 'The {field} field is required when {param} is not present.',
   'string'                => 'The {field} field must be a valid string.',
   'timezone'              => 'The {field} field must be a valid timezone.',
   'valid_base64'          => 'The {field} field must be a valid base64 string.',
   'valid_email'           => 'The {field} field must contain a valid email address.',
   'valid_emails'          => 'The {field} field must contain all valid email addresses.',
   'valid_ip'              => 'The {field} field must contain a valid IP.',
   'valid_url'             => 'The {field} field must contain a valid URL.',
   'valid_date'            => 'The {field} field must contain a valid date.',

	// Credit Cards
   'valid_cc_num'          => '{field} does not appear to be a valid credit card number.',

	// Files
   'uploaded'              => '{field} is not a valid uploaded file.',
   'max_size'              => '{field} is too large of a file.',
   'is_image'              => '{field} is not a valid, uploaded image file.',
   'mime_in'               => '{field} does not have a valid mime type.',
   'ext_in'                => '{field} does not have a valid file extension.',
   'max_dims'              => '{field} is either not an image, or it is too wide or tall.',
];
