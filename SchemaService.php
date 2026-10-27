<?php
class SchemaService {
    public function generate() {
        global $post;
        $data = [
            "@context" => "https://schema.org",
            "@type" => "Article",
            "headline" => get_the_title(),
            "description" => get_the_excerpt(),
            "author" => ["@type" => "Person", "name" => get_the_author()],
            "datePublished" => get_the_date('c')
        ];
        return '<script type="application/ld+json">' . wp_json_encode($data) . '</script>';
    }
}