<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude(['vendor'])
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
    return $config->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_whitespace_before_comma_in_array' => true,
        'normalize_index_brace' => true,
        'trim_array_spaces' => true,
        'whitespace_after_comma_in_array' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'native_function_casing' => true,
        'native_function_type_declaration_casing' => true,
        'cast_spaces' => ['space' => 'single'],
        'no_short_bool_cast' => true,
        'class_attributes_separation' => true,
        'visibility_required' => [
            'elements' => ['property', 'method'],
        ],
        'no_empty_comment' => true,
        'no_alternative_syntax' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_unneeded_curly_braces' => true,
        'no_useless_else' => true,
        'switch_continue_to_break' => true,
        'trailing_comma_in_multiline' => [
            'elements' => ['arrays'],
        ],
        'function_typehint_space' => true,
        'lambda_not_used_import' => true,
        'fully_qualified_strict_types' => true,
        'global_namespace_import' => true,
        'no_unused_imports' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'single_space_after_construct' => true,
        'no_leading_namespace_whitespace' => true,
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => true,
        'standardize_not_equals' => true,
        'unary_operator_spaces' => true,
        'no_useless_return' => true,
        'return_assignment' => true,
        'no_empty_statement' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'semicolon_after_instruction' => true,
        'space_after_semicolon' => true,
        'explicit_string_variable' => true,
        'single_quote' => true,
        'array_indentation' => true,
        'method_chaining_indentation' => true,
        'no_extra_blank_lines' => true,
        'no_spaces_around_offset' => true,
        'no_spaces_inside_parenthesis' => true,
        'single_blank_line_at_eof' => true,
        'types_spaces' => true,
        'binary_operator_spaces' => [
            'operators' => ['=' => 'single_space'],
        ],
    ])->setFinder($finder);
