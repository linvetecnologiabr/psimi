<?php
// Schema global: Person + Organization + WebSite. Mesmos tipos do site atual.
$schema_global = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['Person', 'Psychologist'],
            '@id' => 'https://michelyciardulo.com.br/#michely',
            'name' => 'Michely Ciardulo',
            'jobTitle' => 'Psicóloga Clínica',
            'description' => 'Psicóloga clínica orientada pela teoria psicanalítica. Atendimento online e presencial para adolescentes, adultos e casais.',
            'url' => 'https://michelyciardulo.com.br/',
            'image' => 'https://michelyciardulo.com.br/assets/imgs/michely/img-home05.webp',
            'telephone' => '+55 11 91341-8537',
            'email' => 'psi.michelyciardulo@gmail.com',
            'sameAs' => ['https://www.instagram.com/psi.michelyciardulo/'],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'R. Restinga, 113',
                'addressLocality' => 'Tatuapé',
                'addressRegion' => 'SP',
                'postalCode' => '03065-020',
                'addressCountry' => 'BR',
            ],
            'hasCredential' => [
                '@type' => 'EducationalOccupationalCredential',
                'credentialCategory' => 'Registro profissional',
                'name' => 'CRP 06/176130',
            ],
            'alumniOf' => array_map(function ($f) {
                return ['@type' => 'EducationalOrganization', 'name' => $f['instituicao']];
            }, $formacoes),
        ],
        [
            '@type' => 'MedicalBusiness',
            '@id' => 'https://michelyciardulo.com.br/#consultorio',
            'name' => 'Psicóloga Michely Ciardulo',
            'description' => 'Atendimento psicológico com abordagem psicanalítica, online e presencial em São Paulo.',
            'url' => 'https://michelyciardulo.com.br/',
            'image' => 'https://michelyciardulo.com.br/assets/imgs/michely/og-image.jpg',
            'telephone' => '+55 11 91341-8537',
            'email' => 'psi.michelyciardulo@gmail.com',
            'priceRange' => '$$',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'R. Restinga, 113',
                'addressLocality' => 'São Paulo',
                'addressRegion' => 'SP',
                'postalCode' => '03065-020',
                'addressCountry' => 'BR',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => -23.5402828,
                'longitude' => -46.5658437,
            ],
            'areaServed' => ['@type' => 'City', 'name' => 'São Paulo'],
            'founder' => ['@id' => 'https://michelyciardulo.com.br/#michely'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Especialidades',
                'itemListElement' => array_map(function ($esp) {
                    return [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => $esp['titulo'],
                            'description' => $esp['resumo'],
                            'url' => 'https://michelyciardulo.com.br/especialidades/' . $esp['slug'],
                        ],
                    ];
                }, $especialidades),
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => 'https://michelyciardulo.com.br/#site',
            'url' => 'https://michelyciardulo.com.br/',
            'name' => 'Psicóloga Michely Ciardulo',
            'inLanguage' => 'pt-BR',
            'publisher' => ['@id' => 'https://michelyciardulo.com.br/#michely'],
        ],
    ],
];
?>
<script type="application/ld+json"><?= json_encode($schema_global, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
