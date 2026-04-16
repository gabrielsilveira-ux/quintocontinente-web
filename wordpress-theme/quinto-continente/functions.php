<?php

if (!defined('ABSPATH')) {
    exit;
}

function qc_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'qc_theme_setup');

function qc_transform_legacy_html($html) {
    $theme_uri = get_template_directory_uri();

    $replacements = [
        'href="assets/' => 'href="' . esc_url($theme_uri . '/assets/'),
        'src="assets/' => 'src="' . esc_url($theme_uri . '/assets/'),
        'href="../assets/' => 'href="' . esc_url($theme_uri . '/assets/'),
        'src="../assets/' => 'src="' . esc_url($theme_uri . '/assets/'),
        "href='assets/" => "href='" . esc_url($theme_uri . '/assets/'),
        "src='assets/" => "src='" . esc_url($theme_uri . '/assets/'),
        "href='../assets/" => "href='" . esc_url($theme_uri . '/assets/'),
        "src='../assets/" => "src='" . esc_url($theme_uri . '/assets/'),

        'href="index.html"' => 'href="' . esc_url(home_url('/')) . '"',
        'href="../index.html"' => 'href="' . esc_url(home_url('/')) . '"',
        'href="/index.html"' => 'href="' . esc_url(home_url('/')) . '"',

        'href="sobre/index.html"' => 'href="' . esc_url(home_url('/sobre/')) . '"',
        'href="../sobre/index.html"' => 'href="' . esc_url(home_url('/sobre/')) . '"',

        'href="servicos/index.html"' => 'href="' . esc_url(home_url('/servicos/')) . '"',
        'href="../servicos/index.html"' => 'href="' . esc_url(home_url('/servicos/')) . '"',

        'href="servicos/booking/index.html"' => 'href="' . esc_url(home_url('/booking/')) . '"',
        'href="../servicos/booking/index.html"' => 'href="' . esc_url(home_url('/booking/')) . '"',

        'src="/assets/' => 'src="' . esc_url($theme_uri . '/assets/'),
        'href="/assets/' => 'href="' . esc_url($theme_uri . '/assets/'),
    ];

    return strtr($html, $replacements);
}

function qc_render_legacy_page($relative_path) {
    $file = get_template_directory() . '/source-html/' . ltrim($relative_path, '/');

    if (!file_exists($file)) {
        status_header(404);
        echo '<h1>Arquivo não encontrado no tema.</h1>';
        return;
    }

    $html = file_get_contents($file);
    if ($html === false) {
        status_header(500);
        echo '<h1>Erro ao carregar página.</h1>';
        return;
    }

    $html = qc_transform_legacy_html($html);

    $parts = explode('</head>', $html, 2);
    if (count($parts) === 2) {
        $html = $parts[0] . "\n";
        ob_start();
        wp_head();
        $html .= ob_get_clean();
        $html .= "\n</head>" . $parts[1];
    }

    if (stripos($html, '</body>') !== false) {
        ob_start();
        wp_footer();
        $footer_hooks = ob_get_clean();
        $html = str_ireplace('</body>', $footer_hooks . "\n</body>", $html);
    }

    echo $html;
}
